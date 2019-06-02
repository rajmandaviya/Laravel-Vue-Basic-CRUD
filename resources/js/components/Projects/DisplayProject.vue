<template>
    
    <section class="hero">
        <b-modal :active.sync="confirmation.isActive">
            <confirmation @confirm="deleteProject"></confirmation>
        </b-modal>
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h1 class="title">Projects</h1>
                    </div>
                    <div class="column">
                        <router-link :to="{ name: 'CreateProject' }" class="btn btn-primary is-pulled-right">Create Project</router-link>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Project Name</td>
                                    <td>Project Description</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="(project, index) in projects" :key="index">
                                    <td>{{ project.id }}</td>
                                    <td>{{ project.name }}</td>
                                    <td>{{ project.description }}</td>
                                    <td class="is-pull-right">
                                        <router-link :to="{name: 'EditProject', params: { id: project.id }}" class="btn btn-primary">Edit</router-link>
                                        <button class="btn btn-danger"  @click="deleteConfirmation(project.id)">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data(){
            return{
                projects: [],
                columns: [
                    {
                        field: 'id',
                        label: 'ID',
                        width: '40',
                        numeric: true
                    },
                    {
                        field: 'name',
                        label: 'Project Name',
                    },
                    {
                        field: 'description',
                        label: 'Project Description',
                    }
                ],
                confirmation: {
                    isActive: false,
                },
                deleteId: null
            }
        },

        created: function()
        {
            this.fetchProjects();
        },

        methods: {
            fetchProjects()
            {
                this.axios.get('/project/list')
                .then(response => {
                    this.projects = response.data;
                });
            },
            deleteConfirmation(id) {
                this.deleteId = id;
                this.confirmation.isActive = true;
            },
            deleteProject()
            {
                this.projects.splice(this.deleteId, 1);
                this.axios.post('/project/delete/' + this.deleteId)
                .then(response => {
                     this.fetchProjects();
                });
            }
        }
    }
</script>