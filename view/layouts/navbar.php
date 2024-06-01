<nav class="bg-[#FFC100] p-4 fixed w-full">
    <div class="container mx-auto grid grid-cols-3 gap-4 relative items-center">
        <a href="#" class="text-white text-lg font-semibold">J-Layer</a>
        <div class="block lg:hidden">
            <button class="text-white focus:outline-none" onclick="toggleSidebar('sidebar-menu')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex space-x-4 lg:justify-center" id="navbar-menu">
            <a href="<?= urlpath('')?>" class="text-white text-lg hover:text-white">Home</a>
            <a href="#" class="text-white text-lg hover:text-white">Berita</a>
            <a href="#pengajuan" class="text-white text-lg hover:text-white">Pengajuan</a>
        </div>
        <div class="hidden lg:flex space-x-4 lg:justify-end" id="navbar-menu">
            <button id='login-btn' onclick="window.location.href='<?= urlpath('login')?>'">Login</button>
            <button id='register-btn' onclick="window.location.href='register.php'">Register</button>
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
        <a href="<?= urlpath('')?>" class="block text-white hover:text-white mb-2">Home</a>
        <a href="#" class="block text-white hover:text-white mb-2">About</a>
        <a href="#" class="block text-white hover:text-white mb-2">Services</a>
        <a href="#" class="block text-white hover:text-white mb-2">Contact</a>
    </div>
</div>