@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Text</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->item }}</td>
                        <td>{{ $post->quantity }}</td>
                        <td>{{ $post->price }}</td>
                        <td>{{ $post->text }}</td>
                        <td>
                          @foreach($postImage as $image)
                          <img src="{{ Storage::url($image->images) }}" height="100" width="100">
                          @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
@endsection
