<template>
<div class="container text-center">
    <div class="post">
    <div class="postinfotop">
       <h2>Liste des tâche en cours</h2>
        <p id="text" style="color:green; margin-left:100px;"></p>
    </div>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item"><a href="#">Tâche n°1</a></li>
            <li class="list-group-item"><a href="#">Tâche n°2</a></li>
            <li class="list-group-item"><a href="#">Tache n°3</a></li>
            <li class="list-group-item"><a href="#">Tache n°4</a></li>
        </ul>
    </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted LISTE DES TACHES CREE.')
        }
    }
</script>
