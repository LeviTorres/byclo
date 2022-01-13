@extends('layouts.layout')
@section('title','Inicio')
@section('content')
    <div class="container_home">
        <div class="container_question">
            <p class="question_title">¿QUE ES <strong>BYCLO</strong>?</p>
            <p class="question_p">Somos un estudio de ciclismo en interior donde nos encanta ejercitarnos comodamente, en un ambiente óptimo para tí</p>
        </div>
        <div class="container_steps">
            <div class="container_card">
                <div class="card">
                    <i class="fas fa-clipboard-list"></i>
                    <p><strong>1. </strong>Inscríbete llenando un formulario con tus datos, los cuales están protegidos<br><p class="privacity_p">*consulta aviso de privacidad</p></p>
                </div>
                <div class="card">
                    <i class="fas fa-credit-card"></i>
                    <p><strong>2. </strong>Compra tus clases en línea, por clase o por paquete, con tarjeta de crédito, débito o Pay Pal</p>
                </div>
                <div class="card">
                    <i class="fas fa-calendar-check"></i>
                    <p><strong>3. </strong>Ingresa en nuestro calendario semanal y aparta tus clases con uno de nuestros instructores</p>
                </div>
                <div class="card">
                    <i class="fas fa-biking"></i>
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
            <div>
                <div>
                    <p><strong>¡CONTACTANOS!</strong>NOS ENCANTA LEERTE</p>
                    <p>Todas nuestras<strong>bicicletas</strong> cuentan con tecnologia de punta y son altamente eficaces para que tu entrenamiento sea seguro, comodo y ¡extremadamente divertido!</p>
                </div>
                <div>
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="Correo">
                    <textarea name="textarea" id="" cols="30" rows="10" placeholder="Comentarios"></textarea>
                    <button>Enviar</button>
                </div>
            </div>
            <div>
                <div class="">
                    <div class="">
                        <p class="">BYCLO</p>
                        <p class="">(33) <strong>3611-2570</strong></p>
                        <p class="">ACUEDUCTO 3413 - COLINAS DE SAN JAVIER
                            <br> ZAPOPAN, JAL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection