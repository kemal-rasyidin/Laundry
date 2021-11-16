@extends('template/master')

@section('title')
    Edit Outlet
@endsection

@section('title1')
<a class="btn btn-success" href="{{ route('outlet.index') }}" style="float: left"><i class="fas fa-arrow-left"></i></a>
@endsection

@section('content')
<form action="{{ route('outlet.update',$outlet->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Nama Outlet</label>
        <input type="text" name="nama" class="form-control" placeholder="Laundry Margonda" value="{{ $outlet->nama }}" required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Alamat</label>
        {{-- <textarea class="form-control" name="alamat" value="{{ $outlet->alamat }}" rows="3"></textarea> --}}
        <textarea class="form-control" name="alamat" value="alamat" required="">{{$outlet -> alamat}}</textarea>
    </div> 

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Telepon</label>
        <input type="number" name="telepon" class="form-control" placeholder="0919********" value="{{ $outlet->telepon }}" required="">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-5 mb-5">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection