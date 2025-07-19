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
        <title> EDUNINE2026 English Website: Information for Reviewers </title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link href="../css/EDU9Conferences.css" rel="stylesheet"> 
        <link href="../css/edu9parts.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

    </head>
    <body onload = "obtenerFechasRev(), jump()">
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
                    <li><a href="index.php">Reviewer</a></li>
                    <li>Information_Reviewers</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  py-5">

                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerReviewer.jpg"  alt="Information for Reviewers">
                            </div>
                            <h2 class="display-6 fw-bold">Information for Reviewers</h2>

                            <p class="fs-5 mb-1">We are delighted to invite you to join the <b>EDUNINE2026 International Program Committee</b> as a <b>peer reviewer</b>. Your expertise is invaluable for ensuring high-quality submissions. This year's conference features three category submissions within the field of interest of the <b>IEEE Education Society</b>:</p>
                            <p class="lh-sm"><b>* Category 1:</b> Implemented teaching techniques, classroom experience reports, or pedagogical tools</p>
                           <p class="lh-sm"><b>* Category 2:</b> New curricula and educational program proposals, including regional or national adaptations </p>
                            <p class="fs-5 mb-1"><p class="lh-sm"><b>* Category 3:</b> Educational research papers </p>
                        <p class="fs-5 mb-1">The paper can be submitted as: </p><ul>
                            <li><b>Full Papers</b> (up to 6 pages) are intended for submissions that present mature, well-developed research results.</li>
                            <li><b>Work in Progress (WIP) Papers</b> (up to 4 pages) are suitable for ongoing projects with preliminary results or findings or an early stage of a research project.</li></ul>
                        <p class="fs-5 mb-1">Guidelines for reviewers, along with an instructive guide for using <b>EDUNINE2026 SUBMISSION SYSTEM</b> to register as a reviewer and complete the reviewer comments and evaluation form, are provided.</p> <p class="fs-5 mb-1">After the conference, certificates of appreciation will be issued to all reviewers.</p>
                            <p class="fs-5 mb-4 fw-bold">Thank you for your valuable contribution to EDUNINE2026!</p> 
                        </div>
                    </div>    
                </div> 
            </div> 
        </section>
         <!-- Timeline section -->
        <section id="dates">
            <div class="container-fluid align-content-start py-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?id=dates">Reviewer</a></li>
                    <li>Timeline_for_Reviewers</li>
                </ul> 
            </div>
            <div class="container-fluid py-5 bg-body-secondary">
                <div class="row">
                    <div class="col-sm-12 text-sm-left">
                        <h2 class="display-5 fw-bold">Reviewer Schedule and Important Dates: </h2>               
                        <p>Stay informed about key milestones and deadlines throughout the peer-review process with our comprehensive timeline, ensuring you don't miss any important stages.</p>
                    </div>
                </div>
            </div>
         <div class="container-fluid">
                <div class= "container-fluid tope  pb-5">
                    <!---Timeline -->                  
                    <div class="row g-5">
                        <div class= "col text-sm-left">
                            <div class="clearfix">
                                    <img class="col-3 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerRevGuide.jpg"  alt="Manuscript Types and Reviewer Guidelines Image"> 
                           
                                <h4 class="fw-bold">Peer-Review Timeline</h4>
                                <p class="fs-6 mb-4"> The peer-review process for submitted papers will be conducted according to the timeline below. Reviewers will receive formal invitations and are kindly asked to complete their evaluations within the designated review period to ensure a smooth and timely selection process.</p> 
                             </div>
                            <div class="container_fluid mt-2">
                                <div class="row">
                                    <div class="col-9 bg-light border text-secondary">
                                        <h4 class="text-center">Event</h4>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <h4 class="text-center">Deadline</h4>
                                    </div>
                                        <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">We will begin inviting reviewers to join the EDUNINE 2026 International Program Committee on</p> 
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">  
                                        <p class="lh-sm text-center" id="invitation"></p>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">We kindly ask invited reviewers to confirm their participation in the EDUNINE 2026 International Program Committee by</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id ="guide"></p>
                                    </div>
                                       <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">The peer-review process for EDUNINE 2026 will begin, and reviewers will have access to their assigned papers in the submission system, starting on </p> 
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">  
                                        <p class="lh-sm text-center" id="signup"></p>
                                    </div>
                                    <div class="col-9 bg-light border text-secondary">
                                        <p class="lh-sm text-center">Reviewers are kindly requested to complete their evaluations and upload their recommendations in the EDUNINE submission system by</p>
                                    </div>
                                    <div class="col-3 bg-light border text-secondary">
                                        <p class="lh-sm text-center" id ="signin"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
        </section>
        <!-- Review Process and Manuscript types -->

        <section id="revGuide">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Reviewer</a></li>
                    <li><a href="reviewers.php">Information_for_Reviewers</a></li>
                    <li>Conference_Review_Process</li>
                </ul> 
            </div>
            <div class= "container-fluid tope  pb-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerRevGuide.jpg"  alt="Manuscript Types and Reviewer Guidelines Image"> 
                            </div>                     
                            <h2 class="display-6 fw-bold">The EDUNINE Conference Review Process</h2>
                            <p class="fs-5 mb-4"> The conference review process involves two rounds of evaluation. In the first round, known as peer review, submissions are assessed by multiple reviewers. Based on their recommendations, papers may be accepted, rejected, or conditionally accepted pending revisions. Conditionally accepted papers undergo a second round of review by members of the Technical Program Committee. This rigorous process ensures that accepted papers meet the conference's standards for originality, technical rigor, and relevance. The types of manuscripts for review are detailed at the end of this section.</p>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-secondary">
                <div class="row">
                    <div class= "col text-sm-left">
                        <h4 class="pb-2 border-bottom display-6 fw-bold">Review Process</h4>
                        <p class="lh-sm">When you volunteer to be a reviewer for <b>EDUNINE</b>, you select <b>topic areas</b>. Submissions from these topics will be assigned to you approximately one week after the submission deadline, based on authors' selections. Each submission is reviewed by at least <b>three different reviewers</b>, with each reviewer assigned approximately <b>three submissions</b>.</p>
                        <p class="lh-sm">You have about one month to complete your reviews. Please submit all reviews through the EDUNINE2026 SUBMISSION REVIEW SYSTEM before the deadline (see instructions for Reviewer Registration and Submission).</p>
                        <p class="lh-sm">Papers submitted for the <b>EDUNINE</b> conference corresponds to three (3) different categories within the field of interest of the <b> IEEE Education Society</b>:</p><ul>
                            <li><b>Category 1:</b> Implemented teaching techniques, classroom experience reports, or pedagogical tools
                            </li><li><b>Category 2:</b> New curricula and educational program proposals, including regional or national adaptations 
                            </li><li><b>Category 3:</b> Educational research papers </li></ul>
                        <p class="lh-sm"> The paper can be submitted as: </p><ul>
                            <li><b>Full Papers</b> (up to 6 pages) are intended for submissions that present mature, well-developed research results.</li>
                            <li><b>Work in Progress (WIP) Papers</b> (up to 4 pages) are suitable for ongoing projects with preliminary results or findings or an early stage of a research project.</li></ul>
                            <p class="lh-sm">See more details at the end of this section in <i><u>Manuscript Types</u></i>. Both types may undergo <b>double-blind review</b>, which is recommended and checked before sending to peer review. Papers submitted at the deadline are accepted for <b><u>single-blind peer review</u></b> at the author's choice to avoid shortening the peer-review timeline. Reviewers may choose not to review papers not prepared for double-blind review. Please notify the <b>EDUNINE Technical Program Chair</b> to reassign such papers to another reviewer.</p>
                        <h4 class="mb-4 mt-4 fw-bold">The EDUNINE review model consists of two rounds: </h4> 
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item ml-2"> <b> Peer Review:</b> Authors submit a paper for peer review, where it is evaluated and decisions include: acceptance, rejection, conditional acceptance pending revisions (minor or major), or conversion to a Work in Progress paper. Reviewer evaluations and recommendations are submitted to the authors, with additional comments for the chair only.</li>

                            <li class="list-group-item ml-2"> <b> Final Paper Review:</b> Authors of conditionally accepted papers revise their submissions based on reviewer recommendations. These revised papers undergo review by a member of the EDUNINE Technical Committee. Based on this review, papers may be accepted or rejected. Accepted papers are then submitted in their final, camera-ready version.</li></ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-3 bg-body-tertiary">
                <div class="row">
                    <div class= "col text-sm-left">
                        <h4 class="mb-4 mt-4 fw-bold"> Peer Review Guidelines</h4>
                        <h5 class="mb-2 fw-bold">Reviewer Responsibilities</h5><ul>
                            <li>Reviewers must complete the review in the <b>EDUNINE SUBMISSION SYSTEM</b> in <b><u>English</u></b>. Reviewers must provide detailed feedback, even for excellent papers. This feedback informs authors about strengths and areas for improvement, enhancing the overall quality of the conference. Reviewer recommendations should clearly justify their rating choice. A complete review helps the decision-making process for both authors and the Technical Program Committee.
                            </li><li>Reviewers must maintain confidentiality of all manuscript information.
                            </li><li>Reviewers must comply with the following requirement: <u>&quot;Information or content contained in or about a manuscript under review shall not be processed through a public platform (directly or indirectly) for AI generation of text for a review. Doing so is considered a breach of confidentiality because AI systems generally learn from any input.&quot;</u> (verbatim copy from the IEEE Publication Services and Products Board Operations Manual 2024 (1 March 2024) Subsection 8.2.1 C.6.)
                            </li><li>Reviewers who suspect a conflict of interest must decline the review and inform the EDUNINE Technical Program Chair promptly.
                            </li><li>Reviewers receive email notifications for new review assignments. Upon receiving an assignment, reviewers should promptly read the short abstracts of each assigned paper to ensure they have the expertise to provide a quality review and meet deadlines. <b>If unable to review, notify the EDUNINE Technical Program Chair immediately</b> to allow sufficient time for reassignment without shortening the review period.</li></ul>
                        <h5 class="mb-2 mt-2 fw-bold">Manuscript Content</h5><ul>
                            <li>Submitted manuscripts (<b>Full</b> or <b>WIP Papers</b>) must not have been accepted for publication or simultaneously submitted elsewhere.
                            </li><li>All manuscripts are evaluated based on submission  category and type, originality, technical content/research depth, rigor, relevance to the conference scope and topics, and readability in <b>English</b>                                
                            </li><li>Papers must be written in <b>English</b>, following IEEE guidelines for publishing in IEEE Xplore®. 
                                Visit <a href="https://conferences.ieeeauthorcenter.ieee.org/write-your-paper/write-in-technical-english/" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Author Center - Conference Author - Write Your Paper </a>  and <a href="https://ieeeauthorcenter.ieee.org/wp-content/uploads/IEEE-Reference-Guide.pdf" class="border-white btn btn-primary btn-sm align-self-end" role="button">IEEE Reference Guide</a>.
                            </li><li>The paper must describe an investigation or reproducible experience, documented sufficiently for replication by an independent professional.
                            </li><li>Reviewers should report suspected <b>plagiarism</b> in the <b>&quot;Comments for the Program Committee&quot;</b> field in the review form, detailing the extent and original source if known. Additionally, plagiarism concerns can be included in the <b>&quot;Comments for the Authors&quot;</b> section. The EDUNINE Technical Program Committee will investigate according to IEEE's plagiarism policies.</li></ul>
                        <h5>Guidance on Recommending Work-in-Progress (WiP) Reclassification or Rejection</h5>
                        <p class="lh-sm">If a full paper submission does not fully meet the requirements of a complete research work—such as lacking in-depth analysis, comprehensive results, or robust validation—but it presents preliminary results and addresses a topic of clear interest and relevance to the conference audience, you may recommend that the paper be reclassified as a Work-in-Progress (WiP) paper.</p>
                        <p class="lh-sm">Please use this recommendation only if the paper shows potential and contributes meaningfully to ongoing discussions in the field, even if it is not yet fully developed.</p>
                        <p class="lh-sm">However, papers that only present a proposal or idea without any preliminary results, or that lack engagement with related work (e.g., no comparison with existing literature or insufficient references), do not meet the criteria for either full or WiP categories and should be recommended for rejection.</p>                       
                        <h5 class="mb-2 mt-2 fw-bold">Manuscript English Quality</h5><ul>
                            <li>As part of the review process, evaluate the readability and clarity of the English writing in the submitted paper. Feedback on language quality helps ensure the paper meets standards for clear and effective communication.</li></ul>
                        <p class="lh-sm">Correction of the English writing is unnecessary. Instead, provide feedback using the following scale:</p><ol class="list-group list-group-numbered">
                            <li class="list-group-item ml-2"> <b> Very difficult to understand:</b> Significant errors throughout, making comprehension challenging.
                            </li><li class="list-group-item ml-2"> <b> Poor:</b> Frequent errors that impede understanding and require extensive revision.
                            </li><li class="list-group-item ml-2"><b> Adequate:</b> Some errors present, but the overall meaning is clear and understandable.
                            </li><li class="list-group-item ml-2"><b> Good:</b> Minor errors, generally clear and well-written.
                            </li><li class="list-group-item ml-2"><b>Excellent:</b> No significant errors, highly readable and well-written.</li></ol>
                        <p class="lh-sm mt-2">If significant errors affecting clarity are noted, alert the author to revise for improved clarity. Also, indicate the English level (1-5) at the end of your review in the <b>"Comments for the Authors"</b> or <b>&quot;Comments for the Program Committee&quot;</b> fields.
                        </p><p class="lh-sm">Papers flagged for significant language issues will undergo review by English language experts. The chair will recommend improvements to the author, reinforcing your assessment.
                        </p><p class="lh-sm">Many EDUNINE submissions come from non-native English speakers or early-career researchers. Constructive feedback is especially valuable for weaker submissions.
                        
                        </p><p class="lh-sm">We appreciate reviewers for their attention to maintaining our publication standards. Standard English is required for paper acceptance, and your contributions uphold the integrity of the EDUNINE conference.</p>
                        <h5 class="mb-2 mt-2 fw-bold">Manuscript Format</h5><ul>
                            <li>Reviewers are not required to check papers for template format compliance. The Technical Program Committee member will review paper formats and styles according to the chosen template's requirements.</li></ul>
                        <h5 class="mb-2 mt-2 fw-bold">Enhancing Reviewer Feedback</h5>
                        <h6 class="mb-2 fw-bold"> 1. Guidelines for Comprehensive Peer Review</h6><ul> 
                            <li> To read more click on   
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackModal">Peer Review Guide</button></li></ul>
                        <!-- Modal -->
                        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-sm-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="feedbackModalLabel">Guidelines for Comprehensive Peer Review</h1>              
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <p class="lh-sm mx-2">When reviewing papers for feedback and recommending improvements, consider the following questions:</p><ul>
                                            <li>Is the study well designed and well executed?
                                            </li><li>Does the paper acknowledge the existing body of relevant work?
                                            </li><li>Are the results interpreted and reported correctly, considering all possible interpretations?
                                            </li><li>Are the results overly preliminary or speculative?
                                            </li><li>Does the research contribute significantly to the scientific knowledge in the field?
                                            </li><li>Is the paper suitable for presentation at this conference?
                                            </li><li>Is the paper written in clear, concise language?</li></ul>

                                        <p class="lh-sm mx-2">Throughout the peer review process, assess the following:</p><ul>

                                            <li><b>Scope:</b> Is the paper appropriate for the conference's scope?
                                            </li><li><b>Novelty:</b> Does the paper present original material distinct from previous publications?
                                            </li><li><b>Validity:</b> Is the study well designed and executed?
                                            </li><li><b>Data:</b> Are the data reported, analyzed, and interpreted correctly?
                                            </li><li><b>Clarity:</b> Are the ideas expressed clearly, concisely, and logically?
                                            </li><li><b>Compliance:</b> Are all ethical and publication requirements met?
                                            </li><li><b>Advancement:</b> Does the paper make a significant contribution to the field?
                                            </li><li><b>English:</b> Is the standard of English sufficient for publication?
                                            </li><li><b>Format:</b> Does the paper conform to conference manuscript style guidelines?</li></ul>
                                        <p class="lh-sm mx-2">Follow the publication’s instructions for submitting feedback, suggestions, and recommended decisions. Remember to provide thorough and professional commentary.</p>
                                        <p class="lh-sm mx-2">Additional guidelines from the literature:</p><ul>
                                            <li>Your role as a reviewer is to provide detailed feedback, including positives and areas for improvement.
                                            </li><li>Even for papers you find poorly written or thought-out, offer constructive criticism to assist the authors and enhance future submissions.
                                            </li><li>Justify your ratings clearly in your reviews. A low score without explanations offers little value to the authors.
                                            </li><li>Focus your review on content.
                                            </li><li>Ensure fairness and objectivity in your assessment based solely on the paper's content.
                                            </li><li>While the conference requires polished submissions, do not reject papers based solely on English writing quality or formatting issues. Report such issues as requested in the Manuscript English Quality section; formatting issues should be noted to the chair.
                                            </li><li>Accepted papers may require minor or major improvements. Your detailed feedback can significantly contribute to paper improvement and conference enhancement.</li></ul>         
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-2 mt-2 fw-bold">2. Some Examples</h6><ul>
                            <li> To read more click on   
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#examplesModal">Examples of Comments to Authors</button></li></ul>
                        <!-- Modal -->
                        <div class="modal fade" id="examplesModal" tabindex="-1" aria-labelledby="examplesModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-sm-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="examplesModalLabel">Some Examples of Comments to Authors</h1>                                          
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li> The organization of the units on Robotics was well done. However, the discussion of how it fits into the curriculum is overly broad and not too realistic. Many factors were overlooked on the curriculum side.
                                            </li><li>Good level of detail on your approach. The first Table is very handy. But after the Table, the log analysis and auditing example image is quite difficult to read. How will you ensure additional auditing strategies are implemented?
                                            </li><li>The paper was easy to read, although it could benefit from a review of the English sentence structure. The paper was organized in an easy-to-follow manner. The authors explained their motivations and methods for their study.
                                            </li><li>The paper could use additional proofing and polishing. I suggest finding a non-robotics person to read for both language and communication. Some sentences are poorly formed (e.g., sentence 4 of first paragraph in 1. Introduction. Some content seems misplaced (e.g., discussion of security in section 4.
                                            </li><li>The organization is faultless. It is very clear what the paper is going to say and how. The paper follows through with crystal clear subject headings and a logical flow of information. There are some grammatical problems; these are not serious, but a thorough proof-reading would be helpful.
                                            </li><li>I would have liked to see some discussion and references setting this work in the context of other studies of student learning and knowledge retention. While I don't know of other studies that have examined exactly the phenomenon this paper does, a short search in the technical digital library turned up these examples that are relevant...
                                            </li><li>This paper makes a very good argument in the introduction for why this course is needed. It is timely and addresses a topic outside of the norm often seen at an Education in Engineering Conference.
                                            </li><li>The hypotheses are too obvious and the validation of them is not enough. Therefore, the contribution of this paper is quite limited.
                                            </li><li>This paper should generate a lot of discussion and have a good audience. It is a topic that many universities are trying to address.
                                            </li><li>Hard to judge given the writing organization problems, but I do not see a lot of significance here. The verification that the hands-on experiences helped more than the simulations on-line alone is a nice result, if it is supported by the data. Having taught this course already and collected feedback on your approach makes the paper stronger.
                                            </li><li>It is important for those who might be considering this approach to know that it can be successful.
                                            </li><li>This is a good, interesting topic, accessible to the conference audience, and widely useful.
                                            </li><li>A good practical beginning guide to implementing lab exercises in a control course.
                                            </li><li>Given the potential interest in this topic the authors could do better to capture the imagination of the reader; perhaps with a paragraph or two on famous cases.</li> </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-body-white"><p class="mt-2"></p></div>
            <div class="container-fluid py-3 bg-body-secondary">
                <div class="row">
                    <div class= "col text-sm-left">
                        <h4 class="pb-2 border-bottom display-6 fw-bold">Manuscript Categories and Types for Review</h4>
                        <p class="fs-5 mb-4">This section outlines the various categories of manuscripts that are submitted for peer review, providing definitions and criteria for each category and type to help reviewers understand the specific expectations and standards associated with them.</p>
                        <p class="fs-5 mb-2">For more information about:</p><ul class="mb-4">
                            <li>The list of EDUNINE topics, scope, and areas of interest, visit <a href="information.php?id=suitable" class="border-white btn btn-primary btn-sm align-self-end" role="button">Conference Suitability Analysis (EDUNINE Scope and Topics)</a>.</li>
                            <li>Mandatory conference templates, visit <a href="information.php?id=templateChoose" class="border-white btn btn-primary btn-sm align-self-end" role="button">Mandatory Conference Paper Templates</a>.</li></ul>
                    </div>
                </div>
                <div class ="row">
                    <div class= "col text-sm-left"> 
                        <h6 class="display-6 fw-bold">EDUNINE Categories and Content of Manuscripts</h6> 

                        <p class="lh-sm">The conference accepts various categories of manuscripts, each with specific requirements aligned with the conference scope (see <a href="information.php?id=suitable">Conference Suitability Analysis</a> for details). Proper adherence to these guidelines ensures consistency and facilitates the peer review and publication processes. Here is an overview of the accepted categories and their type, with links to the expected paper content. In the next section, formatting guidelines for each type are provided.</p>
                    </div>
                </div>
                <!-- Category 1 -->
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
                <!-- Category 2 -->
                <div class="row bg-light py-3">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/paperCat2.jpg" alt="Category 2 Paper Contents"> 
                            <h5 class="fs-3 fw-bold">Category 2: New Curricula and Educational Program Proposals (Including Regional and National Adaptations)</h5>
                            <p class="lh-sm">This category invites <b>innovative curriculum designs, educational programs, and pedagogical frameworks</b> that are <b>ready for implementation</b> or are in the <b>early stages of development</b>. We also welcome submissions that focus on <b>regional or national adaptations</b> of curricula, exploring how educational strategies and frameworks have been <b>implemented or adapted</b> in <b>different cultural, social, and educational contexts</b>.</p>
                            <p class="lh-sm">Submissions should focus on <b>practical solutions</b> that address current educational challenges and promote <b>enhanced teaching and learning in engineering, computing, and technology education</b>. These may include <b>national policy changes, regional adaptations of curricula</b>, or <b>cross-country comparisons of educational programs</b>.</p> 
                            <p class="lh-sm fs-5 fw-bold"><i>A Category 2 Paper undergoes a <b>double-blind peer review process</b>.</i></p>
                        </div>    
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    <div class=" col d-flex flex-fill justify-content-center">
                        <div class="card"> 
                            <div class="card-header">
                                <h6 class="fw-bold">Content should include:</h6>
                            </div>  
                            <div class="card-body">
                                <ul><li><b>Detailed descriptions</b> of the curriculum, program, or framework, including its educational goals and pedagogical approach;
                                    </li><li><b>Clear implementation plans</b>, outlining how the program or curriculum has been or will be carried out in real-world educational settings;
                                    </li><li><b>Case studies or examples</b> of how the curriculum or program has been adapted to suit specific regional or national educational contexts, showing the impact on students, institutions, or countries involved;
                                    </li><li><b>An analysis of challenges and adaptations</b> required when implementing curricula or programs in <b>diverse educational settings</b>, including cross-country comparisons if applicable;
                                    </li><li><b>Expected outcomes</b>, including how the proposed program or curriculum will improve student learning, engagement, or achievement;
                                    </li><li><b>An alignment with current educational trends or research</b>, showcasing how the proposal addresses existing needs or gaps in the field.
                                    </li></ul>
                            </div>
                        </div>
                    </div>            
                    <div class=" col d-flex flex-fill justify-content-center">
                        <div class="card"> 
                            <div class="card-header">
                                <h6 class="fw-bold">Evaluation will prioritize:</h6>
                            </div>  
                            <div class="card-body">             
                                <ul><li>Clarity and practicality of the proposed curriculum or program
                                    </li><li>Alignment with educational goals and outcomes
                                    </li><li>Potential impact on student learning and teaching effectiveness
                                    </li><li>Relevance to current trends and challenges in education, including regional or national contexts
                                    </li><li>Effectiveness of adaptations or comparisons in diverse educational settings
                                    </li></ul>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="row bg-light py-3">
                    <h5 class="fw-bold">Important: </h5>
                    <p class="lh-sm">This category is not intended for position papers or conceptual proposals that are primarily opinion-based or speculative. Instead, it is designed for concrete proposals with a clear path to implementation or those already in the process of being developed, piloted, or adapted across different regions or countries.</p> 
                </div>

                <!-- Category 3 -->        
                <div class="row bg-info-subtle py-3">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/paperCat3.jpg" alt="Category 2 Paper Contents"> 
                            <h5 class="fs-3 fw-bold">Category 3: Educational Research Papers</h5>
                            <p class="lh-sm">This category invites rigorous, empirical research studies that contribute to the advancement of educational theory, practice, and policy. Submissions are welcomed on any topic related to engineering, computing, and technology education, including, but not limited to, pedagogical approaches, teaching strategies, assessment methods, curriculum development, and student engagement.</p>
                            <p class="lh-sm">The primary focus should be on empirical research that addresses specific educational challenges, tests new hypotheses, evaluates the effectiveness of teaching interventions, or provides insights into improving educational outcomes across diverse contexts.</p> 
                            <p class="lh-sm fs-5 fw-bold"><i>A Category 3 Paper undergoes a <b>double-blind peer review process</b>.</i></p>
                        </div>    
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    <div class=" col d-flex flex-fill justify-content-center">
                        <div class="card"> 
                            <div class="card-header">
                                <h6 class="fw-bold">Content should include:</h6>
                            </div>  
                            <div class="card-body">
                                <ul><li><b>Clear research objectives</b>: Define the research question(s) or hypotheses that the paper aims to investigate, based on key educational issues in the field.
                                    </li><li><b>Literature review</b>: Situate the study within the existing body of research, identifying gaps, trends, or opportunities for further exploration, and providing a solid foundation for the research.
                                    </li><li><b>Methodology</b>: Provide a comprehensive description of the <b>research design</b> and methods employed (qualitative, quantitative, or mixed methods). Detail the <b>data collection process</b>, the <b>research instruments</b> used (e.g., surveys, assessments, interviews), and the <b>study population or sample</b>.
                                    </li><li><b>Data analysis and results</b>: Present the results of the research, including any statistical analysis or qualitative insights derived from the collected data. Use clear visuals or tables where appropriate to enhance the presentation of findings.
                                    </li><li><b>Discussion and interpretation</b>: Analyze the results in the context of the research objectives. Discuss the <b>implications of the findings</b> for educational theory, practice, and policy, and consider how they contribute to improving teaching methods, student learning, and overall educational outcomes.
                                    </li><li><b>Conclusions and recommendations</b>: Summarize the key findings of the study and provide actionable <b>recommendations</b> for educators, institutions, or policymakers, based on the research results. Highlight areas for further investigation or research gaps.</li></ul>

                            </div>
                        </div>
                    </div>            
                    <div class=" col d-flex flex-fill justify-content-center">
                        <div class="card"> 
                            <div class="card-header">
                                <h6 class="fw-bold">Evaluation will prioritize:</h6>
                            </div>  
                            <div class="card-body">             
                                <ul><li>Clarity of research questions and objectives
                                    </li><li>Robust and transparent methodology, with a strong rationale for chosen methods
                                    </li><li>Quality of data analysis and the relevance of findings to the field of education
                                    </li><li>Implications for educational practice, theory, and policy
                                    </li><li>Contribution to advancing knowledge in the field of education.</li></ul>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="row bg-info-subtle py-3">
                    <h5 class="fw-bold">Important: </h5>
                    <p class="lh-sm">Submissions must be based on empirical data and should contribute new knowledge or insights into educational practices, with clear implications for improving education in engineering, computing, technology, or related fields.</p> 
                </div>  

                <div class ="row">
                    <div class= "col text-sm-left"> 
                        <h6 class="display-6 fw-bold">EDUNINE Paper Types and Formatting Guidelines</h6> 

                        <p class="lh-sm">EDUNINE accepts several types of papers, each aligned with specific submission categories. The formatting requirements depend on the type of paper, which reflects the maturity and purpose of the work presented.</p>
                            <p class="lh-sm">The following sections provide detailed formatting guidelines and submission requirements for each paper type. Authors should ensure they use the correct format based on their chosen category.</p>
                    </div>
                </div>

                <!-- FULL Paper -->
                <div class="row bg-info-subtle py-3">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/fullPaper.jpg" alt="Full Paper Requirements"> 
                            <h5 class="fs-3 fw-bold">Full Paper Formatting Guidelines</h5>
                            <p class="lh-sm">The <b>Full Paper format</b> is intended for submissions that present mature, well-developed research results. This format applies to the following categories:</p><ul><li>
                                    <b>Category 1: Implemented Teaching Techniques, Classroom Experience Reports, and Pedagogical Tools</b>
                                </li><li><b>Category 2: New Curricula and Educational Program Proposals</b>
                                </li><li><b>Category 3: Educational Research</b></li></ul>

                            <div class=" col d-flex flex-fill justify-content-center">
                                <div class="card "> 
                                    <div class="card-header">
                                        <h6 class="fw-bold">Formatting:</h6>
                                    </div>  
                                    <div class="card-body">
                                        <ul><li> 
                                                <b>Abstract:</b> Include a concise, one-paragraph abstract (maximum 150 words).</li><li>
                                                <b>Length:</b> Adheres to the specific page limit <b>(4 to 6 pages)</b> including references and  abstract</li><li>
                                                <b>Template:</b> Use the provided IEEE Manuscript Templates to ensure consistent formatting as described in the "Mandatory Conference Paper Templates" section on this webpage.</li><li>
                                                <b>English:</b> Use formal academic language and IEEE citation style.</li></ul> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- WIP -->
                <div class="row bg-light py-3">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <img class="col-3 p-2 rounded float-sm-start" src="../images/decoration/wipPaper.jpg" alt="WIP Paper Requirements"> 
                            <h5 class="fs-3 fw-bold">Work in Progress (WiP)Formatting Guidelines</h5>
                            <p class="lh-sm">The <b>Work in Progress Papers</b> are suitable for ongoing projects with preliminary results or findings or an early stage of a research project. This format applies to the following categories:</p><ul><li>
                                    <b>Category 1: Implemented Teaching Techniques, Classroom Experience Reports, and Pedagogical Tools</b>
                                </li><li><b>Category 2: New Curricula and Educational Program Proposals</b>
                                </li><li><b>Category 3: Educational Research</b></li></ul>
                            <div class=" col d-flex flex-fill justify-content-center">
                                <div class="card"> 
                                    <div class="card-header">
                                        <h6 class="fw-bold">Formatting:</h6>
                                    </div>  
                                    <div class="card-body">             
                                        <ul><li>
                                                <b>Title:</b> Begin your title with Work in Progress: followed by the specific paper title.</li><li>
                                                <b>Abstract:</b> Include a concise, one-paragraph abstract (maximum 150 words).</li><li>
                                                <b>Length:</b> Significantly shorter than a full paper <b>(2 to 4 pages)</b>, including references and abstract. </li><li>
                                                <b>Template:</b> Use the provided IEEE Manuscript Templates to ensure consistent formatting as described in the "Mandatory Conference Paper Templates" section on this webpage.</li><li>
                                                <b>English:</b> Use formal academic language and IEEE citation style.</li></ul>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <section id="revSignup">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Reviewer</a></li>
                    <li><a href="reviewers.php">Information_for_Reviewers</a></li>
                    <li>Reviewer_Registration</li>
                </ul> 
            </div>
            
            <div class= "container-fluid tope py-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerRevSignUp.jpg"  alt="Submission  Revieweer System Registration Image">
                            </div>
                            <h2 class="display-6 fw-bold"> Reviewer Registration (Sign up)</h2>
                            <p class="fs-5 mb-4">This section provides instructions for registering as a peer reviewer using <b>EDUNINE2026 SUBMISSION SYSTEM</b>. It explains how to complete the registration form with your personal information, email, and the conference topics that match your areas of expertise. Additionally, it guides you in setting your username and password for your EDUNINE SUBMISSION account.</p>
                        </div>
                    </div>    
                </div>
            </div>
             <!-- REEMPLAZAR CON LAS INSTRUCCIONES CORRESPONDIENTES AL SISTEMA DE ADMINISTRACIÓN A USAR PARA LOS REVISORES
            ELIMINANDO LAS INTRUCCIONES DE OPENCONF -->
            
            <?php include "../includesHtml/commingSoon.html" ?>
             
            <!-- 
            <div class="container-fluid py-5 bg-white">
                <div class="border bg-light">
                    <h4 class= "display-6 fw-bold mb-4 "> Access the EDUNINE2026 OpenConf System:</h4> 
                    <h5 class="mb-4">Click the link to access the EDUNINE2026 OpenConf System. <a href="https://submission.copec.eu/edunine2026/" class="border-white btn btn-primary btn-sm" role="button">EDUNINE2026 OpenConf system</a> </h5>
                </div>
                <div class="border bg-info-subtle gy-4 mt-4 text-left">
                    <h3 class=" fw-bold mx-2 mt-4">You'll see the <b>EDUNINE2026 OpenConf</b> login screen:</h3> 
                    <h5 class="mx-2">In the <b>Reviewers</b> section: </h5> 
                    <p class="fs-5 mx-4"> The first time you access the <b>EDUNINE2026 OpenConf</b> System, you must <b>"Sign up" (register)</b> as a reviewer to join the <b>EDUNINE2026 International Program Committee</b> (indicated as #2 in the image). </p>

                    <img class="shadow p-3 mb-5 bg-body-tertiary rounded img-fluid mx-auto d-block " src= "../images/openconf/portalRevEng.png" alt="EDUNINE2026 OpenConf Reviewer Portal">
                    <h5 class="fw-bold mt-4 mx-4"><b>Language Selector:</b> (See #1 in the image)</h5>
                    <p class="mt-2 px-4">Select your preferred language (<i>English</i>, <i>Spanish</i>, or <i>Portuguese</i>) from the language selector.</p> 
                    <p class="fw-thin mx-4 "><b>Note:</b> While the interface can be displayed in different languages, the form field must be completed in <b>English</b>, the conference's official language.</p> 
                    <h5 class="fw-bold mt-4 mx-4">OpenConf Reviewer Registration: (See #2 in the image) </h5>

                    
                    <p class="mt-2 px-4"><span class="h6 fw-bold">Sign up:</span> In the <b>Sign up</b> option, fill out the Keycode field with the key we sent you in the reviewer invitation email and press Enter.</p>
                    <p class="mt-2 px-4">The system will display the <b>Reviewer Committee Sign-Up</b> screen, which contains the necessary fields for assigning papers to you for review. Please complete your personal information and check the topics in the list that are related to your specialty. This selection will help the EDUNINE Technical Program Chair assign papers based on your choices. Additionally, you will create a username and password, establishing your account in the <b>OpenConf</b> system. Use the <b>"Sign In"</b> option to access this account, where you can view the manuscripts assigned to you for review and upload your review outcomes, as explained in the section <b>&quot;Reviewer Portal&quot;</b>.</p>
                    <div><p class="text-end mx-4 mb-2"><b>New to OpenConf?</b> Click on 
                            
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewerModal">How to Register</button></p>
                        
                        <div class="modal fade" id="reviewerModal" tabindex="-1" aria-labelledby="reviewerModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen-sm-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="reviewerModalLabel">How to Sign up as a New Reviewer</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <h6 class="display-6 mx-4">Reviewer International Program Committee Sign up form</h6>
                                            <p>After enter the key we send your by e-mail in the <b>Keycode</b> field of the <b>Sign up</b> option in the Reviewer section the system will show you this <b>form (Personal Information)</b>:</p> 
                                            <img class="rounded  img-fluid" src= "../images/openconf/ocRev3Eng.png" alt="OpenConf Reviewer Signup Form (personal Information)">
                                            <p class="mx-4">1. Fill out the details as shown in the examples of the following images, including:</p> 
                                            <ul class="mx-4">
                                                <li class="py-2"><b>Consent:</b> Please, check the consent box.</li>
                                                <li class="py-2"><b>Personal Info:</b> Complete your personal information exactly as it should appear on the certificate of appreciation and to facilitate communication via email. Please enter your full name, email address, organization, and country. The fields for telephone number and website are optional.</li></ul>
                                            <img class="rounded  img-fluid" src= "../images/openconf/ocRev4Eng.png" alt="OpenConf Reviewer Topics Form">
                                            <p class="py-2">2. Select all the topics of interest relevant to your specialty. This will help the EDUNINE Technical Program Chair assign you papers for review based on your selected topics.</p>                        
                                            <img class="rounded  img-fluid" src= "../images/openconf/ocRev5Eng.png" alt="OpenConf Reviewer username Form">                         
                                            <p class="py-2">3.  You  can  add  a  <b>comment</b>  for  the  <b>EDUNINE Technical Program  Chair</b>  to  indicate  any restrictions that should be considered when selecting papers. </p>
                                            <p class="py-2"> 4.  Enter  a  <b>Username  and  Password</b>  to  create  an  account  in  the  system,  which you will use to conduct your reviews. </p>
                                            <p class="py-2"> 5. Verify that all information is accurate and click on <b>Sign  Up.</b></p>     
                                        </div>
                                    </div>           
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-2 px-4"><b>Once registered, you will receive email notifications for new review assignments in your EDUNINE OpenConf reviewer account</b>. These assignments will be for manuscripts where the authors have indicated that the topics discussed match those you selected as your areas of expertise or are more general and encompass them. <b>Manuscript assignments will begin approximately one week after the submission deadline</b>.</p>
                </div>
            </div>
            -->
            
        </section>

        <!-- Reviewer Portal   -->

        <section id="revSignin">
            <div class="container-fluid align-content-start pt-5 pb-0">
                <ul class="breadcrumb">
                    <li><a href="index.php">Reviewer</a></li>
                    <li><a href="reviewers.php">Information_for_Reviewers</a></li>
                    <li>Reviewer_Portal</li>
                </ul> 
            </div>
          

            <div class= "container-fluid tope py-5">
                <div class="row g-5">
                    <div class= "col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid" src="../images/decoration/peerRevPortal.jpg"  alt="OpenConf Peer Reviewer Portal Image"> 
                            </div>
                            <h2 class="display-6 fw-bold">Reviewer Portal</h2>
                            <p class="lh-sm">This section provides detailed instructions on how to use your <b>EDUNINE OpenConf reviewer account</b> once you are registered as a reviewer. First, it explains how to view your list of review assignments and how to select and access the abstract and full text of each assigned paper. Then, after you have finished reviewing a paper, the guide provides an example to help you fill out the review form for each required field and submit your review.</p>
                        </div>
                    </div>    
                </div>
            </div>
               <!-- REEMPLAZAR CON LAS INSTRUCCIONES CORRESPONDIENTES AL SISTEMA DE ADMINISTRACIÓN A USAR PARA LOS REVISORES
            ELIMINANDO LAS INTRUCCIONES DE OPENCONF -->
            
            <?php include "../includesHtml/commingSoon.html" ?>
            
            <!--
            <div class="container-fluid py-5 bg-white">
                <div class="border bg-light mb-4">
                    <div class="row g-5">
                        <div class= "col text-sm-left">
                            <h4 class= "display-6 fw-bold mb-4 "> Access the EDUNINE2026 OpenConf System:</h4> 
                            <h5 class="mb-4">Click the link to access the EDUNINE2026 OpenConf System. <a href="https://submission.copec.eu/edunine2026/" class="border-white btn btn-primary btn-sm" role="button">EDUNINE2026 OpenConf system</a> </h5>
                        </div>
                        <div class="border bg-info-subtle gy-4 mt-4 text-left">
                            <h3 class=" fw-bold mx-2 mt-4">You'll see the <b>EDUNINE2026 OpenConf</b> login screen:</h3> 
                            <h5 class="mx-2">In the <b>Reviewers</b> section: </h5> 
                            <p class="fs-5 mx-4"> You'll find the <b>Sign in</b> option (see #3 in the image) to access your EDUNINE OpenConf reviewer account. In this account, you can view the papers assigned for review and complete the review form with your review outcomes. </p>
                            <img class="shadow p-3 mb-5 bg-body-tertiary rounded img-fluid mx-auto d-block " src= "../images/openconf/portalRevEng.png" alt="EDUNINE2026 OpenConf Portal">
                            <h5 class="fw-bold mt-4 mx-4">Language Selector: (See #1 in the image)</h5>
                            <p class="mt-2 px-4">Select your preferred language (<i>English</i>, <i>Spanish</i>, or <i>Portuguese</i>) from the language selector.</p> 
                            <p class="fw-thin mx-4 "><b>Note:</b> While the interface can be displayed in different languages, the form field must be completed in <b>English</b>, the conference's official language.</p> 
                            <h5 class="fw-bold mt-4 mx-4">OpenConf Reviewer Sign in: (See #3 in the image) </h5>
                            <p class="mt-2 px-4">Click on <span class="h6 fw-bold">Sign in:</span></p> 
                            <p class="mt-2 px-4">The system will show you the <b>Sign in screen</b></p>
                        </div>
                    </div>
                </div>

                <div class="row g-5 bg-info-subtle">
                    <div class= "col text-sm-left">
                        <h5 class="mt-2 px-4 d-block bg-white">SIGN IN Screen:</h5> 
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-6 p-2 rounded float-sm-start img-fluid" src= "../images/openconf/ocRev06Eng.png" alt="OpenConf Reviewer Sign in Form (acount information)">
                            </div>                                     
                            <p class="mx-4">The system will prompt you for the username and password you entered during registration. If you do not remember your <b>username</b> and/or <b>password</b>, use the recovery option by clicking <b>"Forgot Username?"</b> or </b>"Forgot Password?"</b> You will receive the information via email at the address you provided during registration.</p>
                            <p class="mx-4"> Click  on  <b>Sign in</b> </p> 
                            <p class="mx-4">After successfully logging into your <b>Reviewer Account</b>, you will see the <b>Submissions to Review screen</b></p>.
                        </div>
                    </div>
                </div>

                <div class="row g-5 bg-info-subtle">
                    <div class= "col text-sm-left">
                        <h5 class="mt-2 px-4 d-block bg-white">Submissions to Review Screen:</h5>
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-6 p-2 rounded float-sm-start img-fluid" src= "../images/openconf/ocRev07Eng.png" alt="OpenConf Reviewer Form (review asignments)">
                            </div>                                                                     
                            <p class="mx-4">This section is where the bulk of your work as a reviewer will be completed. It provides an overview of all the submissions assigned to you by the EDUNINE Technical Program Chair for the topics you signed up to review. It also shows the status of your reviews, indicating which are completed and which are not. You can always access this screen by clicking on the <b>Member Home</b> link at the top of the page.</p>
                            <p class="mx-4">Below is a description of the columns and links in this section (see screen with example data):</p>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item ml-2"> <b>Title:</b> Lists the Submission ID number and the title of the submission. Clicking on the title link will open the <i>Reviewer form for this paper</i>.</li>
                                <li class="list-group-item ml-2"><b>Abstract:</b> Click on the icon in this column to read the abstract of the submission. See the example screen with the abstract of the paper.</li>
                                <li class="list-group-item ml-2"> <b>File:</b> Click on the icon in this column to read or download the submitted manuscript.</li>
                                <li class="list-group-item ml-2"> <b>Blank Review Form:</b> Click on this link to display a blank version of the review form, which you can also print. This is helpful if you want to work offline and plan to type your review in a word processing document before submitting it in the system.</li></ol>
                            <p class="mx-4"><b>Important:</b> When you receive email notifications about new review assignments, it's strongly recommended that you read the abstracts of all assigned submissions. If you lack the expertise to review a submission or cannot meet the deadline, notify the <b>EDUNINE Technical Program Chair</b> as soon as possible to have the submission reassigned.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-5 bg-info-subtle">
                    <div class= "col text-sm-left">
                        <h5 class="mt-2 px-4 d-block bg-white">OpenConf Manuscript Review Form:</h5>
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-6 p-2 rounded float-sm-start img-fluid" src= "../images/openconf/ocRev08Eng.png" alt="OpenConf Review Form Overview">
                            </div>
                            <p class="mx-4">After reading the manuscript and you are ready to submit your review, click on the <b><u>submission title</u></b> to access the <b>Review Form</b> (see here the partial view of this form). At the top, verify that the name of the paper and the submission ID are correct.  Complete the review form fields in <b>English</b>.</p>
                            <h6 class="mx-4">Tips for the field "Comments for the Authors</h6>
                            <p class="mx-4"> If you find that a manuscript is poorly written or poorly thought-out, please ensure your comments are constructive. One of the most valuable contributions reviewers make is aiding in the development of authors' research. While identifying weaknesses in a manuscript, also offer specific guidance on how authors can address these limitations. Detailed feedback benefits authors by providing actionable insights.</p>
                            <p class="mx-4"> It's equally important to recognize and highlight the strengths of a manuscript to assist authors in improving their work. EDUNINE is an international conference, so please approach reviews with an open mind toward different theoretical frameworks, disciplinary backgrounds, and research traditions. Evaluate manuscripts based on their ability to stimulate thinking and discussion.</p>
                            <p class="mx-4"> <b>Special Request:</b> Please refrain from correcting <b>English</b> writing unless it significantly impacts comprehension. Instead, use the following scale to provide feedback on clarity:</p><ol class="list-group list-group-numbered">
                                <li class="list-group-item ml-2"> <b> Very difficult to understand:</b> Significant errors throughout, making comprehension challenging.
                                </li><li class="list-group-item ml-2"> <b> Poor:</b> Frequent errors that impede understanding and require extensive revision.
                                </li><li class="list-group-item ml-2"><b> Adequate:</b> Some errors present, but the overall meaning is clear and understandable.
                                </li><li class="list-group-item ml-2"><b> Good:</b> Minor errors, generally clear and well-written.
                                </li><li class="list-group-item ml-2"><b>Excellent:</b> No significant errors, highly readable and well-written.</li></ol>
                            <p class="mx-4">The best reviews justify the reviewer’s rating choice. The least valuable review simply assigns a low score without providing written comments, which does not inform authors of their shortcomings or assist the EDUNINE Program Committee in making informed decisions. Reviews without written comments cannot be sent to authors.</p>
                            <p class="mx-4">If you are using the <b>OpenConf Review Form</b> for the first time, detailed instructions for each field can be found by clicking on  
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewFormModal">Review Form Instructions</button>.</p>
                            
                            <div class="modal fade" id="reviewFormModal" tabindex="-1" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen-sm-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="reviewFormModalLabel">Review Form Instructions</h1>                            
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <p class="mx-4">Click on the submission title of the manuscript to open the Review Form.</p> 
                                                <h6>Review  Form  Example  Screen  Part  1:</h6>
                                                <img class="rounded  img-fluid" src= "../images/openconf/ocRev081Eng.png" alt="OpenConf Review Form first part">
                                                <ul>
                                                    <li><b>Recommendation:</b> Choose only one option (justify your selection in "Comments to Authors" and optionally in "Comments for the Program Committee").</li>
                                                    <li><b>Submission Categorization:</b> Choose only one option.
                                                    </li>
                                                    <li><b>Overall Value Added to the Field:</b> Check as many as appropriate.
                                                    </li>
                                                    <li><b>Reviewer Familiarity with the Subject Matter:</b> Select one option from the list, indicating your confidence in your review.</li></ul>
                                                <h6>Review  Form  Example  Screen  Part  2:</h6>
                                                <img class="rounded  img-fluid" src= "../images/openconf/ocRev082Eng.png" alt="OpenConf Review Form second part">
                                                <ul>
                                                    <li><b>Is  this  submission  a  candidate  for  the  best  submission  award?:</b>  Choose one option from the list.</li>
                                                    <li><b>Is  the  submission  length  appropriate?:</b> Choose one option from the list. Please verify that the manuscript type does not exceed the maximum page length (Full Paper = 6 pages, WIP Paper = 4 pages). 
                                                    </li> <li><b>If  from  reading  the  submission  you  know  who  the  author  is,  how  different  is  this  from  earlier  submissions  on  the  same  topic  by  the  same  author?</b>  That  is,  is  it  the  same  as  or  a  slight  modification  of  other  submissions,  with  little  or  no  new  information:  Choose only one option.
                                                    </li> <li><b>Which  of  the  following  session(s)  would  be  the  most  appropriate  for  this  submission:</b>  Check  as  many  as  appropriate.</li></ul> 
                                                <h6>Review  Form  Example  Screen  Part 3:</h6>
                                                <img class="rounded  img-fluid" src= "../images/openconf/ocRev083Eng.png" alt="OpenConf Review Form third part">                        
                                                <ul>
                                                    <li><b>Comments for the Authors:</b> Please provide constructive feedback in English. This is where you should write detailed reviews, even for excellent manuscripts. Explain what aspects you liked or disliked and why. <b>Note:</b> Manuscripts are submitted for <u>double-blind review</u>, though last-minute submissions may be <u>single-blind</u>. Authors will not know the reviewer's identity in either case.
                                                    </li><li><b>Comments for the Program Committee:</b> Use this field to provide additional information that only the EDUNINE Technical Program Chair will see for making acceptance or rejection decisions. Only use this field if necessary; otherwise, it can be left blank.

                                                    </li><li><b>Email Copy Request:</b> If you want an email copy of your review for your records, check the "Email me a copy of this review" box.
                                                    </li><li><b>Submission Confirmation:</b> To submit, you must check the box "I have completed the review" before clicking the Submit Review button.</li></ul>                                             
                                            </div>           
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            -->
            
        </section>
        <!-- Footer section -->
        <div class ="container-fluid">
            <!-- footer  -->
            <?php include "../includesHtml/final.html" ?> 
        </div>
        <script src ="../js/datesFill.js?1"></script>
        <script src ="../js/readmorereadless.js"></script>
        <script src ="../js/backTop.js"></script>
         
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>                      