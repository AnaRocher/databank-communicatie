<article class="post-small">
    <h1 class="post-small-title"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h1>
    <p class="post-small-subtitle"> {{ $post->subtitle }}</p>
    <div class="post-small-content">
        {{ substr($post->content, 0) }}
    </div>
    <footer>
        <a class="post-small-readmore" href="{{ route('posts.show', $post) }}">Read more &rarr;</a>
    </footer>
</article>
