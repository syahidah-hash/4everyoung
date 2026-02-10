@extends('layouts.app')

@section('content')
    <div>
        <h1>Daftar Pengguna</h1>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Member</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @forelse ($user->savings as $saving)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->membership_number }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ ucfirst($saving->saving_type) }}</td>
                                        <td>Rp {{ number_format($saving->amount, 2, ',', '.') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->membership_number }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td colspan="2">Belum ada simpanan</td>
                                    </tr>
                                @endforelse
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
