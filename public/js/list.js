document.addEventListener('DOMContentLoaded', () => {
    const animeListContainer = document.getElementById('anime-list-container');
    const listTitle = document.getElementById('list-title');
    
    // Mengambil elemen <main> untuk membaca data yang dikirim dari Blade
    const mainElement = document.querySelector('main');
    const genreId = mainElement.dataset.genreId;
    const genreName = mainElement.dataset.genreName;

    // Jika karena suatu hal data tidak ada, hentikan eksekusi
    if (!genreId || !genreName) {
        listTitle.innerText = "Genre tidak valid atau tidak ditemukan!";
        return;
    }

    // Menampilkan judul dan status loading awal
    listTitle.innerText = `Anime Genre: ${genreName}`;
    animeListContainer.innerHTML = '<p>Sedang memuat daftar anime...</p>';

    // Menyiapkan URL API untuk mengambil 15 anime terpopuler
    const apiUrl = `https://api.jikan.moe/v4/anime?genres=${genreId}&limit=15&order_by=popularity`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Gagal mengambil data dari Jikan API');
            }
            return response.json();
        })
        .then(data => {
            animeListContainer.innerHTML = ''; // Kosongkan status loading

            // Pastikan API mengembalikan data
            if (data.data && data.data.length > 0) {
                // Lakukan perulangan untuk setiap anime yang didapat
                data.data.forEach(anime => {
                    const animeCard = document.createElement('div');
                    animeCard.classList.add('anime-card-detailed');

                    // Menyiapkan sinopsis dengan fallback jika data kosong
                    const synopsis = anime.synopsis ? anime.synopsis : 'Sinopsis tidak tersedia.';

                    // Menyiapkan bagian link streaming
                    let streamingHtml = '<h4>Tonton di:</h4>';
                    if (anime.streaming && anime.streaming.length > 0) {
                        anime.streaming.forEach(stream => {
                            streamingHtml += `<a href="${stream.url}" target="_blank" class="streaming-link">${stream.name}</a>`;
                        });
                    } else {
                        streamingHtml += '<p>Link streaming resmi tidak ditemukan.</p>';
                    }

                    // Membuat struktur HTML untuk kartu anime secara lengkap
                    animeCard.innerHTML = `
                        <img src="${anime.images.jpg.large_image_url}" alt="${anime.title}">
                        <div class="anime-info">
                            <h3>${anime.title}</h3>
                            <div class="anime-synopsis">
                                <p>${synopsis}</p>
                            </div>
                            <div class="streaming-links">
                                ${streamingHtml}
                            </div>
                        </div>
                    `;
                    // Menambahkan kartu yang sudah jadi ke dalam container
                    animeListContainer.appendChild(animeCard);
                });
            } else {
                animeListContainer.innerHTML = '<p>Tidak ada anime yang ditemukan untuk genre ini.</p>';
            }
        })
        .catch(error => {
            console.error("Error:", error);
            animeListContainer.innerHTML = '<p>Terjadi kesalahan saat mengambil data. Coba muat ulang halaman.</p>';
        });
});