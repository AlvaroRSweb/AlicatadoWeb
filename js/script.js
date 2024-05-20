
document.addEventListener('DOMContentLoaded', function () {
  
  const botonInicio = document.getElementById('mostrar-inicio');
  const botonTutoriales = document.getElementById('mostrar-tutoriales');
  const botonProductos = document.getElementById('mostrar-compra');
  const botonContacto = document.getElementById('mostrar-contacto');
  // Asumiendo que agregas la clase 'otro-boton' a los demás enlaces/botones del menú
  const otrosBotones = document.querySelectorAll('.otro-boton');

  function mostrarInicio() {
    document.getElementById('productos').style.display = 'none';
    document.getElementById('contacto').style.display = 'none';
  }

  function mostrarProductos() {
    document.getElementById('productos').style.display = 'block';
  }

  function ocultarProductos() {
    document.getElementById('productos').style.display = 'none';
  }

  function mostrarContacto() {
    document.getElementById('contacto').style.display = 'block';
  }

  function ocultarContacto() {
    document.getElementById('contacto').style.display = 'none';
  }

  if (botonContacto) {
    botonContacto.addEventListener('click', function() {
      ocultarProductos(); // Primero ocultamos los productos
      mostrarContacto();  // Luego mostramos el contacto
    });
  }

  if (botonProductos) {
    botonProductos.addEventListener('click', function() {
      mostrarProductos(); // Primero ocultamos los productos
      ocultarContacto();  // Luego mostramos el contacto
    });
  }

  if (botonInicio) {
    botonInicio.addEventListener('click', function() {
      mostrarInicio()
    });
  } 

  if (botonTutoriales) {
    botonTutoriales.addEventListener('click', function() {
      mostrarInicio()
    });
  } 

});

function scrollToDestination() {
  const destinationElement = document.getElementById('tutoriales');
  destinationElement.scrollIntoView({ behavior: 'smooth' });
}

function cargarProductos() {
  $('#productos').load('../php/crud/leer.php');
}

