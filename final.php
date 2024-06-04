<?php
    session_start();
    $name = $_SESSION['name'];
    $title = $_SESSION['title'];
    $date = $_SESSION['date'];
    $content =  $_SESSION['textarea'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:-(</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <div class="logo roboto-slab-uniquifier">
            <?php
                echo $name;
            ?>
        </div>
    </div>
    <div class="back-container">
        <img class="background" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2210775-jpeg.jpg" alt="">
    </div>
    <div class="shadow-container">
   
    </div>
    <div class="container-main">
        <form action="final.php" method="post">
            <div class="detailsArea">
                <div class="title">
                <?php
                     echo $title;
                ?>
                </div>
                <div class="date">
                <?php
                      echo $date;
                  ?>
                </div>
            </div>
            <div class="contentArea">
                <?php
                    echo $content;
                ?>
            </div>
            

            <input type="submit" value="Forget" name="logout" id="continue">

        </form>
    </div>
    
</body>
</html>

<?php
  if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
  }
?>