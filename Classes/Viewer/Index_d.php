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
               <li><a href="">Login</a></li>
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
   <div class="row" id="responsiveX">
       <div class="col-2">
           <h1>We Sell Life Style </h1>
           <p>Success isn't always about greatness. It's about
           consistency. Constent<br>hard work gains success. Greatness
           will come.</p>
          <a href="" class="btn">Explore Now &#9755; </a>
       </div>
       <div class="col-2">
          <img src="images/imagel.png">
       </div>
    </div>
</div>
  <! ------------- featured categories ------------- > 
  <div class = "categories">
    <div class="small-container">
      <div class = "row">
      <div class = "col-3">
        <img src="images/category1.png">
      </div>
      <div class = "col-3">
        <img src="images/category2.png">
      </div> 
      <div class = "col-3">
         <img src="images/category3.png">
      </div> 
   </div>
 </div>
</div>

 <! ------------- featured categories ------------- > 
    <div class="small-container">
      <h2 class = "title">Featured Products </h2>
      <div class ="row" >
        <div class = "col-4"> 
          <img src="images/Product-1.png">
          <h4> Black T-Shirt By Puma </h4> 
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
          <h4> Black SweetPants By Nike </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-O"></i>
          </div>
          <p>$100.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/Product-3.png">
          <h4> Grey Shoes By Nike </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$200.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/Product-4.png">
          <h4> Black Fossil Watch </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$500.00</p>
        </div>
      </div>
       <h2 class = "title"> Technology  </h2>
       <! ------------- mobile  categories ------------- > 
        <div class ="row" >
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
          <p>$1000.00</p>
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
          <p>$1200.00</p>
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
          <p>$450.00</p>
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
          <p>$1500.00</p>
        </div>
      </div>
      <! ------------- watches category------------- > 
      <div class ="row" >
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
          <p>$500.00</p>
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
          <p>$400.00</p>
        </div>
        <div class = "col-4"> 
          <img src="images/watch1.png">
          <h4> RealMe Watch </h4> 
          <div class="rating">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
          </div>
          <p>$300.00</p>
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
      </div>

    </div>
<! ------------- offer ------------- > 
    <div class = "offer">
      <div class="small-container">
        <div class="row"> 
          <div class="col-2">
            <img src= "images/exc.png" class="offer-img">
          </div>
          <div class="col-2">
            <p>Exclusively Avilable on H.A.M Store </p>
            <h1>Apple Watch <br>Series 6</h1>
            <small>Measure your blood oxygen level with a revolutionary new sensor and app. See your fitness metrics at a glance with the enhanced Always-On Retina display. With Apple Watch Series 6 on your wrist, a healthier, more active, more connected life is within reach.<br></small>
             <a href="" class="btn">Buy Now &#8594; </a>
          </div>
        </div>
      </div>
    </div>

    <!------------- test------------->
    <div class="test"> 
      <div class="small-container">
        <div class="row">
          <div class="col-3">
              <i class="fas fa-quote-left"></i>
              <h3> Scarlet Parker </h3>
              <img src ="images/user-1.png">
            <p> I cannot say if I shall have the opportunity to recommend your company to anyone else, but I would certainly do so.  Your standard of customer service is very high.</p>
            <div class="rating">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="col-3">
              <i class="fas fa-quote-left"></i>
              <h3> Dave Kap </h3>
              <img src ="images/user-2.png">
            <p> I received my order last week and am very happy with it.  Thank you (and World Import) for your help and for restoring my faith in Internet purchases! </p>
            <div class="rating">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="col-3">
         
              <i class="fas fa-quote-left"></i>
              <h3> Mike Smith </h3>
              <img src ="images/user-3.png">
            <p> The DVD player arrived today. Looks good and performs even better. Thank you for very good service to a difficult customer.</p>
            <div class="rating">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
<!------------- brands------------->
     <div class="brands">
      <div class="small-container">
        <div class="row">
           <div class="col-5">
            <img src = images/logo-1.png >
          </div>
           <div class="col-5">
            <img src = images/logo-2.png >
          </div>
           <div class="col-5">
            <img src = images/logo-3.png >
          </div>
           <div class="col-5">
            <img src = images/logo-4.png >
          </div>
           <div class="col-5">
            <img src = images/logo-5.png >
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
