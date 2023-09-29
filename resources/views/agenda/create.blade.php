@extends('layout.guru_main')

@section('kontenguru')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card rounded-4" style="margin-top: -80px;">
        <div class="card-body">
            <h1> <class="card-title mb-4"><center>Buat Agenda Harian </center></class></h1>
            <br>
            <form class="outer-repeater" action='/agenda' method='post' enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                    <label for="date_time" class="col-form-label col-lg-2">Tanggal dan Waktu</label>
                    <div class="col-lg-10">
                        <input type="textarea" class="form-control" id="date_time" name="tanggal"
                            value="{{ Carbon\Carbon::now() }}" readonly>
                    </div>
                </div>
                <div class="form-group row mb-3" style="width: 700px;">
                    <label for="jam_pembelajaran" class="col-form-label col-lg-2">Jam Ke-</label>
                    <select class="col-lg-10" id="jam_pembelajaran" name="jam_pembelajaran">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group row mb-4">
                    <label for="nama_mapel" class="col-form-label col-lg-2">Mata Pelajaran</label>
                    <div class="col-lg-10">
                        <input type="textarea" class="form-control" id="nama_mapel" name="mapel_id"
                            value="{{ $guru->guru->mapel->nama_mapel }}" disabled>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="nama_kelas" class="col-form-label col-lg-2">Kelas</label>
                    <div class="col-lg-10">
                        <input type="textarea" class="form-control" id="nama_kelas" name="kelas_id"
                            value="{{ $guru->guru->kelas->nama_kelas }}" disabled>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="uraian_kegiatan" class="col-form-label col-lg-2">Uraian Kegiatan</label>
                    <div class="col-lg-10">
                        <input id="uraian_kegiatan" name="kegiatan" type="text" value="" class="form-control"
                            placeholder="masukan uraian kegiatan">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="content" class="col-form-label col-lg-2">Bukti</label>
                    <div class="col-lg-10">
                        <input type="file" id="content" name="bukti" class="form-control" value=""
                            placeholder="masukan bukti">
                    </div>
                </div>
                <label class="m-0" for="">Tanda Tangan:</label>
                <div class="mb-5">
                    <br />
                    <div id="sig"></div>
                    <br />
                    <br />
                    <button id="clear" class="btn btn-danger btn-sm">Clear</button>
                    <textarea id="signature64" name="tanda_tangan" style="display: none"></textarea>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
