console.log("hola js")

//El DOM  define de qué manera los programas pueden acceder, al fin de modificar, tanto su estructura, estilo y contenido.
document.addEventListener("DOMContentLoaded", function () {
    const resumenButton = document.getElementById("Resumen");
    const cantidadInput = document.querySelector("#cantidad input");
    const categoriaSelect = document.querySelector("#categoria");
    const totalAPagarButton = document.getElementById("totalAPagar");
    const borrarButton = document.getElementById("#Borrar");
  
    resumenButton.addEventListener("click", function () {
      const cantidad = parseInt(cantidadInput.value);
      const categoriaValue = parseInt(categoriaSelect.value);
      let precioTicket = 200;
      let descuento = 0;
  
      if (categoriaValue === 1) {
        descuento = 0.80; // 80% de descuento para Estudiantes (200-80%=40)
      } else if (categoriaValue === 2) {
        descuento = 0.50; // 50% de descuento para Trainee (200-50%=100)
      } else if (categoriaValue === 3) {
        descuento = 0.15; // 15% de descuento para Junior (200-15%=170)
      }
  
      const totalAPagar = cantidad * precioTicket * (1 - descuento);
  
      // Mostrar el total en el botón "Total a pagar" (no se porque me da resultados con num Irracionales)
      totalAPagarButton.textContent = `Total a pagar $: ${totalAPagar}`;
    });
  });
  
 // Defino una función para borrar los campos
function borrarCampos() {
    const cantidadInput = document.querySelector("#cantidad input");
    const categoriaSelect = document.querySelector("#categoria");
    const totalAPagarButton = document.getElementById("totalAPagar");
  
    // Borrar los valores de los campos de cantidad y de selección, y restablecer el texto del botón "Total a pagar"
    cantidadInput.value = "";
    categoriaSelect.selectedIndex = 0; 
  
    totalAPagarButton.textContent = "Total a pagar $:";
  }
    // Obtengo el botón "Borrar" por su ID
  document.addEventListener("DOMContentLoaded", function () {
    const borrarButton = document.getElementById("Borrar");
  
    // por ultimo asocio la función al evento de click del botón
    borrarButton.addEventListener("click", borrarCampos);
});
  