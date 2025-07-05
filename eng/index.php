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

        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

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
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">Top</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "edu9header.html" ?> 
        </div>
        <div class="#main"></div>
        <section id="top">

            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row align-items-baseline">
                            <div class="col-sm-9">
                                <div class="row justify-content-start">
                                    <div class="col-sm-10">  
                                        <h1 class="display-4 fw-bold">X IEEE World Engineering Education Conference</h1>
                                    </div> </div> </div>
                            <div class="col-sm-3 text-end">
                                <h4 class ="fw-bold">March 8-11, 2026</h4>
                                <h4 class ="fw-bold">Mexico City, Mexico</h4>                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class ="fw-bold">"Theme of the conference: To be assigned"</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <img class="img-fluid" src="../images/edunineBanner.jpg" alt="EDUNINE Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section -->
        <section class="primera">
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>About</li>
                </ul> 
            </div>
            <div class="container-fluid py-5">   
                <div class="row">
                    <div class="col-sm-12 text-sm-left">
                        <h2 class="display-5 fw-bold">About the Conference</h2>
                        <h4>A Premier Hybrid Experience</h4>
                        <p>We are pleased to invite you to contribute to the <b>X IEEE World Engineering Education Conference (EDUNINE2026)</b>, a leading international event that will take place in a hybrid format—both online and in person—at <b>Tecnológico de Monterrey</b> in <b>Mexico City, Mexico</b>, from <b>March 8 to 11, 2026</b>.</p>
                        <h4>Call for Papers</h4>
                        <p>We welcome original submissions in <b>English</b>, which will undergo a rigorous peer-review process, under the following categories within the field of interest of the <b>IEEE Education Society</b>:</p><ul>
                            <li><b>Category 1:</b> Implemented teaching techniques, classroom experience reports, or pedagogical tools (as full papers or work in progress papers)
                            </li><li><bCategory 2:</b> New curricula and educational program proposals, including regional or national adaptations (as full papers or work in progress papers)
                            </li><li><b>Category 3:</b> Educational research papers (as full papers or work in progress papers)
                            </li><li><b>Category 4:</b> Research-in-Development (RID) papers for doctoral students (as doctoral symposium papers).
                            </li><li><b>Category 5:</b> Workshop Proposal Papers for Online Pre-Conference Workshops, Plenary and Panel Proposal Papers.</li></ul>
                        <p>The <b>IEEE Education Society’s</b> field of interest encompasses the theory and practice of education and educational technology related to the effective delivery of knowledge in disciplines that fall within <b>IEEE’s</b> scope, such as engineering, computing, and technology-related fields.</p>
                        <p>Accepted papers that meet IEEE quality standards will be published in IEEE Xplore®. Each accepted paper must be presented orally at the conference by at least one registered author. Presentations may be delivered in <i>English</i>, <i>Spanish</i>, or <i>Portuguese</i>.<span id="dots">...</span></p><div id="more">
                            <h4>A Dynamic and Inclusive Program</h4>
                            <p><b>EDUNINE2026</b> addresses emerging trends and challenges in engineering, computing, and technology education. This year’s conference will explore its central theme in all its facets—how it transforms teaching and learning practices, reshapes the skills required by future professionals, and responds to the evolving demands of industries and societies.
                                The program features plenary talks, panel discussions, and special sessions designed to foster critical reflection and exchange on these topics. Discussions will engage with questions around the future of work, the alignment between education and societal needs, and how to better serve diverse and underserved populations through inclusive educational strategies.</p>
                            <p>In addition to parallel paper presentations and workshops, the conference will also host the EDUNINE Doctoral Symposium, providing a platform for doctoral students to share ongoing research and receive feedback from experts in the field.</p>
                            <h4>Accessibility and Inclusivity</h4>
                            <p>The hybrid format ensures that all participants—regardless of location—can fully engage in the conference. Whether attending virtually or onsite, everyone has the opportunity to participate, learn, and contribute.</p>
                            <h4>An Engaging Conference Atmosphere</h4>
                            <p>Beyond the academic program, <b>EDUNINE2026</b> offers a vibrant environment for connection and informal exchange. Enjoy hybrid coffee breaks, brunch meetups, cultural activities, and pre-conference tours designed to foster community and collaboration. These experiences enrich the academic dialogue and reflect the diversity and vitality of our international community.</p>
                            <h4>A Conference with Impact</h4>
                            <p><b>EDUNINE</b> is an integral part of the <b>IEEE Education Society's</b> family of regional conferences, alongside <b>FIE</b>, <b>EDUCON</b>, and <b>TALE</b>. These events are recognized as premier venues for advancing global dialogue, research, and innovation in education.</p>
                            <p><b>Join Us</b></p>
                            <p>Be part of <b>EDUNINE2026</b>—a forum where ideas converge, knowledge grows, and meaningful connections are made. Through an engaging program of papers, plenaries, panels, and special sessions, the conference will examine the challenges and opportunities that define the future of engineering and technology education. We look forward to your participation in this timely and impactful event.</p>
                        </div>
                        <button class="border-white btn btn-primary btn-sm" onclick="changeReadMore()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
        </section> 
        <!-- Timeline section -->
        <section id="dates">
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li>Conference_Schedule_and_Important_Dates</li>
                </ul> 
            </div>
            <div class="container-fluid py-5 bg-body-secondary">
                <div class="row">
                    <div class="col-sm-12 text-sm-left">
                        <h2 class="display-5 fw-bold">Conference Schedule and Important Dates: </h2>               <p>Stay informed about key milestones and deadlines throughout the conference with our comprehensive timeline, ensuring you don't miss any important stages.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class= "container-fluid tope  pb-5">
                    <!-- Composing your Paper and submission -->                         
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
                    <!-- Peer review notification -->
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
                    <!-- X --> 
                    <hr class="bg_white">
                    <!-- Final Paper submission -->
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
                    <!-- X --> 
                    <hr class="bg_white">
                    <!-- Second Review Notification -->
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
                    <!-- X -->  
   <hr class="bg_white">
                    <!-- Registration Fees and Periods -->
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
                    <!-- X -->                     
 <hr class="bg_white">
                    <!-- Get ready for the Conference -->
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
                    <!-- X -->
                    <hr class="bg_white">
                    <!-- Conference -->
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
                    <!-- X --> 
                       <hr class="bg_white">
                    <!-- Post Conference -->
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
                    <!-- X -->          
                </div>


            </div>           
        </section>         
<!-- Coordinators section -->
<section id="coordinators">
    <div class="container-fluid align-content-start py-0">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li>Coordinators</li>
        </ul> 
    </div>
    <div class="container-fluid py-5"> 
        <div class="row">
            <div class="col-sm-12 text-sm-left">
                <h2 class="display-5 fw-bold">Coordinators</h2> 
                <p>Meet the coordinators of our conference: dedicated professionals committed to ensuring a seamless and enriching experience for all participants.</p>
                <div class="album py-5 rounded-5 text-center"> 
                    <div class="container-fluid">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_molina.jpg" alt="José Martín Molina Espinosa" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div>
                                   <h6 class="card-text">José Martín Molina Espinosa<br>Conference Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_molina">
                                            <input type ="hidden" name="position" value="Conference Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_brito.jpg" alt="Claudio R. Brito" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Claudio R. Brito<br>General Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">    
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_brito">
                                            <input type ="hidden" name="position" value="General Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_ciampi.jpg" alt="Melany Ciampi" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Melany M. Ciampi<br>Co-Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_ciampi">
                                            <input type ="hidden" name="position" value="Co-Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="#" alt=" " class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">To be assigned<br>Awards Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="">
                                            <input type ="hidden" name="position" value="Awards Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="#" alt=" " class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">To be assigned<br>Technical Program Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="">
                                            <input type ="hidden" name="position" value="Technical Program Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_luna.jpg" alt="Ana Luna" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Ana Luna<br>Technical Program Co-Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_luna">
                                            <input type ="hidden" name="position" value="Technical Program Co-Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_da_silva.jpg" alt="Agatha da Silva Ovando" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Agatha da Silva Ovando<br>Technical Program Co-Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <!--    <form action ="resume.php" method="POST">
                                                <input type ="hidden" name="name" value="dr_da_silva">
                                                <input type ="hidden" name="position" value="Technical Program Co-Chair">
                                                <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form> -->
                                        <p class="mb-0"> <a href="../../cv_congresses_en/dr_da_silva.pdf" class="border-white btn btn-primary btn-sm" role="button">View CV</a></p>           
                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100">
                                    <img src="../../cv_congresses_en/img/dr_adorjan.jpg" alt="Alejandro Adorjan" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                         <h6 class="card-text">Alejandro Adorjan Olivera<br>Technical PProgram Co-Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_adorjan">
                                            <input type ="hidden" name="position" value="Technical Program Co-Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form> 
                                    </div>
                                </div>
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_chong.jpg" alt="Mario Chong" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Mario Chong<br>Publication Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_chong">
                                            <input type ="hidden" name="position" value="Publication Chair<br>Public Relations Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div> 
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_pozzo.jpg" alt="Maria Isabel Pozzo" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Maria Isabel Pozzo<br>Doctoral Symposium Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_pozzo">
                                            <input type ="hidden" name="position" value="Doctoral Symposium Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div> 
                            </div>
                           <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_renteria.jpg" alt="Rafael Renteria" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Rafael R. Rentería Ramos<br>Workshops Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <!-- <form action ="resume.php" method="POST">
                                             <input type ="hidden" name="name" value="dr_renteria">
                                             <input type ="hidden" name="position" value="Workshops Chair">
                                             <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form> -->
                                        <p class="mb-0"> <a href="../../cv_congresses_en/dr_renteria.pdf" class="border-white btn btn-primary btn-sm" role="button">View CV</a></p>    
                                    </div>
                                </div> 

                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_portillo.jpg" alt="Roberto Portillo" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Roberto Portillo<br>Conference Support Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_portillo">
                                            <input type ="hidden" name="position" value="Conference Support Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div>  
                            </div>                                   
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_chong.jpg" alt="Mario Chong" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Mario Chong<br>Public Relations Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_chong">
                                            <input type ="hidden" name="position" value="Publication Chair<br>Public Relations Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div> 
                            </div>
                            <div class="col align-items-center">
                                <div class="card  person w-100 h-100">
                                    <img src="../../cv_congresses_en/img/dr_fittipaldi.jpg" alt="Orlando Fittipaldi" class="img-fluid rounded-circle mx-auto d-block" style="height:125px; width:95px" >
                                    <div class="card-body text-center d-flex flex-column">
                                        <h6 class="card-text">Orlando Fittipaldi<br>Finance/Treasurer Chair</h6>
                                    </div>
                                    <div class="card-footer mt-auto d-flex flex-column">
                                        <form action ="resume.php" method="POST">
                                            <input type ="hidden" name="name" value="dr_fittipaldi">
                                            <input type ="hidden" name="position" value="Finance/Tresurer Chair">
                                            <button class="border-white btn btn-primary btn-sm" type="submit">View CV</button> </form>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section> 
<!-- Venue section -->
<section id="venue">
    <div class="container-fluid align-content-start py-0">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li>Venue_and_Host_Institution</li>
        </ul> 
    </div>
    <div class="container-fluid py-5 bg-body-secondary">
        <div class="row">
            <div class="col text-sm-left">
                <h2 class="display-5 fw-bold">Conference Venue Information</h2>
                <p>We are pleased to provide the following details about the venue for the upcoming conference, described below.</p>
                <h4><img class="img-fluid card-img-center" src="../images/logos_special/logo_Tec2.png" alt="Tecnologico de Monterrey"> Tecnológico de Monterrey</h4>
                <div class="row">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <img class="col-5 p-2 rounded float-sm-start" src="../images/decoration/TecMonterreyCCM.jpg" alt="Tecnologico de Monterrey">
                            <p><b>Tecnológico de Monterrey</b> was founded in 1943 thanks to the vision of Don Eugenio Garza Sada and a group of entrepreneurs who formed a non-profit association called Enseñanza e Investigación Superior, A. C.</p>

                            <p><b>Tecnológico de Monterrey</b> is a private, non-profit, independent institution with no political and religious affiliations.</p>

                            <p>The work of <b>Tecnológico de Monterrey</b> and all its campuses is supported by civil associations made up of a numerous group of outstanding leaders from all over the country who are committed to quality in higher education.</p>

                            <p>Every year, the board members of these civil associations meet to define the goals that will guide the major decisions which will help <b>Tecnológico de Monterrey</b> to meet its objective of driving the development of communities and the nation.</p>

                            <p><b>Tecnológico de Monterrey</b> enjoys the support of the national community, which participates in the raffles organized by the institution itself to expand its scholarship program and investment in infrastructure.</p>

                            <p><b>Tecnológico de Monterrey</b> enjoys the status of Free University School, which enables it to function as an educational institution.</p>

                            <p>These are some of the main events that distinguish our Institution 80 years after the foundation of Tecnológico de Monterrey.</p>                    
                            <p class="text-end"><a href="https://tec.mx/en/" class="border-white btn btn-primary btn-sm" role="button">More Information about Tecnológico Monterrey</a> </p>
                            <p>Conference Venue: Campus Ciudad de México. Free transportation will be provided from the recommended hotels in Mexico City to the campus.<span><a href="https://tec.mx/en/ciudad-de-mexico-campus" class="border-white btn btn-primary btn-sm" role="button">More Information about Campus Ciudad de México</a></span></p>

                            <p class="text-end"><a href="place.php" class="border-white btn btn-primary btn-sm" role="button">More Information about the venue and city</a></p> 
                            <p class= "text-center">Campus Ciudad de México: Calle del Puente #222 Col. Ejidos de Huipulco, Tlalpan C.P. 14380, México D.F., México </p>
                        </div>
                    </div>
                </div>
                <div class="p-4 d-flex justify-content-center mb-4 w-100">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7531.8509441054875!2d-99.1458395864305!3d19.28560695435749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCalle%20del%20Puente%20%23222%20Col.%20Ejidos%20de%20Huipulco%2C%20Tlalpan%20C.P.%2014380%2C%20M%C3%A9xico%20D.F.!5e0!3m2!1sen!2sar!4v1747263668404!5m2!1sen!2sar" width="600" height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    </div>       
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- Organization section -->
<section id="org">
    <div class="container-fluid align-content-start py-0">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Organizational_Institutions</li>
        </ul> 
    </div>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12 text-sm-left">
                <h2 class="display-5 fw-bold">Organizational Institutions</h2>
                <p>We are honored to introduce the esteemed institutions that form the backbone of our organization.</p>
            </div>
        </div>
        <div class="py-2 border rounded-5 bg-light">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2 justify-content-center">
                    <div class="col-sm-4 card person bg-transparent small text-center text-muted">
                        <div class="card-body d-flex flex-column">                                    
                            <img class="img-fluid card-img-center" src="../images/logos_special/IEEE_EdSocT.png" alt="IEEE EdSoc">             
                            <div class="card-title"><h6><strong>SPONSOR</strong></h6></div>
                            <div class="card-link"><a href="http://ieee-edusociety.org/">IEEE Education Society</a></div>
                        </div>
                    </div>
                    <div class="col-sm-4 card person bg-transparent small text-center text-muted">
                        <div class="card-body d-flex flex-column"> 
                            <img class="img-fluid card-img-center" src="../images/logos_special/logo_copecT.png" alt="COPEC">
                            <div class="card-title"><h6><strong>SPONSOR & ORGANIZER</strong></h6></div> 
                            <div class="card-link"><a href="http://www.copec.eu/">Science and Research Organization</a></div>
                        </div>
                    </div>
                    <div class="col-sm-4 card person bg-transparent small text-center text-muted">
                        <div class="card-body d-flex flex-column"> 
                            <img class="img-fluid card-img-center" src="../images/logos_special/logo_Tec2T.png" alt="Tecnológico de Monterrey" >
                            <div class="card-title"><h6><strong>HOST</strong></h6></div> 
                            <div class="card-link"><a href="https://tec.mx/en/">Tecnológico de Monterrey</a></div>
                        </div>
                    </div>
                </div>
            <br />  
                 <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-2 justify-content-center">
                <div class="col-sm-2 card person bg-white">
                    <a href="https://iieducation.eu/">
                        <img class="img-fluid card-img-center" src="../images/logos_special/logo_iieT.png" alt="logo IIEducation" /></a>
                </div>
                <div class="col-sm-2 card person bg-white">
                    <a href="https://confedi.org.ar/">
                        <img class="img-fluid card-img-center" src="../images/logos_special/logo_confediT.png" alt="logo CONFEDI" /></a>
                </div>
                <div class="col-sm-2 card person bg-white">
                    <a href="http://www.asibei.net/">
                        <img class="img-fluid card-img-center" src="../images/logos_special/logo_asibeiT.png"  alt="logo ASIBEI" /></a>
                </div>
                <div class="col-sm-2 card person bg-white">
                    <a href="https://www.up.edu.pe/la-universidad">
                        <img class="img-fluid card-img-center" src="../images/logos_special/logo_UPT.png"  alt="logo UP" /></a>
                </div>
                <div class="col-sm-2 card person bg-white">
                    <a href="https://www.galileo.edu/">
                        <img class="img-fluid card-img-center" src="../images/logos_special/logo_UGalileoT.png"  alt="logo U. Galileo" /></a>
                </div>
                <div class="col-sm-2 card person bg-white">
                    <a href="https://www.ufasta.edu.ar/ingenieria/">
                        <img class="img-fluid card-img-center" src="../images/logos_special/logo_FI_UFASTAT.png"  alt="logo FI_UFASTA" /></a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Footer section -->
<div class ="container-fluid">
    <!-- footer  -->
    <?php include "../includesHtml/final.html" ?> 
</div>
<script src ="../js/datesFill.js?1"></script>
<script src ="../js/readmorereadless.js"></script>
<script src ="../js/backTop.js"></script>      
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>                      