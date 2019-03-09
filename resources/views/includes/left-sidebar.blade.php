<div class="col-2 left-sidebar">
    <!-- SIDEBAR MENU -->
	<div class="sidebar-menu">
		<ul>
			<li class="active">
				<a class="forum-home" href="{{ route('forum.index') }}"> Feed </a>
			</li>
			<li>
				<a class="forum-topic-heading" href="{{ route('forum.index') }}">All Topics </a>
			</li>
			@foreach($tags as $tag)
            <li><a class="forum-topic" href="{{ route('forum.showPostByTags',[$tag->id]) }}">{{$tag->description}}</a></li>
            @endforeach
		</ul>
	</div>
<!-- END MENU -->
</div>
