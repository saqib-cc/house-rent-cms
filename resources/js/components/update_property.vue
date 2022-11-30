
<template>
    <div>
       <div class="content-wrapper">
       <section class="content">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Update Property</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">  
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a href="">Property</a></li>
                    <li class="breadcrumb-item ">Add Property</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">  
            <div class="col-md-8 offset-2 mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title" >Update Property</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form @submit.prevent="onSubmit" enctype="multipart/form-data"> 
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name"> Title </label>
                            <input type="text" class="form-control" name="title" v-model="data.title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea v-model="data.description" class="form-control" name="description" cols="5" rows="2" placeholder="Description"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="bedroom">Bedroom</label>
                                <input type="text" class="form-control" name="bedroom" v-model="data.bedroom" placeholder="Bedroom">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="Bathroom">Bathroom</label>
                                <input type="text" class="form-control" name="bathroom" v-model="data.bathroom" placeholder="Bathroom">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Address</label>
                            <input type="text" class="form-control" name="address" v-model="data.address" placeholder="Address">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="City">City</label>
                                    <input type="text" class="form-control" name="city" v-model="data.city" placeholder="City">
                                </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="Price">Price</label>
                                <input type="text" class="form-control" name="price" v-model="data.price" placeholder="Price">
                           </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="Image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file"  name="image" class="custom-file-input" @change="onChange">
                                    <label class="custom-file-label" for="image" >Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </section>
    </div>
    </div>
</template>
<script >
import   {ref,reactive} from 'vue'

const file = ref('');
export default {
    name: '',
   
    data() {
       return {
        data:{
        title: '',
        description: '',
        bedroom: '',
        bathroom: '',
        address: '',
        city: '',
        price: ''
        },
        
    }
    },
    methods: {
        onChange(e){
        file.value = e.target.files[0]; 
        
        },
         onSubmit(){
        let form_data = new FormData();
        form_data.append('image', file.value);
        form_data.append('title', this.data.title);
        form_data.append('description', this.data.description);
        form_data.append('bedroom', this.data.bedroom);
        form_data.append('bathroom', this.data.bathroom);
        form_data.append('address', this.data.address);
        form_data.append('city', this.data.city);
        form_data.append('price', this.data.price);
        // console.log(this.data.price);
        axios.post('/api/edit_property/'+this.$route.params.id,form_data).then((res)=>{
           this.$router.push('/properties');
         })
        },
        getProperty(id){
                axios.get('/api/get_property/'+id).then((res)=>{
                    this.data = res.data
                }).catch((err)=>{
                    console.log(err)
                });
            }
    },mounted: function() {
            this.getProperty(this.$route.params.id);
        },
}
</script>
<style scoped >

</style>
