@extends('layouts.app')

@section('content')
<div class="container">
<div class="main">
<form>
        

        <table class="table">
          <thead class="thead-light">
            <tr align="center">
              <th>Gestionar Vuelos</th>
            </tr>
          </thead>
        </table>
    

    <div class="row">
        <div class="col">
            <div class="text-center">
                <select class="custom-select">
                    <option selected>Seleccione Ruta Destino-Retorno</option>
                    <option value="1">Maiquetia-Cumaná</option>
                    <option value="2">Maiquetia-Barcelona</option>
                    <option value="3">Maiquetia-Ciudad Bolivar</option>
                </select>           
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col mt-3">
                <div class="text-center">
                        <input type="date" placeholder="introduzca fecha" /><br>
                </div>  
            </div>
            
            <div class="col mt-3">
                <div class="text-center">
                    <select class="custom-select">
                        <option value="1">Introduzca hora</option>
                        <option value="2">7:00 AM</option>
                        <option value="3">2:00 PM</option>
                    </select>
                </div>
            </div>
        
            <div class="col mt-3">
                <div class="text-center">
                    <select class="custom-select">
                    <option selected>Seleccione Aeronave</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
            </div>
        
            <div class="col mt-3">
                <div class="text-center">
                        <tbody>
                            <td>
                              <h1 align="center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPiloto">
                                 Selecionar Tripulación
                                    </button>                   
                              </h1>
                            </td>
                        </tbody>    
                </div>
            </div>              
    </div>

    <h1 align="center">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <button type="submit" class="btn btn-primary">Procesar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
    </h1> <br>

    <div class="row">
        <div>
            
        </div>
        

    </div>


    <div class="table-responsive">  
    <table class="table table-hover text-center">
      <thead class="thead-light">
        <tr>
          <th>#Vuelo</th>
          <th>Ruta</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Estatus</th>
          <th>Modificar</th>
        </tr>
      </thead>
      <tbody>
       
        <th scope="row">1</th>
          <td>Nueva Esparta</td>
          <td>30/12/2017</td>
          <td>2:00 PM</td>
          <td>Disponible</td>
         <td>
            <h1 align="center">
            <button type="submit" class="btn btn-primary">Modificar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
            </h1>
        </td>
     
      </tbody>
      <tbody>
       
        <th scope="row">1</th>
          <td>Nueva Esparta</td>
          <td>30/12/2017</td>
          <td>2:00 PM</td>
          <td>Disponible</td>
         <td>
            <h1 align="center">
            <button type="submit" class="btn btn-primary">Modificar</button>
            <button type="submit" class="btn btn-primary">Eliminar</button>
            </h1>
        </td>
     
      </tbody>
    </table>
    </div>

</form>


            <!-- Inicio del Modal Piloto -->
                <div class="modal fade" id="ModalPiloto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                         <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Selecione la Tripulación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                        <div class="modal-body">
                            <div class="col mt-3">
                               <div class="text-center">
                                <select class="custom-select">
                                <option selected>Seleccione el Piloto</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                               </div>
                            </div>
                         </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#Modalcopiloto">Save changes
                            </button>
                </div>
                      </div>
                    </div>
                </div>
            <!--  Fin del Modal Piloto-->   

    <!-- Inicio del Modal Copiloto -->
                <div class="modal fade" id="Modalcopiloto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                         <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Selecione la Tripulación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                     <div class="modal-body">
                                <div class="col mt-3">
                               <div class="text-center">
                                <select class="custom-select">
                                <option selected>Seleccione el Copiloto</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                               </div>
                            </div>
                         </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#JefeCabina">
                                 Selecionar Tripulación
                    </button>
                </div>
                      </div>
                    </div>
                </div>
            <!--  Fin del Modal Piloto-->


            <!-- Inicio del Modal JefeCabina -->
                <div class="modal fade" id="JefeCabina" id="Cerrar"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                         <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Selecione la Tripulación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                     <div class="modal-body">
                                     <div class="col mt-3">
                               <div class="text-center">
                                <select class="custom-select">
                                <option selected>Seleccione el Jefe de Cabina</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                               </div>
                            </div>
                         </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Aeromosas">
                                 Selecionar Tripulación
                    </button>
                </div>
                      </div>
                    </div>
                </div>
            <!--  Fin del Modal JefeCabina-->



            <!-- Inicio del Modal Aeromosas-->
                <div class="modal fade" id="Aeromosas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                         <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Selecione la Tripulación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                     <div class="modal-body">
                            
                        <div class="row">
        
                            <div class="col mt-3">
                                <div class="text-center">
                                    <select class="custom-select">
                                        <option aeromosa="1">Seleccione la 1ª Aeromosa</option>
                                        <option aeromosa="2">Aeromosa</option>
                                        <option aeromosa="3">Aeromosa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col mt-3">
                                <div class="text-center">
                                    <select class="custom-select">
                                        <option aeromosa="1">Seleccione la 2ª Aeromosa</option>
                                        <option aeromosa="2">Aeromosa</option>
                                        <option aeromosa="3">Aeromosa</option>
                                    </select>
                                </div>
                            </div>                  
                        </div>
                         </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>        
                </div>
                      </div>
                    </div>
                </div>
            <!--  Fin del Modal Aeromosas-->









</div>
</div>

@endsection
