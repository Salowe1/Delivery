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

<div class="loader"></div>

    <header>
        <div class="resto">
        
        <a href="#" class="logo"><img src="./images/images/cutlery-cross-couple-of-fork-and-spoon-svgrepo-com.svg" style="width: 40px;height: 40px;"><div class="hii">
            <h3 class="">resto</h3>
                    <h3 class="">resto</h3></div></a>
    
        </div>
        
        <nav class="nava">
            <ul class="menuList">
            <li><a class="active">home</a></li>
            <li><a href="next.html">dishes</a></li>
            <li><a href="about-us.html">about</a></li> 
         
            <li><a href="review.php">review</a></li>
            <li><a href="order.html">order</a></li>
        </ul>
    
        </nav>
    
        <div class="icons">
            <a href=""class="imgs"><img class="imags" src="./images/images/market-exhibit-svgrepo-com.svg" style="width: 20px;height: 20px;" position="relative" top="5px" class="menu" id="menu-bart"></a>
            <a href="#"class="imgs"><img  src="./images/images/market-purchase-svgrepo-com.svg" style="width: 20px;height: 20px;" class="search"></a>
            <a href="#"class="imgs"><img  src="./images/images/heart-svgrepo-com.svg" style="width: 20px;height: 20px;" ></a>
            <a href="#"class="imgs"><img  src="./images/images/search-svgrepo-com.svg"style="width: 20px;height: 20px;" ></a>
    
        </div>
        <div class="close">
        <a class="active">home</a>
        <a href="next.html">dishes</a>
        <a href="about-us.html">about</a>
        
        <a href="review.php">review</a>
        <a href="order.html">order</a>
    </div>
    
    </header>

    <div class="cmts">
        <?php
            include "connection.php";
            try{
                $sql="SELECT client, comment FROM comments";
                $result= $con->prepare($sql);
                $result->execute();
                $commentaire= $result->fetchAll(PDO::FETCH_OBJ);
                foreach($commentaire as $cmt){

        ?>
            <div class="cmtdiv">
            <label class="cmtlbl" for=""><?= $cmt->client ?> </label>
            <br><br>
            <p class="cmtp"><?= $cmt->comment ?> </p>
            </div><br>
        <?php 
            
                }
            }catch(PDOException $e){}
        ?>
    </div>

    <div class="cmtbtn">
        <button class="Comment" onclick="document.getElementById('comment').style.display= 'block'">Comment</button>
    </div>
    <br><br>
    <div class="commentForm">
        <form action="comment.php" method="post" id="comment" class="comment">
            <div>
                <input class="commentInput" type="text" name="name" placeholder="Enter your name !">
            </div>
            <br>
            <div>
                <input class="commentInput" type="email" name="email" placeholder="Enter your email !">
            </div>
            <br>
            <div>
                <input style="height: 150px;" class="commentInput" type="text" name="comment" placeholder="Write your comment !">
            </div>
            <br>
            <div class="Btn">
                <button class="commentButton" type="submit">Envoyer</button>
            </div>
        </form>
    </div>

    <script src="js/res.js"></script>
    <style>
        .cmts{
            margin-top: 200px;
            display: grid;
            justify-content: center;
        }
        .cmtdiv{
            width: 500px;
            border: 1px solid black;
        }
        .cmtbtn{
            display: flex;
            justify-content: center;
        }
        .commentForm{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .comment{
            width: 500px;
            background-color: orange;
            border: 2px solid black;
            padding: 10px;
            border-radius: 5px;
            display: none;
        }
        .commentInput{
            width: 100%;
            height: 40px;
            border: 2px solid black;
            font-size: 20px;
            border-radius: 5px;
        }
        .Btn{
            display: flex;
            justify-content: center;
        }
        .commentButton{
            background-color: green;
            width: 100px;
            height: 40px;
            border: 1px solid grey;
        }
        .Comment{
            background-color: grey;
            width: 100px;
            height: 40px;
            border: 1px solid black;
            border-radius: 5px;
        }
    </style>

</body>
</html>