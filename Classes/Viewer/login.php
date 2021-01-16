<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>H.A.M Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

 <div class = "header">
  <div class = "container"> 
    <div class = "navbar">
     <div class="logo">
           <a herf="index.html"><img src="images/logo.png" width="125px" height="=30px"></a>
     </div>
      <nav>
           <ul id = "MenuItems">
            <span class="first5rows">
               <li><a href="index.html">Home</a></li>
               <li><a href="product.html">Products</a></li>
               <li><a href="">About</a></li>
               <li><a href="">Contact</a></li>
               <li><a href="account.html">Account</a></li>
            </span>
               <span class="search-container">
               <li><form action="#.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form></li>
            </span>
           </ul>
       </nav>
       <a herf="cart.html"></a><img src="images/cart.png" width= "30px"></a>
        <img src="images/menu.png "class="menu-icon"width= "38px" onclick="menutoggle()">
   </div>
 </div>
 <!------------- account-page------------->
 <div class="account-page">
     <div class="container">
         <div class="row">
             <div class="col-2">
                 <img src="images/image2.png" width="100%">
             </div>
             <div class="col-2">
                 <div class="form-container">
                     <div class="form-btn">
                         <span onclick="login()">Login</span>
                         <span onclick="register()">Register</span>
                         <hr id="Indicator"> 
                     </div>
                     <!-- ----------------------------------------------------------- -->
                     <form id="LoginForm" action="login_serv.php" method="post">
                         <input type="email" placeholder="email" name="username">
                         <input type="password" placeholder="password" name="password">
                         <button type="submit" class="btn" name="submit">LogIn</button>
                         <a herf="">Forget Password</a>
                     </form>
                     <!-- ------------------------------------------------------------ -->
                     <form id="RegForm">
                      <input type="text" placeholder="FirstName">
                      <input type="text" placeholder="SecondName">
                      <input type="text" placeholder="Adresses">
                     <input type="text" placeholder="Username">
                      <input type="email" placeholder="email">
                     <input type="password" placeholder="password">
                         <input type="reset password" placeholder="reset password">
                        <select name ="" id= "" >
                           <option>Security Questions</option>
                           <option>What was your childhood nickname?</option>
                           <option>What is your favorite animal?</option>
                           <option>What is your favorite sport?</option>
                           <option> What is your favorite color? </option>
                        </select>
                           <input type="text" placeholder="Anwser">
                        <select name ="" id= "" >
                           <option>Select Your MemberShip</option>
                           <option>Normal</option>
                           <option>Platinum</option>
                           <option>Gold</option>
                        </select>
                         <button type="submit" class="btn">Register</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
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
<!-------------js for toggle Form------------->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }
</script>


</body>
</html>

