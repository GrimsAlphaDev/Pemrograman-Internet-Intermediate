@extends('layouts.app')

@section('title', 'Friends')

    @section('content')
        
    <form action="/friends" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="mb-3">
        <label for="no_tlp" class="form-label">No Telp</label>
        <input type="text" class="form-control" id="no_tlp" name="no_tlp">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
      </div>
     
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
        
@endsection 
