<template>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-6">
        <div class="card card-default">
          <div class="card-header">Tirada de dados</div>
          <div class="card-body">
              <form autocomplete="off" @submit.prevent="calcular" v-if="!success" method="post">
                <div class="form-group">
                    <label for="dado1">Dado1</label>
                    <input type="number" id="dado1" class="form-control" v-model="dado1">
                </div>
                <div class="form-group">
                    <label for="dado2">Dado2</label>
                    <input type="number" id="dado2" class="form-control" v-model="dado2">
                </div>
                <button type="submit" class="btn btn-primary" name='enviar' value='Sumar'>Jugar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        //
      }
    },
    components: {
        //
    }
  }
</script>