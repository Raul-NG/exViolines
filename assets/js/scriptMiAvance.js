function move() {
    var elem = document.getElementById("myBar");   
    var width =0;
    var id = setInterval(frame, 10);
    function frame() {
        // Aqui colocar el porcentaje del progreso
      if (width >= 50) {
        clearInterval(id);
      } else {
        width++; 
        elem.style.width = width + '%'; 
        elem.innerHTML = width * 1  + '%';
      }
    }
  }