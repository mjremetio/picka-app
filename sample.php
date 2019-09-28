<?php

include "includes/includes.php";

if (session_id() == '' || !isset($_SESSION)) {session_start();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
    
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    
    <title>Picka</title>
    <style>




        .navbar-nav.navbar-center {
        position: absolute;
        left: 50%;
        transform: translatex(-50%);
        }

        .nav-item {
        margin-right: 25px;
        }

        .navbar-brand {
        margin-left: 20px;
        }
        
    </style>
</head>

<body>

<?php include'includes/navbar.php';?>

<div id="modal_content" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(32,33,36);">
                <p class="modal-title" style="color:white;">Filter Settings</p>
            </div>
            <div class="modal-body">
                <div class="login_content">
                    <div class="row">
                        <div class="col-md-4">
                        <select class="form-control form-control-sm">
                            <option>All Locations</option>
                        </select>
                        </div>
                        <div class="col-md-8">
                            <label for="">No. of Garage</label>
                            <select class="form-control form-control-sm">
                                <option>All Garages</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ">
                            <select class="form-control form-control-sm">
                                <option>All Types</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <p id="priceRangeSelected">Price Range</P>
                            <input type="range" id="rangePrimary" name="rangePrimary" value="" />
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ">
                            <select class="form-control form-control-sm">
                                <option>Any Bedrooms</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control form-control-sm">
                                <option>All Bathrooms</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-success">Search</button>
            </div>
        </div>
    </div>
</div>

    <script>
        $( document ).ready(function() {
            $("#nav_login").on('click', function() {
                $("#modal_content").modal('show');
                
            });
            $("#nav_register").on('click', function() {
                $("#modal_content").modal('show');
                
            });
           
        });
      
        
    </script>

</body>
</html>