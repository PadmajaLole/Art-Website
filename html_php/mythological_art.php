 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="abstract_art.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Parisienne&display=swap" rel="stylesheet">
 
    
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>Mini Project</title>
</head>
<body>
    
<nav >
 
 <div class="logo">
     <img src="\logo2.png">
 </div>

 <ul class="nav-links">
     <li>
         <a href="http://localhost/try/gallery.php">Gallery </a>
     </li>
     <li>
         <a href="http://localhost/try/artists.php">Artists</a>
     </li>
     <li>
         <a href="http://localhost/try/art_style.html">Styles</a>
     </li>
     
 </ul>

 <a href="\try\a_regist2.php" class="btn-area1">Artist Signup</a>
 <a href="\customerlogin\registration.php" class="btn-area2">User Signup</a> 
</nav>
 
    <div class="topic_title">
        <h2>Mythological Art</h2>
    </div>
    
    
    <div class="container1">
    <main class="grid">
    
        <?php
        $conn=mysqli_connect('localhost','root','','miniproject');
        mysqli_select_db($conn,'miniproject');
 
        $query_result=mysqli_query($conn,"SELECT * FROM artwork WHERE art_style = 'Mythological Art' ORDER BY art_id DESC");
   
        
        while($row=mysqli_fetch_assoc($query_result))
        {
         
        ?>
           <article>
        
 
            <img src = "<?php echo $row["art_img"];  ?>" alt="image" > 
            <div class="content">
                <h3 class="container-header"><?php echo $row['art_name']; ?></h3>
                <p class="container-artist"><?php echo $row['artist_name']; ?></p>
                <p class="container-text"><?php echo $row['art_style']; ?></p>
                <p class="container-text"><?php echo $row['specs']; ?></p>
                <p class="container-text"><?php echo $row['price']; ?></p>
                <form action="#" class="inline">
                    <button class="container-btn" >BUY</button>
                </form>
            </div>
            
            </article>
            
       <?php
       
        } 
 
      
 
        ?>
        
        </main class="grid">
    
    </div>
    
   
    <footer class="footer-distributed">
 
        <div class="footer-left">
      
            <div class="logo2">
                <img src="\logo2.png">
            </div>
 
            <p class="footer-links">
                <a href="http://localhost/try/index.php">Home </a>
                  |
                <a href="#"> Blog </a>
                  |
                <a href="http://localhost/try/aboutus.html"> About </a>
                  |
                <a href="#"> Contact</a>
            </p>
 
            
        </div>
 
        <div class="footer-center">
            
            <div class="a">
                <p><a href="#">Authentication</a></p>
            </div>
 
            <div class="b">
                <p><a href="#">Shipping</a></p>
            </div>
 
            <div class="c">
               <p><a href="#">Payment</a></p>
            </div>
 
            <div class="d">
                <p><a href="#">Refund</a></p>
             </div>
 
             <div class="d">
                <p><a href="http://localhost/try/disclaimer.html">Disclaimer</a></p>
             </div>
 
             <div class="d">
                <p><a href="#">Privacy Policy</a></p>
             </div>
 
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                We offer opportunity to artists to sell their paintings on this platform and showcase their talent in front of the world. We also give an opportunity to people to explore this platform and buy beautiful paintings of their choice.</p>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
            
        </div>
        
    </footer>
 
</body>
</html> 
 

