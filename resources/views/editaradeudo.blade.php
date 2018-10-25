<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
                   
        <div class="modal-dialog text-center " >
                <div class="col-sm-8 main-section">
                  <div class="modal-content ">
                      <form class="col-12 form-group" method="post" action="/edit/{{$adeudo->id}}">
                            {{ csrf_field() }}  
                        <div class="form-group">
                            {{-- en value tienes que mandar el valor --}}
                      <input type="number"   class="form-control " style="margin-top: 10px;"  placeholder="usuario_id" name="usuario_id" value="{{$adeudo->usuario_id }}">
                    </div>
                    <div class="form-group">
                            <input type="number"  class="form-control " placeholder="monto" name="monto" value="{{$adeudo->monto}}">
                          </div>
                          <div class="form-group">
                                <input type="date" value="{{$adeudo->fecha}}" class="form-control " name="fecha" placeholder="fecha">
                              </div>
                              <div class="form-group">
                                  <div class="custom-control custom-radio" style="margin-left: 150px;">
                                      <input type="radio" class="custom-control-input" id="masculino" name="estatus" value="0" {{ $adeudo->estatus == '0' ? 'checked' : ''}}  >
                                      <label class="custom-control-label" for="masculino">adeudo</label>
                                    </div>    
                                          <div class="custom-control custom-radio" style="margin-right: 150px; margin-top: -23px">
                                                <input type="radio" class="custom-control-input" id="femenino" name="estatus" value="1" {{ $adeudo->estatus == '1' ? 'checked' : ''}}  >
                                                <label class="custom-control-label" for="femenino">abono</label>   
                    
                              <div class="form-group" style="margin-top: 15px">
                                  <button type="submit" class="btn  " ><i class="fas fa-share-square"></i>editar</button>

                              </div>
                            </div>
                    <div>   </div>
               
               
               
                    
                  </div>
                </div>
                </div>
        
</body>
</html>