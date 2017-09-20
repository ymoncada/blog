@extends('layouts.app')
@section('content')
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                LISTADO DE CATEGORIAS
            </div>
            <div class="panel-body">
                <table>
                    <thead>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>ACCIONES</th>
                    </thead>
                    <tbody>
                        @forelse($table as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->descrption}}</td>
                                <td></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">SIN REGISTROS</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $table->render() !!}
            </div>            
        </div>
    </div>
@endsection