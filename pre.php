<?php
include 'com.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main2.css">
    <link href='https://fonts.googleapis.com/css?family=Jockey One' rel='stylesheet'>
</head>
<body>
    <div class="header">
       
        <div class="logo">
            <img src="img/Schermafbeelding 2024-02-26 144208.png" alt="">   

                    
            
            <div class="back">
                <a href="index.html" class="back">Terug</a>
            </div>
        </div>
        <div class="kledingheader">
                Pre workout
            </div> 
</div>
            <div class="kledingfooter">
                <div class="box">
                    <div class="itemsbtn">
                        <div class="box4">
                        Items
                    </div>

                    <div class="preworkoutimg">
                    <img src="img/venompreworkout.png" alt="">
                    <div class="productext1">  
                     
                    <div class="producttext2"></div>
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM producs");
                            $stmt -> execute();
                            $data = $stmt->fetchAll();
                    
                            foreach ($data as $row){
                                echo $row ['prijs'];
                                echo "<a href='product_logic.php?id=".$row['id']."'>update</a>";
                            }
                    
                            ?>
                            


                    </div>
                   
                    <img src="img/20220329__0005_orig-green_apple.png" alt="">
                    <div class="productext1">29,99</div>
                    <img src="img/optimum-nutrition-gold-standard-pre-workout-321332.webp" alt="">
                    <div class="productext1">35,99</div>
                    <img src="img/empose-nutrition-pre-workout-accelerate-280-mg-caffeine-360-gr-apple-pear.png" alt="">
                    <div class="productext1">19,99</div>
                    <img src="img/performance-sports-nutrition-the-bomb-pre-workout-crazy-punch-300-gram.png" alt="">
                    <div class="productext1">44,99</div>

                    </div>

                
                </div>
           
            </div>

</body>
</html>

                   
                    