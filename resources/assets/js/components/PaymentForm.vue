<template>
  <div>
    <form action="" @submit.prevent="submitForm()">
      <div class="row">

        <div class="form-group col-sm-6">
          <label for="name" class="sr-only">Your name</label>
          <input id="name" type="text" placeholder="Your Name" class="form-control">
        </div>

        <div class="form-group col-sm-6">
          <label for="email" class="sr-only">Your email address</label>
          <input id="email" type="email" placeholder="Your Email" class="form-control" required>
        </div>

        <div class="form-group">
          <div class="col-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

          <div v-if="message" class="col-9"><span class="text-alert">{{ message }}</span></div>

        </div>

      </div>
    </form>
  </div>
</template>
<script>
  export default {
    methods: {
      submitForm() {
        console.log('submitted')
      }
    }
  }
</script>
