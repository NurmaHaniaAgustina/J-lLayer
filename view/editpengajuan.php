<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>J-Layer</title>
</head>
<body>
    <?php include 'layouts/navbar.php' ?>
    <section class="bg-[#FFFAE6] min-h-screen">
        <div class="max-w-screen-xl px-4 pt-36 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:pt-36">

            <h1 class="text-center font-bold mb-8 text-3xl lg:text-5xl">Ubah Pengajuan</h1>
            <div class="bg-white shadow-md rounded-lg p-8 mx-auto w-full lg:w-full">
                <form method="POST" action="" class=" space-y-6">
                    <div class="rounded-md shadow-sm">
                        <div class="mt-4">
                            <label class="font-semibold" for="alamat">Alamat</label>
                            <input
                                placeholder="Masukkan Alamat"
                                class="appearance-none relative block w-full px-3 py-3 border border-gray-300 bg-gray-100 rounded-md focus:outline-none focus:ring-[#FF5F00] focus:border-gray-500 focus:z-10 sm:text-sm"
                                autocomplete="alamat"
                                type="text"
                                name="alamat"
                                id="alamat"
                            />
                        </div>
                        <div class="mt-4">
                            <label class="font-semibold" for="foto_peternakan">Foto Peternakan</label>
                            <div class=" h-full w-full lg:w-2/3 lg:h-72 overflow-y-scroll rounded-md preview mb-2" id="foto_peternakan-container" style="scrollbar-width: none;">
                                <img id="foto_peternakan-preview" src="assets/images/ayam.jpg" alt="Foto Peternakan" class=" w-full object-cover object-top" />
                            </div>
                            <div class="relative w-full mb-4 mt-1">
                                <input
                                    id="foto_peternakan"
                                    name="foto_peternakan"
                                    type="file"
                                    class="appearance-none relative block w-full px-3 py-3 border border-gray-300 bg-gray-100 rounded-md focus:outline-none focus:ring-[#FF5F00] focus:border-gray-500 focus:z-10 sm:text-sm"
                                    onchange="previewImage(this)"
                                />
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="font-semibold" for="foto_usaha">Foto Surat Usaha</label>
                            <div class=" h-full w-full lg:w-2/3 lg:h-72 overflow-y-scroll rounded-md preview mb-2" id="foto_usaha-container" style="scrollbar-width: none;">
                                <img id="foto_usaha-preview" src="assets/images/ayam.jpg" alt="Foto Surat Usaha" class=" w-full object-cover object-top" />
                            </div>
                            <div class="relative w-full mb-4 mt-1">
                                <input
                                    id="foto_usaha"
                                    name="foto_usaha"
                                    type="file"
                                    class="appearance-none relative block w-full px-3 py-3 border border-gray-300 bg-gray-100 rounded-md focus:outline-none focus:ring-[#FF5F00] focus:border-gray-500 focus:z-10 sm:text-sm"
                                    onchange="previewImageUsaha(this)"
                                />
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <label class="font-semibold" for="jumlah_pakan">Jumlah Pakan (Kg)</label>
                            <input
                                placeholder="Masukkan Jumlah Pakan"
                                class="appearance-none relative block w-full px-3 py-3 border border-gray-300 bg-gray-100 rounded-md focus:outline-none focus:ring-[#FF5F00] focus:border-gray-500 focus:z-10 sm:text-sm"
                                autocomplete="jumlah_pakan"
                                type="number"
                                name="jumlah_pakan"
                                id="jumlah_pakan"
                                min="1"
                                step="1"
                            />
                        </div>                             
                    </div>
                    
                    <div>
                        <button
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-lg font-medium rounded-md text-white bg-[#FF5F00] hover:bg-[#FFFAE6] hover:text-[#FF5F00]"
                            type="submit"
                        >
                            Ubah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-2">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 J-Layer. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function toggleSidebar(id) {
            const element = document.getElementById(id);
            if (element.classList.contains('-translate-x-full')) {
                element.classList.remove('-translate-x-full');
            } else {
                element.classList.add('-translate-x-full');
            }
        }
    </script>
    <script>
        function previewImage(input) {
            const file = input.files[0];
            const Usahapreview = document.getElementById('foto_peternakan-preview');
            const Usahacontainer = document.getElementById('foto_peternakan-container');
            const reader = new FileReader();
            reader.onload = function () {
                Usahapreview.classList.remove('hidden');
                Usahacontainer.classList.remove('hidden');
                Usahapreview.src = reader.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            } else {
                Usahapreview.classList.add('hidden');
                Usahacontainer.classList.add('hidden');
                Usahapreview.src = "";
            }
        }
        function previewImageUsaha(input) {
            const file = input.files[0];
            const preview = document.getElementById('foto_usaha-preview');
            const container = document.getElementById('foto_usaha-container');
            const reader = new FileReader();
            reader.onload = function () {
                preview.classList.remove('hidden');
                container.classList.remove('hidden');
                preview.src = reader.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.classList.add('hidden');
                container.classList.add('hidden');
                preview.src = "";
            }
        }
    </script>
    
</body>
</html>
