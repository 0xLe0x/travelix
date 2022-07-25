<x-app-layout>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="font-bold text-primary">Your Account Status</p>                    
                    <button class="btn btn-primary text-white">Email Verified</button>
                    <p class="py-3 font-bold text-primary">Receiving Wallet</p> 
                    <p>0x808107...8311D58F <small class="font-bold text-primary">Edit</small></p>
                </div>
                 
            </div>
            <div class="bg-white mt-3 overflow-hidden shadow-sm sm:rounded-lg">                
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="font-bold text-primary">Token Price Graph</p>
                    <p class="text-primary">$0.009571 <small>USD</small></p>
                    <p class="text-green-600"><small>$0.008182 (+589.05%)</small></p>
                    <canvas id="myChart" height="100px"></canvas>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var labels =  {{ Js::from($labels) }};
        var users =  {{ Js::from($data) }};
    
        const data = {
            labels: labels,
            datasets: [{
            label: 'Chart',
            fill: true,
            backgroundColor: 'rgba(179,181,198,0.2)',
            borderColor: 'rgba(179,181,198,1)',
            pointBorderColor: "#fff",
			pointBackgroundColor: "rgba(179,181,198,1)",
            data: users,
            }]
        };
    
        const config = {
            type: 'line',
            data: data,
            options: {
                maintainAspectRatio: true,
                title: {
                    display: true,                   
                }
            }
        };
    
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
    @endsection
</x-app-layout>
