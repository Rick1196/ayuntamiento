<template>
    <div class="container">
        <div class="alert alert-warning" role="alert"  v-if="respuestas.length != 0">
            <button type="button" v-on:click="closeMessMod" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong v-for="respuesta in respuestas">{{respuesta.contenido}}</strong>
        </div>
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" v-model="buscadorUsuario" placeholder="Email">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fab fa-searchengin"></i>
                </span>
            </p>
        </div>
        <div class="table-responsive-xl">
            <table class="table">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Opciones</th>
                </thead>
                <tbody>
                    <tr v-for="(usuario,num) in  filtrarUsuarios" v-show="(pag - 1) * NUM_RESULTS <= num  && pag * NUM_RESULTS > num">
                        <th>{{num+1}}</th>
                        <td>{{usuario.name}}</td>
                        <td>{{usuario.email}}</td>
                        <td>{{usuario.rol}}</td>
                        <td>
                            <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" v-on:click="editar(usuario)"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger" v-on:click="dropUsuario(usuario.id)"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav class="pagination" role="navigation" aria-label="pagination">
            <a class="pagination-previous" v-show="pag != 1" v-on:click.prevent="pag -= 1" title="This is the first page">Anterior</a>
            <a class="pagination-next" v-show="pag * NUM_RESULTS / filtrarUsuarios.length < 1" v-on:click.prevent="pag += 1">Siguiente</a>
            
        </nav>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" v-show="pag != 1" v-on:click.prevent="pag -= 1">Anterior</a></li>
                <li class="page-item"><a class="page-link" v-show="pag * NUM_RESULTS / filtrarUsuarios.length < 1" v-on:click.prevent="pag += 1">Siguiente</a></li>
            </ul>
        </nav>
        <div class="modal" v-bind:class="modalClass">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Editando: {{editando.email}}</p>
                    <button class="delete"  v-on:click="closeEdit" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    
                </section>
                <footer class="modal-card-foot">
                <button class="button is-success" v-on:click="putUsuario">Guardar cambios</button>
                <button class="button" v-on:click="closeEdit">Cancelar</button>
                </footer>
            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando: {{editando.email}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert" v-if="respuestasModal.length != 0">
                        <button type="button" v-on:click="closeMessMod" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p v-for="respuesta in respuestasModal"><strong >{{respuesta.contenido}}</strong></p>
                    </div>
                    <form >
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nombre</label>
                            <input type="text" class="form-control"v-model="editando.name"  id="formGroupExampleInput" placeholder="Example input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="email" class="form-control" v-model="editando.email" id="formGroupExampleInput2" placeholder="Another input">
                        </div>
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo de usuario</label>
                                <select class="custom-select my-1 mr-sm-2"  v-model="editando.role_id" id="inlineFormCustomSelectPref">
                                    <option disabled>Tipo de usuario</option>
                                    <option v-for="rol in roles" :value="rol.id" :key="rol.id"> {{rol.descripcion}}</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" v-on:click="closeMessMod" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" v-on:click="putUsuario">Guardar cambios</button>
                </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
export default {
    data: function(){
        return{
            usuarios:[],
            respuestas:[],
            isActive:false,
            editando:'',
            roles:[],
            respuestasModal:[],
            NUM_RESULTS: 10, // Numero de resultados por página
            pag: 1, // Página inicial
            buscadorUsuario: '',
        }
    },
    methods:{
        getUsuarios(){
            axios.get('api/users',{ headers: { Authorization: `Bearer ${this.token}` }}).then(response => {
                this.usuarios = response.data;
            })
                .catch(error => {
                    console.log(error.response)
                });
        },
        getRoles(){
            axios.get('api/obtenerRoles',{ headers: { Authorization: `Bearer ${this.token}` }}).then(response => {
                this.roles = response.data;
            })
                .catch(error => {
                    console.log(error.response)
                });
        },
        dropUsuario(id){
            axios.delete(`api/dropUser/${id}`,{ headers: { Authorization: `Bearer ${this.token}` }}).then(response => {
                this.getUsuarios();
                this.respuestas = response.data;
            })
            .catch(error => {
                console.log(error.response)
            });
        },
        putUsuario(){
            axios.put(`api/putUser`,
            {usuario:this.editando},
            { headers: { Authorization: `Bearer ${this.token}` }}).then(response => {
                this.respuestas = response.data;
                this.getUsuarios();
                this.closeEdit();
            })
            .catch(error => {
                console.log(error.response)
                this.respuestasModal = error.response.data;
            });
        },
        closeMess(){
            this.respuestas = [];
        },
        editar(usuario){
            this.isActive= !this.isActive;
            this.editando =Object.assign({}, usuario);
        },
        closeEdit(){
            this.isActive = !this.isActive;
            this.editando = '';
            $('#exampleModal').modal('hide');
        },
        closeMessMod(){
            this.respuestasModal = [];
        },
    },
    mounted(){
        this.getUsuarios();
        this.getRoles();
    },
    computed: {
        modalClass: function () {
             if(this.isActive){
                return 'is-active';
             }else{
                 return '';
             }
        },
        filtrarUsuarios: function () {
            if (this.buscadorUsuario === '') {
                return this.usuarios;
            } else {
                return this.usuarios.filter((usuario) => {
                    return usuario.email.toString().toLowerCase().includes(this.buscadorUsuario
                        .toLowerCase());
                });
            }
        }
    }
}
</script>

