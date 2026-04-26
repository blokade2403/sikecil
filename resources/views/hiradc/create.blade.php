@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>Input HIRADC</h3>

        <form action="{{ route('hiradc.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Unit</label>
                <select name="unit_id" class="form-control">
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->nama_unit }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Aktivitas Kegiatan</label>
                <input type="text" name="aktivitas" class="form-control">
            </div>

            <div class="mb-3">
                <label>Rincian Bahaya</label>
                <textarea name="bahaya" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Pengendalian Resiko</label>
                <textarea name="pengendalian" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Kemungkinan (1-5)</label>
                <input type="number" name="kemungkinan" class="form-control">
            </div>

            <div class="mb-3">
                <label>Keparahan (1-5)</label>
                <input type="number" name="keparahan" class="form-control">
            </div>

            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
