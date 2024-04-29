@extends('layouts.layout')

@section('content')

<section style="padding: 20px;">
    <div class="table-responsive table-responsive-xl" style="width: 100%; height: 800px;">
        <div class="row">
            <div style="width: 100%;">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Manage Data Guru</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <!-- Tambahkan id pada tombol "Tambah Data" untuk mengidentifikasinya -->
                            <button id="tambahDataBtn" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataModal">Tambah Data</button>
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
                                    <tr style="height: 80px;">
                                        <td>John Doe</td>
                                        <td>1234567890</td>
                                        <td>1 Januari 2000</td>
                                        <td>Jane Doe</td>
                                        <td>john@example.com</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Aksi">
                                                <button type="button" class="btn btn-sm btn-info">Edit</button>
                                                <div style="margin-left: 20px;"></div>
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
</section>

<!-- Modal untuk form tambah data -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form tambah data di sini -->
                <form>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <!-- Tambahkan field lainnya sesuai kebutuhan -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

@endsection('content')

<script>
    // Optional: Hapus tombol tutup modal ketika modal ditutup
    $('#tambahDataModal').on('hidden.bs.modal', function () {
        // Reset form jika diperlukan
        $(this).find('form')[0].reset();
    });
</script>
