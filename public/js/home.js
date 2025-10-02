document.addEventListener('DOMContentLoaded', () => {
    const genreGrid = document.getElementById('genre-grid');
    const galleryItems = genreGrid.querySelectorAll('.gallery-item');

    galleryItems.forEach((item, index) => {
        // Jeda kita perpanjang menjadi 600 milidetik (0.6 detik)
        const delay = index * 600; 

        setTimeout(() => {
            const genreId = item.dataset.genreId;
            const apiUrl = `https://api.jikan.moe/v4/anime?genres=${genreId}&order_by=popularity&limit=1`;

            fetch(apiUrl)
                .then(response => {
                    if (response.status === 429) {
                        console.warn(`Rate limit terdeteksi untuk genre ID ${genreId}. Coba lagi nanti.`);
                    }
                    if (!response.ok) {
                        throw new Error(`Network response was not ok for genre ID ${genreId}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.data && data.data.length > 0) {
                        const animeImage = data.data[0].images.jpg.large_image_url;
                        item.style.backgroundImage = `url('${animeImage}')`;
                    }
                })
                .catch(error => {
                    console.error(`Gagal mengambil gambar untuk genre ID ${genreId}:`, error);
                });
        }, delay);
    });
});