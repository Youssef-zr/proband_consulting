<template>
  <div class="section-comptable">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>Expertise Comptable</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>Exp Comptable</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->
    <!--Services Section-->
    <section class="services-section">
      <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
          <div class="title">EXPERTISE COMPTABLE</div>
          <p>
            Proband Consulting est en mesure de vous accompagner tout au long de
            votre projet d’entreprise
            <br />
            depuis sa création et ce, afin de vous assurer un suivi efficace et
            durable de vos problématiques juridiques, fiscales et sociales.
          </p>
        </div>
      </div>
    </section>
    <!--End Services Section-->
    <!--Approach Section-->
    <section
      class="approach-section pb-5"
      style="background-image: url('/website/images/background/2.jpg');"
    >
      <div
        class="upper-box"
        style="background-image: url('/website/images/background/1.jpg');"
      >
        <div class="auto-container">
          <div class="title">Nous Sommes Des Professionnels</div>
          <h2>Notre offre s’organise autour de 4 thématiques</h2>
        </div>
      </div>

      <div class="auto-container">
        <div class="blocks-section">
          <div class="row clearfix">
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-list"></span>
                </div>
                <h3>
                  Un suivi des aspects quotidiens comptables, fiscaux.
                </h3>
                <div class="text">
                  <ul class="text-left">
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Tenue et surveillance comptable.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Etablissement de situations périodiques et des comptes
                      annuels.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Déclarations fiscales et sociales.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Traitement et gestion de la paie.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="icon flaticon-pen"></span>
                </div>
                <h3>
                  <a href="services-single.html">
                    Externalisation de la comptabilité et de l’administration
                    (inshore / offshore)
                  </a>
                </h3>
                <div class="text">
                  <ul class="text-left">
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Tableau de bord.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Prise en charge des services comptables et administratifs.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Gestion des obligations fiscales et sociales.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Gestion de vos obligations réglementaires.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-share-square"></span>
                </div>
                <h3>
                  Reporting et consolidation
                </h3>
                <div class="text">
                  <ul class="text-left">
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Elaboration et/ou suivi d’un système de reporting (SAP).
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Etablissement d’une liasse de consolidation et de comptes
                      consolidés.
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-wrench"></span>
                </div>
                <h3>
                  L’élaboration d’outils de gestion
                </h3>
                <div class="text">
                  <ul class="text-left">
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Tableau de bord.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Comptabilité budgétaire et analytique.
                    </li>
                    <li class="d-flex">
                      <i class="fa fa-check text-blue mr-2"></i>
                      Suivi de la trésorerie.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Approach Section-->

    <!--Blog Page Section-->
    <articles />
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

<style lang="scss">
@media (min-width: 968px) {
  .services-block .inner-box {
    min-height: 330px;
  }
}
</style>

<script>
import articles from '../layouts/articles'
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | expertise-comptable',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,expertise-comptable',
      },
    ],
  },
  // End Meta --------------
  components: { articles },
}
</script>
