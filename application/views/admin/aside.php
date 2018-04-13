<aside class="main-sidebar">
   
    <section class="sidebar">
    
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>public/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="text-uppercase"><?= $usuario ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PRINCIPAL</li>
        <li>
          <a href="<?= base_url()?>admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>         
          </a>      
        </li>
        <li>
          <a href="<?= base_url()?>usuarios">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Usuarios</span>
            <!-- <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span> 
            </span>-->
          </a>         
        </li>
        
        <li class="header">MENU</li>
         <li>
          <a href="<?= base_url()?>generos">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>Generos</span>
           <!--  <span class="pull-right-container">
             <i class="fa fa-angle-right pull-left"></i>
           </span> -->
          </a>
       
        </li>

        <li>
          <a href="<?= base_url()?>articulos">
            <i class="fa fa-th"></i> <span>Articulos</span>
          <!--   <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span> -->
          </a>
        </li>

         <!-- <li>
          <a href="<?= base_url()?>reportes">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
             <span>Reportes</span>
           <span class="pull-right-container">
             <small class="label pull-right bg-green">new</small>
           </span>
          </a>
        </li> -->
       
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">