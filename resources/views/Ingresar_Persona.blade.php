
<link href="{{ asset('plugin/datatables/datatables.min.css') }}" rel="stylesheet">
<script src="{{ asset('plugin/datatables/datatables.min.js') }}" defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<head>
    
    
    
    
<body>
@method('PUT')
<div class="container">
   
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>CC</th>
                <th>Nombre</th>
                <th>estado</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,  
       // ajax: "listtar-persons",
       ajax: "listtar-persons",
        columns: [
            {data: 'docomento_persona', name: 'docomento_persona'},
            {data: 'nombres', name: 'nombres'},
            {data: 'estado', name: 'estado'},
        
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
