

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

            <form action="{{ route('contacto.store') }}" method="POST" class="contact100-form validate-form">
                @csrf
                   <div>



                    <div class="wrap-input100 validate-input" data-validate = "El número documento es requerido">

                        <select name="business" class="form-control" id="business" required>

                            <option >Seleccione el tipo de documento</option>
                            @if (is_array($ust_business) || is_object($ust_business))
                            @foreach($ust_business as $bus)




                            <option value="{{$bus->id}}">{{$bus->name}}</option>

                            @endforeach

                            @endif



                        </select>


					</div>

   



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
