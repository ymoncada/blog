@extends('layouts.app')
@section('content')
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                VER CATEGORIAS
            </div>
            <div class="panel-body">
                
                    {!! Field::text('name',$category->name,['label'=>'NOMBRE:','readonly'=>'false']) !!}
                    {!! Field::textarea('description',$category->description,['label'=>'DESCRIPCION:','rows'=>'3','style'=>'resize:none','readonly'=>'false']) !!}
                    <a class="btn btn-danger" href="{{route('catalogos.categories.index')}}">REGRESAR</a>
            </div>
        </div>
    </div>
@endsection