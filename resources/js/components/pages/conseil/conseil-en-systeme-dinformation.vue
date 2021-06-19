<template>
  <div class="section-conseil">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>CONSEIL EN SYSTÈME D’INFORMATION</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>CONSEIL EN SYSTÈME D’INFORMATION</li>
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
                <div class="title">CONSEIL EN SYSTÈME D’INFORMATION</div>
              </div>
              <div class="text mt-0">
                Proband Consulting assiste et conseille les directions générales,
                les directions des systèmes d’information et les directions
                métiers, à aligner leurs organisations sur leurs stratégies et à
                réussir leurs transformations, pour une meilleure performance
                globale.
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
                src="/website/images/resource/22.jpg"
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
              Nos consultants vous accompagnent dans l’optimisation de la
              contribution des Systèmes d’Information de l’entreprise à ses
              résultats.
            </p>
          </div>
          <div class="row clearfix">
            <!--Step Block-->
            <div class="step-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="number d-flex">
                  <span><i class="fa fa-arrow-right mr-2"></i></span>
                  Conseil en systèmes d’information
                </div>
                <ul>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Audit des systèmes d’information.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Assistance à la maîtrise d’ouvrage.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Analyse de la fiabilité des systèmes d’information.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Amélioration de la production des systèmes d’information.
                  </li>
                  <li class="d-flex text-secondary">
                    <i class="fa fa-circle mr-2"></i>
                    Management de la sécurité.
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
    titleTemplate: '%s | conseil en system d\'information',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,conseil en system d\'information',
      },
    ],
  },
  // End Meta --------------
}
</script>