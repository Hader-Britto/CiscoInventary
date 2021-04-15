@extends('layouts.design')

@section('content')

<div class="all-content-wrapper">

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">  
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <i class="fa fa-folder-plus iconColorBlue" style="font-size: 24px; float: right;" data-toggle="modal" data-target="#zoomInDownAddInventary"></i>
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                   
                                  
                                  
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="plus">Lend</th>
                                                <th data-field="name" data-editable="true">Section</th>
                                                <th data-field="email" data-editable="true">Position</th>
                                                <th data-field="phone" data-editable="true">State</th>
                                                <th data-field="complete">Product</th>
                                                <th data-field="task" data-editable="true">Pdr/pid</th>
                                                <th data-field="date" data-editable="true">Serial</th>
                                                <th data-field="code" data-editable="true">Code</th>
                                                <th data-field="channel" data-editable="true">Channel</th>
                                                <th data-field="observation" data-editable="true">Observation</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($inventory as $inventory)
                                            <tr>
                                                <td></td>
                                                <td><i class="far fa-handshake iconColorBlue" data-toggle="modal" data-target="#zoomInDownLoan"></i></td>
                                                <td>{{ $inventory->section }}</td>
                                                <td>{{ $inventory->position }}</td>
                                                <td>{{ $inventory->state }}</td>
                                                <td>{{ $inventory->product }}</td>
                                                <td>{{ $inventory->pdrpid }}</td>
                                                <td>{{ $inventory->serial }}</td>
                                                <td>{{ $inventory->code }}</td>
                                                <td>{{ $inventory->nchannel }}</td>
                                                <td>{{ $inventory->observation }}</td>
                                                <td><i class="fa fa-pencil iconColorBlue" data-toggle="modal" data-target="#zoomInDownInventary"> Edit</i><br>
                                                    <i class="far fa-trash-alt iconColorBlue" data-toggle="modal" data-target="#DangerModalDelete"> Delete</i></strong>
                                                </td>
                                               
                                                </td>
                                            </tr>
                                       @endforeach
                                     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!--  Modal Prestar Inventario -->

        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline11-list responsive-mg-b-30">
                            <div class="sparkline11-hd">
                                
                            </div>
                            <div class="sparkline11-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="zoomInDownLoan" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-login-form-inner">
                                                         
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="basic-login-inner modal-basic-inner">
                                                                            <h3>Lend Device</h3>
                                                                          
                                                                            <form action="#">
                                                                                <div class="form-group-inner">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">Id Loan</label>
                                                                                            <input type="text" class="form-control" placeholder="" />
                                                                                        </div>
                                                                        
                                                                                        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">Devices Borrowed PID</label>
                                                                                            <input type="text" class="form-control" placeholder="" />
                                                                                        </div>

                                                                                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">Channel</label>
                                                                                        <div class="form-select-list">
                                                                                     <select class="form-control custom-select-value" name="channel">
																			                        <option>Cisco</option>
																			                        <option>Claro</option>
																			                        <option>Prueba1</option>
																			                        <option>Prueba2</option>
																		                        </select>
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="form-group-inner">
                                                                                    <div class="row">
                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">

                                                                                    <label class="login2">Loan Date</label>
                                                                                            <input type="date" class="form-control" placeholder="" />
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">Estimate Return</label>
                                                                                            <input type="date" class="form-control" placeholder="" />
                                                                                        </div>
                                                                                </div>
                                                                             
                                                                                <div class="form-group-inner">
                                                                                    <div class="row">
                                                                                    <div class="col-lg-3 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">Returned</label>
                                                                                        <div class="form-select-list">
                                                                                     <select class="form-control custom-select-value" name="channel">
																			                        <option>Yes</option>
																			                        <option>No</option>
																		                        </select>
                                                                                        </div>
                                                                                        </div>
                                                                        
                                                                                        <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">State</label>
                                                                                        <div class="form-select-list">
                                                                                     <select class="form-control custom-select-value" name="channel">
																			                        <option>Available</option>
																			                        <option>Taken</option>
																		                        </select>
                                                                                        </div>
                                                                                        </div>

                                                                                        <div class="col-lg-5 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">Serial</label>
                                                                                            <input type="text" class="form-control" placeholder="" />
                                                                                        </div>
                                                                                    </div>                                                                                   
                                                                                </div>
                                                                                </div>                                                                                   
                                                                            </div>
                                                                
                                                                            <div class="form-group-inner">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                                                        <label class="login2">Observation</label>
                                                                                            <textarea type="text" class="form-control" placeholder=""></textarea>
                                                                                        </div>
                                                                                    </div>                                                                                   
                                                                                </div>
                                                                                </div>                                                                                   
                                                                            </div>

                                                                                <div class="login-btn-inner">
                                                                                    
                                                                                    <div class="row">
                                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                            <div class="login-horizental">
                                                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Changes</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
        </div>


<!--  Modal Actualizar Inventario -->
<div class="basic-form-area mg-b-15">
            <div class="container-fluid">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline11-list responsive-mg-b-30">
                            <div class="sparkline11-hd">
                                
                            </div>
                            <div class="sparkline11-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="zoomInDownInventary" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-login-form-inner">
                                                         
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="basic-login-inner modal-basic-inner">
                                                                            <h3>UPDATE DEVICE</h3>
                                                                            <form action="{{ url('inventary/'.$inventory->id) }}" method="POST" id="">

                                                                                        {{ csrf_field() }}
                                                                                        {{ method_field('PUT') }}
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">

                                                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">Section</label>
                                                                                                <div class="form-select-list">
                                                                                                    <select class="form-control custom-select-value" name="section" id="section">
                                                                                                        <option value="SECCION A">SECCION A</option>
                                                                                                        <option value="SECCION B">SECCION B</option>
                                                                                                        <option value="SECCION C">SECCION C</option>
                                                                                                        <option value="SECCION D">SECCION D</option>
                                                                                                        <option value="SECCION E">SECCION E</option>
                                                                                                        <option value="SECCION F">SECCION F</option>
                                                                                                        <option value="SECCION G">SECCION G</option>
                                                                                                        <option value="SECCION H">SECCION H</option>
                                                                                                        <option value="SECCION I">SECCION I</option>
                                                                                                        <option value="SECCION J">SECCION J</option>
                                                                                                        <option value="SECCION K">SECCION K</option>
                                                                                                        <option value="SECCION L">SECCION L</option>
                                                                                                        <option value="SECCION M">SECCION M</option>
                                                                                                        <option value="SECCION N">SECCION N</option>
                                                                                                        <option value="SECCION O">SECCION I</option>
                                                                                                        <option value="SECCION P">SECCION P</option>
                                                                                                        <option value="SECCION Q">SECCION Q</option>
                                                                                                        <option value="SECCION R">SECCION R</option>
                                                                                                        <option value="SECCION S">SECCION S</option>
                                                                                                        <option value="SECCION T">SECCION T</option>
                                                                                                        <option value="SECCION U">SECCION U</option>
                                                                                                        <option value="SECCION V">SECCION V</option>
                                                                                                        <option value="SECCION W">SECCION W</option>
                                                                                                        <option value="SECCION X">SECCION X</option>
                                                                                                        <option value="SECCION Y">SECCION Y</option>
                                                                                                        <option value="SECCION Z">SECCION Z</option>
                                                                                                        <option value="RACK1">RACK1</option>
                                                                                                        <option value="RACK2">RACK2</option>
                                                                                                        <option value="RACK3">RACK3</option>
                                                                                                        <option value="RACK4">RACK4</option>
                                                                                                        <option value="RACK5">RACK5</option>
                                                                                                        <option value="RACK6">RACK6</option>
                                                                                                        <option value="RACK7">RACK7</option>
                                                                                                        <option value="RACK8">RACK8</option>
                                                                                                        <option value="RACK9">RACK9</option>
                                                                                                        <option value="RACK10">RACK10</option>
                                                                                                        <option value="RACK11">RACK11</option>
                                                                                                        <option value="RACK12">RACK12</option>
                                                                                                        <option value="RACK13">RACK13</option>
                                                                                                        <option value="RACK14">RACK14</option>
                                                                                                        <option value="RACK15">RACK15</option>
                                                                                                        <option value="RACK16">RACK16</option>
                                                                                                        <option value="RACK17">RACK17</option>
                                                                                                        <option value="RACK18">RACK18</option>
                                                                                                        <option value="RACK19">RACK19</option>
                                                                                                        <option value="RACK20">RACK20</option>
                                                                                                        <option value="RACK21">RACK21</option>
                                                                                                        <option value="RACK22">RACK22</option>
                                                                                                        <option value="RACK23">RACK23</option>
                                                                                                        <option value="RACK24">RACK24</option>
                                                                                                        <option value="RACKPRINCIPAL">RACKPRINCIPAL</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <label class="login2">Position</label>
                                                                                                        <input type="text" name="position" id="position" class="form-control" placeholder="Ej: A1" />
                                                                                                </div>
                                                                                

                                                                                
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                        
                                                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">State</label>
                                                                                                <div class="form-select-list">
                                                                                            <select class="form-control custom-select-value" name="state" id="state">
                                                                                                            <option>Available</option>
                                                                                                            <option>Taken</option>
                                                                                                        </select>
                                                                                                </div>
                                                                                                </div>

                                                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">Product</label>
                                                                                                    <input type="text" class="form-control" name="product" id="product" placeholder="Ej: Modem" />
                                                                                                </div>
                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                                            <div class="form-group-inner">
                                                                                                <div class="row">  
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">PDR/PID</label>
                                                                                                            <input type="text" class="form-control" name="pdrpid" id="pdrpid" placeholder="Ej: CP-7960G" />
                                                                                                    </div>                                                                                
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">Serial</label>
                                                                                                            <input type="text" class="form-control" name="serial" id="serial" placeholder="" />
                                                                                                    </div>
                                                                                                </div>                                                                                   
                                                                                            </div>

                                                                                            <div class="form-group-inner">
                                                                                                <div class="row">  
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">Code</label>
                                                                                                            <input type="text" class="form-control" name="code" id="code" placeholder="Ej: CP-7960G" />
                                                                                                    </div>                                                                                
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">Channel</label>
                                                                                                            <input type="text" class="form-control" name="channel" id="channel" placeholder="" />
                                                                                                    </div>
                                                                                                </div>                                                                                   
                                                                                            </div>
                                                                                                                                                                        
                                                                                    
                                                                        
                                                                                    <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">Observation</label>
                                                                                                    <textarea type="text" class="form-control" name="observation" id="observation" placeholder=""></textarea>
                                                                                                </div>
                                                                                            </div>                                                                                   
                                                                                        </div>
                                                                                        

                                                                                        <div class="login-btn-inner">
                                                                                            
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <div class="login-horizental">
                                                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update Data</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
        

<!-- Modal Agregar Al Inventario -->

<div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="sparkline11-list responsive-mg-b-30">
                            <div class="sparkline11-hd">
                                
                            </div>
                            <div class="sparkline11-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="zoomInDownAddInventary" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-login-form-inner">
                                                         
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="basic-login-inner modal-basic-inner">
                                                                            <h3>Insert Data Device</h3>
                                                                            <form action="{{ route('inventory.store') }}" method="POST">

                                                                                        {{ csrf_field() }}
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">

                                                                                                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">Section</label>
                                                                                                    <div class="form-select-list">
                                                                                                        <select class="form-control custom-select-value" name="section">
                                                                                                            <option value="SECCION A">SECCION A</option>
                                                                                                            <option value="SECCION B">SECCION B</option>
                                                                                                            <option value="SECCION C">SECCION C</option>
                                                                                                            <option value="SECCION D">SECCION D</option>
                                                                                                            <option value="SECCION E">SECCION E</option>
                                                                                                            <option value="SECCION F">SECCION F</option>
                                                                                                            <option value="SECCION G">SECCION G</option>
                                                                                                            <option value="SECCION H">SECCION H</option>
                                                                                                            <option value="SECCION I">SECCION I</option>
                                                                                                            <option value="SECCION J">SECCION J</option>
                                                                                                            <option value="SECCION K">SECCION K</option>
                                                                                                            <option value="SECCION L">SECCION L</option>
                                                                                                            <option value="SECCION M">SECCION M</option>
                                                                                                            <option value="SECCION N">SECCION N</option>
                                                                                                            <option value="SECCION O">SECCION I</option>
                                                                                                            <option value="SECCION P">SECCION P</option>
                                                                                                            <option value="SECCION Q">SECCION Q</option>
                                                                                                            <option value="SECCION R">SECCION R</option>
                                                                                                            <option value="SECCION S">SECCION S</option>
                                                                                                            <option value="SECCION T">SECCION T</option>
                                                                                                            <option value="SECCION U">SECCION U</option>
                                                                                                            <option value="SECCION V">SECCION V</option>
                                                                                                            <option value="SECCION W">SECCION W</option>
                                                                                                            <option value="SECCION X">SECCION X</option>
                                                                                                            <option value="SECCION Y">SECCION Y</option>
                                                                                                            <option value="SECCION Z">SECCION Z</option>
                                                                                                            <option value="RACK1">RACK1</option>
                                                                                                            <option value="RACK2">RACK2</option>
                                                                                                            <option value="RACK3">RACK3</option>
                                                                                                            <option value="RACK4">RACK4</option>
                                                                                                            <option value="RACK5">RACK5</option>
                                                                                                            <option value="RACK6">RACK6</option>
                                                                                                            <option value="RACK7">RACK7</option>
                                                                                                            <option value="RACK8">RACK8</option>
                                                                                                            <option value="RACK9">RACK9</option>
                                                                                                            <option value="RACK10">RACK10</option>
                                                                                                            <option value="RACK11">RACK11</option>
                                                                                                            <option value="RACK12">RACK12</option>
                                                                                                            <option value="RACK13">RACK13</option>
                                                                                                            <option value="RACK14">RACK14</option>
                                                                                                            <option value="RACK15">RACK15</option>
                                                                                                            <option value="RACK16">RACK16</option>
                                                                                                            <option value="RACK17">RACK17</option>
                                                                                                            <option value="RACK18">RACK18</option>
                                                                                                            <option value="RACK19">RACK19</option>
                                                                                                            <option value="RACK20">RACK20</option>
                                                                                                            <option value="RACK21">RACK21</option>
                                                                                                            <option value="RACK22">RACK22</option>
                                                                                                            <option value="RACK23">RACK23</option>
                                                                                                            <option value="RACK24">RACK24</option>
                                                                                                            <option value="RACKPRINCIPAL">RACKPRINCIPAL</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">Position</label>
                                                                                                    <input type="text" name="position" class="form-control" placeholder="Ej: A1" />
                                                                                                </div>
                                                                                

                                                                                
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                        <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                        
                                                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">State</label>
                                                                                                <div class="form-select-list">
                                                                                            <select class="form-control custom-select-value" name="state">
                                                                                                            <option>Available</option>
                                                                                                            <option>Taken</option>
                                                                                                        </select>
                                                                                                </div>
                                                                                                </div>

                                                                                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">Product</label>
                                                                                                    <input type="text" class="form-control" name="product" placeholder="Ej: Modem" />
                                                                                                </div>
                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                                            <div class="form-group-inner">
                                                                                                <div class="row">  
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">PDR/PID</label>
                                                                                                            <input type="text" class="form-control" name="pdrpid" placeholder="Ej: CP-7960G" />
                                                                                                    </div>                                                                                
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">Serial</label>
                                                                                                            <input type="text" class="form-control" name="serial" placeholder="" />
                                                                                                    </div>
                                                                                                </div>                                                                                   
                                                                                            </div>

                                                                                            <div class="form-group-inner">
                                                                                                <div class="row">  
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">Code</label>
                                                                                                            <input type="text" class="form-control" name="code" placeholder="Ej: CP-7960G" />
                                                                                                    </div>                                                                                
                                                                                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <label class="login2">Channel</label>
                                                                                                            <input type="text" class="form-control" name="channel" placeholder="" />
                                                                                                    </div>
                                                                                                </div>                                                                                   
                                                                                            </div>
                                                                                                                                                                        
                                                                                    
                                                                        
                                                                                    <div class="form-group-inner">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                                                                                <label class="login2">Observation</label>
                                                                                                    <textarea type="text" class="form-control" name="observation" placeholder=""></textarea>
                                                                                                </div>
                                                                                            </div>                                                                                   
                                                                                        </div>
                                                                                        

                                                                                        <div class="login-btn-inner">
                                                                                            
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <div class="login-horizental">
                                                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Data</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
        

        <!-- Modal Eliminar Inventario -->

        <div class="login-form-area edu-pd mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                        <div id="DangerModalDelete" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-4">
                                        <h4 class="modal-title">Delete item from the inventary?</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <span class="far fa-trash-alt fa-5x "></span>
                                        <h2>Danger!</h2>
                                        <p>Are you sure you want to delete the element</p>
                                    </div>
                                    <div class="modal-footer danger-md">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>



</div>





@endsection
