<template>
  <div>
    <!-- Add a v-for cycle to show the retrieved data -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Bienvenu sur le Gestionnaire de tâche de <b> @{{apiData.name}} </b></div>

                    <div class="card-body">
                        <ul>
                            <li>
                              <b>Identifiant : </b> {{apiData.name}}
                            </li>
                            <li>
                              <b>Email : </b> {{apiData.email}}
                            </li>
                            <li>
                              <b>Tâche crée : </b> 
                            </li>
                            <li>
                              <b>Tâche términée : </b> 
                            </li>
                            <li>
                              <b>Tâche en cours : </b> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Dashboard',
    props: {
      apiData: {
        type: Object,
        required: true
      }
    }
  }
</script>