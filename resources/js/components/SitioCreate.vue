<template>
    <div  v-if="creando">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre del sitio</label>
                <input type="text" class="form-control" v-model="sitio.nombre" id="exampleFormControlInput1" placeholder="Nombre">
                <div class="alert alert-warning" v-if="errores.titulo != null" role="alert">
                    {{errores.titulo[0]}}
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion del sitio</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" v-model="sitio.descripcion" rows="3"></textarea>
            </div>
            <label for="exampleFormControlSelect1" class="my-1 mr-2">Tipo de construccion</label>
            <select class="custom-select my-1 mr-sm-2 " v-model="sitio.tipo"   id="exampleFormControlSelect1">
                <option selected disabled>Tipo</option>
                <option :value="'gobierno'">Gobierno</option>
                <option :value="'religiosos'">Religioso</option>
                <option :value="'civil'">Civil</option>
            </select>
            <br><br>
            <div class="row">
                <div class="col-sm-3">
                    <button  class="btn btn-primary" v-on:click="postSitio">Publicar</button>
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
            sitio:{
                nombre:'',
                descripcion:'',
                tipo:'gobierno',
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
                vm.sitio.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        postSitio(){
            axios.post('api/postSitio',
                {nombre:this.sitio.nombre,
                descripcion:this.sitio.descripcion,
                tipo:this.sitio.tipo,
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
            this.sitio={
                nombre:'',
                descripcion:'',
                tipo:'gobierno',
            },
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
