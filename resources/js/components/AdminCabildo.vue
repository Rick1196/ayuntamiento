<template>
    <div class="container" >
        <div v-if="listado">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-if="prev != null" v-on:click="getPersonas(1)"><a class="page-link" >Anterior</a></li>
                    <li class="page-item" v-if="next != null" v-on:click="getPersonas(2)"><a class="page-link" >Siguiente</a></li>
                </ul>
            </nav>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3"><button class="btn btn-primary" v-on:click="handleClick(null,0)">Agregar persona</button></div>
            </div>
            <div class="table-responsive-xl">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Opciones</th>
                    </thead>
                    <tbody>
                        <tr v-for="(persona,num) in contenido">
                            <th>{{num+1}}</th>
                            <td>{{persona.nombre}}</td>
                            <td>{{persona.apellidos}}</td>
                            <td>{{persona.desc_puesto}}</td>
                            <td>
                                <button class="btn btn-primary">Ver</button>
                                <button class="btn btn-primary">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-if="prev != null" v-on:click="getPersonas(1)"><a class="page-link" >Anterior</a></li>
                    <li class="page-item" v-if="next != null" v-on:click="getPersonas(2)"><a class="page-link" >Siguiente</a></li>
                </ul>
            </nav>
        </div>
        <post></post>
    </div>
</template>
<script>
import create from './PostCabildo.vue'
export default {
    components:{
        'post':create
    },
    data(){
        return{
            listado: true,
            contenido:[],
            next:null,
            prev:null,
            filtro:'todos',
            respuestas:'',

        }
    },
    methods:{
        getPersonas(modo){
             var url = `api/get-personas/${this.filtro}`;
            if(modo == 1){
                url = this.prev;
            }
            else if (modo == 2) {
                url = this.next;
            }
            axios.get(url).then(response => {
                this.contenido = response.data.data;
                this.next = response.data.next_page_url
                this.prev = response.data.prev_page_url
            })
                .catch(error => {
                    console.log(error.response)
            });
        },
        handleClick (item, evento) {
            switch (evento) {
                case 0://crear
                    this.listado=false;
                    this.$root.$emit('crear');
                break;
                case 1://abrir  editor
                this.listado = false;
                    var noticia = Object.assign({}, item);
                    this.$root.$emit('editar',(noticia));
                break;
                case 2://eliminar evento
                    this.deleteEvento(evento.id);
                break;
                case 3:
                    this.$root.$emit('crear');
                break;
                default:
                break;
            }
        },
    },
    mounted(){
        this.getPersonas(0);
         this.$root.$on('terminada',(res) => {
            this.respuestas = res;
            this.listado = true;
        });

    }
}
</script>
