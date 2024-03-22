<?php get_header(); ?>
<!-- subheader -->
<section id="subheader" data-stellar-background-ratio=".3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="designer-font">Contacto</h1>
                <div class="small-border-deco"><span></span></div>
                <ul class="crumb">
                    <li><a href="index.html">Inicio</a></li>
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
            <div class="col-md-8">
                <div class="de_tab tab_style_2">

                    <div class="de_tab_content tc_style-1">

                        <div id="tab1">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="map-container">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840289118618!2d144.9537363149519!3d-37.817209742012885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1462781318185" width="600" height="380" frameborder="0" style="border: 0" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <address class="address-style-2">
                                        <span>Calle: Jose Bustamante, #130-A, Colonia Valle Alameda, Querétaro</span>
                                        <span><strong>Tel:</strong>(442) 237 3145 / (442) 784 9686</span>
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
                    <form name="contactForm" id='contact_form' method="post" action='email.php'>
                        <div class="row">
                            <div class="col-md-12">
                                <div id='name_error' class='error'>Nombre.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Nombre">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Email">
                                </div>

                                <div id='phone_error' class='error'>Numero de telefono.</div>
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
                                    <input type='submit' id='send_message' value='Enviar' class="btn btn-line">
                                </div>
                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
</div>
<?php get_footer(); ?>