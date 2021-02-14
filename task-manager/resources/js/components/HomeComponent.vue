<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bienvenu sur le Gestionnaire de tâche</div>

                    <div class="card-body">
                        <div class="id-user">           id                          :</div>
                        <div class="total-task">        nombre de tâche TOTAL       :</div>
                        <div class="task-in-progress">  nombre de tâche en cours    :</div>
                        <div class="task-finish">       nombre de tâche traiter     :</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
