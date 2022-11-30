import VueRouter from 'vue-router';
import  add_property  from "./components/add_property.vue"
import  update_property  from "./components/update_property.vue"
import  properties  from "./components/properties.vue"
import  app  from "./components/app.vue"    
const routes = [
    {
        name: "add_property",
        path: "/add_property",
        component: add_property
    },
    {
        name: "update_property",
        path: "/update_property/:id",
        component: update_property
    },
    {
        name: "properties",
        path: "/properties",
        component: properties
    }
]
const router = new VueRouter({
    mode:'history',
    routes:routes
}
 
  )

export default router;