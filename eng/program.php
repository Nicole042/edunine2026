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
        <title> EDUNINE2026 English Website: Conference Programs and Awards</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet">
        <link href= "../css/program-php.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

    </head>
    <body onload = "jump()">  
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

        <section id="top" class="inicial">
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li>Conference</li>
                </ul> 
            </div>

            <!-- CONTENEDOR PRINCIPAL -->
            <div class="container-fluid py-5 bg-light">
            <div class="row align-items-center g-5">

                <!-- IMAGEN -->
                <div class="col-lg-5 text-center">
                <img src="../images/decoration/conference.jpg" class="img-fluid rounded-4 shadow" alt="Conference Image">
                </div>

                <!-- CONTENIDO CON FECHAS INTERACTIVAS -->
                <div class="col-lg-7">
                <h2 class="display-5 fw-bold mb-4 text-primary">Conference Event!</h2>
                <p class="fs-5 text-muted">
                    EDUNINE2026 offers more than just exceptional sessions. We've designed a vibrant program with pre-conference activities that enhance your experience and deepen engagement with the theme.
                </p>

                <!-- FECHAS EN LÍNEA -->
                
                    <div class="d-flex flex-wrap gap-5 my-4 justify-content-start">
                        <div class="event-date-box" data-title="Cultural Immersion Tour" data-desc="Explore local culture with fellow participants." data-color="primary">
                        <span>Sat, Mar 7</span>
                        </div>
                        <div class="event-date-box" data-title="Pre-Conference Workshop" data-desc="Hands-on sessions with leading educators." data-color="success">
                        <span>Sun, Mar 8</span>
                        </div>
                        <div class="event-date-box" data-title="Main Conference & Awards" data-desc="Keynotes, presentations, networking & awards." data-color="warning">
                        <span>Mar 9–11</span>
                        </div>
                    </div>

                <!-- ÁREA DE DETALLES AL HACER HOVER -->
                <div id="event-info-box" class="p-4 rounded-3 shadow-sm bg-white border border-2 border-opacity-10" style="display: none;">
                    <h5 class="fw-bold" id="event-title"></h5>
                    <p class="mb-0 text-muted" id="event-desc"></p>
                </div>

                <p class="fs-5 mt-4"> Use the index below to explore each opportunity and plan your perfect EDUNINE experience!</p>
                </div>
            </div>
            </div>


        </section>

        <!-- Pre-Conference tour -->
    inicio<section id="tour" class="bg-light pt-5">
    <div class="container pb-0">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent px-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?id=dates">Author</a></li>
            <li class="breadcrumb-item"><a href="program.php">Conference</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pre-Conference Tour</li>
        </ol>
        </nav>
    </div>

    <div class="container pb-5">
        <div class="row g-4 align-items-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <img src="../images/decoration/preConfTour.jpg" class="img-fluid" alt="Pre-conference Tour Image">
            </div>
        </div>
        <div class="col-md-7">
            <div class="card bg-white shadow-sm rounded-4 p-4 border-0 h-100">
            <h4 class="fw-bold text-primary mb-2">Saturday, March 7: Pre-Conference Tour</h4>
            <h6 class="fw-semibold text-secondary">Join Us for a Special Pre-Conference Tour in Mexico City!</h6>
            <p class="mt-3">Before the conference officially begins, take part in an unforgettable cultural experience offered by Tecnológico de Monterrey. Explore iconic sites, connect with fellow attendees, and enjoy a delicious local lunch (at your own expense).</p>
            <p class="text-danger fw-semibold">⚠ Spots are limited — check the timeline for the registration deadline!</p>
            </div>
        </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="card bg-white shadow-sm rounded-4 p-4 border-0">
        <h4 class="fw-bold text-primary"> Discover Mexico City!</h4>
        <p>Kick off your conference experience with a <strong>Pre-Conference Tour</strong> exploring the rich culture and history of <strong>Mexico City</strong>! This guided excursion, offered by the host institution, <strong>Tecnológico de Monterrey</strong>, includes a stop for a traditional Mexican lunch at a renowned local restaurant. <em>Lunch is at your own expense.</em></p>

        <p>It’s a perfect opportunity to connect with fellow participants in a relaxed and informal setting before the official conference sessions begin.</p>

        <div class="info-highlight">
        <h6> Tour Highlights</h6>
        <p>A detailed itinerary with featured stops and activities will be announced soon. Stay tuned!</p>
        </div>

        <div class="info-highlight">
        <h6 id="registration-title">Registration Deadline</h6>
        <p>The registration due date for the tour is listed in the <strong>Conference Timeline</strong> section of the website.</p>
        <p>Registration will be open after the Final Paper Notification date.</p>
        </div>

        <p class="fst-italic text-muted"> Spaces are limited – early registration is recommended!</p>
        </div>
    </div>
    </section>
final

    <!-- Pre-conference Workshops -->

    <section id="pcworkshops">
        <div class="container-fluid align-content-start pt-5 pb-0">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?id=dates">Author</a></li>
                <li><a href="program.php">Conference</a></li>
                <li>Pre_Conference_Workshops</li>
            </ul> 
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/preConfWorkshops.jpg" alt="Pre-conference Workshops"> 
                        </div>
                        <h4 class="display-6 fw-bold">Sunday, March 8: Pre-Conference Online Workshops: A Catalyst for Deep Learning</h4>

                        <p class="fs-5 mb-4"><b>Embrace a dynamic learning experience</b> at EDUNINE2026's pre-conference workshops on Sunday, March 8th. Designed for a hands-on approach, these sessions provide an opportunity for immersive exploration of critical topics in higher education. Led by distinguished educators and researchers, each workshop incorporates interactive activities, reflective exercises, and collaborative discussions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 bg-body-secondary">   
            <div class="row">
                <div class="col-sm-12 text-sm-left">
                    <h6 class="display-6 fw-bold">Enhance Your Teaching Practice at EDUNINE2026!</h6>
                    <h5 class="fs-3 fw-bold">Why Should You Attend?</h5>

                    <ul><li class="lh-sm"><b>Deepen Your Knowledge:</b> Engage with focused discussions on key areas of pedagogy, research, or curriculum development.
                        </li><li class="lh-sm"><b>Refine Your Skills:</b> Acquire practical tools and strategies readily applicable to your teaching practice or scholarship of learning and teaching (SoTL).
                        </li><li class="lh-sm"><b>Foster Collaboration:</b> Network with fellow educators, share experiences, and build a vibrant professional community.</li></ul>

                    <h5 class="fs-3 fw-bold">Flexible Learning Format:</h5>

                    <p class="lh-sm">Workshops range from 1 to 4 sessions, each lasting a comprehensive 1 hour and 30 minutes. This flexible structure enables in-depth exploration while ensuring efficient time management.</p>

                    <h5 class="fs-3 fw-bold">Complimentary Access for Eligible Participants:</h5>

                    <p class="lh-sm">Attendance is <b>free of charge</b> for all registered conference participants, co-authors (unregistered), and members of the Tecnológico de Monterrey community. <b>EDUNINE will provide Certificates of Attendance</b> to all workshop participants.</p>

                    <h5 class="fs-3 fw-bold">Virtual Participation with Global Interaction:</h5>

                    <p class="lh-sm">Please note, due to university policy and building closures on Sundays, EDUNINE2026's pre-conference workshops will be held entirely online. All workshops will be live-streamed, and access links will be distributed via email a week prior to the event. Each session will dedicate time for interactive participation, fostering questions and global discussion among all attendees.</p>

                    <p class="lh-sm"><b>The detailed workshop program, including all sessions and activities, will be published on this section after the final paper due date.</b>
                        Don’t miss this opportunity to gain valuable insights and enhance your conference experience with our engaging pre-conference workshops!</p>
                    <h5 class="fs-3 fw-bold">Invest in Your Teaching Journey:</h5>

                    <p class="lh-sm">By participating in these workshops, you will gain valuable insights and resources to:</p><ul>

                        <li class="lh-sm">Elevate your teaching practice with innovative strategies.
                        </li><li class="lh-sm">Enrich your SoTL with contemporary knowledge and best practices.
                        </li><li class="lh-sm">Implement practical materials immediately impactful in your classroom.</li></ul>

                    <p class="lh-sm"><b>Embark on a transformative learning experience at EDUNINE2026!</b> </p>
                </div>
            </div>    
        </div>

</section>

<!-- Conference Program -->

<section id="program">
    <div class="container-fluid align-content-start pt-5 pb-0">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?id=dates">Author</a></li>
            <li><a href="program.php">Conference</a></li>
            <li>Conference_Program</li>
        </ul> 
    </div>
    <div class= "container-fluid tope  pb-5">
        <div class="row g-5">
            <div class= "col text-sm-left">
                <div class="clearfix">
                    <div class="text-center">
                        <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/confProgram.jpg"  alt="Conference Program Image"> 
                    </div>
                    <h4 class="display-6 fw-bold">Monday, March 9 to Wednesday, March 11: Conference Program</h4>
                    <p class="fs-5 mb-4"><b>Welcome to EDUNINE2026!</b> We are thrilled to invite you to participate in our dynamic three-day conference program designed to foster intellectual exchange and collaboration.  This comprehensive guide outlines everything you need to know about presenting your research, navigating the conference structure, and maximizing your learning and networking opportunities.  Whether you are joining us in person or online, EDUNINE2026 offers a wealth of engaging sessions, insightful presentations, and valuable interactions with colleagues from across the globe.  We look forward to welcoming you and embarking on this enriching learning journey together.</p>     
                </div>
            </div>    
        </div>
    </div>
    <div class="container-fluid py-3">
        <div class ="row">
            <div class= "col text-sm-left">
                <h6 class="display-6 fw-bold">EDUNINE2026 Conference Participation Information</h6>

                    <h5 class="fs-3 fw-bold">Oral Presentation Requirements</h5><ul>

                        <li><b>Mandatory Presentation:</b>  Acceptance of a paper for the conference proceedings necessitates an oral presentation (online or in-person) at the conference.
                        </li><li><b>Author Registration:</b> At least one author of each accepted paper must register for the conference by the designated registration deadline to ensure inclusion in the oral presentations schedule.  Please refer to <a href="fees.php" class="border-white btn btn-primary btn-md" role="button">Registration and Payment</a> for details.
                        </li><li><b>Presentation Options:</b>  Authors may choose to present their work in person or virtually.  Both in-person and online presenters will receive equal consideration and opportunities for engagement.  Further details are available at <a href="techSession.php" class="border-white btn btn-primary btn-md" role="button">Paper Presentation Guidelines</a>.
                        </li><li><b>Global Audience:</b> Each presentation will be accessible to a diverse audience of registered participants, both attending in-person and online. 
                        </li><li><b>Presentation Recordings:</b>  All oral presentations will be recorded for archival purposes.</li></ul>

                    <h5 class="fs-3 fw-bold">Language Requirements</h5><ul>

                        <li><b>Publication Language:</b>  To facilitate international dissemination, all papers submitted for publication in the IEEE Xplore® digital library must be written in <b>English</b>.
                        </li><li><b>Presentation Languages:</b>  To reflect the conference's regional focus, oral presentations may be delivered in <b>English, Portuguese, or Spanish</b>, the most widely spoken languages in Latin America.  Authors have the flexibility to choose their preferred presentation language.</li></ul>

                    <h5 class="fs-3 fw-bold">Technical Session Organization</h5>

                    <p class="lh-sm">Following author registration by one of the three deadlines, papers will be grouped into technical sessions based on thematic coherence, language of presentation, and delivery format (online or in-person).</p>

                    <h5 class="fs-3 fw-bold">Online Author Considerations</h5>

                    <p class="lh-sm">To ensure accessibility for online authors, presentations will be scheduled with consideration for both their local time zone and optimal alignment with the conference schedule (9 AM to 6 PM Montevideo time, UTC-3). This approach aims to balance providing authors with reasonable presentation times while maintaining the overall conference program for in-person attendees.</p>

                    <p class="lh-sm">After registering as a presenter, authors with specific time preferences or limitations are encouraged to submit them through a dedicated form  available on this website following the first registration deadline.  We will strive to accommodate these needs while prioritizing a smooth and unified conference experience for all participants.</p>

                    <h5 class="fs-3 fw-bold">Conference Structure</h5>

                    <p class="lh-sm">EDUNINE2026 offers a dynamic three-day program featuring a blend of virtual and in-person sessions.  These include:</p><ul>

                        <li><b>Plenary Sessions:</b>  Hear from leading experts in the field during prestigious keynote addresses.
                        </li><li><b>Panel Discussions:</b> Engage in stimulating discussions on key topics with diverse perspectives from distinguished panelists.
                        </li><li><b>Technical Sessions:</b>  Delve deeper into specific areas of expertise through focused oral presentations delivered by authors.
                        </li><li><b>Doctoral Symposium:</b>  Doctoral students showcase their research through dedicated presentations.
                        </li><li><b>Special Sessions:</b>  Participate in engaging social activities designed to foster connections among attendees.</li></ul>

                    <p class="lh-sm">Coffee breaks, lunch, and a welcome reception are graciously hosted by <b>Universidad ORT Uruguay</b> at the conference venue, open to all participants.  Online participants are particularly encouraged to join these virtual events, creating opportunities for interaction with their in-person colleagues.  All conference activities will be live-streamed for both online and in-person audiences.</p>

                    <h5 class="fs-3 fw-bold">A Forum for Collaboration</h5>

                    <p class="lh-sm">EDUNINE2026 serves as a platform for exploring critical themes within the ever-evolving educational landscape.  The conference fosters collaboration and knowledge exchange, providing an ideal space to share ideas, learn about recent developments, and build valuable professional connections with colleagues from around the world.</p>

                    <h5 class="fs-3 fw-bold">Awards</h5><ul>

                        <li><b>EDUNINE2026 Best Paper Awards:</b>  Recognize outstanding research contributions, nominated by reviewers, the Technical Program Committee, and the Awards Committee.
                        </li><li><b>EDUNINE2026 Recognition Awards and Meritorious Services Awards:</b>  Acknowledge exceptional service and contributions of individuals serving on EDUNINE's organizing committees.</li></ul>
                    <h5 class="fs-3 fw-bold">Building the Conference Program Together: Preliminary Program Release and Review</h5>

                    <p class="lh-sm">Following the close of registration (late Registration due date), a preliminary conference program will be distributed to all presenters. This program outlines the initial schedule and includes details of your presentation.</p>

                    <p class="lh-sm">To ensure a seamless and efficient conference experience, a collaborative review process will be implemented.  All presenters are encouraged to meticulously review the preliminary program and submit any necessary feedback or updates.  Your valuable input is essential in refining the schedule and ensuring optimal presentation placement.  Instructions for submitting feedback, including the opportunity to refine presentation details and indicate scheduling preferences, will be provided shortly.</p>

                    <p class="lh-sm">Following this collaborative review period, the final and definitive conference program will be established and published in this section.  This advanced program will provide you with ample time to plan your conference experience and optimize your participation opportunities.</p>

            </div>  
        </div>   
    </div>

</section>
 <!-- Conference Awards -->

    <section id="awards">
        <div class="container-fluid align-content-start pt-5 pb-0">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?id=dates">Author</a></li>
                <li><a href="program.php">Conference</a></li>
                <li>Conference_Awards</li>
            </ul> 
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/awards.jpg" alt="Pre-conference Workshops"> 
                        </div>
                        <h4 class="display-6 fw-bold">Wednesday, March 11th: EDUNINE2026 Conference Awards</h4>

                        <p class="fs-5 mb-4">The <b>EDUNINE2026 Committees</b> are proud to announce the recipients of the <b>2026 IEEE X World Engineering Education Conference (EDUNINE2026) Awards</b>.  These esteemed awards will be presented during a special ceremony at the <b>IEEE Education Society's flagship conference in Montevideo, Uruguay</b>. Award winners will be recognized in the official conference proceedings, published on IEEE Xplore and the conference website following the event. The ceremony will be held on the conference's final day (Wednesday).
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 bg-body-secondary">   
            <div class="row">
                <div class="col-sm-12 text-sm-left">
                    <h6 class="display-6 fw-bold">About the EDUNINE2026 Awards</h6>
                    
                    <ul><li class="lh-sm mb-2"><b>Best Paper Awards:</b> Acknowledge outstanding papers presented at <b>EDUNINE</b>, recognizing originality, technical merit, and contributions to the field of engineering education. Award nominations consider factors like research depth, relevance to the conference theme, clarity, and quality of oral presentations. Reviewers, the Technical Program Committee, and the Awards Committee nominate papers for these awards.
                        </li><li class="lh-sm"><b>Recognition Awards:</b> Honor the exceptional contributions of organizing committee members towards the success of the EDUNINE2026 conference with several awards. 
                       </li></ul>

                    <h5 class="fs-3 fw-bold">Stay Updated on Award Recipients</h5>

                    <p class="lh-sm">The complete list of award winners will be announced and published on this website following the awards ceremony.
</p>
                </div>
            </div>    
        </div>

</section>


<!-- Footer section -->
<div class ="container-fluid">
    <!-- footer  -->
    <?php include "../includesHtml/final.html" ?> 
</div>
<script src ="../js/readmorereadless.js"></script>
<script src ="../js/backTop.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>                      