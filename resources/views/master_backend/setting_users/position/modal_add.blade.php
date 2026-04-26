  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModal"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myExtraLargeModal">
                      Large Modal
                  </h4>
                  <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="card height-equal">
                  <div class="card-header">
                      <h5>Validation Form</h5>
                      <p class="f-m-light mt-1">
                          Custom feedback styles apply custom colors, borders, focus
                          styles, and background icons to better communicate
                          feedback.Background icons for <code>&lt;select&gt;</code>s
                          are only available with <code>form-select</code> and not
                          <code>form-control.</code>
                      </p>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="{{ route('positions.store') }}" class="row g-3 needs-validation"
                          novalidate>
                          @csrf

                          <!-- Nama Jabatan -->
                          <div class="col-md-6">
                              <label class="form-label">Nama Jabatan</label>
                              <input type="text" name="nama_jabatan" class="form-control" required>
                              <div class="invalid-feedback">
                                  Nama jabatan wajib diisi
                              </div>
                          </div>

                          <div class="col-md-6">
                              <label class="form-label">Unit</label>
                              <select name="unit_id" class="form-select">
                                  <option value="">-- Pilih Unit --</option>
                                  @foreach ($units as $u)
                                      <option value="{{ $u->id }}">{{ $u->nama_unit }}</option>
                                  @endforeach
                              </select>
                          </div>

                          <!-- Parent Jabatan -->
                          <div class="col-md-6">
                              <label class="form-label">Parent Jabatan</label>
                              <select name="parent_id" class="form-select">
                                  <option value="">-- Tidak Ada (Top Level) --</option>
                                  @foreach ($positions as $p)
                                      <option value="{{ $p->id }}">{{ $p->nama_jabatan }}</option>
                                  @endforeach
                              </select>
                          </div>

                          <!-- Submit -->
                          <div class="col-12">
                              <button class="btn btn-primary" type="submit">
                                  Simpan
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
