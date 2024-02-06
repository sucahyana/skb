@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List layanan</h1>
    </div>
    <a href="./tambah-layanan.html" class="btn btn-primary">Tambahkan Layanan Baru</a>
    <!-- tabel -->
    <div class="row col-md-9 mt-3 ms-2 mb-5">
        <table class="table table-striped small">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Layanan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Otto</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati itaque natus incidunt ad cum, aperiam a aliquid similique non quia.</td>
                    <td>
                        <a href="./edit-layanan.html" class="badge bg-warning mb-1">
                            <i class="bi bi-pencil-square" style="font-size: 1rem"></i>
                        </a>
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                            <i class="bi bi-trash" style="font-size: 1rem"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
