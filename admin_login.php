<?php
session_start(); 
include '../classes/login.class.php';
include '../classes/connect.class.php';
    

$name = "";
$password = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $login = new Login();
    $result = $login->evaluate($_POST);
    
   
    $name = $_POST['name'];
    $password = $_POST ['password'];


    if ($result != "") {
      // error empty
      echo "<div  style= 'position: absolute;  font-size:12px; color:red;'>";
      echo "<br> The following errors occured:<br><br>";
      echo $result;
      echo "</div>";
    }else{
     
      header("location: ../admin_index.php");
      die;
    }

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../assets/fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.4.0-web/css/brands.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.4.0-web/css/solid.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>VTwine - Admin-login</title>
  </head>
  <body class="">
    <div class="flex justify-center items-center p-[3rem]">
      <div>
        <h2 class="flex justify-center text-center text-[3rem]">Login!</h2>
          <form method="POST" action="admin.login.php" class="" id="form">
            <div class="">
              <div class="">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                  Name
                </label>
                <input value="<?php echo $name ?>"
                class="appearance-none block w-full bg-gray-200 text-gray-700 w-full
                 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                 name="name" type="text" placeholder="Name" 
                 id="name" required />
                 <p class="text-red-600 text-xs italic p-[.5rem]">sajnasfc asjcnaslc</p>
              </div>
              <div class="">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Password</label>
                <input value="<?php echo $password ?>" 
                 class="appearance-none block w-full bg-gray-200 text-gray-700 
                 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
                 focus:bg-white focus:border-gray-500"
                 name="password" type="password" placeholder="Password"
                  id="password" required>
                  <p class="text-red-600 text-xs italic p-[.5rem]">sajnasfc asjcnaslc</p>
              </div>
              <div class="flex justify-center items-center  ">
                <div class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 
                border-green-200 font-semibold text-green-500 hover:text-white hover:bg-green-500 hover:border-green-500 
                focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition-all text-sm 
                dark:focus:ring-offset-gray-800">
                <input type="submit" value="Login">
              </div>
              </div>
            </div>
          </form>
      </div>
    </div>
    
  </body>
</html>