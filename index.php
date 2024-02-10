<?php
 session_start();
 if(!isset($_SESSION['user_id'])){
  header("location:home.php");
 }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" />

    <title>ToDo'S List App!</title>
    <style>
    .nav-bar .nav-links{
    display: flex;
    align-items: center;
    margin-top: 29px;
    }
    .nav-bar .logo .logoicon {
    margin-top: -20px;
    margin-right: 1px;
    }
    
    </style>

  </head>
  <body>
  <nav>
        <div class="nav-bar">
            <i class="fas fa-bars sidebarOpen"></i>
            <span class="logo navLogo"><img src="./images/logopage.png" alt="logoNav" width="30px" class="logoicon" /><a href="home.php">TodoByJalil</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#home">TodoByJalil</a></span>
                    
                </div>
                
                <ul class="nav-links nav-link">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="home.php?#about">About</a></li>
                    <li><a href="home.php?#service">Services</a></li>
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
                    echo "<a href='logout.php'>Log Out <i class='fas fa-sign-in-alt'></i></a>";
                  }
                  ?>
                </div>

                </div>
            </div>
        </div>
    </nav>
    

  <div class="todo">
  <article class="l-design-widht">      
    <div class="card">
      <h2>
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-clipboard-list" href="#icon-clipboard-list" />
        </svg>
        ToDoList
      </h2>
      <form action="data.php" method="post"> 
        <label class="input">
          <input class="input__field" type="text" placeholder=" " name="title"/>
          <span class="input__label">Enter Your Task</span>
        </label><br>
        <label class="input">
          <input class="input__field" type="text" placeholder=" " name="description"/>
          <span class="input__label">Enter Your Description</span>
          <input type="hidden" name="id" value=<?php echo $_SESSION['user_id'] ?> >
          
        </label>
        <div class="button-group">
          <button type="submit">Send</button>
          <button type="reset">Reset</button>
        </div>
      </form>
      <div><br>
      <div class="titles">
            <div class="left">
              <p>Task</p>
            </div>
            <div>
              <p>Description</p>
            </div>
            <div class="right">
              <p>Actions</p>
            </div>
            
        </div>
        <hr>
      <?php
        include 'database.php';
        $sql="SELECT * FROM tasks WHERE id_user=".$_SESSION['user_id'];
        $result=mysqli_query($conn, $sql);

        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $title=$row['title'];
            $description=$row['description']
          ?>
          <div class="top">
            <div class="left">
              <p><?php echo $title ?></p>
            </div>
            <div>
              <p><?php echo $description ?></p>
            </div>
            <div class="right">
              <a href="edit.php?id=<?php echo $id ?>"><i class="fas fa-pencil-alt"></i></a>
              <a href="delete.php?id=<?php echo $id ?>"><i class="fas fa-trash-alt"></i></a>
            </div>
          </div>
          <hr>
          <?php
          }
        }
      ?>
      </div>
    </div>

    <div class="card card--inverted">
      <h2>Colors</h2>
      <p>Play around with the colors</p>
      <p class="colors">
      <input type="color" data-color="light" value="#ffffff" />
      <input type="color" data-color="dark" value="#212121" />
      <input type="color" data-color="signal" value="#08B4FF" />
      </p>
    </div>
  </article>

  <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
    <symbol id="icon-clipboard-list" viewBox="0 0 20 20">
      <title>icon-clipboard-list</title>
      <path fill="currentColor" d="M4,2A2,2,0,0,1,6,4V16a2,2,0,0,1-2,2H6a2,2,0,0,1,2,2h8a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2ZM7,6H9V4H7ZM7,8H9V10H7ZM7,12H9v2H7ZM12,6h2V4h-2ZM12,8h2V10h-2Zm0,4h2v2h-2Z"/>
      <rect fill="currentColor" x="14" y="6" width="6" height="2" rx="1" ry="1"/>
      <rect fill="currentColor" x="14" y="8" width="6" height="2" rx="1" ry="1"/>
      <rect fill="currentColor" x="14" y="12" width="6" height="2" rx="1" ry="1"/>
    </symbol>
  </svg>
</div>

    
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

let timer;

document.addEventListener('input', (e) => {
  const el = e.target;

  if (el.matches('[data-color]')) {
    clearTimeout(timer);

    timer = setTimeout(() => {
      document.documentElement.style.setProperty(`--color-${el.dataset.color}`, el.value);
    }, 100);
  }
});








    </script>
  </body>
</html>