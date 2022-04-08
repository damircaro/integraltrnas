<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" href="img/Logo.png">

    <!-- Se agregan los estilos CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources\css\app.css">
    <link rel="stylesheet" href="resources\css\whatsapp.css">
    <link rel="stylesheet" href="resources\css\chat.css">
    <link rel="stylesheet" href="{{ asset('estilos.css')}}">


    <title>INTEGRAL TRANS</title>

  </head>

  <body>


  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->


     <!--========================================================== -->
                        <!-- MENU-->
  <!--========================================================== -->

    <nav  class="navbar navbar-expand-lg navbar-light fixed-top" id="menu" style="background-color: white;">






          <img src="https://i.postimg.cc/cJxrmW6v/Logo.png" width="230" height="100">




    <button class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" >
        <span class="navbar-toggler-icon"></span>
    </button>

            <ul class="navbar-nav  collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <li class="nav-item" >
                <a class="nav-link" aria-current="page" href="#menu" style="color:black; ">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login" style="color: black; ">Ingresar</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#contenedor-formulario" style="color: black; ">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aliados" style="color: black; ">Aliados</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#servicios" style="color: black; ">Nuestro servicios</a>
              </li>
            </ul>

         </div>

    </nav>

     <!--========================================================== -->
                        <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://4.bp.blogspot.com/-ULBPv9unWmQ/UbZ9iWrGcFI/AAAAAAAACTU/yqTbAbakInQ/s1600/slide3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block" style="color:white">
                <h5 class="mb-0"><b>Vehiculos</b></h5>
                <p class="mb-0"><b></b></p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="http://4.bp.blogspot.com/-rDdip6v7XIA/UbZ9jNiILYI/AAAAAAAACTg/XqwTJcSJGjo/s1600/slide4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color:white">
              <h5 class="mb-0"><b>Transporte</b></h5>
              <p class="mb-0"><b></b></p>
            </div>
          </div>
          <div class="carousel-item" >
            <img src="http://2.bp.blogspot.com/-2LMLUoKpCv8/UbZ9ifPjgDI/AAAAAAAACTM/1Xm2rFP9Y9A/s1600/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"style="color:white">
              <h5 class="mb-0"><b>Hoteleria</b></h5>
              <p class="mb-0"><b></b></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <!--========================================================== -->
                        <!-- BOTON SUBIR-->
    <!--========================================================== -->


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">



    <style>
.scrollup {
	display:none;
	padding:20px;
	background:#024959;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	right:20px;
}
    </style>


<div class="scrollup" href="#"><i class="fa fa-angle-double-up" aria-hidden="true"></i></div>


<script>

$(document).ready(function(){

$('.scrollup').click(function(){
    $('body, html').animate({
        scrollTop: '0px'
    }, 300);
});

$(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
        $('.scrollup').slideDown(300);
    } else {
        $('.scrollup').slideUp(300);
    }
});

});

</script>



    <!--========================================================== -->
                        <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro" >
    <h1 class="p-3 fs-2 border-top border-3" id="servicios">Nuestros Servicios</h1>
     <p class="p-3  fs-4">
         <span class="text-success">INTEGRAL TRANS
     </span> Es una empresa especializada en el servicio de transporte para ejecutivos, huéspedes hoteleros, empresarios y turistas  en la ciudad de Medellín y el departamento de Antioquia.
     </p>
    </section>


 <!--========================================================== -->

                        <!-- SERVICIOS -->

    <!--========================================================== -->



    <section class="w-100" style="background-color:#2f5665;">

      <br>

      <!--Inicio del contenedor-->

      <div class="container">

          <div class="row">

              <br><br>



              <div class="col-xs-12 col-sm-6 col-md-6">

                  <a href="traslado_aeropuerto.php"><img src="img/Aeropuerto_Olaya_Herrera-Medellin.JPG" alt="Generic placeholder image"  class="d-block w-100"></a>

                  <div style="color:white">

                      <h5>TRASLADO AL AEROPUERTO</h5>




                      <div class="text-justify">

                          <p>Con previa reservación le realizamos su traslado al aeropuerto desde su oficina o residencia. Aeropuerto José María Córdoba (Rionegro) – Medellín Medellín – Aeropuerto José María Córdoba (Rionegro) Aeropuerto Olaya Herrera (Medellín) – Hotel Hotel – Aeropuerto Olaya Herrera (Medellín)</p>

                      </div>

                  </div>




                  <button type="button" class="open-modal btn btn-secondary" data-open="modal1">Ver detalle <i class="fa fa-eye"></i></button>

                  <a type="button" class="btn btn-info" title="Añadir este producto al carrito" href="{{ route('cliente.create') }}">Solicitar<i class="fa fa-taxi"></i></a>
<br><br>
              </div>





              <div class="col-xs-12 col-sm-6 col-md-6">

                  <a href="traslado_ciudad.php"><img src="img/traslado_ciudad.jpg" alt="Generic placeholder image"  class="d-block w-100"></a>

                  <div style="color:white">

                      <h5>TRASLADO EN LA CIUDAD</h5>





                      <div class="text-justify">

                          <p>Disposición por horas dentro del área metropolitana le asignamos conductor que le trasladara a diferentes sitios que usted requiera ,cenas, reuniones, etc. permaneciendo el vehículo a su disposición en el tiempo que sea necesario.</p>

                      </div>

                  </div>

                  <button id='myBtn2' class='datos btn btn-secondary'>Ver detalle <i class="fa fa-eye"></i></button>

                  <a type="button" class="btn btn-info" title="Añadir este producto al carrito" href="{{ route('cliente.create') }}">Solicitar<i class="fa fa-taxi"></i></a>
                  <br><br>
              </div>



              <!-- limpiar error de tamaño por defecto -->

              <div class="clearfix visible-sm-block"></div>



              <div class="col-xs-12 col-sm-6 col-md-6">

                  <a href="puerta_puerta.php"><img src="img/puerta_a_puerta.jpg" alt="Generic placeholder image"  class="d-block w-100"></a>

                  <div style="color:white">

                      <h5>PUERTA A PUERTA</h5>





                      <div class="text-justify">

                          <p>Trasladamos a nuestros clientes desde la puerta de su casa hasta la puerta de su oficina.</p>

                      </div>

                  </div>

                  <button type="button" class="open-modal btn btn-secondary" data-open="modal2">Ver detalle <i class="fa fa-eye"></i></button>
                  <a type="button" class="btn btn-info" title="Añadir este producto al carrito" href="{{ route('cliente.create') }}">Solicitar<i class="fa fa-taxi"></i></a>
                  <br><br>
              </div>



              <div class="col-xs-12 col-sm-6 col-md-6">

                  <a href="viajes.php"><img src="img/viajes.jpg" alt="Generic placeholder image"  class="d-block w-100"></a>

                  <div style="color:white">

                      <h5>VIAJES</h5>





                      <div class="text-justify">

                          <p>Trasládese en nuestras confortables unidades a cualquier parte del interior de Medellín o del departamento de Antioquia, bien sea por viajes de negocio o turismo. Si usted desea nuestros conductores lo esperan el tiempo necesario para el traslado de nuevo a su destino.</p>

                      </div>

                  </div>

                  <button type="button" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#exampleModal111">Ver detalle <i class="fa fa-eye"></i></button>
                  <a type="button" class="btn btn-info" title="Añadir este producto al carrito" href="{{ route('cliente.create') }}">Solicitar<i class="fa fa-taxi"></i></a>
<br><br>
              </div>



</div>


<!--Fin del contenedor-->

</section>
<br>


<!--========================================================== -->
                        <!-- SECCION ALIADOS-->
<!--========================================================== -->

<section>



    <div class="container w-50 m-auto text-center" id="aliados">
      <h1 class="mb-5 fs-2">Aliados</h1> </div> <div class="mt-5 text-center">
        <marquee behavior="alternate">
        <a href="https://www.llerasexpresshotel.com/" target="_blank" rel="noopener noreferrer"><img  src="https://1.bp.blogspot.com/-g-P2uiiWJFE/Wlvr2P-__II/AAAAAAAAVFU/QtE0MtCBI3Y7W8z5gRW_YraUfmq7Px4rgCLcBGAs/s1600/lleras.jpg">
        </a>
        <a href="http://madeiro.medellin-hotels.com/es/" target="_blank" rel="noopener noreferrer"><img  src="https://1.bp.blogspot.com/-7lFDad1_O3A/WlvrRx_2TnI/AAAAAAAAVFM/TwyVWaOvl8A0lk4M_VG5PQM2gfzyld9nwCLcBGAs/s1600/madeiro.jpg">
        </a>
        <a href="https://co.hoteles.com/ho1174746880/hotel-jardin-de-laureles-medellin-colombia/" target="_blank" rel="noopener noreferrer"><img  src="https://1.bp.blogspot.com/-kvZZVmKPORQ/UcC6-bTjq_I/AAAAAAAACYU/Qi5kSoqN5zg/s1600/hoteljardin.jpg">
        </a>
      </marquee>
      </div>
    </section>
<!--========================================================== -->
                        <!-- MAPA-->
<!--========================================================== -->
<section>
    <br>
    <div id="local" class="border-top border-2">
        <div class="mapa"> </div>
        <div>
            <br>
            <div class="wrapper-local  text-center " >
                <h2 >Nuestra Ubicación</h2>

            </div>
        </div>
    </div>



<div id="map"></div>




<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Carrera%2043%2031-148%20Oficina%20302+(integral%20trans)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/">Car GPS</a></iframe></div>




</section>


<!--========================================================== -->
                      <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->

<section>
    <script>
    function sololetras(evento){
        key = evento.keyCode || evento.which;
          teclado = String.fromCharCode(key).toLocaleLowerCase();
          letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
          especiales = "8-32-37-38-39-46-164";

          teclado_especial = false;
          for (var i in especiales) {
              if (key == especiales[i]) {
                  teclado_especial = true; break;
              }
          }
          if (letras.indexOf(teclado) == -1 && !teclado_especial) {
              return false;
          }
        }
</script>

<script >
    function validanumero(elemento){
  if (!/^([0-9])*$/.test(elemento.value)){
      alert("Ingrese solo numeros");
      elemento.value = '';
  }
}
    </script>

    <!-- <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">-->
         <div class="text-center mb-4" id="titulo-formulario">
           <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
           <h2>Contáctenos</h2>
           <p class="fs-5">Déjenos su mensaje para brindarle la información y asesoría requerida</p>
         </div>

         <div class="contenedor-formulario">
           <div class="wrap">
               <form action="{{ route('contacto.store') }}" class="formulario" name="formulario_registro" method="POST" id="contenedor-formulario">

                   <div>
                    @csrf

                  {{--   <select class="form-control" name="equipo_id" id="equipo_id" >
                        @foreach ($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->tipo}}</option>
                        @endforeach
                    </select>

 --}}




                       <div class="input-group">
                           <input type="text" id="namee" name="namee" placeholder="Escriba su nombre:" onkeypress="return sololetras(event)" required>
                       </div>

                       <div class="input-group">
                           <input type="email" name="email" id="email" placeholder="Escriba su correo:"required >
                       </div>

                       <div class="input-group">
                           <input class="form-control"  name="cell_phone" id="cell_phone"  placeholder="Escriba su celular:"  maxlength="10" onchange="return validanumero(this)" required>
                       </div>

                       <div class="input-group">
                        <input type="text" name="message" id="message" placeholder="Escriba su inquietud:" required >
                    </div>
                        <button type="submit" class="btn btn-primary" >Registrar</button>
                        <button type="reset" class="btn btn-secondary" value="Borrar datos">Borrar datos</button>

                       </p>
                   </div>
               </form>
           </div>
       </div>

     <!--</div>-->
   </section>

    <!--========================================================== -->
                        <!--CHAT FLOTANTE-->
    <!--========================================================== -->
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        /* Button used to open the chat form - fixed at the bottom of the page */
        .open-button {
          background-color: #4e6064;
          color: white;
          padding: 16px 20px;
          border-radius: 30px;
          cursor: pointer;
          opacity: 0.8;
          position: fixed;
          bottom: 60px;
          right: 77px;
          width: 280px;

        }

        /* The popup chat - hidden by default */
        .chat-popup {
          display: none;
          position: fixed;
          bottom: 0;
          right: 100px;
          border: 3px solid #f1f1f1;
          border-radius: 15px;
          z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
          max-width: 300px;
          padding: 10px;
          background-color: #4e6064;
          border-radius: 15px;
          color: #fff;
        }

        /* Full-width textarea */
        .form-container textarea {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
          resize: none;
          min-height: 200px;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
          background-color: #ddd;
          outline: none;
        }

        .form-container input {
          width: 100%;
          padding: 5px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
          resize: none;
          min-height: 20px;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
          background-color: #345864;
          color: white;
          padding: 16px 20px;
          border-color: white;
          border-radius: 15px;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: #345864;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
        </style>

    </head>
    <body>
    <section>
    <button class="open-button" onclick="openForm()">Chatea con nosotros</button>

    <div class="chat-popup" id="myForm">

      <form action="{{ route('chat.store') }}" class="form-container" method="POST">
        @csrf

        <h1>Integral Trans</h1>



        <label for="msg"><b>En Linea</b></label>
        <textarea placeholder="Escriba su mensaje.." name="message" required></textarea>

        <input class="input" type="text" name="status" placeholder="Estado:">

        <button type="button" class="btn cancel" onclick="closeForm()">Cancelar</button>
        <button type="submit" class="btn">Enviar</button>
        <button type="reset" class="btn">Borrar datos</button>

      </form>
    </div>

    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
</section>
    </body>
    </html>


        <!--========================================================== -->
                        <!--whahsaap-->
        <!--========================================================== -->
        <style>
            .btn-whatsapp {
                display:block;
                width:70px;
                height:110px;
                color#fff;
                position: fixed;
                left:7px;
                bottom:20px;
                border-radius:30%;
                line-height:80px;
                text-align:center;
                z-index:999;
        }</style>
        <section>
            <div class="btn-whatsapp">
                <a href="https://api.whatsapp.com/send?phone=3146168497" target="_blank">
                <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
                </a>
                </div>
            </section>

        <!--========================================================== -->


<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->
<section>

<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap" style="background-color:#2f5665;" >
  <p class="fs-5 px-3  pt-3 " style="color: white;">UST. &copy; Todos Los Derechos Reservados 2022</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
  </div>
</footer>
</section>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>




<!--========================================================== -->
                        <!--MODAL-->
<!--========================================================== -->









      <div class="modal" id="modal2">
        <div class="modal-dialog">
          <header class="modal-header">
            The header of the second modal
            <button class="close-modal" aria-label="close modal" data-close>
              ✕
            </button>
          </header>
          <section class="modal-content">
            <p><strong>Press ✕, ESC, or click outside of the modal to close it</strong></p>

          </section>
          <footer class="modal-footer">
            The footer of the second modal
          </footer>
        </div>
      </div>



<!-- css modal -->
<style>

    /* MODAL
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem;
  background: var(--black);
  cursor: pointer;
  visibility: hidden;
  opacity: 0;
  transition: all 0.35s ease-in;
}

.modal.is-visible {
  visibility: visible;
  opacity: 1;
}

.modal-dialog {
  position: relative;
  max-width: 800px;
  max-height: 80vh;
  border-radius: 5px;
  background: var(--white);
  overflow: auto;
  cursor: default;
}

.modal-dialog > * {
  padding: 1rem;
}

.modal-header,
.modal-footer {
    color: white;
  background:#2f5665;
}

.modal-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.modal-header .close-modal {
  font-size: 1.5rem;
}

.modal p + p {
  margin-top: 1rem;
}




</style>



 <!-- js modal -->
  <script>
const openEls = document.querySelectorAll("[data-open]");
const closeEls = document.querySelectorAll("[data-close]");
const isVisible = "is-visible";

for (const el of openEls) {
  el.addEventListener("click", function() {
    const modalId = this.dataset.open;
    document.getElementById(modalId).classList.add(isVisible);
  });
}

for (const el of closeEls) {
  el.addEventListener("click", function() {
    this.parentElement.parentElement.parentElement.classList.remove(isVisible);
  });
}

document.addEventListener("click", e => {
  if (e.target == document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible").classList.remove(isVisible);
  }
});

document.addEventListener("keyup", e => {
  // if we press the ESC
  if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
    document.querySelector(".modal.is-visible").classList.remove(isVisible);
  }
});
  </script>







  </body>
</html>
