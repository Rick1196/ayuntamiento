<template>
    <div  v-if="creando">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <label for="">Nombre(s)</label>
                            <input type="text" class="form-control"  v-model="persona.nombre"  placeholder="Nombre(s)">
                        </div>
                        <div class="col">
                            <label for="">Apellidos</label>
                            <input type="text" class="form-control" v-model="persona.apellido"  placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Puesto</label>
                        <input type="text" class="form-control"  v-model="persona.desc_puesto" id="inputAddress" placeholder="Puesto">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripcion</label>
                        <textarea style="resize:none;" v-model="persona.descripcion"  class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col"> 
                            <label for="">Link a twitter</label>
                            <input type="text" class="form-control"  v-model="persona.twitter"  placeholder="Twitter">
                        </div>
                        <div class="col" >
                            <label for="">Link a facebook</label>
                            <input type="text" class="form-control" v-model="persona.facebook"  placeholder="Facebook">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Foto de la persona</label>
                        <input type="file" class="form-control" v-on:change="onFileChange" id="exampleFormControlInput1" placeholder="Encabezado">
                    </div><br>
                    <div class="row">
                        <div class="col-sm-3">
                            <button  class="btn btn-primary" v-on:click="postPersona">Guardar</button>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-danger" v-on:click="limpiar()">Cancelar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-md-center">
                            <div class="card card-cascade wider">
                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                <img  class="card-img-top" :src="persona.image" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                </div>
                            
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">
                            
                                <!-- Title -->
                                <h4 class="card-title"><strong>{{persona.nombre +' '+ persona.apellido}}</strong></h4>
                                <!-- Subtitle -->
                                <h5 class="blue-text pb-2"><strong>{{persona.desc_puesto}}</strong></h5>
                                <!-- Text -->
                                <p class="card-text">{{persona.descripcion}}</p>

                                <a class="px-2 fa-lg tw-ic" :href="persona.twitter"  v-if=" persona.twitter != ''"><i class="fab fa-twitter"></i></a>
                                <a class="px-2 fa-lg fb-ic" :heref="persona.facebook"  v-if=" persona.facebook != ''"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            persona:{
                nombre:'',
                apellido:'',
                descripcion:'',
                desc_puesto:'',
                facebook:'',
                twitter:'',
                image:'',
            },
            creando:false,
            errores:'',
            exito:'',
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
                vm.persona.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        limpiar(){
            this.errores = '';
            this.persona={
                nombre:'',
                apellido:'',
                descripcion:'',
                desc_puesto:'',
                twitter:'',
                facebook:'',
                image:''
            },
            this.creando = false;
            this.$root.$emit('terminada',this.exito);
        },
        postPersona(){
            axios.post('api/postPersona',
                {
                    nombre:this.persona.nombre,
                    apellidos:this.persona.apellido,
                    descripcion:this.persona.descripcion,
                    desc_puesto:this.persona.desc_puesto,
                    image:this.persona.image,
                    twitter:this.persona.twitter,
                    facebook:this.persona.facebook,
                }
            ).then(response => {
               this.exito = response.data.success;
               this.limpiar();
            }).catch(error => {
                    console.log(error.response)
                    //this.errores = error.response.data.errors
                    this.exito ='';
            });
        }
    },
    mounted(){
         this.$root.$on('crear',() => {
            this.creando = true;
        });
    }
}
</script>
