@extends('template/master')

@section('title')
    Paket Detail
@endsection

@section('title1')
    <a class="btn btn-success" href="{{ route('paket.index') }}" style="float: left"><i class="fas fa-arrow-left"></i></a>
@endsection

@section('content')

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Id Outlet</label>
        <input type="text" name="nama" class="form-control" placeholder="Laundry Margonda" value="{{ $paket->id_outlet }}" disabled required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat"  placeholder="Jl Margonda" value="alamat" required=""></textarea>
        {{-- <input type="text" name="telepon" class="form-control" placeholder="Jl. Margonda" value="{{old('alamat')}}" required=""> --}}
    </div> 

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Telepon</label>
        <input type="number" name="telepon" class="form-control" placeholder="0919********" value="{{old('telepon')}}" required="">
    </div>

</form>
@endsection