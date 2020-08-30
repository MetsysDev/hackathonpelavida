<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- inserir variavel do titulo -->
    <title></title>

    <!--CSS Default -->

    <!--CSS do Template --><!-- Custom styles for this template-->
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/sb-admin-2.min.css') ?>">

   <!-- Custom fonts for this template-->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fontawesome-free/css/all.min.css')?>">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
          <a class="collapse-item" href="">Empresa</a>
            <a class="collapse-item" href="">Unidade de Saúde</a>
            <a class="collapse-item" href="">Usúario</a>
            <a class="collapse-item" href="">Paciente</a>
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