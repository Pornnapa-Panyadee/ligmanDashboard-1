@extends('layouts.app_superadmin', ['activePage' => 'superadminlist', 'titlePage' => __('Create Account')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <div class="card-header card-header-primary card-header-icon">
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status') }}</span>
                        </div>
                        </div>
                    </div>
                @endif
                <div class="toolbar">
                    <a class="btn btn-warning mr-4"  href="{{ route('adminForm.superadmin.create') }}">
                    <i class="material-icons">add_circle_outline</i>
                        <span>Create Account</span>
                    </a>
                </div>
                <div class="material-datatables">
                    <!-- table -->
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr> 
                                <th></th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Under</th>
                                <th>Permission</th>
                                <th>#Device</th>
                                <th class="disabled-sorting text-right" width=20%>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            @foreach ($users_list as $user)
                            <tr>
                                <td><?php echo ++$i ?></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->under }}</td>
                                <td>{{ $user->permission }}</td>
                                <td>{{ $user->no_device }}</td>
                                <td class="td-actions text-right">
                                    <form action={{ url('superadmin/editaccount/'.$user->id) }} method="GET" style="display: inline;">
                                        {{ csrf_field() }}  
                                        <button class="btn btn-success">
                                            <i class="material-icons">edit_note</i> Edit
                                        </button>
                                    </form>
                                    <form action={{ url('superadmin/delaccount'.$user->id) }} method="POST" style="display: inline;">
                                        {{ csrf_field() }}                           
                                        <button class="btn btn-danger" onclick="if(confirm('Do you have sure ?')){}else{return false;};">
                                            <i class="material-icons">delete_outline</i> Delete
                                        </button>
                                    </form>
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

@endsection