<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100" style="background-image: url('/images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
                    <a href="javascript:history.back()" class="volver" >
                        <img src="/images/img-01.png" alt="IMG">Volver al inicio</a>
				</div>



				<form action="{{ route('cliente.store') }}" method="POST" class="contact100-form validate-form">
                    @csrf
					<span class="contact100-form-title">
                        ¡Bienvenido!
                        <br>
						SOLICITE EL SERVICIO.
					</span>

					<div class="wrap-input100 validate-input" data-validate = "El nombre es requerido">
						<input class="input100" type="text" name="name" placeholder="Nombre:">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "El apellido es requerido">
						<input class="input100" type="text" name="last_name" placeholder="Apellidos:">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>


                    <div class="wrap-input100 validate-input" data-validate = "El número documento es requerido">
                        <select name="document_type" class="form-control" id="" required>
                            <option >Seleccione el tipo de documento</option>
                            @foreach($ust_document_type as $document)
                            <option value="{{$document->id}}">{{$document->document_name}}</option>
                            @endforeach
                        </select>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-list-ol" aria-hidden="true"></i>
						</span>
					</div>



                    <div class="wrap-input100 validate-input" data-validate = "El número documento es requerido">
						<input class="input100" type="text" name="document" placeholder="Número identificación:">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-list-ol" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "El correo electrónico es requerido">
						<input class="input100" type="text" name="email" placeholder="Correo electrónico:">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "El número celular es requerido">
						<input class="input100" type="text" name="phone" placeholder="Número celular:">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone-square" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "La ubicación es requerida">
						<input class="input100" type="text" name="address" placeholder="Ubicación:">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100">
						<input type="file" class="input100 upload" name="photo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-picture-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">Registrar</button>
                        <button type="reset" class="contact100-form-btn2">Borrar datos</button>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
