
@extends('layouts.backend')
@section('title')
    {{'View '.$process->getWare()}}
@stop
@section('content')

    <!-- page content -->
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">View {{$process->getWare()}}</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{route('ware-process.index')}}">Ware process</a>
                </li>                    
                <li class="breadcrumb-item ">
                    <a href="{{route('ware-process.create')}}">Add</a>
                </li>                    
                <li class="breadcrumb-item active">
                    View
                </li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-eye"></i>
                    View {{$process->getWare()}}
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
                                    <td>{{$process->getWare()}}</td>
                                </tr>
                                <tr>
                                    <td>Product</td>
                                    <td>{{$process->getProduct()}}</td>
                                </tr>
                                <tr>
                                    <td>Clent</td>
                                    <td>{{$process->getClent()}}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        {{$process->getStatus($process->status) }}
                                    </td>
                                </tr>         
                                <tr>
                                    <td>Created</td>
                                    <td>
                                        {{$process->created_at}}
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


