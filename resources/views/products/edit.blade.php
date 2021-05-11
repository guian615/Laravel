@extends('products.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="text-center mt-5 text-primary">

            <h2>Edit Product</h2>

        </div>

        <div class="pull-right mr-4">

            <a class="btn btn-primary" href="{{ route('products.index') }}"> <i class="fa fa-arrow-left"
                    aria-hidden="true"> </i>
            </a>

        </div>

    </div>

</div>



@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



<div class="container">
    <div class="row">
        <div class="col-sm">
            <img src="https://images.squarespace-cdn.com/content/v1/5c2992f0297114a6e7ad5a0a/1584992812724-OWWB9EFXQRZBKM4TQ2JG/ke17ZwdGBToddI8pDm48kFoqHUTIxcY818QJRy5m8fkUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKcqWRElnH0O8hzprKd1KPnDRKZ3NJqby7g33OtgqGYChSVJHqKoZaAfLtYvevyniGt/flat-color-modern-isometric-digital-marketing-vector-20983392.jpg"
                alt="..." class="mt-4" style="height:400px;width:500px; border-radios">
        </div>
        <div class="col-sm">

            <form action="{{ route('products.update',$product->id) }}" method="POST" style=" 
        border-radius: 20px;
        padding: 1.3rem;
        width: 500px;
        margin: 2rem auto;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                @csrf

                @method('PUT')

                <div>
                    <h2 class="text-primary mt-4 text-center">
                        Update Data
                    </h2>
                </div>

                <div class="row ">


                    <div class="input-group col-lg-10 mb-4 mx-auto mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                                <i class="fa fa-user text-primary" style=" font-size:25px;padding:10px;"></i>
                            </span>
                        </div>
                        <input id="name" type="text" name="name" placeholder="Enter Name" value="{{ $product->name }}"
                            class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
                    </div>


                    <div class="input-group col-lg-10 mb-4 mx-auto">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                                <i class="fa fa-info-circle text-primary" style=" font-size:25px;padding:10px;"></i>
                            </span>
                        </div>
                        <input id="name" type="text" name="detail" placeholder="Details" value="{{ $product->detail }}"
                            class="form-control bg-dark text-light border-left-0 border-md" style="padding:10px">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 mx-auto">

                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"
                                aria-hidden="true"></i> Submit</button>

                    </div>

            </form>
        </div>

    </div>
</div>
@endsection