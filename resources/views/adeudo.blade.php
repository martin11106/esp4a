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
                
    <div class="modal-dialog text-center" >
        <div class="col-sm-8 main-section">
          <div class="modal-content">
         
              <form class="col-12 form-group" method="post" action="/guardar-adeudo"  >
                    {{ csrf_field() }}  
                    <fieldset >
                <div class="form-group">

            <select  class="browser-default custom-select" id="" name="usuario_id" style="margin-top: 15px">
                @if(count($adeudo)>0)
                @foreach ($adeudo as $item)
               <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
  
              @else
              <h1>no hay nada</h1>
              @endif
            </select>
            </div>
            <div class="form-group">
                    <input type="number"  class="form-control " placeholder="monto" name="monto">
                  </div>
                  <div class="form-group">
                        <input type="date"  class="form-control " name="fecha" placeholder="fecha">
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-radio" style="margin-left: 150px;">
                              <input type="radio" class="custom-control-input" id="masculino" name="adeudo" value="1"   >
                              <label class="custom-control-label" for="masculino">abono</label>
                            </div>    
                                  <div class="custom-control custom-radio" style="margin-right: 150px; margin-top: -23px">
                                        <input type="radio" class="custom-control-input" id="femenino" name="adeudo" value="0" >
                                        <label class="custom-control-label" for="femenino">adeudo</label>
                                      </div>
            
          <button type="submit" class="btn  "  style="margin-top:  "><i class="fas fa-share-square"></i>registrar</button>
        </fieldset>
        </form>
             
            
          </div>
        </div>
        </div>

</body>
</html>