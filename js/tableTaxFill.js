
    /* 
     To set the due dates and values and striketrough after due date in all the tables of Tax
     */
    
function tableTaxFill() {
/* Author tables = Participants tables */
var modificado = "1 de noviembre de 2023";
var DatesTVector =[["(Through February 13, 2025)","(From February 14 to 20, 2025)","(From February 21 to 27, 2025)"],
                   ["(Até 13 de fevereiro, 2025)","(De 14 até 20 de fevereiro, 2025)","(De 21 até 27 de fevereiro, 2025)"],
                   ["(Hasta el 23 de febrero, 2025)","(Del 14 al 20 de febrero, 2025)", "(Del 21 al 27 de febrero, 2025)"]];
var DatesVector =[["2025-02-14"],["2025-02-21"],["2025-02-28"]];
                    
                
var CategoriesO =   [["IEEE EdSoc Member","IEEE Member ","Non-Member of IEEE","IEEE Life Member","IEEE Student Member","Student Non-Member of IEEE", "Additional Paper", "Guest"],
                    ["IEEE EdSoc Member","IEEE Member ","Non-Member of IEEE","IEEE Life Member","IEEE Student Member","Student Non-Member of IEEE", "Additional Paper", "Guest"],
                    ["IEEE EdSoc Member","IEEE Member ","Non-Member of IEEE","IEEE Life Member","IEEE Student Member","Student Non-Member of IEEE", "Additional Paper", "Guest"]];
                
var Euros =  [['324 Euros',	'347 Euros',	'372 Euros'],
['380 Euros',	'408 Euros',	'439 Euros'],
['450 Euros',	'485 Euros',	'524 Euros'],
['240 Euros',	'254 Euros',	'270 Euros'],
['240 Euros',	'254 Euros',	'270 Euros'],
['275 Euros',	'293 Euros',	'312 Euros'],
['100 Euros',	'100 Euros',	'100 Euros'],
['150 Euros',	'150 Euros',	'150 Euros']];        
          
var Dollars =  [['US$ 376', 	'US$ 402', 	'US$ 430'],
['US$ 439', 	'US$ 471', 	'US$ 506'],
['US$ 518', 	'US$ 558', 	'US$ 602'],
['US$ 280', 	'US$ 296', 	'US$ 314'],
['US$ 280', 	'US$ 296', 	'US$ 314'],
['US$ 319', 	'US$ 339', 	'US$ 361'],
['US$ 120', 	'US$ 120', 	'US$ 120'],
['US$ 173', 	'US$ 173', 	'US$ 173']];
           
var lang=document.documentElement.lang;
var ind = 0;
if (lang == "en") {
    ind = 0;}
else if (lang == "pt") {
    ind = 1; }
else {ind = 2; }

var date = new Date();
var yyyy = date.getFullYear().toString();
var mm = (date.getMonth()+1).toString();
var dd  = date.getDate().toString();

var mmChars = mm.split('');
var ddChars = dd.split('');

var today= yyyy + '-' + (mmChars[1]?mm:"0"+mmChars[0]) + '-' + (ddChars[1]?dd:"0"+ddChars[0]);
 /* Author tables */

/* To set the title dates Euros table */

    var element = document.getElementById("oearlyEuros1");
    element.innerHTML=DatesTVector[ind][0];
    if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

    element = document.getElementById("onormalEuros1");
    element.innerHTML=DatesTVector[ind][1];
    if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

    element = document.getElementById("olateEuros1");
    element.innerHTML=DatesTVector[ind][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}

    /* To set the values in Euros for each category */
    /* EdSoc member */
    var i=0;
    element = document.getElementById("oedmemberE1");
    element.innerHTML=CategoriesO[ind][0];
    
    element = document.getElementById("oearlyedmemEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormaledmemEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateedmemEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
     /* member */
    i=1;
    element = document.getElementById("omemberE1");
    element.innerHTML=CategoriesO[ind][1];
    
    element = document.getElementById("oearlymemEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalmemEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");}  

    element = document.getElementById("olatememEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    /* non member */
    i=2;
    element = document.getElementById("ononmemberE1");
        element.innerHTML=CategoriesO[ind][2];

    element = document.getElementById("oearlynonEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

    element = document.getElementById("onormalnonEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 
    
    element = document.getElementById("olatenonEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
     /* life member */
    i=3;
    element = document.getElementById("olifememberE1");
    element.innerHTML=CategoriesO[ind][3];
    
    element = document.getElementById("oearlylifememEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormallifememEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");}  

    element = document.getElementById("olatelifememEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    /* IEEE student */
    i=4;
    element = document.getElementById("ostumemE1");
    element.innerHTML=CategoriesO[ind][4];

    element = document.getElementById("oearlystumemEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalstumemEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");}
    
    element = document.getElementById("olatestumemEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
      /* Non-member student */
    i=5;
    element = document.getElementById("ostunonE1");
    element.innerHTML=CategoriesO[ind][5];

    element = document.getElementById("oearlystunonEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalstunonEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olatestunonEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    
    /* additional paper*/
   
    i=6;
    element = document.getElementById("oadditE1");
    element.innerHTML=CategoriesO[ind][6];

    element = document.getElementById("oearlyadditEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormaladditEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateadditEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    
   /* guest */
   
    i=7;
    element = document.getElementById("oguestE1");
    element.innerHTML=CategoriesO[ind][7];

    element = document.getElementById("oearlyguestEuros1");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalguestEuros1");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateguestEuros1");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}   
    

// To set the title dates Dollars 

var element = document.getElementById("oearlyDollars1");
element.innerHTML=DatesTVector[ind][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

element = document.getElementById("onormalDollars1");
element.innerHTML=DatesTVector[ind][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olateDollars1");
element.innerHTML=DatesTVector[ind][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 

// To set the values in Dollars for each category 
// EdSoc member 
var i=0;
element = document.getElementById("oedmemberD1");
element.innerHTML=CategoriesO[ind][0];

element = document.getElementById("oearlyedmemDollars1");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

  element = document.getElementById("onormaledmemDollars1");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");}

element = document.getElementById("olateedmemDollars1");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// member 
 i=1;
element = document.getElementById("omemberD1");
element.innerHTML=CategoriesO[ind][1];

element = document.getElementById("oearlymemDollars1");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

 element = document.getElementById("onormalmemDollars1");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatememDollars1");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// non member 
 i=2;
element = document.getElementById("ononmemberD1");
element.innerHTML=CategoriesO[ind][2];

element = document.getElementById("oearlynonDollars1");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

element = document.getElementById("onormalnonDollars1");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatenonDollars1");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// life member 
i=3;
element = document.getElementById("olifememberD1");
element.innerHTML=CategoriesO[ind][3];

element = document.getElementById("oearlylifememDollars1");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

 element = document.getElementById("onormallifememDollars1");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatelifememDollars1");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
    
 // IEEE student */
 i=4;
element = document.getElementById("ostumemD1");
element.innerHTML=CategoriesO[ind][4];

element = document.getElementById("oearlystumemDollars1");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}
 element = document.getElementById("onormalstumemDollars1");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatestumemDollars1");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// student
 i=5; 
element = document.getElementById("ostunonD1");
element.innerHTML=CategoriesO[ind][5];

element = document.getElementById("oearlystunonDollars1");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

element = document.getElementById("onormalstunonDollars1");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");}

element = document.getElementById("olatestunonDollars1");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");}

   /* additional paper*/
   
    i=6;
    element = document.getElementById("oadditD1");
    element.innerHTML=CategoriesO[ind][6];

    element = document.getElementById("oearlyadditDollars1");
    element.innerHTML=Dollars[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormaladditDollars1");
    element.innerHTML=Dollars[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateadditDollars1");
    element.innerHTML=Dollars[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    
   /* guest */
   
    i=7;
    element = document.getElementById("oguestD1");
    element.innerHTML=CategoriesO[ind][7];

    element = document.getElementById("oearlyguestDollars1");
    element.innerHTML=Dollars[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalguestDollars1");
    element.innerHTML=Dollars[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateguestDollars1");
    element.innerHTML=Dollars[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}   
    
/* Participants table */
/* To set the title dates Euros table */

    var element = document.getElementById("oearlyEuros2");
    element.innerHTML=DatesTVector[ind][0];
    if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

    element = document.getElementById("onormalEuros2");
    element.innerHTML=DatesTVector[ind][1];
    if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

    element = document.getElementById("olateEuros2");
    element.innerHTML=DatesTVector[ind][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}

    /* To set the values in Euros for each category */
    /* EdSoc member */
    var i=0;
    element = document.getElementById("oedmemberE2");
    element.innerHTML=CategoriesO[ind][0];
    
    element = document.getElementById("oearlyedmemEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormaledmemEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateedmemEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
     /* member */
     i=1;
    element = document.getElementById("omemberE2");
    element.innerHTML=CategoriesO[ind][1];
    
    element = document.getElementById("oearlymemEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalmemEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");}  

    element = document.getElementById("olatememEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    /* non member */
    i=2;
    element = document.getElementById("ononmemberE2");
        element.innerHTML=CategoriesO[ind][2];

    element = document.getElementById("oearlynonEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

    element = document.getElementById("onormalnonEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 
    
    element = document.getElementById("olatenonEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
     /* life member */
  i=3;
    element = document.getElementById("olifememberE2");
    element.innerHTML=CategoriesO[ind][3];
    
    element = document.getElementById("oearlylifememEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormallifememEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");}  

    element = document.getElementById("olatelifememEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    /* IEEE student */
    i=4;
    element = document.getElementById("ostumemE2");
    element.innerHTML=CategoriesO[ind][4];

    element = document.getElementById("oearlystumemEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalstumemEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");}
    
    element = document.getElementById("olatestumemEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
      /* Non-member student */
    i=5;
    element = document.getElementById("ostunonE2");
    element.innerHTML=CategoriesO[ind][5];

    element = document.getElementById("oearlystunonEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalstunonEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olatestunonEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}
    
    /* additional paper*/
   
   /* i=6;
   element = document.getElementById("oadditE2");
    element.innerHTML=CategoriesO[ind][6];

    element = document.getElementById("oearlyadditEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormaladditEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateadditEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");} */
    
   /* guest */
   
    i=7;
    element = document.getElementById("oguestE2");
    element.innerHTML=CategoriesO[ind][7];

    element = document.getElementById("oearlyguestEuros2");
    element.innerHTML=Euros[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalguestEuros2");
    element.innerHTML=Euros[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateguestEuros2");
    element.innerHTML=Euros[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}   
    

// To set the title dates Dollars 

var element = document.getElementById("oearlyDollars2");
element.innerHTML=DatesTVector[ind][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

element = document.getElementById("onormalDollars2");
element.innerHTML=DatesTVector[ind][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olateDollars2");
element.innerHTML=DatesTVector[ind][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 

// To set the values in Dollars for each category 
// EdSoc member 
var i=0;
element = document.getElementById("oedmemberD2");
element.innerHTML=CategoriesO[ind][0];

element = document.getElementById("oearlyedmemDollars2");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

  element = document.getElementById("onormaledmemDollars2");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");}

element = document.getElementById("olateedmemDollars2");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// member 
 i=1;
element = document.getElementById("omemberD2");
element.innerHTML=CategoriesO[ind][1];

element = document.getElementById("oearlymemDollars2");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

 element = document.getElementById("onormalmemDollars2");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatememDollars2");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// non member 
 i=2;
element = document.getElementById("ononmemberD2");
element.innerHTML=CategoriesO[ind][2];

element = document.getElementById("oearlynonDollars2");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

element = document.getElementById("onormalnonDollars2");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatenonDollars2");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// life member 
  i=3;
element = document.getElementById("olifememberD2");
element.innerHTML=CategoriesO[ind][3];

element = document.getElementById("oearlylifememDollars2");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

 element = document.getElementById("onormallifememDollars2");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatelifememDollars2");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
    
 // IEEE student */
 i=4;
element = document.getElementById("ostumemD2");
element.innerHTML=CategoriesO[ind][4];

element = document.getElementById("oearlystumemDollars2");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}
 element = document.getElementById("onormalstumemDollars2");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");} 

element = document.getElementById("olatestumemDollars2");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");} 
// student
 i=5; 
element = document.getElementById("ostunonD2");
element.innerHTML=CategoriesO[ind][5];

element = document.getElementById("oearlystunonDollars2");
element.innerHTML=Dollars[i][0];
if (today >= DatesVector[0] ) {
    element.classList.add("fechado");}

element = document.getElementById("onormalstunonDollars2");
element.innerHTML=Dollars[i][1];
if (today >= DatesVector[1] ) {
    element.classList.add("fechado");}

element = document.getElementById("olatestunonDollars2");
element.innerHTML=Dollars[i][2];
if (today >= DatesVector[2] ) {
    element.classList.add("fechado");}

   /* additional paper*/
   
   /* i=6;
    element = document.getElementById("oadditD2");
    element.innerHTML=CategoriesO[ind][6];

    element = document.getElementById("oearlyadditDollars2");
    element.innerHTML=Dollars[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormaladditDollars2");
    element.innerHTML=Dollars[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateadditDollars2");
    element.innerHTML=Dollars[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");} */
    
   /* guest */
   
    i=7;
    element = document.getElementById("oguestD2");
    element.innerHTML=CategoriesO[ind][7];

    element = document.getElementById("oearlyguestDollars2");
    element.innerHTML=Dollars[i][0];
    if (today >= DatesVector[0] ) {
        element.classList.add("fechado");}

    element = document.getElementById("onormalguestDollars2");
    element.innerHTML=Dollars[i][1];
    if (today >= DatesVector[1] ) {
        element.classList.add("fechado");} 

    element = document.getElementById("olateguestDollars2");
    element.innerHTML=Dollars[i][2];
    if (today >= DatesVector[2] ) {
        element.classList.add("fechado");}   
    }    