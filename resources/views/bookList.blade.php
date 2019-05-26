@extends('layouts.main')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{$header}}</h1>
        <p class="lead text-muted">{{$message}}</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Каталогизатор</a>
            <a href="#" class="btn btn-secondary my-2">Список</a>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $book->title }}</text></svg>
                        <div class="card-body">
                            <p class="card-text">{!! $book->description !!}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                                    {{--<button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>--}}
                                </div>
                                <small class="text-muted">{{ $book->date_create }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
