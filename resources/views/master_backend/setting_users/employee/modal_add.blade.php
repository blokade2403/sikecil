<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header">
                <h5 class="modal-title">Input Pemeriksaan Kesehatan</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <form method="POST" action="{{ route('employees.store') }}" class="row g-3">
                @csrf

                <!-- User -->
                <div class="col-md-6">
                    <label class="form-label">User</label>
                    <select name="user_id" class="form-select" required>
                        <option value="">-- Pilih User --</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- NIP -->
                <div class="col-md-6">
                    <label class="form-label">NIP</label>
                    <input type="text" name="nip" class="form-control" required>
                </div>

                <!-- Nama -->
                <div class="col-md-6">
                    <label class="form-label">Nama Pegawai</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <!-- Tanggal Lahir -->
                <div class="col-md-6">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>

                <!-- Jenis Kelamin -->
                <div class="col-md-6">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <!-- Unit -->
                <div class="col-md-6">
                    <label class="form-label">Unit</label>
                    <select name="unit_id" class="form-select">
                        <option value="">-- Pilih Unit --</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->nama_unit }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Position -->
                <div class="col-md-6">
                    <label class="form-label">Jabatan</label>
                    <select name="position_id" class="form-select">
                        <option value="">-- Pilih Jabatan --</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->nama_jabatan }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
