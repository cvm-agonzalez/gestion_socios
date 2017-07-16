<header class="clearfix">
    <a href="#/" data-toggle-min-nav
                 class="toggle-min"
                 ><i class="fa fa-bars"></i></a>

    <!-- Logo -->
    <div class="logo">
        <a href="<?=$_GET['baseurl']?>admin">
            <span>Villa Mitre </span>
        </a>
    </div>

    <!-- needs to be put after logo to make it working-->
    <div class="menu-button" toggle-off-canvas>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>

    <div class="top-nav">
        <!--
        <ul class="nav-left list-unstyled">
           
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-comment-o"></i>
                    <span class="badge badge-success">2</span>
                </a>
                <div class="dropdown-menu with-arrow panel panel-default">
                    <div class="panel-heading">
                        You have 2 messages.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-info"><i class="fa fa-comment-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Jane sent you a message</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-danger"><i class="fa fa-comment-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lynda sent you a mail</span>
                                    <span class="text-muted">9 hours ago</span>
                                </div>
                            </a>
                        </li>                       
                    </ul>
                    <div class="panel-footer">
                        <a href="javascript:;">Show all messages.</a>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge badge-info">3</span>
                </a>
                <div class="dropdown-menu with-arrow panel panel-default">
                    <div class="panel-heading">
                        You have 3 mails.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-warning"><i class="fa fa-envelope-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lisa sent you a mail</span>
                                    <span class="text-muted block">2min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-info"><i class="fa fa-envelope-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Jane sent you a mail</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-success"><i class="fa fa-envelope-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lynda sent you a mail</span>
                                    <span class="text-muted">9 hours ago</span>
                                </div>
                            </a>
                        </li>                       
                    </ul>
                    <div class="panel-footer">
                        <a href="javascript:;">Show all mails.</a>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o nav-icon"></i>
                    <span class="badge badge-warning">3</span>
                </a>
                <div class="dropdown-menu with-arrow panel panel-default">
                    <div class="panel-heading">
                        You have 3 notifications.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-success"><i class="fa fa-bell-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">New tasks needs to be done</span>
                                    <span class="text-muted block">2min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-info"><i class="fa fa-bell-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Change your password</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="pull-left media-icon">
                                    <span class="round-icon sm bg-danger"><i class="fa fa-bell-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">New feature added</span>
                                    <span class="text-muted">9 hours ago</span>
                                </div>
                            </a>
                        </li>                       
                    </ul>
                    <div class="panel-footer">
                        <a href="javascript:;">Show all notifications.</a>
                    </div>
                </div>
            </li>
        </ul>
        -->
        <ul class="nav-right pull-right list-unstyled">
            
<!--             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="fa fa-magic nav-icon"></span>
                </a>
                <ul class="dropdown-menu pull-right color-switch" data-ui-color-switch>
                    <li><a href="javascript:;" class="color-option color-some_color" data-style="some_color"></a></li>
                </ul>
            </li> -->
            <li class="dropdown text-normal nav-profile">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?=$_GET['baseurl']?>images/g1.jpg" alt="" class="img-circle img30_30">
                    <span class="hidden-xs">
                        <span data-i18n="<?=$_GET['username']?>"></span>
                    </span>
                </a>
                <ul class="dropdown-menu with-arrow pull-right">
                    <li>
                        <a href="<?=$_GET['baseurl']?>admin/admins">
                            <i class="fa fa-user"></i>
                            <span data-i18n="Usuarios"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=$baseurl?>admin/configuracion">
                            <i class="fa fa-gear"></i>
                            <span data-i18n="Configuración"></span>
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="#/pages/lock-screen">
                            <i class="fa fa-lock"></i>
                            <span data-i18n="Lock"></span>
                        </a>
                    </li> 
                    -->
                    <li>
                        <a href="admin/logout">
                            <i class="fa fa-sign-out"></i>
                            <span data-i18n="Cerrar Sesión"></span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>        
    </div>

</header>
