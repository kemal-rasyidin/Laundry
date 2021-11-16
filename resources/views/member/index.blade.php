@extends('template/master')

@section('title')
    Member
@endsection

@section('title1')
<a class="btn btn-success" href="{{ route('member.create') }}" style="float: left"><i class="fas fa-plus"></i></a>
@endsection

@section('content')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Telepon</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $no => $data)
            <tr>
                <td style="width: 10%">{{ ++$no }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->telepon }}</td>
                <td>
                    <form action="{{ route('member.destroy',$data->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('member.show',$data->id) }}"><i class="fas fa-eye"></i></a>

                        <a class="btn btn-primary" href="{{ route('member.edit',$data->id) }}"><i class="fas fa-pen"></i></a>

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
