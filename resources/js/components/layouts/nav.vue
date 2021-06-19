<template>
  <div class="navigation">
    <header class="main-header header-style-three">
      <!--Header-Upper-->
      <div class="header-upper">
        <div class="auto-container clearfix">
          <div class="pull-left logo-outer pb-lg-0 pt-lg-2 pt-xl-4">
            <div class="logo">
              <router-link to="/">
                <img src="/website/images/logo-2.png" alt="" title="" />
              </router-link>
            </div>
          </div>

          <div class="pull-right upper-right">
            <div class="info-columns clearfix">
              <!--Info Box-->
              <div class="upper-column info-box info-item">
                <div class="icon-box">
                  <span class="flaticon-timer"></span>
                </div>
                <ul>
                  <li>
                    <strong>09:00 am - 17:00 pm</strong>
                    Horaires Du Travail
                  </li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box info-item">
                <div class="icon-box">
                  <span class="flaticon-technology-1"></span>
                </div>
                <ul>
                  <li>
                    <strong>+2126.45.90.33.30</strong>
                    Nous Serons Heureux De Répondre à Vos Questions
                  </li>
                </ul>
              </div>

              <!--Info Box-->
              <div class="upper-column info-box info-item">
                <div class="icon-box">
                  <span class="fa fa-envelope-o"></span>
                </div>
                <ul>
                  <li>
                    <strong>contact@probandconsulting.com</strong>
                    Envoyez Vos Masages
                  </li>
                </ul>
              </div>
            </div>
            <ul class="header-info-list">
              <li><router-link to="/Audit" style="color:white !important">Audit</router-link></li>
              <li><router-link to="/Expertise-Comptable" style="color:white !important">Expertise-Comptable</router-link></li>
              <li class="not"><router-link to="/Conseil" style="color:white !important">Conseil</router-link></li>

              <li class="social">
                <span class="d-flex">
                  <i class="fa fa-map-marker fa-2x mr-2"></i>
                  29 RUE AMR IBN ASS 3EME ETG N 26 , Tanger
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--End Header Upper-->

      <!--Header Lower-->
      <div class="header-lower clearfix">
        <div class="auto-container">
          <!--Nav Box-->
          <div class="nav-outer clearfix">
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md">
              <div class="navbar-header">
                <div
                  class="pull-left d-lg-none mb-2 mt-md-2"
                  style="width: 50px; height: 50px;"
                >
                  <router-link to="/"><img src="/website/images/logo-mobile.png" alt="" /></router-link>
                </div>
                <!-- Toggle Button -->
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div
                class="navbar-collapse collapse clearfix"
                id="navbarSupportedContent"
              >
                <ul class="navigation clearfix">
                  <li>
                    <router-link to="/">Accueil</router-link>
                  </li>

                  <li
                    class="dropdown"
                    :class="
                      ['acac', 'ac', 'aud'].includes($route.name)
                        ? 'current'
                        : ''
                    "
                  >
                    <router-link to="/Audit">
                      Audit
                    </router-link>
                    <ul>
                      <li>
                        <router-link to="/audit-commissariat-aux-comptes">
                          AUDIT-COMMISSARIAT AUX COMPTES
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/audit-contractuel">
                          audit-contractuel
                        </router-link>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <router-link to="/Expertise-Comptable">
                      Expertise Comptable
                    </router-link>
                  </li>
                  <li
                    class="dropdown"
                    :class="
                      ['cjef', 'cseo', 'cec', 'cesd', 'Conseil'].includes(
                        $route.name,
                      )
                        ? 'current'
                        : ''
                    "
                  >
                    <router-link to="/Conseil">
                      Conseil
                    </router-link>
                    <ul>
                      <li>
                        <router-link to="/conseil-juridique-et-fiscal">
                          conseil-juridique-et-fiscal
                        </router-link>
                      </li>
                      <li>
                        <router-link
                          to="/conseil-en-strategie-et-en-organisation"
                        >
                          conseil-en-strategie-et-en-organisation
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/conseil-en-corporate">
                          conseil-en-corporate
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/conseil-en-systeme-dinformation">
                          conseil-en-systeme-dinformation
                        </router-link>
                      </li>
                    </ul>
                  </li>
                  <li
                    class="dropdown"
                    :class="
                      ['pnc', 'nve', 'np'].includes($route.name)
                        ? 'current'
                        : ''
                    "
                  >
                    <a href="#" @click="(e) => e.preventDefault()">
                      À propos
                    </a>
                    <ul>
                      <li>
                        <router-link to="/pourquoi-nous-choisir">
                          pourquoi-nous-choisir
                        </router-link>
                      </li>
                      <li>
                        <router-link to="/nos-valeurs-et-engagements">
                          nos-valeurs-et-engagements
                        </router-link>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <router-link to="/contact">
                      <i class="fa fa-phone"></i>
                      Contact
                    </router-link>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <!--End Header Lower-->

      <!--Sticky Header-->
      <div class="sticky-header">
        <div class="auto-container">
          <div class="sticky-inner-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
              <router-link to="/" class="img-responsive">
                <img src="/website/images/logo-small.png" alt="" title="" />
              </router-link>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
              <!-- Main Menu -->
              <nav class="main-menu navbar-expand-md">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent1"
                  aria-controls="navbarSupportedContent1"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <div
                  class="navbar-collapse collapse clearfix"
                  id="navbarSupportedContent1"
                >
                  <ul class="navigation clearfix">
                    <li>
                      <router-link to="/">Accueil</router-link>
                    </li>

                    <li
                      class="dropdown"
                      :class="
                        ['acac', 'ac', 'aud'].includes($route.name)
                          ? 'current'
                          : ''
                      "
                    >
                      <router-link to="/Audit">
                        Audit
                      </router-link>
                      <ul>
                        <li>
                          <router-link to="/audit-commissariat-aux-comptes">
                            AUDIT-COMMISSARIAT AUX COMPTES
                          </router-link>
                        </li>
                        <li>
                          <router-link to="/audit-contractuel">
                            audit-contractuel
                          </router-link>
                        </li>
                      </ul>
                    </li>

                    <li>
                      <router-link to="/Expertise-Comptable">
                        Expertise Comptable
                      </router-link>
                    </li>
                    <li
                      class="dropdown"
                      :class="
                        ['cjef', 'cseo', 'cec', 'cesd', 'Conseil'].includes(
                          $route.name,
                        )
                          ? 'current'
                          : ''
                      "
                    >
                      <router-link to="/Conseil">
                        Conseil
                      </router-link>
                      <ul>
                        <li>
                          <router-link to="/conseil-juridique-et-fiscal">
                            conseil-juridique-et-fiscal
                          </router-link>
                        </li>
                        <li>
                          <router-link
                            to="/conseil-en-strategie-et-en-organisation"
                          >
                            conseil-en-strategie-et-en-organisation
                          </router-link>
                        </li>
                        <li>
                          <router-link to="/conseil-en-corporate">
                            conseil-en-corporate
                          </router-link>
                        </li>
                        <li>
                          <router-link to="/conseil-en-systeme-dinformation">
                            conseil-en-systeme-dinformation
                          </router-link>
                        </li>
                      </ul>
                    </li>
                    <li
                      class="dropdown"
                      :class="
                        ['pnc', 'nve', 'np'].includes($route.name)
                          ? 'current'
                          : ''
                      "
                    >
                      <a href="#" @click="(e) => e.preventDefault()">
                        À propos
                      </a>
                      <ul>
                        <li>
                          <router-link to="/pourquoi-nous-choisir">
                            pourquoi-nous-choisir
                          </router-link>
                        </li>
                        <li>
                          <router-link to="/nos-valeurs-et-engagements">
                            nos-valeurs-et-engagements
                          </router-link>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <router-link to="/contact">
                        <i class="fa fa-phone"></i>
                        Contact
                      </router-link>
                    </li>
                  </ul>
                </div>
              </nav>
              <!-- Main Menu End-->
            </div>
          </div>
        </div>
      </div>
      <!--End Sticky Header-->
    </header>
  </div>
</template>

<style lang="scss">
@media (min-width: 968px) {
  .navigation {
    .router-link-exact-active {
      color: #009dea !important;
    }

    .dropdown ul .router-link-active {
      color: #fff !important;
    }
  }
}

.main-header .header-upper .upper-right .header-info-list li.not::after {
  content: '';
}
.info-item:not(:nth-child(2)) {
  li strong {
    font-size: 12px !important;
    font-weight: bolder !important;
  }
}
.info-item:nth-child(2) {
  li strong {
    font-size: 14px !important;
    font-weight: bolder !important;
  }
}

@media (max-width: 968px) {
  .header-style-three .header-upper {
    display: none;
  }
  .header-style-three {
    border: none;
  }
  .main-menu {
    width: 97%;
    margin-left:3% !important;
    ul.navigation{
      margin-left: 20px;
    }
  }
  .header-style-three .main-menu .navigation > li {
    margin-right: 20px;
  }
}

.main-header .header-upper .upper-right .header-info-list{
  margin-bottom: 0 !important;
}

.social{
  text-transform: uppercase;
}
</style>
