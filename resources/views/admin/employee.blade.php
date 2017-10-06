@extends('layouts.appadmin')

@section('title', 'Employee')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Employee</h2>
            </div>            

            <!-- Widgets -->
            <div class="row clearfix">                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">Employee</div>
                            <div class="number count-to" data-from="0" data-to="{{ App\Employee::count()}}" data-speed="10" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- #END# Widgets -->
                       
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                    <div class="card"> 
                        <div class="header">
                            <h2>
                                ADD NEW DATA                                
                            </h2>
                        </div>                       
                        <div class="body">
                            <form method="POST" action="{{ route('admin.addemployee') }}">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="number" name="number">
                                                <label class="form-label">Employee Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="name" name="name">
                                                <label class="form-label">Name</label>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <button type="submit" class="btn btn-success btn-lg m-l-15 waves-effect">ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>List</h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Number</th>
                                            <th>Name</th>                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach(App\Employee::all() as $data)
                                        <tr>                                        
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $data['number']}}</td>
                                            <td>{{ $data['name']}}</td>                                            
                                            <td>
                                                <form method="POST" action="{{ route('admin.deleteemployee') }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" id="delid" name="delid" value="{{ $data['id']}}">                                                    
                                                    <button type="submit" class="btn btn-danger waves-effect">Delete</button>
                                                </form>                                                
                                            </td>                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->                
            </div>
            
        </div>
    </section>
@endsection