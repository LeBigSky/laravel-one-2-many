<section>
    <a href="{{ route('home') }}">home</a>
    <div class="container">
         <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">image</th>
            <th scope="col">age</th>
            <th scope="col">genre</th>
            <th scope="col">download</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($membres as $m )
          <tr>
            <th scope="row">{{ $m->id  }}</th>
            <th scope="row">{{ $m->nom  }}</th>
            @if ($m->genre->genre == "femme")
            <th scope="row"><img src="{{ asset('storage/'.$m->img) }}" width="100px" style="border:2px solid blue" alt=""></th>
            @elseif ($m->genre->genre =='homme')
            <th scope="row"><img src="{{ asset('storage/'.$m->img) }}" width="100px" style="border:2px solid red" alt=""></th>
            @else
            <th scope="row"><img src="{{ asset('storage/'.$m->img) }}" class="rounded" alt=""></th>
            @endif
            <th scope="row">{{ $m->age  }}</th>
            <td> {{ $m->genre->genre }}</td>
            <td><a href="download/{{ $m->img }}" class="btn btn-primary">DL Image</a></td>
                <form action="membre/{{ $m->id }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger">Delete</button></a></td>
                    </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   
</section>