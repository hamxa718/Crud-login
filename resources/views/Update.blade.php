@extends('Dashboard')

@section('update')
<h1>Update Category</h1>
      <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-7 col-md-6 mb-4">
                           <form action="/Category-Updated/{{$category->id}}" method="post">
                            @csrf
                            
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                              <div class="form-group">
                                <label for="email">Category Name:</label>
                                <input type="text" name="name" class="form-control" value="{{$category->name}}" id="email">
                              </div>
                              <div class="form-group">
                                <label for="pwd">Category Type :</label>
                                <input type="text" name="title" value="{{$category->title}}" class="form-control" id="pwd">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            
                    </div>

                    <!-- Content Row -->

        <!-- End of Sidebar -->

@endsection