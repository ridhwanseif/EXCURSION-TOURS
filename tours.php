<?php
    include 'navbar.php';
?>
<!DOCTYPE html> 
<head>
<title>Travel Website</title>
<link rel="stylesheet" href="assets/css/tours.css">
</head>  
<body>
    <!-- post -->
<section class="post" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/imegs/zanzibar/tour1.jpg)">
    <container>
        <div class="row">
            <div class="col-md-12" >
                <h1>Excursions and Tours</h1>
            </div>
        </div>
        
    </container>
</section>
<!-- tours -->
<section class="area-tours">
    <container>
        <div class="row">
            <div class="col-md-2" >
               <?php
                    include 'toursLeftCol.php';
               ?>
            </div>

            <!-- tours ares -->
         <div class="col-md-10">
              
                  
                                        
                     <?php include 'safariBlue.php';?>
                                        
                   
            </div>
        </div>
    </container>
</section>
</body>
<?php
    include 'footer.php';
?>
</html>