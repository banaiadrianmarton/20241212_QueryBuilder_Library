<x-layout>
    <h1>Books</h1>
    <ul>
        <div class="row">
            @foreach ($books as $book)
                {{-- <li><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></li> --}}
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{$book->title}}</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Author: {{$book->author}}</li>
                              <li class="list-group-item">Published year: {{$book->published_year}}</li>
                              <li class="list-group-item">Price: {{$book->price}} HUF</li>
                            </ul>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="/books/{{$book->id}}">Details</a></div>
                      </div>
                </div>
            @endforeach
        </div>
    </ul>
</x-layout>
