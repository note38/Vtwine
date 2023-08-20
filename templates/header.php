<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/brands.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/css/solid.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>VTwine | Home</title>
</head>
<body class="">
<section>
            <div class="flex justify-center bg-green-300">
                <p class="w-fit">Welcome to VTwine Knit Yarn Handmade!</p>
            </div>
</section>

        <header class="header z-index: 10 sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
            <!-- logo -->
            <h1 class="w-3/12">
            
                        <div class="flex">
                                <a class="flex text-3xl p-[.5rem] items-center  lg:hidden" href="">
                                <i class="fa-solid fa-bars"></i>
                                </a>

                                <a class="flex space-x-3  items-center " href=""><img class="h-11" src="./images/logo.png" >
                                <span class="hidden sm:flex text-2xl font-semibold">VTwine</span></a>
                        </div>
            </h1>

            <!-- navigation -->
            <nav class="nav font-semibold text-lg">
                <ul class="hidden lg:flex space-x-4 flex items-center">
                    <li class="min-w-fit p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer ">
                    <a href="index.php">Home</a>
                    </li>
                    <li class="min-w-fit p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 ">

                    <a class="peer p-full duration-200 cursor-pointer" href="">Shop <span><i class="fa-solid fa-chevron-down"></i></span></a>
                    <!-- the menu here -->
                    <div class="hidden absolute peer-hover:flex hover:flex w-[200px] flex-col bg-white drop-shadow-lg">

                    <?php 
                    $query = "SELECT * FROM categories ";
                    $select_all_categories = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_all_categories)){
                      $cat_title = $row['cat_title'];

                        echo "<a class='text-[.9rem] px-[1rem] py-[.3rem] hover:bg-gray-200 hover:text-green-500' href='#'> {$cat_title} </a>";

                    }
                    
                    ?>
                     <hr>
                        <a class="text-[.9rem] px-[1rem] py-[.3rem] hover:bg-green-500 hover:text-black " href="./shop.php">View All</a>

                    </div>

                    </li>
                    <li class="min-w-fit p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="./about.php">About Us</a>
                    </li>
                    <li class="min-w-fit p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="./contact.php">Contact</a>
                    </li>
                    <li class="min-w-fit p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="./admin/index.php">Admin</a>
                    </li>
                </ul>
            </nav>

            <!-- buttons --->
            <div class="w-3/12 flex justify-end ">
                <form class="flex" action="search.php" method="post">

                    <input name="search" class="lg:ext-[1.3rem] lg:p-1 " type="text" placeholder="Search..">
                    
                    <button name="submit" type="submit" class="p-2 text-center text-[1.5rem] hover:text-green-500 duration-200">
                        <i class=" fa-solid fa-magnifying-glass"></i>
                    </button>

                </form>
            </div>
        </header>




    <!-- <header>
        
        
        <section class="h-16 w-full ">
            <div class="px-4">
                <nav class="flex justify-between items-center h-16 ">
                    <div class="flex">
                        <a class="flex text-3xl p-[.5rem] items-center  sm:hidden" href=""><i class="fa-solid fa-bars"></i></a>
                        <div>
                                <a class="flex space-x-3  items-center " href=""><img class="h-11" src="assets/image/logo.png" >
                                <span class="hidden sm:flex text-2xl font-semibold">VTwine</span></a>
                        </div>
                    </div>
                    <div class="flex space-x-6 md: lg:">
                        <ul class="hidden sm:flex space-x-4 ">

                            <li><a class="" href="">Home</a></li>

                            <li><a class="" href="">Shop <span><i class="fa-solid fa-chevron-down"></i></span></i></a></li>

                            <li><a class="" href="">About Us</a></li>

                            <li><a class="" href="">Contact</a></li>

                        </ul>
                        <div class="space-x-2">
                            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                            <a href=""><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
    </header> -->
<hr>