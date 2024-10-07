<?php
include("../template_user/header.php");
?>

<div class="flex-grow my-[100px] text-center px-4 lg:px-10">
    <section class="my-10">
        <div>
            <h1 class="text-5xl font-bold italic text-center">HUBUNGI KAMI</h1>
            <hr class="w-1/4 mx-auto border-4 border-gray-800 mt-4">
        </div>
    </section>


    <section class="flex justify-center items-center">
        <form action="kirim.php" method="POST" class="w-full max-w-lg bg-white shadow-md rounded-lg p-8" enctype="multipart/form-data">

            <div class="mb-4">
                <label class="block text-left text-gray-700 text-sm font-bold mb-2" for="name">
                    Nama Lengkap
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Masukkan nama lengkap" required>
            </div>


            <div class="mb-4">
                <label class="block text-left text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Masukkan email Anda" required>
            </div>


            <div class="mb-4">
                <label class="block text-left text-gray-700 text-sm font-bold mb-2" for="subject">
                    Subjek
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" type="text" name="subject" placeholder="Masukkan subjek" required>
            </div>


            <div class="mb-6">
                <label class="block text-left text-gray-700 text-sm font-bold mb-2" for="message">
                    Pesan
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32 resize-none" id="message" name="message" placeholder="Tulis pesan Anda" required></textarea>
            </div>


            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </section>
</div>

<?php
include("../template_user/footer.php");
?>