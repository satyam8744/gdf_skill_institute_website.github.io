<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Page Section</title>
    <!-- for custom css link -->
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
    :root {
        --DarkBlue: rgb(5, 5, 103);
        --grayText: gray;
    }


    /* ============================================= for navbar hover effect elements ================================ */

/* for nav-links outer container make responive  */

@media (width > 991px) {
    #link-home:hover {
        transform: translateY(-.5vh);
        transition: all .2s ease-in-out;
        color: orange;
    }

    #dropdown:hover #dropdown-menu {
        display: block;
        transition: all .3s ease-in-out;
    }
}

@media (width < 576px) {
    .navbar #search-container {
        display: none;
    }
}

#gdf-logo{
        width: 7rem;
    }

.navbar-collapse {
    flex-grow: 0;
}

/* for awesome dropdown-menu open and animation menu option */
#btnouter {
    background-color: transparent;
    height: 60%;
    width: 100%;
    border: 1px solid wheat;
    color: black;
    outline: none;
    position: relative;
    cursor: pointer;
    transition: transform 0.1s linear;
    overflow: hidden;
}

#btn-animate {
    background-color: rgb(189, 149, 74);
    top: 0;
    height: 0;
    bottom: 0;
    width: 100%;
    position: absolute;
    left: 0;
    z-index: -1;
    transition: all 0.2s ease-in;
}

#btnouter:hover #btn-animate {
    height: 100%;
    color: black;
}

    /* for customizing the left and right button in owl carousel upcoming exam section */
    .owl-caorusel .owl-nav {
        background-color: transparent !important;
    }

    .owl-nav .owl-prev span,
    .owl-nav .owl-next span {
        font-size: 2.5rem !important;
        position: absolute !important;
        right: -0rem !important;
    }

    .owl-nav .owl-prev span:hover,
    .owl-nav .owl-next span:hover {
        color: green;
    }

    .owl-nav {
        width: 100% !important;
        background-color: transparent !important;
    }

    .owl-nav .owl-prev span {
        top: -1rem !important;
    }

    .owl-nav .owl-next span {
        top: -1rem !important;
    }

    #container { 
        bottom: 1.5rem; 
        left:0; 
        position: fixed; 
        right: 1rem; 
    }
    
    .chat {
        float: right; 
        position: relative;
        margin: 0 5px; 
    }

    /* for link section */

    @media (width<576px) {
        #link-goSection{
            font-size: small;
        }
    }
    @media (width>576px) {
        #link-goSection{
            font-size: small;
        }
    }

    #linkSectionTag:hover{
        background-color: blue;
        border-bottom: 2px solid black;
        transition: all .1s ease;
        overflow: hidden;
    }

</style>

<body id="main-div">    
    
    <?php include "header.php" ?>
    <!-- overlay section -->
    <div class="container-fluid p-0 m-0"
        style="background-image: url(images/exam3.jpg); background-size: cover; background-repeat: no-repeat;">

        <div class="row p-0 m-0" style="background-color: rgba(11, 11, 12, 0.4);">

            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center align-items-center">
                <div class="col-xl-9 col-lg-10 col-md-9 col-sm-11 col-12 text-light">
                    <b class="fs-3">SBI PO 2023 Exam date, Results, Cut-Off(Latest)</b>

                    <p class="mt-4 text-justify">SBI PO 2023 Exam is an excellent chance for turning your dreams into
                        reality! Get detailed
                        information
                        about SBI PO Exam Date 2023, Salary, Syllabus, Preparation Guide, Admit Card, Latest Exam
                        Pattern
                        and
                        Exam Results. Boost your preparation journey with the Online Test Series now!
                    </p>
                    <a href="" class="btn border border-light mt-5 mb-4 text-light"><i
                            class="fa-regular fa-bookmark me-2"></i>Save</a>
                </div>

            </div>

            <div
                class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center align-items-center py-2">
                <div class="col-xl-7 col-lg-10 col-md-9 col-sm-11 col-12 p-1" style="border-radius: 10px;">
                    <div class="d-flex justify-content-center align-items-center bg-light p-1">
                        <b class="fw-normal  text-secondary fs-5">START YOUR LEARNING</b>
                    </div>
                    <form class="d-flex justify-content-center flex-column p-4" style="background-color: #fff;">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Mobile Number" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <select id="disabledSelect" class="form-select">
                                <option>Mode Of learning</option>
                                <option>Online</option>
                                <option>Offline</option>
                                <option>Online + Offline</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select id="disabledSelect" class="form-select">
                                <option>Select Course</option>
                                <option>Bank</option>
                                <option>SSC</option>
                                <option>Railways</option>
                                <option>CTET</option>
                                <option>CUET</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary text-center w-100 align-self-center fs-6">ENROLL
                            FOR DEMO
                            COURSE</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- for different section link -->
    <!-- Latest Publications Section  -->
    <div class="container bg-light p-0">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-12 pt-5 owl-carousel owl-theme"  id="link-goSection">

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#introduction" class="text-decoration-none text-center text-secondary">Introduction</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#ExamPattern" class="text-decoration-none text-center text-secondary">Exam Pattern</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#HowApply" class="text-decoration-none text-center text-secondary">How To Apply</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#syllabus" class="text-decoration-none text-center text-secondary">Syllabus</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#cutOff" class="text-decoration-none text-center text-secondary">Cut Off</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#vacancies" class="text-decoration-none text-center text-secondary">Vacancies</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#salary" class="text-decoration-none text-center text-secondary">Salary</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#EligibilityCriteria" class="text-decoration-none text-center text-secondary">Eligibility Criteria</a>
                </div>

                <div class="col-md-12 bg-light text-light p-2 d-flex justify-content-center align-items-center" id="linkSectionTag">
                    <a href="#admitCard" class="text-decoration-none text-center text-secondary">Admit Card</a>
                </div>
            </div>
        </div>
    </div>

    <!-- for content of information -->
    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">

                <!-- for left side of exam section -->
                <div class="col-lg-8 ">
                    <!-- for introduction section -->
                    <div id="introduction">
                        <h1 class="text-secondary">IBPS PO Recruitment 2023</h1>
                        <b class="fs-3 text-secondary mb-3">Introduction</b><br>
                        <b class="fs-4 fw-normal text-secondary my-5">IBPS PO 2023: Check Notification, Eligibility,
                            Exam
                            Pattern, Syllabus, How to Apply</b>

                        <div>
                            <p class="card-text my-3">The Institute of banking personnel selection (IBPS) is an
                                autonomous
                                body set up for conducting
                                assessment & selection of personnel for all public sector banks. IBPS has recently
                                released
                                its
                                official notification for IBPS bank PO exam 2022 for vacancies of the session 2022-23.
                                Every
                                year lakhs of candidates appear for various banking exams and IBPS PO is one of those
                                exams.
                                <br>
                                The online examination (Preliminary and Main) for the next Common Recruitment Process
                                for
                                selection of personnel for Probationary Officer/ Management Trainee posts in the
                                Participating
                                Banks is tentatively scheduled in October 2022 / November 2022.
                            </p>

                            <p>Participating Organisations:</p>
                            <li>Bank of Baroda</li>
                            <li>Canara Bank</li>
                            <li>Indian Overseas Bank</li>
                            <li>UCO Bank</li>
                            <li>Bank of India</li>
                            <li>Central Bank of India</li>
                            <li>Punjab National Bank</li>
                            <li>Union Bank of India</li>
                            <li>Bank of Maharashtra</li>
                            <li>Indian Bank</li>
                            <li>Punjab & Sind Bank</li>
                        </div>

                        <!-- for IBPS PO Exam Details -->
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table table-striped table-hover text-secondary">
                                <b class="fs-3 fw-normal my-2">IBPS PO Exam Details</b>
                                <tbody>
                                    <tr>
                                        <td>Exam Name</td>
                                        <td>IBPS PO 2023</td>

                                    </tr>
                                    <tr>
                                        <td>ConductingBody</td>
                                        <td>Institute of banking personnel selection</td>

                                    </tr>
                                    <tr>
                                        <td>Exam Level</td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>Exam Mode</td>
                                        <td>Online</td>
                                    </tr>
                                    <tr>
                                        <td>Exam Mode</td>
                                        <td>Online</td>
                                    </tr>
                                    <tr>
                                        <td>Language</td>
                                        <td>Language</td>
                                    </tr>
                                    <tr>
                                        <td>SelectionProcess</td>
                                        <td>Prelims,Mains & Interview</td>
                                    </tr>
                                    <tr>
                                        <td>Time Duration</td>
                                        <td>Prelims: 60 minutes
                                            Mains: 3hours 30 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Official Website</td>
                                        <td>https://www.gdfAcademy.in/</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- for IBPS PO Important Dates 2023 -->
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table table-hover text-secondary">
                                <b class="fs-3 fw-normal mt-3">IBPS PO Important Dates 2023</b>
                                <p class="mt-3 text-secondary">The important dates of IBPS PO 2023-24 exam are mentioned
                                    below:
                                </p>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>IBPS PO Notification 2023</td>
                                        <td>31st July 2023</td>
                                    </tr>
                                    <tr>
                                        <td>ConductingBody</td>
                                        <td>Institute of banking personnel selection</td>

                                    </tr>
                                    <tr>
                                        <td>Exam Level</td>
                                        <td>National</td>
                                    </tr>
                                    <tr>
                                        <td>Exam Mode</td>
                                        <td>Online</td>
                                    </tr>
                                    <tr>
                                        <td>Exam Mode</td>
                                        <td>Online</td>
                                    </tr>
                                    <tr>
                                        <td>Language</td>
                                        <td>Language</td>
                                    </tr>
                                    <tr>
                                        <td>SelectionProcess</td>
                                        <td>Prelims,Mains & Interview</td>
                                    </tr>
                                    <tr>
                                        <td>Time Duration</td>
                                        <td>Prelims: 60 minutes
                                            Mains: 3hours 30 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Official Website</td>
                                        <td>https://www.gdfAcademy.in/</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- for registration section -->
                        <div style="list-style-type: circle;">
                            <div class="text-center">
                                <a href="#" class="text-danger fs-5 my-2">
                                    Click Here to Check IBPS PO Notification 2022-23</a><br>
                            </div>

                            <b class="fs-3 fw-normal">IBPS PO 2023 Registration Process</b>
                            <p>Follow the below steps to start the registration process of IBPS PO 2022:</p>
                            <li><b>Step 1 :</b> <span>Click on https://ibps.in/</span></li>
                            <li><b>Step 2 :</b> <span>Then click on "Click Here for New Registration"</span></li>
                            <li><b>Step 3 :</b> <span>Enter the Email ID and Other required credentials.</span></li>
                            <li><b>Step 4 :</b> <span>Registration number & password will be sent to your registered
                                    Email
                                    ID and Mobile number.</span></li>
                            <li><b>Step 5 :</b> <span> After filling the application form, now you have to upload your
                                    documents.</span></li>
                            <li><b>Step 6 :</b> <span>After uploading documents, click on the "Submit" button for
                                    completing
                                    the registration process.</span></li>
                            <li><b>Step 7 :</b> <span> Now make the payment on your preferred mode.</span></li>
                            <li><b>Step 8 :</b> <span>After the payment has been made, you need to take the printout of
                                    the
                                    application form for future reference.</span></li>
                        </div>

                        <!-- for document required section -->
                        <div class="my-3" style="list-style-type: circle">
                            <b class="fs-3 fw-normal">Documents Required for IBPS PO Exam</b>
                            <p>It is mandatory to carry the admit card at the time of examination. Without admit card,
                                candidates will not be allowed to attend the exam. Along with admit card, candidates
                                must
                                carry original ID proof such as:</p>

                            <li>Driving Licence</li>
                            <li>Aadhar card</li>
                            <li>Bank Passbook</li>
                            <li>Voter ID</li>
                            <li>PAN Card</li>
                            <li>Ration Card</li>
                        </div>

                        <!-- for Admit card section -->
                        <div>
                            <b class="fs-3 fw-normal">IBPS PO Admit Card 2023</b>
                            <p class="mt-3">The IBPS PO admit card for the Preliminary examination will be released by
                                the
                                board in October 2023 on the official website of IBPS. IBPS is going to conduct IBPS PO
                                2022
                                Preliminary examination on October 2022.</p>
                        </div>


                        <!-- for exam center  -->
                        <div>
                            <b class="fs-3 fw-normal">IBPS PO Exam Centres 2023</b>
                            <p class="mt-3">Following are the list of exam centres with state code for IBPS PO prelims and
                                mains examination.</p>

                            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table mt-3 table-striped " style="font-family: Arial, Helvetica, sans-serif;">
                                    <thead style="background-color: var(--DarkBlue);">
                                        <tr class="text-light">
                                            <th scope="col">State Code</th>
                                            <th scope="col">State /UT/ NCR</th>
                                            <th scope="col">PrelimsExamination Centre</th>
                                            <th scope="col">MainsExamination Centre</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: var(--grayText);">
                                        <tr>
                                            <th scope="row">11</th>
                                            <td>Andaman & Nicobar</td>
                                            <td>Port Blair</td>
                                            <td>Port Blair</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                            <td>Andhra Pradesh</td>
                                            <td>Chirala,Chittoor, Eluru, Guntur, Kadapa, Kakinada, Kurnool, Nellore,
                                                Ongole,Rajahmundry, Srikakulam, Tirupati, Vijaywada, Vishakhapatnam,
                                                Vizianagaram</td>
                                            <td>Guntur,Kurnool, Vijaywada, Vishakhapatnam</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">13</th>
                                            <td>ArunachalPradesh</td>
                                            <td>Naharlagu</td>
                                            <td>Naharlagun</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">14</th>
                                            <td>Assam</td>
                                            <td>Dibrugarh,Guwahati, Jorhat, Silchar, Tezpur</td>
                                            <td>Guwahati,Silchar</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">15</th>
                                            <td>Andaman & Nicobar</td>
                                            <td>Port Blair</td>
                                            <td>Port Blair</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">16</th>
                                            <td>Andhra Pradesh</td>
                                            <td>Chirala,Chittoor, Eluru, Guntur, Kadapa, Kakinada, Kurnool, Nellore,
                                                Ongole,Rajahmundry, Srikakulam, Tirupati, Vijaywada, Vishakhapatnam,
                                                Vizianagaram</td>
                                            <td>Guntur,Kurnool, Vijaywada, Vishakhapatnam</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">17</th>
                                            <td>ArunachalPradesh</td>
                                            <td>Naharlagu</td>
                                            <td>Naharlagun</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">18</th>
                                            <td>Assam</td>
                                            <td>Dibrugarh,Guwahati, Jorhat, Silchar, Tezpur</td>
                                            <td>Guwahati,Silchar</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">19</th>
                                            <td>Andaman & Nicobar</td>
                                            <td>Port Blair</td>
                                            <td>Port Blair</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">20</th>
                                            <td>Andhra Pradesh</td>
                                            <td>Chirala,Chittoor, Eluru, Guntur, Kadapa, Kakinada, Kurnool, Nellore,
                                                Ongole,Rajahmundry, Srikakulam, Tirupati, Vijaywada, Vishakhapatnam,
                                                Vizianagaram</td>
                                            <td>Guntur,Kurnool, Vijaywada, Vishakhapatnam</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">21</th>
                                            <td>ArunachalPradesh</td>
                                            <td>Naharlagu</td>
                                            <td>Naharlagun</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">22</th>
                                            <td>Assam</td>
                                            <td>Dibrugarh,Guwahati, Jorhat, Silchar, Tezpur</td>
                                            <td>Guwahati,Silchar</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">23</th>
                                            <td>Andaman & Nicobar</td>
                                            <td>Port Blair</td>
                                            <td>Port Blair</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">24</th>
                                            <td>Andhra Pradesh</td>
                                            <td>Chirala,Chittoor, Eluru, Guntur, Kadapa, Kakinada, Kurnool, Nellore,
                                                Ongole,Rajahmundry, Srikakulam, Tirupati, Vijaywada, Vishakhapatnam,
                                                Vizianagaram</td>
                                            <td>Guntur,Kurnool, Vijaywada, Vishakhapatnam</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">25</th>
                                            <td>ArunachalPradesh</td>
                                            <td>Naharlagu</td>
                                            <td>Naharlagun</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">26</th>
                                            <td>Assam</td>
                                            <td>Dibrugarh,Guwahati, Jorhat, Silchar, Tezpur</td>
                                            <td>Guwahati,Silchar</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">27</th>
                                            <td>Andaman & Nicobar</td>
                                            <td>Port Blair</td>
                                            <td>Port Blair</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">28</th>
                                            <td>Andhra Pradesh</td>
                                            <td>Chirala,Chittoor, Eluru, Guntur, Kadapa, Kakinada, Kurnool, Nellore,
                                                Ongole,Rajahmundry, Srikakulam, Tirupati, Vijaywada, Vishakhapatnam,
                                                Vizianagaram</td>
                                            <td>Guntur,Kurnool, Vijaywada, Vishakhapatnam</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">29</th>
                                            <td>ArunachalPradesh</td>
                                            <td>Naharlagu</td>
                                            <td>Naharlagun</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">30</th>
                                            <td>Assam</td>
                                            <td>Dibrugarh,Guwahati, Jorhat, Silchar, Tezpur</td>
                                            <td>Guwahati,Silchar</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">31</th>
                                            <td>Andaman & Nicobar</td>
                                            <td>Port Blair</td>
                                            <td>Port Blair</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">32</th>
                                            <td>Andhra Pradesh</td>
                                            <td>Chirala,Chittoor, Eluru, Guntur, Kadapa, Kakinada, Kurnool, Nellore,
                                                Ongole,Rajahmundry, Srikakulam, Tirupati, Vijaywada, Vishakhapatnam,
                                                Vizianagaram</td>
                                            <td>Guntur,Kurnool, Vijaywada, Vishakhapatnam</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">33</th>
                                            <td>ArunachalPradesh</td>
                                            <td>Naharlagu</td>
                                            <td>Naharlagun</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">34</th>
                                            <td>Assam</td>
                                            <td>Dibrugarh,Guwahati, Jorhat, Silchar, Tezpur</td>
                                            <td>Guwahati,Silchar</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>                    

                    <!-- for mains or prelims Exam Pattern -->
                    <div style="font-family: sans-serif;" id="ExamPattern">
                        <b class="fs-3" style="color: var(--grayText);">Exam Pattern</b><br>
                        <b class="fs-3 fw-normal">IBPS PO Exam Pattern 2023</b>

                        <p class="mt-3">1. The Structure or Pattern of the IBPS PO 2023 exam is explained below</p>
                        <b class="fs-4 mb-3" style="color: var(--grayText);">IBPS PO Prelims Exam Pattern 2023</b>
                        <div>
                            <p class="mt-3">Following are the list of exam centres with state code for IBPS PO prelims
                                and
                                mains examination.</p>

                            <!-- for prelims exam pattern table -->
                            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table mt-3 table-striped "
                                    style="font-family: Arial, Helvetica, sans-serif;">
                                    <thead style="background-color: var(--DarkBlue);">
                                        <tr class="text-light">
                                            <th scope="col">Name of Test</th>
                                            <th scope="col">Total no. of Questions</th>
                                            <th scope="col">Total marks</th>
                                            <th scope="col">Time Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: var(--grayText);">
                                        <tr>
                                            <td>English Language</td>
                                            <td>30</td>
                                            <td>30</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Logical Reasoning</td>
                                            <td>35</td>
                                            <td>35</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Quantitative Aptitude</td>
                                            <td>35</td>
                                            <td>35</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>100</td>
                                            <td>100</td>
                                            <td>60</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <p class="fs-6" style="font-family: y;">The IBPS PO English Language section of Prelims Exam
                                consists of 30 questions having a total of 30 marks. In similar way the Logical
                                reasoning section & Quantitative aptitude section consists of 35 questions each having
                                35 sectional marks. Hence a total of 100 questions need to be completed in a composite
                                time of 60 minutes.</p>

                            <!-- for second table -->
                            <b class="fs-3 fw-normal">IBPS PO Mains Pattern 2023
                            </b>
                            <!-- for mains pattern table -->
                            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table mt-3 table-striped "
                                    style="font-family: Arial, Helvetica, sans-serif;">
                                    <thead style="background-color: var(--DarkBlue);">
                                        <tr class="text-light">
                                            <th scope="col">Name of Test</th>
                                            <th scope="col">Total no. of Questions</th>
                                            <th scope="col">Total marks</th>
                                            <th scope="col">Time Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: var(--grayText);">
                                        <tr>
                                            <td>Englishlanguage</td>
                                            <td>35</td>
                                            <td>40</td>
                                            <td>40</td>
                                        </tr>
                                        <tr>
                                            <td>English(Essay & Letter Writing)</td>
                                            <td>2</td>
                                            <td>25</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>General Awareness</td>
                                            <td>40</td>
                                            <td>40</td>
                                            <td>35</td>
                                        </tr>
                                        <tr>
                                            <td>Reasoning & Computer Aptitude</td>
                                            <td>45</td>
                                            <td>60</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>Data Interpretation & Analysis</td>
                                            <td>35</td>
                                            <td>60</td>
                                            <td>45</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>157</td>
                                            <td>225</td>
                                            <td>3 hours 30 minutes</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; list-style-type: circle;">
                                <b>Note:</b>
                                <span>Following documents will be needed for the candidates to appear for the Online
                                    Preliminary as well as Online Main Examination:</span>

                                <li class="mt-2">Valid Call Letter for the Examination</li>
                                <li>Photo-identity proof (as specified) in original</li>
                                <li>Photocopy of photo-identity proof</li>
                                <p class="mt-1">Though the duration of the Online Preliminary Examination is 1 hour,
                                    candidates may be required to be at the venue for about 2 hours or more including
                                    the time required for completion of various formalities.
                                    The Online Mains Examination the duration of the examination is 3 hours 30 minutes,
                                    candidates may be required to be at the venue for about 4 hours or more including
                                    the time required for completion of various formalities.</p>
                            </div>

                            <div style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                <span>2.</span> <b class="text-secondary">Penalty for Wrong Answers (Applicable to both
                                    – Online Preliminary and Online Main examination)</b>
                                <p>A penalty for wrong answers marked in the Objective Tests shall be awarded to
                                    candidates. For each wrong answer has been given by the candidate one fourth or 0.25
                                    of the marks assigned to that question will be deducted as penalty to arrive at
                                    corrected score. If a question is left blank, i.e. no answer is marked by the
                                    candidate, there will be no penalty for that question.</p>
                            </div>

                            <div style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                <span>3.</span> <b class="text-secondary">Interview</b>
                                <p>Shortlisted Candidates in the Online Main examination for for CRP- PO/MT-XII will be
                                    called for an Interview to be conducted by the Participating Organisations and
                                    coordinated by the Nodal Bank in each State/ UT with the help of IBPS. The total
                                    marks for the Interview are 100. The minimum qualifying marks in interview will not
                                    be less than 40% (35% for SC/ST/OBC/PWBD candidates). The weightage (ratio) of
                                    Online Main Exam and interview will be 80:20 respectively. The combined final score
                                    of candidates shall be arrived at on the basis of scores obtained by the candidates
                                    in the Online Main Examination of for CRP- PO/MT-XII and Interview.</p>
                            </div>

                            <div style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                <span>4.</span> <b class="text-secondary">Provisional Allotment</b>
                                <p>After completion of the interview process, depending on the vacancies to be filled in
                                    during the financial year 2022- 23 based on the business needs of the Participating
                                    Organisations and as reported to IBPS, shortlisted candidates will be provisionally
                                    allotted to one of the Participating Organisations, based on merit-cum-preference
                                    keeping in view the spirit of Govt. Guidelines on reservation policy, various
                                    guidelines issued by Govt. of India/Others from time to time, administrative
                                    exigency, etc.</p>
                            </div>

                            <div
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; list-style-type:circle;">
                                <span>5.</span> <b class="text-secondary">Identity Verification</b>
                                <p>Documents to be produced in the examination hall as well as at the time of interview,
                                    the call letter along with a photocopy of the candidate’s photo identity (bearing
                                    exactly the same name as it appears on the call letter) such as PAN Card/ Passport/
                                    Permanent Driving Licence/ Voter’s Card/ Bank Passbook with photograph/ Photo
                                    identity proof issued by a Gazzetted Officer/ People’s Representative along with a
                                    photograph / Identity Card issued by a recognised college/ university/ Aadhar/
                                    E-Aadhar card with a photograph/ Employee ID should be submitted to the invigilator
                                    for verification. The candidate’s identity will be verified with respect to his/her
                                    details on the call letter, in the Attendance List and requisite documents
                                    submitted. If identity of the candidate is in doubt the candidate may not be allowed
                                    to appear for the Examination/ interview.</p>

                                <li class="mt-3">Ration Card and Learner’s Driving License will not be accepted as valid
                                    id proof for
                                    this examination.</li>
                                <li class="text-justify">In case of candidates who have changed their name, they will be
                                    allowed only if they
                                    produce original Gazette notification / their original marriage certificate /
                                    affidavit in original.</li>
                            </div>
                            <!-- for exam logo image-->
                            <div class="my-4">
                                <a href=""><img src="images/boostPrepExam.jpg" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <!-- for How to apply Section -->
                    <div id="HowApply">
                        <b class="text-secondary fs-2 my-5">How To Apply</b> <br>
                        <b class="text-secondary fs-3 fw-normal my-5">How to Apply for IBPS PO 2023</b><br>

                        <b class="mt-5 text-secondary">IBPS PO Apply Online (Pre-Requisites):</b>
                        <p>Before applying online, candidates should—</p>

                        <li>Scan: - photograph (4.5cm × 3.5cm) - signature - left thumb impression.</li>
                        <li>Signature in CAPITAL LETTERS will NOT be accepted for upload.</li>
                        <li>The left thumb impression should be properly scanned.</li>
                        <li>The text for the hand written declaration is as follows – "I, _______ (Name of the
                            candidate), hereby declare that all the information submitted by me in the application form
                            is correct, true and valid. I will present the supporting documents as and when required."
                        </li>
                        <li>The above handwritten declaration must be in the candidate’s handwriting and in English only
                            and should NOT BE IN CAPITAL LETTERS. If it is written by anybody else or in any other
                            language, the application will be deemed as invalid.</li>
                        <li>Keep the necessary details/documents ready to make Online Payment of the requisite
                            application fee/ intimation charges</li>
                        <li>have a valid personal email ID, which should be kept active till the declaration of results
                            of this round of CRP. IBPS may send intimation to download call letters for the Examination
                            etc. through the registered e-mail ID.</li>

                        <p class="mt-4">Application Fees/ Intimation Charges (Applicable GST will be borne by IBPS)
                            Application Fees/
                            Intimation Charges shall be as follows</p>

                        <!-- for application table -->
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table table-striped " style="font-family: Arial, Helvetica, sans-serif;">
                                <thead style="background-color: var(--DarkBlue);">
                                    <tr class="text-light">
                                        <th scope="col">Sr.No.</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody style="color: var(--grayText);">
                                    <tr>
                                        <td>1.</td>
                                        <td>SC/ST/PwD/ExS</td>
                                        <td>175/- (Intimation Charges only)</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>General and OBC</td>
                                        <td>850/- (App. Fee including intimation charges)</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <p class="my-4">Bank Transaction charges for Online Payment of application fees/ intimation
                            charges will have
                            to be borne by the candidate.</p>

                        <!-- for Procedure for IBPS PO apply online -->
                        <div class="" style="list-style-type: circle;">
                            <b class="my-4">Procedure for IBPS PO apply online</b>

                            <li class="mt-4">Candidates need to go to the IBPS’s authorised website www.ibps.in and
                                click on the Home Page to open the link "CRP PO/MT-XII" and then click on the option
                                "CLICK HERE TO APPLY ONLINE FOR CRPPROBATIONARY OFFICERS/ MANAGEMENT TRAINEES
                                (CRP-PO/MT-XII)" to open the On-Line Application Form.</li>

                            <li>Candidates will have to click on "CLICK HERE FOR NEW REGISTRATION" to register their
                                application by entering their basic information in the online application form.</li>
                            <li>Candidates are required to upload their scanned Photograph, Signature, Left thumb
                                impression, & a handwritten declaration.</li>
                            <li>Candidates are advised to carefully fill in the online application themselves as no
                                change in any of the data filled in the online application will be possible/ entertained
                                after clicking on FINAL SUBMIT Button.</li>
                        </div>

                        <!-- mode of payment section -->
                        <div class="text-secondary" ;>
                            <b class="fs-3 text-secondary fw-normal my-5">Mode of Payment</b>
                            <p class="mb-3">Candidates should make the payment of requisite fees/ intimation charges
                                through the ONLINE mode only:</p>

                            <li>Candidates must carefully fill in the details in the Online Application very carefully
                                and click on the "FINAL SUBMIT" button at the end of the Online Application format. Once
                                the application is filled in completely, candidate should submit the data.</li>
                            <li>The application form is integrated with the payment gateway and the payment process can
                                be completed by following the instructions.</li>
                            <li>The payment can be made by using Debit Cards (RuPay/Visa/MasterCard/Maestro), Credit
                                Cards, Internet Banking, IMPS, Cash Cards/ Mobile Wallets by providing information as
                                asked on the screen.</li>
                            <li>After Final Submit, an additional page of the application form is displayed wherein
                                candidates may follow the instructions and fill in the requisite details.</li>
                            <li>If the online transaction has not been successfully completed, then candidates are
                                advised to login again with their provisional registration number and password and pay
                                the Application Fees/ Intimation Charges online.</li>
                            <li>On successful completion of the transaction, an e-receipt will be generated.</li>
                            <li>Candidates are required to take a printout of the e-receipt and online application form
                                containing fee payment details. Please note that if the same cannot be generated then
                                online transaction may not have been successful.</li>

                            <p class="my-4">IBPS PO Application Fees 2023</p>
                            <p class="my-3">For General/OBC/EWs category candidates: Rs.850</p>
                            <p class="my-3">For SC/ST/PWB category candidates: Rs.175</p>

                        </div>


                    </div>

                    <!-- for exam logo image-->
                    <div class="my-4">
                        <a href=""><img src="images/boostPrepExam.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <!-- for Syllabus Section -->
                    <div class="" style="list-style-type: circle;" id="syllabus">
                        <h1 class="text-secondary">Syllabus</h1><br>
                        <b class="text-secondary fs-3 fw-normal">IBPS PO Syllabus 2023</b><br>
                        <b class="text-secondary fs-3  fw-normal my-5">IBPS PO Syllabus (Preliminary Exam)</b><br>
                        <p>The prelims exam constitutes single online exam having 100 marks which is further divided
                            into 3 sections having following subjects:</p>

                        <li class="mt-4">English Language</li>
                        <li>Quantitative Aptitude</li>
                        <li>Reasoning Ability</li>


                        <div class="my-5">
                            <p>The subject wise breakdown of the IBPS PO Prelims syllabus 2023 is mentioned below:</p>

                            <!-- for Syllabus breakdown table -->
                            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table table-striped " style="font-family: Arial, Helvetica, sans-serif;">
                                    <thead style="background-color: var(--DarkBlue);">
                                        <tr class="text-light">
                                            <th scope="col">English language</th>
                                            <th scope="col">Quantitative Aptitude</th>
                                            <th scope="col">Reasoning ability</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: var(--grayText);">
                                        <tr>
                                            <td>Reading Comprehension
                                                Paragraph Jumbles
                                                Idioms & Phrases
                                                Error Detection
                                                Tenses Rules
                                                Cloze Test
                                                Multiple Meanings
                                                Paragraph and passage completion</td>
                                            <td>Simplification and Approximation
                                                Quadratic Equations
                                                Profit and Loss
                                                Mixtures and Alligations
                                                Simple and Compound Interest
                                                Surds and Indices
                                                Work and Time
                                                Speed, Time and Distance
                                                Mensuration: Cylinder, Cone, Sphere and Cuboid
                                                Data Interpretation
                                                Ratio and Proportion
                                                Percentages
                                                Number Series
                                                Boat Stream
                                                Series and Sequences
                                                Permutation and Combination
                                                Measures of Central Tendency and Variation
                                                Probability</td>
                                            <td>Alphanumeric Series
                                                Directions
                                                Reasoning Puzzles
                                                Order and Ranking
                                                Alphabet Combination
                                                Data Sufficiency Tests
                                                Coded Inequalities
                                                Seating Arrangements
                                                Picture Series Puzzles
                                                Tabulation
                                                Syllogism
                                                Relationships
                                                Input/Output
                                                Coding and Decoding
                                                Assertion and Reason
                                                Statement, Argument and Assumption
                                                Word Formation
                                                Logical Reasoning</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- for IBPS PO Mains Syllabus 2023 -->

                            <div>
                                <strong class="fs-3 my-5 text-secondary">IBPS PO Mains Syllabus 2023</strong>
                                <p>The syllabus for IBPS PO Mains is a little bit like the Prelims one, but the standard
                                    of questions is quite complex. A descriptive paper is included in this stage of the
                                    examination.</p>

                                <p class="my-4">The detailed Probationary Officer Mains exam syllabus is mentioned
                                    below:</p>

                                <!-- for Syllabus breakdown table -->
                                <div
                                    class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                    <table class="table table-striped "
                                        style="font-family: Arial, Helvetica, sans-serif;">
                                        <thead style="background-color: var(--DarkBlue);">
                                            <tr class="text-light">
                                                <th scope="col">Reasoning & Computer Aptitude</th>
                                                <th scope="col">General/Economy/Banking Awareness</th>
                                                <th scope="col">English Language</th>
                                                <th scope="col">Data Analysis & Interpretation</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: var(--grayText);">
                                            <tr>
                                                <td>Reasoning:
                                                    Verbal and Non-Verbal Reasoning
                                                    Syllogism
                                                    Seating Arrangements (Circular and Linear)
                                                    Scheduling
                                                    Input/Output
                                                    Blood Relations
                                                    Ordering and Ranking
                                                    Coding and Decoding
                                                    Sufficiency of Arguments and Data
                                                    Directions and Displacement
                                                    Code Inequalities
                                                    Alphanumeric Series
                                                    Computer Aptitude:
                                                    Internet
                                                    Memory
                                                    Keyboard Shortcuts
                                                    Computer Related Terms Abbreviations
                                                    Computer Fundamentals
                                                    Microsoft Office and Related Word Processing and Spreadsheet
                                                    Applications
                                                    Computer Hardware and Software
                                                    Operating Systems and GUI Basics
                                                    Computer Network
                                                    Microsoft Office
                                                    Microsoft Windows</td>
                                                <td>Banking Awareness
                                                    Financial Knowledge
                                                    Basic Economics
                                                    Current Affairs
                                                    Current Events of National and International Importance with focus
                                                    on financial news
                                                    Static GK
                                                    General Knowledge on various topics of importance to financial
                                                    institutions</td>
                                                <td>Reading Comprehension
                                                    Vocabulary
                                                    Grammar
                                                    Usage of English in Business
                                                    Letter Writing
                                                    Essay Writing
                                                    Verbal Ability</td>
                                                <td>Simplification
                                                    Statistics (Averages, Mean, Median etc.)
                                                    Representational Statistics (Graphs and Charts)
                                                    Ratio and Proportion
                                                    Percentages
                                                    Data Interpretation
                                                    Data Sufficiency
                                                    Mensuration
                                                    Geometry
                                                    Linear Equations
                                                    Quadratic Equations
                                                    Simple and Compound Interest
                                                    Speed, Distance and Time
                                                    Profit, Loss and Discounts
                                                    Time and Work Equations
                                                    Permutations and Combinations
                                                    Age Calculation Equations
                                                    Systems of Equation in Two Variables
                                                    Number Systems
                                                    Mixtures and Alligations</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>

                    <!-- for Cut Off section -->
                    <div id="cutOff">
                        <h1 class="text-secondary">Cut Off</h1>
                        <h2 class="text-secondary my-3">IBPS PO Previous Year Cut Off</h2>
                        <p>A minimum score will be required to be obtained by each candidate in each test of Online
                            examination and a minimum total score will be needed to be shortlisted for interview.
                            Depending on the number of vacancies, cut-offs will be decided, and candidates will be
                            shortlisted for the interview process.</p>
                        <p>
                            The scores obtained in IBPS PO score card 2022, by each candidate in different sections will
                            be normalized using the equi-percentile method. For calculation purpose, scores upto 2
                            decimal points shall be taken into consideration.
                        </p>

                        <b class="fs-3 fw-normal">IBPS PO Prelims Cut off 2022</b>

                        <!-- for IBPS PO Prelims Cut off 2022 table -->
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table mt-3 table-striped" style="font-family: Arial, Helvetica, sans-serif;">
                                <thead style="background-color: var(--DarkBlue);">
                                    <tr class="text-light">
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Cut-Off Marks</th>

                                    </tr>
                                </thead>
                                <tbody style="color: var(--grayText);">
                                    <tr>
                                        <td>GEN</td>
                                        <td>49.75</td>
                                    </tr>
                                    <tr>
                                        <td>SC</td>
                                        <td>46.75</td>
                                    </tr>
                                    <tr>
                                        <td>ST</td>
                                        <td>40.75</td>
                                    </tr>
                                    <tr>
                                        <td>OBC</td>
                                        <td>49.75</td>
                                    </tr>
                                    <tr>
                                        <td>EWS</td>
                                        <td>49.75</td>
                                    </tr>
                                    <tr>
                                        <td>HI</td>
                                        <td>17.50</td>
                                    </tr>
                                    <tr>
                                        <td>OC</td>
                                        <td>32.75</td>
                                    </tr>
                                    <tr>
                                        <td>VI</td>
                                        <td>24.75</td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>19.75</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <b class="fs-3 fw-normal my-4">IBPS PO Prelims Cut off 2021</b>
                        <!-- for IBPS PO Prelims Cut off 2021 table -->
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table mt-3 table-striped" style="font-family: Arial, Helvetica, sans-serif;">
                                <thead style="background-color: var(--DarkBlue);">
                                    <tr class="text-light">
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Cut-Off Marks</th>

                                    </tr>
                                </thead>
                                <tbody style="color: var(--grayText);">
                                    <tr>
                                        <td>GEN</td>
                                        <td>49.75</td>
                                    </tr>
                                    <tr>
                                        <td>SC</td>
                                        <td>46.75</td>
                                    </tr>
                                    <tr>
                                        <td>ST</td>
                                        <td>40.75</td>
                                    </tr>
                                    <tr>
                                        <td>OBC</td>
                                        <td>49.75</td>
                                    </tr>
                                    <tr>
                                        <td>EWS</td>
                                        <td>49.75</td>
                                    </tr>
                                    <tr>
                                        <td>HI</td>
                                        <td>17.50</td>
                                    </tr>
                                    <tr>
                                        <td>OC</td>
                                        <td>32.75</td>
                                    </tr>
                                    <tr>
                                        <td>VI</td>
                                        <td>24.75</td>
                                    </tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>19.75</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- for IBPS PO Final Cut-Off 2019-20 -->
                        <b class="fs-3 fw-normal my-5">IBPS PO Final Cut-Off 2019-20</b>
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table mt-3 table-striped" style="font-family: Arial, Helvetica, sans-serif;">
                                <thead style="background-color: var(--DarkBlue);">
                                    <tr class="text-light">
                                        <th scope="col">
                                            Category</th>
                                        <th scope="col">SC</th>
                                        <th scope="col">ST</th>
                                        <th scope="col">OBC</th>
                                        <th scope="col">EWS</th>
                                        <th scope="col">UR</th>
                                        <th scope="col">OC</th>
                                        <th scope="col">VI</th>
                                        <th scope="col">HI</th>
                                        <th scope="col">ID</th>

                                    </tr>
                                </thead>
                                <tbody style="color: var(--grayText);">
                                    <tr>
                                        <td>Maximum Scores</td>
                                        <td>47.07</td>
                                        <td>50.80</td>
                                        <td>50.22</td>
                                        <td>48.98</td>
                                        <td>60.58</td>
                                        <td>46.38</td>
                                        <td>53.16</td>
                                        <td>42.33</td>
                                        <td>42.04</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Scores</td>
                                        <td>36.02</td>
                                        <td>33.24</td>
                                        <td>40.27</td>
                                        <td>40.82</td>
                                        <td>44.44</td>
                                        <td>36.00</td>
                                        <td>42.18</td>
                                        <td>26.36</td>
                                        <td>28.80</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <!-- for How to Check IBPS PO Cut Off 2023? -->
                        <div class="my-4">
                            <b class="text-secondary fs-3 fw-normal my-5">How to Check IBPS PO Cut Off 2023?</b>

                            <p class="my-4">To check and Download the IBPS PO cut off 2023, you need to visit the
                                official IBPS website and follow the steps below:</p>

                            <li>Open the Official website of IBPS www.ibps.in</li>
                            <li>On the home page, click on the cut-off link</li>
                            <li>Enter your registration number & click next</li>
                            <li>IBPS PO cut off 2023 will appear on your PC screen from where you can check the cut off
                                and download the PDF</li>

                            <p class="my-5">The factors that affect the IBPS PO cut off are listed below.</p>

                            <li>Total marks of exam</li>
                            <li>Candidates performance in the exam</li>
                            <li>Number of appearing candidates</li>
                            <li>The difficulty level of the exam</li>
                            <li>Total number of vacancies</li>
                        </div>
                    </div>

                    <!-- for exam logo image-->
                    <div class="my-4">
                        <a href=""><img src="images/boostPrepExam.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <!-- for Vacancies section -->
                    <div class="my-5" id="vacancies">
                        <b class="fs-2 fw-normal text-secondary ">Vacancies</b><br>
                        <b class="fw-normal fs-3 mt-5">IBPS PO Vacancy 2023</b>
                        <p class="my-4">As of now, the total number of vacancies for IBPS PO 2023 exam has not been
                            released, which will be updated along with its notification in August 2023.</p>

                        <p class="my-4">Last year IBPS has declared 6932 vacancies for IBPS PO 2023 Exam in their
                            official notification whose details are tabulated below.</p>

                        <!-- for IBPS PO Vacancy 2023 table -->
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table mt-3" style="font-family: Arial, Helvetica, sans-serif;"
                                cellpadding="3px">
                                <thead style="background-color: var(--DarkBlue);">
                                    <tr class="text-light">
                                        <th scope="col">Banks Name</th>
                                        <th scope="col">SC</th>
                                        <th scope="col">ST</th>
                                        <th scope="col">OBC</th>
                                        <th scope="col">EWS</th>
                                        <th scope="col">UR</th>
                                        <th scope="col">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody style="color: var(--grayText);">
                                    <tr>
                                        <td>Bank of Baroda</td>
                                        <td>36</td>
                                        <td>16</td>
                                        <td>60</td>
                                        <td>22</td>
                                        <td>93</td>
                                        <td>224</td>
                                    </tr>
                                    <tr>
                                        <td>Bank of India</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                    </tr>
                                    <tr>
                                        <td>Bank of Maharashtra</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                    </tr>
                                    <tr>
                                        <td>CanaraBank</td>
                                        <td>75</td>
                                        <td>37</td>
                                        <td>135</td>
                                        <td>50</td>
                                        <td>203</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>Central Bank of India</td>
                                        <td>75</td>
                                        <td>37</td>
                                        <td>135</td>
                                        <td>50</td>
                                        <td>203</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>Indian Bank</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                    </tr>
                                    <tr>
                                        <td>Indian Overseas Bank</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                    </tr>
                                    <tr>
                                        <td>Punjab National Bank</td>
                                        <td>75</td>
                                        <td>37</td>
                                        <td>135</td>
                                        <td>50</td>
                                        <td>203</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>UCO Bank</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                    </tr>
                                    <tr>
                                        <td>Union Bank of India</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                        <td>NR</td>
                                    </tr>
                                    <tr>
                                        <td>TOTAL</td>
                                        <td>75</td>
                                        <td>37</td>
                                        <td>135</td>
                                        <td>50</td>
                                        <td>203</td>
                                        <td>500</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <!-- for IBPS PO Vacancy 2022 -->
                        <div>
                            <b class="fw-normal fs-3 mt-5">IBPS PO Vacancy 2022</b>
                            <p class="my-4">As of now, the total number of vacancies for IBPS PO 2022 exam has not been
                                released, which will be updated along with its notification in August/September 2022.
                            </p>

                            <p class="my-4">Last year IBPS has declared 6932 vacancies for IBPS PO 2022 Exam in their
                                official notification whose details are tabulated below.</p>

                            <!-- for IBPS PO Vacancy 2022 table -->
                            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table mt-3" style="font-family: Arial, Helvetica, sans-serif;"
                                    cellpadding="3px">
                                    <thead style="background-color: var(--DarkBlue);">
                                        <tr class="text-light">
                                            <th scope="col">Banks Name</th>
                                            <th scope="col">SC</th>
                                            <th scope="col">ST</th>
                                            <th scope="col">OBC</th>
                                            <th scope="col">EWS</th>
                                            <th scope="col">UR</th>
                                            <th scope="col">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: var(--grayText);">
                                        <tr>
                                            <td>Bank of Baroda</td>
                                            <td>36</td>
                                            <td>16</td>
                                            <td>60</td>
                                            <td>22</td>
                                            <td>93</td>
                                            <td>224</td>
                                        </tr>
                                        <tr>
                                            <td>Bank of India</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                        </tr>
                                        <tr>
                                            <td>Bank of Maharashtra</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                        </tr>
                                        <tr>
                                            <td>CanaraBank</td>
                                            <td>75</td>
                                            <td>37</td>
                                            <td>135</td>
                                            <td>50</td>
                                            <td>203</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <td>Central Bank of India</td>
                                            <td>75</td>
                                            <td>37</td>
                                            <td>135</td>
                                            <td>50</td>
                                            <td>203</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <td>Indian Bank</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                        </tr>
                                        <tr>
                                            <td>Indian Overseas Bank</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                        </tr>
                                        <tr>
                                            <td>Punjab National Bank</td>
                                            <td>75</td>
                                            <td>37</td>
                                            <td>135</td>
                                            <td>50</td>
                                            <td>203</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <td>UCO Bank</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                        </tr>
                                        <tr>
                                            <td>Union Bank of India</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                            <td>NR</td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL</td>
                                            <td>75</td>
                                            <td>37</td>
                                            <td>135</td>
                                            <td>50</td>
                                            <td>203</td>
                                            <td>500</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- IBPS PO Category wise Vacancy -->
                        <div>
                            <b class="fw-normal fs-3 mt-5 text-secondary">IBPS PO Category wise Vacancy</b>
                            <p class="mt-5">Below table explains the category wise Vacancies for IBPS PO 2023.</p>

                            <!-- for IBPS PO Category wise Vacancy -->
                            <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                <table class="table mt-3 table-striped "
                                    style="font-family: Arial, Helvetica, sans-serif;">
                                    <thead style="background-color: var(--DarkBlue);">
                                        <tr class="text-light">
                                            <th scope="col">Category</th>
                                            <th scope="col">Vacancy</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: var(--grayText);">
                                        <tr>
                                            <td>SC</td>
                                            <td>462</td>
                                        </tr>
                                        <tr>
                                            <td>ST</td>
                                            <td>234</td>
                                        </tr>
                                        <tr>
                                            <td>OBC</td>
                                            <td>829</td>
                                        </tr>
                                        <tr>
                                            <td>EWS</td>
                                            <td>300</td>
                                        </tr>
                                        <tr>
                                            <td>UR</td>
                                            <td>1224</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>3049</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- FOR Salary & Job Profile -->
                    <div class="mt-5" id="salary">
                        <b class="fs-2  text-secondary mb-3">Salary & Job Profile</b><br>
                        <b class="fs-3 fw-normal text-secondary my-4">IBPS PO Recruitment 2023: Salary & Job Profile</b>
                        <b class="fs-4 text-secondary fw-normal my-5">IBPS PO Salary 2023</b>

                        <p class="my-4">In this section you will know about the IBPS PO salary, allowance, promotion
                            policy, career growth, and perks of a Probationary Officer.
                            After the 7th pay commission, the revised IBPS PO salary is decided based on bipartite
                            settlement. IBPS not only gives a better job profile, but also a handsome salary package
                            that attracts lakhs of candidates.
                            The revised basic salary structure of IBPS PO (as per 10th Bipartite settlement) is: Rs.
                            23700 – (980 x 7) – 30560 – (1145 x 2) – 32850 – (1310 x 7) – 42020. This means Basic Salary
                            of IBPS PO after 7 Years – Rs 30,560, Basic Salary after 7 + 2 Years – Rs 32,850, and Basic
                            Salary after 7 + 2 + 7 Years – Rs 42,020</p>

                        <p class="my-4">
                            Along with a lucrative salary package, the employees will also be benefited with various
                            allowances. These allowances will be added to basic pay and reflect in the salary slip.
                        </p>

                        <!-- for IBPS PO Salary 2023 table -->
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                            <table class="table mt-3" style="font-family: Arial, Helvetica, sans-serif;">

                                <tbody style="color: var(--grayText);">
                                    <tr>
                                        <td>IBPS PO Basic Pay</td>
                                        <td>Rs. 23700/- (Increment in 4 stages)
                                            Salary after first Increment- Rs. 30560/-
                                            Salary after second Increment-Rs. 32850/-
                                            Salary after third Increment- Rs. 42020/-</td>
                                    </tr>
                                    <tr>
                                        <td>House Rent Allowances</td>
                                        <td>7%-9% of the basic pay</td>
                                    </tr>
                                    <tr>
                                        <td>Dearness Allowance</td>
                                        <td>39.8% of the Basic Pay (vary based on inflation rates)</td>
                                    </tr>
                                    <tr>
                                        <td>City Compensatory Allowance (CCA)</td>
                                        <td>3% or 4% (depends on the place of posting)</td>
                                    </tr>
                                    <tr>
                                        <td>Special Allowance</td>
                                        <td>7.75% of the basic pay</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>3049</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- for IBPS PO Job Profile 2023 -->
                        <div class="my-5" style="list-style-type: circle;">
                            <b class="fs-2  text-secondary fw-normal mb-3">IBPS PO Job Profile 2023</b><br>
                            <p class="my-4">IBPS PO is a respected job that provides many benefits to its employees. A
                                Probationary Officer is trained for multiple operations like finance, billing,
                                collection,
                                accounting, revenue, investment, etc. during their probation period. Other functions
                                might
                                also be needed to be taken care of such as:</p>

                            <li class="mt-4">To Bring new businesses to the bank branch</li>
                            <li>Public relations, addressing issues, and complaints of customers</li>
                            <li>Resolving customer queries</li>
                            <li>Maintaining and supervising branch activities</li>
                            <li>Daily transactions of customers</li>
                            <li>Processing loan detail</li>

                            <!-- for exam logo image-->
                            <div class="my-4">
                                <a href=""><img src="images/boostPrepExam.jpg" class="img-fluid" alt=""></a>
                            </div>

                            <!-- for IBPS PO Job Profile 2023-->
                            <div>
                                <b class="fs-1 text-secondary  mb-3">IBPS PO Job Profile 2023</b><br>
                                <p class="my-4">The eligibility criteria for applying for CRP-PO/MT-XII is quite simple.
                                    The Candidate should ensure that they fulfil the minimum eligibility criteria as
                                    specified by IBPS in the exam notification which is mentioned below:</p>

                                <b class="fs-3 fw-normal text-secondary">Nationality/Citizenship:</b>

                                <p class="my-5">
                                    The candidate should be either – A Citizen of India or/ Nepal or/Bhutan or/ Tibetan
                                    Refugee who came over to India before 1st January 1962 with the intention of
                                    permanently settling in India or/ a person of Indian origin who has migrated from
                                    Pakistan, Burma, Sri Lanka, East African countries of Kenya, Uganda, the United
                                    Republic of Tanzania (formerly Tanganyika and Zanzibar), Zambia, Malawi, Zaire,
                                    Ethiopia and Vietnam with the intention of permanently settling in India, provided
                                    that a candidate belonging to categories (ii), (iii), (iv) & (v) above shall be a
                                    person in whose favour a certificate of eligibility has been issued by the
                                    Government of India.
                                </p>

                                <b class="text-secondary fs-1 fw-normal">AGE (As on 01.08.2022)</b>
                                <p class="my-3">Minimum: 20 years or Maximum: 30 years.</p>
                                <p class="my-3">Category wise Age Relaxation details are mentioned below:</p>

                                <!-- IBPS PO Category wise Vacancy -->
                                <div>
                                    <b class="fw-normal fs-3 mt-5 text-secondary">IBPS PO Category wise Vacancy</b>
                                    <p class="mt-5">Below table explains the category wise Vacancies for IBPS PO 2023.
                                    </p>

                                    <!-- for Category wise Age Relaxation details are mentioned below:  table -->
                                    <div
                                        class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg">
                                        <table class="table mt-3" style="font-family: Arial, Helvetica, sans-serif;">
                                            <thead style="background-color: var(--DarkBlue);">
                                                <tr class="text-light">
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Age Relaxation</th>
                                                </tr>
                                            </thead>
                                            <tbody style="color: var(--grayText);">
                                                <tr>
                                                    <td>SC/ST candidates</td>
                                                    <td>5 years</td>
                                                </tr>
                                                <tr>
                                                    <td>OBC category from the non-creamy layer</td>
                                                    <td>3 years</td>
                                                </tr>
                                                <tr>
                                                    <td>Persons With Disabilities</td>
                                                    <td>10 years</td>
                                                </tr>
                                                <tr>
                                                    <td>Ex-Servicemen</td>
                                                    <td>5 years</td>
                                                </tr>
                                                <tr>
                                                    <td>Domiciled in Jammu and Kashmir Between 1-01-1980-31-12-1989</td>
                                                    <td>5 years</td>
                                                </tr>
                                                <tr>
                                                    <td>Victims of 1984 Riot</td>
                                                    <td>5 years</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- for Educational Qualifications(As on 21.08.2023) section -->
                    <div id="EligibilityCriteria">
                        <b class="text-secondary fs-2 fw-normal my-4">
                            Educational Qualifications(As on 21.08.2023)
                        </b>

                        <p class="my-5">
                            A Degree or Graduation in any discipline from a University recognised by the GOI or any
                            equivalent qualification which is recognized by the Central Government. The candidate must
                            possess valid Mark-sheet / Degree Certificate that he/ she is a graduate on the day he / she
                            registers and indicate the percentage of marks obtained in Graduation while registering
                            online.
                        </p>
                    </div>


                     <!-- for Admit card section -->
                    <div class="my-5" id="admitCard">
                        <b class="fs-3 fw-normal">IBPS PO Admit Card 2023</b>
                        <p class="mt-3">The IBPS PO admit card for the Preliminary examination will be released by
                            the
                            board in October 2023 on the official website of IBPS. IBPS is going to conduct IBPS PO
                            2022
                            Preliminary examination on October 2022.</p>
                    </div>


                    

                    
                </div>


                <!-- for right section of exam -->
                <div
                    class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-cente align-items-center">

                    <!-- for course program -->
                    <div class="col-lg-11 col-md-12 col-sm-12 col-12 shadow">
                        <b class="p-3 fs-4 fw-normal">Course Programs</b><br>
                        <hr>
                        <div class="ps-3 pb-3">
                            <span>Live Classes</span><br>
                            <span>Video Courses</span><br>
                            <span>Online Speed Tests</span><br>
                            <span>Popular Products</span><br>
                            <span>E-Books</span><br>
                            <span>Admission Cards</span><br>
                            <span>Membership</span><br>

                        </div>
                    </div>

                    <!-- for download notification pdf -->
                    <div class="col-lg-11 col-md-12 col-sm-12 col-12 shadow mt-5 mb-4">
                        <b class="p-3 fs-4 fw-normal text-secondary">Download Advertisement</b><br>
                        <hr>
                        <div class="d-flex align-items-center p-2">
                            <i class="fa-solid fa-download fs-2 text-light p-1 rounded" style="background-color: var(--DarkBlue);"></i>
                            <div class="ps-3">
                                <b class="text-secondary" style="font-size: 1rem;">Notification-PO-2022.pdf</b><br>
                                <span style="font-size: 12px;">Click on the icon to download advertisement</span>
                            </div>
                        </div>
                    </div>

                    <!-- for youtube video of gdf skills -->
                    <div class="col-lg-11 col-md-12 col-sm-12 col-12 shadow p-2" style="height: 15rem;">
                        <iframe width="100%" height="100%"
                            src="https://www.youtube.com/embed/wQ7W9-EYzbk?si=AOG8TXH09Zs2H20H"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                    <!-- for exam logo image section -->
                    <div class="col-lg-11 col-md-12 col-sm-12 col-12 shadow p-1 mt-4" style="height: 15rem;"> 
                        <img src="images/rightExamImage.jpg" class="img-fluid" alt="">
                     </div>


                    
                     <!-- for right side exam slider -->
                   
                     <div class="col-lg-11 col-md-12 col-sm-12 col-12 my-5 shadow">
                        <div class="p-3 fs-5 bg-light text-secondary fw-normal border-bottom">Important Government Exams
                        </div>
                        <div class="" style="height: 22rem; overflow-y: scroll;">

                            <div class="ps-3 pb-3 text-secondary">

                                <span>Live Classes</span><br>
                                <span>Video Courses</span><br>
                                <span>Online Speed Tests</span><br>
                                <span>Popular Products</span><br>
                                <span>E-Books</span><br>
                                <span>Admission Cards</span><br>
                                <span>Membership</span><br>
                                <span>Live Classes</span><br>
                                <span>Video Courses</span><br>
                                <span>Online Speed Tests</span><br>
                                <span>Popular Products</span><br>
                                <span>E-Books</span><br>
                                <span>Admission Cards</span><br>
                                <span>Membership</span><br>
                                <span>Live Classes</span><br>
                                <span>Video Courses</span><br>
                                <span>Online Speed Tests</span><br>
                                <span>Popular Products</span><br>
                                <span>E-Books</span><br>
                                <span>Admission Cards</span><br>
                                <span>Membership</span><br>
                                <span>Video Courses</span><br>
                                <span>Online Speed Tests</span><br>
                                <span>Popular Products</span><br>
                                <span>E-Books</span><br>
                                <span>Admission Cards</span><br>
                                <span>Membership</span><br>
                                <span>Live Classes</span><br>
                                <span>Video Courses</span><br>
                                <span>Online Speed Tests</span><br>
                                <span>Popular Products</span><br>
                                <span>E-Books</span><br>
                                <span>Admission Cards</span><br>
                                <span>Membership</span><br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include "footer.php"?>

    <div class="" id="container"  style="z-index: 20;">
        <i class="fa-regular fa-comment chat fs-1 bg-primary text-light rounded-circle p-3 d-flex justify-content-center align-items-center" style="height: 4.5rem; width: 4.5rem;"></i>
    </div>




</body>

</html>
<!-- for js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- for jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- for owl carousel js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<!-- for owl carousel Latest publication script  -->
<script>
    $('#link-goSection').owlCarousel({
        loop: false,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 200,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            370: {
                items: 3
            },
            570: {
                items: 4
            },
            900: {
                items: 5
            },
            1100: {
                items: 7
            },
            1200: {
                items: 9
            },
            1400: {
                items: 5
            },
        }
    });


</script>