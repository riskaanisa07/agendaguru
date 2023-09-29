@extends('layout.admin_main')

@section('kontenadmin')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Agenda Harian Guru</h4>
            <div class="pb-3">
                <form class="d-flex" action="" method="GET">
                    <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}"
                        placeholder="Masukan Kata Kunci" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </form>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Lihat Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agenda as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <th>{{ $item->user->name }}</th>
                            <th>
                                <a href="/agenda/{{ $item->id }}/print" class="btn btn-secondary" type="submit">Print Agenda</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
