@extends('frontoffice.layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="ps-blog ps-blog--masonry">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('frontoffice.home') }}">Accueil</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Blog</li>
            </ul>
            <h1 class="ps-blog__title">Nos articles</h1>
            <div class="ps-blog__content">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="ps-blog--latset">
                                <div class="ps-blog__thumbnail">
                                    <a href="{{ route('frontoffice.blog.show', $post->slug) }}">
                                        <img src="{{ $post->getFirstMediaUrl('cover', 'thumb') ?: asset('img/blog/default.jpg') }}"
                                            alt="{{ $post->title }}">
                                    </a>
                                    @if ($post->tags && $post->tags->count())
                                        <div class="ps-blog__badge">
                                            @foreach ($post->tags as $tag)
                                                <span class="ps-badge__item">{{ strtoupper($tag->name) }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="ps-blog__content">
                                    <div class="ps-blog__meta">
                                        <span class="ps-blog__date">
                                            {{ $post->published_at ? $post->published_at->format('d M Y') : 'Non publié' }}
                                        </span>
                                        <a class="ps-blog__author" href="#">Admin</a>
                                    </div>
                                    <a class="ps-blog__title" href="{{ route('frontoffice.blog.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                    <p class="ps-blog__desc">
                                        {{ Str::limit(strip_tags($post->excerpt), 150) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Load more button (custom frontend, no Laravel pagination) --}}
                @if ($posts->hasMorePages())
                    <div class="ps-blog__button">
                        <a class="ps-btn ps-btn--primary" href="{{ $posts->nextPageUrl() }}">Charger plus</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
