@extends ("admin.layouts.base")

@section("content")
    <div class="container">

      <h1>Modifica post</h1>

      <form method="POST" action="{{route('admin.posts.update', $post->id)}}">

          @csrf
          @method("PUT")

          <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old("title", $post->title)}}">
          </div>

          <div class="form-group">
            <label for="content">Contenuto del post</label>
            <textarea class="form-control" name="content" id="content" rows="10">{{old("content", $post->content)}}</textarea>
          </div>
          
          
          <button type="submit" class="btn btn-primary">Salva</button>
        </form>

        </div>
        
    </div>
@endsection