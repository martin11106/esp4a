<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body >
        @php
        $suma=0;
        $adeudo3=0;
        $adeudo4=0;
        $adeudo5=0;
        @endphp
    <form action="/cobranza/">
       
  <div class="dropdown" style="margin-top: 15px; margin-left: 15px;width: 300px">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
         menu
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="http://127.0.0.1:8000/">inicio</a>
          <a class="dropdown-item" href="http://127.0.0.1:8000/usuario">usuarios</a>
        </div>
      </div>
    </div>
        <button type="button" onclick="location.href='#'" class="btn btn-raised btn-primary boton1"  style="width: 300px ;margin-left: 500px; margin-top: -65px"> crear</button>
 
<table border="1px" class="table" style="margin-top: -5px"   >

    <thead class="thead-dark">
       <th>id</th>
        <th>nombre</th>
        {{-- <th>total abono</th>
        <th> total adeudo</th> --}}
        <th> caja</th>
        <th> status</th>
    
    </thead>
    
    
    <tbody>
   
     
        @if(count($usuario)>0)
        <tr>
          
        @foreach ($usuario as $item)
        @php
        $suma=0;
        $adeudo3=0;
        $adeudo4=0;
        $adeudo5=0;
        @endphp
        
                <th scope="col">
                       {{$item->id}}
                   </th>  
                   
                   <th scope="col" > {{$item->nombre." ".$item->apellido}}</th>    
                   @foreach ($adeudo as $item2)                  
       
                   @if($item->id==$item2->usuario_id)
                <label for="" style="color:transparent">{{$adeudo4+=$item2->monto}}</label>
             
                @if($item2->estatus==0)
                <label for="" style="color:transparent">{{$adeudo3+=$item2->monto}}</label>  
                @else
                <label for="" style="color:transparent">{{$adeudo5=$item2->monto+$adeudo5}}</label>
                @endif
                    
                   @endif
                    
                   @endforeach
                
                     
{{--                     
                   <th scope="col">{{$adeudo5}}</th>      
                   <th scope="col" >{{$adeudo3}} </th> --}}
                   <th scope="col" > {{$adeudo4}}</th>
               
          
               @if ($adeudo4>0)          
               <th  style="color: blue" scope="col"> a favor</th> 
          @elseif($adeudo4==0)
          <th  style="color: black" scope="col"> caja</th>
          @else
          <th  style="color: red" scope="col"> encontra</th> 
               @endif
            
     
      
             
            </tr>
               @endforeach  


          
        </tr></table>
    
        @else   
        <h1>no hay nada</h1>
        @endif


     
{{-- esto saca el total de combransa con sum --}}

    </tbody>
</form> 



</body>
</html>