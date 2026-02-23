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

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="../css/EDU9Conferences.css" rel="stylesheet">
    <link href="../css/edu9parts.css" rel="stylesheet">
    <link href="../css/stylefees.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/payment.css">
    <link href="../css/styleieeePolicies.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <script src="https://kit.fontawesome.com/5dc88a8201.js" crossorigin="anonymous"></script>

    <!--SLICK CAROUSEL-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!--END  SLICK CAROUSEL -->

</head>

<body onload="jump() " style="padding-top: 120px;">
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
    <div class="container tope py-5 bg-white">

        <div class="row g-5">
            <div class="col text-sm-left">
                <div class="clearfix">
                    <div class="text-center">
                        <img class="col-4 p-2 rounded float-sm-start img-fluid"
                            src="../images/decoration/registration.jpg" alt="Registration and Payment">
                    </div>
                    <h2 class="display-6 fw-bold">Authors and Participants Conference Registration</h2>

                    <p class="fs-5 mb-4">Attention <b>Authors</b>: To ensure your accepted final paper is published
                        in the <b>IEEE Xplore®</b> digital library (please note that IEEE reserves the right to
                        reject papers not meeting standards), registration and oral presentation at the conference
                        are mandatory. Each author registration permits the presentation and publication of one
                        paper, with the option to include an additional paper for an extra publication fee.
                        Unpresented accepted papers cannot be submitted for publication in <b>IEEE
                            Xplore®</b>.<br>For <b>Authors</b> and <b>Participants</b>: Registration grants access
                        to all conference sessions, workshops, tours, and other activities, both online and
                        in-person. After the conference, certificates for participation and paper presentation will
                        be issued. Registration fees vary based on Early, Normal, or Late deadlines. Payment options
                        include credit card (PayPal) in Euros or bank transfer in Euros or U.S. Dollars.</p>
                    <hr>
                    
                    <h2>PAYMENT REGISTRATION</h2>
                    <div class="steps">
                        <ol>
                            <li>Choose your type of payment.</li>
                            <li>Make your payment in PayPal using the corresponding link.</li>
                            <li>Fill in the form to register your paper.
                                <a class="paypal-link" href="https://forms.gle/RTKpRGRR1qUosxUf9" target="_blank">
                                    Complete Registration Form
                                </a>
                            </li>
                        </ol>
                    </div>

                    <!-- Card informativa - Agregar después de las tablas de tarifas -->
                    <div id="registration-information" class="edunine-table-wrapper mt-5">
                        <div class="edunine-currency-header">Registration Information</div>
                        <div class="p-4 bg-white">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-3" style="color: #2980b9;">For Authors (Paper Presenters)
                                    </h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check-circle me-2"
                                                style="color: #3498db;"></i><strong>Registration &
                                                Presentation:</strong> At least one author must register and present
                                            the paper during the conference.</li>
                                        <li class="mb-2"><i class="fas fa-check-circle me-2"
                                                style="color: #3498db;"></i><strong>Publication:</strong> Each
                                            registration covers presentation and publication of one paper in IEEE
                                            Xplore®.</li>
                                        <li class="mb-2"><i class="fas fa-check-circle me-2"
                                                style="color: #3498db;"></i><strong>Additional Papers:</strong>
                                            Extra publication fee applies for additional papers (see Paper Fee
                                            column).</li>
                                        <li class="mb-2"><i class="fas fa-check-circle me-2"
                                                style="color: #3498db;"></i><strong>Important:</strong>
                                            Non-presented papers will not be submitted to IEEE Xplore®.</li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-3" style="color: #2980b9;">Registration Benefits</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-users me-2" style="color: #5dade2;"></i>Access
                                            to all conference sessions and
                                            workshops</li>
                                        <li class="mb-2"><i class="fas fa-certificate me-2"
                                                style="color: #5dade2;"></i>Participation and presentation
                                            certificates</li>
                                        <li class="mb-2"><i class="fas fa-map-marked-alt me-2"
                                                style="color: #5dade2;"></i>Cultural tours and special activities
                                        </li>
                                        <li class="mb-2"><i class="fas fa-coffee me-2"
                                                style="color: #5dade2;"></i>Coffee
                                            breaks, lunches, and welcome
                                            cocktail</li>
                                    </ul>

                                    <h6 class="fw-bold mt-4 mb-3" style="color: #2980b9;">Payment Options</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-1"><i class="fas fa-credit-card me-2"
                                                style="color: #5dade2;"></i>Credit card via PayPal (Euros)</li>
                                        <li class="mb-1"><i class="fas fa-university me-2"
                                                style="color: #5dade2;"></i>Bank
                                            transfer (Euros or USD)</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="alert alert-info border-0"
                                        style="background-color: #e8f4f8; color: #1f4e79;">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        <strong>Cancellation Policy:</strong> In case you cannot attend the event,
                                        registration must be cancelled at least 3 months before the conference date
                                        to be eligible for cancellation.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-5">
                        <!-- Clarification -->
                        <h2> NOTE</h2>
                        <!-- Card -->
                        <div class="card note-card border-0">
                            <div class="card-body p-4 p-md-5">
                            <p class="mb-3 ">
                                Below you will find the fee corresponding to your category. Please review the available options and select the one that best suits your needs.
                            </p>
                            <p class="mb-0">
                                Kindly note that each registration covers the presentation of one (1) paper. An additional fee applies for a second paper, as specified in the table. Each registration may include up to two (2) papers.
                            </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h2>PAYMENT OPTIONS</h2>
                    <ul>
                        <li><a href="#payment-euros">Payment in Euros</a></li>
                        <li><a href="#payment-dollars">Payment in U.S. Dollars</a></li>
                    </ul>

                    <section id="payment-euros" class="mb-4">
                        <h3>FEES AND PAYMENT OPTIONS (EUROS)</h3>
                        <!-- Euros Table -->
                        <div class="edunine-table-wrapper mb-4">
                            <div class="edunine-currency-header">FEES Euros</div>
                            <table class="edunine-registration-table">
                                <thead>
                                    <tr>
                                        <th class="edunine-table-header" style="width: 40%;">Category</th>
                                        <th class="edunine-table-header" style="width: 15%;">Early</th>
                                        <th class="edunine-table-header" style="width: 15%;">Normal</th>
                                        <th class="edunine-table-header" style="width: 15%;">Late</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="edunine-category-cell edunine-nonmember-category">Non-member</td>
                                        <td class="edunine-table-cell">500</td>
                                        <td class="edunine-table-cell">550</td>
                                        <td class="edunine-table-cell">605</td>

                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">IEEE member</td>
                                        <td class="edunine-table-cell">420</td>
                                        <td class="edunine-table-cell">462</td>
                                        <td class="edunine-table-cell">508</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">IEEE EdSoc member</td>
                                        <td class="edunine-table-cell">356</td>
                                        <td class="edunine-table-cell">392</td>
                                        <td class="edunine-table-cell">431</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">Student IEEE member</td>
                                        <td class="edunine-table-cell">260</td>
                                        <td class="edunine-table-cell">286</td>
                                        <td class="edunine-table-cell">315</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">Student Non-member</td>
                                        <td class="edunine-table-cell">300</td>
                                        <td class="edunine-table-cell">330</td>
                                        <td class="edunine-table-cell">363</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">IEEE Life member</td>
                                        <td class="edunine-table-cell">260</td>
                                        <td class="edunine-table-cell">286</td>
                                        <td class="edunine-table-cell">315</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">Guest</td>
                                        <td class="edunine-table-cell">150</td>
                                        <td class="edunine-table-cell">165</td>
                                        <td class="edunine-table-cell">182</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell edunine-nonmember-category">Adittional Paper
                                            Fee</td>
                                        <td class="edunine-table-cell">100</td>
                                        <td class="edunine-table-cell">100</td>
                                        <td class="edunine-table-cell">100</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>FEES (Euros)</th>
                                    <th>LATE 1 PAPER</th>
                                    <th>PAYPAL LINK (Authors and participants)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Non-Member of IEEE</td>
                                    <td>605 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P6BGGEWLBV4FC"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE Member</td>
                                    <td>508 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EGGR8YJWSQXBC"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE EdSoc Member</td>
                                    <td>431 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7TP46TAHUT4V6"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE Student Member</td>
                                    <td>315 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LEHZW3LFLNSAL"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Student Non-Member of IEEE</td>
                                    <td>363 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NRM3FR9W5JM6C"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE Life Member</td>
                                    <td>315 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PHBTLHN4GP8HL"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- TABLE 2: NORMAL 2 PAPER -->
                        <table>
                            <thead>
                                <tr>
                                    <th>FEES (Euros)</th>
                                    <th>LATE 2 PAPER</th>
                                    <th>PAYPAL LINK (Authors only)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Non-Member of IEEE</td>
                                    <td>705 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=K9F55LHB964U2"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE Member</td>
                                    <td>608 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8PEF26GHBDZD8"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE EdSoc Member</td>
                                    <td>531 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CNHQMY8XA8URN"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE Student Member</td>
                                    <td>415 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZUJD3TWL5AWA4"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Student Non-Member of IEEE</td>
                                    <td>463 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PVXJAXBFDMC2S"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IEEE Life Member</td>
                                    <td>415 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TV7XT3AJVLJDA"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><strong>Extra Registration (Authors and Participants)</strong></td>
                                </tr>
                                <tr>
                                    <td>Guest</td>
                                    <td>182 Euros</td>
                                    <td>
                                        <a class="paypal-link"
                                            href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QJ6NU3ZJC6LQ6"
                                            target="_blank">
                                            Pay via PayPal
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="policies-card">
                            <h3>BANK TRANSFER IN EUROS</h3>
                            <ol class="conduct-rules">
                                <li class="conduct-rule">
                                    <div class="d-flex align-items-center">
                                        <span class="rule-title">Payment Information</span>
                                    </div>
                                    <div class="rule-content">
                                        <div class="rule-item">
                                            <b>Bank transfer to Caixa Geral de Depósitos</b><br>
                                            <b>Account Number:</b> 0130 005085500<br>
                                            <b>IBAN:</b> PT50.0035.0130.00005085500.67<br>
                                            <b>BIC:</b> CGDIPTPL<br>
                                            <b>Bank account owner:</b> Dra. Melany Maria Ciampi T Rocha Brito<br>
                                            <b>Bank address:</b> Caixa Geral de Depósitos<br>
                                            Univ. do Minho,<br>
                                            Campus de Azurém, R/C<br>
                                            4800-001 Guimarães<br>
                                            PORTUGAL<br>
                                            <b>Phone:</b> +351-253.540.320<br>
                                            <b>Fax:</b>+351-253.540.327<br>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                    </section>
                    <hr>

                    <section id="payment-dollars" class="mb-4">
                        <h3>FEES AND PAYMENT OPTIONS (USD)</h3>
                        <!-- Dollars Table -->
                        <div class="edunine-table-wrapper">
                            <div class="edunine-currency-header">FEES USD</div>
                            <table class="edunine-registration-table">
                                <thead>
                                    <tr>
                                        <th class="edunine-table-header" style="width: 40%;">Category</th>
                                        <th class="edunine-table-header" style="width: 15%;">Early</th>
                                        <th class="edunine-table-header" style="width: 15%;">Normal</th>
                                        <th class="edunine-table-header" style="width: 15%;">Late</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="edunine-category-cell edunine-nonmember-category">Non-member</td>
                                        <td class="edunine-table-cell">600</td>
                                        <td class="edunine-table-cell">660</td>
                                        <td class="edunine-table-cell">726</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">IEEE member</td>
                                        <td class="edunine-table-cell">504</td>
                                        <td class="edunine-table-cell">555</td>
                                        <td class="edunine-table-cell">610</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">IEEE EdSoc member</td>
                                        <td class="edunine-table-cell">428</td>
                                        <td class="edunine-table-cell">470</td>
                                        <td class="edunine-table-cell">517</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">Student IEEE member</td>
                                        <td class="edunine-table-cell">312</td>
                                        <td class="edunine-table-cell">343</td>
                                        <td class="edunine-table-cell">378</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">Student Non-member</td>
                                        <td class="edunine-table-cell">360</td>
                                        <td class="edunine-table-cell">396</td>
                                        <td class="edunine-table-cell">436</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">IEEE Life member</td>
                                        <td class="edunine-table-cell">312</td>
                                        <td class="edunine-table-cell">343</td>
                                        <td class="edunine-table-cell">378</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell">Guest</td>
                                        <td class="edunine-table-cell">180</td>
                                        <td class="edunine-table-cell">198</td>
                                        <td class="edunine-table-cell">218</td>
                                    </tr>
                                    <tr>
                                        <td class="edunine-category-cell edunine-nonmember-category">Adittional Paper
                                            Fee</td>
                                        <td class="edunine-table-cell">120</td>
                                        <td class="edunine-table-cell">120</td>
                                        <td class="edunine-table-cell">120</td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="policies-card">
                            <h3>BANK TRANSFER IN DOLLARS (USD)</h3>
                            <ol class="conduct-rules">
                                <li class="conduct-rule">
                                    <div class="d-flex align-items-center">
                                        <span class="rule-title">Payment Information</span>
                                    </div>
                                    <div class="rule-content">
                                        <div class="rule-item">
                                            <b>Beneficiary's Bank Number:</b> OR1 -127 -01 - 01<br>
                                            <b>Beneficiary's Bank Account Number:</b> 0045 4068 7552<br>
                                            <b>Beneficiary's Name:</b> Dr Claudio R. Brito<br>
                                            <b>Beneficiary's Address:</b> 1041 Stanton Terrace<br>
                                            <b>Beneficiary's City:</b> Pittsburgh, PA<br>
                                            <b>Beneficiary's Country: </b> United States of America<br>
                                            <b>ZIP Code:</b> 15201<br>
                                            Personal Account<br>
                                        </div>
                                        <div class="rule-item">
                                            <b>For payments outside the U.S.</b><br>
                                            Bank of America<br>
                                            <b>SWIFT code:</b> BOFAUS3N<br>
                                            <b>Bank address:</b> BANK OF AMERICA, NA 222 BROADWAY NEW YORK, NEW
                                            YORK 10038, USA.<br>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </section>
                </div>

                <!-- GUEST INFORMATION BOX -->
                <div class="info-box">
                    <h3>Who is considered a Guest?</h3>
                    <p>
                        A <strong>Guest</strong> is <strong>not</strong> an author or participant and cannot attend
                        technical
                        sessions or present papers.
                    </p>
                    <ul>
                        <li>A Guest is only an accompanying person of an author or registered participant (often a
                            spouse or
                            family member).</li>
                        <li>Guests may attend <strong>social activities only</strong>: welcome cocktail, tours and
                            coffee
                            breaks.</li>
                        <li>Guests do <strong>not</strong> receive certificates.</li>
                    </ul>
                    <p>
                        For technical sessions and paper presentation you must register as a participant (author or
                        co-author),
                        not as a Guest.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>


    <section id="organizers">
        <!-- Footer section -->
        <div class="container-fluid">
            <!-- footer  -->
            <?php include "../includesHtml/final.html" ?>
        </div>
    </section>



    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../js/readmorereadless.js"></script>
    <script src="../js/backTop.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <!-- START SLICK CAROUSEL-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="../js/slick-carousel-config.js"></script>
    <!-- END  SLICK CAROUSEL-->

</body>

</html>