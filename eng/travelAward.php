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
        <link href="../css/travelAward.css" rel="stylesheet">

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
        
        <img class="img-fluid w-100" src="../images/city/homeImage.jpg" alt="EDUNINE Banner">

        <main class="award-container">
            
            <div class="award-header">
                <h1>IEEE Education Society Student Travel Award</h1>
            </div>

            <div class="award-content">
                <p>
                    The IEEE Education Society is pleased to announce the opening of applications for the 
                    <strong>EDUNINE Student Travel Award</strong>. This award is designed to support students 
                    attending the conference by providing financial assistance for travel expenses.
                </p>

                <div class="awardTravel-card">
                    <h3>Eligibility & Details</h3>
                    <p>
                        We invite all eligible student registrants to apply. Please review the criteria 
                        on the IEEE Education Society website before submitting your application.
                    </p>
                    
                    <div class="action-buttons">
                        <a href="https://ieee-edusociety.org/conferences/ieee-education-society-student-travel-award" class="award-btn award-btn-primary" target="_blank">
                            Apply Now for Travel Award
                        </a>

                        <a href="https://ieee-edusociety.org/form/edunine-student-travel-award-for" class="award-btn award-btn-secondary" target="_blank">
                            Visit IEEE EdSoc Website
                        </a>
                    </div>
                </div>

                <p>
                    <em>Note: Ensure you are registered for the conference before applying. Deadlines may apply.</em>
                </p>
            </div>

        </main>

        <section id="organizers">
            <div class="container-fluid">
                <!-- Footer  -->
                <?php include "../includesHtml/final.html" ?>
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