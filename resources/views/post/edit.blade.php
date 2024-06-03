@extends('layouts.app')
@section('content')
    <h2 class = "mt-10 mb-3">投稿を編集する</h2>
    <form method="POST" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('PUT')
        <div class = "form-group">
            @include('commons.error_messages')
            <textarea  id="content" name="contents" class = "form-control" rows="5">{{ old('contents',$post->text) }}</textarea>
        </div>
        <button type = "submit" class = "btn btn-success">更新する</button>
    </form>
@endsection
