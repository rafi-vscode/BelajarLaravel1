<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
 public function profil()
 {
 $nama = "Json Pratama";
 $nim = "123456789";
 $prodi = "S1 Informatika";
 return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
 }

 public function profilTugas()
 {
    $nama = "Rafi Rizky Santosa";
    $nim = "230123456";
    $prodi = "S1 Informatika";
    $angkatan = 2023;
    $email = "rafi.santosa@example.com";

    return view('mahasiswa.profil_tugas', compact('nama', 'nim', 'prodi', 'angkatan', 'email'));
 }
    public function listTugas()
    {
        $mahasiswa = [
            ["nama" => "Rafi", "nim" => "230123001", "prodi" => "Informatika"],
            ["nama" => "Aulia", "nim" => "230123002", "prodi" => "Sistem Informasi"],
            ["nama" => "Bagas", "nim" => "230123003", "prodi" => "Elektromedis"],
            ["nama" => "Dewi", "nim" => "230123004", "prodi" => "Manajemen"],
            ["nama" => "Siti", "nim" => "230123005", "prodi" => "Hukum"],
        ];

        return view('mahasiswa.list_tugas', compact('mahasiswa'));
    }
}
