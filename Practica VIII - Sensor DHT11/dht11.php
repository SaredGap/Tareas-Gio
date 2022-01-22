<?php
require_once('config.php');

$sql = "SELECT  * FROM dht11";
$result = $conn->query($sql);
$arr_users = [];
if ($result->num_rows > 0) {
$arr_users = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="menuContainer"></div>

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Integradora <br />5-TID-1</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Sección I</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Sección II</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Sección III</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Sección IV</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard Project</span>
      </div>
    </nav>
  

  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
      	<?php if(!empty($arr_users)) { ?>
		<?php foreach($arr_users as $user) { ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Análisis de Sensor - Zona I</div>
            <div class="number"><?php echo $user['Temperatura']; ?>°,<?php echo $user['Humedad']; ?>%</div>
            <div class="indicator">  
            Temperatura - Humedad         
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona I');"></i>
        </div>
        <?php } ?>
		<?php } ?>
		<?php if(!empty($arr_users)) { ?>
		<?php foreach($arr_users as $user) { ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Análisis de Sensor - Zona II</div>
            <div class="number"><?php echo $user['Temperatura']; ?>°,<?php echo $user['Humedad']; ?>%</div>
            <div class="indicator">  
            Temperatura - Humedad         
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona II');"></i>
        </div>
         <?php } ?>
		<?php } ?>
		<?php if(!empty($arr_users)) { ?>
		<?php foreach($arr_users as $user) { ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Análisis de Sensor - Zona III</div>
            <div class="number"><?php echo $user['Temperatura']; ?>°,<?php echo $user['Humedad']; ?>%</div>
            <div class="indicator">  
            Temperatura - Humedad         
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona III');"></i>
        </div>
        <?php } ?>
		<?php } ?>
		<?php if(!empty($arr_users)) { ?>
		<?php foreach($arr_users as $user) { ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Análisis de Sensor - Zona IV</div>
            <div class="number"><?php echo $user['Temperatura']; ?>°,<?php echo $user['Humedad']; ?>%</div>
            <div class="indicator">  
            Temperatura - Humedad         
            </div>
          </div>
          <i class='bx bx-info-square cart' onclick="alert('Estoy en Zona IV');"></i>
        </div>
		<?php } ?>
		<?php } ?>
    </div>
  </section>

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
<script type="text/javascript">
function actualizar(){
  location.reload(true);
}
  setInterval("actualizar()",5000);
</script>
<script>
    $(document).ready(function () {
      $('.menuContainer').load('menu.html');
    });
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</body>
</html>