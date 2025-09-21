<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content ="The IEEE World Engineering Education Conference - EDUNINE is the flagship annual conference for the IEEE Region 9 (Latin America and the Caribbean) of the IEEE Education Society. The EDUNINE international conference on Education in Engineering, Technology, Computer Science, and related topics, held every year in March in a different Latin American city,  is organized by  COPEC - Science and Education Research Organization. The conference program covers the main issues present in education today.">
        <meta name ="Keywords" content="IEEE, COPEC, Education in Engineering, Technology, and Computer Science, STEM, Teaching, Learning, Higher Education, University Education, Educación en Ingeniería, Tecnología e Informática, Enseñanza, Aprendizaje, Educacion Superior, Educación Universitaria, Educação em Engenharia, Tecnologia e Informática, Ensino, Aprendizagem, Ensino Superior, Educação Universitária, Latin America and the Caribbean, Latinoamérica y el Caribe, América Latina e Caribe, Conference, Congress, Conferencia, Congreso, Conferência, Congresso">
        <meta name="author" content="COPEC">
        <meta name="copyright" content="COPEC">
        <title> EDUNINE2026 English Website:  Home </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 

        <link href="../css/stylevenue.css" rel="stylesheet">
        <link href="../css/coordinator.css" rel="stylesheet">

        <link href="../css/modal.css" rel="stylesheet">

        <!--SLICK CAROUSEL-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <!--END  SLICK CAROUSEL -->

    </head>
    <body onload = "obtenerFechas(), jump()">
        <?php
        if (empty($_GET["id"])) {
            $id = "top";
        } else {
            $id = $_GET["id"];
        }
        ?>   
        <script>
            function jump() {
                id = "<?php echo $id ?>";
                const element = document.getElementById(id);
                element.scrollIntoView({block: "start"});
            }
        </script> 
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "newHeader.html" ?> 
        </div>
        <div class="#main"></div>

        <main>
        <!-- Home section -->
            <!-- Home section -->
            <section id="top">
                <!-- Full-width image -->
                <div class="home-image-container position-relative">
                    <!-- Overlay centrado -->
                    <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
                        <div class="text-overlay text-center p-4">
                            <h1 class="display-4 fw-bold">X IEEE World Engineering</h1>
                            <h1 class="display-4 fw-bold">Education Conference</h1>
                            <h4 class="fw-bold">March 8-11, 2026 - Mexico City, Mexico</h4>
                            <h3 class="fw-bold text_size p-1">
                                The Role of Engineering and Computer Technology as Artificial Intelligence turns into Reality: 
                                a Challenge for Professional Education
                            </h3>
                        </div>
                    </div>
                    <!-- Imagen de fondo -->
                    <img class="img-fluid w-100" src="../images/city/homeImage.jpg" alt="EDUNINE Banner">
                </div>
            </section>
            <!-- New proposed breadcrumb -->
                <nav class="section-nav" aria-label="Section navigation">
                    <ul class="d-flex justify-content-end list-unstyled mb-0">
                        <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2 btn" href="#about">About </a>
                        </li>
                        <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2 btn" href="#dates">Schedule</a>
                        </li>
                        <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2 btn" href="#coordinators">Coordinators</a>
                        </li>
                        <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2 btn" href="#venue">Venue</a>
                        </li>
                        <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2 btn" href="#organizers">Organizers</a>
                        </li>
                        <!-- add/remove as needed
                        There was no link for venue?? It tended to disappear -->
                    </ul>
                </nav>

              <!--Navigation for cellphones Susan's Idea-->
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="chevron-up-down" viewBox="0 0 16 18">
                <!-- Up chevron -->
                <path d="M2.146 6.854a.5.5 0 0 1 .708 0L8 2.707l5.146 4.147a.5.5 0 0 1-.708.708L8 4.207 2.854 7.562a.5.5 0 0 1-.708-.708z"/>

                <!-- Down chevron -->
                <path d="M2.146 11.146a.5.5 0 0 1 .708 0L8 15.293l5.146-4.147a.5.5 0 0 1 .708.708l-5.5 5.5a.5.5 0 0 1-.708 0l-5.5-5.5a.5.5 0 0 1 0-.708z"/>
            </symbol>
            </svg>


            <div class="container d-flex justify-content-center">
                <div class="dropdown d-navs d-sm-none"> <!--d-sm-none makes it not appear for screen higher than 575px width-->
                <button class="btn dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    On this page
                    <svg class="bi ms-2" width="16" height="16" fill="currentColor" aria-hidden="true">
                    <use xlink:href="#chevron-up-down"></use>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#top">About</a></li>
                    <li><a class="dropdown-item" href="#dates">Schedule</a></li>
                    <li><a class="dropdown-item" href="#coordinators"> Coordinators</a></li>
                    <li><a class="dropdown-item" href="#venue"> Venue</a></li>
                    <li><a class="dropdown-item" href="#organizers"> Organizers</a></li>
                </ul>
                </div>
            </div>

            <!--End of Navigation for cellphones Susan's Idea-->

            <!-- About section -->
            <section class="primera">             
                <!-- ABOUT CONFERENCE SECTION -->
                 <div class="container-fluid px-0">
                    <!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"> -->
                        <!-- <div class="carousel-inner home-carousel"> -->
                            <!-- <div class="carousel-item active"> -->
                                <h2 class="display-5 fw-bold">About the Conference</h2>
                                <h4>A Premier Hybrid Experience</h4>
                                <p>We are pleased to invite you to contribute to the <b>X IEEE World Engineering Education Conference (EDUNINE2026)</b>, a leading international event that will take place in a hybrid format—both online and in person—at <b>Tecnológico de Monterrey</b> in <b>Mexico City, Mexico</b>, from <b>March 8 to 11, 2026</b>.</p>
                                <h4>Call for Papers</h4>
                                <p>We welcome original submissions in <b>English</b>, which will undergo a rigorous peer-review process, under the following categories within the field of interest of the <b>IEEE Education Society</b>:</p><ul>
                                    <li><b>Category 1:</b> Implemented teaching techniques, classroom experience reports, or pedagogical tools (as full papers or work in progress papers)
                                    </li><li><b>Category 2:</b> New curricula and educational program proposals, including regional or national adaptations (as full papers or work in progress papers)
                                    </li><li><b>Category 3:</b> Educational research papers (as full papers or work in progress papers)
                                    </li><li><b>Category 4:</b> Research-in-Development (RID) papers for doctoral students (as doctoral symposium papers).
                                    </li><li><b>Category 5:</b> Workshop Proposal Papers for Online Pre-Conference Workshops, Plenary and Panel Proposal Papers.</li></ul>
                                <p>The <b>IEEE Education Society’s</b> field of interest encompasses the theory and practice of education and educational technology related to the effective delivery of knowledge in disciplines that fall within <b>IEEE’s</b> scope, such as engineering, computing, and technology-related fields.</p>
                                <p>Accepted papers that meet IEEE quality standards will be published in IEEE Xplore®. Each accepted paper must be presented orally at the conference by at least one registered author. Presentations may be delivered in <i>English</i>, <i>Spanish</i>, or <i>Portuguese</i>.
                            <!-- </div> -->
                            <!-- <div class="carousel-item"> -->
                                <h4>A Dynamic and Inclusive Program</h4>
                                <p><b>EDUNINE2026</b> addresses emerging trends and challenges in engineering, computing, and technology education. This year’s conference will explore its central theme in all its facets—how it transforms teaching and learning practices, reshapes the skills required by future professionals, and responds to the evolving demands of industries and societies.
                                The program features plenary talks, panel discussions, and special sessions designed to foster critical reflection and exchange on these topics. Discussions will engage with questions around the future of work, the alignment between education and societal needs, and how to better serve diverse and underserved populations through inclusive educational strategies.</p>
                                <p>In addition to parallel paper presentations and workshops, the conference will also host the EDUNINE Doctoral Symposium, providing a platform for doctoral students to share ongoing research and receive feedback from experts in the field.</p>
                                <h4>Accessibility and Inclusivity</h4>
                                <p>The hybrid format ensures that all participants—regardless of location—can fully engage in the conference. Whether attending virtually or onsite, everyone has the opportunity to participate, learn, and contribute.</p>
                                <h4>A Conference with Impact</h4>
                                <p><b>EDUNINE</b> is an integral part of the <b>IEEE Education Society's</b> family of regional conferences, alongside <b>FIE</b>, <b>EDUCON</b>, and <b>TALE</b>. These events are recognized as premier venues for advancing global dialogue, research, and innovation in education.</p>
                                <p><b>Join Us</b></p>
                                <p>Be part of <b>EDUNINE2026</b>—a forum where ideas converge, knowledge grows, and meaningful connections are made. Through an engaging program of papers, plenaries, panels, and special sessions, the conference will examine the challenges and opportunities that define the future of engineering and technology education. We look forward to your participation in this timely and impactful event.</p>
                            <!-- </div> -->
                        <!-- </div> -->
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> -->
                    <!-- </div> -->
                </div>
            </section>

            <!--boton extra -->
            <section style="text-align: center; padding: 40px 0;">
                <div>
                    <span style="font-size: 1.5rem; margin-right: 20px;">Important Information</span>
                    <a href="https://easychair.org/cfp/EDUNINE2026" target="_blank"><button type="button" class="btn btn-primary">Submit Your Paper</button></a>
                </div>
            </section>                      
                        
            <!--FIN BOTON EXTRA -->
        
            <!-- NAVAR SCHEDULE SECTION -->
            <section id="dates">    
            <!-- SCHEDULE SECTION -->
            <section class="schedule">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h2 class="display-5 fw-bold px-3">Conference Schedule and Important Dates </h2><p class="fs-5 text-center mx-auto pb-3">Stay informed about key milestones and deadlines throughout the conference with our comprehensive timeline, ensuring you don't miss any important stages.</p>
                        </div>
                    </div>
                </div>
                <!-- BOTONES SCHEDULE -->
                <div class="container-fluid px-5 pb-3">
                    <div class="row g-5"> 
                        <div class="col d-flex justify-content-center flex-wrap gap-3 btn-schdule-style"> 
                            <button type="button" class="btn btn-primary schedule-btn btn-active" id="showContentBtn">
                                Paper Submission Guide </button>                           
                            <button type="button" class="btn btn-primary schedule-btn" id="peerReview">
                                Peer Review Outcome
                            </button>
                            <button type="button" class="btn btn-primary schedule-btn" id="finalPaper">
                                Final Paper Submission
                            </button>
                            <button type="button" class="btn btn-primary schedule-btn" id="notificationReview">
                                Notification of Second Review
                            </button>
                        </div>
                    </div>
                    <div class="row g-5"> 
                        <div class="col d-flex justify-content-center flex-wrap gap-3"> 
                            <button type="button" class="btn btn-primary schedule-btn" id="authorParticipantRegistration">
                                Author & Participant Registration 
                            </button>
                            <button type="button" class="btn btn-primary schedule-btn" id="presentationChairInfo">
                                Presentation & Chair Info
                            </button>
                            <button type="button" class="btn btn-primary schedule-btn" id="hybridConference">
                                Hybrid Conference
                            </button>
                            <button type="button" class="btn btn-primary schedule-btn" id="postConference">
                                Post Conference Products
                            </button>
                        </div> 
                    </div> 
                </div> 
                <!-- TABLAS DE CONTENIDOS -->
                <div class="mt-3 showContentBtn">
                    <div class="container-fluid p-4">
                            <div class= "col text-center p-5 tope rounded-3">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid" src="../images/decoration/paperComposition.jpg"  alt="Manuscript Composition and Submission"> 
                                    <h4 class="fw-bold">Composing your Conference Paper and Submission</h4>
                                    <p class="fs-6 mb-4"> Find key information on paper categories, formatting, themes, standards, and templates. Submit your original, unpublished work as a Full Paper, Work-in-Progress, Workshop Proposal, or Doctoral Symposium Paper. All submissions must be in English. Explore the links below for detailed information on submission categories, formatting guidelines, templates, and quality standards. Important deadlines for the paper categories are also listed. Be sure to review all requirements before submitting your work.</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-center pb-3">
                                        <a href="doc/cfp.pdf" class="btn btn-primary btn-sm me-2" role="button">Call for Papers</a>
                                        <a href="information.php" class="btn btn-primary btn-sm me-2" role="button">Composing your Paper</a>
                                        <a href="information.php?id=suitable" class="btn btn-primary btn-sm me-2" role="button">Topics</a>
                                        <a href="information.php?id=submission" class="btn btn-primary btn-sm" role="button">Paper Submission</a>
                                    </div> 
                                </div>
                                <div class=" mt-2">
                                    <div class="row">
                                        <div class="col-9 bg-light border text-secondary">
                                            <h5 class="text-center">Event</h5>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <h5 class="text-center align-middle">Due Date</h5>
                                        </div>
                                            <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Category 1 to 4 Full or WiP Papers Submission (Round #1)</p> 
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">  
                                            <p class="lh-sm text-center" id="papers"></p>
                                        </div>
                                        <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Category 5 Workshop Proposal Papers Submission</p>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id ="proposals"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>                  
                </div>
                <div class="d-none mt-3 peerReview">
                    <div class="container-fluid p-4">
                        <div class= "col text-center p-5 tope rounded-3">
                            <div class="clearfix">
                                <img class="col-3 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerReview.jpg"  alt="Peer-Review Notification"> 
                                <h4 class="fw-bold">Peer Review Notification and Conditional Acceptance</h4>
                                <p class="fs-6 mb-4"> All submissions undergo <b>prescreening for scope and formatting</b>. Papers accepted after peer review must meet IEEE standards. <b>Conditionally accepted papers</b> require authors' improvements, resubmission and are subject to a second review by the Technical Program Committee (TPC) before final acceptance. Click below to learn more about the EDUNINE peer review process. The deadlines are also listed.</p>
                                <div class="d-flex flex-wrap gap-2 justify-content-center pb-3">
                                    <a href="reviewNotif.php" class="btn btn-primary btn-sm" role="button">Peer Review Process Notification</a>
                                </div>   
                            </div>
                            <div class=" mt-2">
                                <div class="row">
                                    <div class="col-9 bg-light border text-secondary">
                                        <h4 class="text-center">Event</h4>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <h4 class="text-center">Due Date</h4>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Category 1 to 4 Peer Review Notification (Round #1)</p> 
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id="pnotif"></p>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Category 5 Workshop Proposal Review Notification</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id="snotif"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="d-none mt-3 finalPaper">
                    <div class="container-fluid p-4">
                            <div class= "col text-center p-5 tope rounded-3">
                                <div class="clearfix">
                                        <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                            src="../images/decoration/finalPaper.jpg"  alt="Final Paper Preparation and Submission Image">
                                    <h4 class="fw-bold">Final Paper Preparation and Submission</h4>
                                    <p class="fs-6 mb-4"> <b>All accepted papers</b> undergo a <b>second review</b> by the EDUNINE Program Committee before final acceptance.</p>
                                    <p class="fs-6 mb-4"><b>Conditionally accepted papers</b> have an earlier deadline and may be resubmitted multiple times for additional review rounds, allowing authors to address required improvements and reduce the risk of rejection. Following each submission of your final paper, you'll receive a summary via email detailing the review process conducted in line with the Final Paper Guidelines.</p>
                                    <p class="fs-6 mb-4">All final papers, regardless of acceptance type, must be submitted before the second review deadline and meet all IEEE requirements: content, scope, English quality, formatting (with templates), PDF via PDF eXpress, and copyright transfer. Papers that don't comply will be rejected and excluded from IEEE Xplore. Ensure originality using a plagiarism checker. After copyright transfer and checks, papers are reviewed by IEEECrossCheck. For full guidelines, see the link below.</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-center pb-3">
                                        <a href="finalInformation.php" class="btn btn-primary btn-sm" role="button">Final Paper Preparation and Submission</a>
                                    </div>                     
                                </div>
                                <div class=" mt-2">
                                    <div class="row">
                                        <div class="col-9 bg-light border text-secondary">
                                            <h4 class="text-center">Event</h4>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <h4 class="text-center">Due Date</h4>
                                        </div>
                                            <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Conditional Accepts, Multiple Submissions with TPC Reviews Notifications (Round #2)</p> 
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id="pfCond"></p>
                                        </div>
                                        <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Final Paper Submission for second review (last TPC review) (Round #2)</p>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id="pfsubm"></p>
                                        </div>
                                        <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Final Workshop Proposal Submission for TPC review</p>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id="sfsubm"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="d-none mt-3 notificationReview">
                    <div class="container-fluid p-4">
                        <div class= "col text-center p-5 tope rounded-3">
                            <div class="clearfix">
                                <img class="col-3 p-2 rounded float-sm-start img-fluid"
                                src="../images/decoration/notiFinalReview.jpg"   alt="Notification Second Review Image">
                                <h4 class="fw-bold pb-4">Notification of Second Review</h4>
                                <p class="fs-6 mb-4"> You'll receive a summary via email detailing the second review process conducted in line with the Final Paper Preparation Guidelines. This review will ensure compliance with quality standards for content, English, and format, as well as alignment of Paper uploaded information with the final paper, proper PDF generation through PDFeXpress, and successful completion of the copyright transfer.  Once the copyright transfer is finalized and the paper clears all checks, it undergoes evaluation by IEEECrossCheck. Final Papers Papers that do not meet these requirements will be rejected and cannot be published in IEEE Xplore. </p>                                   
                            </div>
                            <div class=" mt-2">
                                <div class="row">
                                    <div class="col-9 bg-light border text-secondary">
                                        <h4 class="text-center">Event</h4>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <h4 class="text-center">Due Date</h4>
                                    </div>
                                        <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Notification of Second review of  Categories 1-4 papers (Round #2)</p> 
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id="pfnotif"></p>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Notification of Final Workshop Acceptance</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id="sfnotif"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none mt-3 authorParticipantRegistration">
                    <div class="container-fluid p-4">
                        <div class= "col text-center p-5 tope rounded-3">
                            <div class="clearfix">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                src="../images/decoration/registration.jpg"  alt="Registration Process Image">                                                <h4 class="fw-bold">Author and Participants (non-authors) Registration</h4>
                                <p class="fs-6 mb-4">Attention <b>Authors</b>: To ensure your accepted final paper is published in the <b>IEEE Xplore®</b> digital library (please note that IEEE reserves the right to reject papers not meeting standards), registration and oral presentation at the conference are mandatory. Each author registration permits the presentation and publication of one paper, with the option to include an additional paper for an extra publication fee. Unpresented accepted papers cannot be submitted for publication in <b>IEEE Xplore®</b>.</p>
                                <p class="fs-6 mb-4"><br>For <b>Authors</b> and <b>Participants (non-authors)</b>: Registration grants access to all conference sessions, workshops, tours, and other activities, both online and in-person. After the conference, certificates for participation and paper presentation will be issued. Registration fees vary based on Early, Normal, or Late deadlines. Payment options include credit card (PayPal) in Euros or bank transfer in Euros or U.S. Dollars. Registration will be provided post-acceptance notification. For further details, click the button below.</p>
                                <div class="d-flex flex-wrap gap-2 justify-content-center pb-3">
                                    <a href="fees.php" class="btn btn-primary btn-sm" role="button">Registration and Payment (Authors and Participants)</a> 
                                </div>
                            </div>
                            <div class=" mt-2">
                                <div class="row">
                                    <div class="col-9 bg-light border text-secondary">
                                        <h4 class="text-center">Event</h4>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <h4 class="text-center">Due Date</h4>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Early Registration and Payment</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id="reg1"></p>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Normal Registration and Payment</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id ="reg2"></p>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Late Registration and Payment</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id ="reg3"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none mt-3 presentationChairInfo">
                    <div class="container-fluid p-4">
                            <div class= "col text-center p-5 tope rounded-3">
                                <div class="clearfix">
                                    <img class="col-3 p-2 rounded float-sm-start img-fluid" src="../images/decoration/sessionPresentation.jpg"  alt="Paper Presentation Guidelines Image">                          <h4 class="fw-bold">Presentation Guidelines & Session Chair Opportunities</h4>
                                    <p class="fs-6 mb-4">We invite all authors to carefully review the Paper Presentation Guidelines to ensure a smooth and successful participation in the conference. The guidelines include important information on timing, format (in-person or virtual), and technical requirements for your session.</p>
                                    <p class="fs-6 mb-4">In addition, if you are interested in serving as a Session Chair for the technical session in which your paper is scheduled, we welcome your involvement! This is a great opportunity to contribute to the conference community by helping facilitate presentations and discussions.</p>
                                    <p class="fs-6 mb-4">Please consult the guidelines and indicate your interest in chairing by following the instructions provided in the links below:</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-center pb-3">
                                        <a href="techSession.php" class="btn btn-primary btn-sm me-2" role="button">Paper Presentation Guidelines</a> 
                                        <a href="techSession.php?id=chair" class="btn btn-primary btn-sm" role="button">Session Chair Guidelines</a> 
                                    </div>                                                          
                                </div>
                                    <div class=" mt-2">
                                        <div class="row">
                                            <div class="col-9 bg-light border text-secondary">
                                                <h4 class="text-center">Event</h4>
                                            </div>
                                            <div class="col-3 bg-light border text-secondary">
                                                <h4 class="text-center">Due Date</h4>
                                            </div>
                                            <div class="col-9 bg-light border text-secondary">
                                                <p class="lh-sm text-center">Notify your interest in serving as technical session chair</p>
                                            </div>
                                            <div class="col-3 bg-light border text-secondary">
                                                <p class="lh-sm text-center" id="chair"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="d-none mt-3 hybridConference">
                    <div class="container-fluid p-4">
                            <div class= "col text-center p-5 tope rounded-3">
                                <div class="clearfix">
                                    <img class="col-3 p-2 rounded float-sm-start img-fluid" 
                                    src="../images/decoration/conference.jpg" alt="Conference  Image">                                 <h4 class="fw-bold">Hybrid Conference</h4>
                                    <p class="fs-6 mb-4">Welcome to our conference! Alongside our exciting lineup of dates, we're thrilled to offer a diverse array of activities to enhance your experience. Click the buttons below to access the conference program (a detailed agenda will be available after registration), where you'll find detailed information on sessions and activities. Dive deeper into our pre-conference workshops for valuable insights and knowledge sharing. Plus, don't miss out on our pre-conference cultural immersion tour, a unique opportunity to explore and engage with the local culture. Get ready for an enriching and unforgettable event!</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-center pb-3"> 
                                        <a href="program.php?id=tour" class="btn btn-primary btn-sm" role="button">Pre-conference Tour Program</a>
                                        <a href="workshops.php?id=pcworkshops" class="btn btn-primary btn-sm me-2" role="button">Online Pre-conference Workshops Program</a> 
                                        <a href="program.php?id=program" class="btn btn-primary btn-sm me-2" role="button">Conference Program</a>
                                        <a href="program.php?id=awards" class="btn btn-primary btn-sm me-2" role="button">Conference Awards</a>
                                        <a href="techSession.php" class="btn btn-primary btn-sm me-2" role="button">Paper Presentation Guidelines</a> 
                                        <a href="techSession.php?id=chair" class="btn btn-primary btn-sm" role="button">Session Chair Guidelines</a> 
                                    </div>                                                          
                                </div>
                                <div class=" mt-2">
                                    <div class="row">
                                        <div class="col-9 bg-light border text-secondary">
                                            <h4 class="text-center">Event</h4>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <h4 class="text-center">Due Date</h4>
                                        </div>
                                            <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Tour Registration</p>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id="tourreg"></p>
                                        </div>
                                        <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Pre-conference Tour</p>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id="tour"></p>
                                        </div>
                                        <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Pre-conference Online Workshop sessions o</p>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id="wshops"></p>
                                        </div>
                                        <div class="col-9 bg-light border text-secondary">
                                            <p class="lh-sm text-center">Conference</p>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <p class="lh-sm text-center" id="congress"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="d-none mt-3 postConference">
                    <div class="container-fluid p-4">
                        <div class= "col text-center p-5 tope rounded-3">
                            <div class="clearfix">
                                <img class="col-3 p-2 rounded float-sm-start img-fluid" 
                                    src="../images/decoration/postConference.jpg" alt="Final Paper Submission Process Image">                                <h4 class="fw-bold">Post Conference Products</h4>
                                    <p class="fs-6 mb-4"> Estimated Date of Post-Conference Products: Includes the publication of conference proceedings and issuance of author and participant certificates of participation.</p>
                                    <div class="d-flex flex-wrap gap-2 justify-content-center pb-3">
                                        <a href="postConf.php" class="btn btn-primary btn-sm" role="button">Post Conference Products</a>
                                    </div>
                            </div>
                            <div class=" mt-2">
                                <div class="row">
                                    <div class="col-9 bg-light border text-secondary">
                                        <h4 class="text-center">Event</h4>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <h4 class="text-center">Due Date</h4>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Certificates have been sent, and the EDUNINE 2026 Proceedings have been submitted to IEEE Xplore for publication consideration</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id="postCongress"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
    <!-- Coordinators section This was the previous location, should we mantain it?-->
    <section id="coordinators">
        <div class="container-fluid px-5">
            <h2 class="display-5 fw-bold text-center mb-4">Coordinators</h2>
            <div class="coordinators-slider">

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\José Martín.png" 
                        class="img-fluid rounded-circle mb-2" 
                        alt="Conference Chair">
                    <div class="overlay-content">
                        <h2>José Martín Molina Espinosa</h2>
                        <h2>Conference Chair</h2><br>
                        
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#coordinatorsModalJoséMartín">
                        View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\Claudio Britto.jpg" 
                        class="img-fluid rounded-circle mb-2" 
                        alt="General Chair">
                    <div class="overlay-content">
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Claudio R. Brito</h3>
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">General Chair</h3><br>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                            data-bs-toggle="modal" data-bs-target="#coordinatorsModalBritto">View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\Melany M.Ciampi.jpg" 
                        class="img-fluid rounded-circle mb-2" 
                        alt="General Chair">
                    <div class="overlay-content">
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Melany M. Ciampi</h3>
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Co-Chair / Awards Chair</h3><br>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                            data-bs-toggle="modal" data-bs-target="#coordinatorsModalMelany">View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\Agatha da Silva.jpeg"
                                    class="img-fluid rounded-circle mb-2"
                                    alt="Logo SBC">
                
                    <div class="overlay-content">
                        <h2>Agatha da Silva Ovando</h2>
                        <h2>Technical Program Chair</h2>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#coordinatorsModalAgatha">
                        View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\Ana_Luna.jpg" 
                        class="img-fluid rounded-circle mb-2" 
                        alt="Conference Chair">
                    <div class="overlay-content">
                        <h2>Ana Luna</h2>
                        <h2>Technical Program Co-Chair</h2><br>
                        
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#coordinatorsModalAnaLuna">
                        View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\Alejandro Adorjan .jpg"
                                    class="img-fluid rounded-circle mb-2"
                                    alt="Logo SBC">
                
                    <div class="overlay-content">
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Alejandro Adorjan Olivera</h3>
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Technical Program Co-Chair</h3><br>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#coordinatorsModalAle">View CV</button>

                    </div>

                </div>
               

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\Mario Chong.jpg"
                                    class="img-fluid rounded-circle mb-2"
                                    alt="Logo SBC">
                
                    <div class="overlay-content">
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Mario Chong</h3>
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Publication Chair / Public Relations Chair</h3><br><br>
                            
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                            data-bs-toggle="modal" data-bs-target="#coordinatorsModalChong">View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\María Isabel Pozzo.jpg"
                                    class="img-fluid rounded-circle mb-2"
                                    alt="Logo SBC">
                
                    <div class="overlay-content">
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Maria Isabel Pozzo</h3>
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Doctoral Symposium Chair</h3><br>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                            data-bs-toggle="modal" data-bs-target="#coordinatorsModalMariaIsabel">View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="../images\coordinators\Rafael Rentería.png"
                                    class="img-fluid rounded-circle mb-2"
                                    alt="Logo SBC">
                
                    <div class="overlay-content">
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Rafael R. Rentería Ramos</h3>
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Workshops Chair</h3><br>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                            data-bs-toggle="modal" data-bs-target="#coordinatorsModalRafael">View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="../images\coordinators\Roberto Portillo.JPG"
                                    class="img-fluid rounded-circle mb-2"
                                    alt="Logo SBC">
                
                    <div class="overlay-content">
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Roberto Portillo</h3>
                        <h3 style="font-size: clamp(17px, 2vw, 25px);">Conference Support Chair</h3><br>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                            data-bs-toggle="modal" data-bs-target="#coordinatorsModalRoberto">View CV
                        </button>
                    </div>
                </div>

                <div class="slide image-hover text-center">
                    <img src="..\images\coordinators\Orlando Fittipaldi.jpg"
                                    class="img-fluid rounded-circle mb-2"
                                    alt="Logo SBC">
                
                    <div class="overlay-content">
                        <h2>Orlando Fittipaldi</h2>
                        <h2>Finance / Treasurer Chair</h2>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                            data-bs-toggle="modal" data-bs-target="#coordinatorsModalOrlando">View CV
                        </button>

                        </button>
                    </div>
                </div>

                <!-- …repeat one <div class="slide"> per person…-->
            </div>
        </div>
    </section>

    <!-- Modal José Martín Molina Espinosa-->
    <div class="modal coordinators-modal fade" 
        id="coordinatorsModalJoséMartín" 
        tabindex="-1" 
        aria-labelledby="coordinatorsModalLabel" 
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center" style="text-align: justify;">
                <p class="lh-sm mx-2">
                Dr. José Martín Molina Espinosa is a Research Professor in the School of Engineering and Sciences 
                at Tecnologico de Monterrey, based at Mexico City campus, where he also contributes as an adjunct 
                researcher to the institution’s Artificial Intelligence Strategic. He earned his Ph.D. in 
                Computer Science and Telecommunications from the Institut National Polytechnique de Toulouse (INP LAAS), 
                France. Since joining the Tec in 2003, he has held key roles including Director of Graduate Programs 
                in Computer Science, Head of Computer Science Department, and Director of The Decision Making Lab.<br>
                <br>Dr. Molina’s prolific research career includes authoring over 30 peer-reviewed journal articles, 
                book chapters, and conference papers in areas such as distributed systems, cloud and mobile application 
                development, system architectures for decision making, educational technology, computational thinking, 
                and complex thinking. He is a recognized researcher (Mexican Researcher Certification Level 
                1) with a growing body of published work in higher education and learning sciences. 
                His recent research in generative artificial intelligence focuses on transforming higher education 
                through the integration of AI tools into active learning strategies, competency development, 
                and inclusive teaching practices. His international recognition—including the QS Reimagine Education 
                Gold Award and the Open Education Global “Open with Artificial Intelligence Award”—reflects the 
                innovation, scalability, and societal impact of his initiatives, which leverage AI to foster 
                equitable access, cultivate complex thinking, and empower lifelong learning. Additionally, 
                his research has addressed adaptive learning systems enriched with generative AI to support diversity 
                and inclusion, earning accolades such as the Best Paper Award at the IEEE EDUNINE 2025 conference. 
                Through this body of work, Dr. Molina is shaping the academic discourse on how generative AI can be 
                responsibly and effectively embedded into higher education to prepare students for the challenges of 
                an AI-driven world.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Claudio Britto-->
    <div class="modal coordinators-modal fade" 
        id="coordinatorsModalBritto" 
        tabindex="-1" 
        aria-labelledby="coordinatorsModalLabel" 
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center" style="text-align: justify;">
                <p class="lh-sm mx-2">
                Dr. Claudio da Rocha Brito (PhD, Dr. rer nat. habil., Eta-Kappa-Nu) is a distinguished Professor of Electrical and Computer Engineering and President Emeritus of the IEEE Education Society. He currently serves as Chancellor of the International Institute of Education (IIE) and President of the Science and Education Research Organization (COPEC). He is also President of the Fishing Museum Friends Society (AAMP) and President of the (Brazilian) National Monitoring Committee of IGIP (Internationale Gesellschaft für Ingenieurpädagogik). Dr. Brito holds multiple leadership positions, including Vice President of INTERTECH (International Council for Engineering and Technology Education), WCSEIT (World Organization on System Engineering and Information Technology), SHERO (Safety Health and Environment Research Organization), and WCCA (World Organization on Communication and Arts). Academically, Dr. Brito holds a Ph.D., M.Sc., and B.Sc. in Electrical Engineering from the Polytechnic School of the University of São Paulo, as well as B.Sc. degree in Physics from the Institute of Physics, B. Sc. in Mathematics from the Institute of Mathematics and Statistics, B. Sc. in Mathematics Education and B. Sc. in Physics Education, both from the Faculty of Education all in the University of São Paulo. He is an active member of several international engineering education societies including IGIP, SEFI (European Society for Engineering Education), ASEE (American Society for Engineering Education), INTERTECH, and RCI (Cartagena Network of Engineering). Throughout his career, Dr. Brito has received numerous awards, including the IEEE Edwin C. Jones Jr. Meritorious Service Award (2011), IEEE Meritorious Service Award (2018), IEEE Outstanding Recognition Award (2022), IEEE Unmatched Dedication Award (2023), IEEE Leadership in Conference Organization Award (2024) and IEEE Excellence in Inspiration Award (2025). His biography is featured in several international directories such as Who's Who in the World, Who's Who in America, Who's Who in Science and Engineering, and Dictionary of International Biography.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Melany-->
    <div class="modal coordinators-modal fade" 
        id="coordinatorsModalMelany" 
        tabindex="-1" 
        aria-labelledby="coordinatorsModalLabel" 
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center" style="text-align: justify;">
                <p class="lh-sm mx-2">
                Dr. Melany M. Ciampi Ciampi (PhD, Dr. rer nat. habil., Eta-Kappa-Nu) is a renowned Professor of Electrical and Computer 
                Engineering and a global leader in engineering education. She currently serves as Rector of the International Institute of Education 
                (IIE) and holds several top international leadership positions, including President of the World Organization on System Engineering 
                and Information Technology (WCSEIT), President of the Safety Health and Environment Research Organization (SHERO) and President of 
                the World Organization on Communication and Arts (WCCA). She is also Vice-President of the Science and Education Research Organization 
                (COPEC), the Fishing Museum Friends Society (AAMP), and Brazil’s National Monitoring Committee of IGIP (International Society for 
                Engineering Education). Dr. Ciampi has been a long-standing board member of major international organizations, such as the Global 
                Council on Manufacturing and Management (GCMM) and the Board of Governors for INTERTECH, WCSEIT, SHERO and WCCA. Her leadership has 
                significantly shaped global collaboration in engineering and technology education. She has served in key roles within the IEEE 
                Education Society, including Vice President for Conferences and Workshops (2022–2023), Secretary across three terms 
                (2016–2017, 2018–2019, 2020–2021) and Member of Board of Governors (2003-2023). She was also Vice-President of IGIP (2010–2014), 
                Co-Chair of Working Group Engineering Education in International Context (2002–2018), and President of the Brazilian Chapter of the IEEE
                Education Society (2002–2004). Dr. Ciampi is a member of IGIP, SEFI, ASEE, INTERTECH, and RCI (Cartagena Network of Engineering). 
                Her many accolades include the the IEEE Edwin C. Jones Jr. Meritorious Service Award 2011 and Ronald J. Schmitz Outstanding Service 
                Award 2016, IEEE Meritorious Service Award 2018, IEEE Outstanding Recognition Award 2022, IEEE Unmatched Dedication Award 2023, 
                IEEE Leadership in Conference Organization Award 2024, IEEE Education Society Distinguished Member Award 2024 and IEEE Excellence 
                in Inspiration Award 2025.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Agatha de Silva-->
    <div class="modal coordinators-modal fade" 
        id="coordinatorsModalAgatha" 
        tabindex="-1" 
        aria-labelledby="coordinatorsModalLabel" 
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center" style="text-align: justify;">
                <p class="lh-sm mx-2">
                Agatha da Silva is an Associate Professor and Director of the Logistics Operations Center at Universidad Privada Boliviana (Bolivia). She is currently a Doctoral Candidate in Logistics and Supply Chain Management at Universidad de La Sabana, Colombia. She holds a Postgraduate Certificate in Logistics and Supply Chain Management from the Massachusetts Institute of Technology (MIT), a Master’s degree in Product Design Management from Bournemouth University (United Kingdom), and an MBA from UPB.
                Her work focuses on operations management, conducting research on food supply chains, last-mile logistics, and educational innovation. She has collaborated with companies and organizations on projects related to last-mile solutions and sustainable logistics.
                She serves as Track Leader for Educational Innovation in Logistics and Supply Chain Management in the MIT SCALE Network. She is Vice President of the MIT GCLOG Alumni Association for the 2024–2026 term, and was elected Vice President of Meetings for the POMS LAC Chapter for the 2023–2026 term.
                In 2024, she received the Nada Sanders Emerging Economies Doctoral Dissertation Award for Latin America and the Caribbean.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Ana Luna-->
    <div class="modal coordinators-modal fade" 
        id="coordinatorsModalAnaLuna" 
        tabindex="-1" 
        aria-labelledby="coordinatorsModalLabel" 
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center" style="text-align: justify;">
                <p class="lh-sm mx-2">
                Associate Professor in the Department of Engineering at Universidad del Pacífico 
                (Lima, Peru) and Researcher at CIUP. Holds a Ph.D. and Licentiate in Physical Sciences 
                from the University of Buenos Aires, specializing in optics, photonics, and sustainability. 
                Academic career includes leadership as Vice Dean of Business Engineering, coordination of 
                courses in Sustainable Development Technology, and extensive teaching experience in higher 
                education. Research spans engineering education, sustainability, laser physics, and photonic 
                structures, with over 20 peer-reviewed articles, multiple book chapters, and presentations 
                at international conferences. Senior Member of IEEE and Vice President for Outreach Activities, 
                recipient of awards such as Best Paper at EDUNINE 2019 and ICECB 2018, and contributor to public 
                policy initiatives on gender equality and environmental issues.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Ale-->
    <div class="modal coordinators-modal fade" id="coordinatorsModalAle" tabindex="-1" aria-labelledby="coordinatorsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>              
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="text-align: justify;">

                    <p class="lh-sm mx-2">
                        Alejandro Adorjan is a Professor of Software Engineering and Adjunct Academic Coordinator at the School of Engineering, Universidad ORT Uruguay. He is currently a Ph.D. candidate in Informatics at PEDECIBA. He holds both a Master’s degree in Computer Science and an Engineering degree in Software Engineering from Universidad ORT Uruguay. 
                        With over 15 years of experience in higher and technical education, Adorjan has designed and delivered undergraduate courses in Software Engineering, Programming, and Mathematics. He has been teaching at Universidad ORT Uruguay since 2007 and previously taught at Universidad del Trabajo del Uruguay.<br>
                        <br>Adorjan has authored and co-authored several peer-reviewed publications presented at leading international conferences, including EDUCON, FIE, TALE, EDUNINE. His academic work focuses on topics such as competency-based education, educational innovation, human-in-the-loop data processes, and collaborative learning in virtual environments.
                        He is a recognised leader in the academic community, serving as a member of the Academic Advisory Council (Consejo Académico Consultivo) of the School of Engineering at Universidad ORT Uruguay. His work has been recognised with multiple awards, including for his commitment to pedagogical innovation and teaching at ORT University Uruguay.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Mario Chong-->
    <div class="modal coordinators-modal fade" id="coordinatorsModalChong" tabindex="-1" aria-labelledby="coordinatorsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>              
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="text-align: justify;">

                    <p class="lh-sm mx-2">
                        Associate Dean of Innovation & Design Engineering, Faculty of Engineering Professor, Study Center of China & Asia Pacific Member (CECHAP), Research Center Member (CIUP); Universidad del Pacífico. IEEE Senior Member. Horizon Europe National Contact Point. Stanford WIDS Ambassador. PANAMSTR Board Member. IEEE Edunine Board Member. POMS HOCM Member.
                        <br>PhD in Business Management (UNMSM). Master in industrial engineering, Master in Systems Engineering, and Industrial Engineer (UL). Advanced Supply Chain Management (MIT) certification. VREF Advanced Studies on Sustainable Urban Freight Systems (RPI).
                        <br>Former business engineering associate dean, special projects coordinator, development director, master's degrees in business administration (MBA), global business, food and agribusiness, and supply chain management academic director; Universidad del Pacífico.
                        <br><a href="https://faculty.up.edu.pe/en/persons/mario-gustavo-chong-chong">
                        https://faculty.up.edu.pe/en/persons/mario-gustavo-chong-chong
                        </a>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Maria Isabel Pozzo-->
    <div class="modal coordinators-modal fade" id="coordinatorsModalMariaIsabel" tabindex="-1" aria-labelledby="coordinatorsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>              
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="text-align: justify;">

                    <p class="lh-sm mx-2">
                        María Isabel Pozzo is a Teacher, Professor, Licentiate and Doctor in Educational
                        Sciences graduated at National University of Rosario, Argentina and Master from Barcelona
                        University, Spain. She is currently a Full Professor at the National University of Rosario;
                        Principal Investigator of the National Scientific and Technical Research Council of Argentina,
                        and Director of Specialization and Master Programs in University Teaching at the National
                        Technological University, Rosario Faculty, Argentina. She delivers numerous postgraduate
                        courses related to research methodology and thesis writing at different Higher Education
                        Institutions and Programs in Engineering, Medicine, Psychology, and Veterinarian. She has
                        been granted with international scholarships for research and/or teaching stages in
                        Universities of Spain, Belgium, Canada, Italy, Brazil, and Denmark. Dr. Pozzo has coordinated
                        several research projects, is intensely active as supervisor and evaluator of theses, researchers,
                        and research projects. Author of numerous Conference papers and keynote presentations,
                        journal articles and books, and member of the Scientific Committee of international
                        conferences and academic journals. Keynote (ICBL Cuba 2019, EDUCON 2021 Austria), panelist
                        (SITED Brazil 20219, WEEF-GEDC Spain 2021) and workshop presenter (EDUNINE Argentina
                        2018, Peru 2019 &amp; 2022) in Engineering Education Conferences. Researcher at Erasmus+
                        VISIR+ Project cofounded by the European Commission. Member of the Executive Committee
                        of International Association of Online Engineering (IAOE).
                        Her areas of interest are Engineering Education, university didactics (graduate and
                        postgraduate level), scientific skills development &amp; research training, academic literacy in
                        native and foreign languages, ICT &amp; education, and intercultural education.
                        <br><strong>ORCID:</strong>
                        <a href="https://orcid.org/0000-0003-0186-0910">
                        https://orcid.org/0000-0003-0186-0910
                        </a>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Rafael Rentería-->
    <div class="modal coordinators-modal fade" id="coordinatorsModalRafael" tabindex="-1" aria-labelledby="coordinatorsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>              
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="text-align: justify;">

                    <p class="lh-sm mx-2">
                        Rafael Ricardo Rentería Ramos is a researcher and innovation manager with extensive experience in linking science, technology, and digital transformation to foster social, territorial, and organizational development. His work has focused on strengthening the relationship between applied research, high-quality academic training, and sustainability, generating measurable impact on both regional and national competitiveness.
                        He has led strategic research projects in data analytics, artificial intelligence, and open innovation, with emphasis on agri-food supply chains, energy management, and digital ecosystems. Among his most significant contributions are the consolidation of a Human Rights Analytics Center, the design of technological and postgraduate academic programs recognized for their relevance and quality, and the creation of dual training models and international certification frameworks.
                        His scientific contributions are reflected in articles, strategic plans, and innovation models recognized through competitive research calls and by leading higher education institutions. He has received academic awards and institutional distinctions for his ability to lead interdisciplinary projects, drive the adoption of exponential technologies in higher education, and promote sustainability through innovation.
                        His achievements include directing research groups to obtain official recognition from Minciencias, advising public and private organizations on digitalization and knowledge management, and training human talent in innovation, business intelligence, and foresight.
                        His career positions him as a benchmark in applied research and innovation, with strategic vision, ethical commitment, and the ability to integrate the quadruple helix to generate transformative and sustainable solutions.

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Roberto Portillo-->
    <div class="modal coordinators-modal fade" id="coordinatorsModalRoberto" tabindex="-1" aria-labelledby="coordinatorsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>              
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="text-align: justify;">

                    <p class="lh-sm mx-2">
                        Roberto Portillo began his involvement in engineering education as an undergraduate student. Due to his academic performance and interpersonal skills, one of his mathematics professors requested him to be a teaching assistant. Since then, he has discovered his vocation as an educator and has become increasingly involved in education. In addition to being a professor, he serves as the head of the Academic Support Department at Galileo University. He has a Bachelor of Science in Electronics and Computer Science from Galileo University, Guatemala, and a Master of Science in Operations Research from the same university. His involvement with the Education Society began with presenting research papers at EDUCON 2017 and EDUNINE 2019, where he received the best paper award. He continued with a more significant commitment to technically support EDUNINE as a conference chair in the 2021 virtual conference, where he received the prestigious Meritorious Service Award. Award for outstanding and continued service to engineering education. In 2022 and 2023, he served as a conference support chair, and in 2024, he successfully organized the conference venue at Galileo University. Besides, in his commitment to research advances in science and technology, he acts as a National Contact Point (NCP) in the CELAC (Community of Latin American Countries) group for the SENACYT (National Secretariat of Science and Technology), promoting research infrastructure collaborations between countries in Latin America and the European Union (EU).
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Orlando-->
    <div class="modal coordinators-modal fade" id="coordinatorsModalOrlando" tabindex="-1" aria-labelledby="coordinatorsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="coordinatorsModalLabel">Short Bio</h1>              
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center" style="text-align: justify;">

                    <p class="lh-sm mx-2">
                        Dr. Orlando Fittipaldi is Professor of Classical History with habilitation in the Greco-Roman period. 
                        He holds degrees in both History and Business Administration, combining academic expertise with extensive 
                        experience in management and research. With over 35 years of experience as CEO of Fittipaldi Enterprise, 
                        Prof. Fittipaldi led several research initiatives, including developments in the automotive sector. 
                        His leadership bridged the gap between technical innovation and strategic business planning. 
                        In recent years, he transitioned into academia and research administration, becoming the Technical Administrative 
                        Director of COPEC – Science and Education Research Organization. In this role, he has played a crucial part in 
                        managing the financial and operational coordination between COPEC and various international research institutions. 
                        These include the World Organization for Systems Engineering and Information Technology (WCSEIT), Safety Health 
                        and Environment Research Organization (SHERO), World Communication and Arts Organization (WCCA), and the International 
                        Council for Engineering and Technology Education (INTERTECH). Prof. Fittipaldi has also served as the financial 
                        administrator for several major projects led by COPEC over the past three years, ensuring transparency, efficiency, 
                        and strategic alignment of resources.His unique background in both classical scholarship and enterprise management 
                        makes him a valuable contributor to interdisciplinary research and international collaboration across educational, 
                        scientific, and technological fields. "Recently appointed as Financial Administrator at the International Institute 
                        of Education (IIE), with a mandate to enhance the organization's financial sustainability."
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- VENUE section -->
    <section id="venue">
        <!-- v title section -->
        <div class="venue-hero">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="venue-title">Conference Venue Information</h1>
                        <p class="venue-subtitle">We are pleased to provide the following details about the venue for the upcoming conference</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container-fluid py-3 bg-White">
            <div class="row">
                <div class="col">
                    <!-- Institution Card -->
                    <div class="modern-card position-relative mb-4">
                        <div class="institution-header">
                            <div class="institution-logo-container">
                                <img src="../images/logos_special/LogoTec2.png" alt="Tecnológico de Monterrey Logo">
                            
                            </div>
                            <div>
                                <h2 class="institution-name">Tecnológico de Monterrey</h2>
                                <p class="institution-founded">Founded in 1943 • 80 years of excellence</p>
                            </div>
                        </div>
                        
                        <div class="modern-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="campus-description">
                                        <strong>Tecnológico de Monterrey</strong> was founded in 1943 thanks to the vision of Don Eugenio Garza Sada and a group of entrepreneurs who formed a non-profit association called Enseñanza e Investigación Superior, A. C.
                                    </p>
                                    <p class="campus-description">
                                        <strong>Tecnológico de Monterrey</strong> is a private, non-profit, independent institution with no political and religious affiliations, dedicated to driving the development of communities and the nation through quality higher education.
                                    </p>
                                    <a href="https://tec.mx/en/" class="border-white btn btn-primary btn-sm" role="button">
                                        More Information about Tecnológico Monterrey
                                    </a>
                                </div>
                            </div>

                            <div class="highlights-grid">
                                <div class="highlight-item">
                                    <h3 class="highlight-title">Academic Excellence</h3>
                                    <p class="highlight-text">Supported by civil associations of outstanding leaders committed to quality higher education nationwide.</p>
                                </div>
                                
                                <div class="highlight-item">
                                    <h3 class="highlight-title">Community Support</h3>
                                    <p class="highlight-text">Enjoys strong support from the national community through scholarship programs and infrastructure investment.</p>
                                </div>
                                
                                <div class="highlight-item">
                                    <h3 class="highlight-title">Free University Status</h3>
                                    <p class="highlight-text">Holds the prestigious status of Free University School, enabling autonomous educational operations.</p>
                                </div>
                                
                                <div class="highlight-item">
                                    <h3 class="highlight-title">80 Years Legacy</h3>
                                    <p class="highlight-text">Eight decades of distinguished events and achievements that have shaped our institution's excellence.</p>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->

                    <!-- Campus Information -->
                    <div class="row mb-5">
                        <div class="col">
                            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="../images/decoration/universidadtecmonterrey.jpg" class="img-fluid h-100 object-fit-cover" alt="Tecnologico de Monterrey Campus">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body p-4">
                                            <h2 class="h3 mb-3">Mexico City Campus</h2>
                                            <p class="mb-4">Our conference will be held at the prestigious Mexico City campus, featuring state-of-the-art facilities and modern infrastructure designed to provide an exceptional academic and conference experience.</p>
                                            
                                            <div class="alert alert-success d-flex align-items-center mb-4">
                                                <i class="bi bi-bus-front me-2 fs-4"></i>
                                                <div>Free transportation will be provided from the recommended hotels in Mexico City to the campus.</div>
                                            </div>
                                            
                                            <div class="d-flex flex-wrap gap-2">
                                                <a href="https://tec.mx/en/ciudad-de-mexico-campus" class="btn btn-outline-primary">Campus Details</a>
                                                <a href="place.php" class="btn btn-outline-secondary">About the Venue & City</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Section -->
                    <div class="location-section">
                        <h2 class="campus-title text-center mb-4">Venue Location</h2>
                        
                            <div class="row g-4">
                                <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                                    <div class="address-card text center">
                                        <h3 class="address-title">Campus Address</h3>
                                        <div class="address-text">
                                            <strong>Mexico City Campus</strong><br>
                                            Calle del Puente #222<br>
                                            Col. Ejidos de Huipulco<br>
                                            Tlalpan C.P. 14380<br>
                                            México D.F., México
                                        </div>
                                    </div>
                                </div>

                        <div class="col-md-6">
                            <div class="map-container">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7531.8509441054875!2d-99.1458395864305!3d19.28560695435749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCalle%20del%20Puente%20%23222%20Col.%20Ejidos%20de%20Huipulco%2C%20Tlalpan%20C.P.%2014380%2C%20M%C3%A9xico%20D.F.!5e0!3m2!1sen!2sar!4v1747263668404!5m2!1sen!2sar" width="600" height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- END VENUE Section -->
       
   
    </main>

<!-- Footer section -->
<section id="organizers">
    <div class ="container-fluid">
        <?php include '../includesHtml/final.html' ?>
    </div> 
</section>
</main>
        <script src ="../js/datesFill.js?1"></script>
        <script src ="../js/readmorereadless.js"></script>
        <script src ="../js/backTop.js"></script>      
        <script src="../js/scheduleSection.js"></script>
        
        <!-- START SLICK CAROUSEL-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="../js/slick-carousel-config.js"></script>
        <!-- END  SLICK CAROUSEL--> 

        <!-- Bootstrap 5 JS (bundle) for CVs -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../js/pauseCoordinatorsSlider.js"></script>

    </body>
</html>                      