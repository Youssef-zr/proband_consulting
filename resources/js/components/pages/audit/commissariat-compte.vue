<template>
  <div class="section-audit">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>COMMISSARIAT AUX COMPTES</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>COMMISSARIAT AUX COMPTES</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->
    <!--Welcome Section-->
    <section class="welcome-section text-left pb-5">
      <div class="auto-container">
        <div class="row clearfix">
          <!--Content Column-->
          <div class="content-column col-lg-7 col-md-12 col-sm-12">
            <div class="inner-column">
              <!--Sec Title-->
              <div class="sec-title pb-2">
                <div class="title">COMMISSARIAT AUX COMPTES</div>
              </div>
              <div class="text mt-0">
                Le commissaire aux comptes un acteur majeur au sein de nos
                économies modernes. En effet, il contribue à garantir la qualité
                et la transparence de l’information financière émise par
                l’entreprise, tant pour les besoins de gestion et d’analyse
                interne que pour les besoins des actionnaires, salariés,
                établissements financiers, clients, fournisseurs, donateurs ou
                pouvoirs publics.
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
              <div class="text">
                Sa mission essentielle consiste dans l’expression d’une opinion
                sur la régularité et la sincérité des comptes annuels et
                consolidés. Au-delà de cette notion de contrôle indispensable,
                le Commissaire aux Comptes est avant tout un partenaire aux
                cotés de l’entreprise.
              </div>
              <hr />
              <div class="text">
                Nos associés et collaborateurs mobilisent leurs expertises
                techniques et sectorielles pour servir les objectifs de cette
                mission dans un souci permanent d’efficacité et de proximité.
              </div>
            </div>
          </div>
        </div>
        <!-- buttons -->
        <div class="buttons mt-4 text-center">
          <router-link to="/Audit" class="theme-btn btn-style-three m-2">
            Audit
          </router-link>
          <router-link to="/contact" class="theme-btn btn-style-three m-2">
            audit-contractuel
          </router-link>
        </div>
      </div>
    </section>
    <!--End Welcome Section-->

    <!-- Approach Section -->
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
          <h5 class="text-light">
            Proband Consulting vous accompagne dans le cadre des missions
            suivantes
          </h5>
        </div>
      </div>

      <div class="auto-container">
        <div class="blocks-section">
          <div class="row clearfix">
            <!--Services Block-->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-key"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Certification des comptes sociaux et des comptes consolidés
                  </a>
                </h3>
                <div
                  class="overlay-box"
                  style="
                    background-image: url('/website/images/resource/service-1.jpg');
                  "
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-key"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-light">
                        Certification des comptes sociaux et des comptes
                        consolidés
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-plus-square"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Augmentation ou réduction du capital
                  </a>
                </h3>
                <div
                  class="overlay-box"
                  style="
                    background-image: url('/website/images/resource/service-1.jpg');
                  "
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-plus-square"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-light">
                        Augmentation ou réduction du capital
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-pie-chart"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Distribution d’acomptes sur dividendes
                  </a>
                </h3>
                <div
                  class="overlay-box"
                  style="
                    background-image: url('/website/images/resource/service-1.jpg');
                  "
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-pie-chart"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-light">
                        Distribution d’acomptes sur dividendes
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-list-alt"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Attestations et visa divers
                  </a>
                </h3>
                <div
                  class="overlay-box"
                  style="
                    background-image: url('/website/images/resource/service-1.jpg');
                  "
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-list-alt"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-light">
                        Attestations et visa divers
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-bolt"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Emission d’actions de préférence
                  </a>
                </h3>
                <div
                  class="overlay-box"
                  style="
                    background-image: url('/website/images/resource/service-1.jpg');
                  "
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-bolt"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-light">
                        Emission d’actions de préférence
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-history"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Transformation,avantages particuliers
                  </a>
                </h3>
                <div
                  class="overlay-box"
                  style="
                    background-image: url('/website/images/resource/service-1.jpg');
                  "
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-history"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-light">
                        Transformation,avantages particuliers
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="text">
                Par ailleurs, Proband Consulting est souvent amené à intervenir
                dans un cadre légal, afin de contrôler les opérations de fusion,
                scission et apports partiels d’actif. Notre intervention conduit
                à l’émission d’une opinion indépendante concernant
                l’appréciation des valeurs et l’équité d’une opération
                financière.
              </div>
            </div>
            <div class="col-md-6">
              <div class="text">
                Notre expertise est fondée sur une expérience établie dans le
                domaine de l’évaluation d’entreprise, couplée à nos compétences
                juridiques dans ce type d’opération.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

<style lang="scss" scoped>
@media (min-width: 968px) {
  .section-audit {
    .services-block .inner-box {
      min-height: 260px;
    }
  }
}
</style>

<script>
import articles from '../../layouts/articles'
export default {
   // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | audit-commissariat-aux-comptes',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,audit-commissariat-aux-comptes',
      },
    ],
  },
  // End Meta --------------
  components: { articles },
  methods: {
    prevent(e) {
      e.preventDefault()
    },
  },
}
</script>
