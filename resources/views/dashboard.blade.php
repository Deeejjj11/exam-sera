@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center fw-bold">Hotel Dashboard</h2>

    <div class="row">
        {{-- Summary Cards --}}
        <div class="col-lg-6">
            @php
                $cards = [
                    ['title' => 'Total Bookings', 'value' => $totalBookings, 'color' => 'primary'],
                    ['title' => 'Total Guests', 'value' => $totalGuests, 'color' => 'warning'],
                    ['title' => 'Total Rooms', 'value' => $totalRooms, 'color' => 'secondary'],
                    ['title' => 'Total Services', 'value' => $totalServices, 'color' => 'info'],
                    ['title' => 'Occupied Rooms', 'value' => $occupiedRooms, 'color' => 'danger'],
                    ['title' => 'Rooms Under Maintenance', 'value' => $maintenanceRooms, 'color' => 'warning'],
                    ['title' => 'Available Rooms', 'value' => $availableRooms, 'color' => 'success'],
                ];
            @endphp

            @foreach ($cards as $card)
                <div class="mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body py-3">
                            <h6 class="text-muted mb-1">{{ $card['title'] }}</h6>
                            <h4 class="fw-bold text-{{ $card['color'] }}">{{ $card['value'] }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Charts --}}
        <div class="col-lg-6">
            <div class="mb-3">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent fw-bold py-2">Bookings Per Month</div>
                    <div class="card-body"><canvas id="bookingsChart" height="200"></canvas></div>
                </div>
            </div>
           <div>
    <div class="card shadow-sm">
        <div class="card-header bg-transparent fw-bold py-2">Room Status Distribution</div>
        <div class="card-body text-center">
            <canvas id="roomStatusChart" style="width: 100%; height: 200px;"></canvas>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById('bookingsChart'), {
        type: 'line',
        data: {
            labels: {!! json_encode($months) !!},
            datasets: [{
                label: 'Bookings',
                data: {!! json_encode($bookingsPerMonth) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                tension: 0.3
            }]
        },
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });

    new Chart(document.getElementById('roomStatusChart'), {
        type: 'pie',
        data: {
            labels: {!! json_encode(array_keys($roomStatusDistribution)) !!},
            datasets: [{
                data: {!! json_encode(array_values($roomStatusDistribution)) !!},
                backgroundColor: ['#28a745', '#dc3545', '#ffc107'],
                borderColor: '#fff', borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });
</script>
@endsection
