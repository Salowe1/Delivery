<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/10/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/10/js/bootstrap.min.js"></script>


    <title>Document</title>
</head>
<body>
    <script>
        setTimeout(()=>{
            document.querySelector('.loader').style.display = 'none'},2000);
              
    </script>


    <div class="loader"></div>
    
<header>
    <div class="resto">
    
    <a href="#" class="logo"><img src="./images/images/cutlery-cross-couple-of-fork-and-spoon-svgrepo-com.svg" style="width: 40px;height: 40px;"><div class="hii">
        <h3 class="">resto</h3>
                <h3 class="">resto</h3></div></a>

    </div>
    
    <nav class="nava">
        <ul class="menuList">
        <li><a id="btn" class="active" href="index.html" >home</a></li>
        <li><a id="btn" class="active" href="next.html">dishes</a></li>
        <li><a id="btn" class="active" href="about-us.html">about</a></li> 
     
        <li><a id="btn" class="active" href="./review.php">review</a></li>
        <li><a id="btn" class="active" href="order.php">order</a></li>
    </ul>


    </nav>
   

    <div class="icons">
        
       
         <div class="menu-deroulant">
         <a href="#"class="imgss" onclick="myFunction()"  ><img class="imgsss" src="./images/images/market-exhibit-svgrepo-com - Copie (2).svg" style="position:relative;width: 20px;height: 20px;"  top="5px"  ></a>

       <div id="myDropdown" class="dropdown-content" style="border-radius:10px;align-items:center;text-align:center;background-color:hsla(34, 100%, 50%, 0.075);backdrop-filter:blur(8px)"> 

            <a href="./index.html" class="lin" style="font-size:2vw;font-weight:bold;color:#192a56;"><br>Home<br></a> 
            <a href="./next.html" class="lin" style="font-size:2vw;font-weight:bold;color:#192a56;"><br> Dishes<br></a> 
            <a href="./about-us.html" class="lin" style="font-size:2vw;font-weight:bold;color:#192a56;"><br> About<br></a> 
            <a href="./review.php" class="lin" style="font-size:2vw;font-weight:bold;color:#192a56;"><br> Review<br></a> 
            <a href="./order.html" class="lin" style="font-size:2vw;font-weight:bold;color:#192a56;"><br> Order<br> <br></a> 
            
        </div>
    </div>
        <a href="#"class="imgs" id="clickCount"><img  class="im"  src="./images/images/market-purchase-svgrepo-com - Copie.svg" style=" color:#192a56;width: 20px;height: 20px;" ></a>
        
        
        <a href="#"class="imgs"><img  class="im" src="./images/images/heart-svgrepo-com - Copie.svg" style="width: 20px; height: 20px;" ></a>
        
        
        
        <a href="#"class="imgs"><img  class="im" src="./images/images/search-svgrepo-com - Copie.svg"style="width: 20px;height: 20px;" ></a>

    </div>
    
   
       <script>
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");}
        
        window.onclick = function(event){
            if(!event.target.matches('imgss')){
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for(i = 0; i < dropdowns.length; i++){
                    var openDropdown = dropdowns[i];
                    if(openDropdown.classList.contains('show')){
                        openDropdown.classList.remove('show');
                    }}}
        }
       </script>
    
    

</header>
    
    <section class="order" id="order">
        
        <form action="commande.php"  method="post">
            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input name="name" type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input name="phone" type="text" placeholder="enter your number">
                </div>

            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input name="dish" type="text" placeholder="enter food name">
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input name="additional_food" type="test" placeholder="extra with food">
                </div>

            </div>
            <div class="inputBox">
                <div class="input">
                    <span>how many</span>
                    <input name="number_of_orders" type="number" placeholder="how many orders">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input name="date_and_time" type="datetime-local">
                </div>

            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="address" placeholder="enter your address"  id="" cols="30" rows="10">
                        
                    </textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="message" placeholder="enter your message"  id="" cols="30" rows="10">
                        
                    </textarea>

                </div>

            </div>
          <a href="payment.html" class="button">Order Now</a>
        </form>
    </section>


       
   
</body>





<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>locations</h3>
            <a href="#">Africa</a>
            <a href="#">Europe</a>
            <a href="#">America</a>
            <a href="#">Asia</a>
            <a href="#">Oceanie</a>

        </div>
        <div style="position:relative;right:2vw;" class="box">
            <h3>quick links</h3>
            <a href="index.html">home</a>
            <a href="next.html">dishes</a>
            <a href="about-us.html">About</a>
            <a href="review.php">review</a>
            <a href="order.html">order</a>

        </div>
        <div style="position:relative;right:2vw;" class="box">
            <h3>contact info</h3>
            <a href="#">+226-07-07-74-18</a>
            <a href="#">+33-6-06-58-21-39 </a>
            <a href="#">+1-305-406-1897</a>
            <a href="#">+86-106-230-3486</a>
            <a href="#">+02-4756-5228</a>

        </div>
        
        <div  class="box" >
            <h3>follow us</h3>
           <div > <a href="https://www.facebook.com/" class="fbsvg" style="top:1vw;"><img  style="width: 4vw;height:3.9vw; bottom:1.9vw; position:relative;left:1.15vw;" src="./images/images/facebook.svg" alt=""><h4 class="followus">facebook</h4></a> </div> <a href="#"> </a>
           <div ><a href="https://www.twitter.com/" class="fbsvg" style="top:0.9vw;right:0.2vw;"><img  src="./images/images/twitter.svg" style="width: 2.6vw;height:2.6vw;position:relative;bottom:1.5vw;left:2.1vw;" alt=""><h4 class="followus1">twitter</h4></a> </div>  <a href="#"> </a>
           <div > <a href="https://www.instagram.com/" class="fbsvg" style="top:1vw;"><img src="./images/images/instagram.svg" style="width: 3vw;height:3vw;position:relative;bottom:2.3vw;left:1.7vw;"alt=""><h4 class="followus">instagram</h4></a></div><a href="#"> </a>
           <div > <a href="https://www.linkedin.com/" class="fbsvg" style="top:1vw;"><img src="./images/images/linkedin.svg" style="width: 3.4vw;height:3.4vw;position:relative;bottom:2.9vw;left:1.5vw;" alt=""><h4 class="followus2">linkedin</h4></a></div><a href="#"> </a>
        </div>

        <p style="font-weight:bold;">OUR LOCATION</p>
        <iframe style="position:relative;right:15.5vw;top:2vw;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1949.7330665704628!2d-2.3791715447464354!3d12.21668579135428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e1bc343b7f37f%3A0xeb6236f11b18d9f5!2sBurkina%20Institute%20of%20Technology%2C%20BIT!5e0!3m2!1sfr!2sbf!4v1656727622300!5m2!1sfr!2sbf" width="60%" height="100" style="margin: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



    </div>

    <script> window.addEventListener('load', () =>{
        const year = document.getElementById('currentYear');
    year.innerHTML = new Date().getFullYear();});
        </script>
    
    <div class="credit">copyright @ <span id="currentYear"></span>  by  <span>Salowe & Esther </span></div>
  </section>
  
  <br class="bord">
</html>