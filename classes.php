<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class="bg-[#F9FAFB] overflow-hidden  tracking-wide">
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
            <div class=" space-y-2">
               <a href="dashboard.php"
                  class="flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
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
                  class="  flex px-6 py-2 gap-4 items-center rounded-sm text-[#DD3333] bg-white text-sm font-regular border border-white ">
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
      <div class="w-full lg:w-[80%]  h-screen lg:ml-64 flex flex-col">

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
               <div class=" flex justify-between items-center">

                  <div>
                     <h2 class="text-[16px] lg:text-[23px] font-bold text-gray-900">
                        Classes
                     </h2>

                     <p class="mt-1 text-[10px] lg:text-[14px] text-gray-500">
                        Consultez et gérez les classes de l'établissement.
                     </p>
                  </div>

                  <a href="ajoutclasse.php" class="bg-[#DD3333] hover:bg-[#870202] whitespace-nowrap text-white flex items-center text-[9px] md:text-[12px] lg:text-[14px] gap-1 md:gap-2 lg:gap-3 font-semibold px-3 lg:px-6 py-1 md:py-2 lg:py-2 rounded-md">
                     <i class="fa-solid fa-plus w-3"></i>
                     <p>Ajouter une classe</p>
                  </a>
               </div>

               <!-- LES 3 CARDS -->
               <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                  <!-- CLASSES -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              CLASSES
                           </p>

                           <p class="mt-2 text-xl lg:text-2xl font-bold text-gray-900">
                              6
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Total
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-yellow-200  rounded-lg bg-yellow-50 text-yellow-600">
                           <i class="fa-solid  fa-chalkboard text-sm w-5 ml-1.5"></i>
                        </div>

                     </div>

                  </div>

                  <!-- CAPACITÉ -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              CAPACITÉ
                           </p>

                           <p class="mt-2 text-xl lg:text-2xl font-bold text-gray-900">
                              230
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Places disponibles
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-blue-200 rounded-lg bg-blue-50 text-blue-600">
                           <i class="fa-solid fa-database ml-1 text-sm w-4"></i>
                        </div>

                     </div>

                  </div>

                  <!-- FILIÈRES -->

                  <div class="rounded-xl border border-gray-300 bg-white p-4 shadow-sm">

                     <div class="flex items-center justify-between">

                        <div class="space-y-2">

                           <p class="text-[14px] font-medium text-gray-600">
                              FILIÈRES
                           </p>

                           <p class="mt-2 text-xl lg:text-2xl font-bold text-gray-900">
                              3
                           </p>

                           <p class="mt-1 text-xs text-gray-400">
                              Filières concernées
                           </p>

                        </div>

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-green-200 rounded-lg bg-green-50 text-green-600">
                           <i class="fa-solid fa-book-open-reader ml-1 text-sm w-5"></i>
                        </div>

                     </div>

                  </div>

               </div>

               <div class="mt-5 gap-5 bg-white grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 border border-gray-300 shadow-sm px-4 py-6 rounded-xl ">
                  <!-- Rechercher -->
                  <div class=" relative">
                     <i class="fa-solid fa-magnifying-glass absolute left-6 top-1/2 -translate-y-1/2 text-gray-600 text-xs"></i>
                     <input type="text" class="py-2 bg-gray-300/20 shadow-sm pl-14 w-full  p-4 text-gray-600 border border-gray-300 rounded-xl focus:outline focus:outline-[#DD3333] focus:ring-0 focus:border-none text-xs font-regular"
                        placeholder="Rechercher une classe...">
                  </div>
                  <!-- Select filiere -->
                  <select name="niveaux" id="" class=" py-2 bg-gray-300/20 shadow-sm  p-4 text-gray-600 border border-gray-300 rounded-xl focus:outline focus:outline-[#DD3333] focus:ring-0 focus:border-none text-xs font-semibold">
                     <option value="Tous les niveaux">Toutes les filières</option>
                     <option value="1">Développement Web</option>
                     <option value="2">Réseaux Informatiques</option>
                     <option value="3">Designe graphique</option>
                     <option value="4">Génie Logiciel</option>
                     <option value="5">Marketing & Communication</option>
                     <option value="6">Data analyst</option>
                  </select>

                  <!-- Select niveaux -->
                  <select name="niveaux" id="" class=" py-2 bg-gray-300/20 shadow-sm  p-4 text-gray-600 border border-gray-300 rounded-xl focus:outline focus:outline-[#DD3333] focus:ring-0 focus:border-none text-xs font-semibold">
                     <option value="Tous les niveaux">Tous les niveaux</option>
                     <option value="L1">L1</option>
                     <option value="L1">L2</option>
                     <option value="L1">L3</option>
                     <option value="L1">M1</option>
                     <option value="L1">M2</option>
                  </select>
               </div>


               <div>
                  <h2 class="mt-5 text-[14px] lg:text-[18px] font-bold text-gray-900">
                     Liste des classes
                  </h2>

                  <p class="mt-1 text-[11px] lg:text-[13px]  text-gray-500">
                     6 classes enregistrées
                  </p>
               </div>


               <div class="mt-5 gap-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                  <!-- Cards 1 -->
                  <div class="rounded-xl border border-gray-300 bg-white p-5 shadow-sm ">
                     <!-- Icon + code -->
                     <div class="flex justify-between">
                        <div class="mb-4 flex flex-col">

                           <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 border border-red-500/20 text-[#DD3333]">

                              <i class="fa-solid fa-code text-sm"></i>

                           </div>

                           <span class="mt-3 text-xs font-semibold text-[#DD3333]">
                              DEV-WEB-L1-A
                           </span>

                        </div>
                        <div class=" flex flex-col gap-0.5 cursor-pointer">
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- Nom -->
                     <h3 class="text-[14px] lg:text-[16px] font-bold text-gray-900">
                        L1 Développement Web A
                     </h3>

                     <div class=" mt-3 border-t border-gray-300"></div>

                     <!-- texte -->
                     <div>

                        <!-- filiere -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Filière
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              Développement Web
                           </span>
                        </div>

                        <!-- niveau -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Niveau
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold bg-red-50 px-2 border border-red-500/20 rounded-sm text-[#DD3333]">
                              L1
                           </span>
                        </div>

                        <!-- capacité -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Capacité
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              40 étudiants
                           </span>
                        </div>

                     </div>


                     <!-- Boutons -->
                     <div class="mt-5 flex gap-2">

                        <button class="flex-1 rounded-lg border border-gray-300 hover:border-red-600/40 hover:text-[#DD3333] px-3 py-2 text-xs font-medium text-gray-700 transition">
                           Modifier
                        </button>

                        <button class="flex-1 rounded-lg border border-gray-300 bg-[#DD3333] hover:bg-[#870202] text-white  px-3 py-2 text-xs font-medium text-gray-700 transition text-white">
                           Détails
                        </button>

                     </div>
                  </div>

                  <!-- Cards 2 -->
                  <div class="rounded-xl border border-gray-300 bg-white p-5 shadow-sm ">
                     <!-- Icon + code -->
                     <div class="flex justify-between">
                        <div class="mb-4 flex flex-col">

                           <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 border border-red-500/20 text-[#DD3333]">

                              <i class="fa-solid fa-code text-sm"></i>

                           </div>

                           <span class="mt-3 text-xs font-semibold text-[#DD3333]">
                              DEV-WEB-L2-A
                           </span>

                        </div>
                        <div class=" flex flex-col gap-0.5 cursor-pointer">
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- Nom -->
                     <h3 class="text-[14px] lg:text-[16px] font-bold text-gray-900">
                        L2 Développement Web A
                     </h3>

                     <div class=" mt-3 border-t border-gray-300"></div>

                     <!-- texte -->
                     <div>

                        <!-- filiere -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Filière
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              Développement Web
                           </span>
                        </div>

                        <!-- niveau -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Niveau
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold bg-red-50 px-2 border border-red-500/20 rounded-sm text-[#DD3333]">
                              L2
                           </span>
                        </div>

                        <!-- capacité -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Capacité
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              45 étudiants
                           </span>
                        </div>

                     </div>


                     <!-- Boutons -->
                     <div class="mt-5 flex gap-2">

                        <button class="flex-1 rounded-lg border border-gray-300 hover:border-red-600/40 hover:text-[#DD3333] px-3 py-2 text-xs font-medium text-gray-700 transition">
                           Modifier
                        </button>

                        <button class="flex-1 rounded-lg border border-gray-300 bg-[#DD3333] hover:bg-[#870202] text-white  px-3 py-2 text-xs font-medium text-gray-700 transition text-white">
                           Détails
                        </button>

                     </div>
                  </div>

                  <!-- Cards 3 -->
                  <div class="rounded-xl border border-gray-300 bg-white p-5 shadow-sm ">
                     <!-- Icon + code -->
                     <div class="flex justify-between">
                        <div class="mb-4 flex flex-col">

                           <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 border border-red-500/20 text-[#DD3333]">

                              <i class="fa-solid fa-network-wired text-sm"></i>

                           </div>

                           <span class="mt-3 text-xs font-semibold text-[#DD3333]">
                              RES-INFO-L1-A
                           </span>

                        </div>
                        <div class=" flex flex-col gap-0.5 cursor-pointer">
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- Nom -->
                     <h3 class="text-[14px] lg:text-[16px] font-bold text-gray-900">
                        L1 Réseaux Informatiques A
                     </h3>

                     <div class=" mt-3 border-t border-gray-300"></div>

                     <!-- texte -->
                     <div>

                        <!-- filiere -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Filière
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              Réseaux Informatiques
                           </span>
                        </div>

                        <!-- niveau -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Niveau
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold bg-red-50 px-2 border border-red-500/20 rounded-sm text-[#DD3333]">
                              L1
                           </span>
                        </div>

                        <!-- capacité -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Capacité
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              35 étudiants
                           </span>
                        </div>

                     </div>


                     <!-- Boutons -->
                     <div class="mt-5 flex gap-2">

                        <button class="flex-1 rounded-lg border border-gray-300 hover:border-red-600/40 hover:text-[#DD3333] px-3 py-2 text-xs font-medium text-gray-700 transition">
                           Modifier
                        </button>

                        <button class="flex-1 rounded-lg border border-gray-300 bg-[#DD3333] hover:bg-[#870202] text-white  px-3 py-2 text-xs font-medium text-gray-700 transition text-white">
                           Détails
                        </button>

                     </div>
                  </div>

                  <!-- Cards 4 -->
                  <div class="rounded-xl border border-gray-300 bg-white p-5 shadow-sm ">
                     <!-- Icon + code -->
                     <div class="flex justify-between">
                        <div class="mb-4 flex flex-col">

                           <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 border border-red-500/20 text-[#DD3333]">

                              <i class="fa-solid fa-laptop-code text-sm"></i>

                           </div>

                           <span class="mt-3 text-xs font-semibold text-[#DD3333]">
                              GENIE-LOG-L3-A
                           </span>

                        </div>
                        <div class=" flex flex-col gap-0.5 cursor-pointer">
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- Nom -->
                     <h3 class="text-[14px] lg:text-[16px] font-bold text-gray-900">
                        L3 Génie Logiciel A
                     </h3>

                     <div class=" mt-3 border-t border-gray-300"></div>

                     <!-- texte -->
                     <div>

                        <!-- filiere -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Filière
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              Génie Logiciel
                           </span>
                        </div>

                        <!-- niveau -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Niveau
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold bg-red-50 px-2 border border-red-500/20 rounded-sm text-[#DD3333]">
                              L3
                           </span>
                        </div>

                        <!-- capacité -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Capacité
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              30 étudiants
                           </span>
                        </div>

                     </div>


                     <!-- Boutons -->
                     <div class="mt-5 flex gap-2">

                        <button class="flex-1 rounded-lg border border-gray-300 hover:border-red-600/40 hover:text-[#DD3333] px-3 py-2 text-xs font-medium text-gray-700 transition">
                           Modifier
                        </button>

                        <button class="flex-1 rounded-lg border border-gray-300 bg-[#DD3333] hover:bg-[#870202] text-white  px-3 py-2 text-xs font-medium text-gray-700 transition text-white">
                           Détails
                        </button>

                     </div>
                  </div>

                  <!-- Cards 5 -->
                  <div class="rounded-xl border border-gray-300 bg-white p-5 shadow-sm ">
                     <!-- Icon + code -->
                     <div class="flex justify-between">
                        <div class="mb-4 flex flex-col">

                           <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 border border-red-500/20 text-[#DD3333]">

                              <i class="fa-solid fa-code text-sm"></i>

                           </div>

                           <span class="mt-3 text-xs font-semibold text-[#DD3333]">
                              DEV-WEB-L2-B
                           </span>

                        </div>
                        <div class=" flex flex-col gap-0.5 cursor-pointer">
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- Nom -->
                     <h3 class="text-[14px] lg:text-[16px] font-bold text-gray-900">
                        L2 Développement Web B
                     </h3>

                     <div class=" mt-3 border-t border-gray-300"></div>

                     <!-- texte -->
                     <div>

                        <!-- filiere -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Filière
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              Développement Web
                           </span>
                        </div>

                        <!-- niveau -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Niveau
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold bg-red-50 px-2 border border-red-500/20 rounded-sm text-[#DD3333]">
                              L2
                           </span>
                        </div>

                        <!-- capacité -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Capacité
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              38 étudiants
                           </span>
                        </div>

                     </div>

                     <!-- Boutons -->
                     <div class="mt-5 flex gap-2">

                        <button class="flex-1 rounded-lg border border-gray-300 hover:border-red-600/40 hover:text-[#DD3333] px-3 py-2 text-xs font-medium text-gray-700 transition">
                           Modifier
                        </button>

                        <button class="flex-1 rounded-lg border border-gray-300 bg-[#DD3333] hover:bg-[#870202] text-white  px-3 py-2 text-xs font-medium text-gray-700 transition text-white">
                           Détails
                        </button>

                     </div>
                  </div>

                  <!-- Cards 6 -->
                  <div class="rounded-xl border border-gray-300 bg-white p-5 shadow-sm ">
                     <!-- Icon + code -->
                     <div class="flex justify-between">
                        <div class="mb-4 flex flex-col">

                           <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-red-50 border border-red-500/20 text-[#DD3333]">

                              <i class="fa-solid fa-network-wired text-sm"></i>

                           </div>

                           <span class="mt-3 text-xs font-semibold text-[#DD3333]">
                              RES-INFO-L2-A
                           </span>

                        </div>
                        <div class=" flex flex-col gap-0.5 cursor-pointer">
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                           <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                        </div>
                     </div>

                     <!-- Nom -->
                     <h3 class="text-[14px] lg:text-[16px] font-bold text-gray-900">
                        L2 Réseaux Informatiques A
                     </h3>

                     <div class=" mt-3 border-t border-gray-300"></div>

                     <!-- texte -->
                     <div>

                        <!-- filiere -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Filière
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              Réseaux Informatiques
                           </span>
                        </div>

                        <!-- niveau -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Niveau
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold bg-red-50 px-2 border border-red-500/20 rounded-sm text-[#DD3333]">
                              L2
                           </span>
                        </div>

                        <!-- capacité -->
                        <div class="mt-4 flex justify-between items-center">
                           <p class=" text-[10px] lg:text-[12px] font-medium uppercase text-gray-400">
                              Capacité
                           </p>

                           <span class=" text-[10px] lg:text-[12px] font-bold text-gray-700">
                              42 étudiants
                           </span>
                        </div>

                     </div>


                     <!-- Boutons -->
                     <div class="mt-5 flex gap-2">

                        <button class="flex-1 rounded-lg border border-gray-300 hover:border-red-600/40 hover:text-[#DD3333] px-3 py-2 text-xs font-medium text-gray-700 transition">
                           Modifier
                        </button>

                        <button class="flex-1 rounded-lg border border-gray-300 bg-[#DD3333] hover:bg-[#870202] text-white  px-3 py-2 text-xs font-medium text-gray-700 transition text-white">
                           Détails
                        </button>

                     </div>
                  </div>


               </div>
            </div>

            <!-- footer -->
            <footer class="mt-8 bg-white p-6 border-t border-gray-300 hidden lg:block text-xs text-gray-500 shadow-lg ">
               <p class=" w-[185px] mx-auto ">© 2026 E221 — Gestion scolaire</p>
            </footer>
         </div>

      </div>


      <!-- MENU DU BAS -->
      <div class="fixed bottom-0 left-0 z-50 w-full bg-white border-t border-gray-200 shadow-lg lg:hidden">

         <div class="grid grid-cols-6 items-center py-2">

            <a href="dashboard.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
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
               class="flex flex-col items-center justify-center gap-1 py-2 text-[#DD3333] hover:bg-red-50">
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
   </div>

</body>

</html>