<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" crossorigin="anonymous" />
</head>
<body>
<div class="container">

    <div>
        @if(session()->has('success'))

            @if(count(session()->get('success')))
                <div class="alert alert-success mt-2">
                    Import สำเร็จ
                    <ul>
                        @foreach(session()->get('success') as $key=>$msg)
                            <li>row {{ $key+2 }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif
        @endif

        @if(session()->has('fail'))
            @if(count(session()->get('fail')))

                <div class="alert alert-danger mt-2">
                    เพิ่มรายการดังกล่าวไม่สำเร็จ ไม่พบ SNP Code หรือมีข้อมูลในระบบแล้ว

                    <ul>
                        @foreach(session()->get('fail') as $key=>$msg)
                            <li>row {{ $key+2 }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif
        @endif
        <div class="card my-4">
            <div class="card-header">Import </div>
            <div class="card-body">
                @if(count($lists))
                    <h2>{{ $filename }}</h2>
                    <form action="{{ route('import.submit') }}" method="POST"class="mt-4">
                        @csrf
                        <input type="hidden" name="lists" value="{{ json_encode($lists) }}">
                        <input type="hidden" name="type" value="{{ $type }}">
                        <table class="table mt-3 table-strip table-responsive">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Nickname</th>
                                <th>Name TH</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lists as $key=>$list)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $list['code'] }}</td>
                                    <td>{{ $list['nickname'] }}</td>
                                    <td>{{ $list['name_th'] }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <div class="mt-2 text-center">
                            <hr>
                            <button class="btn btn-primary " type="submit">Push</button>
                            <a class="btn btn-secondary" href="{{ route('import') }}">Cancel</a>
                        </div>
                    </form>
                @else
                    <form action="{{ route('import.select') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>type</h5>
                        <select name="type" class="form-control mt-3 @error('type') is-invalid @enderror">
                            <option value="">-- select --</option>
                            <option value="project">project</option>
                            <option value="project detail">project detail</option>
                            <option value="project tech">project tech</option>
                            <option value="persona">persona</option>
                            <option value="screenshot">screenshot</option>
                            <option value="student">student</option>
                        </select>
                        <h5 class="mt-3">file</h5>
                        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                        <br>
                        <button class="btn btn-primary">Import file</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script>
    $('select[name=type]').change(function (){
        let url = new URL(window.location.href);
        let params = url.searchParams;

        let val = $(this).val()
        let type = params.get('type')

        if(val && type != val){
            if(type){
                params.set('type', val)
            } else {
                params.append('type', val)
            }
        } else {
            params.delete('type')
        }
        url.search = params.toString()
        window.location.href = url.toString()
    })

    $(document).ready(function () {
        let url = new URL(window.location.href);
        let params = url.searchParams;
        let type = params.get('type')

        $('select[name=type]').val(type)
    })
</script>
</body>
</html>
