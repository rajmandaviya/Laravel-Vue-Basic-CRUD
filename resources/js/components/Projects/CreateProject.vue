<template>
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="title">Create A Project</h1>
                    </div>
                    <div class="column">
                        <router-link :to="{ name: 'DisplayProject' }" class="btn btn-success is-pulled-right">Return to Projects</router-link>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <form v-on:submit.prevent="addProject">
                            <div class="form-group">
                                <b-field :type="errors.name.type" :message="errors.name.message">
                                    <b-input
                                            type="text"
                                            v-model="project.name"
                                            placeholder="Project Name"
                                            expanded
                                    >
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="form-group">
                                <b-field :type="errors.description.type" :message="errors.description.message">
                                    <b-input
                                        type="textarea"
                                        v-model="project.description"
                                        placeholder="Project Description"
                                    >
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Add Project</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
  export default {
    data() {
        return{
            project: {
                name: '',
                description: ''
            },
            errors: {
                name: {
                    type: '',
                    message: ''
                },
                description: {
                    type: '',
                    message: ''
                }
            }
        }
    },
    methods: {
        addProject() {
            if(this.project.name != '' && this.project.description != '') {
                this.axios.post('/project/new', this.project).then((response) => {
                    this.$router.push({name: 'DisplayProject'})
                    initializeError();
                })
            } else {
                if (this.project.name == '') {
                    this.errors.name.type = 'is-danger'
                    this.errors.name.message = 'Please enter name'
                }
                if (this.project.description == '') {
                    this.errors.description.type = 'is-danger'
                    this.errors.description.message = 'Please enter description'
                }
            }
        },
        initializeError() {
            this.errors.name.type = ''
            this.errors.name.message = ''
            this.errors.description.type = ''
            this.errors.description.message = ''
        },
    }
}
</script>