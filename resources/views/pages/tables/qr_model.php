<div class="modal fade" id="table_qr_model" tabindex="-1" aria-labelledby="bs-example-modal-lg" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myLargeModalLabel">
                                QR
                              </h4>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body m-auto">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example" style="width: 250px; height:250px;" >
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
                                Close
                              </button>

                                <a target="_blank" id="qr_download" download="qrcode.png" class="btn bg-success text-white  waves-effect text-start">
                                  Download
                                </a>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
</div>