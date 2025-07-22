// Cambia de sección mostrando solo la seleccionada
window.showContent = function(idToShow) {
  const allSections = document.querySelectorAll('.section-content');
  allSections.forEach(section => {
    section.classList.add('d-none');
  });

  const target = document.getElementById(idToShow);
  if (target) target.classList.remove('d-none');

  // Manejo de clase activa en los botones del sidebar
  const allButtons = document.querySelectorAll('.sidebar-scrollable .btn-link');
  allButtons.forEach(btn => btn.classList.remove('active'));

  const clickedButton = document.querySelector(`.btn-link[onclick="showContent('${idToShow}')"]`);
  if (clickedButton) clickedButton.classList.add('active');
};

// Toggle del sidebar con botón hamburguesa
document.getElementById('sidebarToggleBtn').addEventListener('click', function () {
  const sidebar = document.querySelector('.sidebar-scrollable');
  sidebar.classList.toggle('show');
});

// Cierra el sidebar si haces clic fuera en móviles
document.addEventListener('click', function (e) {
  const sidebar = document.querySelector('.sidebar-scrollable');
  const toggleBtn = document.getElementById('sidebarToggleBtn');

  if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
    sidebar.classList.remove('show');
  }
});
