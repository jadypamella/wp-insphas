<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Insphas_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <section class="site-section" id="sobre">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="text-left heading-wrap mb-5">
              <h2 class="mt-0 mb-5">Sobre</h2>
              <p>O Instituto Phallas Sapienthia (Insphas) - Vida Plena é uma instituição sem fins lucrativos fundada em 15 de dezembro de 2018, que atua na Ceilândia Norte, na região do Distrito Federal.
              A instituição objetiva trazer melhorias para a comunidade em várias dimensões sociais, tais como, educação, empreendedorismo, saúde, lazer e bem-estar.</p>
              <p>A iniciativa começou com uma parceria de dois amigos de longa data tentando retribuir para o mundo um pouco das oportunidades que tiveram.</p>
              <p>Por falar nisso, você já conhece a <a href="https://www.facebook.com/maria.olimpia.142" title="Facebook - Maria Olímpia" target="_blank">dona Olímpia</a> e o <a href="https://www.facebook.com/josegadelhaloureiro.gadelha" title="Facebook - José Gadelha" target="_blank">professor Gadelha</a>?</p>
            </div>
          </div>
          <div class="col-md-6 position-relative align-self-center">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sobre_1.jpg" alt="Image" class="img-overlap-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sobre_2.jpg" alt="Image" class="img-overlap-2">
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="atividades">
        <div class="container">
          <div class="row mb-3">
            <div class="col-md-8 text-left heading-wrap mb-5">
              <h2 class="mt-0">Atividades Oferecidas</h2>
              <p>Todas as atividades do Insphas são oferecidas por voluntários conforme disponibilidade de agenda deles e, quando não há vagas disponíveis, é criada uma lista de espera. Essas são as principais atividades oferecidas no momento:</p>
            </div>

          </div>
        </div>

        <div class="container-fluid">

          <div class="row no-gutters">
            <div class="col-md-6">
              <div class="sched d-block d-lg-flex">
                <div class="bg-image order-2" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_1.jpg');"></div>
                <div class="text order-1">
                  <h3>Atendimento Psicológico</h3>
                  <p>Suporte psicológico por meio de terapia breve oferecida a crianças, adolescentes, adultos e idosos.</p>
                  <p class="text-xs-center nav-button"><a href="#contact-footer" title="Fale com a gente" class="btn btn-primary btn-sm">Quero me Inscrever</a></p>

                </div>

              </div>

              <div class="sched d-block d-lg-flex">
                <div class="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_2.jpg');"></div>
                <div class="text">
                  <h3>Acupuntura</h3>
                  <p>Tratamento e prevenção de várias de diversas patologias fundamentados nos moldes da medicina tradicional chinesa.</p>
                  <p class="text-xs-center nav-button"><a href="#contact-footer" title="Fale com a gente" class="btn btn-primary btn-sm">Quero me Inscrever</a></p>

                </div>

              </div>

            </div>

            <div class="col-md-6">
              <div class="sched d-block d-lg-flex">
                <div class="bg-image order-2" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_3.jpg');"></div>
                <div class="text order-1">
                  <h3>Atendimento Fitoterápico</h3>
                  <p>Consulta especializada e tratamento à base de medicamentos fitoterápicos e homeopatia em geral.</p>
                  <p class="text-xs-center nav-button"><a href="#contact-footer" title="Fale com a gente" class="btn btn-primary btn-sm">Quero me Inscrever</a></p>

                </div>

              </div>

              <div class="sched d-block d-lg-flex">
                <div class="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/atividade_4.jpg');"></div>
                <div class="text">
                  <h3>Alfabetização de Idosos e Reforço Escolar</h3>
                  <p>Iniciação do processo de ensino-aprendizado de escrita e leitura e apoio de crianças e adolescentes no desenvolvimento escolar.</p>
                  <p class="text-xs-center nav-button"><a href="#contact-footer" title="Fale com a gente" class="btn btn-primary btn-sm">Quero me Inscrever</a></p>

                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </section> <!-- .section -->



<?php
get_footer();
