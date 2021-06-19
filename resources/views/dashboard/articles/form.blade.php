<div class="row">

    {{-- title field --}}
    <div class="col-md-6">
        <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
            {!! Form::label('title', 'العنوان :', ['class'=>'form-label']) !!}
            {!! Form::text('title', old('title'), ['class'=>'form-control',"placeholder"=>"عنوان المقال"]) !!}

            @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{$errors->first('title')}}</strong>
            </span>
            @endif
        </div>
    </div>
  
    {{-- summary field --}}
    <div class="col-md-6">
        <div class="form-group {{$errors->has('summary') ? 'has-error' : ''}}">
            {!! Form::label('summary', ' الملخص :', ['class'=>'form-label']) !!}
            {!! Form::text('summary', old('summary'), ['class'=>'form-control',"placeholder"=>"ملخص المقال"]) !!}

            @if ($errors->has('summary'))
            <span class="help-block">
                <strong>{{$errors->first('summary')}}</strong>
            </span>
            @endif
        </div>
    </div>
    {{-- content field --}}
    <div class="col-md-12">
        <div class="form-group {{$errors->has('content') ? 'has-error' : ''}}">
            {!! Form::label('content', ' المقال :', ['class'=>'form-label']) !!}
            {!! Form::textarea('content', old('content') , ['class'=>'form-control',"placeholder"=>"المقال","name"=>'content']) !!}

            @if ($errors->has('content'))
            <span class="help-block">
                <strong>{{$errors->first('content')}}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

{{-- published field --}}
<div class="row">
    <div class="col-md-4">
        <div class="form-group {{$errors->has('published') ? 'has-error' : ''}}">

            {!! Form::label('published', 'حالة المقال :', ['class'=>'form-label']) !!}
            {!! Form::select('published', status() , null , ['class'=>'form-control status','style'=>'padding:0 12px']) !!}

            @if ($errors->has('published'))
            <span class="help-block">
                <strong>{{$errors->first('published')}}</strong>
            </span>
            @endif
        </div>
    </div>
    {{-- image field --}}
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
        
                    {!! Form::label('image', ' صورة المقال :', ['class'=>'form-label']) !!}
                    {!! Form::file("image", ['class'=>'form-control avatar']) !!}
        
                    @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{$errors->first('image')}}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class='text-right'>
                    @if (isset($article))
                        <img src="{{ image_path($article->image) }}" alt="post icon" srcset="" class="img-thumbnail image-preview"
                    @else
                        <img src="{{ \Storage::url('images/articles/default.png') }}" alt="article icon" srcset="" class="img-thumbnail image-preview"
                    @endif
                    style="width:105px;height:105px;margin-top:16px"
                    >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-2">
        <div class="form-group">
            <button class="btn btn-warning btn-block"> حفظ <i class="fa fa-floppy-o float"></i></button>
        </div>
    </div>
</div>


@push('css')

    <style>

        .btn{
            position:relative;
            font-size: 16px
        }

        .btn i.float{
         margin-right: 10px
        }

        .select2-container--default
            .select2-selection--multiple
            .select2-selection__choice {
            background-color: #00c0ef !important;
            border: 1px solid #00c0ef !important;
        }

        .select2-container--default
            .select2-selection--multiple
            .select2-selection__choice__remove {
            color: #fff !important;
        }

        .select2-container--default
            .select2-selection--multiple
            .select2-selection__clear {
            margin-left: 10px;
            color: red;
        }

        /* ckeditor error */
        .has-error #cke_content{
            border:1px solid #dd4b39;
            padding:2px;
        }
    </style>

@endpush

@push('js')

    <!-- CkEditor - text editor -->
    {!! Html::script('adminlte/bower_components/ckeditor/ckeditor.js') !!}
    
    <script>
        $(function(){

            // ckeditor
            CKEDITOR.replace( 'content' ,{
                language: 'ar'
            });
        
            // select2
            $('.status').select2({
                placeholder: "حالة المقال",
                allowClear: true,
                language: "ar",
                dir:'rtl'
            });

            $('.cats').select2({
                placeholder: "صنف المقال",
                allowClear: true,
                language: "ar",
                dir:'rtl',
                maximumSelectionLength: 3,
            })

            // preview image when the file is changed
            $(".avatar").on("change", function() {
                if (this.files && this.files[0]) {
                    var $reader = new FileReader();
                    $reader.onload = function($e) {
                        $('.image-preview').attr("src", $e.target.result);
                    };
                }
                $reader.readAsDataURL(this.files[0]);
            });
    })

    </script>
@endpush