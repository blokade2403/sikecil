<h2>Detail APAR (Scan QR)</h2>

<p>Lokasi: {{ $apar->lokasi }}</p>
<p>Kondisi: {{ $apar->kondisi }}</p>

<a href="{{ route('apar.check.create', $apar->id) }}">Isi Checklist</a>
