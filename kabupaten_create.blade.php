@extends('template')
@section('content')
    <section class="main-section">
      <div class="content">
        <h1>Tambah Kabupaten</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
        @endif

        <form action="{{ route('kabupaten.store') }}" method="post">
          {{ csrf_field() }}
          <div class="from-group">
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
          <div class="from-group">
            <label for="nama">Code:</label>
            <input type="text" class="form-control" id="code" name="code">
          </div>
          <div class="from-group">
            <label for="nama">Description::</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="from-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </section>
    @endsection
