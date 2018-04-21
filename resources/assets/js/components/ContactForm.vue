<template>
  <div>
    <form action="/contact" method="post" @submit.prevent="submitForm">
      <div>
        <input type="hidden" v-model="form.form">

        <div class="form-group">
          <label for="name" class="sr-only">Your Name</label>
          <input v-model="form.name" id="name" type="text" placeholder="Your Name" class="form-control">
        </div>

        <div class="form-group">
          <label for="email" class="sr-only">Your Email</label>
          <input v-model="form.email" id="email" type="email" placeholder="Email" class="form-control">
        </div>

        <div class="form-group">
          <label for="number" class="sr-only">Your Phone Number (optional)</label>
          <input v-model="form.number" id="number" type="text" placeholder="Number (optional)" class="form-control">
        </div>

        <div class="form-group">
          <label for="notes" class="sr-only">Notes</label>
          <textarea v-model="form.notes" class="form-control" id="notes" rows="3" placeholder="Additional Notes (optional)"></textarea>
        </div>

        <div class="form-group row">
          <div class="col-3">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>

          <div v-if="message" class="col-9"><span class="text-alert">{{ message }}</span></div>

        </div>

      </div>
    </form>
  </div>
</template>
<script>
  import axios from 'axios'

  export default {
    props: ['page'],
    data() {
      return {
        form: {
          page: this.page,
        },
        message: null
      }
    },
    methods: {
      submitForm() {
        axios.post('/contact', this.form)
          .then(() => { this.message = 'Thanks for reaching out! Look for an email from me in a few minutes.' })
          .catch(() => { this.message = 'Form submission failed. Name and email are required' })
      }
    }
  }
</script>
