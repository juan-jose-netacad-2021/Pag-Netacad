<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Cisco Academy</title>
  
    <!--<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    -->

  <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset ('/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset ('/assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{ asset ('/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset ('/assets/css/lightbox.css')}}">


  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Cisco</em> Academy</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i> </a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Inicio</a></li>
        <li class="has-submenu"><a href="">Nosotros</a>
          <ul class="sub-menu">
            <li><a href="#section22">Quienes somos</a></li>
            <li><a href="#section24"> Mision</a></li>
            <li><a href="#section25"> Vision</a></li>
          </ul>
        </li>
        <li><a href="#section3">Imagenes</a></li>  
       
        <li><a href="#section5">Docentes</a></li> 
        <li><a href="section4">Cursos</a></li> 
        <li><a href="#section6">Contactanos</a></li> 
       
        </ul>
    </nav>
  </header>
<!--end header -->
  <!-- ***** Main Banner Area Start ***** -->
 
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
      
          <source src= "{{ asset ('/assets/images/course-video2.mp4')}}" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Academia tecnologica de</h6>
              <h2><em>Cisco</em> en Bolivia</h2>
              <!--<a href= "{{ url('/curso')}}">Ver detalles de curso</a>  -->
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section22">Leer mas..</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Todos los cursos</h4>
              </div>
              <div class="content-hide">
                <div class="tama??o-letra">

                <ul>
                   <li type="circle">CCNA V7.0 (Curso de Redes de Datos Cisco)</li>
                   <li type="circle"> CCNA I   Introduction to Networks</li>
                   <li type="circle">  CCNA II  Switching, Routing, and Wireless Essentials</li>
                   <li type="circle">  CCNA III  Enterprise Networking, Security, and Automation</li>

                   <li type="circle">   Introduction to Cybersecurity</li>
                   <li type="circle">    Cybersecurity Essentials</li>
                   <li type="circle">    IoT Security</li>
                   <li type="circle">    Cybersecurity Operations (CyberOps Associate)</li>

                   <li type="circle">   Essentials in Python (Programaci??n en Python)</li>
                   <li type="circle">   PCAP Programming Essentials in Python (Programaci??n en Python)</li>
                    <li type="circle">  Big Data & Analitics (Big Data & An??lisis de datos)</li>
                    <li type="circle">  IT ESSENTIALS V7.0 (Soporte Tecnico) </li>
                 
                </ul>
            
              </div> 
            </div>
          </div>
          </div>
        </div>
        <!-- header-clases virtuales-->
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Clases virtuales</h4>
              </div>
              <div class="content-hide">
                <p>Debido a la pandemia, la academia tecnol??gica de Cisco implement?? el aprendizaje en l??nea, de esta manera tu podras acceder a las clases en cualquier
                lugar en el que te encuentres de manera remota.  </p>
                <p>Los cursos virtuales son totalmente en vivo a tr??ves de Cisco Webex, cuentan con una metodolog??a ??nica para que los estudiantes tengan
                diversas experiencias de aprendizaje que pueden ser m??s desafiantes y estimulantes,esto garantiza la experiencia virtual 
                como si fuera presencial. </p>
            </div>
            </div>
          </div>
        </div>
        <!-- end header-clases virtuales-->
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Beneficios.</h4>
              </div>
              <div class="content-hide">
                <p>Los beneficios que usted tendra son los siguientes:</p>
                <p> - Acceso a la plataforma Cisco 24/7.</p>
                <p> - Acceso a las diferentes herramientas (Packet Traicer, Simulador de hardware, terminal linux, etc)</p>
                <p> - Acceso a los diferentes examenes.</p>
                <p> - Acceso a las clases virtuales en vivo a tr??ves de Cisco Webex.</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section22">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id='tabs'>
            
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6"> 
                  <br>
                  <br>   
                  <br>      
                    <img src="{{ asset ('/assets/images/quienes-somos.jpg')}}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>QUIENES SOMOS</h4>
                    <p> La Academia Tecnol??gica de Cisco en Bolivia es un centro de educaci??n, consolidada en la ense??anza de Redes,python,Soporte tecnico,ciberseguridad y Big Data desde hace 3 a??os. Trabajamos con docentes con una gran trayectoria y experiencia.</p>

                    <p>Fundamentamos nuestros ??xito en una ense??anza personalizada e individualizada hacia el alumnado, centrado en ampliar y actualizar los conocimientos en cuanto a tecnologia.  Somos uno de los pocos centros de ense??anza  certificadoss como una Academia 
                     <a href="https://www.netacad.com/" target=???_blank??? rel="sponsored">CISCO</a> </p>
                  </div>
                </div>
              </article>

            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--end quienes somos -->
<!--start mision-->
<section class="section why-us" data-section="section24">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id='tabs'>
            
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6"> 
                  <br> 
                  <br>      
                    <img src="{{ asset ('/assets/images/mision.png')}}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>MISION</h4>
                    <p>La academia tecnol??gica de Cisco en Bolivia  tiene como mision brindar un servicio educativo de calidad con reconocimiento a nuestro alumnado, 
                    vinculados con el entorno para atender los retos acad??micos altamente calificados en docencia y generaci??n del conocimiento; egresados formados integralmente en competencias con s??lida preparaci??n tecnol??gica.</p>
                  </div>
                </div>
              </article>

            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end mision -->
  <!-- start vision-->
<section class="section why-us" data-section="section25">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id='tabs'>
            
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                  <br> 
                  <br>  
                    <img src="assets/images/vision.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>VISION</h4>
                    <p>La academia tecnol??gica de Cisco en Bolivia  tiene como vision el llegar a ser un centro de ense??anza de tecnologia de referencia en Bolivia que forme a nuestro alumnado como grandes profesionales, contando para ello con un plantel docente altamente cualificado y en innovaci??n continua.</p>
                  </div>
                </div>
              </article>

            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  end  vision--> 
 <!--  EMPIEZA IMAGENES--> 
  <section class="section courses" data-section="section3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>GALERIA DE IMAGENES</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/ima-01.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Redes LAN </h4> <br> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Redes WAN </h4> <br> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-03.jpg" alt="Course #3"> 
            <div class="down-content">
              <h4>Redes PAN </h4> <br> <br>
            </div> 
          </div>
          <div class="item">
            <img src="assets/images/ima-04.jpg" alt="Course #4">
            <div class="down-content">
              <h4> Seguridad en la red - Firewall </h4> <br>
            </div> 
           </div>
          <div class="item">
            <img src="assets/images/ima-05.png" alt="">
            <div class="down-content">
              <h4>Dispositivos intermediarios de red</h4>
            </div> 
          </div>
          <div class="item">
            <img src="assets/images/ima-06.jpg" alt="">
            <div class="down-content">
              <h4>Dispositivos finales de red</h4> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-07.jpg" alt="">
            <div class="down-content">
              <h4>Medios de red</h4> <br> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-08.jpg" alt="">
            <div class="down-content">
              <h4>Direccion IPV6</h4> <br> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-09.png" alt="">
            <div class="down-content">
              <h4>Direccion IPV4</h4> <br> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-10.png" alt="">
            <div class="down-content">
              <h4>Direccion MAC</h4> <br> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-11.jpg" alt="">
            <div class="down-content">
              <h4>Programacion en Python</h4> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/ima-12.jpg" alt="">
            <div class="down-content">
              <h4>Tipos de Malware</h4> <br> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!--  ACABA IMAGENES--> 

<!--  EMPIEZA CURSOS-->
<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>NUESTROS CURSOS</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/course-01.jpg" alt="Course #1">
            <div class="down-content">
              <h4>CCNA I Introduction to Networks</h4><br> <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4>CCNA II  Switching, Routing, and Wireless Essentials</h4>
              
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>CCNA III  Enterprise Networking, Security, and Automation</h4>
              
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-04.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Introduction to Cybersecurity</h4>
              <br> <br> 
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-05.jpg" alt=""> 
            <div class="down-content">
              <h4>Cybersecurity Essentials</h4>
              <br>  <br>  
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-06.jpg" alt="">
            <div class="down-content">
              <h4>IOT Security</h4>
              <br>  <br>  <br>  
            </div>  
          </div>
          <div class="item">
            <img src="assets/images/course-07.jpg" alt="">
            <div class="down-content">
              <h4> Cybersecurity Operations (CyberOps Associate)</h4>
              <br>  
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-08.png" alt="">
            <div class="down-content">
              <h4> Essentials in Python (Programaci??n en Python)</h4>
              <br>   
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-09.jpg" alt="">
            <div class="down-content">
              <h4>PCAP Programming Essentials in Python (Programaci??n en Python)</h4>
              
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-10.jpg" alt="">
            <div class="down-content">
              <h4>Big Data & Analitics (Big Data & An??lisis de datos)</h4>
              <br>  <br>  <br>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/course-11.png" alt="">
            <div class="down-content">
              <h4>  IT ESSENTIALS V7.0 (Soporte Tecnico)</h4>
              <br>  <br>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

<!--TERMINA CURSOS -->

<!-- start docentes-->      
<section class="section why-us" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id='tabs'>
            
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6"> 
                  <br>
                  <br>   
                  <br>      
                    <img src="{{ asset ('/assets/images/DOCENTE.jpg')}}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4> DOCENTES</h4>
                    <p> Los docentes de la academia Netacad son profesionales con gran experiencia en sus respectivos campos 
                      que gu??an a nuestros alumnos en cada etapa de los diferentes cursos que ofrecemos. 
                      Adem??s de transmitirles conocimiento, act??an como mentores y consejeros durante su proceso de aprendizaje.??? <br>
                      Nuestros docentes tienen el siguiente perfil: ??tico ,Cr??tico ,Transdisciplinario , Comprometido con su profesi??n y la academia,Potenciador  

                    </p>  

                    </p>
                  </div>
                </div>
              </article>

            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end docentes-->

<!-- start CONTactanos-->
<section class="section coming-soon" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Ponte en contacto con <em>la academia Tecnet</em> a tr??ves de nuestras redes sociales</h4>
              <div class="counter">

                <div class="days">
                <a href="https://wa.me/59175282702/?text=Academia%20Tecnet :%20En%20que%20curso%20esta%20interesado? rel="sponsored" target="_blank">
                <img src="{{ asset ('/assets/images/2-watsap.png')}}" alt=""> </img>
                </a> 
                  <span>WhatsApp</span>
              </div>
              <div class="counter">
                <a href="https://www.facebook.com/tecnet.networking" rel="sponsored" target="_blank">
                  <img src="{{ asset ('/assets/images/1-facebook.png')}}" alt=""> </img>
                  </a> 
                  <span>Facebook</span>
              </div>
              <div class="minutes">
                <a href="mailto:tecnet20@outlook.es" rel="sponsored" target="_blank">
                <img src="{{ asset ('/assets/images/3-gmail.png')}}" alt=""> </img>
                 </a>
                  <span>Gmail</span>
              </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Llena el siguiente formulario y recibe informacion sobre <em>nuestros cursos</em> certificados por CISCO</h6>
            </div>
            <form id="contact" action="{{route('contactanos.store')}}" method="post">
            @csrf
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nombre" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="correo" type="text" class="form-control" id="email" placeholder="Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder=" Celular/Watsap" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="mensaje" type="text" class="form-control" id="phone-number" placeholder="Curso en el que estas interesado" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Consultar curso</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end CONTactanos-->
<!-- start footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2021   
          
           | Tecnet: <a href="https://www.facebook.com/tecnet.networking" rel="sponsored" target="_blank">facebook</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <!--<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>-->

  <script src="{{ asset('/vendor/jquery/jquery.min.js')}}"></script>
    
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
    <script src="{{asset ('/assets/js/isotope.min.js')}}"></script>
    <script src= "{{ asset ('/assets/js/owl-carousel.js')}}"></script>
    <script src= "{{ asset ('/assets/js/lightbox.js')}}"></script>
    <script src= "{{ asset ('/assets/js/tabs.js')}}"></script>
    <script src= "{{ asset ('/assets/js/video.js')}}"></script>
    <script src= "{{ asset ('/assets/js/slick-slider.js')}}"></script>
    <script src= "{{ asset ('/assets/js/custom.js')}}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>













<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/correo" method="post">
    @csrf
        <label for="">Ingrese su correo</label>
        <input type="email" name="correo">

        <label for="">Ingrese su correo</label>
        <textarea name="mensaje" ></textarea>

        <input type="submit" value="Enviar Correo">
        
    </form>

</body>
</html>
-->


<!--         ESTILOS CSS PARA EL CHAT DE MESSENGER:

#app-messenger, #app-whatsapp{
	position: fixed;
	right: 24px;
	bottom: 25px;
	width: 60px;
	z-index: 1000;
	display: none;
}
#app-whatsapp{
	bottom: 95px;
	display: block;
}
#app-messenger i, #app-whatsapp i{
	font-size: 63px;
}
#app-whatsapp i{
	color: #1ebea5;
}
#app-messenger i{
	color: #0084ff;	
}

@media screen and (max-width: 766px){
	#fb-root{
		display: none;
	}
	#app-messenger{
		display: block;
	}
}

      -->