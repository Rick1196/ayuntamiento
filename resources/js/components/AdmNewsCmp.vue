<template>
    <div class="container">
        <div v-if="listado">
            <div class="alert alert-warning" v-if="respuestas != ''" role="alert">
                {{respuestas}}
            </div>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3"><button class="btn btn-primary" v-on:click="handleClick(null,0)">Publicar noticia</button></div>
            </div><br>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-if="prev != null" v-on:click="getPaginados(1)"><a class="page-link" >Anterior</a></li>
                    <li class="page-item" v-if="next != null" v-on:click="getPaginados(2)"><a class="page-link" >Siguiente</a></li>
                </ul>
            </nav>
            <div class="table-responsive-xl">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Fecha de publicacion</th>
                        <th scope="col">Opciones</th>
                    </thead>
                    <tbody>
                        <tr v-for="(noticia,num) in noticias">
                            <th>{{num+1}}</th>
                            <td>{{noticia.titulo}}</td>
                            <td>{{noticia.created_at}}</td>
                            <td>
                                <button class="btn btn-danger" v-on:click="eliminar(noticia.id)">Eliminar</button>
                                <button class="btn btn-primary" v-on:click="handleClick(noticia,1)">Editar</button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody></tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-if="prev != null" v-on:click="getPaginados(1)"><a class="page-link" >Anterior</a></li>
                    <li class="page-item" v-if="next != null" v-on:click="getPaginados(2)"><a class="page-link" >Siguiente</a></li>
                </ul>
            </nav>
        </div>
        <creador></creador>
        <editar></editar>
        <br>
        <br>
    </div>
</template>
<script>
import Create from './NewsCreate.vue'
import Update from './NewsUpdate.vue'

export default {
    components:{
        'creador':Create,
        'editar':Update,
    },
    data(){
        return{
            listado:true,
            noticias :'',
            next:null,
            prev:null,
            respuestas:'',
            filtro:'todas',
        }
    },
    methods:{
        getPaginados(modo){
            var url = `api/get-noticias/${this.filtro}`;
            if(modo == 1){
                url = this.prev;
            }
            else if (modo == 2) {
                url = this.next;
            }
            axios.get(url).then(response => {
                this.noticias = response.data.data;
                this.next = response.data.next_page_url
                this.prev = response.data.prev_page_url
            })
                .catch(error => {
                    console.log(error.response)
            });
        },
        eliminar(id){
            axios.delete(`api/deleteNoticias/${id}`,{ headers: { Authorization: `Bearer ${this.token}` }}).then(response => {
                this.getPaginados(0);
                this.respuestas = response.data;
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
        this.$root.$on('terminada',(res) => {
            this.listado = true;
            this.respuestas = res;
            this.getPaginados(0);
        });
        this.getPaginados(0);
    }
}
</script>

