<template>
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h3>Thank you for choosing me</h3>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-sm-8 col-offset-2">
        <payment-form></payment-form>
      </div>
    </div>
  </div>
</template>
<script>
  import PaymentForm from '../components/PaymentForm'

  export default {
    components: {
      PaymentForm
    }
  }
</script>
