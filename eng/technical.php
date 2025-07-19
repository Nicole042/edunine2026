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

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

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
        <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
        <div> 
            <!-- Navigation bar  -->
            <?php include "edu9header.html" ?> 
        </div>
        <div class="#main"></div>

        <section id="top" class="inicial">
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">About</a></li>
                    <li>Technical_Cooperation</li>
                </ul> 
            </div>
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
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">About</a></li>
                    <li>Technical_Cooperation</li>
                </ul> 
            </div>
            <div class="container-fluid">
                <!-- sequence section -->
                <div class="container-fluid px-4 py-5">
                    <table class="technical">
                        <tbody>
                            <tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.ifees.net/" target="_blank"><img src="../images/logos_cooperation/logo_ifees.gif" width="44" height="57" alt="logo" ></a></td><td><a href="http://www.ifees.net/"> International Federation of Engineering Education Societies (IFEES) </a> </td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.igip.org/"><img src="../images/logos_cooperation/logo_igip.gif" width="100" height="54" alt="logo" ></a></td><td><a href="http://www.igip.org/" target="_blank"> Internationale Gesellschaft für Ingenieurpädagogik (IGIP) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.sefi.be"> <img src="../images/logos_cooperation/logo_sefi.gif" width="88" height="57" alt="logo" ></a></td><td><a href="http://www.sefi.be"> Société Européenne pour la Formation des Ingénieurs (SEFI) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://carthagene.enim.fr/" target="_blank"><img src="../images/logos_cooperation/logo_rci.gif" width="65" height="57" alt="logo" ></a></td><td><a href="http://carthagene.enim.fr/"> Réseau Carthagène d’Ingénierie (RCI) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.copec.eu/wcseit/"><img src="../images/logos_cooperation/logo_wcseit.gif" width="96" height="54" alt="logo" ></a></td><td><a href="http://www.copec.eu/wcseit/" target="_blank"> World Congress on Systems Engineering and Information Technology (WCSEIT) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.copec.eu/intertech/" target="_blank"><img src="../images/logos_cooperation/logo_intertech.gif" width="66" height="57" alt= "logo" ></a></td><td><a href="http://www.copec.eu/intertech/" target="_blank"> International Council for Engineering and Technology Education (INTERTECH) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.copec.eu/shero/"><img src="../images/logos_cooperation/logo_shero.gif" width="140" height="65" alt="logo" ></a></td><td><a href="http://www.copec.eu/shero/"> Safety, Health and Environment Research Organization (SHERO) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.copec.eu/wcca/"><img src="../images/logos_cooperation/logo_wcca.gif" width="140" height="65" alt="logo" ></a></td><td><a href="http://www.copec.eu/wcca/"> World Council on Communication and Arts (WCCA) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.istec.org/" target="_blank"><img src="../images/logos_cooperation/logo_istec.gif"  alt="logo" ></a></td><td><a href="http://www.istec.org/" target="_blank"> Ibero-American Science & Technology Education Consortium (ISTEC) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.asee.org/" target="_blank"><img src="../images/logos_cooperation/logo_asee.gif" width="56" height="57" alt="logo" ></a></td><td><a href="http://www.asee.org/"> American Society for Engineering Education (ASEE) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.worldspeed.org/portal/"><img src="../images/logos_cooperation/logo_speed.gif" width="103" height="56" alt="logo" ></a></td><td><a href="http://www.worldspeed.org/portal/"> Student Platform for Engineering Education Development (SPEED) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.rbe.eng.br/"><img src="../images/logos_cooperation/logo_rbe.gif" width="97" height="56" alt="logo" ></a></td><td><a href="http://www.rbe.eng.br/"> Brazilian Network of Engineering (RBE) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.abenge.org.br/"><img src="../images/logos_cooperation/logo_abenge.gif" width="144" height="40" alt="logo" ></a></td><td><a href="http://www.abenge.org.br/"> Brazilian Society for Engineering Education (ABENGE) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://spee.org.pt/"><img src="../images/logos_cooperation/logo_spee.gif" alt="logo" ></a></td><td><a href="http://spee.org.pt/" target="_blank"> Portuguese Society for Engineering Education (SPEE) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.copec.eu/gcmm/"><img src="../images/logos_cooperation/logo_gcmm.gif" width="60" height="57" alt="logo" ></a></td><td><a href="http://www.copec.eu/gcmm/"> Global Congress on Manufacturing and Management (GCMM) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://abenc.org.br/"><img src="../images/logos_cooperation/logo_abenc.gif" alt="logo" ></a></td><td><a href="http://abenc.org.br/" target="_blank"> Brazilian Association of Civil Engineers (ABENC) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.sba.org.br/"><img src="../images/logos_cooperation/logo_sba.gif" width="73" height="56" alt="logo" ></a></td><td><a href="http://www.sba.org.br/"> Brazilian Automation Society (SBA) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.sbc.org.br/"><img src="../images/logos_cooperation/logo_sbc.gif" width="64" height="56" alt="logo" ></a></td><td><a href="http://www.sbc.org.br/"> Brazilian Computer Society (SBC) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.aenui.net/"><img src="../images/logos_cooperation/logo_aenui.gif" width="64" height="56" alt="logo" ></a></td><td><a href="http://www.aenui.net/"> Asociación de Enseñantes Universitarios de la Informática (AENUI) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.oern.pt/"><img src="../images/logos_cooperation/logo_oern.gif" alt="logo" ></a></td><td><a href="http://www.oern.pt/" target="_blank"> Portugal Engineers Council – North Region (OERN) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.portogente.com.br/"><img src="../images/logos_cooperation/logo_portogente.gif" alt="logo" ></a></td><td><a href="http://www.portogente.com.br/" target="_blank"> PortFolk </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.copec.eu/aamp/" target="_blank"><img src="../images/logos_cooperation/logo_aamp.gif" width="46" height="56" alt="logo" ></a></td><td><a href="http://www.copec.eu/aamp/"> Fishing Museum Friends Society (AAMP) </a></td></tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <h5>Support by</h5>
                    <table   class="technical">
                        <tbody>
                            <tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.cnpq.br/"> <img src="../images/logos_cooperation/logo_cnpq.gif" width="140" height="42" alt="logo" ></a></td><td> <a href="http://www.cnpq.br/" target="_blank"> National Council for Scientific and Technological Development (CNPq) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.capes.gov.br/"> <img src="../images/logos_cooperation/logo_capes.gif" width="68" height="56" alt="logo" ></a></td><td><a href="http://www.capes.gov.br/" target="_blank"> Coordination for Improvement of Personal of Superior Level (CAPES) </a></td></tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <h5>Conference Support by</h5>
                    <table   class="technical">
                        <tbody>
                            <tr><td style="width: 150px; height: 60px; text-align: center"><a href="https://iieducation.eu/"><img src="../images/logos_cooperation/logo_iie.png" height ="43" alt="logo" ></a></td><td><a href="https://iieducation.eu/" target="_blank"> International Institute of Education (IIE) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="https://confedi.org.ar/"><img src="../images/logos_cooperation/logo_confedi.png" height ="56" alt="logo" ></a></td><td><a href="https://confedi.org.ar/" target="_blank"> Federal Council of Engineering Deans of Argentina (CONFEDI) </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="http://www.asibei.net/"><img src="../images/logos_cooperation/logo-asibei.jpg" width="130" alt="logo" ></a></td><td><a href="http://www.asibei.net/"> Ibero-American Association of Engineering Education Institutions (ASIBEI) </a></td></tr>
                            <tr><td style="width: 150px; height: 60px; text-align: center"><a href="https://www.up.edu.pe/la-universidad"> <img src="../images/logos_cooperation/logo_UP.png" width="130" height="43" alt="logo" ></a></td><td><a href="http://www.up.edu.pe/la-universidad" target="_blank"> Universidad del Pac&iacute;fico </a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="https://www.galileo.edu/"> <img src="../images/logos_cooperation/logo_UGalileo.png" width="130" height="43" alt="logo" ></a></td><td><a href="https://www.galileo.edu/" target="_blank"> Galileo University</a></td></tr><tr><td style="width: 150px; height: 60px; text-align: center"><a href="https://www.ufasta.edu.ar/ingenieria/"> <img src="../images/logos_cooperation/logo_FI_UFASTA.png" width="145" alt="logo" ></a></td><td><a href="https://www.ufasta.edu.ar/ingenieria/" target="_blank"> UFASTA - Facultad de Ingeniería (UFASTA - School of Engineering) </a></td></tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>                                                        
                    <h5>Host</h5>
                    <table   class="technical">
                        <tbody>                                       
                            <tr><td style="width: 150px; height: 60px; text-align: center">
                                    <a href="https://tec.mx/en/">
                                        <img src="../images/logos_special/logo_Tec2T.png" alt="Tecnologico de Monterrey" style="height: 56px"></a></td><td><a href="https://tec.mx/en/" target="_blank"> Tecnológico de Monterrey</a></td></tr>

                        </tbody>
                    </table>
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
        <script src ='../js/datesFill.js?1</script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>                      