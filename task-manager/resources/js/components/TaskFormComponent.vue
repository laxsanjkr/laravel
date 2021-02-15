<template>
    <div class="container text-center">
    <div class="post">
    <div class="postinfotop">
       <h2>Crée une nouvelle tâches</h2>
       <h3>Merci de renseigné tous les champs</h3>
        <p id="text" style="color:green; margin-left:100px;"></p>
    </div>
    <form action="#" class="form newtopic" @submit.prevent="task">
       
        <div class="accsection">
            <div class="topwrap">
                <div class="posttext pull-left col-lg-12 col-md-6">

                    <div>
                        <input v-model="form.title" type="text" placeholder="Titre de la tâche" class="form-control" :class="{ 'is-invalid': form.errors.has('title') }" name="title" required>
                        <has-error :form="form" field="title"></has-error>
                        <br>
                    </div>
                    <div>
                       <input v-model="form.description" type="text" placeholder="Déscription de la tâche" class="form-control" :class="{ 'is-invalid': form.errors.has('description') }" name="description" required>
                        <has-error :form="form" field="description"></has-error>
                        <br>
                    </div>
                    <div>
                        <input v-model="form.level" type="numer" placeholder="Niveau d'importance de la tâche" class="form-control" :class="{ 'is-invalid': form.errors.has('level') }" name="level" min='1' max='10' required>
                        <has-error :form="form" field="level"></has-error>
                        <br>
                    </div>
                    <div>
                        <bold><span>Attribuer une couleur a votre tâche</span></bold>
                        <input v-model="form.color" type="color" placeholder="Attribuer une couleur a votre tâche" class="form-control" :class="{ 'is-invalid': form.errors.has('color') }" name="color" required>
                        <has-error :form="form" field="color"></has-error>
                        <br>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>  
        </div>
       <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    </div>
</div>
</template>

<script>
    export default {

        data () {
            return {
            form: new Form({
                title: '',
                description: '',
                level: '',
                color: '',
              })
            }
        },

        methods: {

            register () {
                this.form.post('/register')
                    .then(( response ) => { 

                        var attr = document.getElementById("text");
                        attr.innerHTML = response.data.message;  
                        
                        this.form.reset();

                    })
            },
        }       
    }
</script> 