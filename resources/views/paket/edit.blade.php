@extends('template/master')

@section('title')
    Edit Paket
@endsection

@section('title1')
<a class="btn btn-success" href="{{ route('paket.index') }}" style="float: left"><i class="fas fa-arrow-left"></i></a>
@endsection

@section('content')
<form action="{{ route('paket.update',$paket->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Id Outlet</label>
        <input type="text" name="id_outlet" class="form-control" placeholder="1" value="{{ $paket->id_outlet }}" required="">
    </div>
    
    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Jenis</label>
        <select class="custom-select" name="jenis" required>
            <option selected disabled value="">Choose...</option>
            <option>Kiloan</option>
            <option>Selimut</option>
        </select>
        {{-- <input type="text" name="jenis" class="form-control" placeholder="" value="{{old('jenis')}}" required="">
        --}}
    </div>
    
    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Nama Paket</label>
        <input type="text" name="nama_paket" class="form-control" placeholder="1" value="{{ $paket->nama_paket }}" required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control" placeholder="10000" value="{{ $paket->harga }}" required="">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-5 mb-5">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection