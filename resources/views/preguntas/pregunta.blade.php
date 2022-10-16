@extends('layout.app')

@section('preguntas')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detalle facturas</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{URL::to('/dashboard/detalle-facturas/crear')}}" type="button" class="btn btn-sm btn-outline-secondary">Crear detalle factura</a>
                </div>
            </div>
        </div>

        <h2>Lista detalle factura</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">idDetalle</th>
                    <th scope="col">idProducto</th>
                    <th scope="col">idFactura</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $contador = 0;
                @endphp
                @foreach($detalle_facturas as $detalle_factura)
                    <tr>
                        <td>{{++$contador}}</td>
                        <td>{{$detalle_factura->producto_id_producto}}</td>
                        <td>{{$detalle_factura->factura_id_factura}}</td>
                        <td>
                            <div class="mt-1">
                                <a href="{{URL::to('/dashboard/detalle-facturas/'.$detalle_factura->id_detalle_factura.'/editar')}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                <a href="{{URL::to('/dashboard/detalle-facturas/'.$detalle_factura->id_detalle_factura.'/eliminar')}}" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection