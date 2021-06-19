<template>
  <div class="section-audit audit-contractuel">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>AUDIT CONTRACTUEL</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/accueil">Accueil</router-link>
          </li>
          <li>AUDIT CONTRACTUEL</li>
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
                <div class="title">AUDIT CONTRACTUEL</div>
              </div>
              <div class="text m-0">
                L’objectif de l’audit contractuel est d’émettre un avis ou une
                opinion notamment sur les états financiers d’une société ou d’un
                groupe, sur les opérations de croissance externe ou bien encore
                sur l’organisation des services d’une société.
              </div>
              <div class="text mt-2">
                Ces missions contractuelles de diagnostic et d’appréciation de
                vos processus et de vos informations, que nous réalisons en
                toute indépendance, vous permettront non seulement de satisfaire
                aux exigences fixées par les différentes réglementations, mais
                aussi d’optimiser votre fonction financière pour assurer le bon
                déroulement de vos opérations.
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
            <div class="inner-column">
              <div class="image img-thumbnail">
                <img src="/website/images/resource/audit.jpg" alt="audit" />
              </div>
            </div>
          </div>
        </div>
        <!-- buttons -->
        <div class="buttons mt-4 text-center">
          <router-link to="/Audit" class="theme-btn btn-style-three m-2">
            Audit
          </router-link>
          <router-link
            to="/audit-commissariat-aux-comptes"
            class="theme-btn btn-style-three m-2"
          >
            COMMISSARIAT AUX COMPTES
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
          <div class="title">
            Nos missions couvrent ainsi, principalement, les domaines suivants
          </div>
        </div>
      </div>

      <div class="auto-container">
        <div class="blocks-section">
          <div class="row clearfix">
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-briefcase"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Audit des comptes
                  </a>
                </h3>
                <ul class="text-left text-secondary">
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Audit des comptes locaux et des comptes consolidés.
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Audit fiscal et ou social (diagnostic critique de
                    l’organisation, identification et quantification du risque,
                    estimation du risque éventuel)
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Expertise amiable.
                  </li>
                </ul>
                <div
                  class="overlay-box"
                  style="background-image: url('/website/images/resource/service-1.jpg');"
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-briefcase"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-blue">
                        Audit des comptes
                      </a>
                    </h5>
                    <ul class="text-left text-light mt-2">
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Audit des comptes locaux et des comptes consolidés.
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Audit fiscal et ou social (diagnostic critique de
                        l’organisation, identification et quantification du
                        risque, estimation du risque éventuel)
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Expertise amiable.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-globe"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Audit des marchés publics
                  </a>
                </h3>
                <ul class="text-left text-secondary">
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Appréciation du dispositif de contrôle interne lié à la
                    gestion des marchés
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Assurance du respect de la réglementation en vigueur fixant
                    les conditions et les formes de passation des marchés ainsi
                    que certaines dispositions relatives à leur contrôle et à
                    leur gestion
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Evaluation des différentes étapes de réalisation des marchés
                    achevés.
                  </li>
                </ul>
                <div
                  class="overlay-box"
                  style="background-image: url('/website/images/resource/service-1.jpg');"
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-globe"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-blue">
                        Audit des marchés publics
                      </a>
                    </h5>
                    <ul class="text-left text-light mt-2">
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Appréciation du dispositif de contrôle interne lié à la
                        gestion des marchés
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Assurance du respect de la réglementation en vigueur
                        fixant les conditions et les formes de passation des
                        marchés ainsi que certaines dispositions relatives à
                        leur contrôle et à leur gestion
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Evaluation des différentes étapes de réalisation des
                        marchés achevés.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-arrow-circle-left"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Audit d’acquisition
                  </a>
                </h3>
                <ul class="text-left text-secondary">
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Due diligence préliminaire
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Due diligence étendue
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Proposition d’un un prix d’acquisition en tenant compte de
                    plusieurs critères
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Finalisation juridique de la transaction avec les garanties
                    d’usage.
                  </li>
                </ul>
                <div
                  class="overlay-box"
                  style="background-image: url('/website/images/resource/service-1.jpg');"
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-arrow-circle-left"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-blue">
                        Audit d’acquisition
                      </a>
                    </h5>
                    <ul class="text-left text-light mt-2">
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Due diligence préliminaire
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Due diligence étendue
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Proposition d’un un prix d’acquisition en tenant compte
                        de plusieurs critères
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Finalisation juridique de la transaction avec les
                        garanties d’usage.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="fa fa-arrow-circle-left"></span>
                </div>
                <h3>
                  <a href="#" @click="prevent">
                    Audit de procédures
                  </a>
                </h3>
                <ul class="text-left text-secondary">
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Examen des procédures propres aux fonctions comptables et
                    financières (effectuer un diagnostic, proposer des solutions
                    pour maitriser les risques, contrôler le respect des
                    procédures)
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Diagnostic des flux administratifs de l’entreprise
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Audit de systèmes d’information internes et externes
                  </li>
                  <li class="d-flex">
                    <i class="fa fa-square mr-2"></i>
                    Audit du contrôle interne / Sox Compliance.
                  </li>
                </ul>
                <div
                  class="overlay-box"
                  style="background-image: url('/website/images/resource/service-1.jpg');"
                >
                  <div class="overlay-inner">
                    <div class="icon-box">
                      <span class="fa fa-arrow-circle-left"></span>
                    </div>
                    <h5>
                      <a href="#" @click="prevent" class="text-blue">
                        Audit de procédures
                      </a>
                    </h5>
                    <ul class="text-left text-light mt-2">
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Examen des procédures propres aux fonctions comptables
                        et financières (effectuer un diagnostic, proposer des
                        solutions pour maitriser les risques, contrôler le
                        respect des procédures)
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Diagnostic des flux administratifs de l’entreprise
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Audit de systèmes d’information internes et externes
                      </li>
                      <li class="d-flex">
                        <i class="fa fa-square mr-2"></i>
                        Audit du contrôle interne / Sox Compliance.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
  .audit-contractuel {
    .services-block .inner-box {
      min-height: 370px;
    }
  }
}
</style>

<script>
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | audit-contractuel',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,audit-contractuel',
      },
    ],
  },
  // End Meta --------------
  methods: {
    prevent(e) {
      e.prevetDefault()
    },
  },
}
</script>
