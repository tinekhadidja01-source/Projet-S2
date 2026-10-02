<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>
<body class="bg-[#F9FAFB] overflow-hidden font-['Arial']">
       <!-- Sidebar -->
   <div class="fixed top-0 w-[20%] h-[552px] bg-[#DD3333] flex flex-col justify-between text-white ">

      <!-- LOGO -->

      <div class="border-b border-red-400/50 mt-2">
         <div class=" m-2 ml-5">
            <h1 class="text-[25px] font-bold">E221</h1>
            <p class="text-xs text-red-100 ">Ecole Supérieure Professionnelle</p>
         </div>
      </div>

      <div class=" p-2 mt-4 w-[90%] h-full mx-auto ">

         <!-- menu -->
         <div class=" space-y-2">
            <a href="dashboard.php"
               class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular">
               <i class="fa-solid fa-house text-sm w-5"></i>
               <span> Dashboard</span>
            </a>

            <a href="filiere.php"
               class=" flex px-6 py-2 gap-4 items-center rounded-sm text-[#DD3333] bg-white text-sm font-regular border border-white ">
               <i class="fa-solid fa-house text-sm w-5"></i>
               <span>Filieres</span>
            </a>

            <a href="niveaux.php"
               class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
               <i class="fa-solid fa-house text-sm w-5"></i>
               <span>Niveaux</span>
            </a>

            <a href="classes.php"
               class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
               <i class="fa-solid fa-house text-sm w-5"></i>
               <span>Classes</span>
            </a>

            <a href="etudiants.php"
               class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
               <i class="fa-solid fa-house text-sm w-5"></i>
               <span>Etudiants</span>
            </a>

            <a href="statistiques.php"
               class=" flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-regular ">
               <i class="fa-solid fa-house text-sm w-5"></i>
               <span>Statistiques</span>
            </a>

         </div>

      </div>

      <div class="border-b border-red-400/50 "></div>

      <a href=""
         class=" mb-3 mt-3 flex px-7 py-2 gap-6 mx-auto items-center border border-red-300 rounded-sm hover:bg-red-700 text-sm font-regular ">
         <span class="ml-8">Déconnexion</span>
         <i class="fa-solid fa-house text-sm w-5"></i>
      </a>


   </div>
    
</body>
</html>