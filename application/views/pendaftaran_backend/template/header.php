<!DOCTYPE html>
<html lang="en" class="app">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Portal Pesantren Darul Ilmi</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url('assets/css/animate.css'); ?>" type="text/css" rel="stylesheet"/>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/icon.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/js/datatables/datatables.css');?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/js/calendar/bootstrap_calendar.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/js/confirm/jquery-confirm.min.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/js/datepicker/datepicker.css');?>" type="text/css" />

</head>
<body class="" >
  <section class="vbox">
  <header class="bg-dark header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk">
      <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
        <i class="fa fa-bars"></i>
      </a>
      <a href="index.html" class="navbar-brand">
        <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="m-r-sm" alt="scale">
        <span class="hidden-nav-xs" style="font-size:15px">Pesantren Darul Ilmi</span>
      </a>
      <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
        <i class="fa fa-cog"></i>
      </a>
    </div>
    <ul class="nav navbar-nav hidden-xs">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="i i-grid"></i>
        </a>
        <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
          <div class="row m-l-none m-r-none m-t m-b text-center">
            <div class="col-xs-4">
              <div class="padder-v">
                <a href="#">
                  <span class="m-b-xs block">
                    <i class="i i-mail i-2x text-primary-lt"></i>
                  </span>
                  <small class="text-muted">Mailbox</small>
                </a>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="padder-v">
                <a href="#">
                  <span class="m-b-xs block">
                    <i class="i i-calendar i-2x text-danger-lt"></i>
                  </span>
                  <small class="text-muted">Calendar</small>
                </a>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="padder-v">
                <a href="#">
                  <span class="m-b-xs block">
                    <i class="i i-map i-2x text-success-lt"></i>
                  </span>
                  <small class="text-muted">Map</small>
                </a>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="padder-v">
                <a href="#">
                  <span class="m-b-xs block">
                    <i class="i i-paperplane i-2x text-info-lt"></i>
                  </span>
                  <small class="text-muted">Trainning</small>
                </a>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="padder-v">
                <a href="#">
                  <span class="m-b-xs block">
                    <i class="i i-images i-2x text-muted"></i>
                  </span>
                  <small class="text-muted">Photos</small>
                </a>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="padder-v">
                <a href="#">
                  <span class="m-b-xs block">
                    <i class="i i-clock i-2x text-warning-lter"></i>
                  </span>
                  <small class="text-muted">Timeline</small>
                </a>
              </div>
            </div>
          </div>
        </section>
      </li>
    </ul>
    <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
          </span>
          <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
      <li class="hidden-xs">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="i i-chat3"></i>
          <span class="badge badge-sm up bg-danger count">2</span>
        </a>
        <section class="dropdown-menu aside-xl animated flipInY">
          <section class="panel bg-white">
            <div class="panel-heading b-light bg-light">
              <strong>You have <span class="count">2</span> notifications</strong>
            </div>
            <div class="list-group list-group-alt">
              <a href="#" class="media list-group-item">
                <span class="pull-left thumb-sm">
                  <img src="<?php echo base_url('assets/images/a0.png'); ?>" alt="..." class="img-circle">
                </span>
                <span class="media-body block m-b-none">
                  Use awesome animate.css<br>
                  <small class="text-muted">10 minutes ago</small>
                </span>
              </a>
              <a href="#" class="media list-group-item">
                <span class="media-body block m-b-none">
                  1.0 initial released<br>
                  <small class="text-muted">1 hour ago</small>
                </span>
              </a>
            </div>
            <div class="panel-footer text-sm">
              <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
              <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
            </div>
          </section>
        </section>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="thumb-sm avatar pull-left">
            <img src="<?php echo base_url('assets/images/a0.png'); ?>" alt="...">
          </span>
          John.Smith <b class="caret"></b>
        </a>
        <ul class="dropdown-menu animated fadeInRight">
          <li>
            <span class="arrow top"></span>
            <a href="#">Settings</a>
          </li>
          <li>
            <a href="profile.html">Profile</a>
          </li>
          <li>
            <a href="#">
              <span class="badge bg-danger pull-right">3</span>
              Notifications
            </a>
          </li>
          <li>
            <a href="docs.html">Help</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
          </li>
        </ul>
      </li>
    </ul>
  </header>
  <section>
    <section class="hbox stretch">
  <?php
   $this->load->view("pendaftaran_backend/template/menu");
   ?>
