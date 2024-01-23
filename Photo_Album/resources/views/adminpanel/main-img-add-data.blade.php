<!doctype html>
<html lang="en">
  <head>
    <title>Main Images Album Data Add</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .required label::after{
            content: " *";
            color: red;
        }
    </style>
  </head>
  <body class="bg-dark">
        <form action="{{ $url }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container mt-4 card p-3 bg-white">
                <h3 class="text-center text-primary">
                    {{ $tital }}
                </h3>
                <div class="row">
                    <div class="form-group col-md-3 required">
                        <label for="">Tital:</label>
                        @if ($tital == "Add Data")
                        <input type="text" name="mI_title" id="" class="form-control" value=""/>
                        @else
                        <input type="text" name="mI_title" id="" class="form-control" value="{{ $mialbum->mI_title }}"/>
                        @endif

                    </div>
                    <div class="form-group col-md-3 required">
                        <label for="">Reference Main Album Id:</label>
                        @if ($tital == "Add Data")
                            @if ($temp1 == "Refferance Id")
                            <select class="form-control" name="m_id">
                                <option>{{ $malbums->m_id }}</option>

                                <option id="{{ $malbums->m_id }}" value="{{ $malbums->m_id }}">{{ $malbums->m_title }}</option>

                            </select>
                            @else
                            <select class="form-control" name="m_id">
                                <option>Select Item</option>
                                @foreach ($malbums1 as $malbums)
                                <option id="{{ $malbums->m_id }}" value="{{ $malbums->m_id }}">{{ $malbums->m_title }}</option>
                                @endforeach
                            </select>
                            @endif
                        @else
                        <select class="form-control" name="m_id">
                            <option>{{ $mialbum->m_id }}</option>
                            @foreach ($malbums as $malbum)
                                <option id="{{ $malbum->m_id }}" value="{{ $malbum->m_id }}">{{ $malbum->m_title }}</option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                    <div class="form-group col-md-6 required">
                        <label for="">Link:</label>
                        @if ($tital == "Add Data")
                        <input type="file" name="mI_link" id="" class="form-control" value=""/>
                        @else
                        <input type="file" name="mI_link" id="" class="form-control" value="{{ $mialbum->mI_link }}"/>
                        @endif
                    </div>
                </div>
                <div class="form-group col-md-12 required">
                    <button type="submit" class="form-control btn btn-primary mb-12">Submit</button>
                </div>
            </div>
        </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
