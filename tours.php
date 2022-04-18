<?php
    include 'navbar.php';
?>
<!DOCTYPE html> 
<head>
<title>Travel Website</title>
<link rel="stylesheet" href="assets/css/tours.css">
<!-- jQ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- slick carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- <script type="text/javascript" src="assets/js/slick-1.8.1/slick/slick.min.js"></script> -->
<!-- scripts -->
<script src="assets/js/scripts.js"></script>
</head>  
<body>
    <!-- post -->
<section class="post-header" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/imegs/zanzibar/tour1.jpg)">
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