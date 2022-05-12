@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">New Items </div>

                <div class="card-body">
                    
                    <form action="{{route('admin.items.store')}}" method="POST" enctype="multipart/form-data">

                            
                            
                            <div class="form-group row">
                                <label for="main_page" class="col-md-4 col-form-label text-md-right">Page</label>

                                <div class="col-md-6">
                                    <select class="form-control @error('main_page') is-invalid @enderror" name="main_page" required>
                                            <option></option>
                                        @foreach($menus as $menu)
                                            <option value="{{$menu->id}}-item">{{$menu->title}}</option>
                                        @endforeach
                                        @foreach($articles as $article)
                                            <option value="{{$article->id}}-sub_item">{{$article->title}}</option>
                                        @endforeach
                                    </select>
                                
                                    
                                    @error('main_page')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                                <div class="col-md-6">
                                    <select class="form-control @error('category') is-invalid @enderror" name="category" >
                                            <option></option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                
                                    
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                      
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="item_image_01">Upload Page Image</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="item_image"
                                    accept="image/jpg, image/png, image/jpeg"
                                    aria-describedby="item_image" >
                                    <label class="custom-file-label" for="item_image">Choose file</label>
                                </div>
                                @error('item_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> 

                            <div class="form-group row">
                                <label for="content" class="col-md-12 col-form-label text-md-left">Content</label>

                                <div class="col-md-12">
                                    <textarea rows="20" class="form-control @error('content') is-invalid @enderror" name="content"></textarea>
                                    
                                </div>

                                @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            @csrf
                            
                            <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    image_title: true, 
  // enable automatic uploads of images represented by blob or data URIs
  automatic_uploads: true,
  // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
  // images_upload_url: 'postAcceptor.php',
  // here we add custom filepicker only to Image dialog
  file_picker_types: 'image', 
  // and here's our custom image picker
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    
    // Note: In modern browsers input[type="file"] is functional without 
    // even adding it to the DOM, but that might not be the case in some older
    // or quirky browsers like IE, so you might want to add it to the DOM
    // just in case, and visually hide it. And do not forget do remove it
    // once you do not need it anymore.

    input.onchange = function() {
      var file = this.files[0];
      
      var reader = new FileReader();
      reader.onload = function () {
        // Note: Now we need to register the blob in TinyMCEs image blob
        // registry. In the next release this part hopefully won't be
        // necessary, as we are looking to handle it internally.
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        // call the callback and populate the Title field with the file name
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };
    
    input.click();
    }
  };

 
  tinymce.init(editor_config);
  </script>


@endsection
