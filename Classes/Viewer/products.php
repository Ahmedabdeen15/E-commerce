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
               <li><form action="#.php">
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

    <div class="small-container">
      <div class ="row row-2" >
        <h2> ALL Products </h2>
        <select>
          <option>Default Sorting</option>
          <option>Short by price</option>
          <option>Short by popularity</option>
          <option>Short by rating</option>
          <option>Short by sale </option>
        </select>
      </div>


      <div class ="row" >
        <div class = "col-4"> 
          <img src="images/Product-1.png">
          <h4> Red Printed T-Shirt </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/Product-2.png">
          <h4> Grey Adidas Hoddie </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$200.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/Product-3.png">
          <h4> IPhone 12 Pro Max </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$2000.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/Product-4.png">
          <h4> Air Pods </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$500.00</p>
        </div>
       <div class = "col-4"> 
          <img src="images/mobile.png">
          <h4> IPhone X 64GB </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/mobile2.png">
          <h4> Samsung S20 Ultra </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$200.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/mobile1.png">
           <h4> Redmi Note 9 Pro </h4> 
           <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$2000.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/mobile3.png">
          <h4> Hwawi Mate 40 Pro  </h4>
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$500.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/watch3.png">
          <h4> Apple Watch Series 3 </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/watch2.png">
          <h4> Samsung Watch </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$200.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/watch1.png">
          <h4> Realme Watch </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$2000.00</p>
        </div>
        <div class = "col-4"> 
        <img src="images/watch4.png">
          <h4> Rolex Watch </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$500.00</p>
        </div>
        <?php echo'<div class = "col-4"> 
          <img src="images/Product-1.png">
          <h4> Red Printed T-Shirt </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class = "col-4"> 
        <img src="images/watch4.png">
          <h4> Rolex Watch </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$500.00</p>
        </div>'; ?>
      </div>
      <div class="row">
        <div class = "page-btn">
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>&#8594;</span>
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
    

 <!------------- footer------------->
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



</body>
</html>
