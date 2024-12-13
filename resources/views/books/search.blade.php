<x-layout>
    <h1>Search new book</h1>
    <form method="POST" action="{{route('book.process.search')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
