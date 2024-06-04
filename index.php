<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Listener</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        overflow-y: hidden;
    }
</style>

<body>
    <div class="header">
        <div class="logo roboto-slab-uniquifier">Confess and Forget</div>
        <div class="tagLine brygada-1918-uniquifier">Your Active Listener</div>
    </div>
    <div class="back-container">
        <img class="background" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2210775-jpeg.jpg" alt="">
    </div>
    <div class="shadow-container">
   
    </div>
    <div class="container-main">
        <form action="index.php" method="post">

            <input type="text" name="name" placeholder="Enter Name" id="personName">
            <input type="text" placeholder="Enter the Title" name="title" id="title">

            <input type="date" placeholder="Enter Date" name="date" id="date">

            <input type="submit" value="Continue" name="continue" id="continue">

        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['continue'])){
        if(!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['date'])){
            $_SESSION['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION['title'] = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION['date'] = $_POST['date'];
            header("Location: write.php");
        }
        else{
            echo "All fields are required ";
        }
    }
?>