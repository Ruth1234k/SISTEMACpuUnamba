<div class="horizontal-menu">
  <ul>
    <li>
      <a href="admin.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>Panel de control</span>
      </a>
    </li>
    <li class="submenu">
      <a href="#" class="submenu-toggle">
        <i class="glyphicon glyphicon-user"></i>
        <span>Accesos</span>
      </a>
      <ul class="nav submenu">
        <li><a href="group.php">Administrar grupos</a></li>
        <li><a href="users.php">Administrar usuarios</a></li>
      </ul>
    </li>
    <li>
      <a href="categorie.php">
        <i class="glyphicon glyphicon-indent-left"></i>
        <span>Categorías</span>
      </a>
    </li>
    <li class="submenu">
      <a href="#" class="submenu-toggle">
        <i class="glyphicon glyphicon-th-large"></i>
        <span>Carreras</span>
      </a>
      <ul class="nav submenu">
         <li><a href="product.php">Ingenierías</a>
             <ul class="subsubmenu">
                 <li><a href="ingenieria_civil.php">Ingeniería Civil</a></li>
                 <li><a href="otra_subcategoria.php">Ingenieria de Minas</a></li>
                 <li><a href="otra_subcategoria.php">Ingenieria Informatica y Sistemas</a></li>
             </ul>
         </li>
         <li><a href="educacion_ciencias_sociales.php">Educación y Ciencias Sociales</a></li>
         <li><a href="medicina_veterinaria.php">Medicina Veterinaria</a></li>
      </ul>
    </li>
    <li>
      <a href="media.php" >
        <i class="glyphicon glyphicon-picture"></i>
        <span>Media</span>
      </a>
    </li>
    <li class="submenu">
      <a href="#" class="submenu-toggle">
        <i class="glyphicon glyphicon-th-list"></i>
         <span>Asistencia</span>
        </a>
        <ul class="nav submenu">
           <li><a href="sales.php">Administrar Asistencia</a></li>
           <li><a href="add_sale.php">Agregar Asistencia</a></li>
       </ul>
    </li>
    <li class="submenu">
      <a href="#" class="submenu-toggle">
        <i class="glyphicon glyphicon-signal"></i>
         <span>Reporte de Asistencias</span>
        </a>
        <ul class="nav submenu">
          <li><a href="sales_report.php">Asistencia por fecha</a></li>
          <li><a href="monthly_sales.php">Asistencias mensuales</a></li>
          <li><a href="daily_sales.php">Asistencias diarias</a></li>
        </ul>
    </li>
  </ul>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
  var submenuToggles = document.querySelectorAll(".submenu-toggle");

  submenuToggles.forEach(function (toggle) {
    var submenu = toggle.nextElementSibling;

    toggle.addEventListener("mouseover", function () {
      if (submenu) {
        submenu.style.display = "block";
      }
    });

    submenu.addEventListener("mouseover", function () {
      if (submenu) {
        submenu.style.display = "block";
      }
    });

    toggle.addEventListener("mouseout", function () {
      if (submenu) {
        submenu.style.display = "none";
      }
    });

    submenu.addEventListener("mouseout", function () {
      if (submenu) {
        submenu.style.display = "none";
      }
    });
  });

  // Agrega eventos para mostrar las subsubcategorías
  var mainMenuItems = document.querySelectorAll(".main-menu-item");

  mainMenuItems.forEach(function (menuItem) {
    menuItem.addEventListener("mouseover", function () {
      var subsubmenu = menuItem.querySelector(".subsubmenu");
      if (subsubmenu) {
        subsubmenu.style.display = "block";
      }
    });

    menuItem.addEventListener("mouseout", function () {
      var subsubmenu = menuItem.querySelector(".subsubmenu");
      if (subsubmenu) {
        subsubmenu.style.display = "none";
      }
    });
  });
});


</script>

