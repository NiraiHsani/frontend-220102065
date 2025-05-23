@extends('layouts.app')

@section('content')
<h2>Edit Kelas</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('mahasiswa.update', $mahasiswa['npm']) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="npm" value="{{ $mhs->npm }}" placeholder="NPM" class="form-input" readonly>
                    <input type="text" name="id_user" value="{{ $mhs->id_user }}" placeholder="ID User" class="form-input">
                    <input type="text" name="id_kajur" value="{{ $mhs->id_kajur }}" placeholder="ID Kajur" class="form-input">
                    <input type="text" name="nama_mahasiswa" value="{{ $mhs->nama_mahasiswa }}" placeholder="Nama Mahasiswa" class="form-input">
                    <input type="text" name="tempat_tanggal_lahir" value="{{ $mhs->tempat_tanggal_lahir }}" placeholder="Tempat, Tanggal Lahir" class="form-input">
                    <select name="jenis_kelamin" class="form-input">
                        <option value="Laki-laki" {{ $mhs->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $mhs->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <input type="text" name="alamat" value="{{ $mhs->alamat }}" placeholder="Alamat" class="form-input">
                    <input type="text" name="agama" value="{{ $mhs->agama }}" placeholder="Agama" class="form-input">
                    <input type="text" name="angkatan" value="{{ $mhs->angkatan }}" placeholder="Angkatan" class="form-input">
                    <input type="text" name="program_studi" value="{{ $mhs->program_studi }}" placeholder="Program Studi" class="form-input">
                    <input type="text" name="no_hp" value="{{ $mhs->no_hp }}" placeholder="No HP" class="form-input">
                    <input type="email" name="email" value="{{ $mhs->email }}" placeholder="Email" class="form-input">
                </div>

                <div class="flex justify-between mt-6">
                    <a href="/mahasiswa.index" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
                        Kembali
                    </a>
                    <button type="submit" class="bg-[#800000] hover:bg-red-700 text-white font-semibold py-2 px-6 rounded">
                        Simpan
                    </button>
                </div>
            </form>
@endsection
