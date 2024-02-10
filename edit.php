<?php
session_start(); 
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>ToDo'S List App!</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="hi.css">
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
    .btn-update{
      background-color:#08B4FF;
      border:none;
    }
    .btn-update:hover{
      border:1px solid black;
      background:#08B4FF;
  
    }
    
    </style>
</head>

<body>

<nav>
        <div class="nav-bar">
            <i class="fas fa-bars sidebarOpen"></i>
            <span class="logo navLogo"><img src="./images/logopage.png" alt="" width="30px" class="logoicon" /><a href="#">TodoByJalil</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="home.php">TodoByJalil</a></span>
                    
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

  <?php
                include 'database.php';
                $id=$_GET['id'];
                $sql="SELECT * FROM tasks WHERE id=".$id ;

                $result = mysqli_query($conn, $sql);

                if($result){   
                    $row=mysqli_fetch_assoc($result);
                    $title=$row['title'];
                    $description=$row['description'];


                }


            ?>

  <div class="w-100 m-auto">

    <article class="l-design-widht">      
    <div class="card">
    <form action="editaction.php" method="post" autocomplete="off"> 
        <label class="input">
          <input class="input__field" type="text" name="title" id="title" value="<?php global $title; echo $title ?>" placeholder="Edit Here Your ToDo'S"
          Required/>
          <span class="input__label">Enter Your Task</span>
        </label><br>
        <label class="input">
          <input class="input__field" type="text" name="description" id="description" value="<?php global $description; echo $description ?>" placeholder="Edit Description"
          Required/>
          <span class="input__label">Enter Your Description</span>
        </label>
        <div class="button-group">
        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
      <button class="btn btn-success btn-update">Update ToDo'S</button>
        </div>
      </form>
      </div>
      </article>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

</body>

</html>