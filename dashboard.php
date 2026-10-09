<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


</head>

<body class="w-full bg-[#F9FAFB] overflow-hidden tracking-wide">

   <!-- Div parent -->
   <div class="w-[100%]">

      <!-- Sidebar -->

      <div class="fixed top-0 z-40 w-[20%] h-[552px] bg-[#DD3333] flex flex-col justify-between text-white hidden lg:block ">

         <!-- LOGO -->

         <div class="border-b border-red-400/50 mt-3.5">
            <div class=" m-2 ml-5">
               <h1 class="text-[20px] lg:text-[25px]  font-bold">E221</h1>
               <p class="text-[10px] lg:text-[12px] text-red-100 ">Ecole Supérieure Professionnelle</p>
            </div>
         </div>

         <div class=" p-2 mt-2 pt-4 w-[90%] h-[402px] mx-auto border border-red-300">

            <!-- menu -->
            <div class=" space-y-2 mt-2">
               <a href="dashboard.php"
                  class=" flex px-6 py-2 gap-4 items-center rounded-sm text-[#DD3333] bg-white text-sm font-regular border border-white">
                  <i class="fa-solid fa-house text-sm w-5"></i>
                  <span> Dashboard</span>
               </a>

               <a href="filiere.php"
                  class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
                  <i class="fa-solid fa-book-open-reader text-sm w-5"></i>
                  <span>Filieres</span>
               </a>

               <a href="niveaux.php"
                  class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
                  <i class="fa-solid fa-layer-group text-sm w-5"></i>
                  <span>Niveaux</span>
               </a>

               <a href="classes.php"
                  class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
                  <i class="fa-solid fa-chalkboard text-sm w-5"></i>
                  <span>Classes</span>
               </a>

               <a href="etudiants.php"
                  class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
                  <i class="fa-solid fa-graduation-cap text-sm w-5"></i>
                  <span>Etudiants</span>
               </a>

               <a href="statistiques.php"
                  class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
                  <i class="fa-solid fa-chart-line text-sm w-5"></i>
                  <span>Statistiques</span>
               </a>

            </div>

         </div>

         <div class="border-b border-red-400/50 "></div>
         <div class="w-[85%] mx-auto">

            <a href=""
               class=" mb-3 mt-3 flex px-7 py-2 gap-6 mx-auto items-center border border-red-300 rounded-sm hover:bg-red-700 text-sm font-regular ">
               <span class="ml-8">Déconnexion</span>
               <i class="fa-solid fa-arrow-right-from-bracket text-sm w-5"></i>
            </a>
         </div>


      </div>


      <!-- MENU DU BAS : MOBILE ET TABLETTE -->
      <div class="fixed bottom-0 left-0 z-50 w-full bg-white border-t border-gray-200 shadow-lg lg:hidden">

         <div class="grid grid-cols-6 items-center py-2">

            <!-- DASHBOARD -->
            <a href="dashboard.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-[#DD3333] hover:bg-red-50">
               <i class="fa-solid fa-house text-lg"></i>
               <span class="text-[9px] sm:text-xs">Accueil</span>
            </a>

            <!-- FILIERES -->
            <a href="filiere.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
               <i class="fa-solid fa-book-open-reader text-lg"></i>
               <span class="text-[9px] sm:text-xs">Filières</span>
            </a>

            <!-- NIVEAUX -->
            <a href="niveaux.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
               <i class="fa-solid fa-layer-group text-lg"></i>
               <span class="text-[9px] sm:text-xs">Niveaux</span>
            </a>

            <!-- CLASSES -->
            <a href="classes.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
               <i class="fa-solid fa-chalkboard text-lg"></i>
               <span class="text-[9px] sm:text-xs">Classes</span>
            </a>

            <!-- ETUDIANTS -->
            <a href="etudiants.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
               <i class="fa-solid fa-graduation-cap text-lg"></i>
               <span class="text-[9px] sm:text-xs">Étudiants</span>
            </a>

            <!-- STATISTIQUES -->
            <a href="statistiques.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
               <i class="fa-solid fa-chart-line text-lg"></i>
               <span class="text-[9px] sm:text-xs">Stats</span>
            </a>

         </div>

      </div>



      <!-- CONTENU PRINCIPALE DE LA PAGE -->
      <div class="w-full lg:w-[80%]  h-screen lg:ml-64 flex flex-col ">

         <!-- HEADER -->
         <div class="sticky top-0 z-40 shadow-sm bg-white w-full h-[78px] border-b border-gray-400/40">
            <div class=" w-[90%] h-full mx-auto justify-between items-center flex">

               <!-- Rechercher -->
               <div class=" relative  w-[40%] h-auto">
                  <i class="fa-solid fa-magnifying-glass absolute left-6 top-1/2 -translate-y-1/2 text-gray-600 text-xs"></i>
                  <input type="text" class="w-[80%] pl-14 pr-3 py-2.5 bg-gray-400/20 font-regular border border-gray-600/20 rounded-full text-xs"
                     placeholder="Rechercher...">
               </div>


               <!-- notification et profil de l'utilisateur -->
               <div class="flex items-center  gap-3 w-[21%] h-[50px]">
                  <!-- cloche de notification -->
                  <div class="relative cursor-pointer p-1.5  rounded-full">
                     <i class="fa-regular fa-bell text-[16px]"></i>
                     <span
                        class="absolute top-1.5 left-3 bg-red-500 text-white text-[9px] w-3 h-3 rounded-full flex items-center justify-center font-bold">
                        2
                     </span>
                  </div>
                  <div class="border-r border-gray-300 h-9"></div>

                  <!-- photo et nom de l'utilisateur -->
                  <div class="flex items-center gap-3 cursor-pointer">
                     <div class="w-10 h-10 rounded-full object-cover bg-red-500/20">
                        <i class="fa-regular fa-user text-[#DD3333] text-[14px] flex  justify-center mt-3"></i>
                     </div>
                     <div>
                        <p class="text-[14px] font-bold text-gray-800 leading-none">Admin</p>
                        <p class="text-[12px]  text-gray-600 mt-0.5">Secrétariat</p>
                     </div>
                     <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 ml-1"></i>
                  </div>
               </div>

            </div>

         </div>

         <!-- CONTENUE -->

         <div class=" border border-green-600 flex-1 min-h-0 overflow-y-auto ">

            <div class="w-[90%] h-[1400px] border border-red-800 mx-auto mt-8">
               <!--TITRE -->
               <div class="">

                  <h2 class="text-[23px] font-bold text-gray-900">
                     Bonjour, admin👋
                  </h2>

                  <p class="mt-1 text-sm text-gray-500">
                     Voici un aperçu général de votre établissement.
                  </p>

               </div>

               <!-- LES 4 CARDS -->
               <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

                  <!-- FILIÈRES -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-lg">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              FILIÈRES
                           </p>

                           <p class="mt-2 text-3xl font-bold text-gray-900">
                              12
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 text-e221">

                        </div>

                     </div>

                  </div>

                  <!-- NIVEAUX -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-lg">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              NIVEAUX
                           </p>

                           <p class="mt-2 text-3xl font-bold text-gray-900">
                              5
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 text-e221">

                        </div>

                     </div>

                  </div>

                  <!-- CLASSES -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-lg">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              CLASSES
                           </p>

                           <p class="mt-2 text-3xl font-bold text-gray-900">
                              24
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 text-e221">

                        </div>

                     </div>

                  </div>

                  <!-- ÉTUDIANTS -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-lg">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              ÉTUDIANTS
                           </p>

                           <p class="mt-2 text-3xl font-bold text-gray-900">
                              548
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 text-e221">

                        </div>

                     </div>

                  </div>

               </div>

               <!-- LES 2 CARDS FILLES & GARCONS -->
               <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">

                  <!-- GARÇONS -->
                  <div class=" rounded-xl border border-gray-300 bg-white p-6 shadow-lg">

                     <div class="flex gap-5 items-center">
                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-blue-50 text-">

                        </div>

                        <!-- TEXTE -->
                        <div>
                           <p class="text-sm font-medium text-gray-500">
                              GARÇONS
                           </p>

                           <div class="flex items-end gap-3">

                              <p class="text-2xl font-bold">
                                 290
                              </p>

                              <span
                                 class="mb-1 text-xs text-gray-400">
                                 52,9 %
                              </span>

                           </div>

                        </div>
                     </div>
                  </div>

                  <!-- FILLES -->
                  <div class="flex gap-5 items-center rounded-xl border border-gray-300 bg-white p-5 shadow-lg">

                     <div class="flex gap-5 items-center">

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 ">

                        </div>

                        <!-- TEXTE -->
                        <div>
                           <p class="text-sm font-medium text-gray-500">
                              GARÇONS
                           </p>

                           <div class="flex items-end gap-3">

                              <p class="text-2xl font-bold">
                                 290
                              </p>

                              <span
                                 class="mb-1 text-xs text-gray-400">
                                 52,9 %
                              </span>

                           </div>

                        </div>
                     </div>
                  </div>

               </div>

            </div>

</body>

</html>