<section>
    <a href="{{ route('genre.index') }}">Back</a>
    <form action="{{ route('genre.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Create genre</label>
       <select name="genre" id="">
        <option value="homme">homme</option>
        <option value="femme">femme</option>
        <option value="autre">autre</option>
       </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>