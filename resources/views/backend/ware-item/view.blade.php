
@extends('layouts.backend')
@section('title')
    {{'View '.$item->getWare()}}
@stop
@section('content')

    <!-- page content -->
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">View {{$item->getWare()}}</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('ware-item.index')}}">Ware item</a>
                </li>                    
                <li class="breadcrumb-item ">
                    <a href="{{route('ware-item.create')}}">Add</a>
                </li>                    
                <li class="breadcrumb-item active">
                    View
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-eye"></i>
                    View {{$item->getWare()}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10px">Name</th>
                                    <th width="100px">Value</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td>Ware</td>
                                    <td>{{$item->getWare()}}</td>
                                </tr>
                                <tr>
                                    <td>Product</td>
                                    <td>{{$item->getProduct()}}</td>
                                </tr>
                                <tr>
                                    <td>Total count</td>
                                    <td>{{$item->item_count }}</td>
                                </tr>         
                                <tr>
                                    <td>Created</td>
                                    <td>
                                        {{$item->created_at}}
                                    </td>
                                </tr>                                   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /page content -->

@endsection


