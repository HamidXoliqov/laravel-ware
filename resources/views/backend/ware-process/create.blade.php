@extends('layouts.backend')
@section('title')
    {{'Create ware process'}}
@stop
@section('content')

    <!-- page content -->
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create ware process</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{url('ware-process')}}">Ware process</a> 
                </li>                    
                <li class="breadcrumb-item active">
                    Add
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus-square"></i>
                    Create ware process
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {!! Form::open(['route' => 'ware-process.store']) !!}
                        {{ Form::hidden('created_expense', '') }}
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Ware
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::select('ware_id',$wares,null,['class'=>'form-control','placeholder' => 'Sellect'])}}
                                    </div>
                                    @error('ware_id')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="erros-text">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Product
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::select('product_id',$products,null,['class'=>'form-control','placeholder' => 'Sellect'])}}
                                    </div>
                                    @error('product_id')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="erros-text">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Clent
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::select('clent_id',$users,null,['class'=>'form-control','placeholder' => 'Sellect'])}}
                                    </div>
                                    @error('clent_id')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="erros-text">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Count
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::number('count',null,['class'=>'form-control','placeholder' => 'Count'])}}
                                    </div>
                                    @error('count')
                                        <span class="invalid-feedback" role="alert">
                                            <p class="erros-text">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                        Status
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        {{Form::select('status',$status,null,['class'=>'form-control','placeholder' => 'Sellect'])}}
                                    </div>
                                    @error('status')
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
