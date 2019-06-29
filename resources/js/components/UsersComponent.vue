<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>USER TABLE</h3>
                        <div class="card-tools">
                            <button class="btn btn-primary" v-on:click="newModal">
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
                                    <th>Created AT</th>
                                    <th>Modify</th>
                                </tr>
                                <tr v-for="(user, index) in users" :key="user.id">
                                    <td>{{index+1}}</td>
                                    <td>{{user.name}}</td>
                                    <td>{{user.email}}</td>
                                    <td><span class="tag tag-success">{{user.type | UpText}}</span></td>
                                    <td><span class="tag tag-success">{{user.created_at | FormatedDate}}</span></td>
                                    <td>
                                        <a href="" @click.prevent="editModal(user)">
                                            <i class="fas fa-edit  blue"></i>
                                        </a>
                                        <a href="" @click.prevent="deleteUser(user.id)">
                                            <i class="fas fa-trash  red"></i>
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
                            <h5 v-show="!editMode" class="modal-title" id="exampleModalLabel">NEW USER</h5>
                            <h5 v-show="editMode" class="modal-title" id="exampleModalLabel">Update User's Info</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form @submit.prevent="editMode ? updateUser():createUser()" >
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
                                    <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
                                    <button  v-show="editMode" type="submit" class="btn btn-success">Update</button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import AppMixins from '../mixin/AppMixins'
import { setInterval } from 'timers';

    export default {

        data(){

            return {

                editMode: true,
                users: {},          
                form: new Form({

                            id:'',
                            name:'',
                            email:'',
                            password:'',
                            type:'',
                            bio:'',
                            photo:''

                })
            }
            
        },
        methods: {

                newModal(){

                        this.editMode = false;
                        this.form.reset();
                        $('#addModal').modal('show');


                },
                editModal(user){

                        this.editMode = true;
                        this.form.clear();
                        $('#addModal').modal('show');
                        this.form.fill(user);


                },
                loadUsers(){

                        axios.get("api/user").then(({data})=>(this.users = data.data))
                        
                },

                createUser(){
                    this.$Progress.start();
                    this.form.post('api/user')
                        .then(()=>{

                            Fire.$emit('ReloadUsersPage')
                            $('#addModal').modal('hide');
                            Toast.fire({
                                type: 'success',
                                title: 'User Created successfully'
                                });
                            this.$Progress.finish();
                        })
                        .catch(err=>{

                            this.$Progress.fail();

                        })
               
                },
                updateUser(){

                            this.$Progress.start();
                            this.form.put('api/user/'+this.form.id).then(()=>{

                                        $('#addModal').modal('hide');
                                         Swal.fire(
                                                        'Updated!',
                                                        'User data has been updated successfully.',
                                                        'success'
                                                    )

                                        Fire.$emit('ReloadUsersPage');                                        
                                        this.$Progress.finish();

                            }).catch(()=>{


                                    this.$Progress.fail();

                            })
                },
                deleteUser(id){

                        Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                       
                       
                       
                                    if (result.value)
                                    {
                                // send request to server
                                            axios.delete(`api/user/${id}`).then(()=>{
                                                Swal.fire(
                                                        'Deleted!',
                                                        'User has been deleted.',
                                                        'success'
                                                    )
                                            Fire.$emit('ReloadUsersPage')
                                                
                                            }).catch(()=>{

                                                Swal.fire(
                                                        'Failed!',
                                                        'There was something wrong',
                                                        'danger'
                                                    )
                                        })

                                
                                }


                        })


                }
      

        },      
        created() {

            this.loadUsers();
            // setInterval(()=>this.loadUsers(),3000)
            Fire.$on('ReloadUsersPage',()=>{

                this.loadUsers()
            })

        },
       mixins:[AppMixins]



        // end-----------------
    }
</script>
<style scoped>

.card-tools {

        display: inline-block;
}

</style>

