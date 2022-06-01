@extends('Dashboard')

@section('form')



@if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
  <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-8 col-md-6 mb-4">
                            <form method="post" action="submit-category">
                                @csrf
                                <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                                
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Category Type</label>
                                <input type="text" name="title" class="form-control" id="exampleInputPassword1" >
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            
                        </div>

                        
                    </div>

@endsection
