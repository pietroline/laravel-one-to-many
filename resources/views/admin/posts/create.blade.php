@extends ("admin.layouts.base")

@section("content")
    <div class="container">

            <h1>Crea un nuovo post</h1>

            <form methods="POST" action="{{route('admin.posts.store')}}">

                @csrf

                <div class="form-group">
                  <label for="title">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                  <label for="content">Contenuto del post</label>
                  <textarea class="form-control" name="content" id="content" rows="10"></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Salva</button>
              </form>

        </div>
        
    </div>
@endsection