@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add User
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('prios.store') }}">
          <div class="form-group">
              @csrf
              <label for="naam">Name</label>
              <input type="text" class="form-control" name="naam"/>
          </div>
          <div class="form-group">
              <label for="prio">Prio</label>
              <input type="text" class="form-control" name="prio"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Prio</button>
      </form>
  </div>
</div>
@endsection