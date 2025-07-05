/*<script> */

/* 
 To set the due dates and striketrough after due date in all the tables of Tax
 Uncommnet the line after due date ("fechado")*/
function obtenerFechas() {
    var modificado = "1 de mayo de 2025";
    var ext = 0; /* 0 normal, 1= extended deadlines */

/* fecha en inglés, textoI, portugués, textoP, español, textoE, fecha de cierre yyyy/mm/dd, uno o dos días despues para que los tache. (los textos no están usados*/
/* submission deadline papers de autores que van al peer-review */
var papersVector = [["Aug 4, 2026", "Paper Submission due date"], ["4 Ago 2025", ""], ["4 Ago 2025", ""], ["2025-08-06"]];
/* submission deadline, propuestas de workshops, plenarias y panels que nunca tienen vencimiento real y son revisados por el TPC (Technical Program Committee */
var proposalsVector = [["Nov 3, 2025", "Proposals submission due date"], ["3 Nov 2025", ""], ["3 Nov 2025", ""], ["2025-11-03"]];
/* notification peer review solamente papers de autores */
var pnotifVector = [["Sep 29, 2025", "Notification of Peer Review (Round #1)"], ["29 Set 2025", ""], ["29 Set 2025", ""], ["2025-10-02"]];
/* notification TPC review of proposals (workshop, plenary, panel). Esto es teorico*/
var snotifVector = [["Nov 10, 2025", "Notification of Proposals"], ["10 Nov 2025", ""], ["10 Nov 2025", ""], ["2025-11-12"]];
/* conditional accepted final papers multiple TPC review due date */
var pfCondVector = [["Oct 17, 2025", "Final Paper Conditional Acceptance Review due date (Round #2)"], ["17 Out 2025", ""], ["17 Oct 2025", ""], ["2025-10-17"]];
/* final papers todos incluidos los prerevisados condicionales, para la última revisión por TPC (Round #2) */ 
var pfsubmVector = [["Oct 24, 2025", "Author Final Paper (all) Submission due date for TPC Review (Round #2"], ["24 Out 2025", ""], ["24 Oct 2025", ""], ["2025-10-25"]];
/* final proposal for publication submission deadline */ 
var sfsubmVector = [["Nov 17, 2025", "Special Proposals final submission due date"], ["17 Nov 2025", ""], ["17 Nov 2025", ""], ["2025-10-19"]];
/* notification final papers última revisión por TPC (Round #2) */ 
var pfnotifVector = [["Oct 24, 2025", "Author Final Paper (all) Submission due date for TPC Review (Round #2"], ["24 Out 2025", ""], ["24 Oct 2025", ""], ["2025-10-25"]];
var sfnotifVector = [["Dec 1, 2025", "Special Proposals final submission due date"], ["1 Dez 2025", ""], ["1 Dic 2025", ""], ["2025-12-02"]];
/* due date de los periodos de registración. EARLY */
var reg1Vector = [["Nov 10, 2025", "Registration and Payment Options: Due Dates Early"], ["10 Nov 2025", ""], ["10 Nov 2025", ""], ["2026-11-15"]];
/* registration NORMAL */
var reg2Vector = [["Dec 1, 2025", "Normal"], ["1 Dez 2025", ""], ["1 Dic 2025", ""], ["2025-12-4"]];
/* registration late */
var reg3Vector = [["Dec 22, 2025", "Late"], ["22 Dez 2025", ""], ["22 Dic 2025", ""], ["2025-12-30"]];
/* chair registration */
var chairVector = [["Feb 2, 2026", "Late"], ["2 Fev 2026", ""], ["2 Feb 2025", ""], ["2026-02-10"]];
/* tour inscription due date */
var tourregVector = [["Feb 24, 2026", "Tour registration due date"], ["24 Fev 2026", ""], ["24 Feb 2026", ""], ["2026-02-26"]];
/* tour date */
var tourVector = [["Mar 7, 2026", "Tour date"], ["7 Mar 2026", ""], ["7 Mar 2026", ""], ["2026-03-08"]];
/* workshops date */
var wshopsVector = [["Mar 8, 2026", "Online Workshops date"], ["8 Mar 2026", ""], ["8 Mar 2026", ""], ["2026-03-09"]];
/* congreso */
var congressVector = [["Mar 9-11, 2026", "Hybrid Conference"], ["9-11 Mar 2026", ""], ["9-11 Mar 2026", ""], ["2026-03-12"]];
/* fecha de envío más tardía de certificados y del paquete de publicación a IEEE Xplore */
var postCongressVector = [["Apr 11, 2026", "Post Congress"], ["11 Abr 2026", ""], ["11 Abr 2026", ""], ["2026-04-28"]]; 

    /* var expiredVector = [" (Expired)", " (Expirado)", " (Vencido)"]; */
    var lang = document.documentElement.lang;
    var ind = 0;
    if (lang == "en") {
        ind = 0;
    } else if (lang == "pt") {
        ind = 1;
    } else {
        ind = 2;
    }

    /* today date */

    var date = new Date();
    var yyyy = date.getFullYear().toString();
    var mm = (date.getMonth() + 1).toString();
    var dd = date.getDate().toString();

    var mmChars = mm.split('');
    var ddChars = dd.split('');

    var today = yyyy + '-' + (mmChars[1] ? mm : "0" + mmChars[0]) + '-' + (ddChars[1] ? dd : "0" + ddChars[0]);
    var element = "";
    var elemText = "";

    /* To set the authors paper submission due date */

    element = document.getElementById("papers");
    element.innerHTML = papersVector[ind][0];
    if (today >= papersVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = papersVector[ind][0];
    }

    /* To set the Proposals (special papers: workshop, plenary, panel) submission due date */

    element = document.getElementById("proposals");
    element.innerHTML = proposalsVector[ind][0];
    if (today >= proposalsVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = proposalsVector[ind][0];
    }

    /* To set the Notification Peer-review due date (Round #1)  */

    element = document.getElementById("pnotif");
    element.innerHTML = pnotifVector[ind][0];
    if (today >= pnotifVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = pnotifVector[ind][0];
    }

    /* To set the Notification Proposals due date */

    element = document.getElementById("snotif");
    element.innerHTML = snotifVector[ind][0];
    if (today >= snotifVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = snotifVector[ind][0];
    }

    /* To set the conditionally accepted final papers submission due date (Round #2 */

    element = document.getElementById("pfCond");
    element.innerHTML = pfCondVector[ind][0];
    if (today >= pfCondVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = pfCondVector[ind][0];
    }

    /* To set the final paper (all inclusive prereviewed conditional) submission due date*/

    element = document.getElementById("pfsubm");
    element.innerHTML = pfsubmVector[ind][0];
    if (today >= pfsubmVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = pfsubmVector[ind][0];
    }

    /* To set the final proposals submission due date */

    element = document.getElementById("sfsubm");
    element.innerHTML = sfsubmVector[ind][0];
    if (today >= sfsubmVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = sfsubmVector[ind][0];
    }
     /* To set the final paper (all inclusive prereviewed conditional) notification due date*/

    element = document.getElementById("pfnotif");
    element.innerHTML = pfnotifVector[ind][0];
    if (today >= pfnotifVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = pfnotifVector[ind][0];
    }

    /* To set the final proposals notification due date */

    element = document.getElementById("sfnotif");
    element.innerHTML = sfnotifVector[ind][0];
    if (today >= sfnotifVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = sfnotifVector[ind][0];
    }

    /* To set the early registration date */

    element = document.getElementById("reg1");
    element.innerHTML = reg1Vector[ind][0];
    if (today >= reg1Vector[3]) {
        element.classList.add("fechado");
        element.innerHTML = reg1Vector[ind][0];
    }

    /* To set the normal registration due date */

    element = document.getElementById("reg2");
    element.innerHTML = reg2Vector[ind][0];
    if (today >= reg2Vector[3]) {
        element.classList.add("fechado");
        element.innerHTML = reg2Vector[ind][0];
    }

    /* To set the late registration due date */

    element = document.getElementById("reg3");
    element.innerHTML = reg3Vector[ind][0];
    if (today >= reg3Vector[3]) {
        element.classList.add("fechado");
        element.innerHTML = reg3Vector[ind][0];
    }
      /* To set the chair registration due date */

    element = document.getElementById("chair");
    element.innerHTML = chairVector[ind][0];
    if (today >= chairVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = chairVector[ind][0];
    }  
     /* To set the tour registration due date */

    element = document.getElementById("tourreg");
    element.innerHTML = tourregVector[ind][0];
    if (today >= tourregVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = tourregVector[ind][0];
    }
      /* To set the tour date */

    element = document.getElementById("tour");
    element.innerHTML = tourVector[ind][0];
    if (today >= tourVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = tourVector[ind][0];
    }
      /* To set the workshops date */

    element = document.getElementById("wshops");
    element.innerHTML = wshopsVector[ind][0];
    if (today >= wshopsVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = wshopsVector[ind][0];
    }

    /* To set the congress date */

    element = document.getElementById("congress");
    element.innerHTML = congressVector[ind][0];
    if (today >= congressVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = congressVector[ind][0];
    }

    /* To set the post congress date */

    element = document.getElementById("postCongress");
    element.innerHTML = postCongressVector[ind][0];
    if (today >= postCongressVector[3]) {
        element.classList.add("fechado");
        element.innerHTML = postCongressVector[ind][0];
    }

    /* To show the extended deadline image */
    if (ext === 1) {
        elemText = document.getElementById("extended");
        elemText.innerHTML = "<img src='barras/ExtendedLang.png'  alt='Extended Deadline' style='height: 40px;'>";
    } else {
        if (ext === 2) {
            elemText = document.getElementById("extended");
            elemText.innerHTML = "<img src='barras/ExtendedLast.png'  alt='Extended Last Deadline' style='height: 80px;'>";
        }
    }
}
/* 
     To set the due dates and striketrough after due date for REVIEWERS
     Uncommnet the line after due date ("fechado")*/
function obtenerFechasRev() { 
var modificado = "1 de mayo de 2025";
var ext=0; /* 0 normal, 1= extended deadlines, 2= Late Breakout Papers */
var invitVector =[["Jun 1, 2025", "Invitation due date" ], ["1 Jun 2025",""], ["1 Jun 2025",""], ["2025-06-10"]];
var guideVector = [["Aug 4, 2025", "Reviewer acceptance deadline " ], ["4 Ago 2025",""], ["4 Ago 2025",""], ["2025-08-14"]];
var signupVector = [["Aug 4, 2025", "Reviewer start review deadline " ], ["4 Ago 2025",""], ["4 Ago 2025",""], ["2025-08-14"]];
var signinVector = [["Sep 8, 2025", "Reviewer end review deadline"], ["8 Set 2025", ""], ["8 Set 2025", ""], ["2025-09-12"]];                   

/*var expiredVector = [" (Expired)", " (Expirado)", " (Vencido)"];*/
var lang=document.documentElement.lang;
    var ind = 0;
    if (lang == "en") {
        ind = 0;}
    else if (lang == "pt") {
            ind = 1; }
        else { ind = 2; }
        
    /* today date */
    
    var date = new Date();
    var yyyy = date.getFullYear().toString();
    var mm = (date.getMonth()+1).toString();
    var dd  = date.getDate().toString();
    
    var mmChars = mm.split('');
    var ddChars = dd.split('');
    
    var today= yyyy + '-' + (mmChars[1]?mm:"0"+mmChars[0]) + '-' + (ddChars[1]?dd:"0"+ddChars[0]);
    var element = "";
    var elemText = "";
    
    /* To set the Reviewer Invitation due date */
 
   element = document.getElementById("invitation");
   element.innerHTML=invitVector[ind][0];
   if (today >= invitVector[3] ) {
     element.classList.add("fechado");
     element.innerHTML=invitVector[ind][0];
 }
 
    /* To set the Reviewer time to decide due date */
 
   element = document.getElementById("guide");
   element.innerHTML=guideVector[ind][0];
   if (today >= guideVector[3] ) {
     element.classList.add("fechado");
     element.innerHTML=guideVector[ind][0];
 }
 
    /* To set the Reviewer sign-up and start review due date */

    element = document.getElementById("signup");
    element.innerHTML=signupVector[ind][0];
    if (today >= signupVector[3] ) {
      element.classList.add("fechado");
      element.innerHTML=signupVector[ind][0];
  }
   
  /* To set the Review  due date */

    element = document.getElementById("signin");
    element.innerHTML=signinVector[ind][0];
    if (today >= signinVector[3] ) {
      element.classList.add("fechado");
      element.innerHTML=signinVector[ind][0];
  }
 
/* To show the extended deadline image */
    if (ext === 1) {
        elemText = document.getElementById ("extended");
        elemText.innerHTML="<img src='barras/ExtendedLang.png'  alt='Extended Deadline' style='height: 40px;'>"; 
    }
    else {
        if (ext === 2){
           elemText = document.getElementById ("extended");
           elemText.innerHTML="<img src='barras/ExtendedLast.png'  alt='Extended Last Deadline' style='height: 80px;'>";  
        }
    }
}



