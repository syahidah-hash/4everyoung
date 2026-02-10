@extends('layouts.app')

@section('content')
<div class="py-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="h3 mb-1">Daftar Simpanan Anggota</h1>
            <p class="text-muted mb-0">Ringkasan simpanan principal, wajib, dan sukarela untuk setiap anggota.</p>
        </div>
        <a href="/users" class="btn btn-outline-secondary btn-sm">
            Lihat Daftar Anggota
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Member</th>
                            <th scope="col">Jenis Simpanan</th>
                            <th scope="col" class="text-end">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($savings as $saving)
                            <tr>
                                <td>{{ $saving->id }}</td>
                                <td>{{ $saving->user->name }}</td>
                                <td class="text-muted">{{ $saving->user->email }}</td>
                                <td>
                                    <span class="badge text-bg-secondary">
                                        {{ $saving->user->membership_number }}
                                    </span>
                                </td>
                                <td>
                                    @php
                                        $badgeClass = match ($saving->saving_type) {
                                            'principal' => 'text-bg-primary',
                                            'mandatory' => 'text-bg-success',
                                            'voluntary' => 'text-bg-warning',
                                            default => 'text-bg-secondary',
                                        };
                                    @endphp
                                    <span class="badge {{ $badgeClass }}">
                                        {{ ucfirst($saving->saving_type) }}
                                    </span>
                                </td>
                                <td class="text-end fw-semibold">
                                    Rp {{ number_format($saving->amount, 0, ',', '.') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    Belum ada data simpanan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
