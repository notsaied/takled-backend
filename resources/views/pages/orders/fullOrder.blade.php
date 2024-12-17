<div class="modal fade" id="sz_full_order" tabindex="-1" aria-labelledby="bs-example-modal-lg" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Order #<span class="orderID"0></span>
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <div id="order_details">
                    <!-- Product Details Section -->
                    <div class="mb-4" id="product_details">
                        <h4 class="font-weight-bold">Product Details:</h4>

                        <div class="d-flex align-items-center mt-3">
                            <!-- Product Image -->
                            <div class="product_image mr-3">
                                <img src="" alt="Product Image" class="img-fluid rounded" width="100"
                                    height="100">
                            </div>
                            <!-- Product Name and Quantity -->
                            <div class="ml-3 m-3">
                                <h6 class="product_name mb-1 mt-2">Product Name: <b></b></h6>
                                <h6 class="product_quantity mb-0 mt-2">Product Quantity: <b></b></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Details Section -->
                    <div class="mb-4" id="additional_details">
                        <h4 class="font-weight-bold">Additional Details:</h4>
                        <div class="content border p-3 rounded mt-3 bg-light">
                            <!-- Content goes here -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                    data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
