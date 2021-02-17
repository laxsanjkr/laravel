<template>
  <div>
    <!-- Add a v-for cycle to show the retrieved data -->
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
</template>

<script>
  export default {
    name: 'Dashboard',
    props: {
      apiData: {
        type: Array,
        required: true
      }
    }
  }
</script>