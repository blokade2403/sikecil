<form method="POST" action="{{ route('apar.check.store') }}">
    @csrf

    <input type="hidden" name="apar_id" value="{{ $apar->id }}">

    <label>Selang</label>
    <select name="selang">
        <option value="1">Baik</option>
        <option value="0">Rusak</option>
    </select>

    <label>Pengunci</label>
    <select name="pengunci">
        <option value="1">Baik</option>
        <option value="0">Rusak</option>
    </select>

    <label>Isi Tabung</label>
    <select name="isi_tabung">
        <option value="1">Penuh</option>
        <option value="0">Kosong</option>
    </select>

    <label>Kondisi Fisik</label>
    <select name="kondisi_fisik">
        <option value="1">Baik</option>
        <option value="0">Rusak</option>
    </select>

    <textarea name="catatan" placeholder="Catatan"></textarea>

    <button type="submit">Simpan</button>
</form>
