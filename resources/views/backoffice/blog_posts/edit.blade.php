@extends('layouts.main')

@section('content')
<div class="container-fluid">
  <form action="{{ route('backoffice.blog_posts.update', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="card mb-4">
      <div class="card-header"><h5>Modifier l’article</h5></div>
      <div class="card-body">

        @include('backoffice.blog_posts._form', ['post' => $post])

      </div>
    </div>

    <div class="text-end">
      <a href="{{ route('backoffice.blog_posts.index') }}" class="btn btn-secondary">Annuler</a>
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>
  </form>
</div>
@endsection
