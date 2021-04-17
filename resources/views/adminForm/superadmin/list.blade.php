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
                <div class="toolbar">
                    <a class="btn btn-warning mr-4"  href="{{ route('superadmin.create') }}">
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
                                <th>Status</th>
                                <th>Under</th>
                                <th>Permission</th>
                                <th>#Device</th>
                                <th class="disabled-sorting text-right" width=20%>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Under</th>
                                <th>Permission</th>
                                <th>#Device</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php for($i=0;$i<3;$i++){ ?>
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>admin</td>
                                <td>admin</td>
                                <td>admin</td>
                                <td>-</td>
                                <td>editor</td>
                                <td>15/15</td>
                                <td class="td-actions text-right">
                                    <button class="btn btn-warning">
                                        <i class="material-icons">visibility</i> View
                                    </button>
                                    <button class="btn btn-success">
                                        <i class="material-icons">edit_note</i> Edit
                                    </button>
                                    <button class="btn btn-danger">
                                        <i class="material-icons">delete_outline</i> Delete
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        
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