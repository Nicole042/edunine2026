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
    <title> EDUNINE2026 English Website: Conference Registration </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Modern Card -->
    <link href="../css/stylevenue.css" rel="stylesheet">

    <!-- CSS Stylesheets -->
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
            id = "<?php echo $id ?>";
            const element = document.getElementById(id);
            element.scrollIntoView({ block: "start" });
        }
    </script>
    <button onclick="topFunction()" id="myTopBtn" title="Back to top">Top</button>
    <div class="pb-5">
        <!-- Navigation bar  -->
        <?php include "edu9header.html" ?>
    </div>

    <main>
        <section id="top">
            <div class="mt-5">
                <div class="modern-card position-relative mb-4 py-5 px-5">
                    <img src="../images/decoration/fpAddressEnglish.jpg" alt="English Language Check"
                        class="img-fluid float-start me-4 mb-3" style="max-width:100%; height:auto;">

                    <h2 class="display-6 fw-bold">Authors and Participants Conference Registration</h2>

                    <p class="fs-5 mb-4">Attention <b>Authors</b>: To ensure your accepted final paper is
                        published
                        in the <b>IEEE Xplore®</b> digital library (please note that IEEE reserves the right to
                        reject papers not meeting standards), registration and oral presentation at the
                        conference
                        are mandatory. Each author registration permits the presentation and publication of one
                        paper, with the option to include an additional paper for an extra publication fee.
                        Unpresented accepted papers cannot be submitted for publication in <b>IEEE
                            Xplore®</b>.<br>For <b>Authors</b> and <b>Participants</b>: Registration grants
                        access
                        to all conference sessions, workshops, tours, and other activities, both online and
                        in-person. After the conference, certificates for participation and paper presentation
                        will
                        be issued. Registration fees vary based on Early, Normal, or Late deadlines. Payment
                        options
                        include credit card (PayPal) in Euros or bank transfer in Euros or U.S. Dollars.</p>
                </div>
            </div>
        </section>

        <?php include "../includesHtml/commingSoon.html" ?>
    </main>

    <!-- Footer section -->
    <section id="organizers">
        <div class="container-fluid">
            <!-- Footer  -->
            <?php include "../includesHtml/final.html" ?>
        </div>
    </section>

    <script src="../js/backTop.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!--SLICK CAROUSEL-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/slick-carousel-config.js"></script>
</body>

</html>