<template>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>  
    <div class="Crear">
        <h1>Crear una nueva lista de libros</h1>
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
        <br>
        <button @click="save" type="button" class="btn btn-success">Guardar</button>

        </div> 

        </div> 
</template>

<script>

export default({
  data(){
        return{
            
            nombre:"",
            cod_libro:"",
            isbn:"",
            titulo:"",
            annio_publicacion:"",
            precio_venta:"",
            descripcion:""


        }
    },
    

    methods:{
        async save(){
            var datos ={
                "nombre":this.nombre,
                "cod_libro":this.cod_libro,
                "isbn":this.isbn,
                "titulo":this.titulo,
                "annio_publicacion":this.annio_publicacion,
                "precio_venta":this.precio_venta,
                "descripcion":this.descripcion

            }
            var reponse = await fetch("http://127.0.0.1:8000/api/alimento/save",{
                "method":"POST",
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
