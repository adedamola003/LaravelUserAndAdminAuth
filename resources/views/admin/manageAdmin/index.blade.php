@extends('layouts.adminApp')

@section('pageTitle', 'Manage Administrators')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Manage Administrators
@endsection

@section('dashboardTitleButton')
    <div class="page-title-actions">
        <div class="d-inline-block dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info" data-toggle="modal" data-target="#addNewAdmin">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-business-time fa-w-20"></i>
                </span>
                Add Admin
            </button>
        </div>
    </div> 
@endsection

@section('manageAdminsActive')
    class="mm-active"
@endsection
   
@section('content')


<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="table-responsive"> 
        <table style="width: 100%;" id="datatablesg" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>S/No</th>
                <th hidden>Slug</th>
                <th>Name</th>
                <th>Email</th>
                <th class="text-center">Status</th>
                <th class="text-center">Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php
            $i=1;
            @endphp
            @foreach($allAdminData as $adminData)
            @php
                        $rolename = $adminData->getRoleNames()->first();


                        @endphp
            <tr>
                <td>{{$i}}</td>
                <td hidden>{{$adminData->slug}}</td>
                <td>{{$adminData->name}}</td>
                <td>{{$adminData->email}}</td>
                <td class="text-center">
                    @if($adminData->status == '1')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-success">Active</button>
                    @elseif($adminData->status == '0')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-danger">Inactive</button>
                    @endif
                </td>
                <td class="text-center"><button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-info">{{ucfirst($rolename)}}</button></td>
                <td> <button type="button" class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-warning editBiller"  data-toggle="modal" data-target="#editBiller">Edit </button>  </td>
            </tr>
            @php
            $i++;
            @endphp
            @endforeach
            
            
            </tbody>
            <tfoot>
            <tr>
                <th>S/No</th>
                <th hidden>Slug</th>
                <th>Name</th>
                <th>Email</th>
                <th class="text-center">Status</th>
                <th class="text-center">Role</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
        </div>
    </div>
</div>


@endsection

@section('extraJS')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
    
        $(document).ready(function() {
    var table = $('#datatablesg').DataTable();
    
    table.on('click', '.editBiller', function() {
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();

        console.log(data);
        $('#adminSlug').val(data[1]);
        $('#name2').val(data[2]);
        $('#email2').val(data[3]);
        document.getElementById("route").action = "/admin/manageAdmin-editAdmin/" + data[1];

        if(data[1]) {
                $.ajax({
                    url: '/admin/manageAdmin-getAdminDetails/'+data[1],
                    type:"GET",
                    dataType:"json",
                    beforeSend: function(){
                            $('#loader').css("visibility", "visible");
                        },
                    success:function(data) {
                        $('select[name="billerParentName"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="billerParentName"]').append('<option value="'+ value.slug +'">' + value.name + '</option>');
                        });
                    },
                    complete: function(){
                            $('#loader').css("visibility", "hidden");
                        }
                });
            } else {
                
            }

    })
});
</script>


@endsection

@section('modal')
    
{{--Add New Admin--}}
<div class="modal fade" id="addNewAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Administrator</h5>
                
            </div>
              <form action="/admin/manageAdmin-addAdmin" method="POST">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Name..." required>
                    </div>

                    <div class="form-group">
                        <label for= "email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email..." required>
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" id="role2" class="form-control" required>
                            <option value="">--Select Role--</option>
                            @foreach($roles as $role)
                                <option value="{{$role->name}}" @if(old('role') == $role->name) selected @endif>{{ucfirst($role->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="border-0 mr-2 btn-transition btn btn-primary" onclick="if (!confirm('Are you sure?')) { return false }">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--End New Admin Modal--}}

{{--Edit Admin Details Modal--}}
        <div class="modal fade" id="editBiller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Biller Details</h5>
                        
                    </div>
                    <form action="" id="route" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name2" class="form-control" name="name" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <label for= "email">Email</label>
                                <input type="text" class="form-control" id="email2" name="email" placeholder="Email..." required>
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control" required=""> 
                                    <option value="">--Select Role--</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->name}}" @if(old('role') == $role->name) selected @endif>{{ucfirst($role->name)}}</option>
                                    @endforeach
                                </select>
                            </div>

                            
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="border-0 mr-2 btn-transition btn btn-primary" onclick="if (!confirm('Are you sure?')) { return false }">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--Edit Biller Modal--}}

@endsection 
