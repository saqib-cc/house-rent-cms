<script>
import   {ref,reactive} from 'vue'
const properties = ref('');
export default {
    name: '',
    
    data() {
        return {
            properties,
        }
    },
    methods: {
        getProperties(){
                axios.get('/api/get_properties/').then((res)=>{
                    this.properties = res.data
                    console.log(res.data);
                }).catch((err)=>{
                    console.log(err)
                });
        }, delete_property(index){
            // alert(this.properties[index].id);
            axios.get('/api/delete_property/'+this.properties[index].id).then((res)=>{
                this.properties.splice(index,1);
            })
        }
    },mounted: function() {
            this.getProperties();
 },
}
</script>
<template>

<div  class="hold-transition sidebar-mini">
        <div class="wrapper">
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row mb-2">
                       <div class="col-sm-6">
                        <h1 class="m-0">Properties</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">  
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Properties</li>
                            <li class="breadcrumb-item "></li>
                        </ol>
                       </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <RouterLink class="btn btn-primary" to="/add_property">Add Property</RouterLink>
                            
                            <!-- <a href="/view_addproperty" class="btn btn-primary">Add Property</a> -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover ">
                                <thead>
                                    <tr >
                                        <th>Title</th>
                                        <th>Bedroom</th>
                                        <th>Bathroom</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr v-for="(property,index) in properties" :key="property.id" class='text-center'>
                                        <td>{{property.title}}</td>
                                        <td>{{property.bedroom}}</td>
                                        <td>{{property.bathroom}}</td>
                                        <td>{{property.address}}</td>
                                        <td>{{property.city}}</td>
                                        <td>{{property.price}}</td>
                                        <td><img  class="img" :src="property.image" alt=""></td>
                                        <td><router-link :to="`/update_property/${property.id}`" ><i class="fa fa-edit" aria-hidden="true" ></i></router-link> &nbsp;&nbsp;&nbsp; <span  @click='delete_property(index)'><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></td>
                                    </tr>
                                </tbody>
                            
                            </table>
                            </div>  
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
</div>
</template>
<style scoped >
.img{
    max-width: 10%;
    max-height: 10%;
}
</style>
