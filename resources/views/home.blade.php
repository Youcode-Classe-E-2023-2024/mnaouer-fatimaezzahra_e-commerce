{{--@php--}}
{{--    dd($products);--}}
{{--@endphp--}}

<x-layout>

    <div class="d-flex justify-content-between">
        <h1>Products</h1>
        <div class="p-1">
            <a href="{{route('product.create')}}" class="btn btn-primary" type="button">Create</a>
        </div>
    </div>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <p>{{ $product->name }}</p>
                </td>
                <td>
                    <p class="fw-normal">{{ $product->description }}</p>
                </td>
                <td>
                    <p class="fw-normal">{{ $product->quantity }}</p>
                </td>
                <td>
                    <a href="{{ route('product.detail', $product->id) }}" class="btn btn-link btn-sm btn-rounded text-info">Details</a>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-link btn-sm btn-rounded">Edit</a>
                    <a href="{{ route('product.delete', $product->id) }}" class="btn btn-link btn-sm btn-rounded text-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</x-layout>
