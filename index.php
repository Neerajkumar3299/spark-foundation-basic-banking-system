<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Bank</title>
    <link rel="icon" tytpe="image/icon" href="https://thesparksfoundationsingapore.org/images/logo_small.png">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="navbar background h-nav-resp">
               
               <div class="heading v-class-resp">
                   
                   <div class="logo">
                        <img src="data:image/png;base64,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">
                   </div>
                    <div class="title">
                         <h1>Spark <span>Bank</span></h1>
                    </div>
               </div>
               <div class="link v-class-resp">
              
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="http://localhost/Basic%20Banking%20System/customers.php">View All Customers</a></li>
                        <li><a href="http://localhost/Basic%20Banking%20System/transferMoney.php">Transfer Money</a></li>
                        
                        <li><a href="http://localhost/Basic%20Banking%20System/transactionHistory.php">Transaction History</a></li>
                        <li><a href="#About-us">About-us</a></li>
                        
                        
                        </li>
                    </ul>
               </div>
                   <div class="menu">
                   <i id="menu "class="fas fa-bars"></i>
                   </div>
                   
                </div>
        <section class="section">
            <div id="#" class="home-section background">
                <div class="home-detail">
                    <h1>Welcome to Spark Bank</h1>
                    <p>This is first bank that provides you facility of handling your bank by your own. With the help of this website, you can easily tranfer data to any user..</p>
                    <p>To get more information, Subscribe this website by pressing bellow butoon</p>
                    <button href="">Subscribe</button>
                </div>
               
            </div>
            <div id="About-us" class="about-us-section">
                <div class="about-us-detail">
                    <img src="image/bank-image.jpg" alt="image">
                    <h1>About-Us</h1>
                    <div class="facility">
                        <div class="box">
                            <p>Banks provide bank services to attract customers, from giving loans, credit and debit cards, digital financial services, and even personal services.</p>
                        </div>
                        <div class="box">
                            <p>Spark Bank provides Credit and debit card to each and every user for ease of users. it provides 24 hour service of ATM machine</p>
                        </div>
                        <div class="box">
                            <p>It provides online portal and mobile banking to the user so that user can handle their bank details by their own.. </p>
                        </div>
                    </div>
                </div>
                
                <div class="social-media">
                     <ul>
                         <li><a href=""><i class="fab fa-facebook"></i></a></li>
                         <li><a href=""><i class="fab fa-instagram-square"></i></a></li>
                         <li><a href=""><i class="fab fa-twitter"></i></a></li>
                         <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                     </ul>
                </div>
                
            </div>
          
        </section>    
    </div>
    <script src="js/resp.js"></script>
</body>
</html>