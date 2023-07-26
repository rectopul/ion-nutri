<footer class="container-fluid rodape pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 logo">
                <figure>
                    <?php 
                        echo '<img src="' .wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ))[0]. '" />' ;
                    ?>
                </figure>
            </div>

            <div class="col-12 col-md d-flex blocks">
                <div>
                    <h3>Contatos</h3>
                    <ul>
                        <li><a href="#">contato@ionnutri.com.br</a></li>
                        <li><a href="#">claudia.gomes@ionnutri.com.br</a></li>
                        <li><a href="#">(11) 3164-1214</a></li>
                        <li><a href="#">(11) 9 1081-3015</a></li>
                    </ul>
                </div>

                <div>
                    <h3>Páginas</h3>
                    <?php wp_nav_menu( ['theme_location' => 'menu-1' ] ); ?>
                </div>

                <div>
                    <h3>Localização</h3>

                    <p>Rua Apiacás, 247 sobreloja, Perdizes, São Paulo, SP.</p>

                    <figure>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.941856714418!2d-46.67901282384727!3d-23.5345935606109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57f0a2e015db%3A0x8b193defc6f1aeb!2sR.%20Apiac%C3%A1s%2C%20247%20-%20Pompeia%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005017-020!5e0!3m2!1spt-BR!2sbr!4v1690400660968!5m2!1spt-BR!2sbr" width="250" height="165" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <img src="<? echo get_bloginfo( 'template_url' ). "/assets/img/map.png"; ?>" alt="mapa"> -->
                    </figure>

                    <a href="" class="white-link"><span>Código de Direitos dos Pacientes</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">©ionnutri - All Rights Reserved</div>
    
                <div class="col-6 text-end d-flex justify-content-end align-items-center">
                    <span><a href=""><i class="fa-brands fa-instagram"></i></a></span>
                    <span><a href=""><i class="fa-regular fa-paper-plane"></i></a></span>
                    <span><a href=""><i class="fa-brands fa-twitter"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>