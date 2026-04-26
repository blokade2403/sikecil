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
                      <form method="POST" action="{{ route('users.store') }}"
                          class="row g-3 needs-validation custom-input" novalidate="">
                          @csrf
                          <div class="col-12">
                              <label class="form-label" for="validationCustom01">NIP</label>
                              <input class="form-control" id="validationCustom01" name="nip" type="text"
                                  required="" />
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-12">
                              <label class="col-sm-12 col-form-label" for="inputPassword1">Nama</label><input
                                  class="form-control" id="inputPassword1" name="nama" type="text"
                                  required="" />
                              <div class="invalid-feedback">
                                  Please enter your valid name
                              </div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label" for="validationCustom03">Username</label><input
                                  class="form-control" id="validationCustom03" name="username" type="text"
                                  required="" />
                              <div class="invalid-feedback">
                                  Please provide a valid username.
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label" for="validationCustom05">Email</label><input
                                  class="form-control" id="validationCustom05" name="email" type="email"
                                  required="" />
                              <div class="invalid-feedback">
                                  Please provide a valid email.
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label" for="validationCustom03">Password</label><input
                                  class="form-control" id="validationCustom03" name="password" type="password"
                                  required="" />
                              <div class="invalid-feedback">
                                  Please provide a valid password.
                              </div>
                              <div class="valid-feedback">Looks's Good!</div>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Jabatan</label>
                              <select name="position_id" class="form-select">
                                  <option value="">-- Pilih Jabatan --</option>
                                  @foreach ($positions as $position)
                                      <option value="{{ $position->id }}">{{ $position->nama_jabatan }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Unit</label>
                              <select name="unit_id" class="form-select">
                                  <option value="">-- Pilih Unit --</option>
                                  @foreach ($units as $unit)
                                      <option value="{{ $unit->id }}">{{ $unit->nama_unit }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Role</label>
                              <select name="roles[]" class="form-select" multiple required>
                                  @foreach ($roles as $role)
                                      <option value="{{ $role->id }}">
                                          {{ $role->nama_role }}
                                      </option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Status Edit</label>
                              <select name="status_edit" class="form-select">
                                  <option value="">-- Pilih Status --</option>
                                  <option value="aktif">Aktif</option>
                                  <option value="nonaktif">Non-Aktif</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label class="form-label">Status User</label>
                              <select name="status_user" class="form-select">
                                  <option value="">-- Pilih Status --</option>
                                  <option value="aktif">Aktif</option>
                                  <option value="nonaktif">Non-Aktif</option>
                              </select>
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
