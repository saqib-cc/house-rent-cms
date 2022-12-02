<script>
import   {ref,reactive} from 'vue'
const bookings = ref('');
export default {
    name: '',
    
    data() {
        return {
            bookings,
        }
    },
    methods: {
        getBookings(){
                axios.get('/api/get_bookings/').then((res)=>{
                    this.bookings = res.data
                    console.log(res.data);
                }).catch((err)=>{
                    console.log(err)
                });
        }, delete_property(index){
            // alert(this.properties[index].id);
            axios.get('/api/delete_property/'+this.bookings[index].id).then((res)=>{
                this.bookings.splice(index,1);
            })
        }
    },mounted: function() {
            this.getBookings();
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
                        <h1 class="m-0">Bookings</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">  
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Bookings</li>
                            <li class="breadcrumb-item "></li>
                        </ol>
                       </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <!-- <RouterLink class="btn btn-primary" to="/add_property">Add Prope</RouterLink>
                             -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover ">
                                <thead>
                                    <tr >
                                        <th>Full Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Family Member</th>
                                        <th>Children</th>
                                        <th>Message</th>
                                        <th>property</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- {{bookings.data}} -->
                                     <tr v-for="(booking,index) in bookings.data" :key="booking.id" class='text-center'>
                                        <td>{{booking.fullname}}</td>
                                        <td>{{booking.phone}}</td>
                                        <td>{{booking.email}}</td>
                                        <td>{{booking.family_member}}</td>
                                        <td>{{booking.children}}</td>
                                        <td>{{booking.message}}</td>
                                        <td>{{booking.property}}</td>
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
