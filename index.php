<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de matrículas</title>
        <!--
        
        Template 2088 Big City
        
        http://www.tooplate.com/view/2088-big-city
        
        -->
        <!-- load stylesheets -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
        <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="css/bootstrap.min.css">                                      
        <!-- Bootstrap style -->
        <link rel="stylesheet" href="css/hero-slider-style.css">                              
        <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
        <link rel="stylesheet" href="css/magnific-popup.css">                                 
        <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
        <link rel="stylesheet" href="css/tooplate-style.css">                                   
        <!-- Tooplate style -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        <style>
            #map {                
                height: 400px;
                width: 800px;
                allowfullscreen;
            }
        </style>
    </head>

    <body>

        <div class="cd-bg-video-wrapper" data-video="video/bangkok-city">
            <!-- video element will be loaded using jQuery -->
        </div> <!-- .cd-bg-video-wrapper -->

        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <div class="container">
                    <nav class="navbar">
                        <div class="tm-navbar-bg">                            
                            <a class="navbar-brand text-uppercase" href="#">Matriculas IA</a>
                            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                                &#9776;
                            </button>
                            <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item active selected">
                                        <a class="nav-link" href="#0" data-no="1">Inicio <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="2">Registro</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="3">Estudiante</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="4">Informes</a>
                                    </li>
                                </ul>
                            </div>                        
                        </div>
                    </nav>
                </div>                
            </div> 

            <ul class="cd-hero-slider">  <!-- autoplay -->

                <!-- Page 1 Home -->
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-page-1 tm-section-margin-t-small" data-page-no="1">
                            <div class="row">                            
                                <div class="col-xs-12">
                                    <div class="tm-home-container-outer">
                                        <div class="tm-home-container">
                                            <div class="tm-home-title-container">
                                                <h2 class="tm-text-title text-xs-center tm-home-title">Bienvenidos a Matriculas IA</h2>    
                                            </div>
                                            <div class="tm-home-description-container tm-bg-dark-blue">
                                                <div class="text-xs-left tm-textbox">                                            
                                                    <p class="tm-text tm-home-description">Proyecto de la asignatura de Inteligencia Artificial de la Universidad de Cartagena correspondiente a un breve análisis simulado de matrículas y deserción de estudiantes teniendo a su ubicación.</a></p>
                                                    <p class="tm-text tm-home-description">
                                                        Jesús David Prasca, Inka Luhrs, David Garcés, Deimer Romero
                                                        <br>Universidad de Cartagena</br>
                                                        <br>Docente Cristian Fernández</br>
                                                        <br>Septiembre 2017</br>
                                                    </p>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="tm-home-container-bg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cd-full-width -->
                </li>

                <!-- Page 2 Registro -->
                <li>
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-section-margin-t-small" data-page-no="2">                            
                            <div class="tm-contact-page">
                                <div class="row tm-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-bg-white tm-textbox-padding">
                                            <h2 class="tm-text-title tm-margin-b-0">Registro de estudiantes</h2>
                                        </div>
                                    </div>
                                </div>

                                <div id="map">"map"</div>
                                <script>
                                    function initMap() {
                                        var uluru = {lat: 10.400, lng: -75.478};
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 13,
                                            center: uluru
                                        });
                                        var marker = new google.maps.Marker({
                                            position: uluru,
                                            map: map
                                        });
                                    }
                                </script>
                                <script async defer
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC51wVYj3qvz0U3UXDZNThldjR5IJ11-Iw&callback=initMap">
                                </script><br></br>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container tm-bg-dark-blue">                                
<<<<<<< HEAD
                                            <!--<div class="text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                           		<p class="tm-text">Poner aquí el mapa</p>
                                           		 <form action="index.html" method="post" class="tm-contact-form">
=======
                                            <div class="text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                        <!--<p class="tm-text">Poner aquí el mapa</p>-->
                                                <form action="index.html" method="post" class="tm-contact-form">
>>>>>>> 3313b0a652b42104c35a84481a5a833c043f8331
                                                    <div class="form-group">
                                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                    </div>                                                                                                            
                                                    <div class="form-group">
                                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                                                    </div>
                                                    <button type="submit" class="tm-submit-btn">Enviar</button>                                                
                                                </form> 
<<<<<<< HEAD
                                           		
                                           	</div>-->
=======

                                            </div>
>>>>>>> 3313b0a652b42104c35a84481a5a833c043f8331

                                            <div class="text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <!-- contact form -->
                                                <form action="index.html" method="post" class="tm-contact-form">

                                                    <div class="form-group">
                                                        <input type="text" id="per_nombres" name="per_nombres" class="form-control" placeholder="Nombres"  required/>
                                                    </div>                                                                                                            
                                                    <div class="form-group">
                                                        <input type="text" id="per_ape1" name="per_ape1" class="form-control" placeholder="Primer apellido"  required/>
                                                    </div> 
                                                    <div class="form-group">
                                                        <input type="text" id="per_ape2" name="per_ape2" class="form-control" placeholder="Segundo apellido"  required/>
                                                    </div>
                                                    <div class="form-group">
                                                    	<!--<label for="per_estrato" style="color: white">Estrato social: </-label>
                                                    	<input type="number" id="per_estrato" name="per_estrato" class="form-control" list="numeros" placeholder="Estrato social" required/>
                                                    	<span class="validity"></span>
                                                    	<datalist id="numeros">
														  <option value="1">
														  <option value="2">
														  <option value="3">
														  <option value="4">											
														</datalist>-->
                                                    </div> 
                                                    <div style="color: white;">
                                                    	<label for="per_estrato">Estrato social: </label> <br>
                                                        <input type="radio" id="per_estrato" name="per_estrato" class="" value=1 checked/> Estrato 1 <br>
                                                        <input type="radio" id="per_estrato" name="per_estrato" class="" value=2/> Estrato 2 <br> 
                                                        <input type="radio" id="per_estrato" name="per_estrato" class="" value=3/> Estrato 3 <br> 
                                                        <input type="radio" id="per_estrato" name="per_estrato" class="" value=4/> Estrato 4 <br>   
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="prog_nombre">
                                                        	                                                       
                                                        </select>
                                                    </div>                                                  
                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                                                    </div>
                                                    <button type="submit" class="tm-submit-btn">Send</button>                                                
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div> <!-- .cd-full-width -->
                </li>

                <!-- Page 3 Estudiante -->
                <li>
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-section-margin-t" data-page-no="3">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="col-lg-6 tm-white-header-container-outer tm-margin-b tm-2-col-left">
                                            <div class="tm-bg-white tm-white-header-container">
                                                <h2 class="tm-text-title tm-text-title-small">Donec dictum aliquam</h2>
                                            </div>
                                            <div class="tm-bg-dark-blue text-xs-left tm-textbox tm-textbox-padding tm-white-header-body tm-white-border tm-2-col-equal-height">
                                                <p class="tm-text">Nulla scelerisque vitae augue non viverra. Mauris nibh eros, gravida id rutrum eu, placerat quis enim. Ut massa mi, convallis eget pharetra eget, laoreet sit amet orci. Sed tincidunt nisi ut lectus pellentesque viverra. Aliquam condimentum lacinia.</p>                                            
                                            </div>    
                                        </div>
                                        <div class="col-lg-6 tm-white-header-container-outer tm-margin-b tm-2-col-right">
                                            <div class="tm-bg-white tm-white-header-container">
                                                <h2 class="tm-text-title tm-text-title-small">Vivamus quis lacinia</h2>
                                            </div>
                                            <div class="tm-bg-dark-blue text-xs-left tm-textbox tm-textbox-padding tm-white-header-body tm-white-border tm-2-col-equal-height">
                                                <p class="tm-text">Integer posuere massa ipsum, ac pharetra metus dapibus vel. Duis aliquet ac lacus quis efficitur. Morbi in vulputate sapien. Sed nec mi fringilla metus vehicula porttitor. Donec sit amet arcu quis massa mollis condimentum tempor eleifend enim.</p>                                            
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="col-lg-6 tm-margin-b tm-2-col-left">
                                            <div class="tm-bg-white tm-textbox-padding tm-height-100">
                                                <h2 class="tm-text-title tm-text-title-small tm-header-margin-b">Proin fringilla felis quam</h2>
                                                <p class="tm-text">Ut massa mi, convallis eget pharetra eget, laoreet sit amet orci. Sed tincidunt nisi ut lectus pellentesque viverra. Aliquam condimentum lacinia.</p>    
                                            </div>                                            
                                        </div>
                                        <div class="col-lg-6 tm-margin-b tm-2-col-right">
                                            <div class="tm-bg-white tm-textbox-padding tm-height-100">
                                                <h2 class="tm-text-title tm-text-title-small tm-header-margin-b">Sed rhoncus egestas</h2>
                                                <p class="tm-text">Pellentesque augue urna, ultrices sit amet luctus eget, ultricies sit amet ipsum. Nulla sem nisi, commodo sed auctor sed, euismod nec dui.</p>
                                            </div>
                                        </div>  
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="col-lg-4 tm-margin-b">
                                            <div class="tm-bg-brown tm-white-border tm-textbox-padding tm-height-100">                                
                                                <p class="tm-text">Aliquam facilisis ut purus non ultricies. Mauris a auctor turpis. Ut in consequat quam. Integer ex dui, eleifend non mi val, eleifend varius orci.</p>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4 tm-margin-b">
                                            <div class="tm-bg-dark-blue tm-white-border tm-textbox-padding tm-height-100">
                                                <p class="tm-text">Mauris tempor, massa quis viverra suscipit, sapien ipsum condimentum nulla, sed faucibus tellus libero eget dolor. In ornare posuere.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 tm-margin-b">
                                            <div class="tm-bg-dark-brown tm-white-border tm-textbox-padding tm-height-100">
                                                <p class="tm-text">Donec placerat eget enim vel fringilla. Vivamus nibh nisl, viverra vel nisl eget, feugiat fringilla quam. Naecenas sodales, magna sed.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="tm-flex">
                                        <div class="col-lg-4 tm-sm-margin-b">
                                            <div class="tm-bg-dark-blue tm-white-border tm-textbox-padding tm-height-100">
                                                <p class="tm-text">Quisque mattis pellentesque. Etiam rutrum neque at diam imperdiet, efficitur tincidunt turpis dignissim. Cras placerat placerat tempor.</p>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4 tm-sm-margin-b">
                                            <div class="tm-bg-white tm-white-border tm-textbox-padding tm-height-100">
                                                <p class="tm-text">Sed nec mi fringilla metus vehicula porttitor. Donec sit amet arcu quis massa mollis condimentum tempor eleifend enim.</p>
                                            </div>    
                                        </div>
                                        <div class="col-lg-4 tm-sm-margin-b">
                                            <div class="tm-bg-dark-blue tm-white-border tm-textbox-padding tm-height-100">
                                                <p class="tm-text">In pellentesque, ipsum vitae dapibus ultrices, dui nunc fringilla enim, sit amet placerat nulla felis et nisl.</p>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>                                
                            </div>
                        </div>                                                
                    </div> <!-- .cd-full-width -->

                </li>

                <!-- Page 4 Informes -->
                <li>
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-section-margin-t-small" data-page-no="2">                            
                            <div class="tm-contact-page">
                                <div class="row tm-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-bg-white tm-textbox-padding">
                                            <h2 class="tm-text-title tm-margin-b-0">Vistas gráficas</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container tm-bg-dark-blue">                                
                                            
                                            <div class="text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <!-- contact form -->
                                                <form action="#" method="post" class="tm-contact-form">                                                    
                                                    <button type="button" class="tm-submit-btn" onclick="window.open('../MatriculasIA/reports/rep_mat_x_mun.php', this.target, 'width=800px,height=600px'); return false;">Posibles deserciones por municipio</button> 
                                                    <button type="button" class="tm-submit-btn">Posibles deserciones por estrato</button> 
                                                    <button type="button" class="tm-submit-btn" onclick="window.open('../MatriculasIA/reports/rep_mat_x_pro.php', this.target, 'width=800px,height=600px'); return false;">Programas con posible deserción</button>
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div> <!-- .cd-full-width -->  

                </li>


            </ul> <!-- .cd-hero-slider -->

            <footer class="tm-footer">            
                <p class="tm-copyright-text pull-xs-right"><span class="tm-current-year"></span> Matrículas IA            
                    <a rel="nofollow" href="" class="tm-footer-link" target="_parent"></a></p>
            </footer>                    
        </div> <!-- .cd-hero -->        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/tether.min.js"></script>                <!-- http://tether.io/ -->
        <script src="js/isInViewport.min.js"></script>          <!-- isInViewport js (https://github.com/zeusdeux/isInViewport) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

        <script>

                                    function adjustHeightOfPage(pageNo) {

                                        var offset = 80;
                                        var pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height();

                                        if ($(window).width() >= 992) {
                                            offset = 120;
                                        } else if ($(window).width() < 480) {
                                            offset = 40;
                                        }

                                        // Get the page height
                                        var totalPageHeight = 335 + $('.cd-slider-nav').height()
                                                + pageContentHeight + offset
                                                + $('.tm-footer').height();

                                        // Adjust layout based on page height and window height
                                        if (totalPageHeight > $(window).height())
                                        {
                                            $('.cd-hero-slider').addClass('small-screen');
                                            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                                        } else
                                        {
                                            $('.cd-hero-slider').removeClass('small-screen');
                                            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                                        }
                                    }

                                    function uploadVideo() {

                                        var videoWrapper = $('.cd-bg-video-wrapper');
                                        if (videoWrapper.is(':visible')) {
                                            // if visible - we are not on a mobile device 
                                            var videoUrl = videoWrapper.data('video'),
                                                    video = $('<video autoplay loop><source src="' + videoUrl + '.mp4" type="video/mp4" /></video>');
                                            video.appendTo(videoWrapper);

                                            // play video if first slide
                                            if (videoWrapper.parent('.cd-bg-video.selected').length > 0)
                                                video.get(0).play();
                                        }
                                    }

                                    // Everything is loaded including images.            
                                    $(window).load(function () {

                                        adjustHeightOfPage(1); // Adjust page height

                                        // Background Video
                                        if ($(window).width() > 800) {
                                            uploadVideo();
                                        }

                                        /* Gallery One pop up
                                         -----------------------------------------*/
                                        $('.gallery-first').magnificPopup({
                                            delegate: 'a', // child items selector, by clicking on it popup will open
                                            type: 'image',
                                            gallery: {enabled: true}
                                        });

                                        /* Gallery Two pop up
                                         -----------------------------------------*/
                                        $('.gallery-second').magnificPopup({
                                            delegate: 'a', // child items selector, by clicking on it popup will open
                                            type: 'image',
                                            gallery: {enabled: true}
                                        });

                                        /* Collapse menu after click 
                                         -----------------------------------------*/
                                        $('#tmNavbar a').click(function () {
                                            $('#tmNavbar').collapse('hide');

                                            adjustHeightOfPage($(this).data("no")); // Adjust page height       
                                        });

                                        /* Browser resized 
                                         -----------------------------------------*/
                                        $(window).resize(function () {
                                            var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");

                                            // wait 3 seconds
                                            setTimeout(function () {
                                                adjustHeightOfPage(currentPageNo);
                                            }, 3000);

                                            if ($(window).width() > 800) {
                                                uploadVideo();
                                            }

                                        });

                                        // Play video only when visible
                                        // https://stackoverflow.com/questions/21163756/html5-and-javascript-to-play-videos-only-when-visible
                                        $('video').each(function () {
                                            if ($(this).is(":in-viewport")) {
                                                $(this)[0].play();
                                            } else {
                                                $(this)[0].pause();
                                            }
                                        })

                                        // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                                        $('body').addClass('loaded');
                                        $('.tm-current-year').text(new Date().getFullYear());

                                    });

        </script>            

    </body>
</html>