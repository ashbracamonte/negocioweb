function mostrar(){
    document.getElementById('login').style.display = 'block';
  }
  function ocultar(){
    document.getElementById('login').style.display = 'none';
  }
  
  function ocultar2(){
    document.getElementById('register').style.display = 'none';
  }
  
  function mostrar2(){
    document.getElementById('register').style.display = 'block';
  }

  function lanzadera(){
      ocultar2();
  }

  window.onload = lanzadera;