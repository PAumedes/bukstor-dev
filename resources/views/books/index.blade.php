@extends('layouts.app')
@section('content')

    {{-- <div class="col-md-6">
        <form action="/books/search" method="get" class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" name="s" placeholder="Buscar">
            </div>
            <div class="form group">
                <buttton class="btn btn-primary" type="submit">Buscar</buttton>
            </div>
        </form>
    </div> --}}
    <div class="container">
        <form action="{{ route('books.search') }}" method="get">
            <div class="form-group">
                <input type="text" class="form-control" name="s" placeholder="Buscar" value="{{ isset($s) ? $s : ''}}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </form>
    </div>

    <div class="container card-container" >
        {{-- @dd($books); --}}
        @foreach($books as $book)
            <div class="card" style="width: 18rem;">
            <a data-toggle="modal" href="#myModal" id="acard" data-book-name="{{$book->name}}">
                <img class="card-img-top" src="/storage/books/{{$book->cover}}" alt="Card image cap" id="imgcard"  data-book-id="{{$book->id}}">
            </a>
            <div class="card-body">
                <a href="/books/{{$book->id}}"><h5 class="card-title">{{$book->name}}</h5></a>
                <p class="card-text">{{$book->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Género: <a href="/categories/{{$book->category_id}}">{{$book->categories->name}}</a></li>
                <li class="list-group-item">Autor: <a href="/authors/{{$book->author_id}}">{{$book->author->name}}</a></li>
                <li class="list-group-item">ISBN: {{$book->isbn}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Comprar</a>
                <a href="/books/{{$book->id}}/edit" class="card-link">Editar</a>
                <form action="/books/{{ $book->id }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-default" type="submit">Borrar</button>
                </form>
            </div>
            </div>
        @endforeach
    </div>
    {{$books->links()}}
@endsection

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <img src="" alt="" id="modalimg" style="width:100%;">
        </div>        
      </div>
      
    </div>
  </div> 
</div>



<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $("[data-book-name]").click(function()
        {
            var theTitle = $(this).attr('data-book-name')
            var theImg = $("#imgcard", this).attr('src')
            $("#modalimg").attr('src', theImg);
            $(".modal-title").text(theTitle);
            $("#myModal").modal();
        });
    });

</script>