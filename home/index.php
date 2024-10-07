<?php
include("../template_user/header.php");
?>


<div class="relative bg-cover bg-center h-screen" style="background-image: url('https://alumnisma2painan.com/wp-content/uploads/2022/05/halaman.jpg');">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 flex flex-col justify-center items-center text-center h-full text-white">
        <h1 class="text-5xl font-bold">Selamat Datang di SMA N 2 Painan</h1>
        <p class="mt-4 text-lg">Mewujudkan generasi unggul dan berkarakter</p>
        <a href="#kegiatan" class="mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat Kegiatan</a>
    </div>
</div>


<section class="mt-10" id="carousel" x-data="{ activeSlide: 0, slides: ['https://via.placeholder.com/1920x800', 'https://via.placeholder.com/1920x800/ff0000', 'https://via.placeholder.com/1920x800/00ff00'] }">
    <div class="relative">

        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index" class="h-96 w-full bg-cover bg-center transition duration-700" :style="'background-image: url(' + slide + ')'"></div>
        </template>


        <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</section>


<section class="my-10 text-center">
    <h2 class="text-4xl font-bold">Tentang SMA N 2 Painan</h2>
    <hr class="w-1/4 mx-auto border-4 border-gray-800 mt-4">
    <p class="mt-4 px-4 lg:px-40">SMA N 2 Painan adalah sekolah yang berfokus pada pengembangan siswa secara menyeluruh, baik akademis maupun non-akademis. Dengan fasilitas yang lengkap dan tenaga pengajar yang profesional, kami berkomitmen untuk mencetak generasi unggul yang siap bersaing di era globalisasi.</p>
</section>


<section id="kegiatan" class="my-10">
    <div class="text-center">
        <h2 class="text-4xl font-bold">Kegiatan Terbaru</h2>
        <hr class="w-1/4 mx-auto border-4 border-gray-800 mt-4">
    </div>

    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">

        <div class="card shadow-lg bg-white rounded-lg overflow-hidden">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoNGrFBYmJGIhgXEYHKGM2KgcFRBlUCFA3fA&s" alt="Kegiatan 1" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-2">Lomba Sains Nasional</h3>
                <p>Siswa SMA N 2 Painan berhasil meraih juara dalam lomba sains tingkat nasional yang diadakan di Jakarta.</p>
            </div>
        </div>

        <div class="card shadow-lg bg-white rounded-lg overflow-hidden">
            <img src="https://berita.pesisirselatankab.go.id/asset/foto_berita/39D2C51C-2AC9-4A8B-98B1-0DB734545E9F.jpg" alt="Kegiatan 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-2">Pentas Seni Tahunan</h3>
                <p>Pentas seni tahunan menampilkan berbagai bakat siswa di bidang seni musik, tari, dan drama.</p>
            </div>
        </div>

        <div class="card shadow-lg bg-white rounded-lg overflow-hidden">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5MA417m8HX8Ltgg0tMbSe_T-bYf47aOD7oA&s" alt="Kegiatan 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-2">Workshop Teknologi</h3>
                <p>Siswa mengikuti workshop teknologi terbaru yang difasilitasi oleh pakar industri IT.</p>
            </div>
        </div>
    </div>
</section>

<?php
include("../template_user/footer.php");
?>