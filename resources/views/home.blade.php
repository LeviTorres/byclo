@extends('layouts.layout')
@section('title','Inicio')
@section('content')
    <div class="home">
       <!--     <img src="{{asset('assets/front.jpg')}}" alt=""> -->
            <div class="home-logo">
                <img src="{{asset('assets/IsotipoByclo.png')}}" alt="">
            </div>
            <div class="home_social">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
            </div>
    </div>
    <div class="container_home">
        <div class="container_question">
            <p class="question_title">¿QUE ES <strong>BYCLO</strong>?</p>
            <p class="question_p">Somos un estudio de ciclismo en interior donde nos encanta ejercitarnos comodamente, en un ambiente óptimo para tí</p>
        </div>
        <div class="container_steps">
            <div class="container_card">
                <div class="card">
                    <img src="{{asset('assets/inscribete.png')}}" alt="">
                    <p><strong>1. </strong>Inscríbete llenando un formulario con tus datos, los cuales están protegidos<br><p class="privacity_p">*consulta aviso de privacidad</p></p>
                </div>
                <div class="card">
                    <img src="{{asset('assets/compra.png')}}" alt="">
                    <p><strong>2. </strong>Compra tus clases en línea, por clase o por paquete, con tarjeta de crédito, débito o Pay Pal</p>
                </div>
                <div class="card">
                    <img src="{{asset('assets/agenda.png')}}" alt="">
                    <p><strong>3. </strong>Ingresa en nuestro calendario semanal y aparta tus clases con uno de nuestros instructores</p>
                </div>
                <div class="card">
                    <img src="{{asset('assets/entrena.png')}}" alt="">
                    <p><strong>4. </strong>¡Listo!, disfruta del mejor entrenamiento en el mejor estudio y con el mejor equipo 100% profesional</p>
                </div>
            </div>
            <div class="container_button">
                <button class="button_start">inicia aquí</button>
                <button class="button_buy">comprar clases</button>
            </div>
            <div class="container_buy_pay">
                <p>aceptamos</p>
                <div class="icon_pay">
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-paypal"></i>
                </div>
            </div>
        </div>
        <div class="container_reserve">
            <div class="reserve_information">
                <div class="reserve">
                    <p class="first"><strong>RESERVA</strong> TU CLASE</p>
                    <p class="second">Estás a un click para <strong>reservar tu clase y entrenamiento</strong></p>
                    <p class="third">Ingresa en el calendario para revisar la disponibilidad de nuestros coaches</p>
                    <button>comprar clases</button>
                </div>
            </div>
            <div class="reserve_image">
            </div>
        </div>
        <div class="container_contact">
            <div class="container_contact_form">
                <div class="container_contact_title_form">
                    <p class="p_first"><strong>¡CONTACTANOS! </strong>NOS ENCANTA LEERTE</p>
                    <p class="p_second">Todas nuestras<strong> bicicletas</strong> cuentan con tecnologia de punta y son altamente eficaces para que tu entrenamiento sea seguro, comodo y ¡extremadamente divertido!</p>
                </div>
                <div class="form_contact">
                    <input type="text" placeholder="Nombre" id="nombre">
                    <input type="email" placeholder="Correo" id="correo">
                    <textarea name="comentario" id="comentario" placeholder="Comentarios" ></textarea>
                    <button>ENVIAR</button>
                </div>
            </div>
            <div class="container_contact_information">
                <div class="container_contact_title_information">
                    <p class="contact_first">BYCLO</p>
                    <p class="contact_second">(33) <strong>3611-2570</strong></p>
                    <p class="contact_third">ACUEDUCTO 3413 </p>
                    <p class="contact_fourth">COLINAS DE SAN JAVIER <br> ZAPOPAN, JAL</p>
                    <p class="contact_fifth">hola@byclostudio.com</p>
                </div>
            </div>
        </div>
        <div class="container_maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.043949288025!2d-103.4309617851504!3d20.74901268615061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae542ece1317%3A0xeecefc5193fdc83a!2sAv.%20Acueducto%2C%20Jardines%20del%20Valle%2C%20Zapopan%2C%20Jal.!5e0!3m2!1ses!2smx!4v1642110453522!5m2!1ses!2smx"  height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection