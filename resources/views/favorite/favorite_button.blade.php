@if (Auth::user()->is_favoriting($micropost->id))
    {!! Form::open(['route' => ['favorite.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorite.favorite', $micropost->id]]) !!}
        {!! Form::submit('favorite', ['class' => "btn btn-primary btn-xs"]) !!}
    {!! Form::close() !!}
@endif
