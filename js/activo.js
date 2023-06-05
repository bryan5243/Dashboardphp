document.addEventListener('DOMContentLoaded', function() {
    var enlaces = document.querySelectorAll('.sidebar a');
  
    // Verificar si hay un enlace activo almacenado y aplicar el estado "active" correspondiente
    var activeLink = localStorage.getItem('activeLink');
    if (activeLink) {
      enlaces.forEach(function(enlace) {
        if (enlace.getAttribute('href') === activeLink) {
          enlace.classList.add('active');
        }
      });
    }
  
    enlaces.forEach(function(enlace) {
      enlace.addEventListener('click', function(event) {
        // Eliminar la clase "active" de todos los enlaces
        enlaces.forEach(function(enlace) {
          enlace.classList.remove('active');
        });
  
        // Agregar la clase "active" solo al enlace que se hizo clic
        this.classList.add('active');
  
        // Almacenar el enlace activo en el almacenamiento local
        var href = this.getAttribute('href');
        if (href) {
          localStorage.setItem('activeLink', href);
        }
      });
    });
  });
  