  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myExtraLargeModal">
                      Detail APAR - {{ $apar->lokasi }} (QR: {{ $apar->kode_qr }})
                  </h4>
                  <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="card height-equal">
                  <div class="card-header">
                      <h5>Monitoring APAR</h5>
                      <p class="f-m-light mt-1">
                          Melalui aplikasi ini, setiap APAR dapat diperiksa dan dipantau secara berkala.
                      </p>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="" class="row g-3 needs-validation custom-input">
                          @csrf

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
