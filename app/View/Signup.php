<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StadiumStream</title>
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, StadiumStream, CAN24">
    <meta name="description" content="StadiumStream to Sell Football tickets">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/dist/output.css">

    <!-- Date picker  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker, #datepicker1").datepicker();
        });
    </script>
    <!-- / Date picker  -->

</head>

<body class="dark:bg-gray-900">

    <!-- Navbar  -->
    <?php include "../app/View/includes/header.php"; ?>
    <!-- Navbar  -->
    <div class="hero_section flex flex-row mt-[4em] mx-[7em] gap-x-3">
        <div class="p-4" style="border-left: 2px solid #004634;">Inscription</div>

        <div class="ml-auto">
            <button class="flex flex-row gap-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-4 w-4 mt-6 org-text-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                </svg>
                <div class="p-4" style="border-bottom: 2px solid #FF6E01;">Retour</div>
            </button>
        </div>
    </div>
    <div class="border-black py-8 px-4 mb-20 mt-4 mx-[7em] border">
        <div class="flex gap-x-4 justify-center"><a href="/signin" class="opacity-20"><span
                    class="org-text-shadow-disabled opacity-40 uppercase mt-8 md:ml-8 font-bold text-black text-xs md:text-lg">Déjà
                    Membre</span></a><a aria-current="page" href="/signup"
                class="router-link-active router-link-exact-active"><span
                    class="org-text-shadow uppercase mt-8 md:ml-8 font-bold text-black text-xs md:text-lg" style="border-bottom: 2px solid #FF6E01;">Nouveau
                    Compte</span></a></div><!----><!---->
        <div class="flex justify-center gap-4 mt-8">
            <form class="w-full md:w-7/12 xl:w-5/12" data-gtm-form-interact-id="0" method="post" action="./Signup">
                <div>
                    <div><!---->
                        <div class="mb-6 relative"><label for="email"
                                class="opacity-40 org-text-primary sr-only">Email</label>
                            <div class="flex"><input id="email"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="AdresseEmail" type="email" autocomplete="on" placeholder="Email *"><!----></div>
                            <!---->
                        </div>
                    </div>

                    <div><!---->
                        <div class="mb-6 relative"><label for="familyName"
                                class="opacity-40 org-text-primary sr-only">Nom</label>
                            <div class="flex"><input id="familyName"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="Nom" type="text" autocomplete="on" placeholder="Nom *"><!----></div>
                            <!---->
                        </div>
                    </div>
                    <div><!---->
                        <div class="mb-6 relative"><label for="phone"
                                class="opacity-40 org-text-primary sr-only">Téléphone</label>
                            <div class="flex"><input id="phone"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="phone" type="text" autocomplete="on" placeholder="phone *"><!----></div>
                            <!---->
                        </div>
                    </div>
                    <div><!---->
                        <div class="mb-6 relative"><label for="password" class="opacity-40 org-text-primary sr-only">Mot
                                de
                                passe</label>
                            <div class="flex"><input id="password"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="MotDePasse" type="password" autocomplete="off"
                                    placeholder="Mot de passe *"><button type="button"
                                    class="border-b border-gray-400 focus:outline-none"><!----><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></div><!---->
                        </div>
                    </div>
                    <div><!---->
                        <div class="mb-6 relative"><label for="confirmPassword"
                                class="opacity-40 org-text-primary sr-only">Confirmer le mot de passe</label>
                            <div class="flex"><input id="confirmPassword"
                                    class="text-base md:text-sm border-b w-full focus:outline-none border-gray-400 text-gray-700 placeholder-gray-800"
                                    name="confirmPassword" type="password" autocomplete="off"
                                    placeholder="Confirmer le mot de passe *"><button type="button"
                                    class="border-b border-gray-400 focus:outline-none"><!----><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button></div><!---->
                        </div>
                    </div>
                    <div class="flex gap-x-2 text-xs mb-4 org-text-primary"><input type="checkbox"
                            data-gtm-form-interact-field-id="0">
                        <div class="flex flex-col gap-x-2">
                            <div> En utilisant ce site Web, en achetant un billet ou en créant un compte, vous acceptez
                                <a href="CGV" target="_blank" rel="noopener noreferrer"
                                    class="text-inherit hover:text-inherit cursor-pointer underline font-semibold"> les
                                    conditions d'utilisation </a> et la politique de confidentialité </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4 items-center justify-center mt-8"><button type="submit"  class="bg-[#004634] text-white font-bold py-2 px-4 border rounded" style="background-color: #004634;">
            S'inscrire
        </button>
</div>
                </div><!---->
            </form>
        </div>
    </div>
    <?php include "../app/View/includes/footer.php"; ?>
    <!-- / Footer   -->
    
    <!-- / For dark mode -->
    <script src="public/assets/js/darkmode.js"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>