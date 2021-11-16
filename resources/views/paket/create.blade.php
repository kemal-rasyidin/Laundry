@extends('template/master')

@section('title')
Add Paket
@endsection

@section('title1')
<a class="btn btn-success" href="{{ route('paket.index') }}" style="float: left"><i class="fas fa-arrow-left"></i></a>
@endsection

@section('content')
<form action="{{ route('paket.store') }}" method="POST">
    @csrf

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Id Outlet</label>
        <input type="text" name="id_outlet" class="form-control" placeholder="1" value="{{old('id_outlet')}}"
            required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Jenis</label>
        {{-- <select class="form-control" name="jenis">
            @foreach(["Kiloan" => "Kontakt e-mail", "selimut" => "Kontakt telefoniczny"] AS $data => $datas)
            <option value="{{ $data }}"
                {{ old("jenis", $data->jenis) == $data ? "selected" : "" }}>
                {{ $datas }}</option>
            @endforeach
        </select> --}}
        {{-- <input type="text" name="jenis" class="form-control" placeholder="" value="{{old('jenis')}}" required="">
        --}}
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Nama Paket</label>
        <input type="text" name="nama_paket" class="form-control" placeholder="Paket Simpel"
            value="{{old('id_outlet')}}" required="">
    </div>

    <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label>Harga</label>
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text">Rp</div>
            </div>
            <input type="text" name="harga" class="form-control" placeholder="10000" value="{{old('harga')}}"
                required="">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-5 mb-5">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection
