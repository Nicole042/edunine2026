function showContent(idToShow) {
  const allSections = document.querySelectorAll('.section-content');
  allSections.forEach(section => {
    section.classList.add('d-none');
  });

  const target = document.getElementById(idToShow);
  if (target) target.classList.remove('d-none');
}



