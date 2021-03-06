<div class="form-row">
          <div class="form-group col-md-4">
                    <label for="inputPuesto">Puesto del pasajero</label>
                    <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon"> <i class="fa fa-user-o" aria-hidden="true"></i> </div>
                      <input type="text" readonly class="form-control-plaintext inputAux" id="staticEmail2" value="{{ $boleto->asiento }}">
                      </div>
              </div>
              <div class="form-group col-md-4">
                    <label for="inputApellido">Número de Boleto:</label>
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon"> # </div>
                    @if($boleto->id>9)
                    <input type="text" readonly class="form-control-plaintext inputAux" id="idboleto" value="{{ $boleto->id }}">
                    @else
                    <input type="text" readonly class="form-control-plaintext inputAux" id="idboleto" value="{{ '0'.$boleto->id }}">
                    @endif
                    <input type="hidden" readonly class="form-control-plaintext inputAux" id="boletoAux" value="0">
                  </div>
              </div>


              <div class="form-group col-md-4">
                    <label for="inputApellido">Costo Vuelo:</label>
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">  <i class="fa fa-money" aria-hidden="true"></i> </div> 
                    <input type="text" readonly class="form-control-plaintext inputAux" id="staticEmail2" value="{{ number_format($boleto->costo,2,',','.') }}">
                    <div class="input-group-addon">Bs.</div>
                  </div> 
              </div>

              
          </div>



          <p style="text-align: right;">
  <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Otro
  </a>
 </p>
 <div class="collapse" id="collapseExample">
  <div class="form-group">
  @if(isset($vuelos2)and(sizeof($vuelos2)!=0))
                          <label for="inputvuelos">Seleccion de Vuelos</label>
                            <div class="input-group">

                            <div class="input-group-btn">
                              <button type="button" class="btn btn-secondary dropdown-toggle"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="myDropdown"> Vuelo
                              </button>
                              <div class="dropdown-menu">
                        @foreach($vuelos2 as $vuelo)
                                <a class="dropdown-item" href="#info-vuelo2" id="yv2{{ $vuelo->su }}" onclick="capturarV2('{{ $vuelo->su }}')">{{ $vuelo->nombre }}</a>
                            @endforeach
                              </div>
                            </div>
                            <input type="hidden" id="origen2" value="{{ $sucursal2->nombre.' - ' }}">
                            <input type="hidden" id="origen2id" value="{{ $sucursal2->id }}">
                             <input type="text" class="form-control" aria-label="Text input with dropdown button" id="vuelo2" value="{{ $sucursal2->nombre.' - '.$sucursal->nombre }}">
                            <div class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i> </div>


                            </div>
                        </div>

            <div id="info-vuelo2"> <!-- OJOOOOOO INFORMACION de AJAX DEL SEGUNDO VUELO-->
              @if(sizeof($fechas)!=0)
              <div class="form-group">
                                        <label for="inputvuelos">Fechas disponibles para el vuelo</label>
                                          <div class="input-group">
                                          <div class="input-group-btn">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Fechas
                                            </button>
                                            <div class="dropdown-menu">
                                            @foreach($fechas as $fecha)
                                              <a class="dropdown-item" href="#info-vuelo-dispo2" id="fc2{{ $fecha->id }}" onclick="capturarFechas2('{{ $fecha->id }}')">{{ $fecha->salida}}</a>
                                          @endforeach
                                            </div>
                                          </div>
                                           <input name="fc2" id="fc2" type="text" class="form-control" aria-label="Text input with dropdown button">
                                          </div>
                              </div>
                    @else
                        @include('notifications::flash')
                    @endif
                    <div id="info-vuelo-dispo2"></div>
                
            </div>
  @else
      @include('notifications::flash')
    </div>
  @endif
                
</div>
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_confirmacion_pagina_guardada">
  Aceptar
</button>
 @include('taquillero.datospasajero')
<!--
 <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapsePasajero" aria-expanded="false" aria-controls="collapsePasajero" >
    Registrar pasajero
  </a>
 </p>

<div class="collapse" id="collapsePasajero">
       @include('taquillero.datospasajero')
</div> -->
