function Ejecutar() {
    // Validar los datos del formulario
    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var asunto = document.getElementById("asunto").value;
    var mensaje = document.getElementById("mensaje").value;
  
    if (nombre === "" || correo === "" || asunto === "" || mensaje === "") {
      alert("Por favor, complete todos los campos del formulario.");
      return false;
    }
  
    // Enviar los datos del formulario
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "contactenos.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("nombre=" + nombre + "&correo=" + correo + "&asunto=" + asunto + "&mensaje=" + mensaje);
  
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert("Su mensaje ha sido enviado con éxito.");
      } else {
        alert("Ocurrió un error al enviar su mensaje. Por favor, intente nuevamente más tarde.");
      }
    };
  
    return true;
  }
  