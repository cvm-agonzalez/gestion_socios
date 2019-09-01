<?
function is_active($seccion1,$seccion2)
{
  if($seccion1 == $seccion2){
    echo 'active';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$ent_nombre?> | Comisiones</title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>styles/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>styles/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url()?>styles/daterangepicker-bs3.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      @media print {
        #comisiones_table_filter,#comisiones_table_info { display:none; }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#222533 !important;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>comisiones"><?=$ent_nombre?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li class=""><a href="<?=base_url()?>comisiones/cambio_pwd">Cambio Password</a></li>
            <li class=""><a href="<?=base_url()?>comisiones/logout">Cerrar Sesión</a></li>                      
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="visible-print" style="margin-bottom:-40px;">
      <div class="pull-left">
        <img src="<?=base_url()?>images/logo.png" width="80">
      </div>
      <div class="pull-left" style="margin:20px 10px;">    
        Listado Generado el <?=date('d/m/Y h:i');?>
      </div>
      <div class="clearfix"></div>
    </div>
