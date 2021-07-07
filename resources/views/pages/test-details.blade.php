@extends('layouts.app')
@section('content')
    <p class="py-3"></p>
    <a href="{{ route('project.index') }}" class="btn btn-outline-secondary">Back</a>

    <div class="py-2">
        @if(empty($list->comment))
            <form action="{{ route('comment.store', $list->id) }}" method="post" onsubmit="return confirm('ยันยันความคิดเห็น')">
                @csrf
                <input type="number" name="project_id" value="{{ $list->id }}" hidden>
                <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                @if($errors->has('message'))<p class="text-danger pt-3">{{ $errors->first('message') }}</p>@endif
                <button type="submit" class="btn btn-primary">Comment</button>
            </form>
        @else
            <h2>Already Commented.</h2>
        @endif
    </div>

    <div class="py-2">
        <form action="{{ route('react.store', $list->id) }}" method="post" onsubmit="return reactSubmit()">
            @csrf
            <input type="number" name="project_id" value="{{ $list->id }}" hidden>
            @if(empty($list->reaction))
                <input type="number" name="react" value="0" onchange="reactSubmit()" hidden>
                <button id="react-design" type="submit" class="btn btn-outline-primary">design</button>
                <button id="react-code" type="submit" class="btn btn-outline-primary">code</button>
                <button id="react-both" type="submit" class="btn btn-outline-primary">both</button>
                <button id="react-so" type="submit" class="btn btn-outline-primary">so so</button>
            @else
                <input type="number" name="react" value="{{ $list->reaction->react }}" onchange="reactSubmit()" hidden>
                <button id="react-design" type="submit" class="btn btn-{{ $list->reaction->react == 1 ? '' : 'outline-'}}primary">design</button>
                <button id="react-code" type="submit" class="btn btn-{{ $list->reaction->react == 2 ? '' : 'outline-'}}primary">code</button>
                <button id="react-both" type="submit" class="btn btn-{{ $list->reaction->react == 3 ? '' : 'outline-'}}primary">both</button>
                <button id="react-so" type="submit" class="btn btn-{{ $list->reaction->react == 4 ? '' : 'outline-'}}primary">so so</button>
            @endif

        </form>
    </div>

    <script>
        $('#react-design').click(function (){
            $('input[name=react]').val(1)
        });
        $('#react-code').click(function (){
            $('input[name=react]').val(2)
        });
        $('#react-both').click(function (){
            $('input[name=react]').val(3)
        });
        $('#react-so').click(function (){
            $('input[name=react]').val(4)
        });

        function reactSubmit(){
            let react = $('input[name=react]').val()
            if(react >= 1 && react <= 4){
                return true;
            } else {
                return false;
            }
        }
    </script>
@endsection
