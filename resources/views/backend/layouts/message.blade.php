@if (Session::has('success'))
    <div class="alert alert-success">
        <b>Success :</b> {{Session::get('success')}}
    </div>

@elseif (Session::has('delete'))
    <div class="alert alert-info">
        <b>Info :</b> {{Session::get('delete')}}
    </div>

@elseif( count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif