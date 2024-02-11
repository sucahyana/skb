@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Layanan</h1>
    </div>
    <div class="my-4">
        <a href="/dashboard/layanan-kami" class="text-decoration-none">kembali...</a>
    </div>
    <div class="col-md-5">
        <form method="POST" action="/dashboard/layanan-kami/{{ $layanan->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Layanan</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $layanan->name }}" />
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px">{{ $layanan->deskripsi }}</textarea>
                <label for="floatingTextarea2">Deskripsi</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
