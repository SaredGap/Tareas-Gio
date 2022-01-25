<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   </head>

<body>
<div class="menuContainer">
  
</div>

<div class="sidebar">
  <div class="logo-details">
  <i class='bx bx-food-menu' style='color:#ffffff' ></i>
    <span class="logo_name">Restaurant<br /></span>
  </div>
    <ul class="nav-links">
      <li>
        <a href="../Index.html" class="active">
       <i class='bx bx-home'></i>
          <span class="links_name">Inicio</span>
        </a>
      </li>
      <li>
        <a href="RH.php" class="active">
        <i class='bx bx-briefcase' ></i>
          <span class="links_name">Recursos Humanos</span>
        </a>
      </li>
      <li>
        <a href="Cocina.php">
        <i class='bx bxs-dish'></i>
          <span class="links_name">Cocina</span>
        </a>
      </li>
      <li>
        <a href="Comedor.php">
        <i class='bx bx-restaurant'></i>
          <span class="links_name">Comensales</span>
        </a>
      </li>
      <li>
        <a href="Estacionamiento.php">
        <i class='bx bx-car'></i>
          <span class="links_name">Estacionamiento</span>
        </a>
      </li>
    </ul>
</div>
  <section class="home-section container-fluid">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Áreas</span>
      </div>
    </nav>
    <br />
  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
        <div style="padding-left: 25%;">
        <div >
          <div class="box" class="border shadow p-5 rounded container p-3 mb-2 bg-dark text-white d-flex justify-content-center align-items-center" style="width: 300px ;">
          <div class="right-side">
            <div class="box-topic">Sensor de Humo</div>
            <div class="number">Bajo</div>
            <div class="indicator">  
            Nivel De Humo        
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Al llegar a un nivel alto de humo el extractor de humo se activará automaticamente');"></i>
        </div>
    </div>
    <br />
    <div >
      <div class="box" class="border shadow p-5 rounded container p-3 mb-2 bg-dark text-white d-flex justify-content-center align-items-center" style="width: 300px ;">
          <div class="right-side">
            <div class="box-topic">Sensor de Nivel</div>
            <div class="number">Bajo</div>
            <div class="indicator">  
            Nivel de Nivel      
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Muestra el nivel del agua');"></i>
        </div>
    </div>
    <br />
    <div >
      <div class="box" class="border shadow p-5 rounded container p-3 mb-2 bg-dark text-white d-flex justify-content-center align-items-center" style="width: 300px ;">
          <div class="right-side">
            <div class="box-topic">Sensor de Fuego</div>
            <div class="number">Ninguno</div>
            <div class="indicator">  
            Nivel de Fuego        
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Al llegar a un nivel alto de Fuego se activan los aspersores para apagar el fuego');"></i>
        </div>
    </div>
    <br />
    <div >
          <div class="box" class="border shadow p-5 rounded container p-3 mb-2 bg-dark text-white d-flex justify-content-center align-items-center" style="width: 300px ;">
          <div class="right-side">
            <div class="box-topic">Sensor de Gas</div>
            <div class="number">Ninguno</div>
            <div class="indicator">  
            Nivel de Gas 
            Ventiladores: Apagados     
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Al aumentar el nivel de gas los ventiladores se prenden para exparsir el gas');"></i>
        </div>
    </div>
    </div>
    </div>

  </section>
  <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
  <script>
   let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
</script>
<!--<script type="text/javascript">
function actualizar(){
  location.reload(true);
}
  setInterval("actualizar()",5000);
</script>-->
<script>
    $(document).ready(function () {
      $('.menuContainer').load('menu.html');
    });
  </script>
</body>
</html>

