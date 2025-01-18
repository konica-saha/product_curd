@extends('products.layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h1 class="text-center">Add New Product</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter product name" required>
                    <div class="invalid-feedback">
                        Product name is required.
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="4" placeholder="Enter product description"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" id="price" name="price" class="form-control" step="0.01" placeholder="Enter price" required>
                    <div class="invalid-feedback">
                        Price is required.
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="primary_image" class="form-label">Primary Image</label>
                    <input type="file" id="primary_image" name="primary_image" class="form-control" accept="image/*" required>
                    <div class="invalid-feedback">
                        Primary image is required.
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="additional_images" class="form-label">Additional Images</label>
                    <input type="file" id="additional_images" name="additional_images[]" class="form-control" accept="image/*" multiple>
                    <div id="image-preview-container"></div> 
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg w-100">Save Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        
        $('#additional_images').on('change', function() {
            var files = this.files; 
            var previewContainer = $('#image-preview-container');
            previewContainer.empty(); 

            
            $.each(files, function(index, file) {
                var reader = new FileReader();

       
                reader.onload = function(e) {
                    var img = $('<img />', {
                        src: e.target.result,
                        class: 'img-thumbnail m-2',
                        width: '100', 
                        height: '100' 
                    });
                    previewContainer.append(img); 
                };

                reader.readAsDataURL(file); 
            });
        });
    });
</script>
@endsection

