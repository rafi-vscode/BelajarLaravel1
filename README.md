<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infografis Laporan Proyek - Rapi-App CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600,700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #CCF3F3;
        }
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            height: 300px;
            max-height: 400px;
        }
        @media (min-width: 768px) {
            .chart-container {
                height: 350px;
            }
        }
        .flow-arrow {
            font-size: 2rem;
            color: #00A1E4;
            line-height: 1;
        }
        .erd-line {
            height: 2px;
            background-color: #00BADE;
            flex-grow: 1;
            min-width: 20px;
        }
        .erd-connector {
            display: flex;
            align-items: center;
            width: 100%;
        }
        .erd-entity {
            border: 2px solid #00BADE;
            background-color: #ffffff;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-align: center;
            font-weight: 600;
            color: #00A1E4;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }
        .erd-label {
            position: absolute;
            top: -10px;
            background: #CCF3F3;
            padding: 0 5px;
            font-size: 0.75rem;
            font-weight: 600;
            color: #00A1E4;
        }
    </style>
</head>
<body class="text-gray-800">

    <div class="max-w-6xl mx-auto p-4 md:p-8">

        <header class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-[#00A1E4]">Laporan Infografis Proyek: Rapi-App CMS</h1>
            <p class="text-xl md:text-2xl text-gray-700 mt-2">Analisis Proyek Tengah Semester Pemrograman Web II</p>
        </header>

        <section id="teknologi" class="bg-white rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h2 class="text-3xl font-bold text-[#00A1E4] mb-6 text-center">Tumpukan Teknologi & Kepatuhan Proyek</h2>
            <p class="text-gray-600 mb-6 text-center">Proyek ini dirancang untuk memenuhi semua kriteria teknis dan fungsional yang ditetapkan, menunjukkan penguasaan penuh terhadap arsitektur modern Laravel 12.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-700">Teknologi Inti yang Digunakan</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-md">
                            <span class="text-4xl block mb-2">🐘</span>
                            <span class="font-bold text-lg text-gray-700">PHP 8.3</span>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-md">
                            <span class="text-4xl block mb-2">🚀</span>
                            <span class="font-bold text-lg text-gray-700">Laravel 12</span>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-md">
                            <span class="text-4xl block mb-2">🐬</span>
                            <span class="font-bold text-lg text-gray-700">MySQL</span>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-md">
                            <span class="text-4xl block mb-2">💨</span>
                            <span class="font-bold text-lg text-gray-700">Tailwind CSS</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-center text-gray-700">Status Kepatuhan Kriteria</h3>
                    <p class="text-center text-gray-500 mb-4">Semua 7 kriteria utama proyek telah terpenuhi dan diverifikasi.</p>
                    <div class="chart-container h-64 max-h-[300px] md:h-80">
                        <canvas id="complianceChart"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <section id="arsitektur" class="bg-white rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h2 class="text-3xl font-bold text-[#00A1E4] mb-6 text-center">Arsitektur & Otentikasi Berbasis Peran</h2>
            <p class="text-gray-600 mb-6 text-center">Sistem memproses setiap permintaan melalui Middleware kustom untuk otorisasi akses Admin, memastikan keamanan dan pemisahan role (user/admin).</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-center text-gray-700">Alur Request MVC Laravel</h3>
                    <div class="flex flex-col items-center space-y-2">
                        <div class="bg-[#98E6E6] text-[#00A1E4] p-3 rounded-lg shadow font-medium w-full text-center">1. Browser Request</div>
                        <div class="flow-arrow">↓</div>
                        <div class="bg-[#98E6E6] text-[#00A1E4] p-3 rounded-lg shadow font-medium w-full text-center">2. Routing & Middleware</div>
                        <div class="flow-arrow">↓</div>
                        <div class="bg-[#98E6E6] text-[#00A1E4] p-3 rounded-lg shadow font-medium w-full text-center">3. Controller (Logic)</div>
                        <div class="flow-arrow">↓</div>
                        <div class="bg-[#98E6E6] text-[#00A1E4] p-3 rounded-lg shadow font-medium w-full text-center">4. Model (Eloquent ORM)</div>
                        <div class="flow-arrow">↓</div>
                        <div class="bg-[#98E6E6] text-[#00A1E4] p-3 rounded-lg shadow font-medium w-full text-center">5. View (Blade Templating)</div>
                        <div class="flow-arrow">↓</div>
                        <div class="bg-[#98E6E6] text-[#00A1E4] p-3 rounded-lg shadow font-medium w-full text-center">6. Response HTML</div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-center text-gray-700">Alur Otorisasi AdminMiddleware</h3>
                    <div class="bg-gray-100 p-4 rounded-lg shadow-inner">
                        <div class="bg-[#00D1D8] text-gray-900 p-3 rounded-lg shadow font-medium w-full text-center mb-4">Request ke /admin/...</div>
                        <div class="flex justify-center mb-4"><div class="flow-arrow">↓</div></div>
                        <div class="bg-white p-3 rounded-lg shadow font-medium w-full text-center border-2 border-[#00BADE]">AdminMiddleware::handle()</div>
                        <div class="flex justify-around mt-4">
                            <div class="flow-arrow text-red-500">↘</div>
                            <div class="flow-arrow text-green-500">↙</div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="bg-red-100 text-red-800 p-3 rounded-lg shadow font-medium w-[48%] text-center">
                                <strong class="block">GAGAL</strong>
                                (Role != 'admin')
                                <span class="block text-sm mt-1">Redirect ke Login/Home</span>
                            </div>
                            <div class="bg-green-100 text-green-800 p-3 rounded-lg shadow font-medium w-[48%] text-center">
                                <strong class="block">BERHASIL</strong>
                                (Role == 'admin')
                                <span class="block text-sm mt-1">Lanjut ke Controller</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="data" class="bg-white rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h2 class="text-3xl font-bold text-[#00A1E4] mb-6 text-center">Model Data & Fitur Kunci</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-semibold mb-4 text-center text-gray-700">Diagram Relasi Entitas (Konsep)</h3>
                    <p class="text-sm text-gray-600 mb-4 text-center">Memvisualisasikan dua jenis relasi: One-to-Many dan Many-to-Many, yang dimodelkan menggunakan Eloquent ORM.</p>
                    
                    <div class="space-y-6 p-6 rounded-lg bg-gray-50 flex flex-col items-center">
                        <div class="erd-entity w-1/3 mx-auto">USERS</div>
                        
                        <div class="erd-connector relative w-full justify-center">
                            <div class="erd-label" style="top: -20px; left: 10%;">1</div>
                            <div class="erd-line" style="width: 30px; flex-grow: 0;"></div>
                            <div class="erd-entity">ANIMES</div>
                            <div class="erd-line" style="width: 30px; flex-grow: 0;"></div>
                            <div class="erd-label" style="top: -20px; right: 10%;">M</div>
                        </div>

                        <div class="flex justify-between w-full mt-4">
                            
                            <div class="flex flex-col items-center w-1/3">
                                <div class="erd-connector relative w-full">
                                    <div class="erd-label" style="top: 0; left: 15%;">1:M</div>
                                    <div class="erd-line"></div>
                                </div>
                                <div class="erd-entity mt-2">EPISODES (Video)</div>
                            </div>
                            
                            <div class="flex flex-col items-center w-1/3">
                                <div class="erd-connector relative w-full">
                                    <div class="erd-label" style="top: 0; left: 15%;">N:M</div>
                                    <div class="erd-line"></div>
                                    <div class="erd-entity text-sm p-1">anime_genre (Pivot)</div>
                                    <div class="erd-line"></div>
                                </div>
                                <div class="erd-entity mt-2">GENRES</div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-700 text-center">Checklist Fitur Data Wajib</h3>
                    <ul class="space-y-3 p-4 bg-gray-100 rounded-lg shadow-md">
                        <li class="p-3 bg-green-100 text-green-800 rounded-md font-medium flex items-center">
                            <span class="text-xl mr-3">✔</span> Validasi Formulir
                        </li>
                        <li class="p-3 bg-green-100 text-green-800 rounded-md font-medium flex items-center">
                            <span class="text-xl mr-3">✔</span> Pagination (10 item/halaman)
                        </li>
                        <li class="p-3 bg-green-100 text-green-800 rounded-md font-medium flex items-center">
                            <span class="text-xl mr-3">✔</span> Search (Judul & Sinopsis)
                        </li>
                        <li class="p-3 bg-green-100 text-green-800 rounded-md font-medium flex items-center">
                            <span class="text-xl mr-3">✔</span> Upload File (Poster & Video)
                        </li>
                        <li class="p-3 bg-green-100 text-green-800 rounded-md font-medium flex items-center">
                            <span class="text-xl mr-3">✔</span> Flash Message (Sesi)
                        </li>
                        <li class="p-3 bg-green-100 text-green-800 rounded-md font-medium flex items-center">
                            <span class="text-xl mr-3">✔</span> Relasi Data Kompleks
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="analisis" class="bg-white rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h2 class="text-3xl font-bold text-[#00A1E4] mb-6 text-center">Analisis Kompleksitas Implementasi CRUD</h2>
            <p class="text-gray-600 mb-8 text-center">Perbandingan skor relatif berdasarkan upaya implementasi (Relasi, Validasi Unik, Logic Update, dan Pengelolaan File Storage).</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                
                <div>
                    <div class="chart-container h-64 max-h-[300px] md:h-80">
                        <canvas id="complexityChart"></canvas>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-700">Interpretasi Skor Implementasi</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-600">
                        <li>**Kelola Anime (Skor 9):** Kompleksitas tertinggi karena melibatkan validasi unik, upload file poster, dan mengelola relasi Many-to-Many (Genre).</li>
                        <li>**Kelola Episode (Skor 7):** Kompleksitas sedang. Memerlukan Nested Routing, validasi unik nomor episode per anime, dan upload file video berukuran besar.</li>
                        <li>**Kelola User (Skor 5):** Kompleksitas standar. Melibatkan otorisasi untuk menghapus user dan validasi unik pada saat perubahan Role.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="ujicoba" class="bg-white rounded-lg shadow-xl p-6 md:p-8 mb-8">
            <h2 class="text-3xl font-bold text-[#00A1E4] mb-6 text-center">Skenario Uji Coba & Hasil</h2>
            <p class="text-gray-600 mb-6 text-center">Verifikasi fungsionalitas sistem dari perspektif otentikasi, otorisasi, dan operasi CRUD yang kompleks.</p>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#00BADE] text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Skenario</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Langkah Uji</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase">Hasil Aktual</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">Otorisasi Admin</td>
                            <td class="px-6 py-4">Login dengan role 'admin'.</td>
                            <td class="px-6 py-4 text-green-600">Berhasil: Akses penuh ke /admin/dashboard.</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">Otorisasi User Biasa</td>
                            <td class="px-6 py-4">User role 'user' akses /admin/anime.</td>
                            <td class="px-6 py-4 text-red-600">Gagal: Redirect ke home dengan Flash Message.</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">CRUD Tambah Anime</td>
                            <td class="px-6 py-4">Isi form, upload poster, pilih genre, simpan.</td>
                            <td class="px-6 py-4 text-green-600">Berhasil: Data & Relasi tersimpan, Poster muncul (Storage Link).</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap font-medium">Hapus Anime</td>
                            <td class="px-6 py-4">Hapus Anime dengan episode/genre terlampir.</td>
                            <td class="px-6 py-4 text-green-600">Berhasil: Data, Relasi, dan File Poster terhapus dari storage.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
    
    <script>
        function wrapLabel(label) {
            if (label.length <= 16) {
                return label;
            }
            const words = label.split(' ');
            let lines = [];
            let currentLine = '';

            words.forEach(word => {
                if (currentLine.length + word.length + (currentLine ? 1 : 0) <= 16) {
                    currentLine += (currentLine ? ' ' : '') + word;
                } else {
                    if (currentLine) {
                        lines.push(currentLine);
                    }
                    currentLine = word;
                }
            });
            if (currentLine) {
                lines.push(currentLine);
            }
            return lines;
        }

        document.addEventListener('DOMContentLoaded', function () {
            
            const tooltipConfig = {
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(tooltipItems) {
                                const item = tooltipItems[0];
                                let label = item.chart.data.labels[item.dataIndex];
                                if (Array.isArray(label)) {
                                  return label.join(' ');
                                } else {
                                  return label;
                                }
                            }
                        }
                    }
                }
            };

            // Chart 1: Kepatuhan Kriteria (Donut Chart)
            const complianceCtx = document.getElementById('complianceChart').getContext('2d');
            new Chart(complianceCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Kriteria Terpenuhi', 'Kriteria Belum Terpenuhi'],
                    datasets: [{
                        data: [100, 0],
                        backgroundColor: ['#00A1E4', '#98E6E6'],
                        borderColor: '#ffffff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    ...tooltipConfig,
                    plugins: {
                        legend: { position: 'bottom', labels: { color: '#4B5563' } },
                        title: { display: true, text: 'Tingkat Kepatuhan Kriteria', color: '#1F2937' },
                        tooltip: tooltipConfig.plugins.tooltip
                    }
                }
            });

            // Chart 2: Kompleksitas CRUD (Bar Chart)
            const complexityLabels = [
                'Kelola Anime (M:M, File)', 
                'Kelola Episode (1:M, Video)', 
                'Kelola User (Otorisasi Role)'
            ];
            const wrappedLabels = complexityLabels.map(wrapLabel);
            const complexityCtx = document.getElementById('complexityChart').getContext('2d');
            new Chart(complexityCtx, {
                type: 'bar',
                data: {
                    labels: wrappedLabels,
                    datasets: [{
                        label: 'Skor Upaya Implementasi (1-10)',
                        data: [9, 7, 5],
                        backgroundColor: ['#00A1E4', '#00BADE', '#00D1D8'],
                        borderColor: '#00A1E4',
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    ...tooltipConfig,
                    scales: {
                        x: { beginAtZero: true, max: 10, ticks: { color: '#4B5563' } },
                        y: { ticks: { color: '#4B5563' } }
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: tooltipConfig.plugins.tooltip
                    }
                }
            });

        });
    </script>
</body>
</html>
