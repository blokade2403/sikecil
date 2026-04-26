<div class="modal fade" id="detailModal{{ $c->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    🩺 Detail Pemeriksaan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <!-- 👤 PROFIL -->
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="text-muted mb-3">👤 Profil Pegawai</h6>

                        <div class="row">
                            <div class="col-md-6">
                                <strong>Nama:</strong><br>
                                {{ $c->user->nama ?? '-' }}
                            </div>
                            <div class="col-md-6">
                                <strong>Unit:</strong><br>
                                {{ $c->user->employee->unit->nama_unit ?? '-' }}
                            </div>
                            <div class="col-md-6 mt-2">
                                <strong>Tanggal:</strong><br>
                                {{ $c->tanggal_pemeriksaan }}
                            </div>
                            <div class="col-md-6 mt-2">
                                <strong>Umur:</strong><br>
                                {{ $c->umur }} Tahun
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ⚖️ IMT -->
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <h6 class="text-muted mb-3">⚖️ Indeks Massa Tubuh</h6>

                        @php
                            $imt = $c->imt->imt ?? 0;
                            $kategori = strtolower($c->imt->kategori_imt ?? '-');

                            $warna = match (true) {
                                str_contains($kategori, 'obesitas') => 'bg-dark',
                                str_contains($kategori, 'gemuk') => 'bg-danger',
                                str_contains($kategori, 'normal') => 'bg-success',
                                default => 'bg-secondary',
                            };

                            $progress = min($imt * 2, 100);
                        @endphp

                        <h1 class="fw-bold text-primary">{{ round($imt, 2) }}</h1>

                        <span class="badge {{ $warna }} px-3 py-2">
                            {{ $c->imt->kategori_imt ?? '-' }}
                        </span>

                        <!-- Progress -->
                        <div class="progress mt-3" style="height:20px;">
                            <div class="progress-bar {{ $warna }}" style="width: {{ $progress }}%">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 🏃 VO2 MAX -->
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body text-center">

                        <h6 class="text-muted mb-3">🏃 Kebugaran (VO2 Max)</h6>

                        @php
                            $hasil = strtolower($c->fitness->hasil ?? '-');

                            $warnaVo2 = match (true) {
                                str_contains($hasil, 'kurang') => 'bg-danger',
                                str_contains($hasil, 'cukup') => 'bg-warning',
                                str_contains($hasil, 'baik sekali') => 'bg-primary',
                                str_contains($hasil, 'baik') => 'bg-success',
                                default => 'bg-secondary',
                            };
                        @endphp

                        <h1 class="fw-bold text-success">
                            {{ round($c->fitness->vo2_max ?? 0, 2) }}
                        </h1>

                        <span class="badge {{ $warnaVo2 }} px-3 py-2">
                            {{ $c->fitness->hasil ?? '-' }}
                        </span>

                    </div>
                </div>

                <!-- 🏋️ PROGRAM LATIHAN -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">

                        <h6 class="text-muted mb-3">🏋️ Program Latihan</h6>

                        @if ($c->exercise)
                            <div class="row text-center">

                                <div class="col-md-3">
                                    <small>Frekuensi</small>
                                    <h6 class="fw-bold">
                                        {{ $c->exercise->frekuensi }}
                                    </h6>
                                </div>

                                <div class="col-md-3">
                                    <small>Zona Nadi</small>
                                    <h6 class="fw-bold">
                                        {{ $c->exercise->denyut_nadi }}
                                    </h6>
                                </div>

                                <div class="col-md-3">
                                    <small>Durasi</small>
                                    <h6 class="fw-bold">
                                        {{ $c->exercise->durasi }} menit
                                    </h6>
                                </div>

                                <div class="col-md-3">
                                    <small>Tipe</small>
                                    <h6 class="fw-bold">
                                        {{ $c->exercise->tipe_latihan }}
                                    </h6>
                                </div>

                            </div>
                        @else
                            <div class="text-center text-muted">
                                ❌ Belum ada program latihan
                                <br><br>
                                <a href="{{ route('exercise.create', $c->id) }}" class="btn btn-primary btn-sm">
                                    + Tambah Program
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
