@extends('layouts.main')
@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Kategoriýalar</h1>
            <section class="featured-posts-section">
                <ul>
                    @foreach($categories as $category)
                        <li>{{ $category->title }}</li>
                    @endforeach
                </ul>
            </section>
        </div>

    </main>

@endsection
