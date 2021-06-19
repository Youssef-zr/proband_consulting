<template>
  <div class="section-conseil">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>conseil en corporate</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>conseil en corporate</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->

    <!--Welcome Section-->
    <section class="welcome-section text-left">
      <div class="auto-container">
        <div class="row clearfix">
          <!--Content Column-->
          <div class="content-column col-lg-7 col-md-12 col-sm-12">
            <div class="inner-column">
              <!--Sec Title-->
              <div class="sec-title pb-2">
                <div class="title">conseil en corporate</div>
              </div>
              <div class="text mt-0">
                Grâce son expérience approfondie et à sa connaissance aguerrie
                du tissue économique marocain, Proband Consulting assiste ses
                clients pour mettre au point une stratégie de développement
                optimale. En effet, afin de renforcer vos entreprises, vous
                pouvez être amené à lever des fonds, céder vos activités en
                difficulté et profiter d’opportunités de croissance sur de
                nouveaux marchés.
              </div>
              <div class="clearfix">
                <div class="pull-left">
                  <router-link to="/contact" class="theme-btn btn-style-four">
                    Contacter
                  </router-link>
                </div>
                <div class="pull-right">
                  <div class="phone">
                    <span class="icon fa fa-phone"></span>
                    +2126.45.90.33.30
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Image Column-->
          <div class="image-column col-lg-5 col-md-12 col-sm-12">
            <div class="inner-column mt-md-5 text-secondary">
              <img
                src="/website/images/resource/conseil-corporate.jpg"
                alt="fiscale"
                class="img-thumbnail"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Welcome Section-->

    <!-- Approach Section -->
    <section
      class="approach-section"
      style="background-image: url('/website/images/background/2.jpg');"
    >
      <!--Steps Section-->
      <div class="steps-section">
        <div class="auto-container">
          <div class="sec-title">
            <p class="title">
              Notre offre s’organise autour de 3 thématiques
            </p>
            <p>
              A chaque étape-clé de votre opération, les consultants de FIREC &
              ASSOCIES mettent à votre disposition les compétences les plus
              adaptées à votre situation.
            </p>
          </div>
          <div class="row clearfix">
            <!--Step Block-->
            <div class="step-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="number">
                  <span><i class="fa fa-arrow-right"></i></span>
                  Corporate
                </div>
                <ul>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Conseil en investissement.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Etude de faisabilité.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Business plan.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Introduction en bourse.
                  </li>
                </ul>
              </div>
            </div>
            <!--Step Block-->
            <div class="step-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="number d-flex">
                  <span><i class="fa fa-arrow-right mr-2"></i></span>
                  Accompagnement dans le projet d’entreprise
                </div>
                <ul>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Acquisition et cession : évaluation, diagnostic,
                    négociation, recherche de potentiels acquéreurs, recherche
                    de sociétés cibles.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Opérations de haut de bilan : fusion, apport et scission.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Evaluation d’entreprise.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Evaluation des prévisions financières.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Levée de fonds.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Restructuration financière.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Stratégie de continuité d’activité.
                  </li>
                </ul>
              </div>
            </div>
            <!--Step Block-->
            <div class="step-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="number d-flex">
                  <span><i class="fa fa-arrow-right mr-2"></i></span>
                  Assistance face aux évolutions réglementaires
                </div>
                <ul>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Formalisation et évaluation du contrôle interne.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Mise en place de comptes consolidés.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Mise en place du référentiel IFRS pour les sociétés
                    marocaines et étrangères.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Mise en place du Sarbannes Oxley Act (SOA) pour les filiales
                    de sociétés américaines.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | conseil en corporate',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,conseil en corporate',
      },
    ],
  },
  // End Meta --------------
}
</script>

<style lang="scss">
.page-title h1,
.page-title .page-breadcrumb li:last-child {
  text-transform: lowercase;
}
</style>
