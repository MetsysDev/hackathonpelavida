<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- inserir variavel do titulo -->
    <title></title>

    <!--CSS Default -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fontawesome-free/css/all.min.css')?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" >

     <!--CSS da view -->
     <?php if(isset($css)): ?>
      <?php foreach ($css as $key => $css) : ?>
        <link rel="stylesheet" href="<?= base_url($css) ?>">
      <?php endforeach ?> 
    <?php endif ?>

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laptop-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Metsys</div>
      </a>

      <!-- Heading -->
      <div class="sidebar-heading">
        Painel Geral
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCadastros" aria-expanded="true" aria-controls="collapseCadastros">
          <i class="fas fa-user-friends"></i>
          <span>Cadastros</span>
        </a>
        <div id="collapseCadastros" class="collapse" aria-labelledby="headingCadastros" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Empresa">Empresa</a>
            <a class="collapse-item" href="Unidadesaude">Unidade de Saúde</a>
            <a class="collapse-item" href="Usuario">Usúario</a>
            <a class="collapse-item" href="Paciente">Paciente</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRelatorios" aria-expanded="true" aria-controls="collapseRelatorios">
          <i class="fas fa-file-medical-alt"></i>
          <span>Relatórios</span>
        </a>
        <div id="collapseRelatorios" class="collapse" aria-labelledby="headingRelatorios" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Acompanhamentos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAcompanhamentos" aria-expanded="true" aria-controls="collapseAcompanhamentos">
          <i class="fas fa-heart"></i>
          <span>Acompanhamentos</span>
        </a>
        <div id="collapseAcompanhamentos" class="collapse" aria-labelledby="headingAcompanhamentos" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="">Pacientes</a>
          </div>
        </div>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Content navbar -->
      <div id="content-navbar" class="d-flex flex-row justify-content-end">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: #4e73df;">

        <!-- Topbar Navbar -->
        <ul class="navbar-nav">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 small">Valerie Luna</span>
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

        </nav>
      </div>
      <!-- End Content navbar -->