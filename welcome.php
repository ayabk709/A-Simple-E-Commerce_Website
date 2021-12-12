<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style1.css">
    <style>
     /*   
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
section{
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;
background:white;
animation:animateBg 10s linear infinite ;
}
@keyframes animateBg {
    0%{
        filter:hue-rotate(0deg);
    }
    100%{
        filter:hue-rotate(360deg);

    }
    
}
section.loader{
    position:relative;
    width:120px;
    height:120px;  
}
section.loader span{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
transform:rotate(calc(18deg * var(--i)));

}
section.loader span::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:15px;
    height:15px;
    border-radius:50%;
    background :green;
    box-shadow: 0 0 10px green,
    0 0 20px green ,
    0 0 40px green ,
    0 0 60px green ,
    0 0 80px green ,
    0 0 100px green ;
  animation : animate 2s linear infinite;
  animation-delay:calc(0.1s *var(--i));
}
@keyframes animate {
    0%{
        transform:scale(1);
    }
    80%,100%{
        transfrom:scale(0);

    }
    
}*/
        </style>
    
    
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
  <!-- <section>
   <div class="loader">
    <span style="--i:1;"></span>
    <span style="--i:2;"></span>
    <span style="--i:3;"></span>
    <span style="--i:4;"></span>
    <span style="--i:5;"></span>
    <span style="--i:6;"></span>
    <span style="--i:7;"></span>
    <span style="--i:8;"></span>
    <span style="--i:9;"></span>
    <span style="--i:10;"></span>
    <span style="--i:11;"></span>
    <span style="--i:12;"></span>
    <span style="--i:13;"></span>
    <span style="--i:14;"></span>
    <span style="--i:15;"></span>
    <span style="--i:16;"></span>
    <span style="--i:17;"></span>
    <span style="--i:18;"></span>
    <span style="--i:19;"></span>
    <span style="--i:20;"></span>

</div>
    </section>-->
    <div class="center">
         <div class="ring"></div>
         <span>loading...</span>
</div>
  <p>if you want to logout please click here </p>
  <button name="submit"  href="logout.php">logout</button>
</html>