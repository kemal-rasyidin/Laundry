@extends('template/master')

@section('title')
    Add Member
@endsection

@section('title1')
    <a class="btn btn-success" href="{{ route('member.index') }}" style="float: left"><i class="fas fa-arrow-left"></i></a>
@endsection

@section('content')
<form action="{{ route('member.store') }}" method="POST">
    @csrf

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Ahmad Fulan" value="{{old('nama')}}" required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Perum Depok" value="{{old('alamat')}}" required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" placeholder="Perum Depok" value="{{old('alamat')}}" required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Telepon</label>
        <input type="number" name="telepon" class="form-control" placeholder="0919********" value="{{old('telepon')}}" required="">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-5 mb-5">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection