  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myExtraLargeModal">
                      HiraDC
                  </h4>
                  <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="card height-equal">
                  <div class="card-header">
                      <h5>Form Input HiraDC</h5>
                      <p class="f-m-light mt-1">
                          HIRADC adalah singkatan dari Hazard Identification Risk Assessment and Determining Control
                          yang bisa diartikan sebagai cara untuk menilai resiko dari suatu pekerjaan di suatu
                          perusahaan, sehingga dapat memperoleh perkiraan prioritas kegiatan mana yang mesti lebih dulu
                          dikendalikan bahayanya..
                      </p>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="{{ route('health.store') }}"
                          class="row g-3 needs-validation custom-input">
                          @csrf
                          <div class="col-12">
                              <label class="form-label" for="validationCustom01">Unit</label>
                              <select name="unit_id" class="form-control">
                                  @foreach ($units as $unit)
                                      <option value="{{ $unit->id }}">{{ $unit->nama_unit }}</option>
                                  @endforeach
                              </select>
                              <div class="invalid-feedback">
                                  Please enter your valid
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-12">
                              <label class="form-label" for="validationTextarea">Aktivitas Kegiatan</label>
                              <textarea class="form-control" id="validationTextarea" name="aktivitas" placeholder="Enter your comment" required=""></textarea>
                              <div class="invalid-feedback">
                                  Please enter a message in the textarea.
                              </div>
                          </div>
                          <div class="col-12">
                              <label class="form-label" for="validationTextarea">Rincian Bahaya</label>
                              <textarea class="form-control" id="validationTextarea" name="bahaya" placeholder="Enter your comment" required=""></textarea>
                              <div class="invalid-feedback">
                                  Please enter a message in the textarea.
                              </div>
                          </div>
                          <div class="col-12">
                              <label class="form-label" for="validationTextarea">Pengendalian Resiko</label>
                              <textarea class="form-control" id="validationTextarea" name="pengendalian" placeholder="Enter your comment"
                                  required=""></textarea>
                              <div class="invalid-feedback">
                                  Please enter a message in the textarea.
                              </div>
                          </div>
                          <div class="col-12">
                              <label class="form-label" for="validationCustom01">Kemungkinan</label>
                              <select name="kemungkinan" class="form-control">
                                  <option value="">Select Kemungkinan</option>
                                  <option value="Hampir tidak terjadi">Hampir tidak terjadi</option>
                                  <option value="Jarang terjadi">Jarang terjadi</option>
                                  <option value="Kadang terjadi">Kadang terjadi</option>
                                  <option value="Sering terjadi">Sering terjadi</option>
                                  <option value="Hampir pasti terjadi">Hampir pasti terjadi</option>
                              </select>
                              <div class="invalid-feedback">
                                  Please enter your valid
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-12">
                              <label class="form-label" for="validationCustom01">Keparahan</label>
                              <select name="keparahan" class="form-control">
                                  <option value="">Select Keparahan</option>
                                  <option value="Tidak Signifikan">Tidak Signifikan</option>
                                  <option value="Ringan">Ringan</option>
                                  <option value="Sedang">Sedang</option>
                                  <option value="Berat">Berat</option>
                                  <option value="Sangat Berat">Sangat Berat</option>
                              </select>
                              <div class="invalid-feedback">
                                  Please enter your valid
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
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
