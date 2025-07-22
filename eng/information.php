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
        <title> EDUNINE2026 English Website: Composing your Paper, review and submission</title>

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
                    <li>Composing_Conference_Paper_and_Submission</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/paperComposition.jpg"  alt="Paper Composition Image">
                            </div>
                            <h2 class="display-6 fw-bold">Composing your Conference Paper and Paper Submission</h2>

                            <p class="fs-5 mb-4">Discover crucial submission information! Click below for detailed overviews of submission categories, guidelines, themes, quality standards, and templates. Craft your paper as required and submit your original, unpublished manuscripts as a category 1 to 3 Full Paper or Work-in-Progress, or category 4 Doctoral Symposium Paper, all in English. We also accept Workshop as category 5 papers, in English. Ready to learn more? Explore the details below!</p>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <!-- checklist  -->
        <section id="suitable">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="information.php">Composing_Conference_Paper_and_Submission</a></li>
                    <li>Manuscript Pre-submission Checklist</li>
                </ul> 
            </div>
            <div class="container-fluid">
                <!-- sequence section -->
                <div class="container-fluid px-4 py-5">
                    <h2 class="pb-2 border-bottom display-6 fw-bold">Manuscript Pre-Submission Checklist</h2>
                </div>
                 <div class= "container-fluid tope  pb-5">
                    <div class="row g-5">
                        <div class= "col text-sm-left">
                            <div class="clearfix">
                                <div class="text-center">
                                    <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/presubmission.jpg"  alt="Suitable Analysis Image"> 
                                </div>
                                <h4 class="display-6 fw-bold">Conference Suitability Analysis</h4>
                                <p class="fs-5 mb-4">Review the conference's call for papers, scope, and topics list to determine if your manuscript aligns with the specified categories, themes and research areas. Ensure that your paper addresses the key topics highlighted by the conference and meets the relevance criteria. This analysis will help you decide if the conference is the appropriate venue for your submission. Explore the details below! 
                                </p>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="container-fluid py-3 bg-body-secondary">
                    <div class="row">
                        <div class= "col text-sm-left">
                            <div class="clearfix">
                                <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/callForPapers.jpg" alt="Call for Papers"> <h5 class="display-6 fw-bold">EDUNINE2026 Call for Papers: Summary</h5>
                                <p class="lh-sm"><b>EDUNINE2026</b>  will be a hybrid conference on <b><u>Education in Engineering, Computing, and Technology</u></b>, featuring both online and in-person presentations at <b>Tecnológico Monterrey</b> in <b>Mexico City, Mexico</b>. Authors can present either in person or online, with both formats valued equally. All participants will have access to all sessions.</p>

                                <p class="lh-sm">Authors are invited to submit original contributions in English, which will undergo a rigorous peer-review process, in the following categories aligned with the field of interest of the IEEE Education Society and within the scope of IEEE:</p><ul>
                                    <li><b>Category 1:</b> Implemented teaching techniques, classroom experience reports, or pedagogical tools (as full papers or work-in-progress papers)
                                    </li><li><b>Category 2:</b> New curricula and educational program proposals, including regional or national adaptations (as full papers)
                                    </li><li><b>Category 3:</b> Educational research papers (as full papers)
                                    </li><li><b>Category 4:</b> Research-in-Development (RID) papers for doctoral students (as doctoral symposium papers).
                                    </li><li><b>Category 5:</b> Workshop Proposals.
                                    </li></ul>
                                <p class="lh-sm">Accepted papers will be included in the IEEE digital library, <b>IEEEXplore®</b>, which partners with Google, Elsevier, Web of Science, and others. <b>Oral presentations</b> will be in <i>English</i>, <i>Portuguese</i>, and <i>Spanish</i>. The conference will also feature pre-workshops, plenaries, panels, hybrid social events and a pre-conference cultural immersive tour. <b>Submit your papers on the conference streams topics and conference scope listed in the next sub-sections</b>.</p>
                                <p class="text-end"><a href="doc/cfp.pdf" class="border-white btn btn-primary btn-sm" role="button">Read the full call for papers</a> </p>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="container-fluid py-3 bg-white">
                    <div class="row">
                        <div class= "col text-sm-left">
                            <div class="clearfix">
                                <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/scope.jpg" alt="Scope and Areas of Interest"> <h5 class="display-6 fw-bold">EDUNINE Scope and Areas of Interest</h5> 
                                <p class="lh-sm">This conference serves as a central hub for researchers and educators to share cutting-edge research and best practices in <b>Engineering, Technology, and Computing (ETC) Education</b>. We encourage diverse submissions that explore the field through interdisciplinary and theoretical lenses.</p>
                                <h6 class="fw-bold">Thematic Relevance:</h6>
                                <p class="lh-sm">Papers should address the conference topics, including innovations, trends, challenges, and solutions in relevant fields that encompasses the IEEE Education Society’s field of interest which are the theory and practice of education and educational technology related to the effective delivery of knowledge in disciplines that fall within IEEE’s scope, such as engineering, computing, and technology-related fields. <i>Source</i>: <span class="text-end"><a href="https://ieee-edusociety.org/about/society-overview#mission" class="border-white btn btn-primary btn-sm" role="button">IEEE Education Society's Field of Interest</a> </span></p>

                                <p>While interdisciplinary and closely related topics may be a wonderful addition to a conference for publication in IEEE Xplore®, the papers themselves should be in an IEEE field of interest. Challenges arise when non-IEEE fields of interest are included.                      
                                <h6 class="fw-bold">Responding to a Dynamic Landscape: </h6> 
                                <span id="dots">...</span><div id="more">
                                    <p class="lh-sm">This conference acknowledges the rapid evolution of ETC education, particularly at the undergraduate level. We welcome discussions on emerging responsibilities in the field, such as: </p><p class="lh-sm"><ul><li>
                                            Expanding ETC education to K-12 and continuing education programs.</li><li>
                                            Promoting student body diversification to reflect population demographics.</li><li>
                                            Integrating the history and societal impact of technology into curriculum.</li><li>
                                            Cultivating technological literacy for non-engineering audiences.</li>   
                                    </ul>  
                                    <h6 class="fw-bold"> Interdisciplinary Focus:</h6>                           
                                    <p class="lh-sm">While the core focus is on ETC education, submissions from related fields are welcome. This includes education in other engineering branches, physical sciences, life sciences, or applied mathematics, as long as they demonstrate significant relevance to ETC education. </p> 

                                    <h6 class="fw-bold"> Emphasis on Pedagogy:</h6>                          
                                    <p class="lh-sm">Submissions involving digital technology should primarily focus on its pedagogical application and broader educational implications. Papers on software/hardware implementation should prioritize the educational context and learning outcomes, not just technical details. Detailed implementation architecture is best suited for online resources (URLs) and not the paper itself. </p>

                                    <h6 class="fw-bold"> Scope Considerations:</h6>                         
                                    <p class="lh-sm">Papers on non-technical subjects like tourism, philosophy, art, etc., typically fall outside the conference scope.</p></div>
                                <button class="border-white btn btn-primary btn-sm" onclick="changeReadMore()" id="myBtn">Read more</button>
                            </div>
                        </div>
                        <!--  </div> -->
                    </div>
                </div>
                <div class="container-fluid py-3 bg-body-secondary">
                    <div class="row">
                        <div class= "col text-sm-left">
                            <div class="clearfix">
                                <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/topics.jpg" alt="Topics"> <h5 class="display-6 fw-bold">EDUNINE Topics</h5>
                                <p class="lh-sm">This conference brings together educators and researchers to explore innovative approaches to teaching and learning in <b><u>Engineering, Technology, and Computing (ETC) Education</u></b>. The following thematic streams highlight key areas of discussion, fostering collaboration and knowledge exchange to equip educators with the tools and strategies to create engaging, inclusive, and future-proof learning environments for all students.</p> 
                                <p>Topics are organized into the following thematic streams, including but not limited to:</p> 
                            </div>  
                        </div> 
                    </div>  
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card"> 
                                <div class="card-header">
                                    <h6 class="fw-bold">I. Fostering Innovation and Inclusion in ETC (Engineering, Technology and Computing) Education:</h6>
                                </div>  
                                <div class="card-body"><ul>
                                        <li>Engaging Pedagogies & Learning Activities.</li><li>
                                            21st Century Skills & Competencies.</li><li>
                                            Inclusive Learning Environments.</li><li>
                                            Lifelong Learning & Professional Development.</li><li>
                                            Strategies for Increased Women Participation.</li><li>
                                            Interdisciplinary & Experiential Learning.</li><li>
                                            Multicultural & Indigenous Perspectives.</li><li>
                                            Language Learning in Technological Contexts.</li><li>
                                            Research & Innovation in the ETC Classroom.</li><li>
                                            Sustainability & Ethical Considerations.</li><li>
                                            Adapting to Emerging Technologies.</li><li>
                                            Learning Continuity in Challenging Environments.</li></ul>
                                </div> 
                            </div> 
                        </div>

                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card"> 
                                <div class="card-header">
                                    <h6 class="fw-bold">II. Designing Effective Learning Spaces in ETC (Engineering, Technology and Computing) Education:</h6>
                                </div>  
                                <div class="card-body"><ul>
                                        <li>
                                            Blended & Technology-Enhanced Learning Environments.</li><li>
                                            Accessible & Inclusive Learning Environments.</li><li>
                                            Flexible & Open Learning Spaces.</li><li>
                                            Minimizing Educational Disruption.</li><li>
                                            Engaging Hybrid Learning Design & Activities.</li><li>
                                            Educational Technologies for Equity & Inclusion.</li><li>
                                            Online, E-learning, & Mobile Learning Platforms.</li><li>
                                            MOOCs & Their Impact on ETC Education.</li><li>
                                            Smart Classrooms & Immersive Learning Technologies.</li><li>
                                            Game-Based Learning & Gamification Strategies.</li><li>
                                            X-Reality & the Future of Learning Environments.</li><li>
                                            STEM Learning Spaces for All Ages.</li><li>
                                            Assistive Technologies for Diverse Learners.</li></ul>
                                </div> 
                            </div> 
                        </div>

                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card"> 
                                <div class="card-header">
                                    <h6 class="fw-bold">
                                        III. Strengthening Educational Organization & Practices in ETC (Engineering, Technology and Computing) Education:</h6>
                                </div>  
                                <div class="card-body"><ul>
                                        <li>
                                            Curriculum Design & Development Strategies.</li><li>
                                            Accreditation & Quality Assurance Processes.</li><li>
                                            Assessment & Evaluation for Learning.</li><li>
                                            Ethical Dilemmas in ETC Education.</li><li>
                                            Responsible AI Integration in ETC Education.</li><li>
                                            Promoting STEM Education in K-12 & Higher Education.</li><li>
                                            Effective Teacher Education & Professional Development.</li><li>
                                            Faculty Support Systems & Mentorship Programs.</li><li>
                                            Bridging the Research-Practice Gap in ETC.</li><li>
                                            Learner Support Strategies & Retention Initiatives.</li></ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                
        </section>

        <!-- Determine your manuscript type -->



<!--MEJORAS CODIGO-->>
<section id="typeChoose" class="container-fluid d-flex px-4 py-4" style="gap: 2rem;">
    
    <div id = "LinksSuperiores"class="container-fluid align-content-start pt-5 pb-0 section-content d-none">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?id=dates">Author</a></li>
            <li><a href="information.php">Composing_Conference_Paper_and_Submission</a></li>
            <li>Determine_Manuscript_Category</li>
        </ul> 
    </div>
        

    <button class="btn btn-outline-primary d-lg-none mb-3" onclick="toggleSidebar()">
      ☰ Menu
    </button>

    <!-- SIDEBAR SCROLLABLE -->
    <aside class="sidebar-scrollable">
        <!-- Aquí va el contenido tipo árbol -->
        <div class="sidebar-inner">
            <h6><u>Manuscript Category type</u></h6>
            <ul>
                <li class="toggle-parent">General
                    <ul  class="nested-list">
                        <li><button class="btn btn-link p-0" onclick="showContent('InThisSection')">In this section</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('GeneralInformation')">General Information</button></li>
                    </ul>
                </li>

                <li class="toggle-parent">Categories

                    <ul  class="nested-list">
                        <li><button class="btn btn-link p-0" onclick="showContent('category1')">Categoría 1</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('category2')">Categoría 2</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('category3')">Categoría 3</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('category4')">Categoría 4</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('category5')">Categoría 5</button></li>
                    </ul>
                    
                </li>

                <li class="toggle-parent">Types
                
                    <ul  class="nested-list">
                        <li><button class="btn btn-link p-0" onclick="showContent('Type1')">Full paper</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('Type2')">Work-in-Progress paper</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('Type3')">Doctoral Symposium</button></li>
                        <li><button class="btn btn-link p-0" onclick="showContent('Type4')">Workshop</button></li>
                    </ul>                    

                </li>
            </ul>
        </div>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class = "content-scrollable flex-grow-1">


        <!--GENERAL SECTION-->


        <div id = "InThisSection" class= "container-fluid tope  py-3  section-content ">
            <div class="row g-5">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/paperType.jpg" alt="Choose Manuscript Type"> 
                        </div>
                        <h4 class="display-6 fw-bold">Determine your Manuscript Category and Type</h4>
                        <p class="fs-5 mb-4">This section will guide you through the different categories and their types of submissions  accepted for the EDUNINE2026 conference. We encourage authors to submit original, unpublished work that aligns with the conference themes outlined in the "Scope and Areas of Interest"and "Topics" sections.</p>
                    </div>
                </div>    
            </div>
        </div>

        <div id = "GeneralInformation" class="container-fluid py-3 bg-body-secondary section-content d-none">
            <div class ="row">
                <div class= "col text-sm-left">
                    <h6 class="display-6 fw-bold">General Information on Paper Categories and Submission Types</h6>
                    <p class="lh-sm"><span class="fw-bold">Author Ethics and Responsibilities: </span> We emphasize upholding ethical research and writing practices:</p> 
                    <ul class="lh-sm"><li>
                            Submit original, unpublished work solely authored by the listed individuals.</li><li>
                            Ensure your paper is not currently under review elsewhere.</li><li>
                            Familiarize yourself with the IEEE ethical guidelines on authorship, citation, plagiarism, data integrity, and originality. <span class="text-end"><a href="https://conferences.ieeeauthorcenter.ieee.org/author-ethics/Author" class="border-white btn btn-primary btn-sm" role="button">IEEE Author Center for Conferences: Ethics</a> </span></li><li>
                            Review your manuscript to ensure that it aligns with the conference's scope and the recommended topics provided on this webpage. <span class="text-end"><a href="#checklist" class="border-white btn btn-primary btn-sm" role="button">Manuscript Pre-Submission Checklist</a> </span></li>
                    </ul>  
                    <p class="lh-sm fw-bold">IEEE Paper Writing Requirements:</p>
                    <ul class="lh-sm"><li>All papers must be written in <b>English</b> and adhere to IEEE's publication requirements for the <a  href="http://ieeexplore.ieee.org/Xplore/home.jsp">IEEE  Xplore&reg;  digital  library</a>. These requirements include using proper English language style and formatting according to guidelines outlined in the IEEE Editorial Style Manual.<span class="text-end"><a href="http://journals.ieeeauthorcenter.ieee.org/wp-content/uploads/sites/7/IEEE-Editorial-Style-Manual-for-Authors.pdf" class="border-white btn btn-primary btn-sm" role="button"> IEEE Editorial Style Manual </a></li><li> 
                            Papers not meeting the standard of English required for publication will be returned for revision.</li></ul>       
                    <p class="lh-sm fw-bold">Citation Practices:</p><ul>
                        <li> Proper citation of sources is crucial for ethical and academic writing. The conference mandates the IEEE style for citing references. Refer to the paper template and IEEE Reference Guide for examples.<span class="text-end"><a href="https://ieeeauthorcenter.ieee.org/wp-content/uploads/IEEE-Reference-Guide.pdf"class="border-white btn btn-primary btn-sm" role="button">IEEE Reference Guide</a></span></li><li>   
                            Ensure all sources are properly cited to avoid plagiarism and self-plagiarism.</li></ul>
                    <p class="lh-sm fw-bold">Paper Formatting:</p><ul><li> 
                            All submissions must adhere to the conference paper formatting guidelines, as described in the "Mandatory Conference Paper Templates" section on this webpage.<span class="text-end"><a href="#templateChoose" class="border-white btn btn-primary btn-sm" role="button">Manuscript Templates</a> </span></li><li>
                            Papers not meeting the formatting guidelines required for publication will be rejected.</li></ul>  
                    <p class="lh-sm fw-bold">AI-Generated Text Disclosure:</p><ul><li> 
                            Authors using AI-generated text must disclose this in the paper's acknowledgement section and cite the specific AI system employed (Interim Instructions by IEEE Publications (February 2023)).</li></ul>
                </div>   
            </div> 
        </div>

        <!-- Category 1 -->
        <div id="category1" class="section-content d-none">

            <div class="row bg-info-subtle py-3">
                <div class= "col text-sm-left">
                    <div class="clearfix">
                        <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/paperCat1.jpg" alt="Category 1 Paper Content">
                        <h5 class="fs-3 fw-bold">Category 1: Implemented Teaching Techniques, Classroom Experience Reports, and Pedagogical Tools</h5>
                        <p class="lh-sm">This category invites <b>evidence-based reports of instructional techniques, pedagogical tools, or classroom strategies that have been fully implemented and evaluated</b> in authentic educational settings.</p>
                        <p class="lh-sm">EDUNINE are specifically interested in the <b>educational impact and effectiveness</b> of these tools or approaches in practice—not in the technical or developmental details of the tools themselves. Submissions should focus on <b>how the intervention was used pedagogically</b>, its outcomes, and what educators can learn from it.</p>
                        <p class="lh-sm fs-5 fw-bold"><i>A Category 1 Paper undergoes a double-blind peer review process.</i></p>

                    </div>
                </div>    
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class=" col d-flex flex-fill justify-content-center">
                    <div class="card"> 
                        <div class="card-header">
                            <h6 class="fw-bold">Content must include</h6>
                        </div>  
                        <div class="card-body">
                            <ul><li>A <b>clear and detailed description</b> of the implemented teaching method, tool, or activity;
                                </li><li>A comprehensive explanation of the <b>instructional context</b>, such as course type, student population, and institutional environment;
                                </li><li><b>Empirical evidence of effectiveness</b> and a <b>critical analysis of results</b>, including what was learned, how the intervention affected teaching and learning, and its broader implications;
                                </li><li><b>Reflective insights</b> that help other educators understand how they might adapt or benefit from the reported experience;
                                </li><li><b>Clear situating within prior literature</b>, showing how the intervention builds on, complements, or challenges existing educational research and practices.
                                </li></ul>  
                        </div>
                    </div>  
                </div>
                <div class=" col d-flex flex-fill justify-content-center">
                    <div class="card"> 
                        <div class="card-header">
                            <h6 class="fw-bold">Evaluation will prioritize</h6>
                        </div>  
                        <div class="card-body">             
                            <ul><li>Clarity and specificity of the instructional intervention
                                </li><li>Rigor and transparency in the collection and interpretation of results
                                </li><li>Relevance and educational impact
                                </li><li>Situating the work within relevant prior research and literature
                                </li><li>Transferability and usefulness to other educators                                
                                </li></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-info-subtle py-3">
                <h5 class="fw-bold">Important: </h5>
                <p class="lh-sm">Papers describing ongoing interventions, initial uses without sufficient evidence, or results that are preliminary or not statistically significant should be submitted as <b>Work-in-Progress (WIP) papers</b>, where early-stage insights are welcomed.</p>
                <p class="lh-sm">Submissions that focus primarily on the design, development, or technical aspects of educational tools or platforms—rather than their effective pedagogical application—will <b>not be considered</b>.</p>
                <p class="lh-sm">Manuscripts lacking real-world implementation or results analysis will be rejected.</p> 
            </div>

        </div>

        <!--Category 2-->>

    </main>

</section>





<!-- Manuscript Template -->

        <section id="templateChoose">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="information.php">Composing_Conference_Paper_and_Submission</a></li>
                    <li>Mandatory_Conference_Paper_Template</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  pb-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/templates.jpg"  alt="Choose Template Image"> 
                            </div>
                            <h4 class="display-6 fw-bold">Mandatory Conference Paper Templates</h4>
                            <p class="fs-5 mb-4">The IEEE EDUNINE Conference employs standardized templates to ensure uniformity and coherence in the published proceedings. These templates, are mandatory and provided by IEEE, offer detailed guidance on composing and formatting your research paper according to IEEE Xplore publication requirements.</p>
                            <p class="text-end"><a href="https://www.ieee.org/conferences/publishing/templates.html" class="border-white btn btn-primary btn-sm" role="button">IEEE Conference Templates</a></p>       
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-secondary">
                <div class ="row">
                    <div class= "col text-sm-left">
                        <h6 class="display-6 fw-bold">Selecting the Appropriate Template:</h6> 
                        <p class="lh-sm">For seamless manuscript preparation, authors are required to utilize one of the following IEEE conference templates:</p><ul><li class="fw-bold fs-4">
                                Microsoft Word (.docx) format (A4 paper size)</li>
                            <li class="fw-bold fs-4">LaTeX format</li></ul> 

                        <p class="lh-sm fs-4"> Download the templates <span class="text-end"><a href="https://www.ieee.org/conferences/publishing/templates.html" class="border-white btn btn-primary btn-sm" role="button">IEEE Conference Templates</a></span></p>   

                        <p class="lh-sm fw-bold fs-4">Collaborative Writing with Overleaf:</p>

                        <p class="lh-sm">For authors seeking a collaborative writing environment, Overleaf is a valuable tool. This online platform supports both LaTeX and rich-text document creation and comes pre-loaded with IEEE templates for your convenience. Overleaf offers a wealth of resources – quick guides, tutorials, webinars, and comprehensive documentation – catering to all user levels, from beginners to advanced users. You can explore these resources (link available) to find materials that best suit your needs and expertise. Access links in <span class="text-end"><a href="https://conferences.ieeeauthorcenter.ieee.org/write-your-paper/authoring-tools-and-templates/" class="border-white btn btn-primary btn-sm" role="button">Authoring Tools and Templates in IEEE Author Center</a> </span></p>

                        <p class="lh-sm fw-bold">Benefits of Using Conference Templates:</p>

                        <p class="lh-sm">Employing the official templates simplifies the formatting process, guaranteeing a polished and publication-ready manuscript that adheres to IEEE Xplore's formatting standards. The consistency achieved through these templates fosters a professional and unified presentation of research within the conference proceedings.</p>
                    </div>
                </div> 
            </div>
            <div class="container-fluid py-3 bg-info-subtle">
                <div class ="row">
                    <div class= "col text-sm-left">
                        <h5 class="fs-3 fw-bold">Mastering Microsoft Word Templates: Essential Tips and Tricks</h5>
                        <p class="lh-sm">This guide discusses the benefits of using the template document in Microsoft Word to ensure consistent formatting and facilitate collaborative writing, specifically for IEEE Conference papers. The template provides:</p> 
                        <ul><li class="lh-sm"><span class="fw-bold">Detailed Instruction Set:</span> The document acts as a guide, offering clear instructions and predefined styles for titles, sections, figures, tables, equations, references, etc. It also demonstrates these styles and formats within the document itself, serving as a practical example.</li>

                            <li class="lh-sm"><span class="fw-bold">Reusable Base:</span> This template can be shared and used as the foundation for creating new IEEE conference paper documents. By utilizing the template, authors can simplify the formatting process and easily follow established IEEE style guidelines while working together.
                            </li></ul>
                        <p class="lh-sm">This guide offers options for both individual paper creation and collaborative writing using the template.</p>

                        <h4 class="fw-bold">Two Effective Methods for Utilizing the Template:</h4>

                        <h5 class="fw-bold">A) Developing an Individual IEEE Conference Paper:</h5>
                        <p class="lh-sm">For individual paper creation, users can save a copy of the template as a new .docx file. This enables them to replace the template text with their own content while preserving the styles using "Paste and Match Formatting." Additionally, the Styles Panel in Microsoft Word displays the predefined template styles necessary for incorporating subtitles, lists, figures, tables, equations, and other elements required for writing the paper's content in various sections. <b><u>Please ensure that all guidance text is removed from your conference paper prior to submission to the conference. Failure to remove template text from your paper may result in your paper not being published.</u></b></p>

                        <h5 class="fw-bold">B) Creating a Microsoft Template (.dotx):</h5> 
                        <p class="lh-sm">The recommended approach for collaborative writing is to create a template file (.dotx). This ensures that all collaborators have access to the predefined styles and formats, promoting consistency and compliance with IEEE Xplore requirements.</p> 
                        <p class="lh-sm fw-bold">How to create a Microsoft Template (.dotx):</p><ol><li>
                                Open the Document:</li><li>
                                Launch Microsoft Word and open the conference-template-a4.docx file to create a template with the formats and styles for formatting your paper.</li>
                            <li> Depending on your Operating System and Microsoft Word version, the instructions can differ. Please refer to the Microsoft support or help section in your application. Here we explain the current instructions for Windows and Mac Operating system Microsoft Word application:</li>

                            <div class="row row-cols-2">
                                <div class="col d-flex flex-fill justify-content-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#windowsModal">For Windows</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="windowsModal" tabindex="-1" aria-labelledby="windowsModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen-sm-down">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="windowsModalLabel">Creating a Microsoft Template (.dotx) for Windows</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class=" col d-flex flex-fill justify-content-center">
                                                                <div class="card"> 
                                                                    <div class="card-header">
                                                                        <h6 class="fw-bold">a. Create the template file:</h6>
                                                                    </div>  
                                                                    <div class="card-body">             
                                                                        <ul><li>
                                                                                Click on the "File" tab in the top left corner.</li><li>
                                                                                Select "Save As" from the menu.</li><li>
                                                                                Choose a location on your computer where you want to save the template.</li><li>
                                                                                In the "Save as type" dropdown menu, select "Word Template (*.dotx)".</li><li>
                                                                                Enter a name for your template in the "File name" field.</li><li>
                                                                                Click "Save".</li></ul>
                                                                    </div>
                                                                    <div class="card-header">
                                                                        <h6 class="fw-bold">B. Accessing the Template:</h6>
                                                                    </div>  
                                                                    <div class="card-body">             
                                                                        <ul><li>

                                                                                To use your new template, launch Microsoft Word and go to "File" > "New".</li><li>
                                                                                In the "New" document menu, click "Personal" or "Custom" (depending on your version of Word) to find your template.</li><li>
                                                                                Select the template to create a new document based on it.</li></ul>                                             
                                                                    </div>                          
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>                                       
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex flex-fill justify-content-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#macOSModal">For macOS</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="macOSModal" tabindex="-1" aria-labelledby="macOSModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen-sm-down">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="macOSModalLabel">Creating a Microsoft Template (.dotx) for macOS</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class=" col d-flex flex-fill justify-content-center">
                                                                <div class="card"> 
                                                                    <div class="card-header">
                                                                        <h6 class="fw-bold">a. Create the template file:</h6>
                                                                    </div>  
                                                                    <div class="card-body">             
                                                                        <ul><li>
                                                                                Click "Save as Template" on the File menu.</li><li>
                                                                                In the "Save As" box, type the name that you want to use for the new template (Optional) In the "Where" box, choose a location where the template will be saved. <i>Note:</i> Unless you select a different location, the template is saved in /Users/username/Library/Group Containers/UBF8T346G9.Office/User Content/Templates. </li><li>
                                                                                Next to "File Format", click "Microsoft Word template (.dotx)".</li><li>
                                                                                Click "Save".</li></ul>
                                                                    </div>
                                                                    <div class="card-header">
                                                                        <h6 class="fw-bold">B. Accessing the Template:</h6>
                                                                    </div>  
                                                                    <div class="card-body">             
                                                                        <ul><li>        
                                                                                To start a new document based on your template, on the File menu, click "New from Template", and in "Personal" select the template you want to use.</li><li>
                                                                                Click "Create</li></ul>                                             
                                                                    </div>                          
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>                                       
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <li>Now you have a new document with the text of the template. Write replacing the text with your own text including new text using the styles displayed by the Style Panel. Use the styles of the Style Panel for all the different text styles you need. It is a lot of work but is worthwhile as it generates a well-formatted text as asked for a conference. <b><u>Please ensure that all guidance text is removed from your conference paper prior to submission to the conference. Failure to remove template text from your paper may result in your paper not being published.</u></b> </li></ol>
                    </div>
                </div>
            </div> 

            <div class="container-fluid py-3 bg-light">
                <div class ="row">
                    <div class= "col text-sm-left">
                        <h5 class="fs-3 fw-bold">Create Professional Research Papers: LaTeX Template for Scientific Writing</h5>

                        <p class="lh-sm">This guide provides instructions for formatting your paper using the official IEEE LaTeX template:</p> 
                        <p class="lh-sm fw-bold">Before You Begin:</p><ul><li>  
                                Download the Template zip files and read the LaTeX Template instructions and be sure to use the <b>template's conference mode</b>.</li><li>
                                Install Required Packages: Ensure you have the necessary LaTeX packages installed on your system. Refer to the documentation included with the template for specific package requirements.</li><li>
                                Software: Choose a LaTeX editor or typesetting software that suits your needs. Popular options include Overleaf (online), TeXstudio (free, offline), and TeXworks (free, offline).</li></ul>

                        <p class="lh-sm fw-bold">Formatting Your Paper:</p><ul><li> 
                                <b>Document Structure:</b> The template defines sections like abstract, introduction, main body sections, conclusion, references, etc. Use the provided commands to structure your document accordingly. </li><li>
                                <b>Fonts and Styles:</b> The template pre-defines font sizes, line spacing, and margins to comply with IEEE formatting guidelines. Avoid modifying these unless absolutely necessary.</li><li>
                                <b>Formatting Elements:</b> Utilize the provided commands for formatting figures, tables, equations, citations, and references. Refer to the template documentation for specific syntax and examples.</li><li>
                                <b>Single vs. Double-Column:</b> The template offers options for single or double-column formatting based on conference requirements. Choose the <b><u>double-column layout</u></b> while compiling your document as in the sample file.
                            </li></ul>
                        <p class="lh-sm fw-bold">Additional Tips:</p><ul><li> 
                                <b>Compile and Preview:</b> Regularly compile your LaTeX document (using pdflatex) to ensure proper formatting and catch any errors.</li><li>
                                <b>Template Documentation:</b> Utilize the documentation included with the template for detailed instructions and examples.</li><li>
                                <b>Online Resources:</b> Explore online resources and tutorials dedicated to LaTeX and IEEE paper formatting for further guidance.</li></ul>

                        <p class="lh-sm fw-bold">Beyond these general instructions, customizing your paper with the template might involve:
                        </p><ul><li> 
                                Including author information and affiliations only for <b>Workshop Proposal or DS Manuscripts</b> for the initial submission.</li><li> 
                                Adding section headings and subheadings.</li><li> 
                                Inserting figures, tables, and equations with captions.</li><li> 
                                Defining custom commands for frequently used elements.</li><li> 
                                Formatting citations and references according to the IEEE referencing style.
                            </li></ul>
                        <p class="lh-sm">For specific details on these customizations, refer to the template documentation and online resources catering to IEEE LaTeX formatting.</p>

                        <p class="lh-sm">By following these guidelines and leveraging the template's functionalities, you can efficiently format your paper according to IEEE standards.</p>
                    </div>  
                </div>   
            </div>

        </section>
        
 <section id="submission">
     
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Author</a></li>
                    <li><a href="information.php">Composing_Conference_Paper_and_Submission</a></li>
                    <li>Manuscript_Submission</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/submissionPapers.jpg"  alt="Manuscript Submission">
                            </div>
                            <h2 class="display-6 fw-bold">Manuscript Submission</h2>

                            <p class="fs-5 mb-4">Welcome to the <b>EDUNINE2026 Paper Submission Section!</b> We invite you to submit your original research to the EDUNINE2026 conference. This is an excellent forum to share your work with a global audience of researchers, practitioners, and industry leaders in the field of Engineering, Technology and Computing Education.</p>
                            <p class="fs-5 my-4">Ready to Submit?</p> 
                        </div>
                    </div>    
                </div>
         </div>
            <div class="container-fluid py-5">
                <!-- sequence section -->
                <div class="container-fluid px-4 py-5">
                    <h2 class="pb-2 border-bottom display-6 fw-bold">Important Submission Guidelines:</h2>
                    <p>To ensure a successful submission for the conference, please follow these important guidelines closely. They will help you present your work in a clear and consistent format, and ensure a smooth review process. For a step-by-step guide on composing your paper, visit the <a href="information.php" class="border-white btn btn-primary btn-sm align-self-end" role="button">Composing your Conference Paper</a> page on this website.</p>
                    <ul>
                        <li><b>Scope and Topics</b>: Double-check that your paper aligns with the conference's focus areas.</li> 
                        <li><b>Paper Type: </b> Choose the appropriate category: full paper, WIP, workshop proposal, or Doctoral Symposium submission. </li>
                        <li><b>Language:</b> All submissions must be written in clear and standard <b>English</b>.</li>
                        <li><b>Page Limits:</b> Adhere to the designated page limit for your chosen paper type (details available on the submission platform).</li>
                        <li><b>Template:</b> All written content submissions must strictly follow the formatting guidelines outlined in the conference templates.</li> </ul>
                    <p class="fs-5 mx-4"><b>Before submitting your paper</b>, we encourage you to visit the <b>peer-review</b> webpage:  <a href="reviewNotif.php" class="border-white btn btn-primary btn-sm align-self-end" role="button">Peer Review Process and Notification</a> on this website. This resource provides valuable information about the evaluation process and helps ensure a clear understanding of how your paper will be reviewed.</p>
                    <h4 class="fs-3 mx-auto fw-bold"> Please note </h4>
                    <p class="fs-5 mb-4">Please note that EDUNINE2026 only accepts electronic submissions via <b>EDUNINE2026 SUBMISSION SYSTEM</b> system; <u>email submissions will not be accepted</u>.</p>                                       
                </div>
            </div>                    
        </section>
        <!-- falta agregar el link al nuevo sistema en la siguiente sección -->
        <!-- SECTION WITH INSTRUCTIONS: HOW TO USE DE SUBMISSION SYSTEM   AGREGAR LAS INSTRUCCIONES ELIMINANDO EL TEXTO DEL OPENCONF Y EL INCLUDE DE COMMINGSOON.HTML-->
                    
<!--  Instrucciones para OpenConf -->
<section>
            <div class= "container-fluid tope py-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">

          <?php include "../includesHtml/commingSoon.html" ?>
                                
                              <!--- reemplazar link al sistema de submission e instrucciones de uso 
                              
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/openconf/edu9OpenC.png"  alt="OpenConf system portal Image"> 
                              
                              -->
                              
                            </div>
                            
                            <!--
                            <h2 class="display-6 fw-bold">How to Submit and Manage Your Paper with the EDUNINE2026 OpenConf system</h2>
                            <p class="fs-5 mb-4">This section provides a comprehensive guide on utilizing our online paper administration system for submitting your paper. Here, you'll find a link to the system and step-by-step instructions to ensure a smooth submission process.This guide will walk you through submitting your paper to EDUNINE2026 and managing it after submission.</p>
                                -->
                        </div>
                    </div>    
                </div>
            </div>
    <!--
            <div class="container-fluid py-5 bg-white">
                <div class="border bg-light">
                    <h4 class= "display-6 fw-bold mb-4 "> Access the Manuscript Submission System:</h4> 
                    <h5 class="mb-4">Click the link to access the EDUNINE2026 OpenConf System. <a href="https://submission.copec.eu/edunine2025/" class="border-white btn btn-primary btn-sm" role="button">EDUNINE2026 OpenConf system</a> </h5>
                </div>
                <div class="border bg-info-subtle gy-4 mt-4 text-left">
                    <h3 class=" fw-bold mx-2 mt-4">You'll see the <b>EDUNINE2026 OpenConf</b> login screen:</h3> 
                    <h5 class="mx-2">In the <b>Authors</b> section: </h5> 
                    <p class="mx-4"> You'll find options to submit a new paper or manage an existing one.</p>

                    <img class="shadow p-3 mb-5 bg-body-tertiary rounded img-fluid mx-auto d-block " src= "../images/openconf/portalEng.png" alt="EDUNINE2026 OpenConf Portal">

                    <h5 class="fw-bold mt-4 mx-4"><b>Language Selector:</b> (See #1 in the image)</h5>
                    <p class="mt-2 px-4">Select your preferred language (<i>English</i>, <i>Spanish</i>, or <i>Portuguese</i>) from the language selector.</p> 
                    <p class="lh-sm fw-thin mx-4 "><b>Note:</b> While the interface can be displayed in different languages, the paper content and requested information must be submitted in <b>English</b>, the conference's official language.</p> 
                    <h5 class="fw-bold mt-4 mx-4">OpenConf Options: (See #2 in the image) </h5>
                    <ul>

                        

                        <li class="lh-sm mt-4 mx-4 mb-0"><span class="h6 fw-bold">Make Submission:</span> This option allows you to register a new paper. The system will assign a unique submission ID that grants you access to manage your paper. You'll also complete a submission form with details about your paper and choose a password. Use this option only for new paper submissions. </li>
                        <div><p class="text-end mx-4 mb-2"><b>New to OpenConf?</b> Click on 
                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#makesubModal">How to Submit</button></p>
                            
                            <div class="modal fade" id="makesubModal" tabindex="-1" aria-labelledby="makesubModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="makesubModalLabel">How to Submit a New Paper</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <h6>Click "Make Submission" in the "Author" section to begin your paper registration.</h6> 
                                                <p><b>Enter Paper Information:</b> This form will appear:</p>
                                                <img class="rounded  img-fluid" src= "../images/openconf/submissionFormEng.png" alt="OpenConf Submission Form">
                                                <p>Fill out the details, including:</p>
                                                <ul>
                                                    <li><b>Consent:</b> Please, check the consent box.</li>
                                                    <li><b>Title:</b> Enter the title of your paper.</li>
                                                    <li><b>Authors:</b> Include the full names, affiliations, country, and email addresses of all authors. If you have more than five authors, click "Add Author" to include them.</li>
                                                    <li><b>Keywords:</b> Provide relevant keywords that describe your paper's content.</li>
                                                    <li><b>Topics:</b> Select all the topics that best align with your paper's subject matter to help reviewers categorize it.</li>
                                                    <li><b>Abstract:</b> Copy the paper abstract (maximum 150 words in a single paragraph) which summarize your paper's key points. Avoid copying text directly from the PDF paper file, as carriage returns may not translate correctly.</li>
                                                    <li><b> Contact author:</b> This refers to the author designated to receive email notifications regarding any changes, updates, or status information about your paper. The contact author you selected during the "Make Submission" process will be the recipient of these emails.</li>
                                                    <li><b>Create a password</b> to manage your submission using the other OpenConf options.</li>
                                                </ul>
                                                <p class="mt-2"><b>Double-check all information</b> before submitting the form using the <b>"Make Submission" button </b> at the end of this form.</p>

                                                <p class="mt-2"><b>Confirmation:</b> Upon successful submission, you'll receive a confirmation message and an email containing your <b>submission ID</b> and form details. The contact author you selected during the "Make Submission" process will be the recipient of these emails. Keep this <b><u>ID and password</u></b> handy, as you'll need them to manage your submission throughout the process, including <b>uploading files</b> (original and revised versions) with the <b>File Upload</b> option, modifying information, and checking the information with the <b>Edit Submission</b> and <b>View File</b> options.</p>
                                                <h5 class="fw-bold mt-4"> Important Notes:</h5>
                                                <ul> 
                                                    <li class="lh-sm mx-2">Use <b>"Make Submission"</b> <u>only</u> for registering new papers.</li>
                                                    <li class="lh-sm mx-2"><b>Author Email Addresses:</b>  Ensure all authors add the following email addresses to their contact lists to receive updates and confirmations: edunine@copec.eu (OpenConf emails) and edunine@edunine.eu. Whitelisting these addresses prevents EDUNINE emails from being marked as spam.</li></ul>
                                            </div>
                                        </div>           
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="fw-bold my-3">Once you've registered your new paper using the "Make Submission" option you'll have access to several options in the "Author" section to manage your paper file and information. These options require your submission ID and password for identification.</h6>

                        
                        <li class="lh-sm mx-4 mt-2"><span class="h6 fw-bold">Upload File:</span> Upload one or more files for your paper. Uploading a new file will overwrite the previous one. Use this feature for submitting new versions of your paper.</li>
                        <div><p class="text-end mx-4 mb-2"><b>Unsure how?</b> Click on 
                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#upsubModal">How to Upload</button></p>
                            
                            <div class="modal fade" id="upsubModal" tabindex="-1" aria-labelledby="upsubModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="upsubModalLabel">Uploading your Paper/Manuscript File (PDF or docx)</h1>                                          
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <p>During the submission period, you can upload your paper file as many times as needed using the "Upload File" option.</p>
                                                <p>Click <b>"Upload File"</b> in the <b>"Authors"</b> section to upload your paper or manuscript to our database. This form will appear:</p>
                                                <img class="rounded  img-fluid" src= "../images/openconf/uploadEng.png" alt="OpenConf Upload Form">                                           
                                                <ul>
                                                    <li><b>Submission ID</b> Enter the unique ID assigned to your paper after Make Submission for this paper (see Login Help below)</li>
                                                    <li><b>Password:</b> Enter the password you registered in the "Make Submission" form  (see Login Help below)</li>
                                                    <li><b>File: </b> Click "Browse" and select the paper file from your computer.</li>
                                                    <li><b>File Format:</b> Select the file format (PDF or docx) from the dropdown menu.</li>
                                                    <li><b>Upload: </b>Click <b>"Upload File" button</b>.</li></ul>
                                                <p class="lh-sm mx-2 mb-2"><b>Confirmation:</b> The OpenConf system will confirm if the upload was successful.</p>
                                                <p class="lh-sm mx-2 mb-2 fw-bold">Important Note:</p>
                                                <p class="lh-sm mx-2 mb-2">If your paper file exceeds the size limit specified in the form, reduce the size of any inserted images. You can use free online tools to compress images without sacrificing quality. Re-insert the compressed images and upload your file again. This limitation is inherent to the <b>OpenConf</b> system.</p>
                                            </div>
                                        </div>           
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <li class="lh-sm mx-4 mt-2"><span class="h6 fw-bold">Edit Submission:</span> Modify the information you previously submitted or view the current contents of your submission form.</li>
                        <div><p class="text-end mx-4 mb-2"><b>Need more information?</b> Click on 
                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editsubModal">How to Edit</button></p>
                            
                            <div class="modal fade" id="editsubModal" tabindex="-1" aria-labelledby="editsubModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editsubModalLabel">How to (Edit) Modify or Update your Paper Information</h1>                                          
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <p>Use the <b>"Edit Submission"</b> option to update any information associated with your paper, such as the title, abstract, topics, or authors (for single-blind review). This ensures consistency between your paper content and the submission details.</p>
                                                <p>Additionally, you can change your <b>password</b> using this option.</p>
                                                <p>Click <b>"Edit Submission"</b> in the <b>"Author"</b> section. This form will appear:</p>
                                                <img class="rounded  img-fluid" src= "../images/openconf/editSubEng.png" alt="OpenConf Edit Submission">                                           
                                                <ul>
                                                    <li><b>Submission ID</b> Enter the unique ID assigned to your paper after Make Submission for this paper (see Login Help below)</li>
                                                    <li><b>Password:</b> Enter the password you registered in the "Make Submission" form  (see Login Help below)</li>
                                                    <li><b>Begin: </b>Click <b>"Edit Submission" button</b>.</li></ul>
                                                <p class="lh-sm mx-2 mb-2">The <b>OpenConf</b> system will display the submission form with your paper's current information. This form includes the same fields as the "Make Submission" form:</p>
                                                <img class="rounded  img-fluid" src= "../images/openconf/editFormEng.png" alt="OpenConf Edit Form">                                           
                                                <ul>
                                                    <li>Edit the relevant fields with your updated information.</li> 
                                                    <li>Click the <b>"Submit Changes" button</b> at the bottom of the form.</li></ul>   
                                                <p class="lh-sm mx-2 mb-2"><b>Confirmation:</b> Upon successful update, you'll receive a confirmation message and an email containing your <b>submission ID</b> and updated form information. The contact author you selected during the "Make Submission" process will be the recipient of these emails.</p>
                                            </div>
                                        </div>           
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="lh-sm mx-4 my-2"><span class="h6 fw-bold">View File:</span> Access and view the files you have uploaded for your paper.</li>
                        <li class="lh-sm mx-4 my-2"><span class="h6 fw-bold">Check Status:</span> After the peer-review process, you can check the acceptance status of your paper.</li></ul>
                    <h5 class="fw-bold mt-4 mx-4"> Important Notes:</h5> <ul> 
                        <li class="lh-sm mx-4">Use <b>"Make Submission"</b> <u>only</u> for registering new papers.</li>
                        <li class="lh-sm mx-4"><b>Author Email Addresses:</b>  Ensure all authors add the following email addresses to their contact lists to receive updates and confirmations: edunine@copec.eu (OpenConf emails) and edunine@edunine.eu. Whitelisting these addresses prevents EDUNINE emails from being marked as spam.</li>
                        <li>Don't worry if you can't remember your submission ID or password. Click <b>"forgot ID?"</b> or <b>"forgot password?"</b> to receive instructions on how to recover them. Our conference staff does not have access to this information for security reasons. See <b>Login Help</b>.</li></ul>                 
                </div>
                <div class="my-5"> </div>
                <div class="container-fluid bg-body-secondary py-5">
                    <h5 class=" display-6 fw-bold mx-2 mt-4"> Login Help </h5>
                    <ul class="mt-4">
                        <div class="row gy-1 align-items-stretch justify-content-between features-item mb-4">
                            <div class="col d-flex align-items-center features-img-bg" data-aos="zoom-out">
                                <img class="rounded  img-fluid shadow p-3 mb-5 bg-body-tertiary" src= "../images/openconf/idPassEng.png" alt="Common fields Id, Password">
                            </div>
                            <div class="col d-flex justify-content-center flex-column mb-4" data-aos="fade-up">
                                <h4 class="fw-bold my-3">Login:</h4>
                                <ul>
                                    <li><b>Submission ID:</b> Enter the unique ID assigned to your paper after Make Submission for this paper.</li>
                                    <li><b>Password:</b> Enter the password you registered in the "Make Submission" form.</li>
                                </ul>  
                            </div>
                        </div>

                        <div class="row gy-1 align-items-stretch justify-content-between features-item mb-4">
                            <div class="col d-flex align-items-center features-img-bg" data-aos="zoom-out">
                                <img class="shadow p-3 mb-5 bg-body-tertiary rounded img-fluid" src= "../images/openconf/recovEng.png" alt="Recover Id, Password">
                            </div>
                            <div class="col d-flex justify-content-center flex-column" data-aos="fade-up">
                                <h4 class="fw-bold my-3">Recovering Submission ID and Password:</h4>
                                <p> This image shows the forms available when you click "forgot ID?" or "forgot password?" during login.</p>
                                <ul>
                                    <li><b>forgot ID?:</b> If you can't recall your submission ID, click "forgot ID" and complete the form. The OpenConf system will send a retrieval email to the contact author's email address provided during "Make Submission."</li>
                                    <li><b>forgot password?:</b> Similarly, if you forget your password, click "forgot password" and complete the form. The <b>OpenConf</b> system will send a new password to the contact author's email address. We suggest change this temporary password to a more convenient one using the "Edit Submission" option.</li></ul>
                                <p class="fw-bold mt-4">Important:</p>
                                <p class= "lh-sm mx-2">For security reasons, EDUNINE staff cannot provide your Submission ID or password. Use the forgot ID/password options if needed.</p>
                            </div>
                        </div>
                </div>
            </div>
        </section> 
-->
        </section>

        <!-- Footer section -->
        <div class ="container-fluid">
            <!-- footer  -->
            <?php include "../includesHtml/final.html" ?> 
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
 

        <script src ="../js/readmorereadless.js"></script>
        <script src ="../js/backTop.js"></script>

        <script src="../js/sidebar.js"></script>

   </body>
</html>                      