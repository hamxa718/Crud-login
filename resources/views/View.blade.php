@extends('Dashboard')

@section('tables')

        
        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                                        <!-- Page Heading -->
                     @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category Name</th>
                                            <th>Category Title</th>
                                            
                                            <th>Created At</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($category as $categ)
                                                    <tr>
                                                        <td> {{ $categ->id }}</td>
                                                        <td>{{ $categ->name }}</td>
                                                        <td>{{ $categ->title }}</td>
                                                        <td>{{ $categ->created_at }}</td>
                                                        <td><a href="Delete-category/{{$categ->id}}" class="btn btn-danger btn-sm">Delete</a><a href="Update-category/{{$categ->id}}" class="btn btn-info btn-sm">Update</a></td>
                                                                                                                
                                                    </tr>
                                                @endforeach                                       
                                               
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


@endsection