@extends('layouts.app')

@section('content')
    <div class="row mx-5">
        <div class="col-md-6 p-5">
            {!!$result->about_headline!!}
            {!!$result->about_us_paragraph!!}
            <div>
                <span>Phone:</span><br/>

                <a href="tel:{{$result->phone}}">
                    {{$result->phone}}
                </a>
                <br/>
            </div>
           
            <div>
                <span>Location:</span><br/>
            
                {!!$result->location!!}
            </div>
        </div>
        <div class="col-md-6 p-5">
            <div>
                <img class="img-fluid" src="/tjs-glass/public{{$result->about_image->path}}" alt="Flamingo">
            </div>
        </div>
    </div>
    


@endsection