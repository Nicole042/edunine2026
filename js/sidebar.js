// Cambia de sección mostrando solo la seleccionada
window.showContent = function(idToShow) {
  const allSections = document.querySelectorAll('.section-content');
  allSections.forEach(section => {
    section.classList.add('d-none');
  });

  const target = document.getElementById(idToShow);
  if (target) target.classList.remove('d-none');

  // Remover clase activa de todos los botones
  const allButtons = document.querySelectorAll('.sidebar-scrollable button');
  allButtons.forEach(btn => btn.classList.remove('active'));

  // Agregar clase activa al botón clicado
  const clickedButton = document.querySelector(`button[onclick*="${idToShow}"]`);
  if (clickedButton) clickedButton.classList.add('active');

};

// Toggle del sidebar con botón hamburguesa

const toggleBtn = document.getElementById('sidebarToggleBtn');
if (toggleBtn) {
  toggleBtn.addEventListener('click', function () {
    const sidebar = document.querySelector('.sidebar-scrollable');
    sidebar.classList.toggle('show');
  });
}


// Cierra el sidebar si haces clic fuera en móviles
document.addEventListener('click', function (e) {
  const sidebar = document.querySelector('.sidebar-scrollable');
  const toggleBtn = document.getElementById('sidebarToggleBtn');

  if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
    sidebar.classList.remove('show');
  }
});

document.querySelectorAll('.toggle-parent').forEach(parent => {
  parent.addEventListener('click', function (e) {
    // Evitar que el clic en botones internos active el toggle
    if (e.target.tagName.toLowerCase() === 'button') return;

    this.classList.toggle('open');
  });
});


