<section>
    <a href="{{ route('membre.index') }}">Back</a>
    <form action="{{ route('membre.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nom</label>
            <input type="text" name="nom">
            <label for="exampleInputEmail1" class="form-label">image</label>
            <input type="file" name="img">
            <label for="exampleInputEmail1" class="form-label">age</label>
            <input type="number" name="age">
          <label for="exampleInputEmail1" class="form-label">genre</label>
       <select name="genre_id" id="">
        @foreach ($genres as $genre )
            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
        @endforeach
       </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>