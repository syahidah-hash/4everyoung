@extends('layouts.app')

@section('content')
<div>
    <h1>Daftar Simpanan Anggota</h1>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Anggota</th>
                <th>Email</th>
                <th>Nomor Member</th>
                <th>Jenis Simpanan</th>
                <th>Jumlah</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($savings as $saving)
                <tr>
                    <td>{{ $saving->id }}</td>
                    <td>{{ $saving->user->name }}</td>
                    <td>{{ $saving->user->email }}</td>
                    <td>{{ $saving->user->membership_number }}</td>
                    <td>{{ ucfirst($saving->saving_type) }}</td>
                    <td>
                        Rp {{ number_format($saving->amount, 0, ',', '.') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">
                        Belum ada data simpanan
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
