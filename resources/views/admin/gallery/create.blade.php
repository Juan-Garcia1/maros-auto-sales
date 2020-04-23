@extends('layouts.admin')

@section('css-styles')
    <style>
        .img-gallery-container {
            position: relative;
        }
        .delete-img-form {
            position: absolute;
            top: -5px;
            right: -4px;
        }
        .delete-img-btn {
            width: 25px;
            height: 25px;
            border: 0;
            border-radius: 50%;
            background-color: #666;
            font-size: 14px;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .delete-img-btn:hover {
            background-color: red;
        }
    </style>    
@endsection

@section('header-title', 'Add Gallery')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-1">
                    <img src="{{ asset('storage/uploads/'.$vehicle->image) }}" alt="{{ $vehicle->make->name . ' ' . $vehicle->model }}" class="img-fluid">
                </div>
                <!-- /.col-3 -->
                <div class="col-11 d-flex align-items-center">
                    <p class="m-0"><strong>{{ $vehicle->make->name . ' ' . $vehicle->model }}<strong></p>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <form class="mb-3" action="{{ route("gallery.store", [$vehicle->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="model_id" value={{ $vehicle->id }}>
        <input type="file" name="image[]" id="js-gallery-img" accept="image/jpeg" multiple>
        <input class="btn btn-primary" id="js-img-upload-btn" type="submit" value="Upload" disabled>
    </form>

    @if(count($galleries) > 0)
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-md-2 img-gallery-container">
                        <img class="img-fluid" src="{{ asset('storage/uploads/gallery/'.str_replace('"', '', $gallery->image)) }}" alt="">
                        <form class="delete-img-form" action="{{ route('gallery.destroy', [$vehicle->id, $gallery->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{ $gallery->id }}">
                            <button class="delete-img-btn" type="submit"><i class="fa fa-times"></i></button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>    
    @else

    @endif
    
@endsection

@section('scripts')
    <script>
        const galleryImg = document.querySelector('#js-gallery-img');
        let imageUploadBtn = document.querySelector('#js-img-upload-btn');
        (function() {
            galleryImg.addEventListener('change', function(e) {
                if(!e.target.value) {
                    imageUploadBtn.disabled = true;
                } else {
                    imageUploadBtn.disabled = false;
                }
            })
        })();
    </script>
@endsection