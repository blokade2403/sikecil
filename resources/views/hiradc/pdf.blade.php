<h3>Laporan HIRADC</h3>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>Unit</th>
        <th>Aktivitas</th>
        <th>Bahaya</th>
        <th>Pengendalian</th>
        <th>Score</th>
        <th>Peringkat</th>
    </tr>

    @foreach ($data as $d)
        <tr>
            <td>{{ $d->unit->nama_unit }}</td>
            <td>{{ $d->aktivitas }}</td>
            <td>{{ $d->bahaya }}</td>
            <td>{{ $d->pengendalian }}</td>
            <td>{{ $d->score }}</td>
            <td>{{ $d->peringkat }}</td>
        </tr>
    @endforeach
</table>
