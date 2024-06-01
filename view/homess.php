<?php $title = 'J-Layer'; ?>

<?php ob_start(); ?>

<nav class="bg-[#FFC100] p-4 fixed w-full">
    <div class="container mx-auto flex justify-between items-center relative">
        <a href="#" class="text-white text-lg font-semibold">J-Layer</a>
        <div class="block lg:hidden">
            <button class="text-white focus:outline-none" onclick="toggleSidebar('sidebar-menu')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex space-x-4 lg-justify-center" id="navbar-menu">
            <a href="#" class="text-white text-lg hover:text-white">Home</a>
            <a href="#" class="text-white text-lg hover:text-white">About</a>
            <a href="#" class="text-white text-lg hover:text-white">Services</a>
            <a href="#" class="text-white text-lg hover:text-white">Contact</a>
        </div>
        <div class="hidden lg:absolute lg:right-0 lg:flex space-x-4" id="navbar-menu">
            <button id='login-btn' onclick="window.location.href='<?= urlpath('login')?>'">Login</button>
            <button id='register-btn' onclick="window.location.href='register.php'">Register</button>
        <div class="hidden lg:right-0 lg:flex space-x-4" id="navbar-menu">
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div id="sidebar-menu" class="fixed top-0 left-0 w-64 h-full bg-[#FFC100] transform -translate-x-full transition-transform lg:hidden">
    <div class="p-4">
        <button class="text-white focus:outline-none mb-4" onclick="toggleSidebar('sidebar-menu')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <a href="#" class="block text-white hover:text-white mb-2">Home</a>
        <a href="#" class="block text-white hover:text-white mb-2">About</a>
        <a href="#" class="block text-white hover:text-white mb-2">Services</a>
        <a href="#" class="block text-white hover:text-white mb-2">Contact</a>
    </div>
</div>

<section class="bg-[#FFFAE6]">
    <div class="grid max-w-screen-xl px-4 pt-28 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">Solusi Mudah untuk Pengajuan Pakan Peternak</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-700 lg:mb-8 md:text-lg lg:text-xl">Mempermudah peternak dalam mendapatkan pakan berkualitas dengan cepat dan efisien.</p>

        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="assets/images/main.png" alt="main image">
        </div>                
    </div>
</section>
<section class="bg-gray-100 text-center py-20">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-4">Solusi Mudah untuk Pengajuan Pakan Peternak</h1>
            <p class="text-lg mb-8">Mempermudah peternak dalam mendapatkan pakan berkualitas dengan cepat dan efisien.</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Ajukan Pakan Sekarang</a>
        </div>
    </section>
<section class="bg-[#F8F8F8] py-16">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-4">Section 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</section>

<section class="bg-[#F9F9F9] py-16">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-4">Section 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</section>
<!-- About Us Section -->
<section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Tentang Kami</h2>
            <p class="text-center mb-8">J-Layer adalah platform yang membantu peternak mengajukan pakan berkualitas dengan cepat dan efisien. Kami berdedikasi untuk mendukung kesejahteraan peternak dengan menyediakan layanan terbaik.</p>
            <div class="flex justify-center">
                <img src="team.jpg" alt="Our Team" class="w-full max-w-md rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Cara Kerja</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center">
                    <img src="step1.png" alt="Step 1" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Daftar</h3>
                    <p>Buat akun dan lengkapi profil peternakan Anda.</p>
                </div>
                <div class="text-center">
                    <img src="step2.png" alt="Step 2" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Pilih Pakan</h3>
                    <p>Pilih pakan yang sesuai dengan kebutuhan ternak Anda.</p>
                </div>
                <div class="text-center">
                    <img src="step3.png" alt="Step 3" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Ajukan Permintaan</h3>
                    <p>Ajukan permintaan pakan melalui platform kami.</p>
                </div>
                <div class="text-center">
                    <img src="step4.png" alt="Step 4" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Terima Pakan</h3>
                    <p>Dapatkan pakan berkualitas yang diantarkan ke peternakan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Layanan Kami</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <img src="service1.png" alt="Service 1" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Konsultasi Pakan</h3>
                    <p>Dapatkan konsultasi gratis tentang pakan terbaik untuk ternak Anda.</p>
                </div>
                <div class="text-center">
                    <img src="service2.png" alt="Service 2" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Pengiriman Pakan</h3>
                    <p>Pakan berkualitas diantarkan langsung ke peternakan Anda.</p>
                </div>
                <div class="text-center">
                    <img src="service3.png" alt="Service 3" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Pemantauan Kualitas</h3>
                    <p>Pemantauan berkala untuk memastikan kualitas pakan tetap terjaga.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Keunggulan Kami</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center">
                    <img src="benefit1.png" alt="Benefit 1" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Hemat Waktu</h3>
                    <p>Proses pengajuan pakan yang cepat dan mudah.</p>
                </div>
                <div class="text-center">
                    <img src="benefit2.png" alt="Benefit 2" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Pakan Berkualitas</h3>
                    <p>Hanya menyediakan pakan yang berkualitas tinggi.</p>
                </div>
                <div class="text-center">
                    <img src="benefit3.png" alt="Benefit 3" class="w-full max-w-xs mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Dukungan 24/7</h3>
                    <p>Dukungan pelanggan yang siap membantu kapan saja.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog/News Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Blog</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Tips Memilih Pakan Berkualitas</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna vitae nisl...</p>
                    <a href="#" class="text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Manfaat Pakan Organik untuk Ternak</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna vitae nisl...</p>
                    <a href="#" class="text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Cara Efektif Mengelola Stok Pakan</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna vitae nisl...</p>
                    <a href="#" class="text-blue-600 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="bg-blue-600 text-white text-center py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Mulai Ajukan Pakan Sekarang</h2>
            <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded hover:bg-gray-200">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Kontak Kami</h2>
            <form class="max-w-xl mx-auto">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="name">Nama</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="text" id="name" name="name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                    <input class="w-full px-4 py-2 border rounded-lg" type="email" id="email" name="email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="message">Pesan</label>
                    <textarea class="w-full px-4 py-2 border rounded-lg" id="message" name="message" rows="4"></textarea>
                </div>
                <button class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700" type="submit">Kirim</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-6 text-center">
            <div class="mb-6">
                <a href="#" class="text-white hover:underline">Tentang Kami</a> | 
                <a href="#" class="text-white hover:underline">Kebijakan Privasi</a> | 
                <a href="#" class="text-white hover:underline">Syarat dan Ketentuan</a>
            </div>
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
    
<?php $body = ob_get_clean(); ?>
<?php include 'master.php'; ?>

