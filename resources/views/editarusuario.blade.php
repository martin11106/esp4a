
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
            <title>formulario</title>
        </head>
        <body>
               
                <div class="modal-dialog text-center" >
                        <div class="col-sm-8 main-section">
                          <div class="modal-content">
                         
                              <form class="col-12" method="post" action="/editar/{{$usuario->id}}">
                                    {{ csrf_field() }}  
                                <div class="form-group">
                                    {{-- en value tienes que mandar el valor --}}
                              <input type="text"   class="form-control "  placeholder="Nombre" name="nombre" value="{{$usuario->nombre}}">
                            </div>
                            <div class="form-group">
                                    <input type="text"  class="form-control " placeholder="apellido" name="apellido" value="{{$usuario->apellido}}">
                                  </div>
                                  <div class="form-group">
                                        <input type="text" value="{{$usuario->correo}}" class="form-control " name="correo" placeholder="correo">
                                      </div>
                                      <div class="form-group">
                                            <input type="text"  class="form-control "  value="{{$usuario->telefono}}"name="telefono" placeholder="telefono">
                                          </div>
                                          <div class="form-group">
<label for="genero">Genero</label>
<div class="custom-control custom-radio" style="margin-left: 150px;">
  <input type="radio" class="custom-control-input" id="masculino" name="genero" value="masculino" {{ $usuario->genero == 'masculino' ? 'checked' : ''}}  >
  <label class="custom-control-label" for="masculino">masculino</label>
</div>    
      <div class="custom-control custom-radio" style="margin-right: 150px; margin-top: -23px">
            <input type="radio" class="custom-control-input" id="femenino" name="genero" value="femenino" {{ $usuario->genero == 'femenino' ? 'checked' : ''}}  >
            <label class="custom-control-label" for="femenino">femenino</label>
          </div>
                                        </div>
                            
                          <button type="submit" class="btn  " ><i class="fas fa-share-square"></i>editar</button>
              
                            
                          </div>
                        </div>
                        </div>
                
        </body>
        </html>
