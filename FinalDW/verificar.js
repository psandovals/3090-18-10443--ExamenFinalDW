const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");

form.addEventListener("submit", (e) => {
  //Variable booleana de verificación
  let entrar = false;
  //Cadena Vacía para las alertas
  let warnings = "";
  //Expresion Regular para verificar Email
  let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  //Reiniciar la cadena
  parrafo.innerHTML = "";
  //Validación de Longitud de Nombre
  if (nombre.value.length < 6) {
    warnings += "El nombre no es válido.<br>";
    entrar = true;
  }

  //Validación de Email usando Expresión Regular
  if (!regexEmail.test(email.value)) {
    warnings += "El email no es válido.<br>";
    entrar = true;
  }
  //Validación de longitud de la Contraseña
  if (pass.value.length < 8) {
    warnings += "La contraseña no es válida.<br>";
    entrar = true;
  }

  if (pass.value !== confirmar.value) {
    warnings += "Las contraseñas no coinciden.<br>";
    entrar = true;
  }

  if (entrar) {
    //CORTA EL FLUJO DEL EVENTO
    e.preventDefault();
    //MUESTRA LAS ADVERTENCIAS AÑADIDAS EN WARNINGS
    
        parrafo.innerHTML = warnings
    
  } else {
    //SI ES EXITOSO SIGUE CON EL FLUJO DEL EVENTO
    e.currentTarget.submit();
  }
});
