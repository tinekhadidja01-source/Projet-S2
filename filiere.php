<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>
<body class="bg-[F9FAFB] overflow-hidden">
    <!-- Sidebar -->
   <div class="w-[20%] h-[552px] bg-[#DD3333] flex flex-col justify-between text-white " >

            <!-- LOGO -->
          <div class="border-b border-gray-50 p-4">
            <h1 class="text-[26px] font-bold">E221</h1>
            <span class="text-xs">Ecole Supérieure Professionnelle</span>
          </div>

      <div class=" mt-4 w-[90%] h-full mx-auto border border-blue-600 ">

          <!-- menu -->
         <div class=" space-y-3" >
            <a href="dashboard.php"
              class="flex px-6 py-2 gap-4 items-center rounded-sm hover:bg-red-700 text-sm font-medium">
              <i class="fa-solid fa-house text-sm w-5"></i>
             <span> Dashboard</span>
            </a>

            <a href="filiere.php"
              class=" flex px-6 py-2 gap-4 items-center rounded-sm text-[#DD3333] bg-white text-sm font-medium border border-white  ">
              <i class="fa-solid fa-house text-sm w-5"></i>
             <span>Filière</span>
            </a>
            
         </div>

      </div>
    
   </div>

    
</body>
</html>