<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p>Welcome to Student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">
          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      
      <div class="sports">
        <p>My Favourite Sportsperson</p>
      </div>
      <div class="images">
          <div class="image"> <a href="https://en.wikipedia.org/wiki/Rohit_Sharma"><img src="virat.jpeg" alt="Virat"></a> 
          </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/LeBron_James"><img src="sachin.jpeg" alt="Sachin"></a>
            </div>
            
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Alex_Caruso"><img src="jadeja.jpeg" alt="Jadeja"></a>
            </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Ravichandran_Ashwin"><img src="shikhar.jpeg" alt="Dhawan"></a>  
          </div>
      </div>
      <br><br><br>
      <footer class="foot">
        <p></p>
        <p></p>
        <p></p>
        <p>Name : Aryan Raj Bhagat</p>   <p> Reg : 201900034</p>   <p>Email : aryanrajbhagt2205@gmail.com</p>
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
