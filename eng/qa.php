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
    <title> EDUNINE2026 English Website: Home </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../css/EDU9Conferences.css" rel="stylesheet">
    <link href="../css/edu9parts.css" rel="stylesheet">

    <!--SLICK CAROUSEL-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

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
            const id = "<?php echo $id; ?>";
            const element = document.getElementById(id);

            if (element) {
                element.scrollIntoView({ behavior: "smooth", block: "start" });
            } else {
                console.warn(`Element with id "${id}" not found.`);
            }
        }
    </script>

    <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>

    <div>
        <!-- Navigation bar  -->
        <?php include "newHeader.html" ?>
    </div>

    <main class="px-4">
        <div class="container-peerReview text-center mb-5">
            <h1> Q & A </h1>
        </div>
        <!--New Implementation, accordion-->
        <div class="container-peerReview">
            <div class="accordion" id="accordionExample">

                <!-- PAPER SUBMISSION & ACCEPTANCE -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <h1 class="mb-4 mt-4 mx-3 fw-bold text-center">Paper Submission & Acceptance </h1>
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="fs-4 fs-md-2 fs-sm-4 fw-normal">When is the deadline for paper
                                submission?</span>
                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <b>November 30, 2025.</b>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="fs-4 fs-md-2 fs-sm-4">Until what time (and time zone) will the submission
                                system remain open on the deadline date?</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <b>Eastern Daylight Time (EDT)</b>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="fs-4 fs-md-2 fs-sm-4">Do I need to pay the registration fee before or after my
                                paper is accepted?</span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <b>After acceptance.</b> Author registration opens post-notification and is mandatory
                                for publication/presentation.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <span class="fs-4 fs-md-2 fs-sm-4">What happens after my paper is accepted? Are there
                                additional steps?</span>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Yes: apply reviewers’ recommendations, pass originality checks, ensure IEEE
                                template/English compliance, create a PDF eXpress-validated PDF, sign the IEEE
                                copyright, upload the final paper, and register at least one author.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <span class="fs-4 fs-md-2 fs-sm-4">How do I propose a workshop?</span>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Please submit your workshop proposal in the IEEE format on the platform. The proposal
                                will be reviewed by peers, as in the other categories.
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- PRESENTATION & PARTICIPATION -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <h1 class="mb-4 mt-4 mx-3 fw-bold text-center">Presentation & Participation</h1>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <span class="fs-4 fs-md-2 fs-sm-4">Is the conference hybrid? Can accepted authors present
                                virtually?</span>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <b>Yes.</b> EDUNINE 2026 is hybrid; presentations may be in-person or online and are
                                valued equally.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <span class="fs-4 fs-md-2 fs-sm-4">What platform will be used for virtual participation
                                (Zoom/Teams/Meet)?</span>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Zoom
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <span class="fs-4 fs-md-2 fs-sm-4">If I cannot travel, can I present my paper online?</span>
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <b>Yes</b> — remote presentation is allowed.
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- REGISTRATION & PAYMENT -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <h1 class="mb-4 mt-4 mx-3 fw-bold text-center">Registration & Payment</h1>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <span class="fs-4 fs-md-2 fs-sm-4">When and how should I complete the payment for the
                                registration?</span>
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                During Early/Normal/Late windows after acceptance, pay by credit card via PayPal (EUR)
                                or bank transfer (EUR or USD).
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            <span class="fs-4 fs-md-2 fs-sm-4">How can I request an official invoice or receipt?</span>
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Contact the organizers by email. PayPal/bank transfers provide receipts; official
                                invoices are issued upon request.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            <span class="fs-4 fs-md-2 fs-sm-4">Can I pay the registration fee after acceptance?</span>
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <b>Yes</b> — registration/payment happens after acceptance and is required for
                                publication/presentation.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            <span class="fs-4 fs-md-2 fs-sm-4">Do I need to pay any extra fee to publish my paper in the
                                proceedings?</span>
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                One paid author registration covers one paper; an additional second paper requires an
                                extra <b>“Paper Fee.”</b> For a third paper, authors must pay a new registration fee.
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- SARA QUESTIONS -->

                <!-- INDEXING & PUBLICATION -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <h1 class="mb-4 mt-4 mx-3 fw-bold text-center">Indexing & Publication</h1>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            <span class="fs-4 fs-md-2 fs-sm-4">Will all accepted papers be published in IEEE
                                Xplore®?</span>
                        </button>
                    </h2>
                    <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Accepted papers that meet IEEE quality/format standards will be submitted to and
                                published in IEEE Xplore®.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                            <span class="fs-4 fs-md-2 fs-sm-4">Are the papers automatically indexed in Scopus and Web of
                                Science (WoS)?</span>
                        </button>
                    </h2>
                    <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Indexing is handled by the digital libraries/services; IEEE Xplore partners with major
                                indexers.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                            <span class="fs-4 fs-md-2 fs-sm-4">What type of publication will the papers appear
                                in?</span>
                        </button>
                    </h2>
                    <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                IEEE conference proceedings in IEEE Xplore®.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                            <span class="fs-4 fs-md-2 fs-sm-4">To which Scopus-indexed journals may accepted papers be
                                extended or transferred?</span>
                        </button>
                    </h2>
                    <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                The best papers will receive an invitation to extend their contribution and submit the
                                paper to the <b>IEEE-RITA – Revista Iberoamericana de Tecnologías del Aprendizaje</b>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- REVIEWERS & CERTIFICATES -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <h1 class="mb-4 mt-4 mx-3 fw-bold text-center">Reviewers & Certificates</h1>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                            <span class="fs-4 fs-md-2 fs-sm-4">How can I become a reviewer for EDUNINE 2026?</span>
                        </button>
                    </h2>
                    <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                If you are interested in becoming a reviewer, please contact our team at
                                edunine@edunine.eu
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                            <span class="fs-4 fs-md-2 fs-sm-4">How can reviewers request a certificate with the number
                                of papers reviewed?</span>
                        </button>
                    </h2>
                    <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Certificates are issued after the conference; request details by email.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                            <span class="fs-4 fs-md-2 fs-sm-4">Can the reviewer's certificate specify the number of
                                papers evaluated?</span>
                        </button>
                    </h2>
                    <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Usually, the certificates do not present the number of papers evaluated; however, upon
                                request, the board can issue a letter stating said number.
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- GENERAL INFORMATION -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <h1 class="mb-4 mt-4 mx-3 fw-bold text-center">General Information</h1>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                            <span class="fs-4 fs-md-2 fs-sm-4">Who can I contact for questions about submission,
                                payment, or participation?</span>
                        </button>
                    </h2>
                    <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                Please, contact the organizers by email.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                            <span class="fs-4 fs-md-2 fs-sm-4">What are the benefits of participating as an author or
                                reviewer?</span>
                        </button>
                    </h2>
                    <div id="collapseTwentyOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <b>Authors:</b> IEEE Xplore® eligibility, hybrid access to sessions/workshops,
                                certificates, networking. <b>Reviewers:</b> service on the Program Committee and
                                appreciation certificates.
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                            <span class="fs-4 fs-md-2 fs-sm-4">Is there any support or discount for participants from
                                Latin American universities?</span>
                        </button>
                    </h2>
                    <div id="collapseTwentyTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                There are no regional discounts; discounts apply by category (IEEE member, IEEE
                                Education Society member, student, life member).
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer section -->
        <section id="organizers">
            <div class="container-fluid">
                <!-- Footer  -->
                <?php include "../includesHtml/final.html" ?>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>

        <!--SLICK CAROUSEL-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="../js/slick-carousel-config.js"></script>
        <script src="../js/backTop.js"></script>

    </main>
</body>

</html>