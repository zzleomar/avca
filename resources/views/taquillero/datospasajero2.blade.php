
<div class="modal fade bd-example-modal-lg" id="myModal_confirmacion_pagina_guardada" data-keyboard="false" data-backdrop="static">
<form method="post" id="formOperativo">    
                        {{ csrf_field() }}
<input type="hidden" name="VueloAux" id="VueloAux" value="0">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title" style="font-size: 25px;
font-weight: 700;">Datos del Pasajero</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-row">      
    <div class="form-group col-md-6">
        <label for="inputIdentificacion4">Identificación:</label>
       <div class="input-group">  
          <div class="input-group-addon">
              <select name="nacionalidad" id="nacionalidad" class="nationality">
                  <option value="V">V</option>
                  <option value="E">E</option>
                  <option value="P">P</option>
              </select>
          </div>  
        <input type="text" class="form-control" placeholder="Identificación" name="cedula" onkeypress="return soloNumDec(event)">
        <button type="button" class="btn btn-primary" onclick="buscarPasajero()">Buscar</button>
      </div>
    </div>              
</div>          

<div id="info-vuelo-pasajero"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>
</form>

               </div>



  
