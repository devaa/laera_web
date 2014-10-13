<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Contacto - AREAL Reformas Integrales</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="tittle" content="Contacto - Reformas Integrales Areal S.L. - ">
    <meta name="description" content="Reformas Integrales Areal S.L., dirección, horario, solicitud de presupuesto, Le llamamos">
    <meta name="author" content="David Arenas">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">     

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_contact.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/blue.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head> 

<body>
<div class="wrapper">
    <!--=== Header ===-->    
    <div class="header">
        <?php
            $contactoAct = "class='active'";
            include 'includes/header.php';
        ?>
    </div>
    <!--=== End Header ===-->   

    <!--=== Content Part ===-->
    <div class="container content">     
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <!-- Google Map -->
                <div id="map" class="map map-box map-box-space margin-bottom-40"></div>
                <!-- End Google Map -->

                <p>Si desea realizar cualquier tipo de reforma en su vivienda, local o comunidad de vecinos o esta interesado en alguno de los productos que ofertamos,
                     cuentenoslo a trav&eacute;s del siguiente formulario y le daremos presupuesto sin ning&uacute;n tipo de compromiso con la mayor brevedad posible.</p><br />
                <div id="divMessage"></div>
                <form id="formContacto">
                    <div class="form-group col-md-7 col-md-offset-0">    
                        <label class="control-label" for="form-nombre">Nombre</label> 
                        <input id="nombre" type="text" class="form-control">
                    </div>

                    <div class="form-group col-md-7 col-md-offset-0">    
                        <label class="control-label" for="form-telefono">Tel&eacute;fono</label> 
                        <input id="telefono" placeholder="Fijo o Móvil" type="text" class="form-control">
                    </div>

                    <div class="form-group col-md-7 col-md-offset-0">    
                        <label class="control-label" for="form-mail">Email <span class="color-red">*</span></label> 
                        <input id="mail" placeholder="ejemplo@mail.com" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-md-offset-0">    
                        <label class="control-label" for="form-mensaje">Mensaje</label> 
                        <textarea id="mensaje" rows="8" class="form-control"></textarea>
                        <br>
                        <button type="submit" class="btn-u btn-default">Enviar</button>
                    </div>                    
                </form>
            </div><!--/col-md-9-->
            
            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Contacto</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i>Calle Buitrago 8, 28424, Alcorcón</a></li>
                    <li><a href="mailto:arealsl@arealsl.es"><i class="fa fa-envelope"></i>arealsl@arealsl.es</a></li>
                    <li><a href="tel:916114783"><i class="fa fa-phone"></i>91 611 47 83</a></li>
                    <li><a href="/"><i class="fa fa-globe"></i>http://www.arealsl.es</a></li>
                </ul>

                <!-- Business Hours -->
                <div class="headline"><h2>Horario</h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Mañanas:</strong>&nbsp;10:30 a 13:30</li>
                    <li><strong>Tardes:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17:30 a 20:30</li>
                </ul>

                <!-- Why we are? ->
                <div class="headline"><h2>Why we are?</h2></div>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
                    <li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
                    <li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
                </ul>
            </div><!--/col-md-3-->
        </div><!--/row-->        

    </div><!--/container-->     
    <!--=== End Content Part ===-->

    <!--=== Footer ===-->
    <div class="footer">
        <?php include 'includes/footer.php'; ?>
    </div><!--/footer-->
    <!--=== End Footer ===-->

    <!--=== Copyright ===->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">                     
                    <p>
                        2014 &copy; Unify. ALL Rights Reserved. 
                        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>
                <div class="col-md-6">  
                    <a href="index.html">
                        <img class="pull-right" id="logo-footer" src="assets/img/logo2-default.png" alt="">
                    </a>
                </div>
            </div>
        </div> 
    </div><!--/copyright--> 
    <!--=== End Copyright ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<script type="text/javascript" src="assets/js/contacto.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        ContactPage.initMap();
        formContacto.init();        
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->

</body>
</html> 