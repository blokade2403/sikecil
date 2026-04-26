<h3 style="text-align:center">LAPORAN KECELAKAAN</h3>

<b>I. Informasi</b>
<p>Tempat: {{ $data->tempat }}</p>
<p>Tanggal: {{ $data->tanggal }}</p>
<p>Jam: {{ $data->jam }}</p>
<p>Saksi: {{ $data->saksi }}</p>

<b>II. Data Korban</b>
<p>Jumlah: {{ $data->jumlah_korban }}</p>
<p>Nama: {{ $data->nama_korban }}</p>
<p>Umur: {{ $data->umur }}</p>
<p>Cedera: {{ $data->cedera }}</p>
<p>Tingkat: {{ $data->tingkat_cedera }}</p>

<b>III. Kronologi</b>
<p>{{ $data->uraian }}</p>

<b>IV. Sumber</b>
<p>{{ $data->sumber_kecelakaan }}</p>

<b>V. Tipe</b>
<p>{{ $data->tipe }}</p>

<b>VI. Tindak Lanjut</b>
<p>{{ $data->tindak_lanjut }}</p>
