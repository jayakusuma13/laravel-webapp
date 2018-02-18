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
                        <th scope="col">Name</th>
                        <th scope="col">Note</th>
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{ $invoice->id }}</th>
                        <td>{{ $invoice->name }}</td>
                        <td>{{ $invoice->note }}</td>
                        <td>{{ $invoice->item }}</td>
                        <td>{{ $invoice->price }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
@endsection
