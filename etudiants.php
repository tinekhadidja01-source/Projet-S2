<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body class="bg-[#F9FAFB] overflow-hidden tracking-wide">
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

         <div class=" p-2 mt-2 pt-4 w-[90%] h-[402px] mx-auto ">


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
                  class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
                  <i class="fa-solid fa-chalkboard text-sm w-5"></i>
                  <span>Classes</span>
               </a>

               <a href="etudiants.php"
                  class="  flex px-6 py-2 gap-4 items-center rounded-sm text-[#DD3333] bg-white text-sm font-regular border border-white ">
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
               <div class=" flex justify-between items-center">

                  <div>
                     <h2 class="text-[16px] lg:text-[23px] font-bold text-gray-900">
                        Étudiants
                     </h2>

                     <p class="mt-1 text-[10px] lg:text-[14px] text-gray-500">
                        Consultez et gérez les étudiants de l'établissement.
                     </p>
                  </div>

                  <a href="ajoutetud.php" class="bg-[#DD3333] hover:bg-[#870202] whitespace-nowrap text-white flex items-center text-[9px] md:text-[12px] lg:text-[14px] gap-1 md:gap-2 lg:gap-3 font-semibold px-3 lg:px-6 py-1 md:py-2 lg:py-2 rounded-md">
                     <i class="fa-solid fa-plus w-3"></i>
                     <p>Ajouter un etudiant</p>
                  </a>
               </div>

               <!-- LES 3 CARDS -->
               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5">

                  <!-- CARDS 1 -->
                  <div class=" rounded-xl border border-gray-300 bg-white px-6  py-4 shadow-sm">

                     <div class="flex gap-8 items-center">
                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-green-200 rounded-lg bg-green-50 text-green-600">
                           <i class="fa-solid fa-graduation-cap ml-0.5 text-sm w-5"></i>
                        </div>

                        <!-- TEXTE -->
                        <div>
                           <p class="text-sm font-medium text-gray-500">
                              Total étudiants
                           </p>

                           <div class="flex items-end gap-3">
                              <p class="text-lg lg:text-2xl font-bold">
                                 548
                              </p>
                           </div>

                        </div>
                     </div>
                  </div>

                  <!-- CARDS 2 -->
                  <div class=" rounded-xl border border-gray-300 bg-white  px-6  py-4 shadow-sm">

                     <div class="flex gap-8  items-center">

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center justify-center border border-blue-200 rounded-lg bg-blue-50 text-[#737DEB]">
                           <i class="fa-solid fa-mars text-lg w-4"></i>
                        </div>

                        <!-- TEXTE -->
                        <div>
                           <p class="text-sm font-medium text-gray-500">
                              Garçons
                           </p>

                           <div class="flex">
                              <p class="text-lg lg:text-2xl font-bold">
                                 290
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- CARDS 3 -->
                  <div class=" rounded-xl border border-gray-300 bg-white px-6  py-4 shadow-sm">

                     <div class="flex gap-8  items-center ">

                        <!-- ICONE -->
                        <div class="flex h-11 w-11 items-center border border-red-200 justify-center rounded-lg bg-red-50 text-[#DD3333] ">
                           <i class="fa-solid fa-venus text-lg w-4"></i>
                        </div>

                        <!-- TEXTE -->
                        <div>
                           <p class="text-sm font-medium text-gray-500">
                              Filles
                           </p>

                           <div class="flex">
                              <p class="text-lg lg:text-2xl font-bold">
                                 258
                              </p>
                           </div>
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

               <!-- TABLEAUX -->
               <div class=" mt-5 bg-white border border-gray-300 rounded-xl overflow-x-auto overflow-hidden">
                  <div class="p-4">
                     <h2 class=" text-[14px] lg:text-[16px] font-bold text-gray-900">
                        Liste des étudiants
                     </h2>

                     <p class="mt-1 text-[11px] lg:text-[13px]  text-gray-500">
                        548 étudiants enregistrés
                     </p>
                  </div>

                  <table class="w-full ">

                     <thead class="bg-[#DD3333]  text-left text-white border-t border-b border-gray-300">

                        <tr class="text-[11px] md:text-[13px]">
                           <th class="px-6 py-1 lg:py-4 uppercase font-regular">
                              Matricule
                           </th>

                           <th class="px-4 py-1 lg:py-4 uppercase font-regular">
                              Nom
                           </th>

                           <th class="px-2 md:px-6 py-1 lg:py-4 uppercase font-regular">
                              Prénom
                           </th>

                           <th class="px-4 lg:px-6 py-1 lg:py-4 uppercase font-regular">
                              Sexe
                           </th>

                           <th class="px-4 lg:px-6 py-1 lg:py-4 uppercase font-regular text-left ">
                              Classe
                           </th>

                           <th class="px-3 md:px-4 lg:px-6 py-2 lg:py-4 text-left uppercase font-regular">
                              Filière
                           </th>

                           <th class="px-1 md:px-6 py-1 lg:py-4 text-right  uppercase font-regular">
                              Niveau
                           </th>

                           <th class="px-6 py-1 lg:py-4 text-right font-regular uppercase">
                              Action
                           </th>

                        </tr>

                     </thead>

                     <tbody class="divide-y divide-gray-100">

                        <!-- LIGNE 1 -->
                        <tr class=" text-[10px] lg:text-[13px] font-bold text-left items-center hover:bg-red-50">

                           <td class="px-6 py-1 lg:py-4">

                              <span class=" text-gray-900">
                                 E2210548
                              </span>

                           </td>

                           <td class="px-4 py-2 lg:py-4 font-medium text-gray-900">
                              Diop
                           </td>

                           <td class="px-2 md:px-6 py-2 lg:py-4  font-medium text-gray-600">
                              Awa
                           </td>

                           <td class="px-4 lg:px-6 py-2 lg:py-4">
                              <span class="rounded-md bg-red-50 px-3 py-1 lg:py-2 font-medium text-[#DD3333]">
                                 F
                              </span>
                           </td>

                           <td class="px-1 lg:px-6 py-2 lg:py-4   font-medium text-gray-600">
                              L2 DEV-WEB
                           </td>

                           <td class=" whitespace-nowrap px-3 md:px-4 lg:px-6 py-2 lg:py-4 text-left  font-medium text-gray-600">
                              Développement Web
                           </td>

                           <td class="px-1 md:px-6 py-2 lg:py-4 text-right">
                              <span class="rounded-lg bg-gray-100 px-2.5 py-1 lg:py-2 font-semibold font-medium text-gray-600">
                                 L2
                              </span>
                           </td>

                           <td class="px-6 py-1 lg:py-4 text-right ">
                              <div class=" flex gap-0.5 cursor-pointer  w-full justify-end">
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                              </div>

                           </td>

                        </tr>

                        <!-- LIGNE 2 -->
                        <tr class=" text-[10px] lg:text-[13px] font-bold items-center hover:bg-red-50">

                           <td class="px-6 py-1 lg:py-4">

                              <span class=" text-gray-900">
                                 E2210547
                              </span>

                           </td>

                           <td class="px-4 py-2 lg:py-4 font-medium text-gray-900">
                              Fall
                           </td>

                           <td class="px-2 md:px-6 py-2 lg:py-4  font-medium text-gray-600">
                              Aliou
                           </td>

                           <td class="px-4 lg:px-6 py-2 lg:py-4">
                              <span class="rounded-md bg-blue-50 px-2.5 py-1 lg:py-2 font-medium text-[#737DEB]">
                                 M
                              </span>
                           </td>

                           <td class="px-1 lg:px-6 py-2 lg:py-4 font-medium text-gray-600">
                              L1 RES-INFO
                           </td>

                           <td class="whitespace-nowrap px-3 md:px-4 lg:px-6 py-2 lg:py-4 text-left  font-medium text-gray-600">
                              Réseaux et Systèmes
                           </td>

                           <td class="px-1 md:px-6 py-2 lg:py-4 text-right">
                              <span class="rounded-lg bg-gray-100 px-2.5 py-1 lg:py-2   font-semibold font-medium text-gray-600">
                                 L1
                              </span>
                           </td>

                           <td class="px-6 py-1 lg:py-4 text-right ">
                              <div class=" flex gap-0.5 cursor-pointer  w-full justify-end">
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                              </div>

                           </td>

                        </tr>

                        <!-- LIGNE 3 -->
                        <tr class=" text-[10px] lg:text-[13px] font-bold items-center hover:bg-red-50">

                           <td class="px-6 py-1 lg:py-4">

                              <span class=" text-gray-900">
                                 E2210546
                              </span>

                           </td>

                           <td class="px-4 py-2 lg:py-4 font-medium text-gray-900">
                              Ba
                           </td>

                           <td class="px-2 md:px-6 py-2 lg:py-4  font-medium text-gray-600">
                              Fatou
                           </td>

                           <td class="px-4 lg:px-6 py-2 lg:py-4">
                              <span class="rounded-md bg-red-50 px-3 py-1 lg:py-2 font-medium text-[#DD3333]">
                                 F
                              </span>
                           </td>

                           <td class="px-1 lg:px-6 py-2 lg:py-4 font-medium text-gray-600">
                              L1 DEV-WEB
                           </td>

                           <td class="whitespace-nowrap px-3 md:px-4 lg:px-6 py-2 lg:py-4 text-left  font-medium text-gray-600">
                              Développement Web
                           </td>

                           <td class="px-1 md:px-6 py-2 lg:py-4 text-right">
                              <span class="rounded-lg bg-gray-100 px-2.5 py-1 lg:py-2   font-semibold font-medium text-gray-600">
                                 L1
                              </span>
                           </td>

                           <td class="px-6 py-1 lg:py-4 text-right ">
                              <div class=" flex gap-0.5 cursor-pointer  w-full justify-end">
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                              </div>

                           </td>

                        </tr>

                        <!-- LIGNE 4 -->
                        <tr class=" text-[10px] lg:text-[13px] font-bold items-center hover:bg-red-50">

                           <td class="px-6 py-1 lg:py-4">

                              <span class=" text-gray-900">
                                 E2210545
                              </span>

                           </td>

                           <td class="px-4 py-2 lg:py-4 font-medium text-gray-900">
                              Kane
                           </td>

                           <td class="px-2 md:px-6 py-2 lg:py-4  font-medium text-gray-600">
                              Moussa
                           </td>

                           <td class="px-4 lg:px-6 py-2 lg:py-4">
                              <span class="rounded-md bg-blue-50 px-2.5 py-1 lg:py-2 font-medium text-[#737DEB]">
                                 M
                              </span>
                           </td>

                           <td class="px-1 lg:px-6 py-2 lg:py-4 font-medium text-gray-600">
                              L3 GEN-LOG
                           </td>

                           <td class="whitespace-nowrap px-3 md:px-4 lg:px-6 py-2 lg:py-4 text-left  font-medium text-gray-600">
                              Génie Logiciel
                           </td>

                           <td class="px-1 md:px-6 py-2 lg:py-4 text-right">
                              <span class="rounded-lg bg-gray-100 px-2.5 py-1 lg:py-2  font-semibold font-medium text-gray-600">
                                 L3
                              </span>
                           </td>

                           <td class="px-6 py-1 lg:py-4 text-right ">
                              <div class=" flex gap-0.5 cursor-pointer  w-full justify-end">
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                              </div>

                           </td>

                        </tr>

                        <!-- LIGNE 5 -->
                        <tr class=" text-[10px] lg:text-[13px] font-bold items-center hover:bg-red-50">

                           <td class="px-6 py-1 lg:py-4">

                              <span class=" text-gray-900">
                                 E2210544
                              </span>

                           </td>

                           <td class="px-4 py-2 lg:py-4 font-medium text-gray-900">
                              Sow
                           </td>

                           <td class="px-2 md:px-6 py-2 lg:py-4  font-medium text-gray-600">
                              Mariama
                           </td>

                           <td class="px-4 lg:px-6 py-2 lg:py-4">
                              <span class="rounded-md bg-red-50  px-3 py-1 lg:py-2 font-medium text-[#DD3333]">
                                 F
                              </span>
                           </td>

                           <td class="px-1 lg:px-6 py-2 lg:py-4 font-medium text-gray-600">
                              L2 DEV-WEB
                           </td>

                           <td class="whitespace-nowrap px-3 md:px-4 lg:px-6 py-2 lg:py-4 text-left  font-medium text-gray-600">
                              Développement Web
                           </td>

                           <td class="px-1 md:px-6 py-2 lg:py-4 text-right">
                              <span class="rounded-lg bg-gray-100 px-2.5 py-1 lg:py-2  font-semibold font-medium text-gray-600">
                                 L2
                              </span>
                           </td>

                           <td class="px-6 py-1 lg:py-4 text-right ">
                              <div class=" flex gap-0.5 cursor-pointer  w-full justify-end">
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333] "></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                                 <div class="w-1 h-1 rounded-full bg-gray-400 hover:bg-[#DD3333]"></div>
                              </div>

                           </td>

                        </tr>

                     </tbody>
                  </table>

                  <div class=" border-t border-gray-100 w-full flex justify-between items-center p-6">

                     <!-- texte -->
                     <p class="text-[8px] md:text-[11px] font-medium text-gray-500 ">Affichage de 1 à 5 sur 548 étudiants</p>

                     <!-- LES ICONES -->
                     <div class="grid grid-cols-5 gap-1 md:gap-2 ">

                        <div class="w-6 h-6 md:w-7 md:h-7 rounded-md border border-gray-300 flex justify-center cursor-pointer">
                           <i class="fa-solid fa-chevron-left text-[10px] md:text-xs text-gray-400 pt-1.5"></i>
                        </div>

                        <div class="w-6 h-6 md:w-7 md:h-7 rounded-md bg-[#DD3333] flex justify-center cursor-pointer">
                           <p class="text-white text-[10px] md:text-xs font-semibold pt-1 md:pt-1.5">1</p>
                        </div>

                        <div class="w-6 h-6 md:w-7 md:h-7 rounded-md border border-gray-300 hover:border-red-500/20  flex justify-center cursor-pointer">
                           <p class="text-gray-500 hover:text-[#DD3333] text-[10px] md:text-xs font-semibold pt-1 md:pt-1.5">2</p>
                        </div>

                        <div class="w-6 h-6 md:w-7 md:h-7 rounded-md border border-gray-300 hover:border-red-500/20  flex justify-center cursor-pointer">
                           <p class="text-gray-500 hover:text-[#DD3333] text-[10px] md:text-xs font-semibold pt-1 md:pt-1.5">3</p>
                        </div>

                        <div class="w-6 h-6 md:w-7 md:h-7 rounded-md border border-gray-300 hover:border-red-500/20 flex justify-center cursor-pointer">
                           <i class="fa-solid fa-chevron-right text-[10px] md:text-xs text-gray-500 hover:text-[#DD3333] pt-1.5"></i>
                        </div>

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
               class="flex flex-col items-center justify-center gap-1 py-2 text-gray-600 hover:text-[#DD3333] hover:bg-red-50">
               <i class="fa-solid fa-chalkboard text-lg"></i>
               <span class="text-[9px] sm:text-xs">Classes</span>
            </a>

            <a href="etudiants.php"
               class="flex flex-col items-center justify-center gap-1 py-2 text-[#DD3333] hover:bg-red-50">
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