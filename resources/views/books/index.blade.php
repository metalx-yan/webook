@extends('main')

@section('content')
@php
    $a = 1;
@endphp
<div class="container">
<div class="row">
    <div class="col-md-4 sidebar">
        
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm lor">
                <div class="lh-100">

                        <h4 class="mb-0 text-white lh-100">Books Report</h4>
                        <small>All Book In One</small>
                </div>
            </div>
            
            <div class="my-3 p-3 bg-white rounded shadow-sm" >
                <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <a href=" {{ route('books.create') }}" class="btn btn-outline-secondary form-control">Add Book</a>
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <a href=" {{ route('pdf') }}" class="btn btn-outline-secondary form-control">Report Books</a>
                    </p>
                </div>
                
            
            </div>
        </div>

        <div class="col-md-8 content">
            <div class="card">
                <h5 class="card-header header"><b>All Books</b></h5>
                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jenis Buku</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($index as $indexs)
                         
                     <tr>
                         <th scope="row">{{$a}}</th>
                         @php
                                $a++;
                                @endphp
                        <td>{{$indexs->judul}}</td>
                        <td>{{$indexs->pengarang}}</td>
                        <td>{{$indexs->penerbit}}</td>
                        <td>{{$indexs->tahun}}</td>
                        <td>{{$indexs->jenis}}</td>
                        <td>
                            <div class="row">
              				<div class="col-xs-4">
                				<a href=" {{ route('books.edit', $indexs->id) }}" class="btn btn-warning btn-sm">Edit
                				</a>
              				</div>
              				<div class="col-xs-1 offset-sm-1"></div>
              
              				<div class="col-xs-4">
                				<form class="" action=" {{ route('books.destroy', $indexs->id) }}" method="POST">
                      				@csrf
                      				@method('DELETE')
									<button class="ion ion-android-delete btn btn-danger btn-sm" name="delete" type="submit">Delete</button>
                  				</form>
                  			</div>
				      	</div>                            
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
</div>
@endsection
