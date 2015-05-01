@foreach ($posts as $post)
    <post>
        <h2 href="#{{$post->id}}">
            {{$post->title}}
        </h2>
        <p>
           By {{$post->user->name}}
                {{$post->created_at->diffForHumans()}} -
                delete edit
        </p>
        <div id="{{$post->id}}"class="body">
            {!! nl2br($post->body) !!}
        </div>            
    </post>
@endforeach
