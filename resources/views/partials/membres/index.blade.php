<section>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">image</th>
            <th scope="col">age</th>
            <th scope="col">genre</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($membres as $m )
          <tr>
            <th scope="row">{{ $m->id  }}</th>
            <th scope="row">{{ $m->nom  }}</th>
            <th scope="row">{{ $m->img  }}</th>
            <th scope="row">{{ $m->age  }}</th>
            <td> {{ $m->genre->genre }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</section>