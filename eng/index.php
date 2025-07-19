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
        <!-- Instead of the word Top, just upward arrow -->
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "edu9header.html" ?> 
        </div>
        <div class="#main"></div>

        <main>
        <!-- Home section -->
            <section id="top">
                <!-- Full-width image -->
                <div class="home-image-container">
                    <div class="home-text row">
                        <div class="col-sm-12">
                            <h1 class="display-4 fw-bold">X IEEE World Engineering</h1>
                            <h1 class="display-4 fw-bold">Education Conference</h1>
                            <h4 class="fw-bold">March 8-11, 2026 - Mexico City, Mexico</h4>
                            <h3 class="fw-bold">"Theme of the conference: To be assigned"</h3>
                        </div>
                    </div>
                    <img class="img-fluid w-100" src="../images/city/homeImage.jpeg" alt="EDUNINE Banner">
                </div>
            </section>
                <!-- About section -->
            <!--   
            <section class="primera">
                <div class="container-fluid align-content-start py-0">
                    <ul class="breadcrumb custom-breadcumb">
                        <li><a href="index.php">Home</a></li>
                        <li>About</li>
                    </ul> 
                </div>
            -->

            <!-- PARTE SUSAN INICIO -->
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
                        <a class="nav-link px-3 py-2 btn" href="#organizers">Organizers</a>
                        </li>
                        <!-- add/remove as needed
                        There was no link for venue?? It tended to disappear -->
                    </ul>
                </nav>
            <!-- PARTE SUSAN FIN -->

            <!-- ADDING ID SECTION TO REFERENCE IT USING A LINK FOR THE BREADCRUMB -->

            <section id="about">
                <div class="container-fluid px-0">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
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
                            </div>
                            <div class="carousel-item">
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
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
        
            <!-- Timeline section -->
            <!-- <section id="dates">
                <!- <div class="container-fluid align-content-start py-0">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?id=dates">Author</a></li>
                        <li>Conference_Schedule_and_Important_Dates</li>
                    </ul> 
                </div> -->

            <section id="dates">
                <div class="container-fluid text-center py-5">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h2 class="display-5 fw-bold">Conference Schedule and Important Dates </h2>
                            <p class="fs-5 text-center mx-auto px-5">Stay informed about key milestones and deadlines throughout the conference with our comprehensive timeline, ensuring you don't miss any important stages.</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class= "container-fluid tope  pb-5">
                                            
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid" src="../images/decoration/paperComposition.jpg"  alt="Manuscript Composition and Submission"> 
                            
                                    <h4 class="fw-bold">Composing your Conference Paper and Submission</h4>
                                    <p class="fs-6 mb-4"> Find key information on paper categories, formatting, themes, standards, and templates. Submit your original, unpublished work as a Full Paper, Work-in-Progress, Workshop Proposal, or Doctoral Symposium Paper. All submissions must be in English. Explore the links below for detailed information on submission categories, formatting guidelines, templates, and quality standards. Important deadlines for the paper categories are also listed. Be sure to review all requirements before submitting your work.</p>
                                    <p class="mb-0"><a href="doc/cfp.pdf" class="border-white btn btn-primary btn-sm" role="button">Call for Papers</a>
                                        <a href="information.php" class="border-white btn btn-primary btn-sm" role="button">Composing your Paper</a>
                                        <a href="information.php?id=suitable" class="border-white btn btn-primary btn-sm" role="button">Topics</a>
                                <a href="information.php?id=submission" class="border-white btn btn-primary btn-sm" role="button">Paper Submission</a></p> 
                                </div>
                                <div class="container-fluid mt-2">
                                    <div class="row">
                                        <div class="col-9 bg-light border text-secondary">
                                            <h5 class="text-center">Event</h5>
                                        </div>
                                        <div class="col-3 bg-light border text-secondary">
                                            <h5 class="text-center">Due Date</h5>
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
                        <hr class="bg-white">
                        
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerReview.jpg"  alt="Peer-Review Notification"> 
                                    <h4 class="fw-bold">Peer Review Notification and Conditional Acceptance</h4>
                                    <p class="fs-6 mb-4"> All submissions undergo <b>prescreening for scope and formatting</b>. Papers accepted after peer review must meet IEEE standards. <b>Conditionally accepted papers</b> require authors' improvements, resubmission and are subject to a second review by the Technical Program Committee (TPC) before final acceptance. Click below to learn more about the EDUNINE peer review process. The deadlines are also listed.</p>

                                    <p class="mb-0"><a href="reviewNotif.php" class="border-white btn btn-primary btn-sm" role="button">Peer Review Process Notification</a>
                                </div>
                                <div class="container-fluid mt-2">
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
                        
                        <hr class="bg_white">
                        
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid"
                                            src="../images/decoration/finalPaper.jpg"  alt="Final Paper Preparation and Submission Image">
                                    <h4 class="fw-bold">Final Paper Preparation and Submission</h4>
                                    <p class="fs-6 mb-4"> <b>All accepted papers</b> undergo a <b>second review</b> by the EDUNINE Program Committee before final acceptance.</p>
                                    <p class="fs-6 mb-4"><b>Conditionally accepted papers</b> have an earlier deadline and may be resubmitted multiple times for additional review rounds, allowing authors to address required improvements and reduce the risk of rejection. Following each submission of your final paper, you'll receive a summary via email detailing the review process conducted in line with the Final Paper Guidelines.</p>
                                    <p class="fs-6 mb-4">Regardless of acceptance type, all final papers must be submitted before the second review deadline. A final paper must fully comply with IEEE standards in terms of content, scope, English language quality, formatting (according to the provided templates), PDF creation through PDF eXpress, and copyright transfer to IEEE. Papers that do not meet these requirements will be rejected and cannot be published in IEEE Xplore. Prioritize the originality and plagiarism-free nature of your paper by utilizing a plagiarism checker. Once the copyright transfer is finalized and the paper clears all checks, it undergoes evaluation by IEEECrossCheck. For detailed guidelines on preparing your final paper, please click the link below.</p>
                                    <p class="mb-0"><a href="finalInformation.php" class="border-white btn btn-primary btn-sm" role="button">Final Paper Preparation and Submission</a>
                                </div>
                                <div class="container-fluid mt-2">
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
                    
                        <hr class="bg_white">
                        
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid"
                src="../images/decoration/notiFinalReview.jpg"   alt="Notification Second Review Image">
                                    <h4 class="fw-bold">Notification of Second Review</h4>
                                    <p class="fs-6 mb-4"> You'll receive a summary via email detailing the second review process conducted in line with the Final Paper Preparation Guidelines. This review will ensure compliance with quality standards for content, English, and format, as well as alignment of Paper uploaded information with the final paper, proper PDF generation through PDFeXpress, and successful completion of the copyright transfer.  Once the copyright transfer is finalized and the paper clears all checks, it undergoes evaluation by IEEECrossCheck. Final Papers Papers that do not meet these requirements will be rejected and cannot be published in IEEE Xplore. </p>
                                    
                                </div>
                                <div class="container-fluid mt-2">
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
                        
                <hr class="bg_white">
                        
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid"
                src="../images/decoration/registration.jpg"  alt="Registration Process Image">                                                <h4 class="fw-bold">Author and Participants (non-authors) Registration</h4>
                                    <p class="fs-6 mb-4">Attention <b>Authors</b>: To ensure your accepted final paper is published in the <b>IEEE Xplore®</b> digital library (please note that IEEE reserves the right to reject papers not meeting standards), registration and oral presentation at the conference are mandatory. Each author registration permits the presentation and publication of one paper, with the option to include an additional paper for an extra publication fee. Unpresented accepted papers cannot be submitted for publication in <b>IEEE Xplore®</b>.</p>
                                    <p class="fs-6 mb-4"><br>For <b>Authors</b> and <b>Participants (non-authors)</b>: Registration grants access to all conference sessions, workshops, tours, and other activities, both online and in-person. After the conference, certificates for participation and paper presentation will be issued. Registration fees vary based on Early, Normal, or Late deadlines. Payment options include credit card (PayPal) in Euros or bank transfer in Euros or U.S. Dollars. Registration will be provided post-acceptance notification. For further details, click the button below.</p>
                                    <p class="mb-0"><a href="fees.php" class="border-white btn btn-primary btn-sm" role="button">Registration and Payment (Authors and Participants)</a> 
                                    </p> 
                                </div>
                                <div class="container-fluid mt-2">
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
                                        
                <hr class="bg_white">
                        
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid" src="../images/decoration/sessionPresentation.jpg"  alt="Paper Presentation Guidelines Image">                          <h4 class="fw-bold">Presentation Guidelines & Session Chair Opportunities</h4>
                                        <p class="fs-6 mb-4">We invite all authors to carefully review the Paper Presentation Guidelines to ensure a smooth and successful participation in the conference. The guidelines include important information on timing, format (in-person or virtual), and technical requirements for your session.</p>
                                        <p class="fs-6 mb-4">In addition, if you are interested in serving as a Session Chair for the technical session in which your paper is scheduled, we welcome your involvement! This is a great opportunity to contribute to the conference community by helping facilitate presentations and discussions.</p>
                <p class="fs-6 mb-4">Please consult the guidelines and indicate your interest in chairing by following the instructions provided in the links below:</p>
                                    <p class="mb-0"><a href="techSession.php" class="border-white btn btn-primary btn-sm" role="button">Paper Presentation Guidelines</a> 
                                        <a href="techSession.php?id=chair" class="border-white btn btn-primary btn-sm" role="button">Session Chair Guidelines</a> 
                                    </p>                                                           </div>
                                <div class="container-fluid mt-2">
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
                        
                        <hr class="bg_white">
                        
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid" 
                        src="../images/decoration/conference.jpg" alt="Conference  Image">                                 <h4 class="fw-bold">Hybrid Conference</h4>
                                        <p class="fs-6 mb-4">Welcome to our conference! Alongside our exciting lineup of dates, we're thrilled to offer a diverse array of activities to enhance your experience. Click the buttons below to access the conference program (a detailed agenda will be available after registration), where you'll find detailed information on sessions and activities. Dive deeper into our pre-conference workshops for valuable insights and knowledge sharing. Plus, don't miss out on our pre-conference cultural immersion tour, a unique opportunity to explore and engage with the local culture. Get ready for an enriching and unforgettable event!</p>
                                <p class="mb-0"> <a href="program.php?id=tour" class="border-white btn btn-primary btn-sm" role="button">Pre-conference Tour Program</a></p>
                                <p> <a href="workshops.php?id=pcworkshops" class="border-white btn btn-primary btn-sm" role="button">Online Pre-conference Workshops Program</a> 
                                    <a href="program.php?id=program" class="border-white btn btn-primary btn-sm" role="button">Conference Program</a>
                                    <a href="program.php?id=awards" class="border-white btn btn-primary btn-sm" role="button">Conference Awards</a></p>
                                    <p class="mb-0"><a href="techSession.php" class="border-white btn btn-primary btn-sm" role="button">Paper Presentation Guidelines</a> 
                                        <a href="techSession.php?id=chair" class="border-white btn btn-primary btn-sm" role="button">Session Chair Guidelines</a></p>                                                           </div>
                                <div class="container-fluid mt-2">
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
                        <hr class="bg_white">
                    
                        <div class="row g-5">
                            <div class= "col text-sm-left">
                                <div class="clearfix">
                                        <img class="col-3 p-2 rounded float-sm-start img-fluid" 
                src="../images/decoration/postConference.jpg" alt="Final Paper Submission Process Image">                                <h4 class="fw-bold">Post Conference Products</h4>
                                        <p class="fs-6 mb-4"> Estimated Date of Post-Conference Products: Includes the publication of conference proceedings and issuance of author and participant certificates of participation.</p>
                                    <p class="mb-0"><a href="postConf.php" class="border-white btn btn-primary btn-sm" role="button">Post Conference Products</a></p>
                                                            </div>
                                <div class="container-fluid mt-2">
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
                </div>           
            </section> 
    <!-- Coordinators section -->

        <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <!--SECOND OPTION-->

    <section id="coordinators">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-4">Coordinators</h2>
            <div class="coordinators-slider">

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif" 
                    class="img-fluid rounded-circle mb-2" 
                    alt="Conference Chair">
                <div class="overlay-content">
                    <h6>José Martín Molina Espinosa</h6>
                    <text>Conference Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif" 
                    class="img-fluid rounded-circle mb-2" 
                    alt="General Chair">
                <div class="overlay-content">
                    <h6>Claudio R. Brito</h6>
                    <text>General Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif" 
                    class="img-fluid rounded-circle mb-2" 
                    alt="General Chair">
                <div class="overlay-content">
                    <h6>Melany M. Ciampi</h6>
                    <text>Co-Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif" 
                    class="img-fluid rounded-circle mb-2" 
                    alt="General Chair">
                <div class="overlay-content">
                    <h6>To be assigned</h6>
                    <text>Awards Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>To be assigned</h6>
                    <text>Technical Program Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Ana Luna</h6>
                    <text>Technical Program Co-Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Agatha da Silva Ovando</h6>
                    <text>Technical Program Co-Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Alejandro Adorjan Olivera</h6>
                    <text>Technical Program Co-Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Mario Chong</h6>
                    <text>Publication Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Maria Isabel Pozzo</h6>
                    <text>Doctoral Symposium Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Rafael R. Rentería Ramos</h6>
                    <text>Workshops Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Roberto Portillo</h6>
                    <text>Conference Support Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Mario Chong</h6>
                    <text>Public Relations Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <div class="slide image-hover text-center">
                <img src="../images/logos_cooperation/logo_sbc.gif"
                                class="img-fluid rounded-circle mb-2"
                                alt="Logo SBC">
            
                <div class="overlay-content">
                    <h6>Orlando Fittipaldi</h6>
                    <text>Finance / Treasurer Chair</text>
                    
                    <p class="mb-0"> 
                        <a href="../../cv_congresses_en/dr_da_silva.pdf" 
                        class="border-white btn btn-primary btn-sm" 
                        role="button">View CV</a>
                    </p> 
                </div>
            </div>

            <!-- …repeat one <div class="slide"> per person…-->
            </div>
        </div>
    </section>
   
    <!-- Organization section -->
    </main>

<!-- Footer section -->
<section id="organizers">
    <div class ="container-fluid">
        <!-- 
        <h2 class="display-5 fw-bold text-center mb-4">Organizers</h2>
        -->
        <?php include '../includesHtml/final.html' ?>
        <!--; was not important here -->
    </div> 
 </section>
    <script src ="../js/datesFill.js?1"></script>
    <script src ="../js/readmorereadless.js"></script>
    <script src ="../js/backTop.js"></script>      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- START SLICK CAROUSEL-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="../js/slick-carousel-config.js"></script>
    <!-- END  SLICK CAROUSEL-->   

</body>
</html>