<template>
    <div>
        <h1>Modificacion de los datos ID:{{id_}}</h1>
        <div class="nav justify-content-center">
        <div>
        <tr >
            <td>
                <h3>Nombre</h3>
            </td>
            <td>
                <input type = "text" v-model="nombre"/>
            </td>
        </tr>
        
        <tr >
            <td>
                <h3>cod_libro</h3>
            </td>
            <td>
                <input type = "text" v-model="cod_libro"/>
            </td>
        </tr>
        

        <tr >
            <td>
                <h3>isbn</h3>
            </td>
            <td>
                <input type = "text" v-model="isbn"/>
            </td>
        </tr>

       <tr >
            <td>
                <h3>Titulo</h3>
            </td>
            <td>
                <input type = "text" v-model="Titulo"/>
            </td>
        </tr>
        

        <tr>
            <td>
                 <h4>Annio_publicacion</h4>
            </td>
            <td>
                <input type ="date" v-model="Annio_publicacion"/>
            </td>
        </tr>

        <tr>
            <td>
                <h5>Precio_venta</h5>
            </td>
            <td>
                <input type="number" v-model="Precio_venta"/>
            </td>
        </tr>

        <tr>
            <td>
                <h6>descripcion</h6>
            </td>
            <td>
                <input type="text" v-model="descripcion"/>
            </td>
        </tr>

        </div>
        </div>
        
       

        <br>
        <button @click="actualizar" class="btn btn-success">Guardar</button>

    </div>
</template>

<script>

export default({
  data(){
        return{
            id_:this.$route.query.id,
            nombre:"",
            cod_libro:"",
            isbn:"",
            titulo:"",
            annio_publicacion:"",
            precio_venta:"",
            descripcion:""
       
       
        }
    },
    mounted(){
        this.get_libro()
    },
    methods:{
        async get_libro(){
            var reponse = await fetch("http://127.0.0.1:8000/Api/Libro/"+this.id_);
            var datos = await reponse.json();
            var r = datos.data
            this.nombre = r.nombre
            this.cod_libro = r.cod_libro
            this.isbn = r.isbn
            this.titulo= r.titulo
            this.annio_publicacion= r.annio_publicacion
            this.precio_venta= r.precio_venta
            this.descripcion= r.descripcion
        },
        async actualizar(){
            var datos ={
                "nombre":this.nombre,
                "cod_libro":this.cod_libro,
                "isbn":this.isbn,
                "titulo":this.titulo,
                "annio_publicacion":this.annio_publicacion,
                "precio_venta":this.precio_venta,
                "descripcion":this.descripcion

            }
            var reponse = await fetch("http://127.0.0.1:8000/Api/Libro/"+this.id_,{
                "method":"PUT",
                headers:{
                    'Content-Type':'application/json'
                },
                body: JSON.stringify(datos)
                
            });
            console.log(reponse)
        }
       
    }
})
</script>