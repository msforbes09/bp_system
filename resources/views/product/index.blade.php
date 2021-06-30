@extends('layout.master')

@section('content')
    <h1 class="title">Products</h1>

    <table class="table is-fullwidth is-bordered is-striped is-hoverable is-narrow">
        <thead>
            <tr class="has-background-primary">
                <th>Name</th>
                <th>Code</th>
                <th>Type</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->type->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection