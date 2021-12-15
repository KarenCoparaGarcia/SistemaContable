<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('producto.store') }}" method="post">
                @csrf
                <input class="w-full border rounded focus:outline-none focus:shadow-outline p-2 mb-4" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre">
                <input class="w-full border rounded focus:outline-none focus:shadow-outline p-2 mb-4" type="number" name="quantity" value="{{ old('quantity') }}" placeholder="Cantidad">
                <input class="w-full border rounded focus:outline-none focus:shadow-outline p-2 mb-4" type="number" name="price" value="{{ old('price') }}" placeholder="Precio">
                <div class="form-group col-md-4 mb-2">
                    <label for="invoice_id">Id Factura</label>
                    <select id="invoice_id" style="height:29px;font-family: arial;font-size: 13px;" name="invoice_id" class="form-control">
                        <option value="">Seleccionar...</option>
                        @foreach($facturas as $fac)
                        <option value="{{$fac->id}}">{{$fac->type}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="SEND" class="px-4 py-2 bg-orange-300 cursor-pointer hover:bg-orange-500 font-bold w-full border rounded border-orange-300 hover:border-orange-500 text-white">
            </form>
        </div>
    </div>
</body>

</html>