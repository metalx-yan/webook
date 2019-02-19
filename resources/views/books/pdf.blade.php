
 <html>
     <head>
         <title>PDF Gan</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     </head>
     <body>
        <div class="container">
            
        <div class="row">
            <div class="col-xl-2">
                 <img src="https://pbs.twimg.com/profile_images/611776817645531137/yF_sL8eo.jpg" height="8%" width="8%" alt="">
            </div>
            <div class="col-xl-8">
                 Report Books
            </div>
             <div class="col-xl-2">
                 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Lambang_Kota_Tangerang.png/250px-Lambang_Kota_Tangerang.png" height="8%" width="8%" alt="">
            </div>
        </div>
        </div>
{{-- <br> --}}
             <div class="row">
                 <div class="col-md-2">
                    <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Judul</th>
                              <th scope="col">Pengarang</th>
                              <th scope="col">Penerbit</th>
                              <th scope="col">Tahun</th>
                              <th scope="col">Jenis</th>
                              <th scope="col">Tahun</th>
                              <th scope="col">Tahun</th>
                              <th scope="col">Tahun</th>
                              <th scope="col">Tahun</th>
                              <th scope="col">Tahun</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($book_data as $element)
                            <tr>
                              <th scope="row">{{ $element->id }}</th>
                              <td>{{ $element->judul }}</td>
                              <td>{{ $element->pengarang }}</td>
                              <td>{{ $element->penerbit }}</td>
                              <td>{{ $element->tahun }}</td>
                              <td>{{ $element->jenis }}</td>
                              <td>{{ $element->tahun }}</td>
                              <td>{{ $element->tahun }}</td>
                              <td>{{ $element->tahun }}</td>
                              <td>{{ $element->tahun }}</td>
                              <td>{{ $element->tahun }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                 </div>
             </div>
     </body>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

 </html>