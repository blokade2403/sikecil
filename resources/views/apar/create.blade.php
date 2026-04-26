<form method="POST" action="{{ route('apar.store') }}">
    @csrf

    <input type="text" name="lokasi" placeholder="Lokasi">
    <input type="text" name="ukuran" placeholder="Ukuran">
    <input type="text" name="kondisi" placeholder="Kondisi">
    <input type="date" name="expire_date">

    <button type="submit">Simpan</button>
</form>
