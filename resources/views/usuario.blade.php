<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="dropdown" style="margin-top: 15px; margin-left: 15px;width: 300px">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                 menu
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="http://127.0.0.1:8000/">inicio</a>
                  <a class="dropdown-item" href="http://127.0.0.1:8000/adeudo-total">adeudo general</a>
                </div>
              </div>
            </div>

<button type="button" onclick="location.href='/crear-usuario'" class="btn btn-raised btn-primary boton1"  style="width: 300px ;margin-left: 500px; margin-top: -65px"> crear</button>

<table border="1px" class="table" style="margin-top: -5px">
    <thead class="thead-dark">
   <th>id</th>
    <th> nombre</th>
    <th>apellido</th>
    <th> correo</th>
    <th> telefono</th>
    <th>genero</th>
    <th> accion</th>
</thead>


<tbody>

    @if(count($usuario)>0)
    <tr>
    @foreach ($usuario as $item)
    <tr>
            <th scope="col">
                   {{$item->id}}
               </th>
           <th scope="col"> {{$item->nombre}}</th>
           <th scope="col"> {{$item->apellido}}</th>
           <th scope="col">  {{$item->correo}}</th>
           <th scope="col"> {{$item->telefono}} </th>
           <th scope="col"> {{$item->genero}}</th>
           <th scope="col"> 
      
             <a class="teal-text" href="editar-usuario/{{$item->id}}"><i class="fa fa-pen"  style="margin-left: 5px; margin-right: 5px"></i></a>
             <a class="red-text" href="eliminar-usuario/{{$item->id}}" > <i class="fas fa-times" style="margin-right: 5px"></i></a>
  
         <a class="red-text" href="cobranza/{{$item->id}}" > <i class="fas fa-dollar-sign"></i></a>  

           

           </th>
       </tr>

        @endforeach
    </tr></table>
    @else
    <h1>no hay nada</h1>
    @endif
    
</tbody>

</body>
</html>