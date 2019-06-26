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
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>ibrahimolayinkaa@gmail.com</td>
                                    <td><span class="tag tag-success">Approved</span></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){

            
        }
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>

.card-tools {

        display: inline-block;
}

</style>

