@extends('admin.app.master')
@section('content')
<div class="col-md-10 content_part">
    <div class="row custom_bread_part">
        <div class="col-md-12 bread">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> All User</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Table All Data</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="#"><i class="fa fa-th"></i> Form</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover custom_table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Username</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Khayrul Islam Shanto</td>
                                <td>01835061968</td>
                                <td>coderkhayrul@gmail.com</td>
                                <td>khayrulshanto</td>
                                <td>
                                    <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Khayrul Islam Shanto</td>
                                <td>01835061968</td>
                                <td>coderkhayrul@gmail.com</td>
                                <td>khayrulshanto</td>
                                <td>
                                    <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Khayrul Islam Shanto</td>
                                <td>01835061968</td>
                                <td>coderkhayrul@gmail.com</td>
                                <td>khayrulshanto</td>
                                <td>
                                    <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Khayrul Islam Shanto</td>
                                <td>01835061968</td>
                                <td>coderkhayrul@gmail.com</td>
                                <td>khayrulshanto</td>
                                <td>
                                    <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    .
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

