<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepagestyle.css">
 
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
 
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
 
    <div class="img-slider" style="max-width:100%">
   
    

       <img class="myslides" src="\images\3950087-QAVZBPON-7.jpg"> 
        <img class="myslides" src="\images\images345.jpg">
        <img class="myslides" src="\images\2-the-long-walk-galway-ireland-diana-shephard.jpg">
        <img class="myslides" src= "\images\index.jpg">
        <img class="myslides" src="\images\images3213.jpg" >
        <img class="myslides" src="\images\images765.jpg">
        <img class="myslides" src="\images\images423.jpg">
        <img class="myslides" src="\images\43.jpg">
        <img class="myslides" src="\images\P-2552-Horizontal-Long-Painting-for-Hotel-Decoration.jpg">
       
        <img class="myslides" src="\images\panoramiccontemporaryartxb80d.jpg">
         



    </div>
 
    <script>
        var myIndex = 0;
        carousel();
 
        function carousel()
        {
            var i;
            var x = document.getElementsByClassName("myslides");
            for (i = 0; i < x.length; i++)
            {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) 
            {
                myIndex = 1;
            }    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 4000); // Change image every 4 seconds
        }
    </script>
 
    <div class="container1">
        <main class="grid">
            <article>
                <a href="" class="anchor">
                    <img src="\images\sere4.jpg" alt="">
                    <div class="title">
                        <h3>Serene Landscape</h3>
                    </div>
                </a>
            </article>
 
            <article>
                <a href="" class="anchor">
                    <img src="\images\myth1.jpg" alt="">
                    <div class="title">
                        <h3>Mythological Art</h3>
                    </div>
                </a>
            </article>
 
            <article>
                <a href="" class="anchor">
                    <img src="\images\md1.jpg" alt="">
                    <div class="title">
                        <h3>Modern art</h3>
                    </div>
                </a>
            </article> 
 
            <article>
                <a href="" class="anchor">
                    <img src="\images\abst4.jpg" alt="">
                    <div class="title">
                        <h3>Abstract Art</h3>
                    </div>
                </a>
            </article>
        </main>
    </div>
 
    <div class="gradient"></div> 
 
    <div class="topic_title">
        <h2>Welcome Our New Artists</h2>
    </div>
 
    <div class="container2">
        <main class="grid">
 
        <?php
        $connection=mysqli_connect('localhost','root','','miniproject');
        mysqli_select_db($connection,'miniproject');
 
        $query_result=mysqli_query($connection,"SELECT * FROM artists ORDER BY id DESC LIMIT 4");
   
        
        while($row=mysqli_fetch_assoc($query_result))
        { 
        ?>
            <article>
                <a href="" class="anchor">
                    <img src="<?php echo $row["artist_img"];  ?>" alt="artist image">
                    <div class="title">
                        <h3><?php echo $row['artist_name']; ?></h3>
                    </div>
                </a>
            </article>
 
        <?php
        } 
        ?>
            
        </main>
    </div>
 
    <div class="gradient"></div> 
 
    <div class="topic_title">
        <h2>Recent Artworks</h2>
    </div>
    
    <div class="container3">
        <main class="grid">
        
            <?php
     
            $query_result=mysqli_query($connection,"SELECT * FROM artwork ORDER BY art_id DESC LIMIT 4");
       
            
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
            
            </main >
        
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
 

