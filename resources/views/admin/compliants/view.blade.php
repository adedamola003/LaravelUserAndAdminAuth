@extends('layouts.adminApp')

@section('pageTitle', 'Manage Compliants')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Manage Compliants
@endsection



@section('compliantsActive')
    class="mm-active"
@endsection

   
@section('content')



@endsection

@section('extraJS')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
    
        $(document).ready(function() {
    var table = $('#datatablesg').DataTable();
    
  
});
</script>


@endsection

