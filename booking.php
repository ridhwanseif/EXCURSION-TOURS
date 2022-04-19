<?php
    include 'navbar.php';
?>
<!DOCTYPE html> 
<head>
<title>Travel Website</title>
<link rel="stylesheet" href="assets/css/booking.css">
</head>  
<body>
    <!-- post -->
    <section class="post" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/imegs/zanzibar/tour1.jpg)">
    <container>
        <div class="row">
            <div class="col-md-12">
                <h1>BOOKING NOW</h1>
            </div>
        </div>
        
    </container>
</section>

<section class="booking">
    <container>
    <form action="/action_page.php" class="was-validated">
        <div class="row">
            <div class="col-md-6">
            <div class="container mt-3">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>Enter your booking information</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3 mt-3">
                                                <label for="uname" class="form-label">Username:</label>
                                                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out full name here.</div>
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                       
                                        </tbody>
                                </table>
                </div>
            </div>

            <div class="col-md-6">
            <div class="container mt-3">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                       
                                        </tbody>
                                </table>
                </div>
            </div>
                
            </div>
        </form>
        </div>
        
    </container>
</section>
</body>
<?php
    include 'footer.php';
?>
</html>