@extends('products.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-primary mt-4 mx-auto">Laravel CRUD </h2>

        </div>

        <div class="pull-right mt-4">

            <a class="btn btn-success" href="{{ route('products.create') }}"> <i class="fa fa-plus"
                    aria-hidden="true"></i>
            </a>

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered mt-4 text-center text-dark">

    <tr class="bg-primary text-light">

        <th>No</th>

        <th>Name</th>

        <th>Status</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $product->name }}</td>

        <td>{{ $product->detail }}</td>

        <td>

            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-secondary" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"
                        aria-hidden="true"></i> Show</a>


                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-pencil"
                        aria-hidden="true"></i>
                    Edit </a>

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                    Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>



{!! $products->links() !!}



@endsection