@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div>
                  <form method="get" action="invoices/create">
                      <button type="submit">Add Invoice</button>
                  </form>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Note</th>
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Commands</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($invoices as $invoice)
                      <tr>
                        <th scope="row">{{ $invoice->id }}</th>
                        <td>{{ $invoice->name }}</td>
                        <td>{{ $invoice->note }}</td>
                        <td>{{ $invoice->item }}</td>
                        <td>{{ $invoice->price }}</td>
                        <td>
                          <form method="get" action="invoices/{{ $invoice->id }}">
                            <button type="submit">Detail</button>
                          </form>
                          <form method="get" action="invoices/{{ $invoice->id }}/edit">
                            <button type="submit">Edit</button>
                          </form>
                          <form method="post" action="invoices/{{ $invoice->id }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                </div>
            </div>
@endsection
