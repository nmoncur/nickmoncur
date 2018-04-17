<template>
  <div class="home">
    <transition name="fade">
      <div v-if="siteShow">

        <div class="image-wrapper">
          <progressive-img
            src="/images/main.jpg"
            placeholder="/images/main-load.jpg"
          />
        </div>

        <div class="name-wrapper">
          <h1>Hi there,<br class="d-sm-none"> I'm Nick Moncur</h1>
        </div>

        <transition name="fade">
          <div v-show="textShow">
            <div class="scroll-wrapper">
              <div class="row">
                <div class="text-center col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                  <p>I'm a Web Developer. I am passionate about helping startups, small businesses,
                    and people with ideas create their vision.</p>

                  <p>Scroll down to learn more about me and my work.</p>
                </div>
                <div class="col-sm-12">
                  <img class="icon" src="/icons/arrow-down.png">
                </div>
              </div>
            </div>
          </div>
        </transition>

        <div class="main-section-wrapper">

          <progressive-background
            class="main-section fixed"
            src="/images/web.jpg"
            placeholde="/images/web-load.jpg"
          >
            <div class="container">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <h2>I build websites for small subscriptions</h2>
                  <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                    <p>
                      <router-link to="/dev">Click here</router-link> if you're interested in learning more.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </progressive-background>

          <div class="main-section">
            <div class="text-center">
              <div><h2>I've got experience</h2></div>
              <div class="col-sm-6 offset-sm-3">
                <p>My portfolio is constantly growing! I've been developing websites and applications since 2013.</p>
              </div>
            </div>
            <div class="projects">
              <div class="container">
                <div class="row text-center">
                  <div class="col-sm-4">
                    <div class="img-wrapper"><a href="http://clearbackflow.com" target="_blank"><img src="/images/clear.png" alt="Clear Backflow Services"></a></div>
                  </div>
                  <div class="col-sm-4">
                    <div class="img-wrapper"><a href="http://tactick.com" target="_blank"><img src="/images/tactick.png" alt="Tactick"></a></div>
                  </div>
                  <div class="col-sm-4">
                    <div class="img-wrapper"><a href="http://mezzo.tykesandtunes.com" target="_blank"><img src="/images/mezzo.png" alt="Mezzo"></a></div>
                  </div>
                  <div class="col-sm-6">
                    <div class="img-wrapper"><a href="http://kasimillerdesigns.com" target="_blank"><img src="/images/kmd.png" alt="Kasi Miller Designs"></a></div>
                  </div>
                  <div class="col-sm-6">
                    <div class="img-wrapper"><a href="https://depthinteractive.com" target="_blank"><img src="/images/depth.png" alt="Depth Interactive"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <progressive-background
            class="main-section fixed"
            src="/images/skills.jpg"
            placeholder="/images/skills-load.jpg"
          >
            <div class="text-center">
              <div><h2>I've got skills</h2></div>
              <div class="col-sm-6 offset-sm-3"><p>I have a knack for self-learning. From saxophone to VueJs, I've found I can learn and do anything I commit to.</p></div>
            </div>
            <div class="row">
              <div class="col-5 col-sm-4 offset-sm-3">
                <ul>
                  <li>PHP</li>
                  <li>Laravel</li>
                  <li>OctoberCMS</li>
                  <li>Sass/Css</li>
                  <li>AWS</li>
                </ul>
              </div>
              <div class="col-7 col-sm-4">
                <ul>
                  <li>VueJs</li>
                  <li>Wordpress</li>
                  <li>Square/Recurly API's</li>
                  <li>Fat-Free Framework</li>
                  <li>Github/Bitbucket</li>
                </ul>
              </div>
            </div>
          </progressive-background>

          <div class="main-section">
            <div class="row">
              <div class="col-12 text-center">
                <h2>I have many passions</h2>
                <div>
                  <p>My family, music, bikes, and cars, to name a few.</p>
                </div>
              </div>
            </div>
            <div class="row text-center">
              <progressive-background
                class="col-sm-4 image"
                src="/images/moto.jpg"
                placeholder="/images/moto-load.jpg"
              />
              <progressive-background
                class="col-sm-4 image"
                src="/images/family.jpg"
                placeholder="/images/family-load.jpg"
              />
              <progressive-background
                class="col-sm-4 image"
                src="/images/piano.jpg"
                placeholder="/images/piano-load.jpg"
              />
            </div>
          </div>

          <div class="main-section">
            <div class="text-center">
              <div><h2>I'd love to chat</h2></div>
              <div class="col-sm-6 offset-sm-3">
                <p>Fill out the form below to reach me. I welcome any project inquiries or other questions.</p>
              </div>
            </div>
            <div class="col-sm-6 offset-sm-3 contact-form">
              <contact-form/>
            </div>
          </div>

        </div>

      </div>
    </transition>
  </div>
</template>
<script>
  import ContactForm from '../components/ContactForm'

  export default {
    data() {
      return {
        siteShow: false,
        textShow: false,
      }
    },
    mounted() {
      this.siteShow = true
      setTimeout(() => (this.textShow = true), 2000)
    },
    components: {
      ContactForm
    }
  }
</script>
