<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- for font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    @media(width<768px){
        #form-container{
            flex-direction: column;
        }
    }
    @media(width>576px){
        .second-formContainer{
            padding: 2rem;
        }
        .form-paragraph{
            border-radius: 10px;
        }
    }
    @media(width<576px){
        .second-formContainer{
            padding: 1rem;
        }
        .form-paragraph{
            border-radius: 4px;
        }
    }
    @media(width<285px){
        .second-formContainer{
            padding: .2rem;
        }
        .form-paragraph{
            border-radius: 0px;
        }
    }
</style>

<body>
    <?php include "header.php" ?>

    <div class="container-fluid" style="background-image: url(images/loginImage3.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">

        <div class="container">
            <div class="row">
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center align-items-center">
                        <div class="section-title text-center p-0 bg-light d-flex justify-content-center align-items-center"
                            style="width: 15rem;">
                            <img src="images/gdf_logo.png" class="img-fluid" alt="gdf login logo">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4 d-flex" id="form-container">

                    <div class="col-lg-5 col-md-5 col-sm-12 text-light pb-5 px-4 pt-3" style="background-color: rgba(12, 12, 12, .8);">
                        <b class="fs-5">Login here</b>
                        <p class="my-4">Welcome back, Please login to take a step towards your success, because <b>
                                Success is Our
                                Success. </b></p>

                        <form class="d-flex flex-column justify-content-center mt-3">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email / Mobile Number <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Email / Mobile Number">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Password">
                            </div>
                            <div class="text-center my-3"><a class="form-text text-decoration-none text-info">Forgot
                                    Password?</a></div>

                            <button type="submit" class="btn btn-primary" style="background-color: rgb(54, 196, 54);"><i
                                    class="fa-solid fa-lock me-1"></i>Login</button>
                            <div class="text-center my-3"><span class="text-light fs-5 fw-bold">OR</span></div>
                            <button type="submit" class="btn btn-primary bg-danger"><i
                                    class="fa-brands fa-google me-1"></i>Login with Google</button>
                        </form>
                    </div>

                    <div class="col-lg-7 col-md-7 text-light second-formContainer" style="background-color: rgba(58, 180, 58, .7);">
                        <div>
                            <b class="fs-5 fw-normal">Or signup for free</b>
                            <p class="mt-2">Sign-up to get FREE access to Speed Tests, Videos and more.</p>
                            <div class="p-2">
                                <p class="bg-light text-center text-secondary form-paragraph">Password should have minimum 6 characters
                                    with at least 1 special character.</p>
                            </div>
                        </div>

                        <div class="form d-flex flex-column">
                            <div class="row form-rowContainer">
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label for="exampleInputEmail1" class="form-label">First name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="First name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Last name</label>
                                    <input type="text" class="form-control" placeholder="Last name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Email<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="email" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Mobile<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Mobile" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Password <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Password" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Confirm Password<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Confirm Password" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label for="exampleInputEmail1" class="form-label">Interested in <span
                                        class="text-danger">*</span></label>

                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>(select)</option>
                                        <option value="1">Bank</option>
                                        <option value="2">SSC</option>
                                        <option value="3">Railways</option>
                                        <option value="3">R</option>
                                        <option value="3">Railways</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-lg-6 col-md-6 col-sm-6 col-12 d-flex flex-column">
                                    <label for="exampleInputEmail1" class="form-label text-light"><span
                                            class="text-danger">signUp</span></label>
                                    <button class="btn text-light fw-bold" style="background-color: darkblue;"><i
                                            class="fa-solid fa-check me-2"></i>SIGNUP</button>
                                </div>
                            </div>
                        </div>


                        <div class="my-4">
                            <p>by signing up, you agree to our <a class="text-primary text-decoration-none"> Terms and
                                    conditions </a> & <a class="text-primary text-decoration-none"> Privacy policy </a>
                            </p>
                        </div>


                    </div>

                </div>
            </div>
        </div>


        <!-- <div class="container">              

                <div class="row">
                    <span id=""></span>
                    <div class="col-md-5">
                        <div class="login-box-02 bg-overlay-black-70 parallax">
                            <div class="">
                                <h4 class="mb-20 text-white"> Login here </h4>
                                <p class="mb-30 text-white">Welcome back, Please login to take a step towards your
                                    success, because <em><strong>Your Success is Our Success</strong></em>.</p>
                                <div class="section-field mb-20">
                 
                                
                                   
                </div>
            </div> -->


    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>