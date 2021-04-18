@extends('layouts.app_admin', ['activePage' => 'listadmin', 'titlePage' => __('Create Account')])

@section('content')
<div class="content">
    <div class="container-fluid">
    <!-- add Device -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <a class="btn btn-warning mr-4"  href="{{ route('admin.create_device') }}">
                        <i class="material-icons">add_circle_outline</i>
                            <span>Add Device</span>
                        </a>
                    </div>
                    <div class="material-datatables">
                        <!-- table -->
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" style="width:100%">
                        <thead>
                                <tr> 
                                    <th></th>
                                    <th>Device</th>
                                    <th>Username</th>
                                    <th>Pole</th>
                                    <th>Link</th>
                                    <th class="disabled-sorting text-right" width=20%>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for($i=0;$i<8;$i++){ ?>
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>admin</td>
                                    <td>admin</td>
                                    <td>{{$i+1}}</td>
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
    <!-- add Location Pole -->
        <br>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <a class="btn btn-warning mr-4"  href="{{ route('admin.create_location') }}">
                        <i class="material-icons">add_circle_outline</i>
                            <span>Add Location</span>
                        </a>
                    </div>
                    <div class="material-datatables">
                        <!-- table -->
                        <table id="datatables" class="table table-striped table-no-bordered table-hover"  style="width:100%; text-align:center;">
                            <thead>
                                <tr> 
                                    <th>Pole</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Location</th>
                                    <th class="disabled-sorting text-right" width=20%>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for($i=0;$i<4;$i++){ ?>
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>18.9697</td>
                                    <td>99.9304</td>
                                    <td> สถาบันพลังานงาน มช Erddi</td>
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