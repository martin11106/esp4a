<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

</head>
<body style="background-color: gray">
    <style>
    .boton1{
        width: 300px ;
         height: 40px;
  display: block;   
  margin-left: 300px;
  margin-right: auto;
  margin-top: 9px;
    }
    .boton2{
    width: 300px ;
    height: 40px;
  display: block;   
  margin-left: 700px;
 
  margin-top: -45px;

  
    }
  
    </style>
    <div id="bg">
<img src="img/usuario2.png"  onclick="location.href='/usuario'"  style="cursor:pointer;width: 300px; margin-left: 300px ;margin-top: 100px">
    <div class="conteiner-fluid" >
    <div>
<img src="img/adeudo.png" alt="" onclick="location.href='/adeudo-total'"   style="cursor:pointer;margin-left: 700px; width: 300px; margin-top: -300px; ">
    </div>
    <div>
        {{-- segunda imagen --}}
    </div>
    <div class="">
        
            <button type="button" onclick="location.href='/usuario'" class="btn btn-raised btn-primary boton1"  >Usuario</button>
    </div>
    <div class="">
        
            <button type="button" onclick="location.href='/adeudo-total'" class="btn btn-raised btn-primary boton2"   >Adeudo</button>
    </div>
    </div>
</div>

</body>
</html>