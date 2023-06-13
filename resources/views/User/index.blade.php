@extends('Layout.table.layout')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">


                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->


                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalAddData">
                                Tambah Data
                            </button>


                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                            <!-- buttone -->
                        </div>
                        <div class="card-body">
                            <table id="table-user" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mursid</td>
                                        <td>mursid018@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('mursid')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>rusdi</td>
                                        <td>rusdi@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('rusdi')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>rusdi</td>
                                        <td>rusdi@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('rusdi')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>rusdi</td>
                                        <td>rusdi@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('rusdi')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>rusdi</td>
                                        <td>rusdi@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('rusdi')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>rusdi</td>
                                        <td>rusdi@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('rusdi')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>rusdi</td>
                                        <td>rusdi@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('rusdi')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>rusdi</td>
                                        <td>rusdi@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modalShowMore" onclick="loadInfo('rusdi')">
                                                selengkapnya
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Lihat</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="modalShowMore" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="modalShowMoreLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalShowMoreLabel">Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Tutup
                </button>
                <a href="form.html" type="button" class="btn btn-primary">Edit Data</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalAddData" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="modalAddDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="modalAddDataLabel"></h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body">
                <div class="row align-items-center justify-content-center">
                    <div class="col col-12 col-md-3 d-flex justify-content-center">
                        <i class="fas fa-exclamation-triangle align-self-center p-4" style="font-size: 3.5rem"></i>
                    </div>
                    <h5 class="col col-12 col-md-6 m-0 text-center">
                        Apakah Kamu Yakin Ingin Menambah Data?
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Tutup
                </button>
                <a href="form.html" type="button" class="btn btn-primary">
                    Ya Saya Yakin
                </a>
            </div>
        </div>
    </div>
</div>
@endsection