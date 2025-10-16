@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">
                                <div class="admin-content-main-content-left">
                                    <div class="admin-content-main-content-input-two">
                                        <input type="text" value="{{old('name')}}" name="name" placeholder="Ten San pham">
                                        <input type="text" value="{{old('masanpham')}}" name="masanpham" placeholder="Ma San pham">
                                    </div>
                                    <div class="admin-content-main-content-input-two">
                                        <input type="text" value="{{old('price_normal')}}" name="price_normal" placeholder="Gia ban">
                                        <input type="text" value="{{old('price_sale')}}" name="price_sale" placeholder="Gia giam">
                                    </div>
                                    <laber for="">Thông tin sản phẩm <span style="color: red;  ">* </span></laber>
                                    <textarea required value="{{old('description')}}" name="description" id=""  ></textarea>
                                    <laber for="">Mô tả sản phẩm <span style="color: red;  ">* </span></laber>
                                    <textarea required name="content">{{ old('content') }}</textarea>
                                    <button type="submit" class="main-btn">Them San Pham</button>
                                </div>
                                <div class="admin-content-main-content-right">
                                    <div class="admin-content-main-content-right-img">
                                        <label for="file">Ảnh Sản Phẩm</label>
                                        <input id="file" type="file">
                                        <input type="hidden" name="image" id="input-file-img-hiden">
                                        <div class="image-show" id="input-file-img">
                                            
                                        </div>
                                    </div>
                                    <div class="admin-content-main-content-right-imgs">
                                        <label for="files">Anh Mô Tả</label>
                                        <input type="file" id="files" name="files[]" multiple accept="image/*">
                                        <input type="hidden" name="images[]" id="images-hidden">
                                        <div class="images-show" id="input-file-imgs">
                                            
                                        </div>
                                    </div>
                                </div>
 </div>
 @csrf
</form>                      
@endsection
@section('scripts')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#file").on('change',()=>{
    var formData = new FormData();
    var file = $("#file")[0].files[0]
    formData.append('file',file)
    $.ajax({
        url: '/upload',
        processData: false,//illegal invocation
        dataType: 'json',
        data: formData,
        method: 'POST',
        contentType: false,// khong hien o preview
        success: function(result){
            if(result.success == true){
                html = "";
                html += '<img src="'+result.path+'" alt="">';
                $('#input-file-img').html(html)
                $('#input-file-img-hiden').val(result.path)
            }
        }
    })
})
</script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Upload nhiều ảnh mô tả
$('#files').on('change', function() {
    let formData = new FormData();
    let files = $('#files')[0].files;

    for (let i = 0; i < files.length; i++) {
        formData.append('files[]', files[i]);
    }

    $.ajax({
        url: '/uploads',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        success: function(result) {
            if (result.success === true) {
                let html = '';
                // Hiển thị ảnh preview và thêm input hidden
                for (let i = 0; i < result.paths.length; i++) {
                    html += `
                        <div class="image-preview">
                            <img src="${result.paths[i]}" alt="Ảnh mô tả">
                            <input type="hidden" name="product_images[]" value="${result.paths[i]}">
                        </div>
                    `;
                }
                $('#input-file-imgs').html(html);
            } else {
                console.error('Upload thất bại:', result.message);
            }
        },
        error: function(xhr) {
            console.error("Lỗi upload nhiều ảnh:", xhr.responseText);
        }
    });
});
</script>

@endsection
