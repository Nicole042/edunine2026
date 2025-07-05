 
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
        <title> EDUNINE2025 English Website: IEEE Policies</title>

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

        <section id="top" class="inicial">
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">About</a></li>
                    <li>IEEE_Policies</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/ieeePolicies.png"  alt="IEEE Policies Image">
                            </div>
                            <h2 class="display-6 fw-bold">IEEE Policies</h2>

                            <p class="fs-5 mb-4">Welcome to the IEEE Policies page. IEEE is committed to fostering an inclusive, respectful, and safe environment for all members and participants in our activities and events. To ensure this, we have established a set of comprehensive policies designed to guide our conduct, uphold our values, and protect our community. These policies include:
                            </p><ul class="list-group">

                                <li class="fs-5 list-group-item"><b>Code of Conduct Policy</b>.</li>
                                <li class="fs-5 list-group-item"><b>Code of Ethics</b>.
                                </li><li class="fs-5 list-group-item"><b>Nondiscrimination Policy</b>.
                                </li><li class="fs-5 list-group-item"><b>Event Conduct Policy</b>.
                                </li><li class="fs-5 list-group-item"><b>Privacy Policy</b>.</li>
                                <li class="fs-5 list-group-item"><b>Publication Ethics Policy</b>.</li>
                            </ul>  
                            <p class="fs-5 mb-2">We invite you to review each of these policies to understand our commitments and your rights and responsibilities as part of the IEEE community. Together, we can create a respectful and supportive environment that enables innovation, collaboration, and excellence.</p>
                        </div>
                    </div>
                </div>    
            </div>

        <!-- checklist  -->

        <div class="container-fluid">
            <!-- sequence section -->
            <div class="container-fluid px-4 py-5">
                <h2 class="pb-2 border-bottom display-6 fw-bold">INDEX</h2>

                <div class="row g-4 py-5 row-cols-1 row-cols-md-3">
                    <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                        <div class="card">
                            <h5 class="fw-bold mb-1 text-primary">
                                <span style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i class="fa-solid fa-user-check fa-2x" style="color:lightblue;text-shadow:2px 2px 4px #000000;" title="User check"></i></span> </h5>                                     
                            <center><img src="../images/decoration/ieeePolicies.png" class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center> 
                            <div class="card-body d-flex flex-column p-1">
                                <h5 class="fw-bold mb-1">Code of Conduct Policy</h5>
                                <p class="mb-1 lh-sm">Our <b>Code of Conduct</b> outlines the ethical standards and expectations for behavior among authors, participants, and staff. It serves as a foundation for maintaining integrity, professionalism, and respect within our community.</p>

                                <p class="mt-auto"><a href="#codeC" class="border-white btn btn-primary btn-sm align-self-end" role="button">More Information</a></p>                                    
                            </div>
                        </div>
                    </div>

                    <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                        <div class="card">
                            <h5 class="fw-bold mb-1 text-primary">
                                <span style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i class="fa-solid fa-scale-balanced fa-2x" style="color:lightblue;text-shadow:2px 2px 4px #000000;" title="Balanced"></i></span> </h5>                                     
                            <center><img src="../images/decoration/ieeePolicies.png" class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center> 
                            <div class="card-body d-flex flex-column p-1">
                                <h5 class="fw-bold mb-1">Code of Ethics</h5>
                                <p class="mb-1 lh-sm">IEEE members commit to the highest ethical conduct, ensuring integrity, public safety, and sustainability. They pledge to avoid conflicts of interest and unlawful conduct, respect all individuals, avoid harassment and harm, and support adherence to this code among colleagues.

                                <p class="mt-auto"><a href="#codeE" class="border-white btn btn-primary btn-sm align-self-end" role="button">More Information</a></p>                                    
                            </div>
                        </div>
                    </div>
                    <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                        <div class="card">
                            <h5 class="fw-bold mb-1 text-primary">
                                <span style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><s><i class="fa-solid fa-equals fa-2x" style="color:lightblue;text-shadow:2px 2px 4px #000000; text-decoration: line-through;" title="equals"></i></s></span> </h5>
                            <center><img src="../images/decoration/ieeePolicies.png" class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center> 
                            <div class="card-body d-flex flex-column p-1">
                                <h5 class="fw-bold mb-1">Nondiscrimination Policy</h5>
                                <p class="mb-1 lh-sm">IEEE is dedicated to providing equal opportunities and eliminating discrimination in all its forms. Our Nondiscrimination Policy ensures that all individuals are treated fairly and without bias, regardless of race, gender, sexual orientation, disability, or other protected characteristics.</p>
                                <p class="mt-auto"><a href="#nonD" class="border-white btn btn-primary btn-sm align-self-end" role="button">More Information</a></p>
                            </div>   
                        </div>
                    </div>

                    <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">                             
                        <div class="card">
                            <h5 class="fw-bold mb-1 text-primary">
                                <span style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i class="fa-solid fa-people-roof fa-2x" style="color:lightblue;text-shadow:2px 2px 4px #000000;" title="Event"></i></span> </h5>
                            <center><img src="../images/decoration/ieeePolicies.png" class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center> 
                            <div class="card-body d-flex flex-column p-1">
                                <h5 class="fw-bold mb-1">Event Conduct Policy</h5>
                                <p class="mb-1 lh-sm">To create a positive and productive atmosphere at our events, the Event Conduct Policy sets clear expectations for participant behavior. This policy is designed to ensure that all IEEE events are welcoming, safe, and conducive to professional and personal growth.
                                </p> 
                                <p class="mt-auto"><a href="#eventC" class="border-white btn btn-primary btn-sm align-self-end" role="button">More Information</a></p>
                            </div>
                        </div>
                    </div>

                    <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">                             
                        <div class="card">
                            <h5 class="fw-bold mb-1 text-primary">
                                <span style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i class="fa-solid fa-user-shield fa-2x" style="color:lightblue;text-shadow:2px 2px 4px #000000;" title="User Privacy"></i></span> </h5>
                            <center><img src="../images/decoration/ieeePolicies.png" class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center> 
                            <div class="card-body d-flex flex-column p-1">
                                <h5 class="fw-bold mb-1">Privacy Policy</h5>
                                <p class="mb-1 lh-sm">Protecting the personal information of our members and participants is of utmost importance to IEEE. Our Privacy Policy outlines how we collect, use, and safeguard your data, ensuring transparency and trust in our interactions.
                                </p> 
                                <p class="mt-auto"><a href="#privacy" class="border-white btn btn-primary btn-sm align-self-end" role="button">More Information</a></p>
                            </div>
                        </div>
                    </div> 

                    <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">                             
                        <div class="card">
                            <h5 class="fw-bold mb-1 text-primary">
                                <span style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i class="fa-solid fa-file-circle-check fa-2x" style="color:lightblue;text-shadow:2px 2px 4px #000000;" title="file checked"></i></span> </h5>
                            <center><img src="../images/decoration/ieeePolicies.png" class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center> 
                            <div class="card-body d-flex flex-column p-1">
                                <h5 class="fw-bold mb-1">Publication Ethics</h5>
                                <p class="mb-1 lh-sm">The <b>Publication Ethics and Malpractice Statement</b> ensures all papers are reviewed by experts for relevance, originality, and accuracy. It enforces ethical standards, including avoiding plagiarism, ensuring originality, and disclosing financial support. Rejected articles are not re-reviewed, and unsuitable submissions may be rejected without review.
                                </p> 
                                <p class="mt-auto"><a href="#pubE" class="border-white btn btn-primary btn-sm align-self-end" role="button">More Information</a></p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>  
    </section>

    <!-- Code of Conduct -->

    <section id="codeC">
        <div class="container-fluid align-content-start pt-5 pb-0">
            <ul class="breadcrumb">
                <li><a href="index.php">About</a></li>
                <li><a href="ieeePolicies.php">IEEE Policies</a></li>
                <li>Code_of_Conduct</li>
            </ul> 
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/ieeePolicies.png"  alt="IEEE Policies Image"> 
                        </div>
                        <h4 class="display-6 fw-bold">Code of Conduct</h4>
                        <p class="fs-5 mb-4">The IEEE Code of Conduct outlines rules such as respecting others and their privacy, treating people fairly without harassment or discrimination, avoiding harm to others' property, reputation, or employment, refraining from retaliation against those who report misconduct, and complying with all applicable laws and IEEE policies. Key principles include rejecting bribery, avoiding conflicts of interest, protecting confidential information, and respecting intellectual property rights.
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        <div class="container-fluid py-3">
            <div class="row">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <h5 class="display-6 fw-bold">IEEE Code of Conduct</h5>
                        <p class="lh-sm">Approved by the IEEE Board of Directors, June 2014</p>
                        <p class="lh-sm">We, the members and employees of IEEE, recognize the importance of our technologies in affecting the quality of life throughout the world and we accept a personal obligation to our professions, the members of IEEE, and other individuals involved in IEEE activities in our fields of interest. By this obligation we commit ourselves to the highest standards of integrity, responsible behavior, and ethical and professional conduct. We agree to be bound by the following rules:</p><ol class="list-group list-group-numbered">
                            <li class="list-group-item ml-2">Be respectful of others<ul><li>We will be respectful of others, including IEEE members and IEEE employees, and will act in a professional manner while participating in IEEE activities.</li>
                                    <li>We will be respectful of the privacy of others and the protection of their
                                        personal information and data.</li></ul></li>
                            <li class="list-group-item ml-2"> Treat people fairly<ul><li>We will not engage in harassment of any kind, including sexual harassment, or bullying behavior whether in person, via cybertechnology or otherwise.</li>
                                    <li> We will not discriminate against any person because of characteristics
                                        protected by law (e.g., age, ancestry, color, disability or handicap, national origin, race, religion, gender, sexual or affectional orientation, gender identity, gender expression, appearance, matriculation, political affiliation, marital status, veteran status).</li></ul></li>
                            <li class="list-group-item ml-2">Avoid injuring others, their property, reputation or employment<ul><li>We will avoid injuring others, their property, data, reputation, or employment by false or malicious action.</li>
                                    <li>We will not engage in or participate in the spreading of any malicious rumors, defamation or any other verbal or physical abuses, against an IEEE member, employee or other person, whether on the Internet or otherwise.</li></ul></li>
                            <li class="list-group-item ml-2">Refrain from retaliation<ul><li>We will not retaliate against any IEEE member, employee or other person who reports an act of misconduct, or who reports any violation of the IEEE Code of Ethics or this Code of Conduct.</li>
                                    <li> We will not retaliate against any person who makes IEEE aware of the violation of any laws, rules or regulations in connection with IEEE activities.</li></ul></li>
                            <li class="list-group-item ml-2">Comply with applicable laws in all countries where IEEE does business and with the IEEE policies and procedures<ul><li>We will comply with all applicable laws, rules and regulations governing IEEE’s business conduct worldwide and all relevant procedures established by IEEE whenever and wherever we are acting on behalf of IEEE, or participating in IEEE activities, including but not limited to the following:<ul class="list-group"><li class="list-group-item ml-2">a) Rejecting bribery in all forms.</li>
                                            <li class="list-group-item ml-2">b) Avoiding real or perceived conflicts of interest whenever possible, and disclosing them to affected parties when they do exist.</li>
                                            <li class="list-group-item ml-2">c) Protecting confidential information belonging to IEEE and personal information belonging to IEEE members, employees and other persons.</li>
                                            <li class="list-group-item ml-2">d) Not agreeing with competing persons to fix prices or reduce price competition through allocation of customers or markets, manipulate bids in any competitive bidding process, or engage in other acts that result in restraining trade.</li>
                                            <li class="list-group-item ml-2">e) Not misusing or infringing the intellectual property of others.</li></ul></li></ul></li></ol>
                        <p class="lh-sm">Download <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/about/ieee_code_of_conduct.pdf" class="border-white btn btn-primary btn-sm" role="button">IEEE Code of Conduct (PDF)</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Code of Ethics -->

    <section id="codeE">
        <div class="container-fluid align-content-start pt-5 pb-0">
            <ul class="breadcrumb">
                <li><a href="index.php">About</a></li>
                <li><a href="ieeePolicies.php">IEEE Policies</a></li>
                <li>Code_of_Ethics</li>
            </ul> 
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/ieeePolicies.png"  alt="IEEE Policies Image"> 
                        </div>
                        <h4 class="display-6 fw-bold">Code of Ethics</h4>
                        <p class="fs-5 mb-4">The IEEE members commit to the highest ethical and professional conduct, recognizing the impact of technology on global quality of life. They pledge to uphold integrity, prioritize public safety and sustainability, improve technological understanding, avoid conflicts of interest and unlawful conduct, seek honest feedback, maintain technical competence, treat all individuals with fairness and respect, avoid harassment and harm, and support adherence to the code among colleagues and co-workers.
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        <div class="container-fluid py-3">
            <div class="row">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <h5 class="display-6 fw-bold">IEEE Code of Ethics</h5>
                        <p class="lh-sm">Adopted by the IEEE Board of Directors June 2020</p>
                        <p class="lh-sm">We, the members of the IEEE, in recognition of the importance of our technologies in affecting the quality of life throughout the world, and in accepting a personal obligation to our profession, its members and the communities we serve, do hereby commit ourselves to the highest ethical and professional conduct and agree:</p><ol class="list-group list-group-numbered">

                            <p class="lh-sm">I. To uphold the highest standards of integrity, responsible behavior, and ethical conduct in professional activities.</p>

                            <li class="list-group-item ml-2"> to hold paramount the safety, health, and welfare of the public, to strive to comply with ethical design and sustainable development practices, to protect the privacy of others, and to disclose promptly factors that might endanger the public or the environment;</li>

                            <li class="list-group-item ml-2">to improve the understanding by individuals and society of the capabilities and societal implications of conventional and emerging technologies, including intelligent systems;</li>

                            <li class="list-group-item ml-2"> to avoid real or perceived conflicts of interest whenever possible, and to disclose them to affected parties when they do exist;</li>

                            <li class="list-group-item ml-2"> to avoid unlawful conduct in professional activities, and to reject bribery in all its forms;</li>

                            <li class="list-group-item ml-2"> to seek, accept, and offer honest criticism of technical work, to acknowledge and correct errors, to be honest and realistic in stating claims or estimates based on available data, and to credit properly the contributions of others;</li>

                            <li class="list-group-item ml-2"> to maintain and improve our technical competence and to undertake technological tasks for others only if qualified by training or experience, or after full disclosure of pertinent limitations;</li>

                            <p class="lh-sm">II. To treat all persons fairly and with respect, to not engage in harassment or discrimination, and to avoid injuring others.</p>

                            <li class="list-group-item ml-2"> to treat all persons fairly and with respect, and to not engage in discrimination based on characteristics such as race, religion, gender, disability, age, national origin, sexual orientation, gender identity, or gender expression;</li>

                            <li class="list-group-item ml-2"> to not engage in harassment of any kind, including sexual harassment or bullying behavior;</li>

                            <li class="list-group-item ml-2"> to avoid injuring others, their property, reputation, or employment by false or malicious actions, rumors or any other verbal or physical abuses;</li>

                            <p class="lh-sm">III. To strive to ensure this code is upheld by colleagues and co-workers.</p>

                            <li class="list-group-item ml-2"> to support colleagues and co-workers in following this code of ethics, to strive to ensure the code is upheld, and to not retaliate against individuals reporting a violation.</li></ol>

                        <p class="lh-sm">Download <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/about/corporate/ieee-code-of-ethics.pdf" class="border-white btn btn-primary btn-sm" role="button">IEEE Code of Ethics (PDF)</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Non discrimination -->

    <section id="nonD">
        <div class="container-fluid align-content-start pt-5 pb-0 bg-body-secondary">
            <ul class="breadcrumb">
                <li><a href="index.php">About</a></li>
                <li><a href="ieeePolicies.php">IEEE Policies</a></li>
                <li>Nondiscrimination</li>
            </ul>  
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/ieeePolicies.png"  alt="IEEE Policies Image"> 
                            </div>
                        </div>
                        <h4 class="display-6 fw-bold">Nondiscrimination</h4>
                        <p class="fs-5 mb-4">IEEE is dedicated to providing equal opportunities and eliminating discrimination in all its forms. Our Nondiscrimination Policy ensures that all individuals are treated fairly and without bias, regardless of race, gender, sexual orientation, disability, or other protected characteristics.</p>
                    </div>
                </div>    
            </div>
        </div>
        <div class="container-fluid py-3 bg-body-secondary">
            <div class ="row">
                <div class= "col text-sm-left">
                    <h6 class="display-6 fw-bold">IEEE Policy Against Discrimination and Harassment</h6>
                    <p class="lh-sm">(IEEE Policies, Section 9.27)</p>
                    <p class="lh-sm">IEEE, consistent with the purposes articulated in Article I of the IEEE Constitution, is committed to the realization and maintenance of an environment in which members may have full and productive careers free from Discrimination or Harassment. IEEE is committed to the principle that all persons shall have equal access to programs, facilities, services, and employment without regard to personal characteristics not related to ability, performance, or qualifications as determined by IEEE policy and/or applicable laws.</p>
                    <p class="lh-sm">IEEE prohibits Discrimination, Harassment and Bullying against any person for any reason, for example, because of age, ancestry, color, disability or handicap, national origin, race, religion, gender, sexual or affectional orientation, gender identity, appearance, matriculation, political affiliation, marital status, veteran status or any other characteristic protected by law. IEEE employees, volunteers, members, and other constituents of the IEEE, when and where ever those individuals are conducting IEEE business or participating in IEEE events or activities, shall maintain an environment free of Discrimination, including Harassment, Bullying, and Retaliation.</p>
                    <p class="lh-sm">For the complete Policy: download <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/about/whatis/nondiscrimination.pdf" class="border-white btn btn-primary btn-sm" role="button">IEEE Policies, Section 9.26 - IEEE Policy Against Discrimination and Harassment (PDF, 45 KB)</a> </p> 
                </div>
            </div>    
        </div>
    </section>

    <!-- Event Conduct -->

    <section id="eventC">
        <div class="container-fluid align-content-start pt-5 pb-0">
            <ul class="breadcrumb">
                <li><a href="index.php">About</a></li>
                <li><a href="ieeePolicies.php">IEEE Policies</a></li>
                <li>Event_Conduct</li>
            </ul>
            </ul> 
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/ieeePolicies.png"  alt="IEEE Policies Image"> 
                        </div>
                        <h4 class="display-6 fw-bold">IEEE Event Conduct & Safety Statement for Conferences</h4>
                        <p class="fs-5 mb-4">IEEE believes in openness, international collaboration, and the free flow of talent and ideas. Meetings, conferences, and other events provide a forum for the exchange of those technical and humanitarian conversations. IEEE is committed to providing a safe, productive, and welcoming environment to all conference, event, and meeting participants who engage with IEEE in these conversations.</p>

                        <p class="fs-5 mb-4">To support this concept, IEEE has created a conduct and safety statement that will become the IEEE credo for conferences, events, and meetings. </p>   
                    </div>
                </div>    
            </div>
        </div>
        <div class="container-fluid py-3 bg-body-secondary">
            <div class ="row">
                <div class= "col text-sm-left">
                    <h6 class="display-6 fw-bold">Event Conduct and Safety Statement Language:</h6> 
                    <p class="lh-sm">IEEE believes that science, technology, and engineering are fundamental human activities, for which openness, international collaboration, and the free flow of talent and ideas are essential. Its meetings, conferences, and other events seek to enable engaging, thought-
                        provoking conversations that support IEEE’s core mission of advancing technology for humanity. Accordingly, IEEE is committed to providing a safe, productive, and welcoming environment to all participants, including staff and vendors, at IEEE-related events.</p>
                    <p class="lh-sm">IEEE has no tolerance for discrimination, harassment, or bullying in any form at IEEE-related events. All participants have the right to pursue shared interests without harassment or discrimination in an environment that supports diversity and inclusion. Participants are expected to adhere to these principles and respect the rights of others.</p>
                    <p class="lh-sm">IEEE seeks to provide a secure environment at its events. Participants should report any behavior inconsistent with the principles outlined here, to the conference staff (<a href="mailto:edunine@edunine.eu">edunine@edunine.eu</a>), security or venue personnel, or to <a href="mailto:eventconduct@ieee.org.">eventconduct@ieee.org</a>.</p>
                    <p class="lh-sm">Download the <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/conferences/Event%20Conduct%20and%20Safety%20Statement.pdf" class="border-white btn btn-primary btn-sm" role="button">Conduct and Safety Statement (PDF, 134 KB)</a></p>     
                </div>
            </div> 
        </div>

    </section>
    <!-- Privacy policy -->

    <section id="privacy">
        <div class="container-fluid align-content-start pt-5 pb-0">
            <ul class="breadcrumb">
                <li><a href="index.php">About</a></li>
                <li><a href="ieeePolicies.php">IEEE Policies</a></li>
                <li>Privacy_Policy</li>
            </ul>
            </ul> 
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/ieeePolicies.png"  alt="IEEE Policies Image"> 
                        </div>
                        <h4 class="display-6 fw-bold">IEEE Privacy Policy</h4>
                        <p class="fs-5 mb-4">At IEEE, we prioritize your privacy and aim to provide you with the information, content, and experiences that are most relevant to you. We are dedicated to safeguarding the personal information of our members, participants, volunteers, and other contacts.</p>

                    
                    </div>
                </div>    
            </div>
        </div>
        <div class="container-fluid py-3 bg-body-secondary">
            <div class ="row">
                <div class= "col text-sm-left">
                    <h6 class="display-6 fw-bold">IEEE Privacy Policy</h6> 
                    <p class="lh-sm">This privacy policy applies to all personal data processed by full-time and part-time employees, volunteers when acting on behalf of IEEE, contractors and partners doing business on behalf of IEEE, as well as all legal entities, all operating locations in all countries, and all business processes conducted by IEEE. </p>
                    <p class="lh-sm">The IEEE EDUNINE Privacy Policy is summarized in the EDUNINE2025 OpenConf System. For details, please visit
                    <a href="https://submission.copec.eu/edunine2025/privacy_policy.php" class="border-white btn btn-primary btn-sm" role="button">Privacy Policy</a>.</p>
                    <p class="lh-sm">For details about the complete policy, visit <a href="https://www.ieee.org/security-privacy.html" class="border-white btn btn-primary btn-sm" role="button">IEEE Privacy Policy</a>.</p>     
                </div>
            </div> 
        </div>

    </section>
    <!-- Publication ethics policy -->

    <section id="pubE">
        <div class="container-fluid align-content-start pt-5 pb-0">
            <ul class="breadcrumb">
                <li><a href="index.php">About</a></li>
                <li><a href="ieeePolicies.php">IEEE Policies</a></li>
                <li>Publication_Ethics</li>
            </ul>
            </ul> 
        </div>
        <div class= "container-fluid tope  pb-5">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/ieeePolicies.png"  alt="IEEE Policies Image"> 
                        </div>
                        <h4 class="display-6 fw-bold">Publication Ethics and Malpractice Statement</h4>
                        <p class="fs-5 mb-4">The <b>Publication Ethics and Malpractice Statement</b> outlines the review process for submitted papers, requiring evaluation by at least two or three expert reviewers. Papers are assessed based on relevance, significance, originality, readability, and language. Decisions include acceptance or rejection, with rejected articles not re-reviewed. Unsuitable articles may be rejected without review. Acceptance is subject to legal requirements regarding libel, copyright infringement, and plagiarism. Reviewers must highlight any significant overlap with existing publications. Papers must allow replication of results, and fraudulent or inaccurate statements are unacceptable. Authors must ensure originality and proper citation, avoid submitting the same manuscript to multiple publications, limit authorship to significant contributors, and disclose all financial support.
                        </p>   
                    </div>
                </div>    
            </div>
        </div>
        <div class="container-fluid py-3 bg-body-secondary">
            <div class ="row">
                <div class= "col text-sm-left">
                    <h6 class="display-6 fw-bold">IEEE Publication Ethics and Malpractice Statement:</h6> 
                    <p class="lh-sm">All  submitted  papers  are  subject  to  a  review  process  by  at  least  two  or  three  international  reviewers  that  are  experts  in  the  area  of  the  paper.</p>

                    <p class="lh-sm">The  factors  that  are  taken  into  account  in  review  are  relevance,  significance,  originality,  readability,  and  language.</p>
                    <p class="lh-sm">The  possible  decisions  include  acceptance  or  rejection.</p>
                    <p class="lh-sm">Rejected  articles  will  not  be  re-reviewed.</p>
                    <p class="lh-sm">Articles  may  be  rejected  without  review  if  they  are  obviously  not  suitable  for  publication.</p> 
                    <p class="lh-sm">The  paper  acceptance  is  constrained  by  such  legal  requirements  as  shall  then  be  in  force  regarding  libel,  copyright  infringement,  and  plagiarism.</p>
                    <p class="lh-sm">A  reviewer  should  also  call  to  the  publisher's  attention  any  substantial  similarity  or  overlap  between  the  manuscript  under  consideration  and  any  other  published  paper  of  which  they  have  personal  knowledge.</p>
                    <p class="lh-sm">A  paper  should  contain  sufficient  detail  and  references  to  permit  others  to  replicate  the  work.  Fraudulent  or  knowingly  inaccurate  statements  constitute  unethical  behavior  and  are  unacceptable.</p>
                    <p class="lh-sm">The  authors  should  ensure  that  they  have  written  entirely  original  works,  and  if  the  authors  have  used  the  work  and/or  words  of  others  that  this  has  been  appropriately  cited  or  quoted.</p>
                    <p class="lh-sm">Submitting  the  same  manuscript  to  more  than  one  publication  concurrently  constitutes  unethical  publishing  behavior  and  is  unacceptable.</p>
                    <p class="lh-sm">Authorship  should  be  limited  to  those  who  have  made  a  significant  contribution  to  the  conception,  design,  execution,  or  interpretation  of  the  reported  work.</p>
                    <p class="lh-sm">All  sources  of  financial  support  for  the  project  should  be  disclosed.</p>
                </div>
            </div> 
        </div>

    </section>
    <section id="dates">
        <?php include "../includesHtml/timeline.html" ?>    

    </section>

    <!-- Footer section -->
    <div class ="container-fluid">
        <!-- footer  -->
        <?php include "../includesHtml/final.html" ?> 
    </div>
     <script src ="../js/datesFillNewTimeline2.js?1"></script>
    <script src ="../js/readmorereadless.js"></script>
    <script src ="../js/backTop.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>                      