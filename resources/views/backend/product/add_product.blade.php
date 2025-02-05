@extends('layouts.admin_dashboard')
<style>
  .form-control, .form-control:focus {
    color: #6E6B7B;
    background-color: #283045 !important;
}
button, input, optgroup, select, textarea {
    margin: 0;
    padding: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    color: #ea5455;
    background-color: #283046 !important;
    width: 100% !important;
    /* height: 100% !important; */
}
.bootstrap-tagsinput {
    background-color: #283046 !important;
    border: 1px solid #ccc;
    /* height: 100%; */
    width: 100%;
}
.bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: white;
    background-color: #5bc0f2;
    border-radius: 5% !important;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">


@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    {{-- <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">SHopMama</a>
      <span class="breadcrumb-item active">Add Product</span>
    </nav> --}}
    <div class="sl-pagebody " >
        <div class="card pd-20 pd-sm-40">
          <h4 class="card-body-title mx-3">Add product</h4>
          <form action="{{route('store-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row row-sm my-2 mx-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Select Brand: <span class="tx-danger">*</span></label>
                        <select class="form-control select2-show-search" data-placeholder="Select One" name="brand_id">
                          <option label="Choose one"></option>
                         @foreach ($brands as $brand)
                         <option value="" selected="" disabled="">Select Brand</option>
                           <option value="{{ $brand->id }}">{{ ucwords($brand->brand_name_en) }}</option> --}}
                           @endforeach 
                        </select>
                        @error('brand_id')
                        <strong class="text-danger">{{ $message }}</strong>	
                         @enderror
                      </div>

                </div>
                 
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Select Category: <span class="tx-danger">*</span></label>
                        <select class="form-control select2-show-search" data-placeholder="Select One" name="category_id">
                          <option label="Choose one"></option>
                           @foreach ($categories as $cat) 
                           <option value="" selected="" disabled="">Select Category</option>
                           <option value="{{ $cat->id }}">{{ ucwords($cat->category_name_en) }}</option> --}}
                           @endforeach 
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Select Sub-Category: <span class="tx-danger">*</span></label>
                        <select class="form-control select2-show-search" data-placeholder="Select One" name="subcategory_id">
                          <option label="Choose one"></option>
                          @foreach ($subcats as $subcat)
                          <option value="" selected="" disabled="">Select SubCategory</option>
                          <option value="{{ $subcat->id }}">{{ ucwords($subcat->subcategory_name_en) }}</option>
                          @endforeach
                        </select>
                        @error('subcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                </div>

                {{-- <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Select Sub-SubCategory: <span class="tx-danger">*</span></label>
                        <select class="form-control select2-show-search" data-placeholder="Select One" name="subsubcategory_id">
                          {{-- <option label="Choose one"></option>
                          @foreach ($categories as $cat)
                          <option value="{{ $cat->id }}">{{ ucwords($cat->category_name_en) }}</option>
                          @endforeach --}}
                        {{-- </select>
                        @error('subsubcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                </div> --}} 

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Name English: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_name_en" value="{{ old('product_name_en') }}" placeholder="Enter Product Name English">
                    @error('product_name_en')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Name Bangla: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_name_bn" value="{{ old('product_name_bn') }}" placeholder="Product Name Bangla">
                    @error('product_name_bn')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_code" value="{{ old('product_code') }}" placeholder="Enter Product Code">
                    @error('product_code')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_qty" value="{{ old('product_qty') }}" placeholder="Enter Product Quantity">
                    @error('product_qty')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Tags English: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_tags_en" value="{{ old('product_tags_en') }}" placeholder="Product Tags English" data-role="tagsinput" >
                    @error('product_tags_en')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Tags Bangla: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_tags_bn" value="{{ old('product_tags_bn') }}" placeholder="product tags bangla"data-role="tagsinput"  >
                    @error('product_tags_bn')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Size English: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_size_en" value="{{ old('product_size_en') }}" placeholder="Product Size English" data-role="tagsinput">
                    @error('product_size_en')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Size Bangla: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_size_bn" value="{{ old('product_size_bn') }}" placeholder="Product Size Bangla" data-role="tagsinput">
                    @error('product_size_bn')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Color English: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_color_en" value="{{ old('product_color_en') }}" placeholder="Product Color Rnglish" data-role="tagsinput">
                    @error('product_color_en')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Product Color Bangla: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_color_bn" value="{{ old('product_color_bn') }}" placeholder="Enter Product Color Bangla" data-role="tagsinput">
                    @error('product_color_bn')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="selling_price" value="{{ old('selling_price') }}" placeholder="Selling Price">
                    @error('selling_price')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="discount_price" value="{{ old('discount_price') }}" placeholder="Discount Price">
                    @error('discount_price')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Main Thambnail: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="file" name="product_thambnail" value="{{ old('product_thambnail') }}" onchange="mainThambUrl(this)">
                    @error('product_thambnail')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <img src="" id="mainThmb">
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label class="form-control-label">Multiple_image: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="file" name="multi_img[]" value="{{ old('multi_img') }}" multiple id="multiImg">
                    @error('multi_img')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
                  <div class="row" id="preview_img" >
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label">Short Description English: <span class="tx-danger">*</span></label>
                    {{-- <textarea name="short_descp_en" ></textarea> --}}
                    <textarea name="short_descp_en"></textarea>
                    @error('short_descp_en')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label">Short Description Bangla: <span class="tx-danger">*</span></label>
                    <textarea name="short_descp_bn" id="summernote2"></textarea>
                    @error('short_descp_bn')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label">Long Description English: <span class="tx-danger">*</span></label>
                    <textarea name="long_descp_en" id="summernote3"></textarea>
                    @error('long_descp_en')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label class="form-control-label">Long Description Bangla: <span class="tx-danger">*</span></label>
                    <textarea name="long_descp_bn" id="summernote4"></textarea>
                    @error('long_descp_bn')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div>
              </div>

              <div class="col-md-4">
              <label class="ckbox">
                <input type="checkbox" name="hot_deals" value="1"><span>Hot Deals</span>
              </label>
              </div>

              <div class="col-md-4">
                <label class="ckbox">
                  <input type="checkbox" name="featured" value="1"><span>Featured</span>
                </label>
                </div>

                <div class="col-md-4">
                    <label class="ckbox">
                      <input type="checkbox" name="special_offer" value="1"><span>special_offer</span>
                    </label>
                </div>

                <div class="col-md-4">
                    <label class="ckbox">
                      <input type="checkbox" name="special_deals" value="1"><span>special_deals</span>
                    </label>
                </div>

              <div class="form-layout-footer mt-3">
              <button class="btn btn-info mg-r-5" type="submit" style="cursor: pointer;">Add Products</button>
            </div><!-- form-layout-footer -->
        </form>
        </div>
        </div><!-- row -->

</div>
   <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script> 
  
    <script>
     CKEDITOR.replace( 'short_descp_en' );
    
</script>
<script>
  CKEDITOR.replace( 'short_descp_bn' );
 
</script>
<script>
  CKEDITOR.replace( 'long_descp_en' );
 
</script>
<script>
  CKEDITOR.replace( 'long_descp_bn' );
 
</script>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>

<script src="{{asset('backend')}}/lib/jquery-2.2.4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="category_id"]').on('change', function(){
        var category_id = $(this).val();
        if(category_id) {
            $.ajax({
                url: "{{  url('/admin/subcategory/ajax') }}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                  $('select[name="subsubcategory_id"]').html('');

                   var d =$('select[name="subcategory_id"]').empty();
                      $.each(data, function(key, value){

                          $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');

                      });

                },

            });
        } else {
            alert('danger');
        }

    });



    $('select[name="subcategory_id"]').on('change', function(){
        var subcategory_id = $(this).val();
        if(subcategory_id) {
            $.ajax({
                url: "{{  url('/admin/sub-subcategory/ajax') }}/"+subcategory_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                   var d =$('select[name="subsubcategory_id"]').empty();
                      $.each(data, function(key, value){

                          $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');

                      });

                },

            });
        } else {
            alert('danger');
        }

    });

});

</script>


<script>

$(document).ready(function(){
$('#multiImg').on('change', function(){ //on file input change
  if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
  {
      var data = $(this)[0].files; //this file data

      $.each(data, function(index, file){ //loop though each file
          if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
              var fRead = new FileReader(); //new filereader
              fRead.onload = (function(file){ //trigger function on successful read
              return function(e) {
                  var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
              .height(80); //create image element
                  $('#preview_img').append(img); //append image to output element
              };
              })(file);
              fRead.readAsDataURL(file); //URL representing the file's data.
          }
      });

  }else{
      alert("Your browser doesn't support File API!"); //if File API is absent
  }
});
});

</script>

<script>
function mainThambUrl(input){
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e){
        $('#mainThmb').attr('src',e.target.result).width(80)
              .height(80);
    };
    reader.readAsDataURL(input.files[0]);


  }
}
</script>

@endsection