@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Customer Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('customer.create') }}"> Create New Customer</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table id="getCustomerData" class="">
 <tr>
   <th>Name</th>
   <th>Email</th>
   <th>Create Date</th>
   <th>Action</th>
 </tr>
</table>
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    oTable = $('#getCustomerData').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('getCustomerData') }}",
        "columns": [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action'}
        ]
    });
});
</script>
@endsection
