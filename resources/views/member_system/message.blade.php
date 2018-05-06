@if(count($errors))
    <div class="alert alert-danger">
        <ul>
            {{--                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach--}}
            <li>{{$errors->first()}}</li>
        </ul>
    </div>
@endif


<!-- 成功提示框 -->
@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>成功!</strong> {{Session::get('success')}}
    </div>
@endif

<!-- 失败提示框 -->
@if(\Illuminate\Support\Facades\Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>失败!</strong> {{Session::get('error')}}
    </div>
@endif
