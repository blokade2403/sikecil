<h2>Detail APAR</h2>

<p>Lokasi: {{ $apar->lokasi }}</p>
<p>Kondisi: {{ $apar->kondisi }}</p>
<p>Expire: {{ $apar->expire_date }}</p>

<h3>QR Code</h3>
<div>
    {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->generate(route('apar.detail.qr', $apar->kode_qr)) !!}
</div>

<a href="{{ route('apar.check.create', $apar->id) }}">Checklist</a>

<h3>Riwayat Checklist</h3>
<table>
    <tr>
        <th>Tanggal</th>
        <th>User</th>
        <th>Kondisi</th>
    </tr>
    @foreach ($apar->checks as $check)
        <tr>
            <td>{{ $check->created_at }}</td>
            <td>{{ $check->user->name }}</td>
            <td>{{ $check->kondisi_fisik }}</td>
        </tr>
    @endforeach
</table>
