@extends('layouts.backend')
@section('title')
    {{'Edite '.$item->getWare()}}
@stop
@section('content')

    <!-- page content -->
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edite {{$item->getWare()}}</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{url('ware-item')}}">Ware item</a> 
                </li>                     
                <li class="breadcrumb-item ">
                    <a href="{{route('ware-item.create')}}">Add</a>
                </li>                    
                <li class="breadcrumb-item active">
                    Edit
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-edit"></i>
                        Edit {{$item->getWare()}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {!! Form::open(['route' => ['ware-item.update',$item->id],'method'=>'put']) !!}
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Ware
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::select('ware_id',$wares,$item->ware_id,['class'=>'form-control','placeholder' => $item->getWare()])}}
                                    </div>
                                    @error('ware_id')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="erros-text">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Product
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::select('product_id',$products,$item->product_id,['class'=>'form-control','placeholder' => $item->getProduct()])}}
                                    </div>
                                    @error('product_id')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="erros-text">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Total count
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::number('item_count',$item->item_count,['class'=>'form-control','placeholder' => 'Price'])}}
                                    </div>
                                    @error('item_count')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="erros-text">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-create">
                                    Save
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /page content -->

@endsection
