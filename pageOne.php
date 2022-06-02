<?php

include('conexao.php');

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>My WebSite</title>
    <link rel="stylesheet" href="stylepageOne.css">
   


    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

</head>

<body>


    <section>
        <!--Navigation-->
        <nav>
            <!--logo-->
            <a href="#" class="logo">Eeyore's Library</a>

            <!--menu-->
            <ul>
               
                <li><a href="programs.php">Programs & Activities</a></li>
                <!--<li><a href="contactUs.php">Contact Us</a></li>-->
                <li><a href="register.php">Sign In as a Member</a></li>
                <li><a href="index.php">Sign In as an Librarian</a></li>
                

            </ul>
        </nav>

      
        <div class="text-container">
            <p>Hello,</p>
            <p>We are here</p>
            <p>To help you to Learn.</p>
            <a href="register.php"></a>
               <!--  <button class="sign-in">Login</button>-->
             
                <button href="login_member.php" class="sign-in">Login</button>
                <button href="register.php" class="avai">Join Us</button>
                
        </div>

        <!--model/pic-->
        <img src="images/image10.png" class="image10" alt="image10" />
    </section>
    <!--about section-->
    <div class="about-container">
        <!--text-about-->
        <div class="about-text">
            <p>About the Library</p>
            <p>
                The library was created in 2022 and has as proposal to give access to the books, audiobooks and articles for any individual with no cost or
                any cost. Share Knowledge never was so easy like now.
            </p>
            <p>
                Eeyore's Library will have different Book's genre such as Science Fiction, Philosophy,
                Fantasy, Educational, and others.
            </p>
            <p>These books are guaranteed to expand your mind and change the way you think about yourself, the world, and the future.</p>
            <p>Online plataform only.</p>
        </div>
    </div>
    <!--Articles-->
    <div class="articles">
        <!--text-->
        <div class="articles-text">
            <p>Books</p>
            <p>Popular Books</p>
            <p>
                The books are provided to help and inform our clients, it is possible to
                find a variety of themes and genre.
            </p>
        </div>
        <!--box-->
        <div class="boxs-container">
            <!--box1-->
            <div class="box-1">
                <p class="heading">Science Books</p>
                <button>See Books</button>
            </div>

            <!--box2-->
            <div class="box-2">
                <p class="heading">Communication Books</p>
                <button>See Books</button>
            </div>
            <!--box3-->
            <div class="box-3">

                <p class="heading">Technology Books</p>
                <button>See Books</button>
            </div>
        </div>


<!-- social-->

  

    <!--
    <!--footer-->
    <footer>

<div>
        <div class="contact-us">
            <br><br />
            <p>Do you want to contact us for any questions?</p>
            <!-- <button>Contact Us</button> -->
            Email: <a href="mailto:elylibrary@gmail.com">Eeyore�s Library</a>.<br>
            <p>Number: 222-222-555</p><br />
            <p>Follow Our Social Medias</p>       
        </div>
    </div>

        <div class="footer-content">
             <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
            </ul>           
        </div><br />
        <div class="footer-botton">
           
        </div>
    </footer>


</body>


</html>