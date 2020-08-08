@extends('layouts.app')
@section('title','Prodi Page')
@section('bread1','Prodi Studi')
@section('bread2','Data')
@section('content')
    <h1>Master Data Program Studi</h1>
    <table class="table table-striped" id="mhs_table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Kaprodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_prodi as $key => $item)
            <td>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->kode_prodi }}</td>
                <td>{{ $item->nama_prodi }}</td>
                <td>{{ $item_kaprodi }}</td>
            </td>
        </tbody>
    </table>

@endsection 