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
        <title> EDUNINE2026 English Website: Author Presentation & Session Chair Guidelines </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
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
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
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
                    <li>Session_Guidelines</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/sessionPresentation.jpg"  alt="Session Author Presentation and Chair Guidelines Image">
                            </div>
                            <h2 class="display-6 fw-bold">Author Presentation and Session Chair Guidelines</h2>

                            <p class="fs-5 mb-4"><b>1) Author Presentation:</b> EDUNINE2026 empowers you to share your research with a global audience! Our guide equips you for impactful online or in-person presentations in Technical Sessions. Learn pre-session prep, platform specifics, interaction with the session chair, and adhering to presentation and Q&A timings. We aim for smooth, engaging sessions for all.<br>Remember, the optimal presentation format can vary! Authors have the flexibility to choose the approach that best suits their paper, ensuring clear communication within the allotted time slot.<br><b>2) Technical Session Chairs:</b> dedicated instructions are available to ensure a smooth and productive online or in-person session, fostering active participation, and adhering to the schedule.<br>Whether you're presenting your groundbreaking research or leading a stimulating session, EDUNINE2026 is here to support you!<br>These comprehensive guides equip you with the knowledge and tools you need to excel in your role.  Review the resources tailored for Technical Paper Presenters to deliver impactful presentations and explore the dedicated instructions for Technical Session Chairs to ensure a smooth and engaging experience for all participants.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </section>

        <!-- Primer enlace -->

        <section id="presentation">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="%breadURL2">Session_Guidelines</a></li>
                    <li>Author_Presentation_Guidelines</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  pb-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/sessionAuthor.jpg"  alt="Author Paper Presentation Guidelines Image"> 
                            </div>
                            <h4 class="display-6 fw-bold">Author Paper Presentation Guidelines</h4>
                            <p class="fs-5 mb-4">EDUNINE2026 empowers you to share your research with a global audience! Our guide equips you for impactful online or in-person presentations in Technical Sessions. Learn pre-session prep, platform specifics, interaction with the session chair, and adhering to presentation and Q&A timings. We aim for smooth, engaging sessions for all.<br>Remember, the optimal presentation format can vary! Authors have the flexibility to choose the approach that best suits their paper, ensuring clear communication within the allotted time slot.
                            </p>
                         <p class="mt-auto"><a href="../program/EDUNINE_InPersonPresenterInstructions.pdf" class="border-white btn btn-primary btn-sm align-self-end" role="button">In-Person Presentation Instructions</a></p>
                                    <p class="mt-auto"><a href="../program/EDUNINE_OnlinePresenterInstructions.pdf"class="border-white btn btn-primary btn-sm align-self-end" role="button">Online Presentation Instructions</span></a></p>
                                    <p class="mt-auto"><a href="../program/EDUNINE_GuiaPresentadorEnPersona.pdf"class="border-white btn btn-primary btn-sm align-self-end" role="button">Instrucciones para presentación en persona</a></p>
                                    <p class="mt-auto"><a href="../program/EDUNINE_GuiaPresentadorOnline.pdf"class="border-white btn btn-primary btn-sm align-self-end" role="button">Instrucciones para presentación online</a></p>   
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <section id="chair">
            <div class="container-fluid align-content-start pt-5 pb-0 bg-body-secondary">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="techSession.php">Session_Guidelines</a></li>
                    <li>Session_Chair_Guidelines</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  pb-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/sessionChair.jpg"  alt="Session Chair Guidelines Image"> 
                            </div>
                            <h4 class="display-6 fw-bold">Session Chair Guidelines</h4>
                            <p class="fs-5 mb-4">Dedicated instructions are available to ensure a smooth and productive online or in-person session, fostering active participation, and adhering to the schedule. </p>      <p class="mt-auto"><a href="../program/EDUNINE_In-PersonSessionChairInstructions.pdf"class="border-white btn btn-primary btn-sm align-self-end" role="button">In-Person Session Chair Instructions</a></p>
                 <p class="mt-auto"><a href="../program/EDUNINE_OnlineSessionChairInstructions.pdf"class="border-white btn btn-primary btn-sm align-self-end" role="button">Online Session Chair Instructions</a></p>                                       
                            
                  <p class="mt-auto"><a href="../program/EDUNINE_GuiaPresidenteSesionEnPersona.pdf"class="border-white btn btn-primary btn-sm align-self-end" role="button">Instrucciones para presidentes de sesiones híbridas (en persona)</a ></p>
                  <p class="mt-auto"><a href="../program/EDUNINE_GuiaPresidenteSesionOnline.pdf"class="border-white btn btn-primary btn-sm align-self-end" role="button">Instrucciones para presidentes de sesiones online</a></p></div>
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
        <script src ="../js/readmorereadless.js"></script> 
        <script src ="../js/backTop.js"></script>
         
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>                      