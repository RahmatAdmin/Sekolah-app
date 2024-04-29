@extends('layouts.layout')

@section('content')

<div class="container" style="padding-left: 20px; padding-right: 20px;">
    <div class="row">
        <div style="width: 100%;">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Manage Data Siswa</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <button class="btn btn-primary">Tambah Data</button>
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive table-responsive-xl">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>TTL</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>1234567890</td>
                                    <td>1 Januari 2000</td>
                                    <td>Jane Doe</td>
                                    <td>john@example.com</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Aksi">
                                            <button type="button" class="btn btn-sm btn-info">Edit</button>
                                            <div style="margin-left: 20px;"></div> <!-- Membuat jarak 20px -->
                                            <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Data lainnya disini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')