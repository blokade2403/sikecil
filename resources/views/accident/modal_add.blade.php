<form method="POST" action="{{ route('accident.store') }}">
    @csrf

    <h4>Informasi Kecelakaan</h4>

    <input type="text" name="tempat" placeholder="Tempat" class="form-control">
    <input type="date" name="tanggal" class="form-control">
    <input type="time" name="jam" class="form-control">
    <textarea name="saksi" class="form-control" placeholder="Saksi"></textarea>

    <h4>Data Korban</h4>

    <input type="number" name="jumlah_korban" placeholder="Jumlah korban">
    <input type="number" name="laki_laki" placeholder="Laki-laki">
    <input type="number" name="perempuan" placeholder="Perempuan">

    <input type="text" name="nama_korban" placeholder="Nama korban">
    <input type="number" name="umur" placeholder="Umur">

    <input type="text" name="cedera" placeholder="Bagian cedera">

    <select name="tingkat_cedera">
        <option value="ringan">Ringan</option>
        <option value="berat">Berat</option>
        <option value="meninggal">Meninggal</option>
    </select>

    <h4>Kronologi</h4>
    <textarea name="uraian" class="form-control"></textarea>

    <h4>Sumber & Tipe</h4>
    <input type="text" name="sumber_kecelakaan">

    <select name="tipe">
        <option value="accident">Accident</option>
        <option value="incident">Incident</option>
        <option value="near_miss">Near Miss</option>
    </select>

    <h4>Tindak Lanjut</h4>
    <textarea name="tindak_lanjut"></textarea>

    <button class="btn btn-primary">Simpan</button>
</form>
