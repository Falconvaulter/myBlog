<ul class="post-list row">
@foreach ($posts as $post)

    <li onClick="ScrollTo('#{{$post->id}}')" class="row">
        {{Str::limit($post->title, 50)}}
    </li>

@endforeach
</ul>
<script>
function ScrollTo(id, height) {
    if (!height) {
        height = 75;
    }
    $('html,body').animate({
        scrollTop: $(id).offset().top - height
    }, 800);
};
</script>