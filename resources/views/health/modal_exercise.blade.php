<div class="modal fade" id="modalExercise{{ $c->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <form method="POST" action="{{ route('exercise.store') }}">
                @csrf

                <input type="hidden" name="health_check_id" value="{{ $c->id }}">

                <!-- HEADER -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Program Latihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- BODY -->
                <div class="modal-body">

                    <!-- INFO -->
                    <div class="card mb-3 p-3">
                        <h5>Data Pemeriksaan</h5>
                        <p><b>Nama:</b> {{ $c->user->nama }}</p>
                        <p><b>IMT:</b> {{ round($c->imt->imt ?? 0, 2) }}</p>
                        <p><b>VO2 Max:</b> {{ round($c->fitness->vo2_max ?? 0, 2) }}</p>
                        <p><b>Status:</b> {{ $c->fitness->hasil ?? '-' }}</p>
                    </div>

                    <!-- INPUT -->
                    <div class="card p-3">

                        <div class="mb-3">
                            <label>Frekuensi</label>
                            <select name="frekuensi" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="2x/minggu">2x/minggu</option>
                                <option value="3x/minggu">3x/minggu</option>
                                <option value="4-5x/minggu">4-5x/minggu</option>
                                <option value="5-6x/minggu">5-6x/minggu</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Zona Nadi</label>
                            <select name="denyut_nadi" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="110">100-120 bpm</option>
                                <option value="125">120-130 bpm</option>
                                <option value="140">130-150 bpm</option>
                                <option value="160">150-170 bpm</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Durasi</label>
                            <select name="durasi" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="20">20 menit</option>
                                <option value="30">30 menit</option>
                                <option value="45">45 menit</option>
                                <option value="60">60 menit</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tipe Latihan</label>
                            <select name="tipe_latihan" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Aerobik ringan">Aerobik ringan</option>
                                <option value="Aerobik + interval">Aerobik + interval</option>
                                <option value="Strength + cardio">Strength + cardio</option>
                                <option value="HIIT">HIIT</option>
                            </select>
                        </div>

                    </div>

                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Program</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>

            </form>

        </div>
    </div>
</div>
