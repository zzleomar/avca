
@php
  $urlNew=URL::to('/gerencia/RRHH/administracion-empleados/nueva');
  $urlmod=URL::to('/gerencia/RRHH/administracion-empleados/modificar');
@endphp

  <!--MODAL ELIMINAR Empleado---->

  <form action="{{ URL::to('/gerencia/RRHH/administracion-empleados/eliminar') }}" method="post" id="EliminarEmpleadoForm" name="EliminarEmpleadoForm" onkeypress = "return pulsar(event)">   
                        {{ csrf_field() }}
<input type="hidden" name="empleado_id" id="empleado_id" value="">


    <div class="modal fade bd-example-modal-lg" id="ModalEliminarEmpleado" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="card-title" id="tituloModalEliEmpleado" style="font-size: 25px;font-weight: 700;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      
      <div class="modal-body">
        <H2 id="notification">¿Esta seguro que desea desincorporar este empleado?</H2>
        <button type="button" class="btn btn-lg btn-outline-secondary" onclick="EliminarEmpleado('/gerencia/RRHH/administracion-empleados/eliminar')">Aceptar</button>
      </div>
                <div class="modal-footer">
                </div>
        
     </div>
  </div></div>
  </form>


  <!--MODAL activar Empleado---->

  <form action="{{ URL::to('/gerencia/RRHH/administracion-empleados/activar') }}" method="post" id="ActivarEmpleadoForm" name="ActivarEmpleadoForm" onkeypress = "return pulsar(event)">   
                        {{ csrf_field() }}
<input type="hidden" name="empleado_id" id="empleado_id2" value="">


    <div class="modal fade bd-example-modal-lg" id="ModalActivarEmpleado" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="card-title" id="tituloModalActEmpleado" style="font-size: 25px;font-weight: 700;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      
      <div class="modal-body">
        <H2 id="notification">¿Esta seguro que desea incorporar este empleado?</H2>
        <button type="button" class="btn btn-lg btn-outline-secondary" onclick="ActivarEmpleado('/gerencia/RRHH/administracion-empleados/activar')">Aceptar</button>
      </div>
                <div class="modal-footer">
                </div>
        
     </div>
  </div></div>
  </form>


<!-- Modal Modificar Empleado -->
    <form method="post" id="ModificarEmpleadoForm" name="ModificarEmpleadoForm" onsubmit=" return FormEmpleado('{{ $urlmod }}','1','1')">   
                        {{ csrf_field() }}

    <div class="modal fade bd-example-modal-lg" id="ModalModificarEmpleado" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalModificarPersonal" style="font-size: 25px;font-weight: 700;"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      
      <div class="modal-body" id="cargandoAux">
        <div class="container" id="ModalAjaxModificarEmpleado" style="padding-left: 15px; padding-right: 15px;  ">
            
  </div>
                <button type="submit" class="btn btn-lg btn-primary" id="BotonGuardarEmpleado" onclick="FormEmpleado('{{ $urlmod }}','0','1')">Actualizar</button></div>
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                  
                </div>
        
     </div>
  </div></div>
  </form>


  <!-- Modal Nueva Empleado -->
<form name="nuevaEmpleadoForm" id="nuevaEmpleadoForm" method="POST" onsubmit=" return FormEmpleado('{{ $urlNew }}','1','2')" >

                        {{ csrf_field() }}

    <div class="modal fade bd-example-modal-lg" id="NuevaEmpleadoModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Nuevo Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      
      <div class="modal-body">
        <div class="container" style="padding-left: 15px; padding-right: 15px;  ">
             <div id="AccordionInfoPersonal" data-children=".item" style="font-weight: 600;">
             INFORMACIÓN
             <br>
                  <!-- <a class="btn btn-primary btn-aux-magin" data-toggle="collapse" data-parent="#AccordionInfoPersonal" href="#AccordionInfoPersonal1" aria-expanded="true" aria-controls="AccordionInfoPersonal1" onclick="helpCollapse('1')">
                    Persona
                  </a>
                -->
               

                  <!-- <a class="btn btn-primary btn-aux-magin" data-toggle="collapse" data-parent="#AccordionInfoPersonal" href="#AccordionInfoPersonal2" aria-expanded="false" aria-controls="AccordionInfoPersonal2" onclick="helpCollapse('2')">
                    Profesional
                  </a>
                -->
                 <div class="item">
                    <div id="AccordionInfoPersonal1" class="collapse show" role="tabpanel">
                     <div class="card card-body">
                      <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputIdentificacion4">Identificación:</label>
                         <div class="input-group">  
                            <div class="input-group-addon">
                                <select name="nacionalidad" id="nacionalidad" class="nationality">
                                    <option value="V">V</option>
                                    <option value="E">E</option>
                                    <option value="E">N</option>
                                </select>
                            </div>  
                          <input type="text" class="form-control" placeholder="Identificación" name="cedula" id="cedula" onkeypress="return soloNumDec(event)" >
                        </div>
                      </div> 
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon"> <i class="fa fa-user-o" aria-hidden="true"></i> </div>
                              <input type="Nombre" class="form-control" id="nombres" placeholder="Ingresar Nombres" name="nombres" >
                                      <div id="Comentarios"></div></div>
                              </div>
                              <div class="form-group col-md-6">
                                  <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"> <i class="fa fa-user-o" aria-hidden="true"></i> </div>
                                    <input type="text" class="form-control" id="apellidos" placeholder="Ingresar Apellidos" name="apellidos" >
                                  </div>
                              </div>
                              
                          </div>


                        <div class="form-group">
                                <label for="inputAddress">Dirección</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingresar Dirección" >
                          </div>


                        <div class="form-row">
                          
                            <div class="form-group col-md-6">
                                    <label for="inputNombre"> Teléfono Móvil</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"> <i class="fa fa-mobile" aria-hidden="true"></i> </div>
                                      <input type="text" class="form-control" id="tlf_movil" placeholder="Ejemplo 0414 098 1234" name="tlf_movil" >
                                      </div>
                              </div>                            
                            <div class="form-group col-md-6">
                                    <label for="inputNombre">Télefono Fijo</label>

                                    <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                                      <input type="text" class="form-control" id="tlf_casa" placeholder="Ejemplo 0293 098 1234" name="tlf_casa">
                                    </div>
                              </div> 
                          </div>   
                      
                     </div>
                   </div>
                 </div>

                  <div class="item">
                    <div id="AccordionInfoPersonal2" class="collapse" role="tabpanel">
                     <div class="card card-body">
                      <div class="form-row">
                          
                            <div class="form-row col-md-6">
                                    <label class="infoTitulo">Fecha de entrada</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon"> <i class="fa fa-mobile" aria-hidden="true"></i> </div>
                                      <input type="date" placeholder="introduzca fecha mm/dd/yyyy" name="fechaEntrada" id="fechaEntrada" class="form-perso-help" value=""  />
                                      </div>
                              </div> 
                      <br>
                    <div class="col col-sm-12 col-md-12 btn-aux-magin">
                            <div class="input-group">

                            <div class="input-group-btn">
                              <button type="button" class="btn btn-secondary dropdown-toggle" style="min-width: 8rem;" 
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="myDropdown">Tipo
                              </button>
                              <div class="dropdown-menu ">
                                <a class="dropdown-item" id="tipoC1" onclick="tipoCargo('1','2')">Operativo</a>
                               @if(Auth::user()->tipo=='Gerente de RRHH')

                                <a class="dropdown-item" id="tipoC2" onclick="tipoCargo('2','2')">Tripulante</a>
                                @endif
                                <a class="dropdown-item" id="tipoC3" onclick="tipoCargo('3','2')">Administrativo</a>
                              </div>
                            </div>
                            <select name="cargo1" class="opcTipo oculto form-control-lg" id="opcOperativo2"  onchange="cargoEleccion('2')">
                              <option value="0">Seleccione un cargo</option>
                              <option value="Operador de Tráfico" >Operador de Tráfico</option>
                              <option value="Controlador de Tráfico" >Controlador de Tráfico</option>
                              <option value="Supervisor de Mantenimiento">Supervisor de Mantenimiento</option>
                              <option value="Mecánico">Mecánico</option>
                            </select>

                            <div class="oculto" id="opcTripulante2">
                            <div class="form-row">
                            <div class="col-md-6">
                                    <select name="cargo2" class="opcTipo form-control-lg" id="" onchange="cargoEleccion('2')">
                                          <option value="0">Seleccione un rango</option>
                                          <option value="Piloto">Piloto</option>
                                          <option value="Copiiloto">Copiloto</option>
                                          <option value="Jefe de Cabina">Jefe de Cabina</option>
                                          <option value="Sobrecargo">Sobrecargo</option>
                                        </select>
                                        </div>                            
                                      <div class="col-md-6">
                                              <div class="input-group mb-2 mb-sm-0">
                                              <div class="input-group-addon"> <i class="fa fa-plane" aria-hidden="true"></i> </div>
                                                <input type="text" class="form-control" id="licencia" placeholder="Ingrese la licencia" name="licencia" >
                                              </div>
                                        </div> 
                                    </div>  
                            </div>
                            <select name="cargo3" class="opcTipo oculto form-control-lg" id="opcAdministrativo2" onchange="cargoEleccion('2')">
                              <option value="0">Seleccione un cargo</option>
                              <option value="Obrero">Obrero</option>
                              <option value="Beder">Beder</option>
                              <option value="Asistente de RRHH">Asistente de RRHH</option>
                              <option value="SubGerente de Sucursal">SubGerente de Sucursal</option>
                              <option value="Gerente de RRHH">Gerente de RRHH</option>
                              <option value="Gerente de Finanzas">Gerente de Finanzas</option>
                              <option value="Gerente de Sucursales">Gerente de Mantenimiento y Soporte</option>
                              <option value="Gerente de Sucursales">Gerente General</option>
                            </select>
                            <input type="hidden" name="tipoC" id="tipoCid2" value="0">
                            <input type="hidden" name="tipoC2" id="tipoCid22" value="0">
                       </div>


                            </div>
                            <br>
                            <div class="oculto" id="CdatosEmpleado2">
                              <div class="form-row">
                          
                            <div class="form-group col-md-6">
                                    <div class="input-group">
                                     @if(Auth::user()->tipo=='Gerente de RRHH')
                                      <div class="input-group-btn">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" style="min-width: 8rem;" 
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="myDropdown">Sucursal
                                            </button>
                                            <div class="dropdown-menu dropAux">
                                              @foreach($sucursales as $sucursal1)
                                              <a class="dropdown-item" id="sucursalT{{ $sucursal1->id }}" onclick="datosSP('{{ $sucursal1->id }}','sucursal')">{{ $sucursal1->nombre }}</a>
                                              @endforeach
                                            </div>
                                        </div>
                                         <input type="text" class="form-control" aria-label="Text input with dropdown button" id="sucursalN" placeholder="Seleccione la sucursal donde labora" value="" readonly >
                                         <input type="hidden" name="sucursalid" id="sucursalid" value="">
                                        <div class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i> </div>
                                      @else
                                      <div class="input-group-btn">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" style="min-width: 8rem;" 
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="myDropdown">Sucursal
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" id="sucursalT{{ $sucursal->id }}" onclick="datosSP('{{ $sucursal->id }}','sucursal')">{{ $sucursal->nombre }}</a>
                                            </div>
                                        </div>
                                           <input type="text" class="form-control" aria-label="Text input with dropdown button" id="sucursalN" placeholder="Seleccione la sucursal donde labora" value="{{ $sucursal->nombre }}" readonly >
                                           <input type="hidden" name="sucursalid" id="sucursalid" value="{{ $sucursal->id }}">
                                          <div class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i> </div>
                                      
                                      @endif

                                  </div>
                              </div>                            
                            <div class="form-group col-md-6">
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" style="min-width: 8rem;" 
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="myDropdown">Horario
                                        </button>
                                        <div class="dropdown-menu ">
                                          @foreach($horarios as $horario)
                                          <a class="dropdown-item" id="horarioT{{ $horario->id }}"  onclick="datosSP('{{ $horario->id }}','horario')">{{ $horario->entrada." ".$horario->salida }}</a>
                                          @endforeach
                                        </div>
                                      </div>
                                       <input type="text" class="form-control" aria-label="Text input with dropdown button" id="horarioN" placeholder="Seleccione el horario de trabajo" value="" readonly >
                                       <input type="hidden" name="horarioid" id="horarioid" value="">
                                      <div class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i> </div>
                                    </div>
                              </div> 
                          </div> 
                  </div><!-- FIn de datos Empleado -->
                    <br>
                    

                     </div>
                   </div>
                 </div>

              </div>
            </div>
                <button type="submit" class="btn btn-lg btn-primary btn-aux-magin" id="x1" onclick="FormEmpleado('{{ $urlNew }}','0','2')">Continuar</button>
                 <button type="submit" class="btn btn-lg btn-primary btn-aux-magin oculto" id="x2" onclick="FormEmpleado('{{ $urlNew }}','0','2')">Registrar Empleado</button>
          </div>
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                </div>
        
     </div>
  </div></div>
  </form>