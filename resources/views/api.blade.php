@extends('layouts.master')
@section('content-header')
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menu API</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    
@endsection

@section('container')
<div class="container">
  <div class="card">
    <h5 class="card-header">API Whatsapp</h5>
    <div class="card-body">
      <form class="form-horizontal">
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Your Token</h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <input type="text" class="form-control" value="qeqjhrhquhuhuHUhuhakdhuhfpi">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">URL Send Message</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="https://fonnte.com/api/send-message">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Check Status</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="https://fonnte.com/api/send-message">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">White List Domain</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="dev.wpcepat.com">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9 text-secondary mt-3">
                <input type="button" class="btn btn-primary px-4" value="Save Changes">
            </div>
        </div>
          
        </div>
        <!-- /.card-body -->
      </form>
    </div>
  </div>
</div>
@endsection