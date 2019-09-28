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
        #img-bg-index{
            background-image:url("https://si.wsj.net/public/resources/images/B3-DM067_RIGHTS_IM_20190319162958.jpg?fbclid=IwAR1EeOgNf-BSc4hA6KgCUPj7o48qoVezwvnQXlMcRJQuzFfCDtEFT6XZ2ko");
    
        }
        #forgot_pw{
            color:#999;
        }

            .card-width {
        width: 460px;
        }

        .card-house-padding {
            /*background: rebeccapurple;*/
            margin: 5px -17px 0px 0px;
        }

        .card-body-house {
        padding: 10px;
        }

        .card-house {
        -webkit-box-shadow: 3px 0px 16px -6px rgba(66,66,66,1);
        -moz-box-shadow: 3px 0px 16px -6px rgba(66,66,66,1);
        box-shadow: 3px 0px 16px -6px rgba(66,66,66,1);
        border-radius: 10px;
        }

        .house-image {
        width: 100%;
        height: 100%;
        }
        .house-auction-button-1 {
        background: -webkit-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,1) 0%, rgba(145,232,66,1) 100%);
        color: white;
        }

        .house-auction-button-2 {
        background: -webkit-linear-gradient(left, rgba(116,117,111,1) 0%, rgba(51,51,51,1) 100%);
        color: white;
        }

        .view-details-button {
        border-radius: 10px;
        border: none;
        padding: 5px;
        color: white;
        font-weight: bold;
        background: -webkit-linear-gradient(left, rgba(55,207,25,1) 0%, rgba(8,153,0,1) 100%);
        }

        .carousel-control-prev {
        margin-left: -120px;
        }
        .carousel-control-next  {
        margin-right: -60px;
        }

        .carousel-control-prev-icon {
        background-color: black;
        }

        .carousel-control-next-icon {
        background-color: black;
        }

        .carousel-control-prev {
        width: 130px;
        }

        .carousel-control-prev-icon {
        margin-right: -90px;
        }

        .carousel-control-next {
        width: 130px;
        }

        .carousel-control-next-icon {
        margin-left: -90px;
        }

        .card-houses-2 {
        cursor: pointer;
        }

        .card-houses {
        cursor: pointer;
        }


    </style>
</head>

<body>

<?php include'includes/navbar.php';?>
</div>
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
                            <input type="text" class="form-control" placeholder="Email" id="login_email" required="required"/>
                        </div>
                        <div class="pt-sm-1 col-md-12">
                            <label>Password</label>
                            <input type="password" class="form-control" id="login_password"  placeholder="Password" required="required"/>
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
                <button id="btn_signup" class="btn btn-outline-success">
                Sign Up
                </button> 
            </div>
        </div>
    </div>
</div>

<div>
  <h3 style="text-align: center; font-weight: bold; color: #32CD32" class="mt-3 mb-4">Foreclosed Properties</h3>
</div>
<div class="justify-content-center w-100 ml-4">
  <div id="forecoseproperties" class="carousel slide w-100 p-3" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="form-group row">
          <div class="col-md-4 card-house-padding">
            <div  class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 card-house-padding">

            <div class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 card-house-padding">
            <div class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="form-group row">
          <div class="col-md-4 card-house-padding">
            <div  class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 card-house-padding">

            <div class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhIVFhUVFRUVEhUWFRAQFRUVFRUWFhUSFRYYHSggGBolHhUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGyslHSUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tK//AABEIALcBFAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQACAwEGB//EADsQAAEDAwMCBAQFAgUDBQAAAAEAAhEDITEEEkEFUSJhcYETkaHwBjJCsdHB4RQjUmLxcoLSFTOSorL/xAAaAQADAQEBAQAAAAAAAAAAAAACAwQBAAUG/8QAKxEAAgICAgICAQMDBQAAAAAAAAECEQMhBBIxQRNRYRQiMiNx0QVCgZHx/9oADAMBAAIRAxEAPwDwfTWlPGtMIPp1JOG07L6fHGkfLcjJcgPe5Qko1tFaCgjEd0J3hy5sJTh+nWLtOsoJZULRSXXUkxFBd/wyzqb8ohrUiFmwJ1W0yCfpYKFwHwypo5RpIkUlKARUI0hU5OwX4Sgoogqm5aD2ZQysH0yiwoWrGaptFtJXAyjnawQlLqagpruxzphdTqV7KDqCH+CqmkusxdTtfqJNghAXTKJfSAaXdhK8xruqPefhloYWEzBzHN/a3mlTyU1ZXx8Ly/x8ez0bupsaIJk9h/PCBq9anDAPWT94SIEwfYjAgceuR9FcjPEe/wB5TU7L4cLFH1Y0pdRE3AA8j6cH7snmjcHNkGQcFeNf7CeJx/a5+qJ0esfSdLCQJbIIsZAkR9crFoDPw4yX7NM9cKasWrHp2vbWbuFj+pvY/wAIpzgmUePKMoypi/VU1XTtW9dyybZYxieqNKt0BqKaNc9YvCx7Ng2hU/TrJmmumbmqrWJbgrKFlaQH/h1EbCi3ojPkYV08JxTNkhpVdqLGtCJeCTJBt2NAVuxKqOolMaLrIiecWjUhU2rQLoCyxdmbaa0FNaNC0AXGNglSghKlEJnUKWayrC0ZBtsDqgBYiuh9VqkGK6ByRfHE2tjJ1ZdpulLBUlMdGFqdnSh1QYymtPhqxqNY0veYaBJK83rPxC9zvB4WfU8Sf4WpWxeHBkzP9vj7H7qauxi8yNW52efkiqeqIgyZ7+/Kb8P5K3/p7r+Q9LUm1vW2tJDG7otMwPbuhepdTc8bQYFwY5xny/hLGtEn6DN+J++UKhXkZx+BW8mxjU6rVeCzwAGAYD8Oukb27qrie8Sc2AE/RHlkCbG0kDgmQB5Idmmtm/3dA8fd+D0McI41UVRemSf1GCQHSSJGRJ9vZWewuG9xMnvfdEAieDdWpUwbQXEgiwJM8WH3dE0dGYHxCA0TDZuJz9bpqhQVgNsxeLz3nI72jssywx9kYv7orY0Zk/8A1+8hQayI2taMHE47zkWXOK9mnem1HscDBg54kf22p1/jSUkZqXOsJJAJt25McKDVO7nmJv7pcvwS5uMsjv2O/jSp8VLKGsBMGx44twimuSrZBPC4OmFb1QuVQ5cJRWBR1xVC+FxxWFRyFsOMbNDUUQsqIewzoENqqSsqQWu1d2MaSDtC5PtM6y81p3QnWkqpsWRZ4+xq1XCpTMhXWkLLBXBWJdC4aq4yjtcJL1JpgwnG+ULqWArRuOXVnj3MM3VC0p1qdOJlDOoJDiepHMmgCnKaaN6wFBb06UIoKgcklJCbq2tfUcQT4R+VvHqfO31QjW5NoEWnuMhE6uj43DBHGD7dx6IcWdfj9xwq0kj1sSSglEJos+UTM4Hc/wALeraw77T58yD2wu0WECTPiAMeU58ryrBnBA7zcGwiOy1yDBmstcXJzI7XEdrhasojFxbyyc3Rmn03oMC9yfQLtQ0RYkn08K7rfk6xbWIdIb8vNU0+mLzAsOT95PkmDH0uGfU/UlXpVWYayP1EguGAT3+5RNaOsr8dlMRTFyCHO5OIvxGUK6qXEzwDOLgSRPcoqppWkEh0ANLvFF5IAE2J5zOEJUi0TO2/YETEe0fNAcjEUwS2XR/qsTH+70wFkxpxtmJEYjJIn2J9lu8tFvSeZM+vr8lkTb3vf3wgabNKtpGAb+IOAjmBgzxhZ0mbnAD6kAWEm5Vw4zIJnHb9vvKq9oiOTEcER9j5JbgzSj612kcBvEXAiLfvlF6TXAw104Hi7yQB++fJDbiD4f0kuEwSMZ4OEPVNvSOfSwQSi0DOCmqZ6RrVZZdKqF9OTkHaf6H5Leo1YePNdZOLB6pQjjKKcJUbRWVYyLSMGsXUa2ioi6A/IUFOF0BcZVWwCFIFtryU2ovSVIWIartYiQuVNUO6FVGNekdCpCOZqLJhFOBvqKkJedTdTU10JTErGHCGtjOjqFeo9BMatCV1mOOzOq2Vn8JbtWzWLqN7UBCitBSQvWOrsoeEeJ+dvae5XmqnW6zjO6PIBtvSy7RZh4mTKu3hHrX6VrrkAkYNjCTdY0oaWloEzjv5wgtPq35+I647k47rWpVkhzQZbcOcZx5GxT4wrdlmHizxzvtoOpi0zeL8C0kW7WVGVGSBM+R+QicoHVV5JDTDexP2O642jA4FruOBBmQUdFpzUFxcQDEOgTwu0qBm97EfORPzVG6huWm054kcgcqzasjsCRcm98+3OFiaZo0p6Wll7uLtbP6R+aeJW3x6DY/ygQQ7mJ9T6/slleznbSYuGw4GcXsBb2UZSsRYkgGSYgAkkeuEVA+g8aiiRGz3lwKEr6cExTedmDaTMAkefGUMKB8wZVm0XcH79V3VBGzNHTGS4+8fJWdoKJ/U9ve7XAcc55Qrqzxz/BPYqprkZFpiQInlY0jg6h0emSAapg9mifbxIfVdKcBLHh45EQ4T5KzageJDoMgxiZ9PQfNZ/FIaCHXkyLy2I28eXdA0dYteODaL4M+iyrttYzYT/wBXI/umWoqh1nCTw7kR9/RCdQoBpECLAGYncPzY4SprQXsafhaoSKjZMAtMcT4pMfJNK1NAfhOl/l1HcFwA9QL/AP6TDUVYSfR4vJf9eVAVVsLlNyy1GoCHZqLoVJWGoNocNUQzKtlE3sI6MXaOrKbUSvPaV0JpT1EBJg9FebHvQyBVw8JX/ilcV0xMmeJh76yHOqKFqViuUWkrLCWJJbD2PJR1FiG0tJMqVNMRNkkl4KKryiHMQ1YLhS2VbUU1uvFKmX5OGjueEq1dctSnXat1QjsAti7dFuDi/JJX4Aa0vcXOMuJkn1XGU0dodAXkWIaRO6IBgxacheh0vTKNJpfG83ALgS2YsBa1+UfRJWez2S0KKFNrQC9p3Zi9reFpHecyRhc+GHAZmPFOMmIviD9FfUgmZAJJcdwIkmckCwyeOVzGBx68X/n3RxlaOom2LmB7gT7JT1Ku53k0YEzPmUa8Tc3i5vb7ulVcOebYCVnk3GkFFBGnEAc/05lGQTkiwtiT2HF0GOlVgPD4vIZ9pQ401bdtLXSeClKcoa6s20/Y1/xTGgEkdoEE28lo3rAi1Mk9yYtjzQ1DpQaPHaMxc+/ZH0mMaPyjb3cZ9M4Cpj8j29AugSv12oJikwR33H34Wel/EZJh1IEd25EDzsURqOtUBYUg+OSAR7FyGZrqTpLGBp9Ggqe28n7cn/AXrwNW1mPFreRt/wAoXUUb2uhH1z3KuaxmHZIBGbTgAcSIVfZAnHT/AE9BN4+a1fUDh7Q6+SCYJELlNzXWJIPeSZPby5WT6T2mYsJ8QM47xj3SpbNI8xj25EE4lVfTBFzxxxeL/fKqD5H+JU7gj9jg5n2Qs49D0Ss1tLZIJaTJ7zeR+3sg+qamEqpVyIM+v/CG6jqSfdTZ30haIv0n9Vy+zlfWKabUSUsc9E6I3XlQzuUyyWJKJ6qgZAUVdJU8IUXqJnkyuxUbLnxii6tNDildC0yxST2XoNJTCnSKz0zEfTamxjonyTM6enRVGitabVqGo0iOeRmlFsIphQ7Vu1ESyNwsKrFqwqzhK4BOjz3U6EgpTptFuM5AcWls7T+WW8L0+vYA0k8JMdTTBmCG7gTBBI8ONwN5M2TMcd2ezwZOUWFUqopCAXAbfDYXviJs2QVlX14cXNebOMjbZpdaw7JcdV/3Xu0gmwsD5fm4S3V1jj+6bOSSPQUR4xpvFhyccz7/ANlyqwu3QJayA4ziTkXvYG/ZY6JrhTbTBG50zLg2P9pnHCxDzBiQdpiDnvN+QSPQY5S3K1o0E1uoJfsAE/qGAP4ymOn0c7SWxLQQf9X+718kr0dKahcXQSDkkbpjkeo+S9V0fTt2+KkHctcYIGQTf9xOSuw3tyOk0ginpzE+QAEAgAegCU63UhriW2vkeKMYlMurVG023b4zh8mzRYxGBfC8xW1TWyXDc44ANxPJ9AmymkrYMUbarUhm1xO4kflvIMmWm3ok2t1L6v5jbgDAtC32mo4mLk4/vhHaLpb6gdsa07YmXBvewPspMkZ5lV0hiqImoN3W5481WpRIuEyq6BwO5tiJJwMZCuynuAkQSLi9jKQuL/tl59MLsK26s8/NE0dVkyflPM+2FTVaf790uMgwpcs8uF1LaCSTHWn1U2PneL3gEeYgI6hqCDP3leeo1ITWk7wyT4piJAgQTMZVfGzdkDJUF16QjczGSOR6eVkG5GMqfqFsggcE3E+X/ihNXAPkYPpPCqlJUCjJ+Pf3t/S6yic4UDpXSUh1IIW1GwSFrpnwVbWsvPdDtMLwskfiytB+Uel01fwqJXS1NlFcs6oieDY4quWQK65yqCrRSWgui5H0XJVTei6FVEmJyRHFFEBqF0rkamHnT8kAWrVRq0auFNmjVo1UaFsxq4Wzzv4q1W3ZTEEmXGfKw/qvMurTFgIEW5uTJ+aafidjn6vYM7RH/wASf5SNpRqWj6PhwUcMf7WbmqQIHBkHz+wq6WnLtzsNv6uz/dZ1nifCe+c+UonT/kzeTaDfJmfkIXXbKg0wQOHCXTIO4OAgBsZHr3ssq7STuwMAAmxgNuMzAHzV6NMNLgXAgtbdsG5uATNuQb54stqlNpgCwANyZnsPI4EI4Rt2wRbp6M1YE8GQC4gAGZA9vReu0NRtOlvedrQNxJxAMHi/aF5vpRZ8ctduu0wWhrrxABBtGb/8oP8AEfUC6KTfyMzxuPc+XYJWXL8cJNGV2lRbq3XzXf8A5YjhpMGw8u6Cp6d2SDcm+ATyB3ysum6YukiZbBECb8T2E/svXUunuDvjVSxoAlxhoZBEen2FNx1LKu+R/wCBkmo6Qt0WjmPYx3j/AJ+qat6fMkSBfnjgEodnWKNOG02uqEAx+lvtz9AtX6SvqB43tAifhtIBaMgubn5q+M16Adgut6hRpiGj4h7Aw3yl38JFQqObUL3gjeSRNgL5vkWIXqqH4bHqLeXb+6R/iWkxpFFpl1nPP5i2xhnkbzHopOVF13va8L8hQa8GWqaJ++/9kprs8SZNd4GzkAybD0CH+HulyHMvmgvsKOgZtJEQIgWNzMkz2Ecf3WzKX36LVrS09iObHy91sOOoo5swp1CDb+qvqySGm3NpGCTc/IomppdrWOkEPBiDiDBBGRxkDy5WWsmGyQYJDY7DPGJM+6KcWlVmJ2DNCjiugKpXeEaDajKGcEZXomN3dCOXh8m+7bCi7IHKKqinDHzHq8rAFWBXtqZA0a7lenWusZVJXOewetj/AEuqTOjWleUo1CnWiqYVGOdkOfDWx9SWzQh9M5GMTDzJeTrWoim1Va1cFWFgvyeP/HdGKjKgH5hBPm2Yj2K80xeu/G7S+mwjDXS73ELylAgET3EjuJuFy3I+k4MrwL8G5oNLC9rgCNoLSRucTMlo7Lu2ABe9wcW+/wBl3XuZvcabSGnEmfWFx2oLgJiwgeg4+pTdWVRsN0BLSHQDGA67ScYm+eFq57Q0zIdaA2NsZIPI4ss6VRrrtluxrWkbgdxJMlvzXHtkEx+US7zk2wLTYJsfBn9wbTf+4akkeEtHnKGdTG7c4xB3TIBBFx9UZp2l26ASG+JxEYwLepPz8kL1GiIIz6GQebe0JE4rq3VhJnX9ZcHuewh9RxJe9zWXLs2whtR1Nz3TXqPqeQIAHtj6IWtpSDj+iHNMgrycuXMvK/wMUYjb/wBcDBFGkGn/AFvIqO9hAAPzS+nrHh/xA9web7pId81hsUcxTyy5ZO2/ASSGNbquoqWdXef+4t/ZVZS+GRuyTefMWnuEFTa6fNMa2mIALjJkARcREzKr46c0507X2C/owqvvtHuUz0tEWBBDZAJgmJiR6xdLaemM/cpppqjoawnw7pAMRuMCSVdxlK25ICX4NH6duN4nxyHAtA2/lv3N7LENMTFpiYtOY+oR1cA7B4W7gSXP25EggFsw3GUudUVcgYl4gTifeSP2yPkhazrrSvU/1XMCCIjAj6IV7lNlmgkWJXG3MKjZOF0tIUmTNRr0M6lK0eSUavTxcJhpdTNiu6pqVkhHLGyeEpQlsRKIh9G6i834pFfZDCVYFZqbl6PYlo2ldDVkwrcI47AeizQj9NVhAhaByanQmas9Jo9RKc6UyvG6DUQ6CvV6GqIVEZdkeXycXVjJ5gJVrK8I2tXBC811fUGYWvSFYMfaVFNfqy5pb3BC8y2xvwm5KB1LATI90CnvZ7XGqH7SM027BB8JdmPZDUzcA2ki/Za6xkOO3HByhKpj1TMk0t/RZHY50WnkVC1wO2DFr37z2BuJWVd42nJtMiwFxfz/ALpPRrQRJgTf+UxZWyJN2xbk+6LFnU40jXFo36W9u47i6IjwgE33QIwbwqVzObkm/JsAOfuyy0LoLhkmBic9uxRApbi6IG0F1y1phvqbujgI4P8AaYylAfE3AmXN7nLcC5vOEJqtNNu2Fas4sc17Z3D5EdiihrKb7yGnlruPQ8pb6SuE/wD0LfoUEAHa6x78FdNId0yfoDVPhh3eCLfws6WnaG/lwfzDP/TH9Un9M79V9ndylGiTFpdMRBkxefot3t3HyGB65VqJLXBzHQYJJBILZkFs94P1WumbyqoQ9A2DvbBHktNOQCdzdwhwAnbBIO0+xuqO8T4BHa5ge5RJDCW7AR4Rukgy/wDURHCL2czLXOIa2ALSMAHxCSSeUtcx54TTqLdoY0ggnxXEW/SR35+SBqVfLj6pOZJt2wkYBpGV2hpi4ybBbaQy6TgfXyKK33UU+r8MXkyNaRVtAAWWVWmi5WdQIJRQhSdix4grRtebFSuEI4qWUnB6KUuyCS1RYtrqIvkj9m0w0hUhblqrCY0JsjQtAVWFAiToF7NQuF6pKrKJyMo1FRN+ndSOEka2SvTdI0LYnlOwdm9E/I6qOw5r3OCRdUaQ5eop0oS7qfTt6qnG0QYcsYy34PN1SYWI07jhejp9LGEwo6BoGFO8Dk9lT5cY+Dzel6XUcI47JlR/DbT+YJ2wtblCa7rQZgynKMYrYn9TlnKonaX4YoAXYCvOdY0AoVHGSGkj4YaJkH8wn9JA7oyp+KXG0LjNPU1AJ3EGCR8lkZxb/aVYpZIO5vR5ulULXSMGx9Cmz4IADWtLWwSCfFE3vyfJJtdp3McWPEEfdlv03qDbMcAIs1wtN5h37BZjzxjPpI9KrVoLfRJDjGBfFuAllXS8p0KAIkuveG/q8ndo4RrNG5nhqB1NrgJMA7hmw5hU5MMci2Yp0KtN0qr8L4gb4Q2945OByu0nWuAbHN88jzTH/BOaHU2VntY7uCJEZLfNL31621zCacBoa2WjdG6fD2K5LotIy2zmqqTAgAgBtgGjaMTHObrlSvtb58QsaVOAXGe8+fn81kfEcWnKxydfkJKjunFwSJEyR/qMzBRjKwDi4iANxIBIjNgcrBryAGzad2bDjClPRuqtIBtN/b/lC5dI68gykluQBqNc57tziTYASZhow0eS7p6Zef8Abz6J1pOgNbd5V+ohrW7WCAoOmSrmxT5UW+sBZXqDAEBZtesiuSp3PYaiqDRUXDUQgqKpqrvkM6Fq7kG8rWo5YkKXJK2PgqKKKQokDD0TqazLEQsXFexJI82LZXYqkLYKrkLRqZkuLjiqElLsYkXaJNl6Pp+5rRCT9O0xJkr09CjtHkq+PH2RcrIvAbp3khafDQA17WmEW/WAjKtPMlCSfgs2kuVaoaMoapqwBYhItfWe4m9kqc1Ebjwub2Ga7XTMLzuqcXFaue4mEw0vTyVHJvI6PQgo4UC6Hp85THUa00G2TClpxTEleb6/rQ8wE5r4sd+wYSeae/Ar1+rNVxLj6IEshEbV00pXmu5O5eT1YNRVFG6x4EB37FEU+t1wQTUc8C0PJdbsJuENUYB3lYwtlPLFqpP/ALGKmehd+J907qRHAh7nwOw3KUur0CTva+NpjbE74tN8LzsLrWp0ednWnszpE31Goc43PsMBNNL1rZpjQNMOm4diOZ8yl+l089sTddIEo4vJG8je2DLq/JodSXxDYjJ/hN9BXgQlDSOERRqQujmk3cmTZl3VD11eyXau6jayo9ydKdolhDqwKpTQtQo+qgqoUOVFsGYblwuXHKqjch6QVoqG8gL1+m/DTdsxleQ6XqNlQE4X1Dp1YOYCDwvV4MYShdbPO52ScGq8CAfhlnZRehe66it+OH0Q/qMn2eDLliXKKKCbPRiT4iq56iiW5MOkZNMmF6zpfTWFokKKKviJNOyXnScYqhf1R5ZUa1g5+id0q0sAK6onY/5MmzJdIirVaO8ysXNd3UURyRsJtoGfu7rlNpcYBUUUslsovVjPTaAC5TLTt7LqifGKRBObl5F34i1sNgLyDnKKKPlSfej1eJFLHo5Ks0qKKYqYQ2DlUfpmHiFFE3yLtrwZjSN8114bEQoolvXgO2/Zk5yzL1FFPKTGJF2OWzHqKJkGBJBDXq+9RRUpiWij3IWqoogkHAFeFmVFFDJbKUVXsPwr1UxsKiiq4M2slIRy4KWN2eodJuooovbPBP/Z" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 card-house-padding">
            <div class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="form-group row">
          <div class="col-md-4 card-house-padding">
            <div  class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 card-house-padding">

            <div class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 card-house-padding">
            <div class="card-width">
              <div class="card card-house">
                <div class="card-body card-body-house">
                  <div class="form-group row">
                    <div class="col-md-7">
                      <img src="data:image/jpeg;base64,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" class="img-fluid house-image" alt="Responsive image">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <h3>09 : 09 : 09</h3>
                          <small>Days Hours Mins</small>
                        </div>
                        <div class="col-md-12">
                          <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                          <h6>September 31, 2019</h6>
                        </div>
                        <div class="col-md-12">
                          <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="button" class="btn col-md-12 view-details-button btn-sm">View Details</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                    <div class="col-md-7">
                      <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong></h6>
                      <h6><i style="color: #32CD32;" class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy, San Antonio</small></h6>
                      <h6><small>3 Alumni lives near you</small></h6>
                      <h6><small>35 views</small></h6>
                    </div>
                    <div class="col-md-5" >
                      <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House and Lot</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Floor Area:</strong><small>234 sqft</small></h6>
                      <h6><strong style="font-size: 14px;" class="mr-1">Bedrooms:</strong><small>4</small></h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer form-row" style="padding: 0; background: none; ">
                  <div class="btn-group col-md-12">
                    <button type="button" class="btn house-auction-button-1">Auction Ended</button>
                    <button type="button" class="btn house-auction-button-2">Starting Bid: Php 2,000,223</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#forecoseproperties" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#forecoseproperties" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>





    <script src="https://code.jquery.com/jquery-3.1.1.min.js">    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <script>
        $( document ).ready(function() {
            $("#nav_login").on('click', function() {
                $("#modal_content").modal('show');
                $(".register_content").hide();
                $(".login_content").show();
                $("#btn_save").hide();
                $("#btn_login").show();
                $("#btn_signup").show();
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
            $("#btn_signup").on('click', function() {
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