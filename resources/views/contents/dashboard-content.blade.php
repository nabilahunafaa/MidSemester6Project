
<h1 class="text-3xl text-black pb-6 m-4">Dashboard</h1>

<div class="flex flex-wrap mt-6 m-4">
    <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-plus mr-3"></i> Monthly Reports
        </p>
        <div class="p-6 bg-white">
            <canvas id="chartOne" width="400" height="200"></canvas>
        </div>
    </div>
    <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-check mr-3"></i> Resolved Reports
        </p>
        <div class="p-6 bg-white">
            <canvas id="chartTwo" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<div class="w-full mt-12 m-4">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Latest Reports
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">First Name</th>
                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Last Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($reports as $index => $report)
                <tr class="{{ $index % 2 === 1 ? 'bg-gray-200' : '' }}">
                    <td class="text-left py-3 px-4">{{ $index + 1 }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $report->user->first_name }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $report->user->last_name }}</td>
                    <td class="text-left py-3 px-4">
                        <a class="hover:text-blue-500" href="tel:{{ $report->user->phone_number }}">{{ $report->user->phone_number }}</a>
                    </td>
                    <td class="text-left py-3 px-4">
                        <a class="hover:text-blue-500" href="mailto:{{ $report->user->email }}">{{ $report->user->email }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.0/chart.min.js"></script>
<script>
    const monthlyLabels = @json($monthlyReports->pluck('month'));
    const monthlyData = @json($monthlyReports->pluck('total'));

    const resolvedLabels = @json($resolvedReports->pluck('month'));
    const resolvedData = @json($resolvedReports->pluck('total'));

    var chartOne = document.getElementById('chartOne');
    new Chart(chartOne, {
        type: 'bar',
        data: {
            labels: monthlyLabels,
            datasets: [{
                label: 'Monthly Reports',
                data: monthlyData,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    var chartTwo = document.getElementById('chartTwo');
    new Chart(chartTwo, {
        type: 'line',
        data: {
            labels: resolvedLabels,
            datasets: [{
                label: 'Resolved Reports',
                data: resolvedData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endpush

