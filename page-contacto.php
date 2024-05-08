<?php get_header(); ?>
<!-- subheader -->
<section id="subheader" data-stellar-background-ratio=".3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contacto</h1>
                <div class="small-border-deco"><span></span></div>
                <ul class="crumb">
                    <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
                    <li class="sep"></li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">


    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-bottom: 50px;">
                <h2 style="color: #045c8a;">ESTAMOS PARA ASESORARTE DE PRINCIPIO A FIN</h2>
                <h3>PERMITENOS SER LA PIEZA CLAVE EN EL DESARROLLO DE TUS PROYECTOS</h3>
            </div>
            <div class="col-md-8">

                <div class="de_tab tab_style_2">

                    <div class="de_tab_content tc_style-1">

                        <div id="tab1">

                            <div class="row">
                                <div class="col-md-8">


                                    <p></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="map-container">
                                        <img src="<?php bloginfo('template_url'); ?>/images/mapa.PNG" alt="" />
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <address class="address-style-2">
                                        <span>Santiago de Querétaro, Querétaro.</span>
                                        <span><strong>Tel:</strong> (442) 110 0788 </br> (442) 237 3145 </br> (442) 784 9686</span>
                                        <span><strong>Email:</strong><a href="mailto:contacto@ancop.com.mx">contacto@ancop.com.mx</a></span>
                                    </address>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="padding30" data-bgcolor="#f5f5f5">

                    <h3>Envianos un mensaje
                        <span class="tiny-border"></span>
                    </h3>
                    <div id='contact_form'>
                        <div class="row">
                            <div class="col-md-12">
                                <div id='name_error' class='error'>Nombre.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Nombre">
                                </div>

                                <div id='email_error' class='error'>Inserta un email valido.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Email">
                                </div>

                                <div id='phone_error' class='error'>Número de teléfono.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Numero de telefono">
                                </div>

                                <div id='message_error' class='error'>Mensaje.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Mensaje"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div id='submit'>
                                    <button class="btn btn-line" onclick="sendmail()">Enviar</button>
                                </div>
                                <div id='mail_success' class='success'>Tu mensaje fue enviado.</div>
                                <div id='mail_fail' class='error'>Lo sentimos, tuvimos problemas al enviar tu mensaje.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<?php get_footer(); ?>