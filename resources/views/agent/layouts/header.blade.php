<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title', 'Admin Paneli')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('back-end/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('back-end/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('back-end/css/sb-admin-2.min.css') }}" rel="stylesheet">
  @toastr_css

   @yield('css')

</head>

<body id="page-top">

      <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('back-end/index.html') }}">
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Yönetim Paneli</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(Request::segment(2)=='dashboard') active @endif ">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            İçerik Yönetimi
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=='content') in @else collapsed @endif">
            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-edit" @if(Request::segment(2)=='content') style="color: white !important;" @endif></i>
                <span>Yazılar</span>
            </a>
            <div id="collapseTwo" class="collapse @if(Request::segment(2)=='content') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Yazı İşlemleri</h6>
                    <a class="collapse-item @if(Request::segment(2)=='content' and !Request::segment(3)) active @endif" href="{{ route('admin.content.index') }}">Tüm Yazılar</a>
                    <a class="collapse-item @if(Request::segment(2)=='content' and Request::segment(3) == 'create') active @endif" href="{{ route('admin.content.create') }}">Yazı Oluştur</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item ">
            <a href="{{ route('admin.category.index') }}" class="nav-link "  @if(Request::segment(2)=='category') style="color: white !important;" @endif >
                <i class="fas fa-fw fa-list" @if(Request::segment(2)=='category') style="color: white !important;" @endif ></i>
                <span>Kategoriler</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if(Request::segment(2)=='pages') in @else collapsed @endif">
            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-file-alt" @if(Request::segment(2)=='pages') style="color: white !important;" @endif></i>
                <span>Sayfalar</span>
            </a>
            <div id="collapsePage" class="collapse @if(Request::segment(2)=='pages') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Sayfa İşlemleri</h6>
                    <a class="collapse-item @if(Request::segment(2)=='pages' and !Request::segment(3)) active @endif" href="{{ route('admin.page.index') }}">Tüm Sayfalar</a>
                    <a class="collapse-item @if(Request::segment(2)=='pages' and Request::segment(3) == 'create') active @endif" href="{{ route('admin.page.create') }}">Sayfa Oluştur</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Diğer İşlemler
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item @if(Request::segment(2)=='settings') in @else collapsed @endif">
            <a class="nav-link collapsed"  href="" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
                <i @if(Request::segment(2)=='settings') style="color: white !important;" @endif class="fas fa-fw fa-cog"></i>
                <span>Ayarlar</span>
            </a>
            <div id="collapseSettings" class="collapse @if(Request::segment(2)=='settings') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Site Ayarları</h6>
                    <a class="collapse-item @if(Request::segment(2)=='settings' and !Request::segment(3)) active @endif" href="{{ route('admin.settings.index') }}">Genel Ayarlar</a>
                    <a class="collapse-item @if(Request::segment(2)=='settings' and Request::segment(3) == 'banner') active @endif" href="{{ route('admin.settings.banner') }}">Slider Ayarları</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        </ul>
        <!-- End of Sidebar -->



