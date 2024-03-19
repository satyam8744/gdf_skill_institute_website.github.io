<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>online Gdf-Academy</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* for mobile exam section */

    @media (width>576px) {
        #firstExam-Section {
            display: block;
        }
    }

    @media (width<576px) {
        #firstExam-Section {
            display: none;
        }
    }

    #accordionExample {
        display: none;
    }

    @media (width<576px) {

        #accordionExample {
            display: block;
        }
    }


    /* for customizing  accordian button*/

    .accordion-button:not(.collapsed) {
        box-shadow: none;
    }


    .accordion-item:first-of-type .accordion-button {
        box-shadow:  none;
    }

    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus' viewBox='0 0 16 16'%3E%3Cpath d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/%3E%3C/svg%3E");
        transition: all 0.5s;
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-dash' viewBox='0 0 16 16'%3E%3Cpath d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'/%3E%3C/svg%3E");
    }
</style>
<body>
    <?php include "header.php" ?>   

    <!-- ====================================== for carousel =================================== -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel"
        data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item carousel-image bg-img-1 active">
            </div>

            <div class="carousel-item carousel-image bg-img-2">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="carousel-item carousel-image bg-img-3">
                <div class="carousel-caption">
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

     <!-- for exam section content tab layout -->
     <div class="container-fluid" id="firstExam-Section">
        <div class="container d-flex justify-content-center py-0">
            <ul class="row nav justify-content-between nav-pills px-0 py-0" id="pills-tab ul-bank" role="tablist">

                <li class="nav-item col p-0 p-0" role="presentation" id="bankFocus">
                    <button id="innerBtn" class="border-0" style="background-color: transparent;" id="pills-bank-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab"
                        aria-controls="pills-bank" aria-selected="true" fdprocessedid="rrisdr">

                        <div class="" id="bank">
                            <img class="img-fluid" src="images/bank.png" alt="">
                            <span class="px-3 my-auto">Bank</span>
                        </div>
                    </button>
                </li>

                <li class="nav-item col p-0" role="presentation" id="bankFocus">
                    <button id="innerBtn" class="border-0" style="background-color: transparent;" id="pills-bank-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab"
                        aria-controls="pills-bank" aria-selected="true" fdprocessedid="rrisdr">

                        <div class="" id="bank">
                            <img class="img-fluid" src="images/ssc.png" alt="">
                            <span class="px-3 my-auto">SSC</span>
                        </div>
                    </button>
                </li>

                <li class="nav-item col p-0" role="presentation" id="bankFocus">
                    <button id="innerBtn" class="border-0" style="background-color: transparent;" id="pills-bank-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab"
                        aria-controls="pills-bank" aria-selected="true" fdprocessedid="rrisdr">

                        <div class="" id="bank">
                            <img src="images/railway.png" alt="">
                            <span class="px-3 my-auto">Railways</span>
                        </div>
                    </button>
                </li>

                <li class="nav-item col p-0" role="presentation" id="bankFocus">
                    <button id="innerBtn" class="border-0" style="background-color: transparent;" id="pills-bank-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab"
                        aria-controls="pills-bank" aria-selected="true" fdprocessedid="rrisdr">

                        <div class="" id="bank">
                            <img class="img-fluid" src="images/police.png" alt="">
                            <span class="px-3 my-auto">Police</span>
                        </div>
                    </button>
                </li>

                <li class="nav-item col p-0" role="presentation" id="bankFocus">
                    <button id="innerBtn" class="border-0" style="background-color: transparent;" id="pills-bank-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab"
                        aria-controls="pills-bank" aria-selected="true" fdprocessedid="rrisdr">

                        <div class="" id="bank">
                            <img class="img-fluid" src="images/teaching.png" alt="">
                            <span class="px-3 my-auto">Teaching</span>
                        </div>
                    </button>
                </li>

                <li class="nav-item col p-0" role="presentation" id="bankFocus">
                    <button id="innerBtn" class="border-0" style="background-color: transparent;" id="pills-bank-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab"
                        aria-controls="pills-bank" aria-selected="true" fdprocessedid="rrisdr">

                        <div class="d-flex" id="bank">
                            <img class="img-fluid d-block" src="images/state.png" alt="">
                            <span class="px-3 my-auto">State </span>
                        </div>
                    </button>
                </li>
            </ul>
        </div>

        <div class="tab-content px-4 py-0 mb-3" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-bank" role="tabpanel" aria-labelledby="pills-bank-tab">
                <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                    is often financial institutions because this is a sector with a consistently rising
                    growth graph. The banking industry is for you if you believe you have the potential to
                    be trustworthy and you have developed a feeling of responsibility attesting to
                    tremendous heights. And you ought to consider working with GDF Academy if you want to
                    pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                <ul>
                    <li>Video Courses</li>
                    <li>Live Classes</li>
                    <li>Branch Admission</li>
                    <li>Online Test Series</li>
                    <li>E-Books</li>
                    <li>Publication</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-scc" role="tabpanel" aria-labelledby="pills-scc-tab">
                <p>For various kinds of exams, including CGL, CHSL, stenographer, CPO, GD Constable, and
                    multi-tasking, GDF Academy offers SSC classes to students. At GDF Academy, we are firm
                    believers that preparing for an exam is important</p>
                <ul>
                    <li>Video Courses</li>
                    <li>Live Classes</li>
                    <li>Branch Admission</li>
                    <li>Online Test Series</li>
                    <li>E-Books</li>
                    <li>Publication</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-railways" role="tabpanel" aria-labelledby="pills-railways-tab">
                <p>
                    For exams like RRB ALP and Technician, NTPC, Group D, Ministerial and Isolated
                    Categories, RRB JE, etc., GDF Academy provides railway classes to students. We at GDF
                    Academy believe that training will actually make a difference.
                </p>
                <ul>
                    <li>Video Courses</li>
                    <li>Live Classes</li>
                    <li>Branch Admission</li>
                    <li>Online Test Series</li>
                    <li>E-Books</li>
                    <li>Publication</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-police" role="tabpanel" aria-labelledby="pills-police-tab">
                <p>
                    The Staff Selection Commision, competitive computer-based examinations for the
                    recruitment of sub-inspectors in the Delhi Police, Central Armed Police Forces (CAPFs),
                    assistant sub-inspectors in the CISF, etc., are all provided by the GDF Academy.
                </p>
                <ul>
                    <li>Video Courses</li>
                    <li>Live Classes</li>
                    <li>Branch Admission</li>
                    <li>Online Test Series</li>
                    <li>E-Books</li>
                    <li>Publication</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-teachering" role="tabpanel" aria-labelledby="pills-teachering-tab">
                <p>
                    For candidates seeking employment in the teaching area, GDF Academy offers classes for
                    teacher exams. For applicants looking to work in government schools, it is the most
                    desired job path. These exams are given the designations CTET, TET, DSSSB, etc.
                </p>
                <ul>
                    <li>Video Courses</li>
                    <li>Live Classes</li>
                    <li>Branch Admission</li>
                    <li>Online Test Series</li>
                    <li>E-Books</li>
                    <li>Publication</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-state" role="tabpanel" aria-labelledby="pills-state-tab">
                <p>The GDF Academy holds the opinion that studying for the test can have a huge impact.To
                    help students prepare for numerous exams, including those for the UP Gramme Panchayat
                    Adhikari/VDO, UP Police, Delhi Police, UPSC, Lucknow Metro, Delhi Metro, Delhi
                    Development Authority, Bihar, MP, and Jharkhand, among others, we provide state-level
                    exam classes. </p>
                <ul>
                    <li>Video Courses</li>
                    <li>Live Classes</li>
                    <li>Branch Admission</li>
                    <li>Online Test Series</li>
                    <li>E-Books</li>
                    <li>Publication</li>
                </ul>
            </div>

        </div>

    </div>

    <!-- for mobile version exam section -->
    <div class="container-fluid accordion my-4" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <div class="" id="bank">
                        <img class="img-fluid" src="images/bank.png" alt="">
                        <span class="px-3 my-auto">Bank</span>
                    </div>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                        is often financial institutions because this is a sector with a consistently rising
                        growth graph. The banking industry is for you if you believe you have the potential to
                        be trustworthy and you have developed a feeling of responsibility attesting to
                        tremendous heights. And you ought to consider working with GDF Academy if you want to
                        pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                    <ul>
                        <li>Video Courses</li>
                        <li>Live Classes</li>
                        <li>Branch Admission</li>
                        <li>Online Test Series</li>
                        <li>E-Books</li>
                        <li>Publication</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="" id="bank">
                        <img class="img-fluid" src="images/ssc.png" alt="">
                        <span class="px-3 my-auto">SSC</span>
                    </div>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                        is often financial institutions because this is a sector with a consistently rising
                        growth graph. The banking industry is for you if you believe you have the potential to
                        be trustworthy and you have developed a feeling of responsibility attesting to
                        tremendous heights. And you ought to consider working with GDF Academy if you want to
                        pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                    <ul>
                        <li>Video Courses</li>
                        <li>Live Classes</li>
                        <li>Branch Admission</li>
                        <li>Online Test Series</li>
                        <li>E-Books</li>
                        <li>Publication</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="" id="bank">
                        <img src="images/railway.png" alt="">
                        <span class="px-3 my-auto">Railways</span>
                    </div>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                        is often financial institutions because this is a sector with a consistently rising
                        growth graph. The banking industry is for you if you believe you have the potential to
                        be trustworthy and you have developed a feeling of responsibility attesting to
                        tremendous heights. And you ought to consider working with GDF Academy if you want to
                        pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                    <ul>
                        <li>Video Courses</li>
                        <li>Live Classes</li>
                        <li>Branch Admission</li>
                        <li>Online Test Series</li>
                        <li>E-Books</li>
                        <li>Publication</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <div class="" id="bank">
                        <img class="img-fluid" src="images/police.png" alt="">
                        <span class="px-3 my-auto">Police</span>
                    </div>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                        is often financial institutions because this is a sector with a consistently rising
                        growth graph. The banking industry is for you if you believe you have the potential to
                        be trustworthy and you have developed a feeling of responsibility attesting to
                        tremendous heights. And you ought to consider working with GDF Academy if you want to
                        pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                    <ul>
                        <li>Video Courses</li>
                        <li>Live Classes</li>
                        <li>Branch Admission</li>
                        <li>Online Test Series</li>
                        <li>E-Books</li>
                        <li>Publication</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="" id="bank">
                        <img class="img-fluid" src="images/teaching.png" alt="">
                        <span class="px-3 my-auto">Teaching</span>
                    </div>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                        is often financial institutions because this is a sector with a consistently rising
                        growth graph. The banking industry is for you if you believe you have the potential to
                        be trustworthy and you have developed a feeling of responsibility attesting to
                        tremendous heights. And you ought to consider working with GDF Academy if you want to
                        pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                    <ul>
                        <li>Video Courses</li>
                        <li>Live Classes</li>
                        <li>Branch Admission</li>
                        <li>Online Test Series</li>
                        <li>E-Books</li>
                        <li>Publication</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="d-flex" id="bank">
                        <img class="img-fluid d-block" src="images/state.png" alt="">
                        <span class="px-3 my-auto">State Level</span>
                    </div>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                        is often financial institutions because this is a sector with a consistently rising
                        growth graph. The banking industry is for you if you believe you have the potential to
                        be trustworthy and you have developed a feeling of responsibility attesting to
                        tremendous heights. And you ought to consider working with GDF Academy if you want to
                        pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                    <ul>
                        <li>Video Courses</li>
                        <li>Live Classes</li>
                        <li>Branch Admission</li>
                        <li>Online Test Series</li>
                        <li>E-Books</li>
                        <li>Publication</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    

    <!-- for hover image animation card -->
    <div class="container-fluid" style="background-color: whitesmoke;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <div class="d-flex justify-content-evenly flex-wrap p-0 gy-2">

                        <div class="card col-xl-4  col-md-6 col-sm-6  border-0 rounded-0" style="position: relative;"
                            id="card-bgImage">
                            <img src="images/h1.avif" class="img-fluid" style="height: 100%; width: 100%;" alt="...">
                            <div class="card-body rounded-0 d-flex align-items-end" id="card-overlay">
                                <div class="card-content p-0 m-0" id="card-content">
                                    <div class="inner_contentShow">
                                        ______ __
                                        <h5 class="card-title">CLASSROOM PROGRAM</h5>
                                        <h4>The Room For Your Dreams</h4>
                                        <a class="btn rounded-circle border border-primary fw-0 p-4 fs-6 d-flex justify-content-center align-items-center mb-3"
                                             id="readArrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="showPara">
                                        <p class="card-text">Our classrooms are not just classrooms for teaching, they
                                            are
                                            classrooms for fulfilling big dreams like yours. </p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex id,
                                            necessitatibus
                                            cnulla eveniet earum perferendis laboriosam natus sit
                                            lorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card col-xl-4  col-md-6 col-sm-6  border-0 rounded-0" style="position: relative;"
                            id="card-bgImage">
                            <img src="images/h2.jpg" class="img-fluid" style="height: 100%; width: 100%;" alt="...">
                            <div class="card-body rounded-0 d-flex align-items-end" id="card-overlay">
                                <div class="card-content p-0 m-0" id="card-content">
                                    <div class="inner_contentShow">
                                        ______ __
                                        <h5 class="card-title">CLASSROOM PROGRAM</h5>
                                        <h4>The Room For Your Dreams</h4>
                                        <a class="btn rounded-circle border border-primary fw-0 p-4 fs-6 d-flex justify-content-center align-items-center mb-3"
                                         id="readArrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="showPara">
                                        <p class="card-text">Our classrooms are not just classrooms for teaching, they
                                            are
                                            classrooms for fulfilling big dreams like yours. </p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex id,
                                            necessitatibus
                                            cnulla eveniet earum perferendis laboriosam natus sit
                                            lorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card col-xl-4  col-md-6 col-sm-6  border-0 rounded-0" style="position: relative;"
                            id="card-bgImage">
                            <img src="images/h3.avif" class="img-fluid" style="height: 100%; width: 100%;" alt="...">
                            <div class="card-body rounded-0 d-flex align-items-end" id="card-overlay">
                                <div class="card-content p-0 m-0" id="card-content">
                                    <div class="inner_contentShow">
                                        ______ __
                                        <h5 class="card-title">CLASSROOM PROGRAM</h5>
                                        <h4>The Room For Your Dreams</h4>
                                        <a class="btn rounded-circle border border-primary fw-0 p-4 fs-6 d-flex justify-content-center align-items-center mb-3"
                                             id="readArrow"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="showPara">
                                        <p class="card-text">Our classrooms are not just classrooms for teaching, they
                                            are
                                            classrooms for fulfilling big dreams like yours. </p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex id,
                                            necessitatibus
                                            cnulla eveniet earum perferendis laboriosam natus sit
                                            lorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- for static image number -->
    <div class="counter-wrapper container-fluid">
        <div class="counter">
            <h1 class="count" data-target="36" style="display: inline;">0</h1><span>
                <h1 style="display: inline;">K </h1>
            </span>
            <p>Happy customers every year</p>
        </div>
        <div class="counter">
            <h1 class="count" data-target="1400" style="display: inline;">0</h1>
            <p>PEOPLE IN THE CITY</p>
        </div>
        <div class="counter">
            <h1 class="count" data-target="233" style="display: inline;">0</h1><span>
                <p>SQUARE OF CITY</p>
        </div>
        <div class="counter">
            <h1 class="count" data-target="1735" style="display: inline;">0</h1><span>
                <h1 style="display: inline;"></h1>
            </span>
            <p>SUCCESSFUL PROGRAMS</p>
        </div>
    </div>

     <!-- for second modified exam coverd section -->
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center py-2">
                    <h1 class="">Government Exams Covered Section</h1>
                    <ul class="nav nav-pills justify-content-evenly mt-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Upcoming</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">State Level</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Banking</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">SSC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Railways</button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- for government exam logos -->
            <div class="container-fluid mt-3">
                <div class="row tab-content mt-3" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">

                        <div class="container my-5">
                            <div
                                class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center align-items-center justify-content-between">

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/1.png"
                                                class="bg-light rounded-circle p-1 shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center">CUET</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">IBSP
                                            PO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">IBSP
                                            CLERK</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">IBSP
                                            RRB</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">IBSP
                                            SO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SBI
                                            CLERK</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">SBI
                                            PO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SBI
                                            Apprentice</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">SSC
                                            GD
                                            Constable</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SSC
                                            CGL</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">SSC
                                            CPO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SSC
                                            CHSL</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/a5.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">UPSSSC
                                            PET</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/6.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">RRB
                                            NTPC</span>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="container my-5">
                            <div
                                class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center align-items-center justify-content-between">

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/1.png"
                                                class="bg-light rounded-circle p-1 shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center">CUET</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">IBSP
                                            PO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">IBSP
                                            SO</span>
                                    </a>
                                </div>


                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SBI
                                            CLERK</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">SBI
                                            PO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SBI
                                            Apprentice</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SSC
                                            CGL</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">SSC
                                            CPO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/a5.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">UPSSSC
                                            PET</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/6.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">RRB
                                            NTPC</span>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                        <div class="container my-5">
                            <div
                                class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 d-flex justify-content-center align-items-center justify-content-between">

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/1.png"
                                                class="bg-light rounded-circle p-1 shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center">CUET</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">IBSP
                                            PO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/2.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">IBSP
                                            SO</span>
                                    </a>
                                </div>


                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SBI
                                            CLERK</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">SBI
                                            PO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/3.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SBI
                                            Apprentice</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">SSC
                                            CGL</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/4.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div> <span
                                            class="fs-6 p-1 fw-bold text-light bg-primary w-100 rounded-pill text-center ">SSC
                                            CPO</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/a5.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">UPSSSC
                                            PET</span>
                                    </a>
                                </div>

                                <div class="col bg-succes mb-5 rounded">
                                    <a href="#"
                                        class="text-decoration-none d-flex justify-content-center align-items-center justify-content-between">
                                        <div class="">
                                            <img src="images/6.png"
                                                class="bg-light rounded-circle p-1  shadow border-dark" alt="bank">
                                        </div>
                                        <span
                                            class="fs-6 p-2 fw-bold text-light bg-primary w-100 rounded-pill text-center py-1">RRB
                                            NTPC</span>
                                    </a>
                                </div>


                            </div>
                        </div </div>

                    </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>

    <!-- for testimonial section -->
    <div class="container-fluid px-2 py-4 my-4 bg-success">
        <div class="row col-xl py-2 owl-carousel owl-theme" id="second-testimonialSection">

            <div class="card col-md-12 py-0 px-3 border-0 bg-success mx-0 px-0 text-light">
                <div class="col-xl d-flex align-items-center">
                    <img src="images/h2.jpg" class="card-img-top img-fluid rounded-circle ms-3" alt="..."
                        style="height: 6.5rem; width: 6.5rem;">
                    <b class="card-title ms-4 mt-3">Sumit Verma</br>
                        <p class="fs-6 mt-">Students</p>
                    </b>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify fs-6 lh-lg">"Interested persons wishing to express their views on
                        such Projects and the proposed amendment of the 2010 Bonds that financed or refinanced the costs
                        of such Refinanced Project."</p>
                </div>
            </div>

            <div class="card col-md-12 py-0 px-3 border-0 bg-success mx-0 px-0 text-light">
                <div class="col-xl d-flex align-items-center">
                    <img src="images/h1.avif" class="card-img-top img-fluid rounded-circle ms-3" alt="..."
                        style="height: 6.5rem; width: 6.5rem;">
                    <b class="card-title ms-4 mt-3">Sumit Verma</br>
                        <p class="fs-6 mt-">Students</p>
                    </b>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify fs-6 lh-lg">"Interested persons wishing to express their views on
                        such Projects and the proposed amendment of the 2010 Bonds that financed or refinanced the costs
                        of such Refinanced Project."</p>
                </div>
            </div>

            <div class="card col-md-12 py-0 px-3 border-0 bg-success mx-0 px-0 text-light">
                <div class="col-xl d-flex align-items-center">
                    <img src="images/h3.avif" class="card-img-top img-fluid rounded-circle ms-3" alt="..."
                        style="height: 6.5rem; width: 6.5rem;">
                    <b class="card-title ms-4 mt-3">Sumit Verma</br>
                        <p class="fs-6 mt-">Students</p>
                    </b>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify fs-6 lh-lg">"Interested persons wishing to express their views on
                        such Projects and the proposed amendment of the 2010 Bonds that financed or refinanced the costs
                        of such Refinanced Project."</p>
                </div>
            </div>

            <div class="card col-md-12 py-0 px-3 border-0 bg-success mx-0 px-0 text-light">
                <div class="col-xl d-flex align-items-center">
                    <img src="images/h1.avif" class="card-img-top img-fluid rounded-circle ms-3" alt="..."
                        style="height: 6.5rem; width: 6.5rem;">
                    <b class="card-title ms-4 mt-3">Sumit Verma</br>
                        <p class="fs-6 mt-">Students</p>
                    </b>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify fs-6 lh-lg">"Interested persons wishing to express their views on
                        such Projects and the proposed amendment of the 2010 Bonds that financed or refinanced the costs
                        of such Refinanced Project."</p>
                </div>
            </div>

            <div class="card col-md-12 py-0 px-3 border-0 bg-success mx-0 px-0 text-light">
                <div class="col-xl d-flex align-items-center">
                    <img src="images/h2.jpg" class="card-img-top img-fluid rounded-circle ms-3" alt="..."
                        style="height: 6.5rem; width: 6.5rem;">
                    <b class="card-title ms-4 mt-3">Sumit Verma</br>
                        <p class="fs-6 mt-">Students</p>
                    </b>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify fs-6 lh-lg">"Interested persons wishing to express their views on
                        such Projects and the proposed amendment of the 2010 Bonds that financed or refinanced the costs
                        of such Refinanced Project."</p>
                </div>
            </div>

            <div class="card col-md-12 py-0 px-3 border-0 bg-success mx-0 px-0 text-light">
                <div class="col-xl d-flex align-items-center">
                    <img src="images/h3.avif" class="card-img-top img-fluid rounded-circle ms-3" alt="..."
                        style="height: 6.5rem; width: 6.5rem;">
                    <b class="card-title ms-4 mt-3">Sumit Verma</br>
                        <p class="fs-6 mt-">Students</p>
                    </b>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify fs-6 lh-lg">"Interested persons wishing to express their views on
                        such Projects and the proposed amendment of the 2010 Bonds that financed or refinanced the costs
                        of such Refinanced Project."</p>
                </div>
            </div>

        </div>
    </div>

    <!-- for upcoming Exams container -->
    <div class="container-fluid my-4 pt-0 bg-light">
        <div class="row d-flex flex-column">
            <div class="col-xl">
                <b class="fs-3 fw-5 text-capitalize"
                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Upcoming
                    Exams <br>
                    <span class="py-0 text-danger">______ __</span>
                </b>
            </div>
            <div class="row col-md d-flex justify-content-start align-items-center ps-3">
                <a class="col-xl-2 col-sm-4 col fs-5 fw-bold text-decoration-none" href="#"
                    style="font-family: monospace">All</a>
                <a class="col-xl-2 col-sm-4 col fs-5 fw-bold text-decoration-none"
                    style="font-family: monospace">Railway
                </a>
                <a class="col-xl-2 col-sm-4 col fst-italic fs-5 fw-bold text-decoration-none"
                    style="font-family: monospace">SSC</a>
                <a class="col-xl-2 col-sm-4 col fst-italic fs-5 fw-bold text-decoration-none"
                    style="font-family: monospace">Banking</a>
                <a class="col-xl-2 col-sm-4 col fst-italic fs-5 fw-bold text-decoration-none"
                    style="font-family: monospace">UPSC</a>
                <a class="col-xl-2 col-sm-4 col fst-italic fs-5 fw-bold text-decoration-none"
                    style="font-family: monospace">RRB</a>
            </div>

        </div>

        <div class="container-fluid px-0 py-0 mb-0">
            <div class="row col-xl py-0 px-0 owl-carousel owl-theme upcoming-exam pt-5">
                <div class="card col-md-12 p-0 m-0 d-flex border-0  text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-12 p-0 m-0 d-flex border-0 bg-success text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-12 p-0 m-0 d-flex border-0 bg-success text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-12 p-0 m-0 d-flex border-0 bg-success text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-12 p-0 m-0 d-flex border-0 bg-success text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-12 p-0 m-0 d-flex border-0 bg-success text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-12 p-0 m-0 d-flex border-0 bg-success text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-12 p-0 m-0 d-flex border-0 bg-success text-dark" id="card-body2">
                    <img src="images/h2.jpg" class="card-img-top" alt="..."
                        style="height: 25rem; width: auto;">
                    <div class="col-xl d-flex align-items-start flex-column justify-content-between" id="card-overlay2">
                        <a href="#" class="btn btn-success px-4 py-0 ms-5 mt-4 rounded-pill text-start"
                            style="z-index: 1;">Enroll</a>
                        <div class="col-xl-12  px-5 py-0 align-self-end flex" id="inner-contentOverlay">
                            <p>October 13, 2023</p>
                            <b class="fs-3 fw-0 p-0 m-0">SSC exam Preparations for Students</b>
                            <p>At uttam nagar Center, Pankha Road</p>

                            <a id="inner-anchor" type="button" href="#" class="text-decoration-none d-flex justify-content-start align-items-center text-success mt-5 
                             pb-5">Read More<i id="icon-arrow" class="fa-solid fa-arrow-right-long fs-5 ms-2 mt-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

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

<!-- for owl carousel js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- for owl carousel second testimonial js script  -->
<script>
    $('#second-testimonialSection').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 7000,
        nav: false,
        dots: true,
        slideBY: 1,
        dotsEach: 1,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1400: {
                items: 4
            },
        }
    });
</script>

<!-- for owl carousel upcoming exam section script  -->
<script>
    $('.upcoming-exam').owlCarousel({
        loop: true,
        margin: 13,
        autoplay: true,
        autoplayTimeout: 2000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1400: {
                items: 4
            },
        }
    });


</script>


<!-- for count animation js -->
<script>
    const counts = document.querySelectorAll('.count')
    const speed = 15

    counts.forEach((counter) => {
        function upDate() {
            const target = Number(counter.getAttribute('data-target'))
            const count = Number(counter.innerText)
            const inc = target / speed
            if (count < target) {
                counter.innerText = Math.floor(inc + count)
                setTimeout(upDate, 20)
            } else {
                counter.innerText = target
            }
        }
        upDate()
    })
</script>