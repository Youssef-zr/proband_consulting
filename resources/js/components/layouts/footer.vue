<template>
  <div class="section-footer text-left">
    <!-- Main Footer -->
    <footer
      class="footer-style-two"
      style="background-image: url('/website/images/background/4.jpg');"
    >
      <div class="auto-container">
        <div class="row clearfix">
          <!--Content Column-->
          <div class="content-column col-lg-7 col-md-12 col-sm-12">
            <div class="inner-column">
              <h2 class="text-capitalize">à propos de nous</h2>
              <div class="text">
                <p class="mb-0">
                  Proband Consulting est un cabinet d’audit, de conseil et
                  d’expertise comptable, implanté au Maroc.
                </p>
                <p>
                  Proband Consulting offre à ses clients une prestation
                  intellectuelle, globale, efficace à haute valeur ajoutée.
                </p>
              </div>
              <div class="copyright-box">
                <div class="logo">
                  <router-link to="/">
                    <img src="/website/images/logo-small.png" alt="" />
                  </router-link>
                </div>
                <div class="copyright">
                  Droits d'auteur
                  <span v-text="date"></span>
                  . Tous les droits sont Réservés
                </div>
              </div>
            </div>
          </div>
          <!--Info Column-->
          <div class="info-column col-lg-5 col-md-12 col-sm-12">
            <div class="inner-column">
              <h2 class="text-capitalize">contacter</h2>
              <div class="number">+2126.45.90.33.30</div>
              <ul class="info-list">
                <li>
                  <span>Email :</span>
                  contact@probandconsulting.com
                </li>
                <li>
                  <span>horaires du travail :</span>
                  09:00 am - 17:00 pm
                </li>
                <li class="d-flex">
                  <span class="d-block mr-2">Adresse:</span>
                  29 RUE AMR IBN ASS 3EME ETG N 26 , Tanger
                </li>
              </ul>
              <ul class="social-icon-two d-flex">
                <li class="text-light text-underline">Suivez Nous :</li>
                <li>
                  <a
                    href="https://www.facebook.com/ProBand-Consulting-112063996971642"
                    target="_blank"
                  >
                    <span class="fa fa-facebook-square fa-2x text-blue"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Main Footer -->
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-arrow-up"></span>
    </div>
  </div>
</template>

<style lang="scss">
.text-capitalize {
  text-transform: capitalize;
}
</style>

<script>
export default {
  data() {
    return {
      date: new Date().getFullYear(),
    }
  },
}
</script>
