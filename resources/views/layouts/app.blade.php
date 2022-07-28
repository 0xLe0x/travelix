<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>        
    </body>
    @yield('scripts')
    <script>
        async function web3Login() {
            if (!window.ethereum) {
                alert('MetaMask not detected. Please install MetaMask first.');
                return;
            }

            const provider = new ethers.providers.Web3Provider(window.ethereum);

            let response = await fetch('/web3-login-message');
            const message = await response.text();

            await provider.send("eth_requestAccounts", []);
            const address = await provider.getSigner().getAddress();
            const signature = await provider.getSigner().signMessage(message);

            response = await fetch('/web3-login-verify', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    'address': address,
                    'signature': signature,
                    '_token': '{{ csrf_token() }}'
                })
            });
            const data = await response.text();

            console.log(data);
        }
    </script>
</html>
