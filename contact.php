<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- for css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- for font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <!-- FOR BARBA JS -->
    <script src="https://cdn.jsdelivr.net/npm/@barba/core@2.10.0/dist/barba.min.js"></script>
</head>
<style>
    .form-control:focus {
        border-color: #FF0000;
        box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.075);
    }

</style>
     
        <?php include "header.php" ?>

        <!-- for contact image section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/image2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <!-- for contact section media container -->
        <div class="container-fluid my-5">
            <div class="row px-3">

                <div class="col-lg-4 col-md-4 col-12 my-4 p-0 d-flex justify-content-center align-items-center">
                    <div class="col-md-11 col-sm-8  col-11 d-flex justify-content-center align-items-center flex-column border">
                        <i class="fa-solid fa-envelope fs-1 p-5 rounded-circle  text-light mt-4"
                            style="background-color: rgb(231, 141, 131); border: .6rem solid white; box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;"></i><br>
                        <b class="fs-2">Mail Here</b><br>
                        <span>Admin@BasicTheme.com</span>
                        <p>Info@Themepur.com</p>
                    </div>
                </div>

                <div class="col-md-4 col-12 p-0 my-4 d-flex justify-content-center align-items-center">
                    <div class="col-md-11 col-sm-8 col-11 d-flex justify-content-center align-items-center flex-column border">
                        <!-- <i class="fa-solid fa-location-dot"></i> -->
                        <i class="fa-solid fa-location-dot fs-1 p-5 rounded-circle  text-light mt-4"
                            style="background-color: rgb(231, 141, 131); border: .6rem solid white;  box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px; "></i><br>
                        <b class="fs-2">Mail Here</b><br>
                        <span>Admin@BasicTheme.com</span>
                        <p>Info@Themepur.com</p>
                    </div>
                </div>

                <div class="col-md-4 col-12 p-0 my-4 d-flex justify-content-center align-items-center">
                    <div class="col-md-11 col-sm-8 col-11 d-flex justify-content-center align-items-center flex-column border">
                        <!-- <i class="fa-solid fa-phone"></i> -->
                        <i class="fa-solid fa-phone fs-1 p-5 rounded-circle  text-light mt-4"
                            style="background-color: rgb(231, 141, 131); border: .6rem solid white;  box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;"></i><br>
                        <b class="fs-2">Mail Here</b><br>
                        <span>Admin@BasicTheme.com</span>
                        <p>Info@Themepur.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- for user contact form -->
        <div class="contatiner-fluid bg-light">
            <div class="container">

                <div class="form-wrapper">
                    <div class="row justify-content-center">

                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title text-center my-5">
                                <p>Contact</p>
                                <h1>Contact Us<span>.</span></h1>
                            </div>
                        </div>
                    </div>


                    <div class="contact-form">
                        <form id="contact-form" action="#">
                            <div class="row">
                                <div class="col-lg-6 mt-4">
                                    <div class="form-box mb-30  d-flex justify-content-center align-items-center justify-content-around p-4"
                                        style="background-color: white;">
                                        <i class="fa-solid fa-user d-inline"></i>
                                        <input type="text" name="name" class="form-control d-inline border-0 ms-4"
                                            style="background-color: white;" placeholder="Your Name"
                                            fdprocessedid="gia5yl">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <div class="form-box mb-30  d-flex justify-content-center align-items-center justify-content-around p-4"
                                        style="background-color: white;">
                                        <i class="fa-solid fa-user d-inline"></i>
                                        <input type="text" name="name" class="form-control d-inline border-0 ms-4"
                                            style="background-color: white;" placeholder="Your Name"
                                            fdprocessedid="gia5yl">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <div class="form-box mb-30  d-flex justify-content-center align-items-center justify-content-around p-4"
                                        style="background-color: white;">
                                        <i class="fa-solid fa-user d-inline"></i>
                                        <input type="text" name="name" class="form-control d-inline border-0 ms-4"
                                            style="background-color: white;" placeholder="Your Name"
                                            fdprocessedid="gia5yl">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <div class="form-box mb-30  d-flex justify-content-center align-items-center justify-content-around p-4"
                                        style="background-color: white;">
                                        <i class="fa-solid fa-user d-inline"></i>
                                        <input type="text" name="name" class="form-control d-inline border-0 ms-4"
                                            style="background-color: white;" placeholder="Your Name"
                                            fdprocessedid="gia5yl">
                                    </div>
                                </div>
                                <div class="col-lg-12 my-4">
                                    <div class="form-box d-flex justify-content-center align-items-start justify-content-around p-4"
                                        style="background-color: white;">
                                        <i class="fa-solid fa-envelope" style="margin-top: .7rem;"></i>
                                        <textarea name="message" class="form-control border-0 rounded-0 ms-4"
                                            id="message" cols="30" rows="10" placeholder="Your Message"
                                            style="background-color: white;"></textarea>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-primary px-5 py-3 fw-bold my-4" type="submit"> MESSAGE
                                            US</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response text-center"></p>


                    </div>
                </div>
            </div>
        </div>


        <!-- for map section -->
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.190647948251!2d77.06154137436187!3d28.62404768446801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d05bb3c65e111%3A0xe7846cdebe075a7e!2sGdf%20skills%20best%20computer%20institute%20in%20uttam%20nagar!5e0!3m2!1sen!2sin!4v1698737349649!5m2!1sen!2sin"
                        width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

       <?php include "footer.php" ?>
</body>

</html>
<!-- for js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- for jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

