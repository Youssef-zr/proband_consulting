<template>
  <div class="section-about-engagements">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>nos valeurs et engagements</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>nos valeurs et engagements</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->
    <!--Services Section-->
    <section class="services-section">
      <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
          <div class="title">nos valeurs et engagements</div>
          <p>
            A l’écoute de leurs problématiques et avec une connaissance
            approfondie des métiers de ses clients, Proband Consulting se
            positionne en réel partenaire du chef d’entreprise et des
            différentes directions pour les accompagner dans toutes les phases
            de leur développement, tant au Maroc qu’à l’étranger.
          </p>
        </div>
      </div>
    </section>
    <!--End Services Section-->
    <!--Fluid Section Two-->
    <section class="fluid-section-two">
      <div class="outer-container clearfix">
        <!--Image Column-->
        <div
          class="image-column"
          style="background-image: url('/website/images/resource/image-2.jpg');"
        >
          <figure class="image-box">
            <img src="/website/images/resource/image-2.jpg" alt="" />
          </figure>
        </div>
        <!--Content Column-->
        <div class="content-column">
          <div class="inner-column">
            <!--Sec Title-->
            <div class="sec-title light">
              <div class="title">
                Proband Consulting est inspiré par des valeurs fortes :
              </div>
            </div>
            <div class="team-content">
              <h3>Réactivité</h3>
              <div class="text">
                Nous nous engageons à traiter chaque demande avec une égale
                diligence et à mettre en œuvre toutes les ressources de notre
                cabinet afin de garantir à nos clients le respect des délais.
              </div>
            </div>
            <div class="team-content">
              <h3>Innovation</h3>
              <div class="text">
                L’éthique est au centre de notre profession et nous nous devons
                d’agir dans le respect des règles déontologiques.
              </div>
            </div>
            <div class="team-content">
              <h3>Innovation</h3>
              <div class="text">
                Nous estimons que chaque situation est différente et appelle, en
                conséquence, des solutions adaptées. Nous mettons donc tout en
                œuvre afin d’offrir à nos clients les solutions opérationnelles
                les plus innovantes.
              </div>
            </div>
            <div class="team-content">
              <h3>Indépendance</h3>
              <div class="text">
                Proband Consulting exerce la profession d’’expertise comptable
                et d’audit en toute autonomie et dans le respect des règles
                déontologiques applicables sur le plan national et
                international.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Fluid Section Two-->

    <!--Blog Page Section-->
    <articles></articles>
    <!--End Blog Page Section-->

    <!-- Call To Action -->
    <section class="call-to-action">
      <div class="auto-container">
        <div class="inner-container clearfix">
          <h3>
            Besoin d’un conseil ? N’hésitez pas à nous contacter.
          </h3>
          <router-link to="/contact" class="contact-btn">
            Contacter
          </router-link>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import articles from '../../layouts/articles'
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | nos valeurs et engagements',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,nos valeurs et engagements',
      },
    ],
  },
  // End Meta --------------
  components: { articles },
}
</script>
