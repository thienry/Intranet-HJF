<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link" style="text-align: center; color: aliceblue;">
    <img src="/res/site/img/hjf.png" alt="Blog HJF" class="brand-image img-circle">
    <span class="brand-text font-weight-light" style="padding-right: 30px;">Jayme da Fonte</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/res/admin/dist/img/user.svg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info" >
        <a href="#" class="d-block"  style="color: aliceblue;">Thiago Moura</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/admin" class="nav-link active" style="color: aliceblue;">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- if da condicao inadmin-->
      
        <li class="nav-item">
          <a href="/admin/users" class="nav-link"  style="color: aliceblue;">
            <i class="nav-icon fa fa-users"></i>
            <p>Usuarios</p>
          </a>
        </li>
        <!-- if da condicao inadmin-->
        <li class="nav-item">
          <a href="/admin/posts" class="nav-link"  style="color: aliceblue;">
            <i class="nav-icon fa fa-rss-square"></i>
            <p>Postagens</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/ramais" class="nav-link"  style="color: aliceblue;">
            <i class="nav-icon fa fa-phone"></i>
            <p>Ramais</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->