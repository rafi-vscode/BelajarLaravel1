<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AnimeController extends Controller
{
    /**
     * Menampilkan landing page utama dengan gambar genre dari cache.
     */
    public function landing()
    {
        // Daftar genre yang ingin kita tampilkan
        $genres = [
            ['id' => 1, 'name' => 'Action', 'desc' => 'Epic battles & adventures'],
            ['id' => 22, 'name' => 'Romance', 'desc' => 'Heartwarming stories'],
            ['id' => 10, 'name' => 'Fantasy', 'desc' => 'Magical worlds'],
            ['id' => 24, 'name' => 'Sci-Fi', 'desc' => 'Future technology'],
            ['id' => 4, 'name' => 'Comedy', 'desc' => 'Laugh-out-loud moments'],
            ['id' => 36, 'name' => 'Slice-of-Life', 'desc' => 'Relaxing everyday stories'],
        ];

        // Ambil data dari cache 'genre_images_unique'. Jika tidak ada, jalankan fungsi.
        // Data akan disimpan selama 1 hari.
        $genresWithImages = Cache::remember('genre_images_unique', now()->addDay(), function () use ($genres) {
            
            $dataWithImages = [];
            $usedAnimeIds = []; // Array untuk menyimpan ID anime yang sudah dipakai

            foreach ($genres as $genre) {
                try {
                    // Minta 10 anime terpopuler, bukan cuma 1, sebagai cadangan
                    $response = Http::get("https://api.jikan.moe/v4/anime?genres={$genre['id']}&order_by=popularity&limit=10");
                    
                    if ($response->successful() && !empty($response->json()['data'])) {
                        
                        $foundUniqueImage = false; // Penanda apakah kita sudah menemukan gambar unik
                        
                        // Loop melalui hasil API untuk mencari yang belum dipakai
                        foreach ($response->json()['data'] as $anime) {
                            if (!in_array($anime['mal_id'], $usedAnimeIds)) {
                                // Jika ID anime BELUM dipakai...
                                $genre['image_url'] = $anime['images']['jpg']['large_image_url']; // ...pakai gambar ini.
                                $usedAnimeIds[] = $anime['mal_id']; // ...catat ID-nya agar tidak dipakai lagi.
                                $foundUniqueImage = true; // ...set penanda menjadi true.
                                break; // ...keluar dari loop dalam ini dan lanjut ke genre berikutnya.
                            }
                        }

                        // Jika setelah dicek 10-10nya sudah dipakai (kemungkinan kecil), pakai saja gambar pertama
                        if (!$foundUniqueImage) {
                            $genre['image_url'] = $response->json()['data'][0]['images']['jpg']['large_image_url'];
                        }

                    } else {
                        // Fallback jika API tidak mengembalikan data untuk genre ini
                        $genre['image_url'] = ''; 
                    }
                } catch (\Exception $e) {
                    // Fallback jika ada error koneksi atau timeout
                    $genre['image_url'] = '';
                    Log::error("Gagal fetch Jikan API untuk genre {$genre['name']}: " . $e->getMessage());
                }
                
                $dataWithImages[] = $genre;
                
                // Wajib! Beri jeda 1 detik antar request saat membangun cache pertama kali.
                sleep(1); 
            }
            return $dataWithImages;
        });

        // Kirim data genre yang sudah ada gambarnya ke view 'landing'
        return view('landing', ['genres' => $genresWithImages]);
    }
    
    /**
     * Menampilkan halaman daftar anime berdasarkan genre.
     * (Method ini tidak perlu diubah)
     */
    public function showByGenre($id, $name)
    {
        return view('genres.list', [
            'genreId' => $id,
            'genreName' => $name,
        ]);
    }
}