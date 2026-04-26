  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myExtraLargeModal">
                      Kesehatan Pegawai
                  </h4>
                  <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="card height-equal">
                  <div class="card-header">
                      <h5>Pemeriksaan Kebugaran Pegawai</h5>
                      <p class="f-m-light mt-1">
                          Melalui aplikasi ini, setiap pegawai dapat melakukan pencatatan hasil pemeriksaan kebugaran
                          secara mandiri maupun melalui petugas kesehatan. Data yang dikumpulkan mencakup berbagai
                          indikator penting seperti indeks massa tubuh (IMT), tekanan darah, detak jantung, hingga hasil
                          tes kebugaran jasmani seperti lari, push-up, dan sit-up. Informasi tersebut kemudian diolah
                          secara otomatis untuk memberikan gambaran menyeluruh mengenai tingkat kebugaran masing-masing
                          individu.
                      </p>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="{{ route('health.store') }}"
                          class="row g-3 needs-validation custom-input">
                          @csrf
                          <div class="col-12">
                              <label class="form-label" for="validationCustom01">Nama Pegawai</label>
                              <select name="employee_id" class="form-select">
                                  @foreach ($employees as $e)
                                      <option value="{{ $e->id }}">{{ $e->nama }}</option>
                                  @endforeach
                              </select>
                              <div class="invalid-feedback">
                                  Please enter your valid
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-12">
                              <label class="col-sm-12 col-form-label">Tanggal</label><input class="form-control"
                                  name="tanggal_pemeriksaan" type="date" required="" />
                              <div class="invalid-feedback">
                                  Please enter your valid date
                              </div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label" for="validationCustom03">Tinggi</label>
                              <input type="number" name="tinggi" class="form-control">
                              <div class="invalid-feedback">
                                  Please provide a valid tinggi.
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label" for="validationCustom05">Berat</label>
                              <input type="number" name="berat" class="form-control">
                              <div class="invalid-feedback">
                                  Please provide a valid berat.
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-12">
                              <div class="card shadow-sm border-0 p-4 text-center">

                                  <h6 class="mb-3">Hasil IMT</h6>
                                  <input type="hidden" name="imt" id="imt_input">
                                  <input type="hidden" name="kategori_imt" id="kategori_input">
                                  <!-- Angka IMT -->
                                  <h1 id="imt" class="fw-bold text-primary mb-2">0.00</h1>

                                  <!-- Kategori -->
                                  <span id="kategori" class="badge bg-secondary fs-6 px-3 py-2 mb-3">
                                      -
                                  </span>

                                  <!-- Progress Bar -->
                                  <div class="progress position-relative" style="height: 25px;">
                                      <div id="imtBar" class="progress-bar" role="progressbar" style="width: 0%">
                                      </div>

                                      <!-- Indicator -->
                                      <div id="imtIndicator"
                                          style="position:absolute; top:-8px; width:2px; height:40px; background:black; left:0%;">
                                      </div>
                                  </div>

                                  <!-- Label Range -->
                                  <div class="d-flex justify-content-between mt-2 small">
                                      <span>Kurus</span>
                                      <span>Normal</span>
                                      <span>Gemuk</span>
                                      <span>Obesitas</span>
                                  </div>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label" for="validationCustom03">Waktu Rockport</label>
                              <input name="waktu" id="waktu" class="form-control">

                              {{-- <input class="form-control" id="validationCustom03" name="waktu" type="text"
                                  required="" /> --}}
                              <div class="invalid-feedback">
                                  Please provide a valid tinggi.
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label" for="validationCustom05">Nadi</label>
                              <input name="denyut" id="denyut" class="form-control">
                              {{-- <input class="form-control" id="validationCustom05" name="denyut" type="text"
                                  required="" /> --}}
                              <div class="invalid-feedback">
                                  Please provide a valid nadi.
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>

                          <div class="card mt-3 shadow border-0">
                              <div class="card-body">

                                  <h5 class="mb-3">🏃‍♂️ Hasil Kebugaran</h5>

                                  <div class="row text-center">

                                      <div class="col-md-4 mb-3">
                                          <div class="p-3 bg-light rounded">
                                              <small class="text-secondary">VO2 Max</small>
                                              <h3 id="vo2Text" class="fw-bold text-primary">-</h3>
                                          </div>
                                      </div>

                                      <div class="col-md-4 mb-3">
                                          <div class="p-3 bg-light rounded">
                                              <small class="text-secondary">Status</small><br>
                                              <span id="hasilText" class="badge bg-secondary px-3 py-2">-</span>
                                          </div>
                                      </div>

                                      <div class="col-md-4 mb-3">
                                          <div class="p-3 bg-light rounded">
                                              <small class="text-secondary">Zona Nadi</small>
                                              <h6 id="zonaText" class="fw-bold">-</h6>
                                          </div>
                                      </div>

                                      <div class="col-md-4 mb-3">
                                          <div class="p-3 bg-light rounded">
                                              <small class="text-secondary">Frekuensi</small>
                                              <input type="hidden" name="frekuensi" id="frekuensi">
                                              <input type="hidden" name="durasi" id="durasi">
                                              <input type="hidden" name="tipe" id="tipe">
                                              {{-- <input type="hidden" name="denyut_nadi" id="denyut_nadi"> --}}
                                              <h6 id="frekuensiText">-</h6>
                                          </div>
                                      </div>

                                      <div class="col-md-4 mb-3">
                                          <div class="p-3 bg-light rounded">
                                              <small class="text-secondary">Durasi</small>
                                              <h6 id="durasiText">-</h6>
                                          </div>
                                      </div>

                                      <div class="col-md-4 mb-3">
                                          <div class="p-3 bg-light rounded">
                                              <small class="text-secondary">Tipe Latihan</small>
                                              <h6 id="tipeText">-</h6>
                                          </div>
                                      </div>

                                  </div>

                              </div>
                          </div>
                          <div class="col-12">
                              <label class="form-label" for="validationTextarea">Description</label>
                              <textarea class="form-control" id="validationTextarea" placeholder="Enter your comment" required=""></textarea>
                              <div class="invalid-feedback">
                                  Please enter a message in the textarea.
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-check">
                                  <input class="form-check-input" id="invalidCheck" type="checkbox" value=""
                                      required="" /><label class="form-check-label" for="invalidCheck">Agree to
                                      terms and conditions</label>
                                  <div class="invalid-feedback">
                                      You must agree before submitting.
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <button class="btn btn-primary" type="submit">
                                  Submit form
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
