<!DOCTYPE html>
<?php include 'insert_in_dp.php';
 session_start();
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>H.A.M Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

 <div class = "header">
  <div class = "container"> 
    <div class = "navbar">
     <div class="logo">
           <img src="images/logo.png" width="125px" height="=30px">
     </div>
      <nav>
           <ul id = "MenuItems">
            <span class="first5rows">
               <li><a href="">Home</a></li>
               <li><a href="">Products</a></li>
               <li><a href="">About</a></li>
               <li><a href="">Contact</a></li>
               <li><a href="">Account</a></li>
            </span>
               <span class="search-container">
               <li>
                 <form action="#.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form></li>
            </span>
           </ul>
       </nav>
       <img src="images/cart.png" width= "30px">
        <img src="images/menu.png "class="menu-icon"width= "38px" onclick="menutoggle()">
   </div>
 </div>

 <!--------------------->
 <form action="insert_in_dp.php" method="post" enctype="multipart/form-data">

    <div class="small-container single-product">
      <div class ="row" >
        <div class = "col-2">
          <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;" required>
          <label for="file" style="cursor: pointer;">Upload Image</label>
          <img id="output" width="100%" />
          
        
          </div>
        <div class = "col-2">
           <div class="form-container2">
                     <div class="form-btn">
                         <h3>ADD Product </h3>
                         <hr id="Indicator2"> 
                     </div>
                        <?php 
                        if(isset($_SESSION['error'])){echo '<br/>
                          <div class="form-btn">
                          <h3 style="color: red;">'.$_SESSION['error'].' </h3>
                      </div>';
                      unset($_SESSION['error']);} ?>
                         <input type="name" placeholder="The Name of your Product" name="Name" required>
                         <input type="number" placeholder="The Number of your Product " name="Quantity" required>
                         <input type="number" placeholder="The Price of your Product" name="Price"required>
                         <input type="name" placeholder="The Description of your Product" name="Description" required>
                         <input type="name" placeholder="The Category of your Product" name="Category" required>
                         <button type="submit" class="btn" name ="submit">ADD</button>
                </div>
        </div>
      </div>
    </div>
    </form>
    <!------------- footer------------->
     <div class="footer">
      <div class="container">
        <div class="row">
          <div class = "footer-col-1">
            <h3> Download Our App </h3>
            <p>Download App for Andriod and Ios Mobiles </p>
            <div class= "app-logo"> 
              <img src="images/play-store.png">
              <img src="images/app-store.png">
            </div>
          </div>
          <div class ="footer-col-2">
            <img src="images/logo.png">
            <p>Our Purpose is to Sustainably Make The Pleasure and Benefits of Markting Accessible of the Many.</p>
           </div>
          <div class = "footer-col-3">
            <h3> Useful Links </h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class = "footer-col-4">
            <h3> Follow Us </h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instgram</li>
              <li>YouTube</li>
              </ul>
        </div>
        <hr>
        <p class="copyright">Copyright 2020</p>
       </div>
      </div>
    

 <!------------- js for toggle menu------------->
 <script >
  var MenuItems = document.getElementById("MenuItems") ; 
  var rowUnder = document.getElementById("responsiveX") ; 
  var x = window.matchMedia("(max-width: 800px)")
   MenuItems.style.maxHeight = "0px";
   function menutoggle() {
    if(MenuItems.style.maxHeight=="0px")
    {
      MenuItems.style.maxHeight = "320px"
      rowUnder.style.marginTop = "320px"
    }
    else {
        MenuItems.style.maxHeight = "0px"
        rowUnder.style.marginTop = "0px"
    }
    
   }
   function testscreen(x) {
    if(!(x.matches))
    {
        MenuItems.style.maxHeight = "0px"
        rowUnder.style.marginTop = "0px"
    }
  }
  testscreen(x)
  x.addListener(testscreen)
  
</script> 
  <script>
  var loadFile = function(event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

</body>
</html>
