<?php


if (session_id() == '' || !isset($_SESSION)) {session_start();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Picka</title>
    <style>
        .nav-link {
        color: white !important;
        }

        .nav-link:hover {
        color: #32CD32 !important;
        }

        .cr_image {
        object-fit: cover;
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(80%) brightness(70%) contrast(70%)
        }
        .modal-header{
            background-color:#343a40;
        }
        .modal-title{
            color:white;
        }
        #forgot_pw{
            color:#999;
        }
    </style>
</head>

<body>

<?php include'includes/navbar.php';?>

<div id="modal_content" class="modal fade">
    <div class="modal-dialog" id="modal_dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"></h2>
            </div>
            <div class="modal-body">
                <div class="login_content">
                    <div class="row">
                        <div class="col-md-12">
                            <p id="invalid_msg" style="color:red;text-align:center;"></p> <!-- Validation Message -->
                        </div>
                        <div class="pt-sm-1 col-md-12">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="login_email" />
                        </div>
                        <div class="pt-sm-1 col-md-12">
                            <label>Password</label>
                            <input type="password" class="form-control" id="login_password"  placeholder="Password"cols="30" rows="10"/>
                        </div>
                        <div class="pt-sm-2 col-md-12 text-center" >
                            <a href="#" id="forgot_pw">forgot your password?</a>
                        </div>
                    </div>
                </div>
                <div class="register_content">
                    <div class="row">
                        <input type="hidden" id="editRowID" value="0">
                        <div class="col-sm-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" id="lastname"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" id="firstname"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" placeholder="Middle Name" id="middlename"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>Gender</label>
                            <select class="form-control" name="" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Contact Number</label>
                            <input type="number" class="form-control" placeholder="Contact Number" id="contact_number"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>Birthday</label>
                            <i class="fa fa-calendar"></i><input type="text" class="form-control" id ="birthday" placeholder="Birthday" />
                        </div>
                        <div class="col-sm-3">
                            <label>Nationality</label>
                            <input type="text" class="form-control" placeholder="Nationality" id="nationality"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>Country</label>
                            <input type="text" class="form-control" placeholder="Country" id="country"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="City / State Address" id="city"><br>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Street / Blk / Lot" id="street"><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Zip Code" id="zip_code"><br> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password"><br>
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password"><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
               <button id="btn_login" class="btn btn-outline-success">
                Login
               </button>
               <button id="btn_save"  onclick="register('save')" class="btn btn-outline-success ">
                Save
                </button> 
                <button id="btn_cancel"  data-dismiss="modal" class="btn btn-outline-success ">
                Cancel
                </button> 
                <button id="btn_signup" data-dismiss="modal" class="btn btn-outline-success">
                Sign Up
                </button> 
            </div>
        </div>
    </div>
</div>

    <script>
        $( document ).ready(function() {
            $("#nav_login").on('click', function() {
                $("#modal_content").modal('show');
                $(".register_content").hide();
                $(".login_content").show();
                $("#btn_save").hide();
                $("#btn_login").show();
                $("#btn_cancel").hide();
                $(".modal-title").html('Welcome!');
                document.getElementById("modal_dialog").className = "modal-dialog";
            });
            $("#nav_register").on('click', function() {
                $("#modal_content").modal('show');
                $(".login_content").hide();
                $(".register_content").show();
                $("#btn_login").hide();
                $("#btn_signup").hide();
                $("#btn_save").show();
                $("#btn_cancel").show();
                $(".modal-title").html('Sign Up!');
                document.getElementById("modal_dialog").className = "modal-dialog modal-lg";
            });

            $("#btn_login").on('click', function() {
                var email = $("#login_email").val();
                var password = $("#login_password").val();
                $.ajax({
                    url: 'includes/login_session.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        login: 1,
                        email: email,
                        key:'login_btn',
                        password: password
                    },
                    success: function(response) {
                        if (response.indexOf('success') >= 0) {
                            window.location = 'index.php';
                        }
                        if (response.indexOf('invalid') >= 0) {
                            $("#invalid_msg").html('Invalid Email and password!');
                        }
                    },
                
                });
              

            });
        });


        function register(key) {
            var firstname = $("#firstname");
            var middlename = $("#middlename");
            var lastname = $("#lastname");
            var birthday = $("#birthday");
            var nationality = $("#nationality");
            var country = $("#country");
            var gender = $("#gender");
            var email = $("#email");
            var city = $("#city");
            var password = $("#password");
            var street = $("#street");
            var zip_code = $("#zip_code");
            var contact_number = $("#contact_number");
            
            if (isNotEmpty(lastname) && isNotEmpty(firstname) && isNotEmpty(middlename) && isNotEmpty(city) && isNotEmpty(zip_code) && isNotEmpty(street) && isNotEmpty(birthday) && isNotEmpty(country) && isNotEmpty(nationality) &&  isNotEmpty(email) && isNotEmpty(contact_number) ) {
                $.ajax({
                    url: 'includes/users.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: key,
                        firstname: firstname.val(),
                        middlename: middlename.val(),
                        lastname: lastname.val(),
                        birthday: birthday.val(),
                        nationality:nationality.val(),
                        country:country.val(),
                        city:city.val(),
                        street:street.val(),
                        zip_code:zip_code.val(),
                        gender: gender.val(),
                        email: email.val(),
                        password:password.val(),
                        contact_number: contact_number.val(),
                    },
                    success: function(response) {
                       if (response == "added") {
                            alert('Successfully Register!');
                            location.reload();
                        } else {
                            firstname.val('');
                            middlename.val('');
                            lastname.val('');
                            birthday.val('');
                            nationality.val('');
                            country.val('');
                            city.val('');
                            street.val('');
                            email.val('');
                            contact_number.val('');
                        }
                    }
                });
            }
        }
        
        function isNotEmpty(caller) {
            if (caller.val() == '') {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
        
        
    </script>

</body>
</html>