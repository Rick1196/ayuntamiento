<template>
    <div class="container">
        <div>
            <form >
                <div class="form-group col-md-4">
                <label for="inputState">Filtrar por</label>
                <select id="inputState" v-model="filtro" class="form-control">
                    <option value="todos" v-on:click="filtrar(0,0)">Mostrar todos</option>
                    <option v-for="seccion in secciones"  :value="seccion.nombre" :key="seccion.id">{{seccion.descripcion}}</option>
                </select>
                </div>
            </form>
        </div><br><br>
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
                    <th scope="col">Subtitulo</th>
                    <th scope="col">Opciones</th>
                </thead>
                <tbody>
                    <tr v-for="(post,num) in posts">
                        <th scope="col">{{num+1}}</th>
                        <td>{{post.titulo}}</td>
                        <td>{{post.subtitulo}}</td>
                        <td>
                            <button class="btn btn-primary" v-if="post.activado == 0" v-on:click="activacion(1,post.id)">Activar</button>
                            <button class="btn btn-primary" v-else v-on:click="activacion(0,post.id)">Desactivar</button>
                            <button class="btn btn-danger"  v-on:click="eliminar(post.id)">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            filtro:'todos',
            secciones:[],
            posts:[],
            next:null,
            prev:null,
        }
    },
    methods:{
        getPaginados(modo){
            var url = `api/get-posts/${this.filtro}`;
            if(modo == 1){
                url = url + this.prev;
            }
            else if (modo == 2) {
                url = url + this.next
            }
            axios.get(url).then(response => {
                this.posts = response.data.data;
                this.next = response.data.next_page_url
                this.prev = response.data.prev_page_url
            })
                .catch(error => {
                    console.log(error.response)
            });
        },
        getSecciones(){
             axios.get('api/secciones').then(response => {
                this.secciones = response.data;
            })
                .catch(error => {
                    console.log(error.response)
            });
        },
        activacion(modo,id){
            var url = '';
            if(modo == 1){
                url = 'api/act-post';
            }else{
                url = 'api/des-post';
            }
            axios.put(url,
            {id:id}).then(response => {
               this.getPaginados(0);
            })
                .catch(error => {
                    console.log(error.response)
            });
        },
        eliminar(id){
            axios.delete(`api/deletePost/${id}`).then(response => {
               this.getPaginados(0);
            })
                .catch(error => {
                    console.log(error.response)
            });
        },
    },
    watch:{
        filtro: function (){
            this.getPaginados(0);
        }
    },
    mounted(){
        this.getPaginados(0);
        this.getSecciones();
    }
}
</script>
