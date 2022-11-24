<section>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">genre</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($genres as $genre )
          <tr>
            <th scope="row">{{ $genre->id  }}</th>
            <td> {{ $genre->genre }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</section>