<?php
/**
 * This file has been left empty on purpose.
 *
 * @link https://core.trac.wordpress.org/ticket/54272
 *
 * @package on-nutri
 * @since 1.0.0
 */
?>
<?php get_header(); ?>

<main>
    <!-- Slides -->
    <div class="container-fluid">
        <div class="row slides-container">
            <div class="slides">
                <div style="background-image: url(<?php echo wp_get_attachment_image_src( get_theme_mod( 'image_slide_1' ), 'full' )[0]; ?>);">
                    <div class="container">
                        <h1><?php echo get_theme_mod( 'title_slide_1' ); ?></h1>
                        <p><?php echo get_theme_mod( 'content_slide_1' ); ?></p>
                        <footer>
                            <a href="<?php echo get_theme_mod( 'link_slide_1' ); ?>" class="kit">Comprar Kit</a>
                            <a href="<?php echo get_theme_mod( 'whats_slide_1' ); ?>" class="wpp-button">
                                <span>
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Tire suas dúvidas pelo Whatsapp
                                </span>
                            </a>
                        </footer>
                    </div>
                </div>

                <div style="background-image: url(<?php echo wp_get_attachment_image_src( get_theme_mod( 'image_slide_2' ), 'full' )[0]; ?>);">
                    <div class="container">
                        <h1><?php echo get_theme_mod( 'title_slide_2' ); ?></h1>
                        <p><?php echo get_theme_mod( 'content_slide_2' ); ?></p>
                        <footer>
                            <a href="<?php echo get_theme_mod( 'link_slide_2' ); ?>" class="kit">Comprar Kit</a>
                            <a href="<?php echo get_theme_mod( 'whats_slide_2' ); ?>" class="wpp-button">
                                <span>
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Tire suas dúvidas pelo Whatsapp
                                </span>
                            </a>
                        </footer>
                    </div>
                </div>

                <div style="background-image: url(<?php echo wp_get_attachment_image_src( get_theme_mod( 'image_slide_1' ), 'full' )[0]; ?>);">
                    <div class="container">
                        <h1><?php echo get_theme_mod( 'title_slide_2' ); ?></h1>
                        <p><?php echo get_theme_mod( 'content_slide_2' ); ?></p>
                        <footer>
                            <a href="<?php echo get_theme_mod( 'link_slide_2' ); ?>" class="kit">Comprar Kit</a>
                            <a href="<?php echo get_theme_mod( 'whats_slide_2' ); ?>" class="wpp-button">
                                <span>
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Tire suas dúvidas pelo Whatsapp
                                </span>
                            </a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Test Section -->
    <div class="container-fluid test_section_container">
        <div class="container test_section mt-5 py-5">
            <div class="row">
                <div class="col-12 col-md-5">
                    <figure>
                        <?php echo wp_get_attachment_image( get_theme_mod( 'image_session_test' ), 'full' ) ?>
                    </figure>
                </div>
                <div class="col-12 col-md">
                    <small class="mb-3"><?php echo get_theme_mod( 'test_session_subtitle' ) ?></small>
                    <h2 class="my-5"><?php echo get_theme_mod( 'test_session_title' ) ?></h2>
                    <p class="mb-5 pb-5"><?php echo get_theme_mod( 'test_session_description' ) ?></p>
                    <a class="default_link" href="<?php echo get_theme_mod( 'test_session_link' ) ?>">QUERO COMPRAR AGORA O MEU TESTE</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Por que fazer o teste -->

    <div class="container-fluid why_take_test py-5">
        <div class="container">
            <div class="row text-end">
                <div class="col-12 col-md pe-md-5">
                    <small class="mb-3"><?php echo get_theme_mod( 'test_session_subtitle_2' ) ?></small>
                    <h2 class="my-5"><?php echo get_theme_mod( 'test_session_title_2' ) ?></h2>
                    <p class="mb-5 pb-5"><?php echo get_theme_mod( 'test_session_description_2' ) ?></p>
                    <a class="default_link" href="<?php echo get_theme_mod( 'test_session_link' ) ?>">QUERO COMPRAR AGORA O MEU TESTE</a>
                </div>

                <div class="col-12 col-md-5 text-end">
                    <figure class="ms-md-auto">
                        <?php echo wp_get_attachment_image( get_theme_mod( 'image_session_test_2' ), 'full' ) ?>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <!-- Avaliações -->
    <div class="container-fluid evaluation py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 text-center">
                    <span class="subtitle mb-4">Veja os</span>
                    <h2 class="mb-5">Relatos de mudança de vida</h2>
                    <small>
                        Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, adipiscing mauris non purus parturient.
                    </small>
                </div>

                <div class="col-12 py-5">
                    <div class="comments_list">
                        <?php  
                            $comments = get_comments( [] );

                            foreach ( $comments as $comment ) :
                                printf('<div class="p-4">
                                <p>%s</p>
                                <footer>
                                    <figure><img src="%s" alt="avatar-comment" /></figure>
                                    <span>Berry Gunawan</span>
                                    <span class="rating">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path d="M12.5 2.11475L15.59 8.37475L22.5 9.38475L17.5 14.2547L18.68 21.1347L12.5 17.8847L6.32 21.1347L7.5 14.2547L2.5 9.38475L9.41 8.37475L12.5 2.11475Z" fill="#FCFF54" stroke="url(#paint0_linear_1971_152)" stroke-linecap="round" stroke-linejoin="round"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_1971_152" x1="2.5" y1="3.76444" x2="21.5827" y2="22.09" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#7B999C"/>
                                            <stop offset="1" stop-color="#315C70"/>
                                            </linearGradient>
                                            </defs>
                                        </svg>
                                        3.5
                                    </span>
                                </footer>
                            </div>', $comment->comment_content, get_bloginfo( 'template_directory' ). '/assets/img/avatar-comment.png');
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- como é -->
    <div class="container-fluid how-is-container">
        <div class="container how-is my-5">
            <div class="row text-center">
                <h2>Como é</h2>
                <h3>feito o teste?</h3>
            </div>
    
            <div class="row steps mt-5 d-flex align-items-lg-stretch">
                <div class="col-12 col-md-4 text-center px-md-3">
                    <article class="py-5 px-4 mx-auto">
                        <figure>
                            <img src="<?php echo get_bloginfo( 'template_directory' ). '/assets/img/step-image.png'; ?>" alt="step-image">    
                        </figure>
                        <h4>Passo 1</h4>
                        <p>Após adquirir o teste, você receberá no e-mail de cadastro um link para preencher um questionário com as informações sobre sua saúde atual </p>
                    </article>
                </div>
                <div class="col-12 col-md-4 text-center px-md-3">
                    <article class="py-5 px-4 mx-auto">
                        <figure>
                            <img src="<?php echo get_bloginfo( 'template_directory' ). '/assets/img/step-image.png'; ?>" alt="step-image">    
                        </figure>
                        <h4>Passo 2</h4>
                        <p>Após o preenchimento e envio desse questionário de saúde, o seu kit de coleta do teste será encaminhado ao endereço fornecido </p>
                    </article>
                </div>
                <div class="col-12 col-md-4 text-center px-md-3">
                    <article class="py-5 px-4 mx-auto">
                        <figure>
                            <img src="<?php echo get_bloginfo( 'template_directory' ). '/assets/img/step-image.png'; ?>" alt="step-image">    
                        </figure>
                        <h4>Passo 3</h4>
                        <p class="mb-4">Após a realização da sua coleta de saliva, você entrará em contato com a IonNutri para providenciarmos a retirada da amostra. Assim que amostra chegar em nosso laboratório, aguarde 20 dias úteis para receber seus resultados</p>
                    </article>
                </div>
            </div>
    
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="default_link my-5">Mais detalhes</a>
                </div>
            </div>
        </div>
    </div>

    <!-- diferenciais -->

    <div class="container-fluid diferenciais py-5">
        <div class="container">
            <div class="row text-center my-5">
                <h4>Nosso</h4>
                <h3>Diferencial</h3>
            </div>

            <div class="row pt-5 d-flex align-items-stretch">
                <?php 
                    $args = array(
                        'post_type' => 'diferenciais',
                        'posts_per_page' => 8, // Para listar todos os posts. Altere para o número desejado de posts por página.
                    );
                
                    $query = new WP_Query($args);
                
                    // Verifica se há posts
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            // Exibir o título do post e a imagem destacada (thumbnail) se houver
                            echo '<div class="col-12 col-md-6 col-lg-3 pb-4"><article class="p-4">';
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                }
                                echo '<h2>' . get_the_title() . '</h2>';
                                the_content();
                                echo '<a class="mt-auto" href="'.get_permalink() . '">Saber mais</a>';
                                // Aqui você pode adicionar mais informações do post, caso deseje
                            echo '</article></div>';
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'Nenhum custom post encontrado.';
                    }
                ?>
            </div>
        </div>
    </div>


    <!-- cliente -->
    <div class="container-fluid py-5 cliente text-center">
        <div class="container">
            <div class="row mb-3">
                <figure>
                    <img src="<?php echo get_bloginfo( 'template_url' ). '/assets/img/cliente-avatar.png'; ?>" alt="cliente-avatar">
                </figure>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3>Nome do cliente - Profissão</h3>
                    <p>Tive a oportunidade de visitar o laboratório, conhecer o processo de extração da amostra e comprovar a qualidade e seriedade do trabalho executado. Me senti muito segura em realizar o exame, satisfeita com o resultado e com suporte prestado. Feliz  com a parceria firmada e a oportunidade de levar saúde de uma forma assertiva e preventiva aos meus pacientes!</p>
                </div>
            </div>

            <div class="row text-center mt-4">
                <span>Dra Daniela Monteiro</span>
            </div>
        </div>
    </div>

    <!-- parceiro -->
    <div class="container-fluid parceiros py-5">
        <div class="container my-md-5">
            <div class="row">
                <div class="col12 col-md-6">
                    <h2>Venha ser</h2>
                    <h3>Nosso parceiro</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu eget feugiat habitasse nec, bibendum condimentum.</p>
                    <ul>
                        <li>Material expose like metals</li>
                        <li>Clear lines and geomatric figures</li>
                        <li>Simple neutral colours.</li>
                        <li>Material expose like metals</li>
                    </ul>

                    <a href="#" class="default_link">ENTRAR EM CONTATO</a>
                </div>
                <div class="col12 col-md-6">
                    <div class="parc_list">
                        <?php 
                            $args = array(
                                'post_type' => 'parceiros',
                                'posts_per_page' => 8, // Para listar todos os posts. Altere para o número desejado de posts por página.
                            );
                        
                            $query = new WP_Query($args);
                        
                            // Verifica se há posts
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    // Exibir o título do post e a imagem destacada (thumbnail) se houver
                                    echo '<article class="p-2">';
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('thumbnail');
                                        }
                                        // Aqui você pode adicionar mais informações do post, caso deseje
                                    echo '</article>';
                                }
                                wp_reset_postdata();
                            } else {
                                echo 'Nenhum parceiro encontrado.';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- downPDF -->
    <div class="container-fluid downPDF">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <figure>
                        <img src="<?php echo get_bloginfo( 'template_url' ). "/assets/img/avatar-down.png"; ?>" alt="avatar">
                    </figure>
                </div>

                <div class="col-12 col-md-6 d-flex align-items-center">
                    <form>
                        <h4 class="mb-3">área aberta para <span>técnica, referências científicas</span></h4>
                        <p>Cada um de nós apresenta uma assinatura bioquímico metabólica, tão individual quanto nossas impressões digitais. Por outro lado, nosso metabolismo é altamente dinâmico, vivendo sob interferência de fatores externos e internos,  como gênero, idade, fatores genéticos e epigenéticos, estilo de vida, composição da microbiota, dieta e exposição ao meio ambiente.</p>

                        <article>
                            <span><input type="text" name="nome" id="nome" placeholder="Nome"></span>
                            <span><input type="text" name="email" id="email" placeholder="Email"></span>
                            <button class="default_link">BAIXAR PDF</button>
                        </article>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contato -->

    <div class="container-fluid contact my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Entre em</h2>
                    <h3>Contato</h3>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <h2 class="inf-gerais">Informações Gerais</h2>
                     <span>
                        <h5>Telefone /  Whatsapp</h5>
                        <p><a href="tel:1131641214">(11) 3164-1214</a></p>
                        <p><a href="wa.me/5511910813015">(11) 9 1081-3015</a></p>
                    </span>

                    <span>
                        <h5>Email</h5>
                        <p><a href="mailto:claudia.gomes@ionnutri.com.br">claudia.gomes@ionnutri.com.br</a></p>
                        <p><a href="mailto:contato@ionnutri.com.br">contato@ionnutri.com.br</a></p>
                    </span>

                    <span>
                        <h5>Localização</h5>
                        <p>Rua Apiacás, 247, sobreloja, Perdizes, São Paulo, SP.</p>
                    </span>
                </div>

                <div class="col-12 col-md-6">
                    <form>
                        <h4></h4>

                        <div><input type="text" name="nome" id="nome" placeholder="Nome"></div>
                        <div><input type="text" name="email" id="email" placeholder="Email"></div>
                        <div><input type="text" name="assunto" id="assunto" placeholder="Assunto"></div>

                        <div>
                            <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Mensagem"></textarea>
                        </div>

                        <button class="default_link">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>



<?php get_footer(); ?>