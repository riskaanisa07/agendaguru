@extends('layout.admin_main')

@section('kontenadmin')
    <div class="card">
        <div class="card-body">
            <h1> <class="card-title mb-4"><center> Tambah Data </center></class></h1>
            <form class="outer-repeater" action='/guru' method='post'>
                @csrf
                <a href="/guru" class="btn btn-secondary">
                    << kembali</a>
                        <div class="form-group row mb-4">
                            <label for="nama" class="col-form-label col-lg-2">Nama</label>
                            <div class="col-lg-10">
                                <input id="nama" name="name" type="text" value="" class="form-control"
                                    placeholder="masukan nama">
                            </div>
                        </div>
                        <div class="form-group row mb-4 ">
                            <label for="jam_pembelajaran" class="col-form-label col-lg-2 ">Mata Pelajaran</label>
                            <select class="col-lg-10" id="mapel_id" name="mapel_id" style="width:905px; left:10px;">
                                @foreach ($mapel as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row mb-4 ">
                            <label for="kelas_id" class="col-form-label col-lg-2 ">Kelas</label>
                            <select class="col-lg-10" id="kelas_id" name="kelas_id" style="width:905px; left:10px;">
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="email" class="col-form-label col-lg-2">Email</label>
                            <div class="col-lg-10">
                                <input id="email" name="email" type="email" value="" class="form-control"
                                    placeholder="masukan email">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="password" class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input id="password" name="password" type="password" value="" class="form-control"
                                    placeholder="masukan password">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
            </form>
        </div>
    </div>
@endsection
