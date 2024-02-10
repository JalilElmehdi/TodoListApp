<?php  
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" />

    <style>
      .nav__logo span{
        color:#0f1e6a;
      }
      .nav-bar .logo .logoicon {
    margin-top: -7px;
    margin-right: 1px;
    }

    </style>
</head>
<body>
<nav>
        <div class="nav-bar">
            <!-- <i class='bx bx-menu sidebarOpen' ></i> -->
            <i class="fas fa-bars sidebarOpen"></i>
            <span class="logo navLogo"><img src="./images/logopage.png" alt="logoNav" width="30px" class="logoicon" /><a href="home.php">TodoByJalil</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#home">TodoByJalil</a></span>
                    
                </div>
                
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Services</a></li>
                    <?php
                   if(isset($_SESSION['user_id'])){
                       echo "<li><a href='index.php'>TodoList</a></li>" ;
                   } 
                    ?>
                </ul>
            </div>
            <div class="section-login">
                <div class="btn-login">
                    <?php
                   if(isset($_SESSION['user_id'])){
                       echo "<a href='logout.php'>LogOut <i class='fas fa-sign-in-alt'></i></a>" ;
                   }
                   if(!isset($_SESSION['user_id'])){
                    echo "<a href='login.php'>Sign Up <i class='fas fa-sign-in-alt'></i></a>" ;
                } 
                    ?>
                </div>
  
            </div>
        </div>
</nav>

<section class="container" id="home">
      <div class="content__container">
        <h1>
          Best Time<br />
          <span class="heading__1">Manager Platform</span><br />
          <span class="heading__2">in The World</span>
        </h1>
        <p>
        Welcome to TodoByJalil, the personal task management platform that simplifies your daily life. TodoByJalil offers an easy-to-use experience to help you organize your tasks, maintain your productivity, and achieve your goals. Hurry to register and add your tasks.
        </p>

        <form>
          <img src="./images/apps.png" width="115px"  alt="appsphoto"/>
          <img src="./images/plays.png" width="130px" alt="playphoto" />
        </form>
                 
      </div>
      <div class="image__container">
        <img src="./images/timemanag.png" alt="logohome" />
        <img src="./images/timemanag2.jpeg" alt="logo" />
        <div class="image__content">
          <ul>
            <li>With TodoByJalil, organize your thoughts</li>
            <li>Invest in your time</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section-about" id="about">
            <h1 class="section_titles">About</h1>
        <section class="holiday">
            
            <div class="holiday-img">
                <img src="./images/taskmanagement.jpeg" alt="logoabout" />
            </div>
            <div class="holiday-text">
                <h5>invest in your time</h5>
                <h2>Created by Jalil Mehdi2024</h2>
                <p>At `TodoByJalil`, our mission is to simplify your life by providing a powerful yet easy-to-use tool for task management. We believe in the transformative power of staying organized and focused, and our app is designed to help you achieve just that.
</p>
                <a href="home.php" class="btn">Read More</a> <br />
                <div class="social-icons">
                    <a href="https://github.com/JalilElmehdi" class="social-icon">
                    <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/el-mehdi-jalil-2a4171295/" class="social-icon">
                    <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/JalilElmehdi" class="social-icon">
                    <i class="fab fa-git-alt"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/el-mehdi-jalil-2a4171295/" class="social-icon">
                    <i class="fab fa-twitter" ></i>
                    </a>
                </div>
            </div>
        </section>
        </section>
        <section class="section-service" id="service">
            <h1 class="section_titles">Services</h1>
        

        <div class="row">
          <div class="column">
            <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-clipboard-list"></i>
              </div>
              <h3>Add Tasks</h3>
              <p>
              Provides simplicity to organize your days. Using this feature,
               you can create new tasks by specifying a title and description.
              </p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-business-time"></i>
              </div>
              <h3>Time Management</h3>
              <p>
              It gives you the tools to improve your productivity and organize your day efficiently. 
              Track your tasks, set priorities, and allocate your time wisely
              </p>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-tasks"></i>
              </div>
              <h3>Arrange Tasks</h3>
              <p>
              “It provides you with the ability to organize your keys and 
              simplify your daily life by organizing your responsibilities in a smart way.
              </p>
            </div>
          </div>
          
          
        </div>
      </section>


      <footer>
            
        <div id="footer_content">
            <div id="footer_contacts" class="footer-logo nav-bar">
            <span class="logo navLogo"><img src="./images/logopage.png" alt="logofooter" width="30px" class="logoicon" /><a href="home.php">TodoByJalil</a></span>
                <p>With TodoByJaLiL,invest in your time</p>

                <div id="footer_social_media">
                    <a href="https://www.linkedin.com/in/el-mehdi-jalil-2a4171295/" class="footer-link" id="instagram">
                    <i class="fab fa-github"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/el-mehdi-jalil-2a4171295/" class="footer-link" id="facebook">
                    <i class="fab fa-git"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/el-mehdi-jalil-2a4171295/" class="footer-link" id="whatsapp">
                    <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Links</h3>
                </li>
                <li>
                    <a href="#home" class="footer-link">Home</a>
                </li>
                <li>
                    <a href="#service" class="footer-link">Services</a>
                </li>
                <li>
                    <a href="#about" class="footer-link">About</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Social Media</h3>
                </li>
                <li>
                    <a href="https://github.com/JalilElmehdi" class="footer-link">Github</a>
                </li>
                <li>
                    <a href="https://github.com/JalilElmehdi" class="footer-link">Git</a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/el-mehdi-jalil-2a4171295/" class="footer-link">linkedin</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Subscribe</h3>

                <p>
                    Enter your e-mail to get notified about
                    our news solutions
                </p>

                <div id="input_group">
                    <input type="email" id="email" placeholder="Example@email.com"/>
                    <button>
                    <i class="fas fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
        <p>&#169; JalilMehdi Tous droits réservés.</p>

        </div>
    </footer>
    <script>
const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});
body.addEventListener("click" , e =>{
    let clickedElm = e.target;
    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});
</script>
</body>
</html>