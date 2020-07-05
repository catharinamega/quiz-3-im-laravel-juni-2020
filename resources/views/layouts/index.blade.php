@extends('master')


@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Condensed Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-condensed">
                  <thead>
                  <tr>
                      <th style="width: 10px">#</th>
                      <th>artikel_id</th>
                      <th>user_id</th>
                      <th>judul</th>
                      <th>isi</th>
                      <th>created_at</th>
                      <th>updated_at</th>
                      <th>slug</th>
                      <th>tag</th>
                     
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                   
                  @foreach($artikel as $key => $artikel)
                    <tr>
                      
                    <td> {{ $key+1}} </td>
                      <td> {{ $artikel->artikel_id }}</td>
                      <td> {{ $artikel->user_id }}</td>
                      <td> {{ $artikel->judul }}</td>
                      <td> {{ $artikel->isi }}</td>
                      <td> {{ $artikel->created_at }}</td>
                      <td> {{ $artikel->updated_at }}</td>
                      <td> {{ $artikel->slug }}</td>
                      <td> {{ $artikel->tag }}</td>
                      
                      <td> 
                      <a href="/artikel/{{$artikel->artikel_id}}" class="btn btn-sm btn-info">show</a>
                      </td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection












