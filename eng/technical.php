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
        <title> EDUNINE2026 English Website: Technical Cooperation </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- These classes are useful for header collapse works -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <!-- END of classes for newHeader -->

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet">
        <link href="../css/newHeader-compensate.css" rel="stylesheet"> 
        <link href="../css/technical.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

        <!--SLICK FOOTER CAROUSEL-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <!--END FOOTER SLICK CAROUSEL -->
    </head>
    <body onload = " jump()">
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
        <main>
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "newHeader.html" ?> 
        </div>
        <div class="#main"></div>

         <!-- <!- PARTE SUSAN INICIO  -->
        <!-- New proposed breadcrumb -->
        <nav class="section-nav-breadcrumb header-compensate-breadcrumb" aria-label="Section navigation">
            <ul class="d-flex justify-content-end list-unstyled mb-0">
                <li class="nav-item mx-1">
                <a class="nav-link px-1 py-2 btn" href="#top"> About </a>
                </li>
                <li class="nav-item mx-1">
                <a class="nav-link px-1 py-2 btn" href="#technical">Technical Cooperation</a>
                </li>
                <li class="nav-item mx-1">
                <a class="nav-link px-1 py-2 btn" href="#organizers">Organizers</a>
                </li>
            </ul>
        </nav>
        <!-- PARTE SUSAN FIN -->

         <!--Navigation for cellphones Susan's Idea-->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="chevron-up-down" viewBox="0 0 16 18">
            <!-- Up chevron -->
            <path d="M2.146 6.854a.5.5 0 0 1 .708 0L8 2.707l5.146 4.147a.5.5 0 0 1-.708.708L8 4.207 2.854 7.562a.5.5 0 0 1-.708-.708z"/>

            <!-- Down chevron -->
            <path d="M2.146 11.146a.5.5 0 0 1 .708 0L8 15.293l5.146-4.147a.5.5 0 0 1 .708.708l-5.5 5.5a.5.5 0 0 1-.708 0l-5.5-5.5a.5.5 0 0 1 0-.708z"/>
        </symbol>
        </svg>


        <div class="container d-flex justify-content-center header-compensate-mobile">
            <div class="dropdown d-navs d-sm-none"> <!--d-sm-none makes it not appear for screen higher than 575px width-->
            <button class="btn dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                On this page
                <svg class="bi ms-2" width="16" height="16" fill="currentColor" aria-hidden="true">
                <use xlink:href="#chevron-up-down"></use>
                </svg>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#top">About</a></li>
                <li><a class="dropdown-item" href="#technical">Technical Cooperation</a></li>
                <li><a class="dropdown-item" href="#organizers">Organizers</a></li>
            </ul>
            </div>
        </div>
        <!--End of Navigation for cellphones Susan's Idea-->

        <section id="top" class="inicial">

            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/technical.jpg"  alt="Technical Cooperation Image">
                            </div>
                            <h2 class="display-6 fw-bold">Technical Cooperation</h2>

                            <p class="fs-5 mb-4">We are grateful for the valuable technical collaboration and support of the following organizations. Their contributions have been instrumental in shaping the technical program and enhancing the overall conference experience for all attendees.</p>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
        <section id="technical">

        <!-- ROW 1-->
        <div class="container text-center mt-5 mb-3">
            <div class="row align-items-center row-cols-1 row-cols-md-3 row-cols-lg-6">
                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.ifees.net/" target="_blank">
                            <img src="../images/logos_cooperation/logo_ifees.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 90px; height: auto;" 
                                alt="IFEES logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.ifees.net/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                International Federation of Engineering Education Societies 
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.igip.org/" target="_blank">
                            <img src="../images/logos_cooperation/logo_igip.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="IGIP logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.igip.org/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Internationale Gesellschaft für Ingenieurpädagogik (IGIP)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.sefi.be" target="_blank">
                            <img src="../images/logos_cooperation/logo_sefi.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="SEFI logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.sefi.be" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Société Européenne pour la Formation des Ingénieurs (SEFI)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://carthagene.enim.fr/" target="_blank">
                            <img src="../images/logos_cooperation/logo_rci.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="RCI logo">
                        </a>
                        <div class="card-body">
                            <a href="http://carthagene.enim.fr/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Réseau Carthagène d’Ingénierie (RCI)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.copec.eu/wcseit/" target="_blank">
                            <img src="../images/logos_cooperation/logo_wcseit.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="WCSEIT logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.copec.eu/wcseit/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                World Congress on Systems Engineering and Information Technology (WCSEIT)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.copec.eu/intertech/" target="_blank">
                            <img src="../images/logos_cooperation/logo_intertech.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 100px; height: auto;" 
                                alt="INTERTECH logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.copec.eu/intertech/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                International Council for Engineering and Technology Education 
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ROW 2-->
        <div class="container text-center mb-3">
            <div class="row align-items-center row-cols-1 row-cols-md-3 row-cols-lg-6">
                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.copec.eu/shero/" target="_blank">
                            <img src="../images/logos_cooperation/logo_shero.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="SHERO logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.copec.eu/shero/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Safety, Health and Environment Research Organization (SHERO)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.copec.eu/wcca/" target="_blank">
                            <img src="../images/logos_cooperation/logo_wcca.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="WCCA logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.copec.eu/wcca/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                World Council on Communication and Arts (WCCA)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.istec.org/" target="_blank">
                            <img src="../images/logos_cooperation/logo_istec.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 80px; height: auto;" 
                                alt="ISTEC logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.istec.org/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Ibero-American Science & Technology Education Consortium (ISTEC)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.asee.org/" target="_blank">
                            <img src="../images/logos_cooperation/logo_asee.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 90px; height: auto;" 
                                alt="ASEE logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.asee.org/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                American Society for Engineering Education (ASEE)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.worldspeed.org/portal/" target="_blank">
                            <img src="../images/logos_cooperation/logo_speed.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="SPEED logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.worldspeed.org/portal/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Student Platform for Engineering Education Development (SPEED)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.rbe.eng.br/" target="_blank">
                            <img src="../images/logos_cooperation/logo_rbe.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="RBE logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.rbe.eng.br/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Brazilian Network of Engineering (RBE)
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ROW 3-->
        <div class="container text-center mb-3">
            <div class="row align-items-center row-cols-1 row-cols-md-3 row-cols-lg-6">
            <!--<div class="equal-cards">-->
                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.abenge.org.br/" target="_blank">
                            <img src="../images/logos_cooperation/logo_abenge.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="ABENGE logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.abenge.org.br/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Brazilian Society for Engineering Education (ABENGE)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://spee.org.pt/" target="_blank">
                            <img src="../images/logos_cooperation/logo_spee.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="SPEE logo">
                        </a>
                        <div class="card-body">
                            <a href="http://spee.org.pt/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Portuguese Society for Engineering Education (SPEE)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.copec.eu/gcmm/" target="_blank">
                            <img src="../images/logos_cooperation/logo_gcmm.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 100px; height: auto;" 
                                alt="GCMM logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.copec.eu/gcmm/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Global Congress on Manufacturing and Management (GCMM)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://abenc.org.br/" target="_blank">
                            <img src="../images/logos_cooperation/logo_abenc.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="ABENC logo">
                        </a>
                        <div class="card-body">
                            <a href="http://abenc.org.br/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Brazilian Association of Civil Engineers (ABENC)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.sba.org.br/" target="_blank">
                            <img src="../images/logos_cooperation/logo_sba.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="SBA logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.sba.org.br/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Brazilian Automation Society (SBA)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.sbc.org.br/" target="_blank">
                            <img src="../images/logos_cooperation/logo_sbc.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 80px; height: auto;" 
                                alt="SBC logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.sbc.org.br/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Brazilian Computer Society (SBC)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW 4-->
        <div class="container text-center mb-3">
            <div class="row align-items-center row-cols-1 row-cols-md-3 row-cols-lg-4">

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.aenui.net/" target="_blank">
                            <img src="../images/logos_cooperation/logo_aenui.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 80px; height: auto;" 
                                alt="AENUI logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.aenui.net/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Asociación de Enseñantes Universitarios de la Informática (AENUI)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.oern.pt/" target="_blank">
                            <img src="../images/logos_cooperation/logo_oern.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="OERN logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.oern.pt/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Portugal Engineers Council – North Region (OERN)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 effect-card" style="height: 150px; display: flex; justify-content: center;">
                        <a href="http://www.portogente.com.br/" target="_blank">
                            <img src="../images/logos_cooperation/logo_portogente.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 120px; height: auto;" 
                                alt="PortFolk logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.portogente.com.br/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                PortFolk
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm border-0 h-100 effect-card">
                        <a href="http://www.copec.eu/aamp/" target="_blank">
                            <img src="../images/logos_cooperation/logo_aamp.gif" 
                                class="card-img-top p-3 mx-auto logo-hover" 
                                style="width: 80px; height: auto;" 
                                alt="AAMP logo">
                        </a>
                        <div class="card-body">
                            <a href="http://www.copec.eu/aamp/" 
                            target="_blank" 
                            class="stretched-link text-decoration-none"
                            style="font-size: 0.9rem; font-weight: normal;">
                                Fishing Museum Friends Society (AAMP)
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

            <div class="container-fluid">
                <!-- sequence section -->
                <div class="container-fluid px-4 py-1">

                    <p>&nbsp;</p>
                    <div class="d-flex justify-content-center">  
                        <h5>Support by</h5>
                    </div>
                    <!-- ROW 5-->
                    <div class="container text-center mb-3">
                        <div class="row align-items-center justify-content-center">
                        
                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="http://www.cnpq.br/" target="_blank">
                                        <img src="../images/logos_cooperation/logo_cnpq.gif" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="CNPq logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="http://www.cnpq.br/" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.9rem; font-weight: normal;">
                                            National Council for Scientific and Technological Development (CNPq)
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="http://www.capes.gov.br/" target="_blank">
                                        <img src="../images/logos_cooperation/logo_capes.gif" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="CAPES logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="http://www.capes.gov.br/" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.9rem; font-weight: normal;">
                                            Coordination for Improvement of Personal of Superior Level (CAPES)
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>&nbsp;</p>
                    <div class="d-flex justify-content-center">   
                        <h5>Conference Support by</h5>
                    </div>
                    <!-- ROW 6-->
                    <div class="container text-center mb-3">
                        <div class="row align-items-center row-cols-1 row-cols-md-3 row-cols-lg-6">

                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="https://iieducation.eu/" target="_blank">
                                        <img src="../images/logos_cooperation/logo_iie.png" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="IIE logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="https://iieducation.eu/" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.9rem; font-weight: normal;">
                                            International Institute of Education (IIE)
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="https://confedi.org.ar/" target="_blank">
                                        <img src="../images/logos_cooperation/logo_confedi.png" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="CONFEDI logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="https://confedi.org.ar/" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.9rem; font-weight: normal;">
                                            Federal Council of Engineering Deans of Argentina (CONFEDI)
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="http://www.asibei.net/" target="_blank">
                                        <img src="../images/logos_cooperation/logo-asibei.jpg" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="ASIBEI logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="http://www.asibei.net/" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.6rem; font-weight: normal;">
                                            Ibero-American Association of Engineering Education Institutions (ASIBEI)
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="https://www.up.edu.pe/la-universidad" target="_blank">
                                        <img src="../images/logos_cooperation/logo_UP.png" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="Universidad del Pacífico logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="https://www.up.edu.pe/la-universidad" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.9rem; font-weight: normal;">
                                            Universidad del Pacífico
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="https://www.galileo.edu/" target="_blank">
                                        <img src="../images/logos_cooperation/logo_UGalileo.png" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="Galileo University logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="https://www.galileo.edu/" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.9rem; font-weight: normal;">
                                            Galileo University
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card text-center shadow-sm border-0 h-100 effect-card">
                                    <a href="https://www.ufasta.edu.ar/ingenieria/" target="_blank">
                                        <img src="../images/logos_cooperation/logo_FI_UFASTA.png" 
                                            class="card-img-top p-3 mx-auto logo-hover" 
                                            style="width: 120px; height: auto;" 
                                            alt="UFASTA logo">
                                    </a>
                                    <div class="card-body">
                                        <a href="https://www.ufasta.edu.ar/ingenieria/" 
                                        target="_blank" 
                                        class="stretched-link text-decoration-none"
                                        style="font-size: 0.9rem; font-weight: normal;">
                                            UFASTA - Facultad de Ingeniería (UFASTA - School of Engineering)
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <p>&nbsp;</p>   
                    <div class="d-flex justify-content-center">                                                     
                        <h5>Host</h5>
                    </div>
                    <div class="d-flex justify-content-center"> 
                        <div class="card text-center shadow-sm border-0 effect-card" style="width:550px; display: flex; justify-content: center;">
                            <a href="https://tec.mx/en/" target="_blank">
                                <img src="../images/logos_host/LogoTec1.png" 
                                    class="card-img-top p-3 mx-auto logo-hover" 
                                    style="width: 120px; height: auto;" 
                                    alt="Tecnológico de Monterrey logo">
                            </a>
                            <div class="card-body">
                                <a href="https://tec.mx/en/" 
                                target="_blank" 
                                class="stretched-link text-decoration-none"
                                style="font-size: 0.9rem; font-weight: normal;">
                                    Tecnológico de Monterrey
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        

        <!-- Footer section -->
        <section id="organizers">
            <div class ="container-fluid">
                <!-- footer  -->
                <?php include "../includesHtml/final.html" ?> 
            </div>     
        </section>
    </main>

        <!-- START FOOTER SLICK CAROUSEL-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="../js/slick-carousel-config.js"></script>
        <!-- END FOOTER  SLICK CAROUSEL-->  

        <script src ="../js/readmorereadless.js"></script> 
        <script src ="../js/backTop.js"></script>
        <script src ='../js/datesFill.js?1</script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>                      