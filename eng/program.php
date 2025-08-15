<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description"
        content="The IEEE World Engineering Education Conference - EDUNINE is the flagship annual conference for the IEEE Region 9 (Latin America and the Caribbean) of the IEEE Education Society. The EDUNINE international conference on Education in Engineering, Technology, Computer Science, and related topics, held every year in March in a different Latin American city,  is organized by  COPEC - Science and Education Research Organization. The conference program covers the main issues present in education today.">
    <meta name="Keywords"
        content="IEEE, COPEC, Education in Engineering, Technology, and Computer Science, STEM, Teaching, Learning, Higher Education, University Education, Educación en Ingeniería, Tecnología e Informática, Enseñanza, Aprendizaje, Educacion Superior, Educación Universitaria, Educação em Engenharia, Tecnologia e Informática, Ensino, Aprendizagem, Ensino Superior, Educação Universitária, Latin America and the Caribbean, Latinoamérica y el Caribe, América Latina e Caribe, Conference, Congress, Conferencia, Congreso, Conferência, Congresso">
    <meta name="author" content="COPEC">
    <meta name="copyright" content="COPEC">
    <title> EDUNINE2026 English Website: Conference Programs and Awards</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="../css/EDU9Conferences.css" rel="stylesheet">
    <link href="../css/program-php.css" rel="stylesheet">
    <link href="../css/edu9parts.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>


    <!-- These classes are required to enable clicks of the hamburger and navigation for cellphone -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!-- End needed classes for hamburger header and cellphone navigation -->

    <!-- SLICK FOOTER CAROUSEL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- END FOOTER SLICK CAROUSEL -->


</head>

<body onload="jump()">
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
            element.scrollIntoView({ block: "start" });
        }
    </script>
    <div class="container">
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">Top</button>
        <div>
            <!-- Navigation bar  -->
            <?php include "edu9header.html" ?>


            <section id="navigation" class="inicial">
                <!-- PARTE SUSAN INICIO -->
                <!-- New proposed breadcrumb -->
                <nav class="section-nav-breadcrumb" aria-label="Section navigation">
                    <ul class="d-flex justify-content-end list-unstyled mb-0">
                        <li class="nav-item mx-1">
                            <a class="nav-link px-1 py-2 btn" href="#tour">Pre-Conference Tour</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link px-1 py-2 btn" href="#pcworkshops">Pre-Conference Workshops</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link px-1 py-2 btn" href="#program">Conference Program</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link px-1 py-2 btn" href="#awards">Conference Awards</a>
                        </li>
                    </ul>
                </nav>

                <!-- PARTE SUSAN FIN -->
            </section>

            <!--Navigation for cellphones Susan's Idea-->
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="chevron-up-down" viewBox="0 0 16 18">
                    <!-- Up chevron -->
                    <path
                        d="M2.146 6.854a.5.5 0 0 1 .708 0L8 2.707l5.146 4.147a.5.5 0 0 1-.708.708L8 4.207 2.854 7.562a.5.5 0 0 1-.708-.708z" />

                    <!-- Down chevron -->
                    <path
                        d="M2.146 11.146a.5.5 0 0 1 .708 0L8 15.293l5.146-4.147a.5.5 0 0 1 .708.708l-5.5 5.5a.5.5 0 0 1-.708 0l-5.5-5.5a.5.5 0 0 1 0-.708z" />
                </symbol>
            </svg>


            <div class="container d-flex justify-content-center">
                <div class="dropdown d-navs d-sm-none">
                    <!--d-sm-none makes it not appear for screen higher than 575px width-->
                    <button class="btn dropdown-toggle d-flex align-items-center" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        On this page
                        <svg class="bi ms-2" width="16" height="16" fill="currentColor" aria-hidden="true">
                            <use xlink:href="#chevron-up-down"></use>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#top">Conference</a></li>
                        <li><a class="dropdown-item" href="#tour">Pre-Conference Tour</a></li>
                        <li><a class="dropdown-item" href="#pcworkshops">Pre-Conference Workshops</a></li>
                        <li><a class="dropdown-item" href="#program"> Conference Program </a></li>
                        <li><a class="dropdown-item" href="#awards">Conference Awards </a></li>
                    </ul>
                </div>
            </div>

            <!--End of Navigation for cellphones Susan's Idea-->

        </div>
        <div class="#main"></div>

        <section id="top" class="inicial">
            <!-- CONTENEDOR PRINCIPAL -->
            <div class="container-fluid">
                <div class="row align-items-center g-5">

                    <!-- IMAGEN -->
                    <div class="col-lg-5 text-center">
                        <img src="../images/decoration/conference.jpg" class="img-fluid rounded-4 shadow"
                            alt="Conference Image">
                    </div>

                    <!-- CONTENIDO CON FECHAS INTERACTIVAS -->
                    <div class="col-lg-7">
                        <h2 class="display-5 fw-bold mb-4 text-primary">Conference Event!</h2>
                        <p class="fs-5 text-muted">
                            EDUNINE2026 offers more than just exceptional sessions. We've designed a vibrant program
                            with pre-conference activities that enhance your experience and deepen engagement with the
                            theme.
                        </p>

                        <!-- FECHAS EN LÍNEA -->

                        <div class="d-flex flex-wrap gap-5 my-4 justify-content-start">
                            <div class="event-date-box" data-title="Cultural Immersion Tour"
                                data-desc="Explore local culture with fellow participants." data-color="primary">
                                <span>Sat, Mar 7</span>
                            </div>
                            <div class="event-date-box" data-title="Pre-Conference Workshop"
                                data-desc="Hands-on sessions with leading educators." data-color="success">
                                <span>Sun, Mar 8</span>
                            </div>
                            <div class="event-date-box" data-title="Main Conference & Awards"
                                data-desc="Keynotes, presentations, networking & awards." data-color="warning">
                                <span>Mar 9–11</span>
                            </div>
                        </div>

                        <!-- ÁREA DE DETALLES AL HACER HOVER -->
                        <div id="event-info-box"
                            class="p-4 rounded-3 shadow-sm bg-white border border-2 border-opacity-10"
                            style="display: none;">
                            <h5 class="fw-bold" id="event-title"></h5>
                            <p class="mb-0 text-muted" id="event-desc"></p>
                        </div>

                        <p class="fs-5 mt-4"> Use the index below to explore each opportunity and plan your perfect
                            EDUNINE experience!</p>
                    </div>
                </div>
            </div>


        </section>

        <!-- Pre-Conference tour -->
        <section id="tour" class="pt-5 bg-white">

            <div class="container pb-5">
                <h2 class="fw-bold text-primary mb-2">Saturday, March 7: Pre-Conference Tour</h2>
                <div class="row g-4 align-items-center">
                    <div class="col-md-5">
                        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                            <img src="../images/decoration/preConfTour.jpg" class="img-fluid"
                                alt="Pre-conference Tour Image">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card bg-white shadow-sm rounded-4 p-4 border-0 h-100">
                            <h6 class="fw-semibold text-secondary">Join Us for a Special Pre-Conference Tour in Mexico
                                City!</h6>
                            <p class="mt-3">Before the conference officially begins, take part in an unforgettable
                                cultural experience offered by Tecnológico de Monterrey. Explore iconic sites, connect
                                with fellow attendees, and enjoy a delicious local lunch (at your own expense).</p>
                            <p class="text-danger fw-semibold">⚠ Spots are limited — check the timeline for the
                                registration deadline!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pb-5">
                <div class="card bg-white shadow-sm rounded-4 p-4 border-0">
                    <h4 class="fw-bold text-primary"> Discover Mexico City!</h4>
                    <p>Kick off your conference experience with a <strong>Pre-Conference Tour</strong> exploring the
                        rich culture and history of <strong>Mexico City</strong>! This guided excursion, offered by the
                        host institution, <strong>Tecnológico de Monterrey</strong>, includes a stop for a traditional
                        Mexican lunch at a renowned local restaurant. <em>Lunch is at your own expense.</em></p>

                    <p>It's a perfect opportunity to connect with fellow participants in a relaxed and informal setting
                        before the official conference sessions begin.</p>

                    <div class="info-highlight bg-light">
                        <h6> Tour Highlights</h6>
                        <p>A detailed itinerary with featured stops and activities will be announced soon. Stay tuned!
                        </p>
                    </div>

                    <div class="info-highlight bg-light">
                        <h6> Registration Deadline</h6>
                        <p>The registration due date for the tour is listed in the <strong>Conference Timeline</strong>
                            section of the website.</p>
                        <p>Registration will be open after the Final Paper Notification date.</p>
                    </div>

                    <p class="fst-italic text-muted"> Spaces are limited – early registration is recommended!</p>
                </div>
            </div>
        </section>


        <!-- Pre-conference Workshops -->
        <section id="pcworkshops">

            <div class="container pb-5">
                <h2 class="fw-bold text-success">Sunday, March 8</h2>
                <div class="row align-items-center g-4">
                    <div class="col-lg-5">
                        <div class="rounded-4 shadow bg-white p-3">
                            <img src="../images/decoration/preConfWorkshops.jpg" class="img-fluid rounded-4"
                                alt="Pre-conference Workshops">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bg-white rounded-4 shadow p-4">
                            <h4 class="fw-semibold">Pre-Conference Online Workshops: A Catalyst for Deep Learning</h4>
                            <p class="fs-5 mt-3"><strong>Embrace a dynamic learning experience</strong> at EDUNINE2026's
                                pre-conference workshops on Sunday, March 8th. Designed for a hands-on approach, these
                                sessions provide immersive exploration of critical topics in higher education.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-white shadow rounded-4 p-4">
                            <h4 class=" text-dark fw-bold mb-3">Enhance Your Teaching Practice at EDUNINE2026!</h4>

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm hover-card">
                                        <div class="card-body">
                                            <h5 class="card-title text-success fw-bold">Deepen Your Knowledge</h5>
                                            <p class="card-text">Engage in key pedagogical discussions and curriculum
                                                development strategies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm hover-card">
                                        <div class="card-body">
                                            <h5 class="card-title  text-success fw-bold">Refine Your Skills</h5>
                                            <p class="card-text">Gain actionable tools for your teaching and SoTL.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100 border-0 shadow-sm hover-card">
                                        <div class="card-body">
                                            <h5 class="card-title  text-success fw-bold">Foster Collaboration</h5>
                                            <p class="card-text">Connect and share with global educators and
                                                researchers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <h5 class="fw-bold text-secondary">Flexible Learning Format</h5>
                            <p class="text-muted">1–4 sessions, each 90 minutes. In-depth yet efficient.</p>

                            <h5 class="fw-bold text-secondary">Complimentary Access</h5>
                            <p class="text-muted">Free for registered participants, co-authors, and Tec de Monterrey
                                community. Includes certificates.</p>

                            <h5 class="fw-bold text-secondary">Virtual Participation</h5>
                            <p class="text-muted">Online only. Live-streamed globally. Interactive Q&A and discussion
                                guaranteed.</p>

                            <h5 class="fw-bold text-secondary">Your Takeaway</h5>
                            <ul>
                                <li>Innovative teaching strategies</li>
                                <li>Contemporary SoTL insights</li>
                                <li>Ready-to-use class materials</li>
                            </ul>

                            <p class="fw-bold text-primary">Don't miss this opportunity to elevate your teaching!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Conference Program -->

        <section id="program">
            <!-- Intro Section -->
            <div class="container py-4">
                <h2 class="text-warning fw-bold mb-3">Monday, March 9 to Wednesday, March 11: Conference</h2>
                <div class="row align-items-center g-4">
                    <div class="col-lg-5">
                        <div class="rounded-4 shadow bg-white p-3">
                            <img src="../images/decoration/confProgram.jpg" alt="Conference Program Image"
                                class="img-fluid rounded-4 shadow">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bg-white rounded-4 shadow p-4">
                            <p class="fs-5 mb-0">
                                <strong>Welcome to EDUNINE2026!</strong> We are thrilled to invite you to participate in
                                our dynamic three-day conference program designed to foster intellectual exchange and
                                collaboration. This comprehensive guide outlines everything you need to know about
                                presenting your research, navigating the conference structure, and maximizing your
                                learning and networking opportunities. Whether you are joining us in person or online,
                                EDUNINE2026 offers a wealth of engaging sessions, insightful presentations, and valuable
                                interactions with colleagues from across the globe. We look forward to welcoming you and
                                embarking on this enriching learning journey together.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Information Cards Section -->
    <div class="container py-5">
        <h4 class="text-warning mb-4">Conference Participation Highlights</h4>
        <div class="row row-cols-1 row-cols-md-2 g-4">

            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 border-warning border-3 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-warning fw-bold">Oral Presentation Requirements</h5>
                        <ul class="lh-sm">
                            <li><strong>Mandatory Presentation:</strong> All accepted papers must be presented.
                            </li>
                            <li><strong>Author Registration:</strong> At least one author must register by the
                                deadline. <a href="fees.php" class="btn btn-sm btn-outline-warning mt-1">Registration
                                    and Payment</a>
                            </li>
                            <li><strong>Presentation Options:</strong> Online or in-person presentations
                                accepted. <a href="techSession.php"
                                    class="btn btn-sm btn-outline-warning mt-1">Presentation Guidelines</a></li>
                            <li><strong>Global Audience:</strong> All sessions are accessible to global
                                participants.</li>
                            <li><strong>Recordings:</strong> Presentations will be recorded.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 border-warning border-3 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-warning fw-bold">Language Requirements</h5>
                        <ul class="lh-sm">
                            <li><strong>Publication Language:</strong> English only for IEEE Xplore®.</li>
                            <li><strong>Presentation Languages:</strong> English, Portuguese, or Spanish.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 border-warning border-3 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-warning fw-bold">Technical Session Organization</h5>

                        <p class="lh-sm">Following author registration by one of the three deadlines, papers
                            will be grouped into technical sessions based on thematic coherence, language of
                            presentation, and delivery format (online or in-person).</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100 border-warning border-3 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-warning fw-bold">Online Author Considerations</h5>

                        <p class="lh-sm">To ensure accessibility for online authors, presentations will be
                            scheduled with consideration for both their local time zone and optimal alignment
                            with the conference schedule (9 AM to 6 PM Montevideo time, UTC-3). This approach
                            aims to balance providing authors with reasonable presentation times while
                            maintaining the overall conference program for in-person attendees.</p>
                        <p class="lh-sm">After registering as a presenter, authors with specific time
                            preferences or limitations are encouraged to submit them through a dedicated form
                            available on this website following the first registration deadline. We will strive
                            to accommodate these needs while prioritizing a smooth and unified conference
                            experience for all participants.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100 border-warning border-3 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-warning fw-bold">Conference Structure</h5>
                        <ul class="lh-sm">
                            <li><strong>Plenary Sessions</strong></li>
                            <li><strong>Panel Discussions</strong></li>
                            <li><strong>Technical Sessions</strong></li>
                            <li><strong>Doctoral Symposium</strong></li>
                            <li><strong>Special Sessions</strong></li>
                        </ul>
                        <p class="mb-0">Live-streamed and hosted at Universidad ORT Uruguay.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card h-100 border-warning border-3 rounded-4">
                    <div class="card-body">
                        <h5 class="card-title text-warning fw-bold">Awards & Collaboration</h5>
                        <ul class="lh-sm">
                            <li><strong>Best Paper Awards</strong> by committees.</li>
                            <li><strong>Recognition & Service Awards</strong></li>
                            <li><strong>Platform for Exchange:</strong> Share, connect, collaborate.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Program Review -->
    <div class="container pb-5">
        <div class="bg-white rounded-4 shadow-sm p-4">
            <h4 class="text-warning fw-bold mb-3">Program Review Process</h4>
            <p>After the late registration deadline, presenters will receive a preliminary schedule. Please
                review and provide feedback for final adjustments.</p>
            <p>Detailed instructions and forms will be available soon to refine presentations and indicate
                preferences.</p>
            <p>The final program will be published here for planning your attendance effectively.</p>
        </div>
    </div>
    </section>

    <!-- Conference Awards -->

    <section id="awards" class="pt-5 bg-white">

        <!-- ENCABEZADO CON IMAGEN -->
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <h2 class="display-6 fw-bold text-gold mb-3">Wednesday, March 11th: EDUNINE2026 Conference
                    Awards</h2>
                <div class="col-lg-5 text-center">
                    <img src="../images/decoration/awards.jpg" class="img-fluid rounded-4 shadow" alt="EDUNINE Awards">
                </div>
                <div class="col-lg-7">

                    <p class="fs-5 text-muted">
                        The <b>EDUNINE2026 Committees</b> are proud to announce the recipients of the
                        <b>2026 IEEE X World Engineering Education Conference (EDUNINE2026) Awards</b>. These
                        esteemed awards will be presented during a special ceremony in Montevideo, Uruguay.
                        Award winners will be recognized in the official conference proceedings (IEEE Xplore) and on
                        the conference website.
                    </p>
                </div>
            </div>
        </div>

        <!-- SECCIÓN DE PREMIOS -->
        <div class="container py-5 rounded-4 shadow-sm">
            <h3 class="fw-bold text-gold mb-4 text-center">About the EDUNINE2026 Awards</h3>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-gold shadow-sm award-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"> Best Paper Awards</h5>
                            <p class="card-text text-muted small">
                                Recognize originality, technical merit, and contributions to engineering education.
                                Based on research depth, relevance, clarity, and presentation quality.
                                Selected by Reviewers, Technical Program, and Awards Committees.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-gold shadow-sm award-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"> Recognition Awards</h5>
                            <p class="card-text text-muted small">
                                Celebrate the outstanding contributions of organizing committee members who made
                                EDUNINE2026 a success.
                                Multiple recognitions will be awarded.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ACTUALIZACIÓN -->
            <div class="mt-5 text-center">
                <h5 class="fs-3 fw-bold text-gold">Stay Updated on Award Recipients</h5>
                <p class="text-muted small">The complete list of award winners will be announced and published on
                    this website following the awards ceremony.</p>
            </div>
        </div>
    </section>



    <!-- Footer section -->
    <div class="container-fluid">
        <!-- footer  -->
        <?php include "../includesHtml/final.html" ?>
    </div>
    <script src="../js/readmorereadless.js"></script>
    <script src="../js/backTop.js"></script>
    <!-- START FOOTER SLICK CAROUSEL -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/slick-carousel-config.js"></script>
    <!-- END FOOTER SLICK CAROUSEL -->

    </div>
</body>

</html>