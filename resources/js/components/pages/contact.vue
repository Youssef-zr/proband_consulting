<template>
  <div class="section-contact">
    <!--Page Title-->
    <section
      class="page-title"
      style="background-image: url('/website/images/background/12.jpg');"
    >
      <div class="auto-container">
        <h1>Contacter</h1>
        <ul class="page-breadcrumb">
          <li>
            <router-link to="/">Accueil</router-link>
          </li>
          <li>Contacter</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->

    <!--Default Form Section-->
    <section class="default-form-section">
      <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
          <div class="title">Écrire un message</div>
          <h2>Vous Avez Des Questions?</h2>
          <div class="text">
            Merci beaucoup pour votre intérêt pour notre entreprise et notre
            services et si vous avez des questions, veuillez nous écrire un
            message maintenant!
          </div>
        </div>

        <!--Default Form-->
        <div class="default-form style-two contact-form">
          <div class="overlay" v-if="loading">
            <i class="fa fa-spinner fa-spin fa-4x"></i>
          </div>
          <form method="post" autocomplete="off">
            <div class="row clearfix">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div
                  :class="{
                    'has-error': form.errors.has('name'),
                    'form-group': true,
                  }"
                >
                  <label for="name">
                    Nom
                    <span class="text-danger">*</span>
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="nameHeplerId"
                    placeholder="Ton Nom"
                    v-model="form.name"
                    :class="{
                      'is-invalid': form.errors.has('name'),
                      'form-control': true,
                    }"
                  />
                  <has-error :form="form" field="name"></has-error>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div
                  :class="{
                    'has-error': form.errors.has('phone'),
                    'form-group': true,
                  }"
                >
                  <label for="phone">
                    Télephone
                    <span class="text-danger">*</span>
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    id="phone"
                    aria-describedby="phoneHeplerId"
                    placeholder="Numéro De Télephone"
                    v-model="form.phone"
                    :class="{
                      'is-invalid': form.errors.has('phone'),
                      'form-control': true,
                    }"
                  />
                  <has-error :form="form" field="phone"></has-error>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div
                  :class="{
                    'has-error': form.errors.has('email'),
                    'form-group': true,
                  }"
                >
                  <label for="email">
                    Email
                    <span class="text-danger">*</span>
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    aria-describedby="EmailHeplerId"
                    placeholder="Email Adress"
                    v-model="form.email"
                    :class="{
                      'is-invalid': form.errors.has('email'),
                      'form-control': true,
                    }"
                  />
                  <has-error :form="form" field="email"></has-error>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div
                  :class="{
                    'has-error': form.errors.has('subject'),
                    'form-group': true,
                  }"
                >
                  <label for="subject">Sujet</label>
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    aria-describedby="SubjectHeplerId"
                    placeholder="Sujet"
                    v-model="form.subject"
                    :class="{
                      'is-invalid': form.errors.has('subject'),
                      'form-control': true,
                    }"
                  />
                  <has-error :form="form" field="subject"></has-error>
                </div>
              </div>
              <div class="col-12">
                <div
                  :class="{
                    'has-error': form.errors.has('msg'),
                    'form-group': true,
                  }"
                >
                  <label for="msg">Message</label>
                  <textarea
                    cols="30"
                    rows="10"
                    class="form-control"
                    id="msg"
                    aria-describedby="msgHeplerId"
                    placeholder="msg"
                    v-model="form.msg"
                    :class="{
                      'is-invalid': form.errors.has('msg'),
                      'form-control': true,
                    }"
                  ></textarea>
                  <has-error :form="form" field="msg"></has-error>
                </div>
              </div>
              <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                <button
                  class="theme-btn message-btn"
                  @click.prevent="sendEmail"
                >
                  Envoyer
                </button>
              </div>
            </div>
          </form>
        </div>
        <!--End Default Form-->
      </div>
    </section>
    <!--End Default Form Section-->

    <!--Contact Info Section-->
    <section class="contact-info-section">
      <div class="auto-container">
        <div class="row clearfix">
          <div class="column col-lg-4 col-md-6 col-sm-12">
            <ul>
              <li>
                <span class="icon flaticon-placeholder"></span>
                29 RUE AMR IBN ASS
                <br />
                3EME ETG N 26 , Tanger
              </li>
            </ul>
          </div>

          <div class="column col-lg-4 col-md-6 col-sm-12">
            <ul>
              <li>
                <span class="icon flaticon-technology-2"></span>
                +212 5.00.00.00.00
                <br />
                contact@probandconsulting.com
              </li>
            </ul>
          </div>

          <div class="column col-lg-4 col-md-6 col-sm-12">
            <ul>
              <li>
                <span class="icon flaticon-clock-2"></span>
                9:00am to 17:00pm
                <br />
                Dimanche Fermé
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--End Contact Info Section-->
    <!-- start messages -->
    <div class="messages">
      <div class="alert alert-success" v-if="messages.success.status">
        {{ messages.success.msg }}
      </div>
      <div class="alert alert-danger" v-if="messages.error.status">
        {{ messages.error.msg }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | contact',
    meta: [
      {
        hid: 'descriptionPropos',
        name: 'description',
        content: 'Proband Consulting,contact',
      },
    ],
  },
  // End Meta --------------
  data() {
    return {
      loading: false,
      messages: {
        success: {
          msg: '',
          status: false,
        },
        error: {
          msg: '',
          status: false,
        },
      },
      form: new Form({
        name: '',
        email: '',
        phone: '',
        subject: '',
        msg: '',
      }),
    }
  },
  methods: {
    sendEmail() {
      this.loading = true

      this.form
        .post('/api/sendEmail')
        .then((res) => {
          this.messages.success.msg = res.data.success
          this.messages.success.status = true

          setTimeout(() => {
            this.messages.success.status = false
          }, 3000)

          this.form.clear()
          this.form.reset()

          this.loading = false
        })
        .catch((err) => {
          this.loading = false

          if (err.response != undefined) {
            this.messages.error.status = true

            if (err.response.status == 422) {
              this.messages.error.msg =
                'Les informations saisies sont incorrectes !!'
            } else if (err.response.status == 500) {
              this.messages.error.msg =
                'Erreur Du Serveur Veuillez Réessayer Plus Tard !!'
            }

            setTimeout(() => {
              this.messages.error.status = false
            }, 3000)
          }
        })
    },
  },
}
</script>

<style lang="scss">
.default-form {
  position: relative;
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #009cea77;
    z-index: 4;
    display: flex;
    justify-content: center;
    align-items: center;

    i {
      color: #fff;
    }
  }
}

.messages {
  position: fixed;
  top: 10px;
  right: 10px;
  z-index: 9999999;
  .alert-success {
    color: #fff;
    background: #009dea;
  }
  .alert-danger {
    color: #fff;
    background: #ee5253;
  }

  .alert {
    padding: 8px 8px 10px !important;
  }
}
.has-error .form-control {
  border-color: #ee5253 !important;
}
.has-error .checkbox,
.has-error .checkbox-inline,
.has-error .control-label,
.has-error .help-block,
.has-error .radio,
.has-error .radio-inline,
.has-error.checkbox label,
.has-error.checkbox-inline label,
.has-error.radio label,
.has-error.radio-inline label {
  color: #ee5253 !important;
}
</style>
