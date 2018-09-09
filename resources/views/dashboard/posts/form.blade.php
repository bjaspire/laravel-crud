@extends('layouts.app')

@section('content')
    <!-- partial:partials/_navbar.html -->
    @include('layouts.dashboard.nav')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.dashboard.sidebarnav')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
          <h3 class="page-title">
             {{ __('Posts') }}
            </h3>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('Posts') }}</li>
              </ol>
            </nav>
          </div>

          <div class="row">
            <div class="col-12 grid-margin">
              <div class="row">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        {!! Form::open(['method' => 'POST', 'route' => 'post.store', 'class' => 'form-horizontal']) !!}

                            <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                                {!! Form::label('inputname', 'Input label') !!}
                                {!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('inputname') }}</small>
                            </div>

                            <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                                {!! Form::label('inputname', 'Input', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-9">
                                    {!! Form::textarea('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('inputname') }}</small>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                                {!! Form::label('inputname', 'File label') !!}
                                {!! Form::file('inputname', ['required' => 'required']) !!}
                                <p class="help-block">Help block text</p>
                                <small class="text-danger">{{ $errors->first('inputname') }}</small>
                            </div>



                            <div class="btn-group pull-right">
                                {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                                {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">

                            <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                                {!! Form::label('inputname', 'Input label') !!}
                                {!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('inputname') }}</small>
                            </div>


{!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
  @endsection
