@extends('template/master')

@section('title')
    Paket
@endsection

@section('title1')
<a class="btn btn-success" href="{{ route('paket.create') }}" style="float: left"><i class="fas fa-plus"></i></a>
@endsection

@section('content')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Outlet</th>
                <th scope="col">Jenis</th>
                <th scope="col">Nama Paket</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pakets as $no => $data)
            <tr>
                <td style="width: 10%">{{ ++$no }}</td>
                <td>{{ $data->id_outlet->id }}</td>
                <td>{{ $data->jenis }}</td>
                <td>{{ $data->nama_paket }}</td>
                <td>Rp {{ $data->harga }}</td>
                <td>
                    <form action="{{ route('paket.destroy',$data->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('paket.show',$data->id) }}"><i class="fas fa-eye"></i></a>

                        <a class="btn btn-primary" href="{{ route('paket.edit',$data->id) }}"><i class="fas fa-pen"></i></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
