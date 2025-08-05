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

document.addEventListener('DOMContentLoaded', () => {
  const boxes = document.querySelectorAll('.event-date-box');
  const infoBox = document.getElementById('event-info-box');
  const title = document.getElementById('event-title');
  const desc = document.getElementById('event-desc');

  let isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
  let activeHover = false;
  let hoverTimeout;

  function showInfo(box) {
    title.textContent = box.getAttribute('data-title');
    desc.textContent = box.getAttribute('data-desc');
    infoBox.style.display = 'block';
  }

  function hideInfo() {
    infoBox.style.display = 'none';
  }

  if (isTouchDevice) {
    //  Modo móvil – toggle por clic
    boxes.forEach(box => {
      box.addEventListener('click', () => {
        const isAlreadyVisible = infoBox.style.display === 'block' &&
          title.textContent === box.getAttribute('data-title');
        if (isAlreadyVisible) {
          hideInfo();
        } else {
          showInfo(box);
        }
      });
    });
  } else {
    // Modo desktop – hover
    boxes.forEach(box => {
      box.addEventListener('mouseenter', () => {
        activeHover = true;
        clearTimeout(hoverTimeout);
        showInfo(box);
      });

      box.addEventListener('mouseleave', () => {
        activeHover = false;
        hoverTimeout = setTimeout(() => {
          if (!activeHover) hideInfo();
        }, 150);
      });
    });

    infoBox.addEventListener('mouseenter', () => {
      activeHover = true;
      clearTimeout(hoverTimeout);
    });

    infoBox.addEventListener('mouseleave', () => {
      activeHover = false;
      hoverTimeout = setTimeout(() => {
        if (!activeHover) hideInfo();
      }, 150);
    });
  }
});
