<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="anim.css">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/10/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/10/js/bootstrap.min.js"></script>

</head>

 <body style="background-color:#eee;">
<script>
    setTimeout(()=>{
        document.querySelector('.loader').style.display = 'none'},2000);
          
</script>
<div class="loader" style="height:100%; bottom:0.1vw;"></div>


      
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
<div style="background-color:#fd9c26d8;width:100%;height:60vw;overflow:hidden;position:absolute;"><p style="font-size:4.4vw;color:white;weight:bolder;position:relative;top:8vw;align-item:center;text-align:center;">Leave a comment <br> <h2 style="font-size:2.5vw;color:var(--black);weight:bolder;position:relative;top:12vw;align-item:center;text-align:center;">Whether you liked our food or not Say something so that<br>we can improve our services and satisfy you as much as you want<br> </h2><p>
<img style="width:3vw;height:5vw;position:relative;left:47vw;top:20vw;animation: mymove 5s infinite;" src="./images/images/down.png">
<img style="width:3vw;height:5vw;position:relative;left:52vw;top:20vw;" src="./images/images/down.png">
<img style="width:3vw;height:5vw;position:relative;left:33vw;top:20vw;" src="./images/images/down.png">
</div>


<style>@keyframes mymove {
  from {top: 200px;}
  to {top: 300px;}
}</style>


<img style="width:1vw;height:2vw;position:relative;" src="./images/images/down.png">

<div class="steps">
          <div class="step step-one">
            <div class="liner"></div>
            <span>Hello!</span>
          </div>
          <div class="step step-two">
            <div class="liner"></div>
            <span>Rating</span>
          </div>
          <div class="step step-three">
            <div class="liner"></div>
            <span>Conclusion</span>
          </div>
        </div>
                



       


 
              
                <div class="commentForm">
                <div style="position:relative;right:10vw; border-radius:5px;width:43vw;height:40vw;font-size:2vw;"><fieldset >
                <legend style="position:relative;left:18vw;top:2vw;color:var(--black);font-weight:bolder;font-size:3vw;width:16vw;align-content:center;text-align-center;border-radius:0.5vw; border-bottom:solid 0.5vw var(--black)"> Comments </legend>
               
                <div id="lsOutput"class="user"style="font-size:2vw;position:relative;left:5vw;top:3vw;background-color:white;border-radius:1vw;height:28vw;border:solid 1vw var(--black);text-align:center;align-item:center;justify-content:center;align-content:space-between;display:grid;"><br> </div>
            </fieldset>
            </div>
                    <div><form action="comment.php" method="post" id="comment" class="comment">
                        <div>
                            <input class="commentInput" id="inpKey" type="text" name="name" placeholder="Enter your name">
                        </div>
                        <br>
                        <div>
                            <input id="inpValue"style="height: 150px;" class="commentInput" type="text" name="comment" placeholder="Write your comment">
                        </div>
                        <br>
                        <div class="Btn">
                            <button class="commentButton" type="button" id="btnInsert">Send</button>
                        </div>
                    </form>
            </div>
                </div></div></div>
            </div>
            
        </div>

        <script type="text/javascript">
           
            </script>
           

                <div>
                    
                </div>
                <script type="text/javascript">
                const inpKey = document.getElementById("inpKey");
                const inpValue = document.getElementById("inpValue");
                const btnInsert = document.getElementById("btnInsert");
                const lsOutput = document.getElementById("lsOutput");
                btnInsert.onclick = function (){
                    const key =inpKey.value;
                    const value =inpValue.value;
                   
                    if(key && value){
                        localStorage.setItem(key, value);
                        location.reload();
                    }
                };

                for(let i = 0; i < localStorage.length; i++){

                    const key = localStorage.key(i);

                    const value = localStorage.getItem(key);

                    lsOutput.innerHTML += `${key}:${value}<br />`

                }
                </script>








        <script src="js/res.js"></script>
    <style>
        .cmts{
            
            justify-content: center;
            display: flex;
            align-content: space-between;
            top: 6vw;
            position:relative;
            left:3vw;

        }

        .boxcomment{
            width: 100%;
            justify-content: center;
            
            overflow: hidden
        }
        .lin{
            width: 100%;
            background-color: orange;
            height: 3px;
        }
        .cmtdiv{
            width: 20vw;
            height: 11vw;
            border: 4px solid hsl(34, 100%, 50%);
            opacity: 60%;
            font-size: 1.5vw;
            flex-direction: row;
            border-radius: 5px;
            background-color: white;
             font-family: Georgia, serif;
             color: #192a56;
             text-align: center;
             align-content: center;
             margin: 40px;
             top: 6vw;
            position:relative;
            left:3vw;


             
        }
        .cmtbtn{
            display: flex;
            justify-content: center;
            top: 30vw;
            position:relative;
            left:20vw;

        }
        .commentForm{
            width: 88vw;
            display: flex;
            justify-content: center;
            position: relative;
            left: 5vw;
            top:40vw;
            border-radius:1.3vw;
            box-shadow: var(--box-shadow);
            height:40vw;
            background-color:white;
        }
        ::placeholder{
            color: #192a56;
            
        }
        .comment{
            width: 26vw;
            position: relative;
            left: 4vw;
            top: 10vw;
            

            background-color: var(--black);
            
            
            border-radius: 15px;
            
        }
        .commentInput{
            width: 20vw;
            height: 4vw;
            background-color:white;
            position: relative;
            left:3vw;
            top: 2vw;
            font-size: 20px;
            border-radius: 5px;
            color: #192a56;
            text-align: center;
            
            
            
            
            
            
        }
        .Btn{
            display: flex;
            justify-content: center;
        }
        .commentButton{
            background-color: #192a56;
            width: 14vw;
            height: 3.5vw;
            color: white;
            font-weight: bold;
            font-size: 1.5vw;
            position:relative;
            top:3.5vw;
            
            border-radius: 5px;
        }
        .commentButton:hover{
            background-color: hsl(34, 100%, 50%);
            color: white;
        }
        .Comment:hover{
            background-color: hsl(34, 100%, 50%);
            color: white;
        }
        .Comment{
            background-color: #192a56;
            width: 9vw;
            height: 4vw;
            color: white;
            font-weight: bold;
            font-size: 1.5vw;
            position: relative;
            top: 2vw;
            
            border-radius: 5px;
            
        }


        
 .imgsss{
    display:none;
 }
 
 .menu-deroulant{
    display: none;
 }



 @media screen and (max-width: 700px) {
      
    .menu-deroulant{
        display: block;
        position: relative;
        width: 1.2vw;
        height: 1.2vw;
        right: 8.5vw;
        
        
        
    }
    html{
        font-size: 50%;
    }
    .active{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .menuList ul{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    nav ul{
        width: 100%;
        background: whitesmoke ;
        position: absolute;
        z-index: 2;
    }
    nav ul li{
        display: block;


    }
    nav ul li a{
        color:#fff
    }

    .nava  {
        position: absolute;
        top: -500px;
        left: 20px;
        right: 0;
        background: #fff;
        border-top: .1rem solid rgba(0, 0, 0, 2);
        border-bottom: .1rem solid rgba(0, 0, 0, 2);
        
        padding: 1rem;
    }
    

     .nava .close {
      display: flex;
      margin-top: 200px;
    
      
    }
    .nava a{
        display: block;
        padding: 1.5rem;
        margin: 1rem;
        font-size: 2rem;
        background: #eee;

    }
    .menuList{
        position: absolute;
        background-color: #bfa99561;
        height: 50vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(6px);
        
    }
    .icons{
        display: flex;
    }
header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #fff;
    padding: 1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: var(--box-shadow);
    box-shadow: var(--webkit-box-shadow);
    z-index: 1000;
    
}
.imgs>img{
    color: #192a56;
}

.dishes>.box-container>.box>img{
    height: auto;
    width: 100%;
  }
  header{
      padding: 1rem 2rem;
      
  }
  .order form .inputBox .input {
      width: 100% ;
  
}

    .menuList ul li{
        margin:25px 0;
        font-size: 1.2em;
        display: flex;
    }
    .resto{
        position: relative;
        left: 7vw;
        font-size: 1vw;
    }
    
    .imgs{
        display: flex;
        align-content: center;
    }
    .menu-deroulant{
        
    }
    iframe{
        left: 15vw;
    }
    .fbsvg{
        left: 25vw;
    }
    .box> h3{
        font-weight: bold;
        font-size:2.8vw;
        position: relative;
    }
    .marqueee{
        width:100vw;right:9vw;position:relative;top:3vw;border-top:2vw solid #192a56;border-bottom:2vw solid #192a56;
    }
    .text_marqueee{
        color: #192a56; font-size:4vw;text-align:center;align-content:center;font-weight:bold;
        position: relative;
        width: 1vw;
        height: 2vw;
    }
    .eat{
        color: #192a56; font-size:3.5vw;text-align:center;align-content:center;font-weight:bold;position:relative;bottom:3vw;
        height: 2vw;

    }
    

    
.imagess{
    display: flex;
    
}
.imagess{
    left: calc(50% - 200px);
    opacity: 1;
    animation: display 5s infinite;
    box-shadow: var(--box-shadow);
    box-shadow: 0px 6px 54px -2px #615d5d;
    margin-left: 100px;
    width: 730px;

}

.imagesss{
    left: calc(50% - 200px);
    opacity: 1;
    animation: display 5s infinite;
    box-shadow: var(--box-shadow);
    box-shadow: 0px 6px 54px -2px #615d5d;
    margin-left: 100px;
    width: 730px;
    display: flex;
    
}

.imagess.img:nth-child(2){
    animation-delay:2s;
}
.imagess.img:nth-child(3){
    animation-delay:4s;
}

    

  .container>.image>img{
    width: 100%;
  }
.image{
    margin-left: 100px;
    border-radius: 15px;
}
.container>.slide>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container>.slide>h3{
    color: var(--black);
    font-size: 4rem;
}
.container1>.slide1>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container1>.slide1>h3{
    color: var(--black);
    font-size: 4rem;
}



.container2>.slide2>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container2>.slide2>h3{
    color: var(--black);
    font-size: 4rem;
}



.credit{
    height: 0.5vw;
    position: relative;
}







  
.loader  {
    animation: rotate ; 
    animation-duration: 2s;
    height: 100%;
    width: 100%;
    
    
    background: white;
    padding:0;
    
    
    z-index: 999999;
    position: fixed;


  }
  
  
  
  .loader:before,
  .loader:after {   
    border-radius: 50%;
    content: '';
    display: flex;
    height: 20px;  
    width: 20px;
    position: relative;
    align-items: center;
    text-align: center;
    align-content: center;
    top:25vw;
    left:50vw;
   

  }
  .loader:before {
    animation: ball1 1s infinite; 
     
    background-color: #cb2025;
    box-shadow: 30px 0 0 #f8b334;
    margin-bottom: 10px;
  }
  .loader:after {
    animation: ball2 1s infinite; 
    background-color: #00a096;
    box-shadow: 30px 0 0 #97bf0d;
  }
  
  @keyframes rotate {
    0% { 
      -webkit-transform:  scale(1); 
      -moz-transform:  scale(1);
    }
    50% { 
      -webkit-transform: scale(1); 
      -moz-transform:  scale(1);
    }
    100% { 
      -webkit-transform: scale(1); 
      -moz-transform: scale(1);
      
      
    }
  }
  
  @keyframes ball1 {
    0% {
      box-shadow: 30px 0 0 #f8b334;
    }
    50% {
      box-shadow: 0 0 0 #f8b334;
      margin-bottom: 0;
      -webkit-transform: translate(15px,15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #f8b334;
      margin-bottom: 10px;
    }
  }
  
  @keyframes ball2 {
    0% {
      box-shadow: 30px 0 0 #97bf0d;
    }
    50% {
      box-shadow: 0 0 0 #97bf0d;
      margin-top: -20px;
      -webkit-transform: translate(15px,15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #97bf0d;
      margin-top: 0;
    }
  }
.lin:hover{
    background: var(--orange);
    color: white;
}

.imgsss, .im{
    bottom: 10px;
    position: relative;
}



.dishes{
    display: grid;
}


.box-container{
    align-content: space-between;
    position: relative;
    
    padding-bottom: 50px;
    
    box-shadow:1px 0px 50px -22px 12px #9c9a9a ; 
    
}

.african-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
    display: grid;
    
}
.african-dish:hover{
    color:var(--orange);
    text-decoration: none;
}
 


.african-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.african-dish:hover::after{
    width: 29%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes>.box-container{
    display: flex;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes>.box-container>.box>.hey>.heart,
.dishes>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes>.box-container>.box>.hey>.heart:hover,
.dishes>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}


.african-dsh{
    box-shadow:0px 0px 45px 2px #9c9a9a ; 
}



.european-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
    display: grid;
}
.european-dish:hover{
    color:var(--orange);
    text-decoration: none;
}



.european-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.european-dish:hover::after{
    width: 34%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes1{
    background-color: rgb(237, 237, 237);
}
.dishes1>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes1>.box-container{
    
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes1>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes1>.box-container>.box>.hey>.heart,
.dishes1>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes1>.box-container>.box>.hey>.heart:hover,
.dishes1>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes1>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes1>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes1>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes1>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes1>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes1>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes1>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes1>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes1>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}


.box{
    display: grid;
    width: 5vw;
}

.african-dsh{
    box-shadow:0px 0px 45px 2px #9c9a9a ; 
}



.asian-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
    display: grid;
}
.asian-dish:hover{
    color:var(--orange);
    text-decoration: none;
}



.asian-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.asian-dish:hover::after{
    width: 26%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes2>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes2>.box-container{
    display: grid;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes2>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes2>.box-container>.box>.hey>.heart,
.dishes2>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes2>.box-container>.box>.hey>.heart:hover,
.dishes2>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes2>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes2>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes2>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes2>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes2>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes2>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes2>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes2>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes2>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}









    
    }

    .followus{
        position: relative;
        left: 5.5vw;
        bottom: 5.4vw;
        font-weight: normal;

    }
    .followus1{
        position: relative;
        left: 5.5vw;
        bottom: 4.3vw;
        font-weight: normal;

    }

    .followus2{
        position: relative;
        left: 5.5vw;
        bottom: 6.2vw;
        font-weight: normal;

    }












    
.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(25rem, 1fr));
    gap: 1.5rem;
    position: relative;
    background-color: #e9e3df;
    border: 2vw solid hsl(34, 100%, 50%);
    border-radius: 10px;
    width: 100%;
    
    
}
.footer .box-container .box a{
    display: block;
    padding: 1rem 0;
    margin-top: 1vw;
    font-size: 2.5rem;
    color: var(--black);
}
.footer .box-container .box a:hover{
    color: var(--orange);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    align-content: center;
    align-items: center;
    position: relative;
    
    font-size: 2rem;
    color: var(--black);
    bottom: 2vw;
    font-weight: bold;
    
}
.footer .credit span {
    color: var(--black);
}
.loader-container{
    position: fixed;
    top:0 ;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 10000;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}


 .footer{
    text-align: center;
    color: orange;
    font-size: 2em;
    background-color: #eee;
 }

 
.box>h3{
    font-size: 1.3vw;
    font-weight: bold;
    padding-top: 1vw;
}



















:root{
    --orange:hsl(34, 100%, 50%);
    --webkit-box-shadow: 4px 6px 24px -12px #615d5d;
    --box-shadow: 4px 6px 24px -12px #696767;
;
    --black:#192a56;
    --light-color:#666;
}


*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    text-transform: capitalize;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    
    transition: all .2s linear;}
    
    
    

html, body{
    position: fixed;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: scroll;
        scroll-padding-top: 5,5rem;
        scroll-behavior: smooth;
        font-size: 62.5%;
    background-color: white;
}
    
    html{
   
    }
li{ position: relative;
    align-content: space-between;
    list-style: none;
    gap: 2rem;
}
ul{
    display: flex;
    position: relative;
    align-content: space-between;

}



.nava1>.menuList>li{ position: relative;
    align-content: space-between;
    list-style: none;
    gap: 2rem;
}
.nava1>.menuList>{
    display: flex;
    position: relative;
    align-content: space-between;

}



header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #fff;
    padding: 1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: var(--box-shadow);
    box-shadow: var(--webkit-box-shadow);
    z-index: 1000;
    
}

.logo{
    color: var(--black);
    font-size: 20px;
    font-weight: normal;
    position: relative;
    right: 100%;
    
    
}
.hii{
    position: relative;
     padding-left: 224%;
     bottom: 2.6rem;
     
     
     
 }
 .hii>h3{
     
     font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
     font-size: 2em;
     padding-left: 5%;
     
     position: absolute;
     transform: translate(-50%, -50%);
     
     
 }
 
 .hii> h3:nth-child(1){
      color: transparent;
     -webkit-text-stroke: 2px var(--black);
     
 }
 .hii> h3:nth-child(2){
     color: orange;
     animation: animate 4s ease-in-out infinite;
 }
 @keyframes animate{
    0%,100%{
      clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
    }
    50%{
    clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%)
    }
}

.menuList{
    align-content: space-between;
    position: relative;
    left: 4.5rem;
    border-bottom-color: none;
}
.menuList>li>a{
    font-size: 1.7rem;
    border-radius: .5rem;
    padding: .5rem 1.5rem;
    position: relative;
    color: var(--black);
    align-content: space-between;
    
}
li{
    list-style: none;
    position: relative;
    border-bottom: none;
}
.active{
}
.nava a.active:hover{

    color: #fff;
    background-color: orange;
} 
 

.nava a.active{
    color: var(--black);
    background-color: white;
}













.close{
    display: none;
    margin-top: -200px;
}




.search-form{
    position: fixed;
    top: -110%;
    left: 0;
    height: 100%;width: 100%;
    z-index: 1004;
    background: rgba(0, 0, 0, .8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 1rem;
}

.search-form #search-box{
    width: 50rem;
    border-bottom: .1rem solid #fff;
    padding: 1rem 0;
    color: #fff;
    font-size: 3rem;
    text-transform: none;
    background: none;
}
.search-form #search-box::placeholder{
    color: #eee;
}
.search-form #search-box::-webkit-search-cancel-button{
    -webkit-appearance: none;
}
.search-form label{
    color: #fff;
    cursor: pointer;
    font-size: 3rem;
}
.search-form label:hover{
    color: var(--orange);
}
.search-form .close{
    position: absolute;
    color: #fff;
    cursor: pointer;
    top: 2rem;
    right: 3rem;
    font-size: 5rem;
}
section{
    padding: 9rem 9%;

}
section:nth-child(even){
    background: #eee;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 10px;
    gap: 2rem;
    padding-left: 9rem;

    position: relative;
    

    color: orange;
    text-decoration: none;
    font: 700 30px consolas;
    overflow: hidden;
    
}
.container:hover{
    box-shadow: 0 0 60px 20px var(--orange);
    font: 500 25px  consolas;
    padding-bottom: 15px;
    padding-top: 15px;
    position: relative;
    font-weight: bolder;
    font-size: large;
}
.container1:hover{
    box-shadow: 0 0 60px 20px var(--orange);
    font: 500 25px consolas;
    padding-bottom: 15px;
    padding-top: 15px;
    position: relative;
    font-weight: bolder;
    font-size: large;
}
.container2:hover{
    box-shadow: 0 0 60px 20px var(--orange);
    font: 500 25px consolas;
    padding-bottom: 15px;
    padding-top: 15px;
    position: relative;
    font-weight: bolder;
    font-size: large;

}

.span{
    
    font-weight:bold ;
    font-size: medium;
    position: relative;
    bottom: 3rem;
}
.plate{
    position: relative;
    font-size: 20px;
}
.home{
    align-content: space-between;
    gap: 10px;
    
}

.shadow{
    
    background-color: whitesmoke;
    box-shadow: var(--box-shadow);
    box-shadow: 0px 6px 54px -2px #615d5d;
    border-radius: 10px;
    z-index: 1000;
    position: inherit;

    align-content: space-between;

    
    display: grid;
    font: 700 30px consolas;
    
    
    text-decoration: none;
    
}
.container1{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    top: 5vw;
    gap: 2rem;
    padding-left: 9rem;


    position: relative;
    
    color: var(--orange);
    text-decoration: none;
    font: 700 30px consolas;
    overflow: hidden;
}
.container1 span:nth-child(1){
    position: relative;
    top: 0;
    right: 0;}

.container2{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 10px;
    gap: 2rem;
    padding-left: 6rem;

    position: relative;
   
    color: var(--orange);
    text-decoration: none;
    font: 700 30px consolas;
    overflow: hidden;
}
.slide2{
    text-align: center;
}

@keyframes display{
    0%{
        transform: translateX(00px);
        opacity:1;
    }
    10%{
        transform: translateX(0);
        opacity:1;
    }
    20%{
        transform: translateX(0);
        opacity:1;
    }
    30%{
        transform: translateX(00px);
        opacity:1;
    }
    100%{
        transform: translateX(00px);
        opacity:1;
    }
}
.imagess{
    display: flex;
    
}
.imagess{
    left: calc(50% - 200px);
    opacity: 1;
    animation: display 5s infinite;
    box-shadow: var(--box-shadow);
    box-shadow: 0px 6px 54px -2px #615d5d;
    margin-left: 100px;
    width: 730px;

}

.imagesss{
    left: calc(50% - 200px);
    opacity: 1;
    animation: display 5s infinite;
    box-shadow: var(--box-shadow);
    box-shadow: 0px 6px 54px -2px #615d5d;
    margin-left: 100px;
    width: 730px;
    display: flex;
    
}

.imagess.img:nth-child(2){
    animation-delay:2s;
}
.imagess.img:nth-child(3){
    animation-delay:4s;
}

    

  .container>.image>img{
    width: 100%;
  }
.image{
    margin-left: 100px;
    border-radius: 15px;
}
.container>.slide>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container>.slide>h3{
    color: var(--black);
    font-size: 4rem;
}
.container1>.slide1>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container1>.slide1>h3{
    color: var(--black);
    font-size: 4rem;
}



.container2>.slide2>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container2>.slide2>h3{
    color: var(--black);
    font-size: 4rem;
}

.price{
    color: var(--orange);
    position: relative;
    font-size: 40px;
}
.button{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color: #fff;
    background: var(--black);
    border-radius: .5rem ;
    cursor: pointer;
    padding: .8rem 3rem;
    
}
.button:hover{
    background: var(--orange);
    letter-spacing: .1rem;
}

.button1{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color: #fff;
    background: var(--black);
    border-radius: .5rem ;
    cursor: pointer;
    padding: .8rem 3rem;
    
}
.button1:hover{
    background: var(--orange);
    letter-spacing: .1rem;
}

.button2{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color: #fff;
    background: var(--black);
    border-radius: .5rem ;
    cursor: pointer;
    padding: .8rem 3rem;
    
}
.button2:hover{
    background: var(--orange);
    letter-spacing: .1rem;
}
/*Second page/*/
.heading{
    text-align: center;
    color: var(--orange);
    padding-top: 1rem;
}


.box-container{
    align-content: space-between;
    position: relative;
    gap: 150px;
    padding-bottom: 50px;
    
    box-shadow:1px 0px 50px -22px 12px #9c9a9a ; 
    
}

.african-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
    
}
.african-dish:hover{
    color:var(--orange);
    text-decoration: none;
}
 


.african-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.african-dish:hover::after{
    width: 29%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes>.box-container{
    display: flex;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes>.box-container>.box>.hey>.heart,
.dishes>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes>.box-container>.box>.hey>.heart:hover,
.dishes>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}


.african-dsh{
    box-shadow:0px 0px 45px 2px #9c9a9a ; 
}



.european-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
}
.european-dish:hover{
    color:var(--orange);
    text-decoration: none;
}



.european-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.european-dish:hover::after{
    width: 34%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes1{
    background-color: rgb(237, 237, 237);
}
.dishes1>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes1>.box-container{
    display: flex;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes1>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes1>.box-container>.box>.hey>.heart,
.dishes1>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes1>.box-container>.box>.hey>.heart:hover,
.dishes1>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes1>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes1>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes1>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes1>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes1>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes1>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes1>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes1>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes1>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}


.african-dsh{
    box-shadow:0px 0px 45px 2px #9c9a9a ; 
}



.asian-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
}
.asian-dish:hover{
    color:var(--orange);
    text-decoration: none;
}



.asian-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.asian-dish:hover::after{
    width: 26%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes2>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes2>.box-container{
    display: flex;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes2>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes2>.box-container>.box>.hey>.heart,
.dishes2>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes2>.box-container>.box>.hey>.heart:hover,
.dishes2>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes2>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes2>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes2>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes2>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes2>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes2>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes2>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes2>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes2>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}



  
  
  .bg {
    position: absolute;
    width: 100vw;
    height: 100vh;
    background-color: #d99058;
    background-image: linear-gradient(315deg, #d99058 0%, #f8de7e 74%);
    z-index: -1;
    transition: 850ms;
  }
  
.about>.row{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    align-items: center;
}
.about>.row>.font>img{
    width: 100%;
}

.about>.row>.font{
    flex: 1 1 45rem;
}
.about>.row>.content{
    flex: 1 1 45rem;
}
.about>.row>.content>h3{
    color: var(--black);
    font-size: 4rem;
    padding: .5rem 0;
}
.about>.row>.content>p{
    color: var(--light-color);
    font-size: 1.5rem;
    padding: .5rem 0;
    line-height: 2;
}
.about>.row>.content>.icons-container{
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    padding: 1rem 0;
    margin-top:.5rem ;
}
.about>.row>.content>.icons-container>.icons{
    background: #eee;
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, 2);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    flex: 1 1 17rem;
    padding: 1.5rem 1rem;
}
.about>.row>.content>.icons-container>.icons img{
    font-size: 2.5rem;
    color: var(--black);
}
.about>.row>.content>.icons-container>.icons span{
    font-size: 1.5rem;
    color: var(--black);
}
.review .slide{
    padding: 2rem;
    box-shadow: var(--box-shadow);
    border: 1rem solid rgb(235, 234, 234);
    border-radius: .5rem;
    position: relative;
    height: 200px;
    width: 400px;
}
.review .slide .img{
    position: absolute;
    top: 2rem;right: 2rem;

}



.review{
    display: flex;
}
.user{
    display: flex;
}
.review-slider{
    margin-top: -150px;
}
.review .slider .user{
    display: flex;
    gap: 1.5rem;
    align-items: center;
    padding-bottom: 1.5rem;
}
.review .slider .user img{
    
    object-fit: cover;

}
.user h3{
    color: var(--black);
    font-size: 15px;
    padding-bottom: .5rem;
}
.slide p{
    font-size: 12px;
    line-height: 1.8;
    color: var(--light-color);
    margin-bottom: -200px;
    margin-top: 80px;
    margin-left: -100px;
}
.order form{
    width: 90rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border: .1rem solid rgb(248, 247, 247);
    background: #fff;
    padding: 1.5rem;
    margin: 0 auto;
}
.order form .inputBox{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.order form .inputBox .input {
    width: 49% ;
}
.order form .inputBox .input span{
    display: block;
    padding: .5rem 0;
    font-size: 1.5rem;
    color: var(--light-color);
}
.order form .inputBox .input  input,
.order form .inputBox .input textarea{
    background: #eee;
    border-radius: .5rem ;
    padding: 1rem;
    font-size: 1.6rem;
    color: var(--black);
    text-transform: none;
    margin-bottom: 1rem;
    width: 100%;
}
.order form .inputBox .input  input:focus,
.order form .inputBox .input textarea:focus{
   border: .1rem solid var(--orange);
}
.order form .inputBox .input textarea{
    height: 20rem;
    resize: none;
}
.order form  .button{
    margin-top: 0;
}


.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(25rem, 1fr));
    gap: 1.5rem;
    position: relative;
    background-color: #e9e3df;
    border: 2vw solid hsl(34, 100%, 50%);
    border-radius: 10px;
    width: 100%;
    
    
}
.footer .box-container .box a{
    display: block;
    padding: 1rem 0;
    margin-top: 1vw;
    font-size: 2.5rem;
    color: var(--black);
}
.footer .box-container .box a:hover{
    color: var(--orange);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    align-content: center;
    align-items: center;
    position: relative;
    
    font-size: 2rem;
    color: var(--black);
    bottom: 2vw;
    font-weight: bold;
    
}
.footer .credit span {
    color: var(--black);
}
.loader-container{
    position: fixed;
    top:0 ;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 10000;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}


 .footer{
    text-align: center;
    color: orange;
    font-size: 2em;
    background-color: #eee;
 }




.box>h3{
    font-size: 1.3vw;
    font-weight: bold;
    padding-top: 1vw;
}








@media(max-width:991px){
    html{
        font-size: 50%;
    }
    .dishes>.box-container>.box>img{
      height: auto;
      width: 100%;
    }
    header{
        padding: 1rem 2rem;
    }
    .order form .inputBox .input {
        width: 100% ;
    
}

  
    
}
@media(max-width:700px){
    nav ul{
        width: 100%;
        background: whitesmoke ;
        position: absolute;
        z-index: 2;
    }
    nav ul li{
        display: block;


    }
    nav ul li a{
        color:#fff
    }

    .nava  {
        position: absolute;
        top: -500px;
        left: 20px;
        right: 0;
        background: #fff;
        border-top: .1rem solid rgba(0, 0, 0, 2);
        border-bottom: .1rem solid rgba(0, 0, 0, 2);
        
        padding: 1rem;
    }

     .nava .close {
      display: flex;
      margin-top: 200px;
    
      
    }
    .nava a{
        display: block;
        padding: 1.5rem;
        margin: 1rem;
        font-size: 2rem;
        background: #eee;

    }
    
}
@media(max-width:991px){
    html{
        font-size: 50%;
    }
}






.icons>a,
.icons>img{
    cursor: pointer;
    margin-left: .5rem;
    height: 4.5rem;
    line-height: 4.5rem;
    width: 4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color: var(--black);
    border-radius: 50%;
    background: #eee;
    padding: 8px 8px 8px 8px;

    
}
.imgs:hover{
    
     border: solid 2px orange;
     position: relative;
     
    
}

.imgs>img:hover{
    color: orange;
}


.icons>a>img{
  position: relative;
  
  
}
.icons img:hover
{
    transform: rotate(360deg);
   
}

.imags:hover{
    background: orange;
}








  
  .loader  {
    animation: rotate ; 
    animation-duration: 2s;
    height: 100%;
    width: 100%;
    
    
    background: white;
    padding:0;
    
    
    z-index: 999999;
    position: fixed;


  }
  
  
  
  .loader:before,
  .loader:after {   
    border-radius: 50%;
    content: '';
    display: flex;
    height: 20px;  
    width: 20px;
    position: relative;
    align-items: center;
    text-align: center;
    align-content: center;
    top:25vw;
    left:50vw;
   

  }
  .loader:before {
    animation: ball1 1s infinite; 
     
    background-color: #cb2025;
    box-shadow: 30px 0 0 #f8b334;
    margin-bottom: 10px;
  }
  .loader:after {
    animation: ball2 1s infinite; 
    background-color: #00a096;
    box-shadow: 30px 0 0 #97bf0d;
  }
  
  @keyframes rotate {
    0% { 
      -webkit-transform:  scale(1); 
      -moz-transform:  scale(1);
    }
    50% { 
      -webkit-transform: scale(1); 
      -moz-transform:  scale(1);
    }
    100% { 
      -webkit-transform: scale(1); 
      -moz-transform: scale(1);
      
      
    }
  }
  
  @keyframes ball1 {
    0% {
      box-shadow: 30px 0 0 #f8b334;
    }
    50% {
      box-shadow: 0 0 0 #f8b334;
      margin-bottom: 0;
      -webkit-transform: translate(15px,15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #f8b334;
      margin-bottom: 10px;
    }
  }
  
  @keyframes ball2 {
    0% {
      box-shadow: 30px 0 0 #97bf0d;
    }
    50% {
      box-shadow: 0 0 0 #97bf0d;
      margin-top: -20px;
      -webkit-transform: translate(15px,15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #97bf0d;
      margin-top: 0;
    }
  }

  .menu-deroulant{
    position: relative;
  }

.menu-deroulant{
    display: inline-block;
    position: relative;
}
.menu-deroulant div:hover{
    position: inherit;
    display: inline-block;
    top: 1vw;
}
.menu-deroulant div{
 display: none;
 position: absolute;
 background-color: white;
 min-width: 20vw;
 z-index: 1;
}

div div .link{
    color: hsl(34, 100%, 50%);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}
.links:hover{
    background-color: hsl(34, 100%, 50%);
    color: white;
    
}

.menu-deroulant:hover div{
    display: grid;
}
.menu-deroulant>.imgss{
    
    
    font-size: 16px;
    cursor: pointer;
    margin-left: .5rem;
    height: 4.5rem;
    line-height: 4.5rem;
    width: 4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color: var(--black);
    border-radius: 50%;
    background: #eee;
    padding: 8px 8px 8px 8px;
}

.links:hover{
    cursor: pointer;
    background-color: hsl(34, 100%, 50%);
    color: white;
    position: relative;

}



.links:hover{

position: relative;

}

.links:hover{
    box-shadow: 0px 6px 54px -2px var(--orange) ;
    position: relative;
    width: 5vw;
    height: 2vw;
    padding-top: 2vw;
    background: var(--orange);
    
    
}

.links{
    width: 5vw;
    height: 2vw;
    padding-top: 2vw;
    background: white;
    position: relative;
    left: 500px;
    -webkit-animation: slideIn 2s forwards;
    -moz-animation: slideIn 2s forwards;
    animation: slideIn 2s forwards;
    border-radius: 15px;
    
  }
  @-webkit-keyframes slideIn {
    0% {
      transform: translateX(0);
      opacity: 0;
    }
    
    100% {
      transform: translateX(-750px);
    }
  }
  @-moz-keyframes slideIn {
    0% {
      /* transform: translateX(0); */
      opacity: 0;
    }
    
    100% {
      transform: translateX(-750px);
    }
  }
  @keyframes slideIn {
    0% {
      transform: translateX(0);
      opacity: 0;
    }
    
    100% {
      transform: translateX(-750px);
    }
  }

.imgsss{
    position: relative;
    top: 5px;
}


.menu-deroulant>.imgss:hover{
    
    border: solid 2px orange;
    position: relative;
    
   
}


.fbsvg{
    position: relative;
    width: 1vw;
    height: 1vw;
}


 .bord{
    color: var(--orange);
    height: 7vw;
    position: relative;
    top: 4vw;
    background-color: var(--orange);
 }



 .inspiring{
    
 }





 .imgsss{
    display:none;
 }
 
 .menu-deroulant{
    display: none;
 }



 @media screen and (max-width: 700px) {
      
    .menu-deroulant{
        display: block;
        position: relative;
        width: 1.2vw;
        height: 1.2vw;
        right: 8.5vw;
        
        
        
    }
    html{
        font-size: 50%;
    }
    .active{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .menuList ul{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    nav ul{
        width: 100%;
        background: whitesmoke ;
        position: absolute;
        z-index: 2;
    }
    nav ul li{
        display: block;


    }
    nav ul li a{
        color:#fff
    }

    .nava  {
        position: absolute;
        top: -500px;
        left: 20px;
        right: 0;
        background: #fff;
        border-top: .1rem solid rgba(0, 0, 0, 2);
        border-bottom: .1rem solid rgba(0, 0, 0, 2);
        
        padding: 1rem;
    }
    

     .nava .close {
      display: flex;
      margin-top: 200px;
    
      
    }
    .nava a{
        display: block;
        padding: 1.5rem;
        margin: 1rem;
        font-size: 2rem;
        background: #eee;

    }
    .menuList{
        position: absolute;
        background-color: #bfa99561;
        height: 50vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(6px);
        
    }
    .icons{
        display: flex;
    }
header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #fff;
    padding: 1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: var(--box-shadow);
    box-shadow: var(--webkit-box-shadow);
    z-index: 1000;
    
}
.imgs>img{
    color: #192a56;
}

.dishes>.box-container>.box>img{
    height: auto;
    width: 100%;
  }
  header{
      padding: 1rem 2rem;
      
  }
  .order form .inputBox .input {
      width: 100% ;
  
}

    .menuList ul li{
        margin:25px 0;
        font-size: 1.2em;
        display: flex;
    }
    .resto{
        position: relative;
        left: 7vw;
        font-size: 1vw;
    }
    .imgss{
        display: flex;
        align-content: center;

    }
    .imgsss{
        display: flex;
        
        position: relative;
        color: #192a56;
        
    }
    .imgs{
        display: flex;
        align-content: center;
    }
    .menu-deroulant{
        
    }
    iframe{
        left: 15vw;
    }
    .fbsvg{
        left: 25vw;
    }
    .box> h3{
        font-weight: bold;
        font-size:2.8vw;
        position: relative;
    }
    .marqueee{
        width:100vw;right:9vw;position:relative;top:3vw;border-top:2vw solid #192a56;border-bottom:2vw solid #192a56;
    }
    .text_marqueee{
        color: #192a56; font-size:4vw;text-align:center;align-content:center;font-weight:bold;
        position: relative;
        width: 1vw;
        height: 2vw;
    }
    .eat{
        color: #192a56; font-size:3.5vw;text-align:center;align-content:center;font-weight:bold;position:relative;bottom:3vw;
        height: 2vw;

    }
    

    
.imagess{
    display: flex;
    
}
.imagess{
    left: calc(50% - 200px);
    opacity: 1;
    animation: display 5s infinite;
    box-shadow: var(--box-shadow);
    box-shadow: 0px 6px 54px -2px #615d5d;
    margin-left: 100px;
    width: 730px;

}

.imagesss{
    left: calc(50% - 200px);
    opacity: 1;
    animation: display 5s infinite;
    box-shadow: var(--box-shadow);
    box-shadow: 0px 6px 54px -2px #615d5d;
    margin-left: 100px;
    width: 730px;
    display: flex;
    
}

.imagess.img:nth-child(2){
    animation-delay:2s;
}
.imagess.img:nth-child(3){
    animation-delay:4s;
}

    

  .container>.image>img{
    width: 100%;
  }
.image{
    margin-left: 100px;
    border-radius: 15px;
}
.container>.slide>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container>.slide>h3{
    color: var(--black);
    font-size: 4rem;
}
.container1>.slide1>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container1>.slide1>h3{
    color: var(--black);
    font-size: 4rem;
}



.container2>.slide2>span{
    color: var(--orange);
    font-size: 2.5rem;
}
.container2>.slide2>h3{
    color: var(--black);
    font-size: 4rem;
}



.credit{
    height: 0.5vw;
    position: relative;
}







  
.loader  {
    animation: rotate ; 
    animation-duration: 2s;
    height: 100%;
    width: 100%;
    
    
    background: white;
    padding:0;
    
    
    z-index: 999999;
    position: fixed;


  }
  
  
  
  .loader:before,
  .loader:after {   
    border-radius: 50%;
    content: '';
    display: flex;
    height: 20px;  
    width: 20px;
    position: relative;
    align-items: center;
    text-align: center;
    align-content: center;
    top:25vw;
    left:50vw;
   

  }
  .loader:before {
    animation: ball1 1s infinite; 
     
    background-color: #cb2025;
    box-shadow: 30px 0 0 #f8b334;
    margin-bottom: 10px;
  }
  .loader:after {
    animation: ball2 1s infinite; 
    background-color: #00a096;
    box-shadow: 30px 0 0 #97bf0d;
  }
  
  @keyframes rotate {
    0% { 
      -webkit-transform:  scale(1); 
      -moz-transform:  scale(1);
    }
    50% { 
      -webkit-transform: scale(1); 
      -moz-transform:  scale(1);
    }
    100% { 
      -webkit-transform: scale(1); 
      -moz-transform: scale(1);
      
      
    }
  }
  
  @keyframes ball1 {
    0% {
      box-shadow: 30px 0 0 #f8b334;
    }
    50% {
      box-shadow: 0 0 0 #f8b334;
      margin-bottom: 0;
      -webkit-transform: translate(15px,15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #f8b334;
      margin-bottom: 10px;
    }
  }
  
  @keyframes ball2 {
    0% {
      box-shadow: 30px 0 0 #97bf0d;
    }
    50% {
      box-shadow: 0 0 0 #97bf0d;
      margin-top: -20px;
      -webkit-transform: translate(15px,15px);
      -moz-transform: translate(15px, 15px);
    }
    100% {
      box-shadow: 30px 0 0 #97bf0d;
      margin-top: 0;
    }
  }
.lin:hover{
    background: var(--orange);
    color: white;
}

.imgsss, .im{
    bottom: 10px;
    position: relative;
}



.dishes{
    display: grid;
}


.box-container{
    align-content: space-between;
    position: relative;
    
    padding-bottom: 50px;
    
    box-shadow:1px 0px 50px -22px 12px #9c9a9a ; 
    
}

.african-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
    display: grid;
    
}
.african-dish:hover{
    color:var(--orange);
    text-decoration: none;
}
 


.african-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.african-dish:hover::after{
    width: 29%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes>.box-container{
    display: flex;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes>.box-container>.box>.hey>.heart,
.dishes>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes>.box-container>.box>.hey>.heart:hover,
.dishes>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}


.african-dsh{
    box-shadow:0px 0px 45px 2px #9c9a9a ; 
}



.european-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
    display: grid;
}
.european-dish:hover{
    color:var(--orange);
    text-decoration: none;
}



.european-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.european-dish:hover::after{
    width: 34%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes1{
    background-color: rgb(237, 237, 237);
}
.dishes1>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes1>.box-container{
    
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes1>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes1>.box-container>.box>.hey>.heart,
.dishes1>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes1>.box-container>.box>.hey>.heart:hover,
.dishes1>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes1>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes1>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes1>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes1>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes1>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes1>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes1>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes1>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes1>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}


.box{
    display: grid;
    width: 5vw;
}

.african-dsh{
    box-shadow:0px 0px 45px 2px #9c9a9a ; 
}



.asian-dish{
    color: var(--black);
    font-size: 5rem;
    position: relative;
    font-weight: bold;
    padding-bottom: 2rem;
    display: grid;
}
.asian-dish:hover{
    color:var(--orange);
    text-decoration: none;
}



.asian-dish::after{
    background: var(--orange);
    
    transition: width .4s;
    transition-timing-function: linear;
    content: '';
    display: block;
    width: 0;
    height: 5px;
}
.asian-dish:hover::after{
    width: 26%;
    height: 0.15em;
    transition: width .4s;
}
.box{
    border-radius: 25px;
    
}
.dishes2>.box-container>.box:hover{
    box-shadow: 0px 0px 14px 10px var(--orange); 
}
.dishes2>.box-container{
    display: grid;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    
}
.dishes2>.box-container>.box{
    padding: 2.5rem;
    background: #fff;
    border-radius: .5rem;
    border:2px solid #f3eded;
     box-shadow: 0px 0px 45px 2px #9c9a9a ; 
    position: relative;
    overflow: hidden;
    text-align: center;
    
    

}
.dishes2>.box-container>.box>.hey>.heart,
.dishes2>.box-container>.box>.hey>.eye{

    position: absolute;
    top: 1.5rem;
    background: #f7f1f1;
    border-radius: 50%;
    height: 5rem;
    width: 5rem;
    line-height: 4rem;
    gap: 2rem;
    font-size: 2rem;
    color: var(--black);

}
.dishes2>.box-container>.box>.hey>.heart:hover,
.dishes2>.box-container>.box>.hey>.eye:hover{
    background: var(--orange);
    color: #fff;

}

.dishes2>.box-container>.box>.hey>.heart{
    right: -15rem;
}
.dishes2>.box-container>.box>.hey>.eye{
    left: -15rem;
}
.dishes2>.box-container>.box:hover>.hey>.heart{
    right: 1.5rem;
}
.dishes2>.box-container>.box:hover>.hey>.eye{
     left: 1.5rem;
}
.dishes2>.box-container>.box>img{
    height: 17rem;
    margin: 1rem 0;
}
.dishes2>.box-container>.box h3{
    color: var(--black);
    font-size: 2.5rem;
}
.dishes2>.box-container>.box>.starts>{
    padding: 1rem 0;
}
.dishes2>.box-container>.box>.starts>img{
    font-size: 1.7rem;
}
.dishes2>.box-container>.box>span{
    color: var(--orange);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}









    
    }

    .followus{
        position: relative;
        left: 5.5vw;
        bottom: 5.4vw;
        font-weight: normal;

    }
    .followus1{
        position: relative;
        left: 5.5vw;
        bottom: 4.3vw;
        font-weight: normal;

    }

    .followus2{
        position: relative;
        left: 5.5vw;
        bottom: 6.2vw;
        font-weight: normal;

    }




    
    </style>



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


  
</body>


</html>