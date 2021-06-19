<template>
  <div class="section-about">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>pourquoi nous choisir</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>pourquoi nous choisir</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->
    <!--Services Section-->
    <section class="services-section">
      <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
          <div class="title">pourquoi nous choisir</div>
          <p>
            Proband Consulting a capitalisé grâce à la multitude de ses
            interventions, une forte
            <br />
            expérience dans ses domaines de compétences.
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
                Le succès de nos missions s’explique par :
              </div>
            </div>
            <div class="team-content d-flex">
              <i class="fa fa-arrow-circle-right text-blue fa-2x mt-1 mr-2"></i>
              <div class="text">
                Nos associés et managers, interlocuteurs privilégiés de nos
                clients, sont à l’écoute des difficultés rencontrées et
                proposent des réponses personnalisées.
              </div>
            </div>
            <div class="team-content d-flex">
              <i class="fa fa-arrow-circle-right text-blue fa-2x mt-1 mr-2"></i>
              <div class="text">
                Nos outils méthodologiques et informatiques sont performants et
                sont utilisés aussi bien pour les PME et grandes entreprises et
                ce, quelque soit les référentiels normatifs ou comptables
                utilisés (marocains, internationaux ou autres).
              </div>
            </div>
            <div class="team-content d-flex">
              <i class="fa fa-arrow-circle-right text-blue fa-2x mt-1 mr-2"></i>
              <div class="text">
                Nos collaborateurs d’audit et de conseil ont tous été formés
                dans des universités ou des écoles de commerce, ils participent
                tous les ans à notre programme de formation interne.
              </div>
            </div>
            <div class="team-content d-flex">
              <i class="fa fa-arrow-circle-right text-blue fa-2x mt-1 mr-2"></i>
              <div class="text">
                Notre expérience reconnue en matière d’audit du secteur
                financier (banques, organismes de crédit, courtage en
                assurance…) et du secteur de l’immobilier.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Fluid Section Two-->
    <!-- signature -->
    <div class="signature py-sm-3 pt-md-5">
      <div class="container">
        <div class="row">
          <!-- box-icon -->
          <div class="col-md-4">
            <div
              class="icon-box-2 text-center bg-blue pt-5 pb-3 px-2 text-white"
            >
              <div class="icon"><i class="fa fa-thumbs-o-up fa-4x"></i></div>
              <p class="text mt-3">
                Notre signature reconnue des milieux d’affaires donne de la
                crédibilité à vos états financiers.
              </p>
            </div>
          </div>
          <!-- box-icon -->
          <div class="col-md-4">
            <div
              class="icon-box-2 text-center bg-blue pt-5 pb-3 px-2 text-white"
            >
              <div class="icon"><i class="fa fa-users fa-4x"></i></div>
              <p class="text mt-3">
                Nos relations étroites et privilégiées avec les multinationales
                et les filiales de sociétés étrangères implantées au Maroc.
              </p>
            </div>
          </div>
          <!-- box-icon -->
          <div class="col-md-4">
            <div
              class="icon-box-2 text-center bg-blue pt-5 pb-3 px-2 text-white"
            >
              <div class="icon"><i class="fa fa-lock fa-4x"></i></div>
              <p class="text mt-3">
                Notre signature, bien connu dans le milieu des affaires, rendra
                vos états financiers plus fiables.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

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

<style lang="css">
@media (min-width: 968px) {
  .icon-box-2 {
    height: 210px;
    border-left: 4px solid #333333;
  }
}

.bg-blue {
  background: #009dea;
  color: #fff;
}
</style>

<script>
import articles from '../../layouts/articles'
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | pourquoi nous choisir',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,pourquoi nous choisir',
      },
    ],
  },
  // End Meta --------------
  components: { articles },
}
</script>
