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
                      <form method="POST" action="{{ route('units.store') }}"
                          class="row g-3 needs-validation custom-input" novalidate="">
                          @csrf
                          <div class="col-12">
                              <label class="form-label" for="validationCustom01">Nama Unit</label>
                              <input class="form-control" id="validationCustom01" name="nama_unit" type="text"
                                  required="" />
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
