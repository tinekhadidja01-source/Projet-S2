<?php 
require_once'datas.php';
$garcons=0;
$filles=0;
foreach($_SESSION["etudiants"] as $e){
   if($e["sexe"]==="M"){
      $garcons++;
   }elseif($e["sexe"]==="F"){
      $filles++;
   }
}
?>
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

         <div class=" p-2 mt-2 pt-4 w-[90%] h-[402px] mx-auto">

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




      <!-- CONTENU PRINCIPALE DE LA PAGE -->
      <div class="w-full lg:w-[80%]  h-screen lg:ml-64 flex flex-col ">

         <!-- HEADER -->
         <div class="sticky top-0 z-40 shadow-sm bg-white w-full min-h-[78px] border-b border-gray-400/40">
            <div class=" w-[90%] min-h-[78px] gap-2 mx-auto justify-between items-center flex">

               <!-- LOGO -->

               <div class=" lg:hidden">
                  <div>
                     <h1 class="text-[20px] text-[#DD3333] font-bold">E221</h1>
                     <p class="text-[9px] text-[#DD3333] ">Ecole Supérieure Professionnelle</p>
                  </div>
               </div>

               <!-- Rechercher -->
               <div class=" relative  w-[40%] h-auto hidden lg:block">
                  <i class="fa-solid fa-magnifying-glass absolute left-6 top-1/2 -translate-y-1/2 text-gray-600 text-xs"></i>
                  <input type="text" class="w-[80%] pl-14 pr-3 py-2.5 bg-gray-400/20 font-regular border border-gray-600/20 rounded-full text-xs"
                     placeholder="Rechercher...">
               </div>


               <!-- notification et profil de l'utilisateur -->
               <div class="flex items-center justify-end gap-2 sm:gap-3 w-[21%] h-[50px] ">
                  <!-- notification -->
                  <div class="relative cursor-pointer p-1.5  rounded-full">
                     <i class="fa-regular fa-bell text-[16px]"></i>
                     <span
                        class="absolute top-1.5 left-3 bg-red-500 text-white text-[9px] w-3 h-3 rounded-full flex items-center justify-center font-bold">
                        2
                     </span>
                  </div>
                  <div class="border-r border-gray-300 h-9"></div>

                  <!-- utilisateur -->
                  <div class="flex items-center gap-3 cursor-pointer">
                     <div class="w-9 h-9 lg:w-10 lg:h-10 rounded-full object-cover bg-red-500/20">
                        <i class="fa-regular fa-user text-[#DD3333] text-[14px] flex  justify-center mt-3"></i>
                     </div>
                     <div class="hidden lg:block">
                        <p class="text-[14px] font-bold text-gray-800 leading-none">Admin</p>
                        <p class="text-[12px]  text-gray-600 mt-0.5">Secrétariat</p>
                     </div>
                     <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 ml-1"></i>
                  </div>
               </div>

            </div>

         </div>

         <!-- CONTENU -->

         <div class="flex-1 min-h-0 overflow-y-auto ">

            <div class="w-[90%] mx-auto mt-8 mb-24 lg:mb-8">
               <!--TITRE -->
               <div>

                  <h2 class="text-[16px] lg:text-[23px] font-bold text-gray-900">
                     Bonjour, admin👋
                  </h2>

                  <p class="mt-1 text-[12px] lg:text-[14px] text-gray-500">
                     Voici un aperçu général de l'établissement.
                  </p>

               </div>

               <!-- LES 4 CARDS -->
               <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

                  <!-- FILIÈRES -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              FILIÈRES
                           </p>

                           <p class="mt-2 text-xl lg:text-2xl font-bold text-gray-900">
                              <?= count($_SESSION["filieres"]) ?>
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-green-200  rounded-lg bg-green-50 text-green-600">
                           <i class="fa-solid fa-book-open-reader text-sm w-5 ml-1.5"></i>
                        </div>

                     </div>

                  </div>

                  <!-- NIVEAUX -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              NIVEAUX
                           </p>

                           <p class="mt-2 text-xl lg:text-2xl font-bold text-gray-900">
                              <?= count($_SESSION["niveaux"]) ?>
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-yellow-200 rounded-lg bg-yellow-50 text-yellow-600">
                           <i class="fa-solid fa-layer-group ml-1 text-sm w-5"></i>
                        </div>

                     </div>

                  </div>

                  <!-- CLASSES -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              CLASSES
                           </p>

                           <p class="mt-2 text-xl lg:text-2xl font-bold text-gray-900">
                              <?= count($_SESSION["classes"]) ?>
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-fuchsia-200 rounded-lg bg-fuchsia-50 text-fuchsia-600">
                           <i class="fa-solid fa-chalkboard ml-1 text-sm w-5"></i>
                        </div>

                     </div>

                  </div>

                  <!-- ÉTUDIANTS -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              ÉTUDIANTS
                           </p>

                           <p class="mt-2 text-xl lg:text-2xl font-bold text-gray-900">
                             <?= count($_SESSION["etudiants"]) ?>
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-violet-200 rounded-lg bg-violet-50 text-violet-600">
                           <i class="fa-solid fa-graduation-cap ml-0.5 text-sm w-5"></i>
                        </div>

                     </div>

                  </div>

               </div>

               <!-- LES 2 CARDS FILLES & GARCONS -->
               <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">

                  <!-- GARÇONS -->
                  <div class=" rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex gap-8 items-center justify-between lg:justify-center">
                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-blue-200 rounded-lg bg-blue-50 text-[#737DEB]">
                           <i class="fa-solid fa-mars text-lg w-4"></i>
                        </div>

                        <!-- TEXTE -->
                        <div>
                           <p class="text-sm font-medium text-gray-500">
                              GARÇONS
                           </p>

                           <div class="flex items-end gap-3">

                              <p class="text-xl lg:text-2xl font-bold">
                                 <?= $garcons ?>
                              </p>

                              <span class="mb-1 text-xs text-gray-400">
                                <?= count($_SESSION["etudiants"])> 0
                                ?round(($garcons / count($_SESSION["etudiants"])) *100, 1): 0?>%
                              </span>

                           </div>

                        </div>
                     </div>
                  </div>

                  <!-- FILLES -->
                  <div class=" rounded-xl border border-gray-300 bg-white  p-4 shadow-sm">

                     <div class="flex gap-8  items-center justify-between lg:justify-center">

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center border border-rose-200 justify-center rounded-lg bg-rose-50 text-rose-600 ">
                           <i class="fa-solid fa-venus text-lg w-4"></i>
                        </div>

                        <!-- TEXTE -->
                        <div>
                           <p class="text-sm font-medium text-gray-500">
                              FILLES
                           </p>

                           <div class="flex items-end gap-3">
                              <p class="text-xl lg:text-2xl font-bold">
                                 <?= $filles ?>
                              </p>

                              <span class="mb-1 text-xs text-gray-400">
                                  <?= count($_SESSION["etudiants"])> 0
                                ?round(($filles / count($_SESSION["etudiants"])) *100, 1): 0?>%
                              </span>
                           </div>

                        </div>
                     </div>
                  </div>

               </div>

               <!-- barre des etudiants -->
               <div class="bg-white w-full mt-5 border border-gray-300 rounded-xl shadow-sm px-4 py-6">
                  <!-- icone + TEXTE -->
                  <div class="flex gap-5 lg:gap-6  items-center">
                     <!-- ICONE -->
                     <div class="flex h-11 w-11 items-center border border-red-200 justify-center rounded-lg bg-red-50 text-[#DD3333]">
                        <i class="fa-solid fa-chalkboard ml-1 text-sm w-5"></i>
                     </div>

                     <!-- TEXTE -->
                     <div class=" flex flex-col gap-1 ">
                        <p class="text-[14px] lg:text-[16px] font-bold ">
                           Classes ayant le plus d'étudiants
                        </p>

                        <p class="text-[12px] lg:text-[14px] font-regular text-gray-500">
                           Répartition des étudiants par classe
                        </p>

                     </div>
                  </div>

                  <!-- les barres + textes -->
                  <div class=" mt-5 flex flex-col">

                     <!-- 1er Barre -->
                     <div>
                        <!-- les textes -->
                        <div class="flex items-center justify-between">
                           <p class="text-[12px] lg:text-[14px] font-semibold">L1 DEV-WEB</p>
                           <p class="text-[12px] text-gray-500">38 étudiants</p>

                        </div>

                        <!-- barre rouge -->
                        <div class="mt-1 rounded-full h-2 bg-gray-100">
                           <div class="rounded-full h-2 bg-[#DD3333]" ></div>
                        </div>
                     </div>

                     <!-- 2iem Barre -->
                     <div class=" mt-6">
                        <!-- les textes -->
                        <div class="flex items-center justify-between">
                           <p class="text-[12px] lg:text-[14px] font-semibold">L2 DEV-WEB</p>
                           <p class="text-[12px] text-gray-500">35 étudiants</p>


                        </div>

                        <!-- barre rouge -->
                        <div class="mt-1 rounded-full h-2 bg-gray-100">
                           <div class="rounded-full w-[90%]  h-2 bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- 3iem Barre -->
                     <div class=" mt-6">
                        <!-- les textes -->
                        <div class="flex items-center justify-between">
                           <p class="text-[12px] lg:text-[14px] font-semibold">L1 RES-INFO</p>
                           <p class="text-[12px]  text-gray-500">32 étudiants</p>
                        </div>

                        <!-- barre rouge -->
                        <div class="mt-1 rounded-full h-2 bg-gray-100">
                           <div class="rounded-full w-[80%]  h-2 bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- 4iem Barre -->
                     <div class=" mt-6">
                        <!-- les textes -->
                        <div class="flex items-center justify-between">
                           <p class="text-[12px] lg:text-[14px] font-semibold">L3 GENIE-LOG</p>
                           <p class="text-[12px] text-gray-500">29 étudiants</p>
                        </div>

                        <!-- barre rouge -->
                        <div class="mt-1 rounded-full h-2 bg-gray-100">
                           <div class="rounded-full h-2 w-[70%] bg-[#DD3333]"></div>
                        </div>
                     </div>

                  </div>


               </div>



            </div>

            <footer class="mt-8 bg-white p-6 border-t border-gray-300 hidden lg:block text-xs text-gray-500 shadow-lg ">
               <p class=" w-[185px] mx-auto ">© 2026 E221 — Gestion scolaire</p>
            </footer>
         </div>



         <!-- MENU DU BAS -->
         <div class="fixed bottom-0 left-0 z-50 w-full bg-white border-t border-gray-200 shadow-lg lg:hidden">

            <div class="grid grid-cols-6 items-center py-2">

               <a href="dashboard.php"
                  class="flex flex-col items-center justify-center gap-1 py-2 text-[#DD3333] hover:bg-red-50">
                  <i class="fa-solid fa-house text-lg"></i>
                  <span class="text-[9px] sm:text-xs">Dashboard</span>
               </a>

               <a href="filiere.php"
                  class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
                  <i class="fa-solid fa-book-open-reader text-lg"></i>
                  <span class="text-[9px] sm:text-xs">Filières</span>
               </a>

               <a href="niveaux.php"
                  class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
                  <i class="fa-solid fa-layer-group text-lg"></i>
                  <span class="text-[9px] sm:text-xs">Niveaux</span>
               </a>

               <a href="classes.php"
                  class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
                  <i class="fa-solid fa-chalkboard text-lg"></i>
                  <span class="text-[9px] sm:text-xs">Classes</span>
               </a>

               <a href="etudiants.php"
                  class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
                  <i class="fa-solid fa-graduation-cap text-lg"></i>
                  <span class="text-[9px] sm:text-xs">Étudiants</span>
               </a>

               <a href="statistiques.php"
                  class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
                  <i class="fa-solid fa-chart-line text-lg"></i>
                  <span class="text-[9px] sm:text-xs">Statistiques</span>
               </a>

            </div>

         </div>

</body>

</html>