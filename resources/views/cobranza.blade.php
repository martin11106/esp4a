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
        $adeudo2=0;
        $adeudo3=0;
        $adeudo4=0;
        $resta=0;
        $abono=0;
        @endphp
    <form action="/cobranza/">
        <div class="dropdown" style="margin-top: 15px; margin-left: 15px;width: 300px">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                 menu
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="http://127.0.0.1:8000/">inicio</a>
                  <a class="dropdown-item" href="http://127.0.0.1:8000/adeudo-total">adeudo general</a>
                  <a class="dropdown-item" href="http://127.0.0.1:8000/usuario">usuarios</a>
                </div>
              </div>
            </div>
    <button type="button" onclick="location.href='/adeudo-menu'" class="btn btn-raised btn-primary boton1"  style="width: 300px ;margin-left: 500px; margin-top: -65px"> crear</button>
   
<table border="1px" class="table" style="margin-top: -5px"   >
        <thead class="thead-dark">
       <th>id</th>
        <th>usuario_id</th>
        <th>monto</th>
        <th> fecha</th>
        <th> status</th>
        <th> accion</th>
    </thead>
    
    
    <tbody>
   
        @if(count($adeudo)>0)
        <tr>
          
        @foreach ($adeudo as $item)

        <tr>
                <th scope="col">
                       {{$item->id}}
                   </th>
                   @foreach ($usuario as $item2)
                   @if ($item2->id==$item->usuario_id)
                         <th scope="col" > {{$item2->nombre." ".$item2->apellido}}</th>                   
                     
                         <th scope="col"> {{$adeudo2=$item->monto}}</th>
                               <th scope="col">  {{$item->fecha}}</th>
                         @if ($item->estatus==0)
                    
                         <th  style="color: red" scope="col"> adeudo</th> 
                      @else
                      <th  style="color: blue" scope="col"> abono</th> 
                         @endif
               
                         @if ($item->estatus==0)
                <label for="" style="color: transparent">{{$adeudo3+=$item->monto}}</label>
                @else
                <label for="" style="color: transparent">{{$adeudo4+=$item->monto}}</label>
                         @endif
                         @php
                        
                         $resta=$adeudo3;//adeudo  
                         $abono+=$adeudo4 ;//abono
                          $suma+=$adeudo2; //total
                         @endphp 
                        
                         <th scope="col"> 
              
                         <a class="teal-text" href="/editar-adeudo/{{$item->id}}"><i class="fa fa-pen"  style="margin-left: 5px; margin-right: 5px"></i></a>
                         <a class="red-text" href="/eliminar-cobranza/{{$item->id}}" > <i class="fas fa-times"></i></a>
                         </th>
                     </tr>
   
        
                    
          </tr>    
      
                         @endif

                         @endforeach
           
      
           

           @endforeach
         
       
            
             
       
           
                 
          
          
        </table>
    
        @else   
        <h1>no hay nada</h1>
        @endif


     
{{-- esto saca el total de combransa con sum --}}
<label  for="" style="margin-left: 600px;" ><h1>total=  {{$suma}}</h1></label> 
<label  for="" style="margin-left: 600px;" ><h1>total adeudo= {{$resta}}</h1></label> 
<label  for="" style="margin-left: 600px;" ><h1>total abono={{$abono}}</h1></label> 

    </tbody>
</form> 



</body>
</html>