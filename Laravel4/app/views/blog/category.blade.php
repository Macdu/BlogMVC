@extends('layouts.blog')

@section('title')
{{{ $category->name }}}
@stop

@section('content')
	<div class="col-md-8">
		<div class="page-header">
			<h1>Blog</h1>
			<p class="lead">{{ $category->name }}</p>
		</div>

		@include('blog.posts')

		{{ $posts->links() }}
	</div>

	<div class="col-md-4 sidebar">
		@include('blog.sidebar')
	</div><!-- /.sidebar -->
@stop