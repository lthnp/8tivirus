@extends('layouts.app')
@section('content')
    <p class="py-2"></p>
    <a href="{{ route('project.index') }}" class="btn btn-outline-secondary">Back</a>

    <pre><code class="language-php">{{ $list->detail->bs_code }}</code></pre>

    <div class="py-2">
        @if(empty($list->comment))
            <form action="{{ route('comment.store', $list->id) }}" method="post" onsubmit="return confirm('ยันยันความคิดเห็น')">
                @csrf
                <input type="number" name="project_id" value="{{ $list->id }}" hidden>
                <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
                @if($errors->has('message'))<p class="text-danger pt-3">{{ $errors->first('message') }}</p>@endif
                <button type="submit" class="btn btn-warning">Comment</button>
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
                <button id="react-design" type="submit" class="btn btn-outline-danger">design</button>
                <button id="react-code" type="submit" class="btn btn-outline-danger">code</button>
                <button id="react-both" type="submit" class="btn btn-outline-danger">both</button>
                <button id="react-so" type="submit" class="btn btn-outline-danger">so so</button>
            @else
                <input type="number" name="react" value="{{ $list->reaction->react }}" onchange="reactSubmit()" hidden>
                <button id="react-design" type="submit" class="btn btn-{{ $list->reaction->react == 1 ? '' : 'outline-'}}danger">design</button>
                <button id="react-code" type="submit" class="btn btn-{{ $list->reaction->react == 2 ? '' : 'outline-'}}danger">code</button>
                <button id="react-both" type="submit" class="btn btn-{{ $list->reaction->react == 3 ? '' : 'outline-'}}danger">both</button>
                <button id="react-so" type="submit" class="btn btn-{{ $list->reaction->react == 4 ? '' : 'outline-'}}danger">so so</button>
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
