@extends('layouts.app')

@section('content')
<h2>Data Kelas</h2>
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-2">Tambah kelas</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="w-full table-auto border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-2 border">NPM</th>
                            <th class="p-2 border">User</th>
                            <th class="p-2 border">Kajur</th>
                            <th class="p-2 border">Nama</th>
                            <th class="p-2 border">TTL</th>
                            <th class="p-2 border">JK</th>
                            <th class="p-2 border">Alamat</th>
                            <th class="p-2 border">Agama</th>
                            <th class="p-2 border">Angkatan</th>
                            <th class="p-2 border">Prodi</th>
                            <th class="p-2 border">No HP</th>
                            <th class="p-2 border">Email</th>
                            <th class="p-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswas as $mhs)
                            <tr>
                                <td class="p-2 border">{{ $mhs->npm }}</td>
                                <td class="p-2 border">{{ $mhs->id_user }}</td>
                                <td class="p-2 border">{{ $mhs->id_kajur }}</td>
                                <td class="p-2 border">{{ $mhs->nama_mahasiswa }}</td>
                                <td class="p-2 border">{{ $mhs->tempat_tanggal_lahir }}</td>
                                <td class="p-2 border">{{ $mhs->jenis_kelamin }}</td>
                                <td class="p-2 border">{{ $mhs->alamat }}</td>
                                <td class="p-2 border">{{ $mhs->agama }}</td>
                                <td class="p-2 border">{{ $mhs->angkatan }}</td>
                                <td class="p-2 border">{{ $mhs->program_studi }}</td>
                                <td class="p-2 border">{{ $mhs->no_hp }}</td>
                                <td class="p-2 border">{{ $mhs->email }}</td>
                                <td class="p-2 border">
                                    <a href="/mahasiswa/{{ $mhs->npm }}/edit" class="text-blue-600">✏️</a>
                                    <form action="/mahasiswa/{{ $mhs->npm }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin hapus?')" class="text-red-600">🗑️</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection