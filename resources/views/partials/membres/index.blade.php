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
            @if ($m->genre->genre == "femme")
            <th scope="row"><img src="{{ asset('storage/'.$m->img) }}" width="100px" style="border:2px solid blue" alt=""></th>
            @else
            <th scope="row"><img src="{{ asset('storage/'.$m->img) }}" width="100px" style="border:2px solid red" alt=""></th> 
            @endif
            
            <th scope="row">{{ $m->age  }}</th>
            <td> {{ $m->genre->genre }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</section>