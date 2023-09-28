<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "registro";


$enlace = mysqli_connect ($servidor, $usuario, $clave, $basededatos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> I N T E G S E L | Seguridad Electrónica</title>
    <script src="https://kit.fontawesome.com/df49d42351.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" href="ima/pestaña_de.ico">
   <link rel="stylesheet" href="estilo.css">
   <link rel="stylesheet" href="estiloformulario.css">
  
</head>
<body>  
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-regular fa-comments"></i>
                    <div class="content-customer-support">
                     <span class="text">Soporte al cliente</span>
                    <span class="number">+52 55 51 20 79 00</span>
                </div>
            </div>

            <div class="container-logo">
                <img src="ima/logo-removebg-preview.png" alt="">
           
            </div>

            <div class="container-user">
                <i class="fa-solid fa-user"></i>
             <span> I N T E G S E L. </span>
             <SPan> Recuerda que tu seguridad es lo mas <br>importante para nosotros </SPan>
            <div class="content-shopping-cart">
               

                 </div>
            </div>
        </div>
    </div>
         
    <div class="container-navbar">
        <nav class="navbar container"> 
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"> 
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href="#" class="enlace">
            
            </a>

            <ul>
                <li> <a href="index.html" > I N I C I O </a></li>
                <li><a href="nosotros.html"> N O S O T R O S </a></li>
                <li><a href="Galeria.html"> G A L E R I A </a></li>
                <li><a href="Servicio.html"> S E R V I C I O </a></li>
                <Li><a href="#" class="active"> C O N T A C T O </a></Li>
            </ul>
        </nav>
    </div>

    </header>

    <!--aparatado de formulario-->

   
    <p class="t_formulario"> C O N T A C T A N O S </p>

    <form  name="ejemplo"  method="post" action="#"  class="needs-validation" id="MiFormulario" novalidate >
  

    <div class="has-validation position-relative">
    <p class="cur">Nombre completo</p>
    <input type="text"   name="nombre"   placeholder="nombre" class="form-control" id="validationTooltip01"  required>
    <div class="valid-feedback">
        !Excelente con el nombre¡
    </div>
    <div class="invalid-feedback">
    !Porfavor pon tu nombre completo¡
    </div>
</div>

<div class="has-validation position-relative">
    <p class="cur">Email- Gmail / Outlook</p>
    <input type="email"  name="correo"   placeholder="correo" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
    <div class="valid-feedback">
        !Excelente con ese correo¡
    </div>
    <div class="invalid-feedback">
    !Porfavor completa tu correo electronico¡
    </div>
</div>

    <div class="has-validation position-relative">
    <p class="cur">Numero telefonico</p>
    <input type="text"   name="telefono" placeholder="telefono" class="form-control" id="validationTooltip01"  required>
    <div class="valid-feedback">
        !Excelente¡
    </div>
    <div class="invalid-feedback">
    !Porfavor pon tu numero telefonico¡
    </div>
</div>

    <div class="has-validation position-relative">
    <p class="cur">Dejanos un comentario o un mensaje sobre lo que quieres saber o preguntar</p>
    <textarea type="text" cols="15" rows="5"  name="mensaje"  placeholder="mensaje"  class="form-control" id="validationTooltip01"  required></textarea>
    <div class="valid-feedback">
        !Excelente, nos comicaremos contigo¡
    </div>
    <div class="invalid-feedback">
    !escribe un mensaje bien redactado¡
    </div>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepto terminos y condiciones
      </label>
      <div class="invalid-feedback">
        validar antes de enviar
      </div>
    </div>

    <input type="submit"  name="registro"   class="button">
    <input type="reset" class="reset-button">

    </form>
     

    <!--boton modal-->

    <div id="capa">
	<div>
		<div class="title">Confirma el envio del formulario</div>
		<div class="text">Estas seguro de enviar los valores introducidos en el formulario?</div>
		<div class="buttons">
			<input type="button" class="button" value="Enviar" id="ok">&nbsp;
			<input type="button" class="button" value="Cancelar" id="ko">
		</div>
	</div>
</div>



    <!--Ubicacion en maps-->

    <p class="t_maps"> U B I C A C I O N &nbsp E M P R E S A R I A L </p>

    <iframe class="ubi_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3759.374804445229!2d-99.05979812409271!3d19.568436981740266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f15b4658324f%3A0x18d0d92379a61eb8!2sINTEGSEL!5e0!3m2!1ses-419!2smx!4v1695314888062!5m2!1ses-419!2smx" 
        width="90%" height="600" style="border: 0.5rem;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  

    <!--Horarios de atencion-->
    <section>
    <h1 class="horario">H O R A R I O S &nbsp D E &nbsp A T E N C I Ó N</h1>
    <div class="horario-content">
       <div class="jsjs">
        <p class="invita">"Le extendemos una cordial invitación a visitar Integsel <br> y descubrir nuestras soluciones innovadoras. <br>Esperamos contar con su presencia."</p>
        <div class="js1">
            <p class="dias">Lunes a Viernes</p>
            <p class="hora">9:00 am a 6:00 pm</p>
            <p class="dias">Sábados</p>
            <p class="hora">9:00 am a 2:00 pm</p>
            </div>
            </div>
        <div class="jsjs">
            <div class="js1">
            <p class="dias">Aceptamos</p>
            <p class="dias">Efectivo, Transferencias Electrónicas</p>
            <p class="dias"> I N T E G S E L</p>
            <p class="dias">Rio Panuco Colonia Ampliación Tulpetlac<br>Ecatepec Estado de México</p>
            <p class="dias">¡LLÁMANOS!<br>55 51 20 79 00</p>
            </div>    
        </div>
            </div>
</section>

   <!--apartado de informacion-->
  
  <footer class="footer">
        <div class="container container-fooder">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Infomación de contacto</p>
                    <ul class="dtfe">
                        <li>Dirección: Calle Río Panuco Colonia Ampliación Tulpetlac Ecatepec de Morelos, 55400 Estado de Mexico, Méx.</li>
                        <li>Telefono: 55 51 20 79 00</li>
                        <li>Email: servicios@integsel.com.mx</li>
                    </ul>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/Integsel.1/about">
                        <span class="facebook"><i class="fa-brands fa-facebook"></i></span></a>
                        <a href="">
                        <span class="instagram"><i class="fa-brands fa-instagram"></i></span></a>
                        <a href="">
                        <span class="tiktok"><i class="fa-brands fa-tiktok"></i></span></a>
                        <a href="">
                        <span class="twitter"><i class="fa-brands fa-twitter"></i></span></a>
                        <span></span>
                    </div>
                </div>

                <div class="information">
                    <p class="title-footer">
                        informacion...
                    </p>
                    <ul>
                        <li><a href="#">Acerca de nosotros</a></li>
                        <li><a href="#">Informacion de la compania</a></li>
                        <li><a href="#">Politicas de privacidad</a></li>
                        <li><a href="#">Terminos y condiciones</a></li>
                        <li><a href="#">Contactanos</a></li>
                    </ul>
                </div>

               
                <div class="newsletter">
                    <p class="title-footer"> Boletin informativo </p>
                    <div class="con-1">
                        <p >
                            Estimados clientes y socios,
                            En Integsel, nos enorgullece ofrecer soluciones de seguridad y comunicación 
                            de vanguardia para proteger su empresa y mantenerla conectada en todo momento. 
                            Con más de una década de experiencia en el sector, nos hemos convertido en un 
                            referente confiable en el mercado.
                            En Integsel, estamos comprometidos con la seguridad y la comunicación empresarial. Confíe en nosotros para proteger lo que más le importa.
                            Si desea obtener más información sobre nuestros servicios o una consulta gratuita, no dude en ponerse en contacto con nosotros. <br>
                            Atentamente <br>
                            Ing. Juan Luis Zarate Calderón <br>
                            Gerente General <br>
                            Integsel - Soluciones en Seguridad y Comunicación empresarial
                        </p>
                        
                    </div>
                </div>
            </div>


            <div class="copyright">
            <p>
                Desarrollado por Integsel &copy; 2023
            </p>
           
        </div>
        <img src="ima/payment.png" alt="Pagos"> 
        </div>
   </footer>
   <div class="container-what">
   <a href="https://wa.me/525591924566?text=Me%20proporcionarias%20más%20información%20?" target="_blank">
    <img class="btn_wha" src="ima/whatsapp-line.svg" alt="">
   </a>
    </div>
</body>


<?php

    if(isset($_POST['registro'])){

        $nombre=   $_POST ['nombre'];
        $correo=   $_POST ['correo'];
        $telefono= $_POST ['telefono'];
        $mensaje=  $_POST ['mensaje'];
       

        $insertardatos = "INSERT INTO datos1 VALUES ('$nombre' , '$correo' , '$telefono' , '$mensaje' , '' )";
        $ejecutarinsertar = mysqli_query ($enlace, $insertardatos);   
    }
?>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

</script>

</html>