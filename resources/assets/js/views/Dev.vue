<template>
  <div class="dev">

    <transition name="fade">
      <div class="top">
        <div class="image-wrapper">
          <progressive-img
            src="/images/dev.jpg"
            placeholder="/images/dev-load.jpg"
          />
        </div>

        <div class="name-wrapper">
          <h1>Will code for...<br class="d-block d-sm-none">subscription?</h1>
        </div>

        <transition name="fade">
          <div v-show="textShow">

            <div class="scroll-wrapper">
              <div class="row">
                <div class="text-center col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                  <p class="bold">My mission is to help hundreds of small businesses by eliminating the up-front cost of having a website built.</p>
                </div>
              </div>
            </div>

            <div class="cta-wrapper">
              <div class="row">
                <div class="text-center">
                  <div v-scroll-to="'#contact'" class="btn btn-primary">Get in touch</div>
                </div>
              </div>
            </div>

          </div>
        </transition>

      </div>
    </transition>
    <div class="main-section-wrapper">

      <div class="main-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>No technical expertise necessary</h2>
              <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <p>We'll determine what your business needs for an online presence, I'll build it on top of a super simple system to manage the content, you're on your way.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <progressive-background
        class="main-section fixed"
        src="/images/brick.jpg"
        placeholder="/images/brick-load.jpg"
      >
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Starting at only $50/mth</h2>
              <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <p>Includes a domain, hosting, and unlimited support.</p>
              </div>
            </div>
          </div>
        </div>
      </progressive-background>

      <div class="main-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>From landing pages &amp; e-commerce, to robust web applications</h2>
              <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <p>I have vast experience creating for the web. If you think you need more than I offer, try me!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <progressive-background
        class="main-section fixed"
        src="/images/fam.jpg"
        placeholder="/images/fam-load.jpg"
      >
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Help your business, support my family</h2>
              <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <p>With the way I do freelance, my profits are minimal, but you can rest easy knowing that your contribution supports a family, not a large business.</p>
              </div>
            </div>
          </div>
        </div>
      </progressive-background>

      <div id="contact" class="main-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Start the process</h2>
              <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <p>Fill out the contact form below and I'll link you to my 'needs analysis'. It's a simple survey that will help determine what type of solution will be best for your business.</p>
                <p>I look forward to chatting!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 offset-sm-3 contact-form">
          <contact-form page="subscription"/>
        </div>
      </div>

    </div>
  </div>
</template>
<script>
  import ContactForm from '../components/ContactForm'

  export default {
    data() {
      return {
        textShow: false,
      }
    },
    mounted() {
      setTimeout(() => (this.textShow = true), 2000)
    },
    components: {
      ContactForm
    }
  }
</script>
