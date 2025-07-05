/* 
 * Code from https://www.geeksforgeeks.org/
 */
/* function changeReadMore() { 
    const mycontent = 
        document.getElementById('mybox1id'); 
    const mybutton = 
        document.getElementById('mybuttonid'); 
  
    if (mycontent.style.display === 'none'
        || mycontent.style.display === '') { 
        mycontent.style.display = 'block'; 
        mybutton.textContent = 'Read Less'; 
    } else { 
        mycontent.style.display = 'none'; 
        mybutton.textContent = 'Read More'; 
    } 
} */
function changeReadMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

