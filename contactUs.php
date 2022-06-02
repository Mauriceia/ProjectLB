<?php

?>

<!DOCTYPE html>

<html>

    <head>
<title></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="">
    <title></title>
  <!--   <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<link rel="stylesheet" href="stylelogin.css" />
    </head>
<body>
    
    <div class="wrapper">
        <header>Request Book</header>
        <form action="https://formsubmit.co/mauriceiaeua@gmail.com" method="POST">
            <div class="dbl-field">
                <div class="field">
              <!--    <input type="hidden" name="_next" value="https://yourdomain.co/thankYou.php">-->  
                    <input type="text" name="name" placeholder="Enter your Name" required/>
                    <i class="fas fa-user"></i>                   
                </div>

                <div class="field">
                    <input type="text" name="email" placeholder="Enter your Email" required/>
                    <i class="fas fa-envelope"></i>                   
                </div>

                <div class="field">
                    <input type="text" name="phone" placeholder="Enter your Phone"/>
                    <i class="fas fa-phone-alt"></i>                   
                </div>

                <div class="field">
                    <input type="text" name="website" placeholder="Enter your address"/>
                    <i class="fas fa-globe"></i>                   
                </div>
            </div>
            <div class="messagem">
                <textarea placeholder="Write any aditional information. Ex: Book Name" name="message"></textarea>
                <i class="icons">message</i>
            </div>

            <div class="button-a">
                <button type="submit">Send Message</button>
                <span>Your message is sending...</span>
            </div>
                
        </form>
    </div>
 <!--    <script src="script.js"></script>-->


</body>

</html>