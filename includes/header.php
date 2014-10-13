<?php
    $inicioAct = (isset($inicioAct)) ? $inicioAct : "";
    $contactoAct = (isset($contactoAct)) ? $contactoAct : "";
?>
    <!-- Topbar ->
        <div class="topbar"> </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img id="logo-header" src="assets/img/logo.png" alt="Logo" style="height: 80px;">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li <?=$inicioAct;?>>
                            <a href="index.php">Inicio</a>
                        </li>
                        <!-- End Home -->

                        <!-- Pages ->                        
                        <li class="">
                            <a href="javascript:void(0);">
                                Quienes Somos
                            </a>
                            
                        </li>
                        <!-- End Pages -->

                        <!-- Servicios -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Servicios
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Albañileria</a></li>
                                <li><a href="javascript:void(0);">Fontaneria</a></li>
                                <li><a href="javascript:void(0);">Electricidad</a></li>
                                <li><a href="javascript:void(0);">Pintura</a></li>
                                <li><a href="javascript:void(0);">Carpinteria</a></li>
                                <li><a href="javascript:void(0);">Aluminio</a></li>
                                <li><a href="javascript:void(0);">Parquet</a></li>
                            </ul>
                        </li>
                        <!-- Ens Servicios -->

                        <!-- Catalogo -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Catalogo
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Baño</a></li>
                                <li><a href="javascript:void(0);">Cocina</a></li>
                                <li><a href="javascript:void(0);">Puertas</a></li>
                                <li><a href="javascript:void(0);">Azulejos</a></li>
                            </ul>
                        </li>
                        <!-- Ens Catalogo -->

                        <!-- Contacts -->
                        <li <?=$contactoAct;?>>
                            <a href="contacto.php">Contacto</a>
                        </li>                    
                        <!-- End Contacts -->

                        <!-- Search Block ->
                        <li>
                            <i class="search fa fa-search search-btn"></i>
                            <div class="search-open">
                                <div class="input-group animated fadeInDown">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
                                </div>
                            </div>    
                        </li>
                        <!-- End Search Block -->
                    </ul>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->