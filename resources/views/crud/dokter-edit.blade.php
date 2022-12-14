@extends('layout.main')
@section('top')
    <h1>Edit Data Dokter</h1>
    {{$dokter}}

    <div>
        <form action="">
            @csrf
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control mb-3" value="{{ $dokter->nama_dokter }}">

                <label for="poli">Spesialis</label>
                <select name="poli" id="poli" class="mb-3 form-control" required>
                    <option value="{{ $dokter->poli->id }}">{{ $dokter->poli->nama_poli }}</option>
                    {{-- @foreach ($list as $l)
                        <option value="{{ $l->id }}">{{ $l->nama_poli }}</option>
                    @endforeach --}}
                </select>

                <label for="jadwal">Jadwal Dokter</label>
                <select name="jadwal" id="jadwal" class="mb-3 form-control" required>
                    <option value=" {{ $dokter->jadwal->id }}">
                        {{ $dokter->jadwal->jam }} - {{ $dokter->jadwal->hari}}, {{ $dokter->jadwal->tanggal}} {{ $dokter->jadwal->bulan}} 
                    </option>
                    {{-- @foreach ($jadwal as $j)
                        <option value="{{ $j->id }}">{{ $j->jam }} - {{ $j->hari }}, {{ $j->tanggal }} {{ $j->bulan }}</option>
                    @endforeach --}}
                </select>

                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="mb-3 form-control" required>
                    <option value="{{ $dokter->jk->id }}">{{ $dokter->jk->jenis_kelamin }}</option>
                    {{-- @foreach ($jk as $j)
                        <option value="{{ $j->id }}">{{ $j->jenis_kelamin }}</option>
                    @endforeach --}}
                </select>

                {{-- <label for="jadwal">Jadwal Dokter</label>
                <input type="text" name="jadwal" id="jadwal" class="form-control mb-3"> --}}

                <input type="text" value="{{ $dokter->desc }}">

                <label for="desc">Deskripsi</label>
                <textarea type="text" name="desc" id="desc" class="form-control mb-3"{{ $dokter->desc }}></textarea>
                
                <button class=" btn btn-primary" style="background-color: #5ECD81; border-color:#5ECD81">Tambah Data</button>
            </div>
        </form>
    </div>
@endsection