@extends('admin.layouts.app')

@section('title', 'Kelola Layanan')

@section('content')
    <div class="card">
        <div class="d-flex justify-between align-center" style="margin-bottom: 20px;">
            <h3>Daftar Layanan</h3>
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary">+ Tambah Layanan</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Ikon</th>
                    <th>Nama Layanan</th>
                    <th>Harga Mulai</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $index => $service)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td style="font-size: 24px;">{{ $service->icon }}</td>
                        <td>
                            <strong>{{ $service->name }}</strong><br>
                            <small class="text-color">{{ $service->short_description }}</small>
                        </td>
                        <td>Rp {{ number_format($service->starting_price, 0, ',', '.') }}</td>
                        <td>
                            @if($service->status)
                                <span style="background: #d1fae5; color: #065f46; padding: 4px 8px; border-radius: 4px; font-size: 12px;">Aktif</span>
                            @else
                                <span style="background: #fee2e2; color: #991b1b; padding: 4px 8px; border-radius: 4px; font-size: 12px;">Nonaktif</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-outline" style="padding: 5px 10px; font-size: 12px;">Edit</a>
                                
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" style="background: #ef4444; color: white; padding: 5px 10px; font-size: 12px;">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Belum ada data layanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
