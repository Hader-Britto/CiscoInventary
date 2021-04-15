@extends('layouts.design')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}" />
    <link href="{{ asset('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    
</head>
<body>
    
 <!-- Static Table Start -->
 
 <div class="all-content-wrapper">
    <div class="data-table-area mg-b-15">
       <div class="container-fluid">
           
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="sparkline13-list">
                       <div class="sparkline13-hd">
                          <div class="main-sparkline13-hd">
                               <h1>Projects <span class="table-project-n">Data</span> Table</h1> 
                               
                           </div>
                           
                       </div>
                       
                       <div class="sparkline13-graph">
                           <div class="datatable-dashv1-list custom-datatable-overright">
                               <br><div id="toolbar">
                                
                                   
                               </div>
                               <table  data-toggle="table" data-pagination="true"  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                               data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class=" data-table">
                                   <a class="far fa-handshake"  style="font-size:24px; color: #009bdd;" href="javascript:void(0)" id="createNewBook" data-toggle="modal" data-target="#ajaxModel"></a><thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>loancode</th>
                                           <th>pdrp_id</th>
                                           <th>serial</th>
                                           <th>channel</th>
                                           <th>idinventary</th>
                                           <th>estimateddate</th>
                                           <th>realreturn</th>
                                           <th>dateloan</th>
                                           <th>state</th>
                                           <th>pastdays</th>
                                           <th>observation</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           
       </div>
   </div>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
             </div>
            <div class="modal-body">
                <form id="loanForm" name="loanForm" class="form-horizontal">
                   <input type="hidden" name="loan_id" id="loan_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Loancode</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="loancode" name="loancode" placeholder="Enter loancode" value="" maxlength="50" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Pdrp_id</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pdrp_id" name="pdrp_id" placeholder="Enter pdrp_id" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Serial</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="serial" name="serial" placeholder="Enter serial" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Channel</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="channel" name="channel" placeholder="Enter channel" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Idinventary</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="idinventary" name="idinventary" placeholder="Enter pdrpid" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Estimateddate</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="estimateddate" name="estimateddate" placeholder="Enter estimateddate" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Realreturn</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="realreturn" name="realreturn" placeholder="Enter realreturn" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Dateloan</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="dateloan" name="dateloan" placeholder="Enter dateloan" value="" maxlength="50" required="">
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="" maxlength="50" required="">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Pastdays</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pastdays" name="pastdays" placeholder="Enter pastdays" value="" maxlength="50" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Observation</label>
                        <div class="col-sm-12">
                            <textarea id="observation" name="observation" required="" placeholder="Enter observation" class="form-control"></textarea>
                        </div>
                    </div>

                   
      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>  
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js')}}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js')}}"></script>  
    <script src = "{{ asset('http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js')}}" defer ></script>   

   
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('Loans.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'loancode', name: 'loancode'},
            {data: 'pdrp_id', name: 'pdrp_id'},
            {data: 'serial', name: 'serial'},
            {data: 'channel', name: 'channel'},
            {data: 'idinventary', name: 'idinventary'},
            {data: 'estimateddate', name: 'estimateddate'},
            {data: 'realreturn', name: 'realreturn'},
            {data: 'dateloan', name: 'dateloan'},
            {data: 'state', name: 'state'},
            {data: 'pastdays', name: 'pastdays'},
            {data: 'observation', name: 'observation'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewBook').click(function () {
        $('#saveBtn').val("create-book");
        $('#loan_id').val('');
        $('#loanForm').trigger("reset");
        $('#modelHeading').html("Create New Loan");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editbtn', function () {
      var loan_id = $(this).data('id');
      $.get("{{ route('Loans.index') }}" +'/' + loan_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Loan");
          $('#saveBtn').val("edit-book");
          $('#ajaxModel').modal('show');
          $('#loan_id').val(data.id);
          $('#loancode').val(data.loancode);
          $('#pdrp_id').val(data.pdrp_id);
          $('#serial').val(data.serial);
          $('#channel').val(data.channel);
          $('#idinventary').val(data.idinventary);
          $('#estimateddate').val(data.estimateddate);
          $('#realreturn').val(data.realreturn);
          $('#dateloan').val(data.dateloan);
          $('#state').val(data.state);
          $('#pastdays').val(data.pastdays);
          $('#observation').val(data.observation);
      })
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#loanForm').serialize(),
          url: "{{ route('Loans.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#loanForm').trigger("reset");
              $('#ajaxModel').modal('show');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deletebtn', function () {
     
        var loan_id = $(this).data("id");
        
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('Loans.store') }}"+'/'+loan_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
</script>


</body>
</html>
@endsection
