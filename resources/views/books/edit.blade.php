@extends('main')

@section('title', 'Add Book')

@section('content')
   

<div class="container">
    <form action=" {{ route('books.update', $book->id) }}" method="POST">
        <div class="row">
            <div class="col-md-5" ></div>
            <div class="col-md-7" style="margin-top:10px;">
                <b><h1 class="text-info">Edit Book</h1></b>
            </div>    
        </div>
                @csrf
				@method('PUT')
        <div class="form" style="margin-top:50px;">
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Title</label><hr>
                        </div>
                        <div class="col-md-6">
                            <input type="" name="judul" value="{{ old('judul') ?? $book->judul }}" class="form-control {{ $errors->has('judul') ? 'is-invalid' : ''}}" placeholder="">
                            {!! $errors->first('judul', '<span class="invalid-feedback">:message</span>') !!}
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Publisher</label><hr>
                        </div>
                        <div class="col-md-6">
                            <input type="" name="penerbit" value="{{ old('penerbit') ?? $book->penerbit }}" class="form-control {{ $errors->has('penerbit') ? 'is-invalid' : ''}}" placeholder="">
                            {!! $errors->first('penerbit', '<span class="invalid-feedback">:message</span>') !!}

                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1">Author</label><hr>
                        </div>
                        <div class="col-md-6">
                            <input type="" name="pengarang" value="{{ old('pengarang') ?? $book->pengarang }}" class="form-control {{ $errors->has('pengarang') ? 'is-invalid' : ''}}" placeholder="">
                            {!! $errors->first('pengarang', '<span class="invalid-feedback">:message</span>') !!}

                        </div>
                    </div>
                </div>
                
    <div class="form-group">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <label for="exampleFormControlInput1">Publication Year</label><hr>
            </div>
            <div class="col-md-6">
                <input type="" name="tahun" value="{{ old('tahun') ?? $book->tahun }}" class="form-control {{ $errors->has('tahun') ? 'is-invalid' : ''}}" placeholder="">
                            {!! $errors->first('tahun', '<span class="invalid-feedback">:message</span>') !!}

            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <label for="exampleFormControlInput1">Type Book</label><hr>
            </div>
            <div class="col-md-6">
                <input type="" name="jenis" value="{{ old('jenis') ?? $book->jenis }}" class="form-control {{ $errors->has('jenis') ? 'is-invalid' : ''}}" placeholder="">
                            {!! $errors->first('jenis', '<span class="invalid-feedback">:message</span>') !!}

            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
                <button class="btn btn-success">Save</button>
                <a href=" {{ route('books.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>
</form>
</div>
@endsection