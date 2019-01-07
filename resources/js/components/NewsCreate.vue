<template>
    <div  v-if="creando">
            <img :src="noticia.image" class="img-fluid" style="max-width:100%"><br><br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Titulo de la nota</label>
                <input type="text" class="form-control" v-model="noticia.titulo" id="exampleFormControlInput1" placeholder="Encabezado">
                <div class="alert alert-warning" v-if="errores.titulo != null" role="alert">
                    {{errores.titulo[0]}}
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Subtitulo de la nota</label>
                <input type="text" class="form-control" v-model="noticia.subtitulo" id="exampleFormControlInput1" placeholder="Subtitulo">
                <div class="alert alert-warning" v-if="errores.subtitulo != null" role="alert">
                    {{errores.subtitulo[0]}}
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Contenido de la nota</label>
                <editor  v-model="noticia.contenido" api-key="nbugyxrcgxzt221o0ipcx4yj8r0zsnth1nyfrn4bv9zpodwk" :init="{plugins: 'wordcount'}"></editor>
                <div class="alert alert-warning" v-if="errores.contenido != null" role="alert">
                    {{errores.contenido[0]}}
                </div>
            </div>
            <label for="exampleFormControlSelect1" class="my-1 mr-2">Trasendencia de la nota</label>
            <select class="custom-select my-1 mr-sm-2 "v-model="noticia.importancia"   id="exampleFormControlSelect1">
                <option selected disabled>Trasendencia</option>
                <option class="form-control" v-for="num in 5" :value="num" :key="num">{{num}}</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">Esto ayuda a ordenar la noticias al momento de mostrarlas, 1, poco trascendente, 5,  muy trascendente</small>
            <br><br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Imagen para la nota</label>
                <input type="file" class="form-control" v-on:change="onFileChange" id="exampleFormControlInput1" placeholder="Encabezado">
            </div><br>
            <div class="row">
                <div class="col-sm-3">
                    <button  class="btn btn-primary" v-on:click="postNoticia">Publicar</button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-danger" v-on:click="limpiar()">Cancelar</button>
                </div>
            </div>
    </div>
</template>
<script>
import Editor from '@tinymce/tinymce-vue';
export default {
    components:{
        'editor': Editor
    },
    data(){
        return{
            creando:false,
            noticia:{
                titulo:'',
                subtitulo:'',
                contenido:'',
                importancia:'1',
                image:''
            },
            exito:'',
            errores:'',
        }
    },
    methods:{
        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.noticia.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        postNoticia(){
            axios.post('api/postNoticia',
                {titulo:this.noticia.titulo,
                subtitulo:this.noticia.subtitulo,
                contenido:this.noticia.contenido,
                importancia:this.noticia.importancia,
                image:this.noticia.image,
                }
            ).then(response => {
               this.exito = response.data.success;
               this.limpiar();
            }).catch(error => {
                    this.errores = error.response.data.errors
                    this.exito ='';
            });
        },
        limpiar(){
            this.errores = '';
            this.noticia={
                titulo:'',
                subtitulo:'',
                contenido:'',
                importancia:'1',
                image:''
            }
            this.creando = false;
            this.$root.$emit('terminada',this.exito);
        }
    },
    mounted(){
        this.$root.$on('crear',() => {
            this.creando = true;
        });
    }
}
</script>
