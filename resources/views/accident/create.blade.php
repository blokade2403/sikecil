@extends('layouts.main')

@section('content')
    <div class="container">
        <h3 class="mb-4">Tambah Laporan Kecelakaan</h3>

        <form action="{{ route('accident.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- INFORMASI KECELAKAAN --}}
            <div class="card mb-4">
                <div class="card-header">I. Informasi Kecelakaan</div>
                <div class="card-body">

                    <div class="mb-3">
                        <label>Tempat</label>
                        <input type="text" name="tempat" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Jam</label>
                            <input type="time" name="jam" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Foto Kejadian</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Saksi</label>
                        <textarea name="saksi" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            {{-- DATA KORBAN --}}
            <div class="card mb-4">
                <div class="card-header">II. Data Korban</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Jumlah Korban</label>
                            <input type="number" name="jumlah_korban" class="form-control" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Laki-laki</label>
                            <input type="number" name="laki_laki" class="form-control">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Perempuan</label>
                            <input type="number" name="perempuan" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Nama Korban</label>
                        <input type="text" name="nama_korban" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Umur</label>
                        <input type="number" name="umur" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Bagian Tubuh Cedera</label>
                        <input type="text" name="cedera" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Tingkat Cedera</label>
                        <select name="tingkat_cedera" class="form-control">
                            <option value="ringan">Luka Ringan</option>
                            <option value="berat">Luka Berat</option>
                            <option value="meninggal">Meninggal</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- KRONOLOGI --}}
            <div class="card mb-4">
                <div class="card-header">III. Uraian Kejadian</div>
                <div class="card-body">
                    <textarea name="uraian" class="form-control" rows="5"></textarea>
                </div>
            </div>

            {{-- SUMBER --}}
            <div class="card mb-4">
                <div class="card-header">IV. Sumber & Tipe Kecelakaan</div>
                <div class="card-body">

                    <div class="mb-3">
                        <label>Sumber Kecelakaan</label>
                        <input type="text" name="sumber_kecelakaan" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Tipe</label>
                        <select name="tipe" class="form-control">
                            <option value="accident">Accident</option>
                            <option value="incident">Incident</option>
                            <option value="near_miss">Near Miss</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- TINDAK LANJUT --}}
            <div class="card mb-4">
                <div class="card-header">V. Tindak Lanjut</div>
                <div class="card-body">
                    <textarea name="tindak_lanjut" class="form-control" rows="4"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-success">
                Simpan Laporan
            </button>

            <a href="{{ route('accident.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
@endsection
