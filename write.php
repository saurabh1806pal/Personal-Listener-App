<?php
    session_start();
    $name = $_SESSION['name'];
    $title = $_SESSION['title'];
    $date = $_SESSION['date'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write...</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .shadow-container{
            height: 514px;
        }
    </style>
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
        <form action="write.php" method="post">
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
            <textarea name="textarea" placeholder="Write Here.." id="textarea" cols="30" rows="10" maxlength="700"></textarea>
            

            <input type="submit" value="Continue" name="continue2" id="continue">

        </form>
    </div>
    
</body>
</html>

<?php
  if(isset($_POST['continue2'])){
    $uploadedText = $_POST['textarea'];
    $_SESSION['textarea'] = $uploadedText;

    header("Location: final.php");
  }
?>