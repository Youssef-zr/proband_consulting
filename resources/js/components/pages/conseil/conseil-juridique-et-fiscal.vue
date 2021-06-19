<template>
  <div class="section-conseil">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>CONSEIL JURIDIQUE ET FISCAL</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>CONSEIL JURIDIQUE ET FISCAL</li>
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
                <div class="title">CONSEIL JURIDIQUE ET FISCAL</div>
              </div>
              <div class="text mt-0">
                Pour accompagner nos clients dans leurs problématiques complexes
                et transverses, nous partageons avec eux la richesse de nos
                expériences, renforcées par celles de notre réseau
                international. Nous conjuguons également tous nos savoirs faires
                notamment en matière d’audit et d’expertises comptables,
                juridiques et fiscales.
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
                src="/website/images/resource/conseil-fiscal-juridique.jpg"
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
            <div class="title">
              Notre offre s’organise autour de 2 thématiques
            </div>
            <p class="text">
              Proband Consulting intervient auprès de grands groupes nationaux
              et internationaux sur des domaines très variés de la fiscalité et
              du juridique des entreprises.
            </p>
          </div>
          <div class="row clearfix">
            <!--Step Block-->
            <div class="step-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="number">
                  <span><i class="fa fa-graduation-cap"></i></span>
                  Conseil juridique
                </div>
                <ul>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Conseil en droit des affaires et des sociétés.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Constitution de sociétés et secrétariat juridique.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Mise en harmonie des statuts avec les nouvelles lois (SA et
                    SARL).
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Etablissement des procès verbaux d’assemblées.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Rédaction d’actes, de conventions et de contrats.
                  </li>
                </ul>
              </div>
            </div>
            <!--Step Block-->
            <div class="step-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="number">
                  <span><i class="fa fa-tint"></i></span>
                  Conseil fiscal
                </div>
                <ul>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Fiscalité des sociétés.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Fiscalité internationale en collaboration avec des cabinets
                    d’avocats internationaux.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Fiscalité immobilière.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Études, consultations et suivi des problèmes d’ordre fiscal.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Contrôles et contentieux fiscaux.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Stratégie fiscale.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Montage juridique et fiscal.
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
    titleTemplate: '%s | conseil juridique et fiscal',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,conseil juridique et fiscal',
      },
    ],
  },
  // End Meta --------------
}
</script>
