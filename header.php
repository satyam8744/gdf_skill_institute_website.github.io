<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- for css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- for bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- for font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- for owl carousel slider css cdn -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- second css cdn link of owl carousel -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- for custom css link -->
    <link rel="stylesheet" href="style.css">

</head>
<style>
    #gdf-logo {
        width: 9rem;
    }
</style>

<body>
    <!-- ====================================== for navbar ===================================== -->
    <div class="container-fluid">
        <div class="row p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-0" id="navbar-fix">
                <div class="container-fluid d-flex align-items-center justify-content-center justify-content-between p-0" id="nav2">
                    <a class="navbar-brand" href="index.php" id="gdf-logo" style="text-decoration: none;"><img
                            src="images/gdf_logo.png" class="img-fluid fix-width" alt=""></a>


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                        <i class="fas fa-stream"></i>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent" itemid="collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 border-0">

                            <li class="nav-item">
                                <a class="nav-link active text-warning fw-bold px-3" id="link-home" aria-current="page"
                                    href="index.php">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link active fw-bold px-3" id="link-home" aria-current="page"
                                    href="about.php">About Us</a>
                            </li>

                            <li class="nav-item dropdown" id="dropdown">
                                <a class="nav-link dropdown-toggle px-3 fw-bold" id="link-home" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Exams
                                </a>

                                <ul class="dropdown-menu p-0 border-0 border-body" id="dropdown-menu"
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>SSC
                                        </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>Exam detail</a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>Railway
                                            </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>Bank
                                            </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>Delhi Police
                                        </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>Navy
                                        </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>CUET
                                        </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>DSSSB
                                        </a></li>
                                </ul>

                            </li>

                            <li class="nav-item dropdown" id="dropdown">
                                <a class="nav-link dropdown-toggle px-3 fw-bold" id="link-home" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Computer Courses
                                </a>

                                <ul class="dropdown-menu p-0  border-body" id="dropdown-menu"
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>FCIT
                                        </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>IT-EXPERT
                                            </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>WEB DESIGNER
                                            </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>GRAPHIC DESIGNER
                                            </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>TALLY PRIME
                                        </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>ANIMATION
                                        </a></li>
                                    <li><a class="dropdown-item px-4 py-2" href="#" id="btnouter"> <span
                                                id="btn-animate"></span>DATA ANALYSTS
                                        </a></li>
                                </ul>
                            </li>

                            <li><a class="nav-link border-2 border-end fw-bold px-3" id="link-home" href="login.php">Login/SignUp</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link px-3 fw-bold" id="link-home" href="ExamDetail.php"
                                    role="button" aria-expanded="false">
                                    Enroll Now
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger rounded-pill text-light px-3 fw-bold text-center"
                                    id="link-home" href="contact.php" style="max-width: 8rem;">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>


</body>

</html>