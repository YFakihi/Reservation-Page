<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">
</head>

<body class="dark:bg-gray-900">

    <!-- Navbar  -->
    <?php include "../app/View/includes/nav_dash.php"; ?>
    <!-- Navbar  -->


    <!-- Navbar  -->
    <?php include "../app/View/includes/aside_dash.php"; ?>
    <!-- Navbar  -->


    <main class="mt-14 p-12 ml-0 smXl:ml-64 dark:border-gray-700 h-full">

        <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl p-8 mb-12 h-full">
            <!-- Start block -->
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased h-full">
                <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
                    Add <span class="text-orange-500">Match</span>
                </h1>

                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                        <div class="flex justify-end items-center w-full md:w-full">
                            <!-- Search -->
                            <div class="w-full">

                            </div>
                            <!-- / Search -->

                            <!-- Div avec le bouton aligné à droite -->
                            <div class="flex justify-end items-center">
                                <!-- <button type="button" id="createProductModalButton" data-modal-target="createProductModal" data-modal-toggle="createProductModal" class="md:w-auto flex items-center justify-end py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Add Match
                                </button> -->
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                        <form enctype="multipart/form-data" action="addteams" method="POST">
                                <div class="md:grid-cols-2 gap-4 mb-4">
                                    <input type="text" placeholder="id team" name="id" class="border p-2 rounded w-full">
                                </div>
                                <div class="md:grid-cols-2 gap-4 mb-4">
                                    <input type="text" placeholder="Nation name" name="NomEquipe" class="border p-2 rounded w-full">
                                </div>
                              
                                <div class="mb-4">
                                    <input type="text" placeholder="Entraineur" name="Entraineur" class="border p-2 rounded w-full">
                                </div> 
                               <div class="mb-4">
                                    <input type="text" placeholder="NombreJoueurs" name="NombreJoueurs" class="border p-2 rounded w-full">
                                </div> 

                                <!-- <d
                                iv class="mb-4">
                                    <input type="text" placeholder="Founding Year" name="founding_year" class="border p-2 rounded w-full">
                                </d>  -->
                                    <!-- <div class="mb-4">
                                        <input type="file" placeholder="Flag Upload " name="flag" class="border p-2 rounded w-full">
                                    </div> -->

                                <button type="submit" class="px-4 py-2 bg-primary-100 rounded   hover:bg-blue-600 focus:outline-none transition-colors">
                                    Confirm 
                                </button>

                                <!-- <button type="button" class="px-4 py-2 bg-orange rounded   hover:bg-blue-600 focus:outline-none transition-colors">
                                    Cancel
                                </button> -->


                            </form>
                        </div>


                    </div>
                </div>

            </section>

        </div>

    </main>






    <!-- / For dark mode -->
    <script src="<?= URL_DIR ?>public/assets/js/darkmode.js"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>