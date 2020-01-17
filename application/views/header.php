<!doctype html>
<?php if(isset($_SESSION['logged_in'])){ ?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Subcount Process | PT Indo Seiki Metal Utama</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo base_url() ?>assets/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/c3/c3.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">

        <!-- Datatables -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dataTables/css/jquery.dataTables.css">

        <!-- Combobox -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/dist/css/select2.min.css">
    </head>

    <body>

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <img src="<?php echo base_url() ?>assets/ismu-logo.png" width="100" class="header-brand-img" alt="lavalite">
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                            <span style="padding-left: 20px; font-size: 16px;">Welcome <b><?php echo $this->session->userdata('username');?></b> in Application Subcount Process your are login by <b>Administrator</b> on <b>29 November 2019 12:56:34</b> Lets Work!! </span>
                            <input type="hidden" id="nik" value="<?php echo $this->session->userdata('id');?>">
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="<?php echo base_url() ?>assets/#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="<?php echo base_url() ?>assets/img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url() ?>assets/#"><i class="ik ik-settings dropdown-icon"></i> Change Password</a>
                                    <a class="dropdown-item" href="<?php echo base_url() ?>assets/login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="#">
                            <span class="text">Subcount</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Menu List</div>
                                <div id="tree_menu"></div>

                            </nav>
                        </div>
                    </div>
                </div>

            <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="<?php echo base_url() ?>javascript_data/tree_menu.js"></script>
                
                
            <?php }else{
  redirect(site_url('Welcome'));
}?>