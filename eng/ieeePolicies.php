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
    <title> EDUNINE2025 English Website: IEEE Policies</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="../css/EDU9Conferences.css" rel="stylesheet">
    <link href="../css/edu9parts.css" rel="stylesheet">

    <link href="../css/styleieeePolicies.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

    <!--SLICK CAROUSEL-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!--END  SLICK CAROUSEL -->

</head>

<body onload="obtenerFechas(), jump()">
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
    <button onclick="topFunction()" id="myTopBtn" title="Back to top">↑</button>
    <div>
        <!-- Navigation bar  -->
        <?php include "newHeader.html" ?>
    </div>
    <div class="#main"></div>

    <main>

        <section id="top" class="inicial">

            <!-- Primera parte: IEEE Policies -->

            <div class="row g-5">
                <div class="col text-sm-left">
                    <div class="clearfix">
                        <div class="container tope  py-5 bg-white">
                            <h2 class="display-6 fw-bold text-center tittle-top-padding">IEEE Policies</h2>

                            <p class="fs-5 mb-4">Welcome to the IEEE Policies page. IEEE is committed to fostering an
                                inclusive, respectful, and safe environment for all members and participants in our
                                activities and events. To ensure this, we have established a set of comprehensive
                                policies designed to guide our conduct, uphold our values, and protect our community.
                                These policies include:

                            <div class="policies-card">
                                <div class="policies-list">
                                    <div class="fs-5 list-group-item">
                                        <span class="policy-name">Code of Conduct Policy</span>
                                    </div>
                                    <div class="fs-5 list-group-item">
                                        <span class="policy-name">Code of Ethics</span>
                                    </div>
                                    <div class="fs-5 list-group-item">
                                        <span class="policy-name">Nondiscrimination Policy</span>
                                    </div>
                                    <div class="fs-5 list-group-item">
                                        <span class="policy-name">Event Conduct Policy</span>
                                    </div>
                                    <div class="fs-5 list-group-item">
                                        <span class="policy-name">Privacy Policy</span>
                                    </div>
                                    <div class="fs-5 list-group-item">
                                        <span class="policy-name">Publication Ethics Policy</span>
                                    </div>
                                </div>

                                <p class="fs-5 mb-2">We invite you to review each of these policies to understand our
                                    commitments and your rights and responsibilities as part of the IEEE community.
                                    Together, we can create a respectful and supportive environment that enables
                                    innovation, collaboration, and excellence.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- checklist  -->

            <div class="container-fluid">
                <!-- sequence section -->
                <div class="container px-4 py-5">
                    <h2 class="pb-2 border-bottom display-6 fw-bold text-center">INDEX</h2>

                    <div class="row g-4 py-5 row-cols-1 row-cols-md-3">
                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card">
                                <h5 class="fw-bold mb-1 text-primary">
                                    <span
                                        style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i
                                            class="fa-solid fa-user-check fa-2x"
                                            style="color:lightblue;text-shadow:2px 2px 4px #000000;"
                                            title="User check"></i></span>
                                </h5>
                                <center><img src="../images/decoration/ieeePolicies.png"
                                        class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center>
                                <div class="card-body d-flex flex-column p-1">
                                    <h5 class="fw-bold mb-1 text-center">Code of Conduct Policy</h5>
                                    <p class="mb-1 lh-sm">Our <b>Code of Conduct</b> outlines the ethical standards and
                                        expectations for behavior among authors, participants, and staff. It serves as a
                                        foundation for maintaining integrity, professionalism, and respect within our
                                        community.</p>

                                    <p class="mt-auto"><a href="#codeC"
                                            class="border-white btn btn-primary btn-sm align-self-end"
                                            role="button">More Information</a></p>
                                </div>
                            </div>
                        </div>

                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card">
                                <h5 class="fw-bold mb-1 text-primary">
                                    <span
                                        style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i
                                            class="fa-solid fa-scale-balanced fa-2x"
                                            style="color:lightblue;text-shadow:2px 2px 4px #000000;"
                                            title="Balanced"></i></span>
                                </h5>
                                <center><img src="../images/decoration/ieeePolicies.png"
                                        class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center>
                                <div class="card-body d-flex flex-column p-1">
                                    <h5 class="fw-bold mb-1 text-center">Code of Ethics</h5>
                                    <p class="mb-1 lh-sm">IEEE members commit to the highest ethical conduct, ensuring
                                        integrity, public safety, and sustainability. They pledge to avoid conflicts of
                                        interest and unlawful conduct, respect all individuals, avoid harassment and
                                        harm, and support adherence to this code among colleagues.

                                    <p class="mt-auto"><a href="#codeE"
                                            class="border-white btn btn-primary btn-sm align-self-end"
                                            role="button">More Information</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card">
                                <h5 class="fw-bold mb-1 text-primary">
                                    <span
                                        style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><s><i
                                                class="fa-solid fa-equals fa-2x"
                                                style="color:lightblue;text-shadow:2px 2px 4px #000000; text-decoration: line-through;"
                                                title="equals"></i></s></span>
                                </h5>
                                <center><img src="../images/decoration/ieeePolicies.png"
                                        class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center>
                                <div class="card-body d-flex flex-column p-1">
                                    <h5 class="fw-bold mb-1 text-center">Nondiscrimination Policy</h5>
                                    <p class="mb-1 lh-sm">IEEE is dedicated to providing equal opportunities and
                                        eliminating discrimination in all its forms. Our Nondiscrimination Policy
                                        ensures that all individuals are treated fairly and without bias, regardless of
                                        race, gender, sexual orientation, disability, or other protected
                                        characteristics.</p>
                                    <p class="mt-auto"><a href="#nonD"
                                            class="border-white btn btn-primary btn-sm align-self-end"
                                            role="button">More Information</a></p>
                                </div>
                            </div>
                        </div>

                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card">
                                <h5 class="fw-bold mb-1 text-primary">
                                    <span
                                        style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i
                                            class="fa-solid fa-people-roof fa-2x"
                                            style="color:lightblue;text-shadow:2px 2px 4px #000000;"
                                            title="Event"></i></span>
                                </h5>
                                <center><img src="../images/decoration/ieeePolicies.png"
                                        class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center>
                                <div class="card-body d-flex flex-column p-1">
                                    <h5 class="fw-bold mb-1 text-center">Event Conduct Policy</h5>
                                    <p class="mb-1 lh-sm">To create a positive and productive atmosphere at our events,
                                        the Event Conduct Policy sets clear expectations for participant behavior. This
                                        policy is designed to ensure that all IEEE events are welcoming, safe, and
                                        conducive to professional and personal growth.
                                    </p>
                                    <p class="mt-auto"><a href="#eventC"
                                            class="border-white btn btn-primary btn-sm align-self-end"
                                            role="button">More Information</a></p>
                                </div>
                            </div>
                        </div>

                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card">
                                <h5 class="fw-bold mb-1 text-primary">
                                    <span
                                        style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i
                                            class="fa-solid fa-user-shield fa-2x"
                                            style="color:lightblue;text-shadow:2px 2px 4px #000000;"
                                            title="User Privacy"></i></span>
                                </h5>
                                <center><img src="../images/decoration/ieeePolicies.png"
                                        class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center>
                                <div class="card-body d-flex flex-column p-1">
                                    <h5 class="fw-bold mb-1 text-center">Privacy Policy</h5>
                                    <p class="mb-1 lh-sm">Protecting the personal information of our members and
                                        participants is of utmost importance to IEEE. Our Privacy Policy outlines how we
                                        collect, use, and safeguard your data, ensuring transparency and trust in our
                                        interactions.
                                    </p>
                                    <p class="mt-auto"><a href="#privacy"
                                            class="border-white btn btn-primary btn-sm align-self-end"
                                            role="button">More Information</a></p>
                                </div>
                            </div>
                        </div>

                        <div class=" col d-flex flex-fill justify-content-center fs-2 mb-3">
                            <div class="card">
                                <h5 class="fw-bold mb-1 text-primary">
                                    <span
                                        style="display: inline-block; margin: 0.25em;  border-radius: 0.25em; padding: .25em 0.5em"><i
                                            class="fa-solid fa-file-circle-check fa-2x"
                                            style="color:lightblue;text-shadow:2px 2px 4px #000000;"
                                            title="file checked"></i></span>
                                </h5>
                                <center><img src="../images/decoration/ieeePolicies.png"
                                        class="card-img-top mt-2 mx-auto w-50" alt="IEEE Policies Image"></center>
                                <div class="card-body d-flex flex-column p-1">
                                    <h5 class="fw-bold mb-1 text-center">Publication Ethics</h5>
                                    <p class="mb-1 lh-sm">The <b>Publication Ethics and Malpractice Statement</b>
                                        ensures all papers are reviewed by experts for relevance, originality, and
                                        accuracy. It enforces ethical standards, including avoiding plagiarism, ensuring
                                        originality, and disclosing financial support. Rejected articles are not
                                        re-reviewed, and unsuitable submissions may be rejected without review.
                                    </p>
                                    <p class="mt-auto"><a href="#pubE"
                                            class="border-white btn btn-primary btn-sm align-self-end"
                                            role="button">More Information</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Code of Conduct -->

        <section id="codeC">
            <div class="container tope  pb-5 bg-white">
                <div class="row g-5">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                    src="../images/decoration/ieeePolicies.png" alt="IEEE Policies Image">
                            </div>
                            <h4 class="display-6 fw-bold text-center">Code of Conduct</h4>
                            <p class="fs-5 mb-4">The IEEE Code of Conduct outlines rules such as respecting others and
                                their privacy, treating people fairly without harassment or discrimination, avoiding
                                harm to others' property, reputation, or employment, refraining from retaliation against
                                those who report misconduct, and complying with all applicable laws and IEEE policies.
                                Key principles include rejecting bribery, avoiding conflicts of interest, protecting
                                confidential information, and respecting intellectual property rights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-3">
                <div class="row">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <h5 class="display-6 fw-bold text-center">IEEE Code of Conduct</h5>
                            <div class="approval-info">
                                <p class="mb-0"><strong>Approved by the IEEE Board of Directors, June 2014</strong></p>
                            </div>

                            <p class="lh-sm">We, the members and employees of IEEE, recognize the importance of our
                                technologies in affecting the quality of life throughout the world and we accept a
                                personal obligation to our professions, the members of IEEE, and other individuals
                                involved in IEEE activities in our fields of interest. By this obligation we commit
                                ourselves to the highest standards of integrity, responsible behavior, and ethical and
                                professional conduct. We agree to be bound by the following rules:</p>
                            <ol class="list-group list-group-numbered">

                                <!-- Conduct Rules -->
                                <div class="policies-card">
                                    <ol class="conduct-rules">
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">1</span>
                                                <span class="rule-title">Be respectful of others</span>
                                            </div>
                                            <div class="rule-content">
                                                <div class="rule-item">
                                                    We will be respectful of others, including IEEE members and IEEE
                                                    employees, and will act in a professional manner while participating
                                                    in IEEE activities.
                                                </div>
                                                <div class="rule-item">
                                                    We will be respectful of the privacy of others and the protection of
                                                    their personal information and data.
                                                </div>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">2</span>
                                                <span class="rule-title">Treat people fairly</span>
                                            </div>
                                            <div class="rule-content">
                                                <div class="rule-item">
                                                    We will not engage in harassment of any kind, including sexual
                                                    harassment, or bullying behavior whether in person, via
                                                    cybertechnology or otherwise.
                                                </div>
                                                <div class="rule-item">
                                                    We will not discriminate against any person because of
                                                    characteristics protected by law (e.g., age, ancestry, color,
                                                    disability or handicap, national origin, race, religion, gender,
                                                    sexual or affectional orientation, gender identity, gender
                                                    expression, appearance, matriculation, political affiliation,
                                                    marital status, veteran status).
                                                </div>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">3</span>
                                                <span class="rule-title">Avoid injuring others, their property,
                                                    reputation or employment</span>
                                            </div>
                                            <div class="rule-content">
                                                <div class="rule-item">
                                                    We will avoid injuring others, their property, data, reputation, or
                                                    employment by false or malicious action.
                                                </div>
                                                <div class="rule-item">
                                                    We will not engage in or participate in the spreading of any
                                                    malicious rumors, defamation or any other verbal or physical abuses,
                                                    against an IEEE member, employee or other person, whether on the
                                                    Internet or otherwise.
                                                </div>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">4</span>
                                                <span class="rule-title">Refrain from retaliation</span>
                                            </div>
                                            <div class="rule-content">
                                                <div class="rule-item">
                                                    We will not retaliate against any IEEE member, employee or other
                                                    person who reports an act of misconduct, or who reports any
                                                    violation of the IEEE Code of Ethics or this Code of Conduct.
                                                </div>
                                                <div class="rule-item">
                                                    We will not retaliate against any person who makes IEEE aware of the
                                                    violation of any laws, rules or regulations in connection with IEEE
                                                    activities.
                                                </div>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">5</span>
                                                <span class="rule-title">Comply with applicable laws and IEEE
                                                    policies</span>
                                            </div>
                                            <div class="rule-content">
                                                <div class="rule-item">
                                                    We will comply with all applicable laws, rules and regulations
                                                    governing IEEE's business conduct worldwide and all relevant
                                                    procedures established by IEEE whenever and wherever we are acting
                                                    on behalf of IEEE, or participating in IEEE activities, including
                                                    but not limited to the following:
                                                </div>
                                                <div class="sub-items">
                                                    <div class="sub-item">a) Rejecting bribery in all forms.</div>
                                                    <div class="sub-item">b) Avoiding real or perceived conflicts of
                                                        interest whenever possible, and disclosing them to affected
                                                        parties when they do exist.</div>
                                                    <div class="sub-item">c) Protecting confidential information
                                                        belonging to IEEE and personal information belonging to IEEE
                                                        members, employees and other persons.</div>
                                                    <div class="sub-item">d) Not agreeing with competing persons to fix
                                                        prices or reduce price competition through allocation of
                                                        customers or markets, manipulate bids in any competitive bidding
                                                        process, or engage in other acts that result in restraining
                                                        trade.</div>
                                                    <div class="sub-item">e) Not misusing or infringing the intellectual
                                                        property of others.</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                                <div class="ieee-download-container d-flex flex-column align-items-center text-center">
                                    <h4 class="mb-3">Download Official Document</h4>
                                    <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/about/ieee_code_of_conduct.pdf"
                                        class="download-btn">IEEE Code of Conduct (PDF)</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Code of Ethics -->

        <section id="codeE"">
            <div class= " container tope pb-5 bg-white">
            <div class="row g-5">
                <div class="col text-sm-left">
                    <div class="clearfix">
                        <div class="text-center">
                            <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                src="../images/decoration/ieeePolicies.png" alt="IEEE Policies Image">
                        </div>
                        <h4 class="display-6 fw-bold text-center">Code of Ethics</h4>
                        <p class="fs-5 mb-4">The IEEE members commit to the highest ethical and professional conduct,
                            recognizing the impact of technology on global quality of life. They pledge to uphold
                            integrity, prioritize public safety and sustainability, improve technological understanding,
                            avoid conflicts of interest and unlawful conduct, seek honest feedback, maintain technical
                            competence, treat all individuals with fairness and respect, avoid harassment and harm, and
                            support adherence to the code among colleagues and co-workers.
                        </p>
                    </div>
                </div>
            </div>
            </div>

            <div class="container py-3">
                <div class="row">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <h5 class="display-6 fw-bold text-center">IEEE Code of Ethics</h5>
                            <div class="approval-info">
                                <p class="mb-0"><strong>Adopted by the IEEE Board of Directors June 2020</strong></p>
                            </div>

                            <p class="lh-sm">We, the members of the IEEE, in recognition of the importance of our
                                technologies in affecting the quality of life throughout the world, and in accepting a
                                personal obligation to our profession, its members and the communities we serve, do
                                hereby commit ourselves to the highest ethical and professional conduct and agree:</p>
                            <ol class="list-group list-group-numbered">

                                <!-- Ethics Rules -->
                                <div class="policies-card">
                                    <ol class="conduct-rules">
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">1</span>
                                                <span class="rule-title"> To uphold the highest standards of integrity,
                                                    responsible behavior, and ethical conduct in professional
                                                    activities.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">2</span>
                                                <span class="rule-title">To hold paramount the safety, health, and
                                                    welfare of the public, to strive to comply with ethical design and
                                                    sustainable development practices, to protect the privacy of others,
                                                    and to disclose promptly factors that might endanger the public or
                                                    the environment.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">3</span>
                                                <span class="rule-title">To improve the understanding by individuals and
                                                    society of the capabilities and societal implications of
                                                    conventional and emerging technologies, including intelligent
                                                    systems.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">4</span>
                                                <span class="rule-title">To avoid real or perceived conflicts of
                                                    interest whenever possible, and to disclose them to affected parties
                                                    when they do exist.</span>
                                            </div>
                                        </li>
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">5</span>
                                                <span class="rule-title">To avoid unlawful conduct in professional
                                                    activities, and to reject bribery in all its forms.</span>
                                            </div>
                                        </li>
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">6</span>
                                                <span class="rule-title">Seek and offer honest technical criticism,
                                                    correct errors, state claims realistically, and credit others
                                                    contributions.</span>
                                            </div>
                                        </li>
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">7</span>
                                                <span class="rule-title">Maintain and improve technical skills, and
                                                    accept tasks only when qualified or after disclosing
                                                    limitations.</span>
                                            </div>
                                        </li>
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">8</span>
                                                <span class="rule-title">Treat all people fairly and respectfully,
                                                    without discrimination based on personal characteristics.</span>
                                            </div>
                                        </li>
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">9</span>
                                                <span class="rule-title">To not engage in harassment of any kind,
                                                    including sexual harassment or bullying behavior.</span>
                                            </div>
                                        </li>
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">10</span>
                                                <span class="rule-title">Avoid harming others, their property,
                                                    reputation, or employment through false or malicious actions.</span>
                                            </div>
                                        </li>
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">11</span>
                                                <span class="rule-title">Support others in following the code of ethics,
                                                    ensure it is upheld, and avoid retaliation against those who report
                                                    violations.</span>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                                <div class="ieee-download-container d-flex flex-column align-items-center text-center">
                                    <h4 class="mb-3">Download Official Document</h4>
                                    <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/about/corporate/ieee-code-of-ethics.pdf"
                                        class="download-btn">IEEE Code of Ethics (PDF)</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Non discrimination -->
        <section id="nonD">
            <div class="container tope  pb-5 bg-white">
                <div class="row g-5">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                    src="../images/decoration/ieeePolicies.png" alt="IEEE Policies Image">
                            </div>
                            <h4 class="display-6 fw-bold text-center">Nondiscrimination</h4>
                            <p class="fs-5 mb-4">IEEE is dedicated to providing equal opportunities and eliminating
                                discrimination in all its forms. Our Nondiscrimination Policy ensures that all
                                individuals are treated fairly and without bias, regardless of race, gender, sexual
                                orientation, disability, or other protected characteristics.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-3">
                <div class="row">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <h5 class="display-6 fw-bold text-center">IEEE Policy Against Discrimination and Harassment
                            </h5>
                            <div class="approval-info">
                                <p class="mb-0"><strong>(IEEE Policies, Section 9.27)</strong></p>
                            </div>
                            <!-- Nondiscrimination Rules -->
                            <div class="policies-card">
                                <ol class="conduct-rules">
                                    <li class="conduct-rule">
                                        <div class="d-flex align-items-center">
                                            <span class="rule-number">1</span>
                                            <span class="rule-title">Commitment to Equality and Inclusion</span>
                                        </div>
                                        <div class="rule-content">
                                            <div class="rule-item">
                                                IEEE is committed to maintaining an environment free from discrimination
                                                or harassment, enabling members to have full and productive careers.
                                            </div>
                                            <div class="rule-item">
                                                Ensures equal access to programs, facilities, services, and employment,
                                                regardless of personal characteristics unrelated to ability,
                                                performance, or qualifications, in accordance with IEEE policy and
                                                applicable laws.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="conduct-rule">
                                        <div class="d-flex align-items-center">
                                            <span class="rule-number">2</span>
                                            <span class="rule-title">Prohibition of Discrimination, Harassment, and
                                                Bullying</span>
                                        </div>
                                        <div class="rule-content">
                                            <div class="rule-item">
                                                IEEE prohibits discrimination, harassment, and bullying for any reason,
                                                including age, ancestry, color, disability, national origin, race,
                                                religion, gender, sexual orientation, gender identity, appearance,
                                                education status, political affiliation, marital status, veteran status,
                                                or any other characteristic protected by law.
                                            </div>
                                            <div class="rule-item">
                                                All IEEE employees, volunteers, members, and constituents must maintain
                                                an environment free from discrimination, harassment, bullying, and
                                                retaliation during IEEE business, events, or activities.
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>

                            <div class="ieee-download-container d-flex flex-column align-items-center text-center">
                                <h4 class="mb-3">For the complete Policy: download</h4>
                                <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/about/whatis/nondiscrimination.pdf"
                                    class="download-btn">IEEE Policies, Section 9.26 - IEEE Policy Against
                                    Discrimination and Harassment (PDF, 45 KB)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Conduct -->
        <section id="eventC">
            <div class="container tope  pb-5 bg-white">
                <div class="row g-5">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                    src="../images/decoration/ieeePolicies.png" alt="IEEE Policies Image">
                            </div>
                            <h4 class="display-6 fw-bold text-center">IEEE Event Conduct & Safety Statement for
                                Conferences</h4>
                            <p class="fs-5 mb-4">IEEE believes in openness, international collaboration, and the free
                                flow of talent and ideas. Meetings, conferences, and other events provide a forum for
                                the exchange of those technical and humanitarian conversations. IEEE is committed to
                                providing a safe, productive, and welcoming environment to all conference, event, and
                                meeting participants who engage with IEEE in these conversations.</p>

                            <p class="fs-5 mb-4">To support this concept, IEEE has created a conduct and safety
                                statement that will become the IEEE credo for conferences, events, and meetings. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-3">
                <div class="row">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <h5 class="display-6 fw-bold text-center">Event Conduct and Safety Statement Language</h5>
                            <ol class="list-group list-group-numbered">

                                <div class="policies-card">
                                    <ol class="conduct-rules">
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-title"> IEEE believes that science, technology, and
                                                    engineering are fundamental human activities, for which openness,
                                                    international collaboration, and the free flow of talent and ideas
                                                    are essential. Its meetings, conferences, and other events seek to
                                                    enable engaging, thought- provoking conversations that support
                                                    IEEE's core mission of advancing technology for humanity.
                                                    Accordingly, IEEE is committed to providing a safe, productive, and
                                                    welcoming environment to all participants, including staff and
                                                    vendors, at IEEE-related events.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-title"> IEEE has no tolerance for discrimination,
                                                    harassment, or bullying in any form at IEEE-related events. All
                                                    participants have the right to pursue shared interests without
                                                    harassment or discrimination in an environment that supports
                                                    diversity and inclusion. Participants are expected to adhere to
                                                    these principles and respect the rights of others.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-title"> IEEE seeks to provide a secure environment at
                                                    its events. Participants should
                                                    report any behavior inconsistent with the principles outlined here,
                                                    to the conference staff
                                                    (<a href="mailto:edunine@edunine.eu">edunine@edunine.eu</a>),
                                                    security or venue personnel,
                                                    or to <a
                                                        href="mailto:eventconduct@ieee.org.">eventconduct@ieee.org</a>.</span>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                                <div class="ieee-download-container d-flex flex-column align-items-center text-center">
                                    <h4 class="mb-3">Download the Conduct and Safety Statement:</h4>
                                    <a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/conferences/Event%20Conduct%20and%20Safety%20Statement.pdf"
                                        class="download-btn">Conduct and Safety Statement (PDF, 134 KB)</a>
                                </div>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Privacy policy -->
        <section id="privacy">
            <div class="container tope  pb-5 bg-white">
                <div class="row g-5">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                    src="../images/decoration/ieeePolicies.png" alt="IEEE Policies Image">
                            </div>
                            <h4 class="display-6 fw-bold text-center">IEEE Privacy Policy</h4>
                            <p class="fs-5 mb-4">At IEEE, we prioritize your privacy and aim to provide you with the
                                information, content, and experiences that are most relevant to you. We are dedicated to
                                safeguarding the personal information of our members, participants, volunteers, and
                                other contacts.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-3">
                <div class="row">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <h5 class="display-6 fw-bold text-center">IEEE Privacy Policy</h5>
                            <ol class="list-group list-group-numbered">

                                <div class="policies-card">
                                    <ol class="conduct-rules">
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-title"> This privacy policy applies to all personal
                                                    data processed by full-time and
                                                    part-time employees, volunteers when acting on behalf of IEEE,
                                                    contractors and partners
                                                    doing business on behalf of IEEE, as well as all legal entities, all
                                                    operating locations in
                                                    all countries, and all business processes conducted by IEEE.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-title"> The IEEE EDUNINE Privacy Policy is summarized
                                                    in the EDUNINE2025 OpenConf
                                                    System. For details, please visit
                                                    <a href="https://submission.copec.eu/edunine2025/privacy_policy.php"
                                                        class="border-white btn btn-primary btn-sm"
                                                        role="button">Privacy Policy</a>.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-title"> For details about the complete policy, visit
                                                    <a href="https://www.ieee.org/security-privacy.html"
                                                        class="border-white btn btn-primary btn-sm" role="button">IEEE
                                                        Privacy Policy</a>.</span>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Publication ethics policy -->
        <section id="pubE">
            <div class="container tope  pb-5 bg-white">
                <div class="row g-5">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <div class="text-center">
                                <img class="col-4 p-2 rounded float-sm-start img-fluid"
                                    src="../images/decoration/ieeePolicies.png" alt="IEEE Policies Image">
                            </div>
                            <h4 class="display-6 fw-bold text-center">Publication Ethics and Malpractice Statement</h4>
                            <p class="fs-5 mb-4">The <b>Publication Ethics and Malpractice Statement</b> outlines the
                                review process for submitted papers, requiring evaluation by at least two or three
                                expert reviewers. Papers are assessed based on relevance, significance, originality,
                                readability, and language. Decisions include acceptance or rejection, with rejected
                                articles not re-reviewed. Unsuitable articles may be rejected without review. Acceptance
                                is subject to legal requirements regarding libel, copyright infringement, and
                                plagiarism. Reviewers must highlight any significant overlap with existing publications.
                                Papers must allow replication of results, and fraudulent or inaccurate statements are
                                unacceptable. Authors must ensure originality and proper citation, avoid submitting the
                                same manuscript to multiple publications, limit authorship to significant contributors,
                                and disclose all financial support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-3">
                <div class="row">
                    <div class="col text-sm-left">
                        <div class="clearfix">
                            <h5 class="display-6 fw-bold text-center">IEEE Publication Ethics and Malpractice Statement
                            </h5>
                            <ol class="list-group list-group-numbered">

                                <div class="policies-card">
                                    <ol class="conduct-rules">
                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">1</span>
                                                <span class="rule-title"> All submitted papers are subject to a review
                                                    process by at least two or three
                                                    international reviewers that are experts in the area of the
                                                    paper.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">2</span>
                                                <span class="rule-title"> The factors that are taken into account in
                                                    review are relevance, significance, originality, readability, and
                                                    language.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">3</span>
                                                <span class="rule-title"> The possible decisions include acceptance or
                                                    rejection.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">4</span>
                                                <span class="rule-title"> Rejected articles will not be
                                                    re-reviewed.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">5</span>
                                                <span class="rule-title"> Articles may be rejected without review if
                                                    they are obviously not suitable for publication.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">6</span>
                                                <span class="rule-title"> The paper acceptance is constrained by such
                                                    legal requirements as shall then be in force regarding libel,
                                                    copyright infringement, and plagiarism.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">7</span>
                                                <span class="rule-title"> A reviewer should also call to the publisher's
                                                    attention any substantial similarity or overlap between the
                                                    manuscript under consideration and any other published paper of
                                                    which they have personal knowledge.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">8</span>
                                                <span class="rule-title"> A paper should contain sufficient detail and
                                                    references to permit others to replicate the work. Fraudulent or
                                                    knowingly inaccurate statements constitute unethical behavior and
                                                    are unacceptable.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">9</span>
                                                <span class="rule-title"> The authors should ensure that they have
                                                    written entirely original works, and if the authors have used the
                                                    work and/or words of others that this has been appropriately cited
                                                    or quoted.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">10</span>
                                                <span class="rule-title"> Submitting the same manuscript to more than
                                                    one publication concurrently constitutes unethical publishing
                                                    behavior and is unacceptable.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">11</span>
                                                <span class="rule-title"> Authorship should be limited to those who have
                                                    made a significant contribution to the conception, design,
                                                    execution, or interpretation of the reported work.</span>
                                            </div>
                                        </li>

                                        <li class="conduct-rule">
                                            <div class="d-flex align-items-center">
                                                <span class="rule-number">12</span>
                                                <span class="rule-title"> All sources of financial support for the
                                                    project should be disclosed.</span>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section id="dates">
            <*/?php include "../includesHtml/timeline.html" ?>    

        </section> -->

        <!-- Footer section -->
        <section id="organizers">
            <div class="container-fluid">
                <!-- Footer  -->
                <?php include "../includesHtml/final.html" ?>
            </div>
        </section>

        <script src="../js/datesFillNewTimeline2.js?1"></script>
        <script src="../js/readmorereadless.js"></script>
        <script src="../js/backTop.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        <!--SLICK CAROUSEL-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="../js/slick-carousel-config.js"></script>
</body>

</html>