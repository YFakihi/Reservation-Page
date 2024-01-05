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

    <main class="mt-14 p-12 ml-0 smXl:ml-64 dark:border-gray-700">

        <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl p-8 mb-12">
            <!-- Start block -->
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
                <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
                    Table <span class="text-orange-500">Teams</span>
                </h1>
                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                    
                    <div class="flex justify-end items-center w-full md:w-full">
                            <!-- Search -->
                            <div class="w-full">
                                <!-- <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                    </div>
                                </form> -->
                            </div>
                            <!-- / Search -->

                            <!-- Div avec le bouton aligné à droite -->
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                           
                            </div>
                            <div class="flex justify-end items-center">
                            <a href="teams/add/">
                                    <button type="button" id="createProductModalButton" data-modal-target="createProductModal" data-modal-toggle="createProductModal" class="md:w-auto flex items-center justify-end py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Add Match
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        
                                        <th scope="col" class="px-4 py-3">Image</th>
                                        <th scope="col" class="px-4 py-3">id</th>
                                        <th scope="col" class="px-4 py-4">Team Name</th>
                                        <th scope="col" class="px-4 py-3">Coach</th>
                                        <th scope="col" class="px-4 py-3">Number of Players</th>
                                        <th scope="col" class="px-4 py-3  text-gray-400">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($teams as $team) { ?>
                                        <tr class="border-b dark:border-gray-700">
                                    
                                            <td class="px-4 py-3 text-center">Ici Image </td>
                                            <td class="px-4 py-3 text-center"><?= $team['id'] ?></td>
                                            <td class="px-4 py-3 text-center"><?= $team['NomEquipe'] ?></td>
                                            <!-- <td class="px-4 py-3 text-center"><?= $team['Entraineur'] ?> </td> -->
                                            <td class="px-4 py-3 text-center"><?= $team['NombreJoueurs'] ?> </td>

                                            <td class="px-4 py-3 text-center  ">
                                            <button id="apple-imac-27-dropdown-button<?= $team['id'] ?>" data-dropdown-toggle="apple-imac-27-dropdown-<?= $team['id'] ?>" class="inline-flex items-center text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 p-1.5 dark:hover-bg-gray-800 text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">

                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown-<?= $team['id'] ?>" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">

                                                    <ul class="py-1 text-sm" aria-labelledby="apple-imac-27-dropdown-button<?= $team['id'] ?>">
                                                        <li>
                                                        <a  href="../teams/edit/<?=$team['id']?>" type="button" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500 dark:hover:text-red-400">
                                                               
                                                                edit
                                                            </a>
                                                        </li>
                                                        

                                                        <li>
                                                            <a  href="teams/delete/<?=$team['id']?>" type="button" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500 dark:hover:text-red-400">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                  
                            </table>
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