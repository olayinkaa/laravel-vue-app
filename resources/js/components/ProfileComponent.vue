<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">



                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1>Profile</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">User Profile</li>
                                        </ol>
                                    </div>
                                </div>
                            </div><!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-md-3">

                                    <!-- Profile Image -->
                                    <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            :src="getProfilePhoto()"
                                            alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center">{{this.form.name}}</h3>

                                        <p class="text-muted text-center">Software Engineer</p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="float-right">13,287</a>
                                        </li>
                                        </ul>

                                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- About Me Box -->
                                    <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">About Me</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <strong><i class="fa fa-book mr-1"></i> Education</strong>

                                        <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                        </p>

                                        <hr>

                                        <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                                        <p class="text-muted">Malibu, California</p>

                                        <hr>

                                        <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                                        <p class="text-muted">
                                        <span class="tag tag-danger">UI Design</span>
                                        <span class="tag tag-success">Coding</span>
                                        <span class="tag tag-info">Javascript</span>
                                        <span class="tag tag-warning">PHP</span>
                                        <span class="tag tag-primary">Node.js</span>
                                        </p>

                                        <hr>

                                        <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                    </div>
                                    <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-9">
                                    <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                        <div class="tab-pane" id="activity">
                                            <!-- Post -->
                                            <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="/img/user1-128x128.jpg" alt="user image">
                                                <span class="username">
                                                <a href="#">Jonathan Burke Jr.</a>
                                                <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                                </span>
                                                <span class="description">Shared publicly - 7:30 PM today</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                                </a>
                                                </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->
                                            <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="/img/user7-128x128.jpg" alt="User Image">
                                                <span class="username">
                                                <a href="#">Sarah Ross</a>
                                                <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                                </span>
                                                <span class="description">Sent you a message - 3 days ago</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>

                                            <form class="form-horizontal">
                                                <div class="input-group input-group-sm mb-0">
                                                <input class="form-control form-control-sm" placeholder="Response">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-danger">Send</button>
                                                </div>
                                                </div>
                                            </form>
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->
                                            <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="/img/user6-128x128.jpg" alt="User Image">
                                                <span class="username">
                                                <a href="#">Adam Jones</a>
                                                <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                                </span>
                                                <span class="description">Posted 5 photos - 5 days ago</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class="row mb-3">
                                                <div class="col-sm-6">
                                                <img class="img-fluid" src="/img/photo1.png" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                            <img class="img-fluid mb-3" src="/img/photo2.png" alt="Photo">
                                                            <img class="img-fluid" src="/img/photo3.jpg" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-6">
                                                            <img class="img-fluid mb-3" src="/img/photo4.jpg" alt="Photo">
                                                            <img class="img-fluid" src="/img/photo1.png" alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                                </a>
                                                </span>
                                            </p>

                                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                            </div>
                                            <!-- /.post -->
                                        </div>
                                     

                                        <div class="active tab-pane" id="settings">
                                            <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                                <div class="col-sm-10">
                                                    <input type="email" v-model="form.name" name="name"
                                                    :class="{ 'is-invalid': form.errors.has('name') }" class="form-control" id="inputName" >
                                                    <has-error :form="form" field="name"></has-error>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                <div class="col-sm-10">
                                                    <input type="email" v-model="form.email" 
                                                     :class="{ 'is-invalid': form.errors.has('name') }" class="form-control" id="inputEmail" >
                                                    <has-error :form="form" field="email"></has-error>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputType" class="col-sm-2 control-label">Type of User</label>

                                                <div class="col-sm-10">
                                                    <input type="text" v-model="form.type" class="form-control" id="inputType" disabled>
                                                    <has-error :form="form" field="name"></has-error>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputBio" class="col-sm-2 control-label">Bio</label>

                                                <div class="col-sm-10">
                                                    <textarea class="form-control" v-model="form.bio" 
                                                     :class="{ 'is-invalid': form.errors.has('bio') }" name="bio" id="inputBio" ></textarea>
                                                    <has-error :form="form" field="bio"></has-error>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProfilePhoto" class="col-sm-4 control-label" >Profile Photo</label>

                                                <div class="col-sm-8">
                                                <input type="file" class="form-control-file" @change="updateProfile" id="inputProfilePhoto" name="photo" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                                                <div class="col-sm-10">
                                                    <input type="text" v-model="form.password" class="form-control" id="inputPassword" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" @click.prevent="updateInfo" class="btn btn-success btn-block">Update</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                    </div>
                                    <!-- /.nav-tabs-custom -->
                                </div>
                                <!-- /.col -->
                                </div>
                                <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- /.content -->






            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {

                    return {

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
        mounted() {
                    // console.log('Component mounted.')
        },
        created(){

                        this.loadProfile();
                        Fire.$on('ReloadProfilePage',()=> this.loadProfile() );
        },
        methods:{

                    getProfilePhoto(){

                                    let photo = (this.form.photo.length > 200) ? this.form.photo : "img/profile/"+ this.form.photo ;
                                    return photo;
                    },
                    loadProfile(){

                            axios.get('api/profile').then(({data})=>(this.form.fill(data)))


                    },
                    updateInfo(){

                            this.$Progress.start();      
                            if(this.form.password == ''){
                                        this.form.password = undefined;
                             }                      
                            this.form.put('api/profile').then(()=>{

                                        this.$Progress.finish();
                                        Fire.$emit('ReloadProfilePage')

                                        // Swal.fire(
                                        //             'UPDATED!',
                                        //             'Profile successfully updated',
                                        //             'success'
                                        //         )
                                        
                            }).catch(()=>{

                                    this.$Progress.fail();

                            })

                    },
                    updateProfile(e){
                            let file = e.target.files[0];
                            let reader = new FileReader();

                            let limit = 1024 * 1024 * 2;
                            if(file['size'] > limit)
                            {
                                Swal.fire({
                                    type: 'error',
                                    title: 'Oops...',
                                    text: 'You are uploading a large file',
                                })
                                return false;
                            }

                            reader.onloadend = (file) => {
                                this.form.photo = reader.result;
                            }
                            reader.readAsDataURL(file);
            }
        }
    }
</script>
