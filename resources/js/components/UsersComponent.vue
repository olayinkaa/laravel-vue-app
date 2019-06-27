<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>USER TABLE</h3>
                        <div class="card-tools">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                                <i class="fas fa-plus"> ADD NEW USER</i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Modify</th>
                                </tr>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{user.id}}</td>
                                    <td>{{user.name}}</td>
                                    <td>{{user.email}}</td>
                                    <td><span class="tag tag-success">{{user.type}}</span></td>
                                    <td>
                                        <a href="">
                                            <i class="fas fa-edit fa-2x blue"></i>
                                        </a>
                                        <a href="">
                                            <i class="fas fa-trash fa-2x red"></i>
                                        </a>
                                    </td>
                                </tr>                
                            </table>
                    </div>
                </div>
            </div>
        </div>

                    <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">NEW USER</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form @submit.prevent="CreateUser" >
                                <div class="modal-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input v-model="form.name" type="text" name="name"
                                                    class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                                <has-error :form="form" field="name"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input v-model="form.email" type="email" name="email"
                                                    class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                                <has-error :form="form" field="email"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <label>Bio</label>
                                                <textarea v-model="form.bio"  name="bio" placeholder="Short bio for user (optional)"
                                                    class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                                <has-error :form="form" field="bio"></has-error>
                                            </div>
                                            <div class="form-group">
                                                <label>Role</label>
                                                <select v-model="form.type"  name="type" 
                                                    class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                                                    <option value="">Select User Role</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="user">Standard User</option>
                                                    <option value="author">Author</option>
                                                </select>
                                                <has-error :form="form" field="type"></has-error>
                                            </div>
                                        
                                            <div class="form-group">
                                            <label>Password</label>
                                            <input v-model="form.password" type="password" name="password"
                                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                            <has-error :form="form" field="password"></has-error>
                                            </div>                  
                                            <!-- <button :disabled="form.busy" type="submit" class="btn btn-primary">Log In</button> -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios'

    export default {

        data(){

            return{

                users: {},          
                form: new Form({

                    name:'',
                    email:'',
                    password:'',
                    type:'',
                    bio:'',
                    photo:''
                })
            }
            
        },
        methods : {

                LoadUsers(){

                        axios.get('api/user').then((response=>{

                            this.users = response.data
                        });
                },
                CreateUser(){

                    this.form.post('api/user');
                }
        },
        created() {

            this.LoadUsers();
        }




        // end-----------------
    }
</script>
<style scoped>

.card-tools {

        display: inline-block;
}

</style>

