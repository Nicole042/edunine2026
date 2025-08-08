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
        <title> EDUNINE2026 Website in English: Committees</title> 

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>
        
         <!--SLICK CAROUSEL-->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <!--END  SLICK CAROUSEL -->


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
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "newHeader.html" ?> 
        </div>
        <div class="#main"></div>

        <!-- <!- PARTE SUSAN INICIO  -->
        <!-- New proposed breadcrumb -->
        <div class="container-peerReview py-5">
            <nav class="section-nav-breadcrumb" aria-label="Section navigation">
                <ul class="d-flex justify-content-end list-unstyled mb-0">
                    <li class="nav-item mx-1">
                    <a class="nav-link px-1 pt-2 btn " href="#top"> About </a>
                    </li>
                    <li class="nav-item mx-1">
                    <a class="nav-link px-1 pt-2 btn" href="#commitees"> Commitees </a>
                    </li>
                    <li class="nav-item mx-1">
                    <a class="nav-link px-1 pt-2 btn" href="#organizers">Organizers</a>
                    </li>
                    <!-- add/remove as needed
                    There was no link for venue?? It tended to disappear -->
                </ul>
            </nav>
        </div>
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
                <li><a class="dropdown-item" href="#commitees">Commitees</a></li>
                <li><a class="dropdown-item" href="#organizers">Organizers</a></li>
            </ul>
            </div>
        </div>

        <!--End of Navigation for cellphones Susan's Idea-->

        <section id="top" class="inicial-committees">

            <div class="container-peerReview py-3">
                <div class="row align-items-center g-3">
                    <!-- Image -->
                    <div class="col-lg-4 text-center">
                        <img src="../images/decoration/committees.jpg" alt="EDUNINE 2026 Committees Image" class="img-fluid rounded shadow-sm w-75">
                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold text-center text-lg-center mb-4">EDUNINE 2026 Committees</h2>
                        <p class="fs-5 text-justify" style="padding-left: 4px; padding-right: 4px;">
                            The success of this conference relies heavily on the dedication and expertise of our committees.
                            Below, you'll find a complete list of the committees that have been instrumental in organizing 
                            and coordinating all aspects of the event.
                            We extend our sincere gratitude to each member for their invaluable contributions.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <section id="commitees">
            <div class="container-peerReview py-5 align-items-center">
                <div class="container">
                <div class="row justify-content-center" >  
                    <!--<div class="col-2"></div>-->

                    <!-- chairs -->
                    <div class ="col-md-4">
                        <h5 class="text-left text-white mx-auto py-2 pl-2 text-center" style="background-color: #336699;"><span>Chairs</span></h5>
                        <h5 class="text-justify pt-3">Conference    Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_molina.html"> <span> José  Martín  Molina  Espinosa</span></a>
                        </p><h5 class="text-justify pt-3">General Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_brito.html"> <span> Claudio R. Brito</span></a></p>
                        <h5 class="text-justify pt-3">Co-Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_ciampi.html"><span> Melany M. Ciampi</span></a></p>
                        <h5 class="text-justify pt-3">Awards    Chair:</h5>
                        <p class="text-justify pl-3"><a href="#"><span> To be assigned</span></a></p>
                        <h5 class="text-justify pt-3">Technical    Program  Chair:</h5>
                        <p class="text-justify pl-3"><a href="#"><span> To be assigned</span></a></p>
                        <h5 class="text-justify pt-3">Technical  Program  Co-Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_luna.html"><span> Ana Luna</span></a></p>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_da_silva.pdf"><span> Agatha  C.  da  Silva  Obando</span></a></p>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_adorjan.html"><span> Alejandro  Adorjan  Olivera</span></a></p>  
                        <h5 class="text-justify pt-3">Publication Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_chong.html"><span> Mario Chong</span></a>
                        </p><h5 class="text-justify pt-3">Workshops Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_renteria.pdf"><span> Rafael  R. Rentería  Ramos</span></a></p>
                        <h5 class="text-justify pt-3">Conference Supporting Committee:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_portillo.html"><span> Roberto Portillo</span></a></p>
                        <h5 class="text-justify pt-3">Doctoral  Symposium  Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_pozzo.html"><span> Maria  Isabel  Pozzo</span></a></p>
                        <h5 class="text-justify pt-3">Publicity  and  Public  Relations  Chair:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_chong.html"><span> Mario Chong</span></a></p>
                        <h5 class="text-justify pt-3">Finance  Chair/Treasurer:</h5>
                        <p class="text-justify pl-3"><a href="https://www.copec.eu/cv_congresses_en/dr_fittipaldi.html"><span> Orlando  Fittipaldi</span></a></p>
                        <h5 class="text-justify pt-3">Steering    Committee  Chair:</h5>
                        <p class="text-justify pl-3"><a href="#"><span> To be assigned</span></a></p> 
                    </div>

                    <div class ="col-md-4">
                        <!-- Steering Committee -->
                        <h5 class="text-left text-white mx-auto py-2 pl-2 text-center" style="background-color: #336699;"><span> Steering  Committee:</span></h5>
                        <p class="text-justify pl-3">To be assigned <b><i>Chair of Committee</i></b></p>
                        <p class="text-justify pl-3">Agatha  C.  da  Silva  Ovando </p>
                        <p class="text-justify pl-3">Alejandro  Adorjan  Olivera </p>
                        <p class="text-justify pl-3">Ana    Luna </p>
                        <p class="text-justify pl-3">Claudio    R.    Brito </p>
                        <p class="text-justify pl-3">José  Martín  Molina  Espinosa </p>
                        <p class="text-justify pl-3">Mario    Chong </p>
                        <p class="text-justify pl-3">Melany    M.    Ciampi </p>
                        <p class="text-justify pl-3">Orlando  Fittipaldi </p>
                        <p class="text-justify pl-3">Rafael  R.  Rentería  Ramos </p>
                        <p class="text-justify pl-3">Roberto    Portillo </p>
                            
                        <!-- Supporting  -->  
                        <h5 class="text-left text-white mx-auto py-2 pl-2 text-center" style="background-color: #336699;"><span> Conference  Supporting  Committee:</span></h5>
                        <p class="text-justify pl-3">Roberto Portillo, Universidad Galileo<b><i>Chair of Committee</i></b></p>
                        <p class="text-justify pl-3">Ana Luna, Universidad del Pacífico  </p>
                        <p class="text-justify pl-3">Mario Chong, Universidad del Pacífico  </p>
                        <p class="text-justify pl-3">Melany M. Ciampi, International Institute of Education (IE)</p>
                        <p class="text-justify pl-3">Claudio R. Brito, COPEC</p>
                        <p class="text-justify pl-3">Roberto Giordano Lerena, UFASTA, CONFEDI, ASIBEI</p>
                    </div>

                    <div class ="col-md-4">
                        <!-- Program -->  
                        <h5 class="text-left text-white mx-auto py-2 pl-2 text-center" style="background-color: #336699;"><span> Technical  Program  Committee:</span></h5>
                        <p class="text-justify pl-3">To be assigned <b><i>Chair of Committee</i></b></p>
                        <p class="text-justify pl-3">Agatha  C.  da  Silva  Ovando, Bolivia  <b><i>Co-Chair of Committee</i></b></p>
                        <p class="text-justify pl-3">Ana    Luna, Peru  <b><i>Co-Chair of Committee</i></b></p>
                        <p class="text-justify pl-3">Alejandro  Adorjan  Olivera, Uruguay    <b><i>Co-Chair of Committee</i></b></p>
                        <p class="text-justify pl-3">André  Luiz  de  Lima  Reda, Brazil  </p>
                        <p class="text-justify pl-3">Claudio    R.    Brito, Brazil  </p>
                        <p class="text-justify pl-3">Edmundo  Tovar, Spain  </p>
                        <p class="text-justify pl-3">Gabriel  Gomes  de  Oliveira, Brazil  </p>
                        <p class="text-justify pl-3">Gloria  Teresita  Huamani  Huamani, Peru  </p>
                        <p class="text-justify pl-3">Guillermo    Kalocai, Argentina  </p>
                        <p class="text-justify pl-3">Hamadou  Saliah-Hassane, Canada  </p>
                        <p class="text-justify pl-3">José  Martín  Molina  Espinosa, Mexico</p>
                        <p class="text-justify pl-3">Luis    Amaral, Portugal  </p>
                        <p class="text-justify pl-3">Marcelo  Doallo, Argentina  </p>
                        <p class="text-justify pl-3">Maria  Isabel  Pozzo, Argentina  </p>
                        <p class="text-justify pl-3">Mario    Chong, Peru  </p>
                        <p class="text-justify pl-3">Melany    M.    Ciampi, Brazil  </p>
                        <p class="text-justify pl-3">Orlando  Fittipaldi, Brazil  </p>
                        <p class="text-justify pl-3">Pedro  Huamani  Navarrete, Peru  </p>
                        <p class="text-justify pl-3">Rafael  R.  Rentería  Ramos, Colombia  </p>
                        <p class="text-justify pl-3">Ramiro  Jordan, USA  </p>
                        <p class="text-justify pl-3">Roberto    Giordano    Lerena, Argentina  </p>
                        <p class="text-justify pl-3">Roberto    Portillo, Guatemala  </p>
                        <p class="text-justify pl-3">Rosa  M.  Vasconcelos, Portugal  </p>
                    </div>
                </div>
                </div>
            </div>       
        </section>


        <section id="organizers">
            <!-- Footer section -->
            <div class ="container-fluid">
                <!-- footer  -->
                <?php include "../includesHtml/final.html" ?> 
            </div>
        </section>


    <script src ="../js/readmorereadless.js"></script> 
    <script src ="../js/backTop.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- START SLICK CAROUSEL-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="../js/slick-carousel-config.js"></script>
    <!-- END  SLICK CAROUSEL-->   

</body>
</html>                      