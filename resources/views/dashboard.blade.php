
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Painel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Rastreamento de pedidos!") }}
                </div>
            </div>
        </div>
    </div>
    <div id="map" class="mx-auto w-3/4 h-96"></div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Acompanhamento de pedidos!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container flex align-middle justify-center">
        <h1 class="text-white text-center m-60" style="font-size: 52px">Pedido 001</h1>
        <x-timeline :items="$timelineItems" />
    </div>

    <div class="container flex align-middle justify-center">
        <h1 class="text-white text-center m-60" style="font-size: 52px">Pedido 002</h1>
        <x-timeline :items="$timelineItems" />
    </div>

    <div class="container flex align-middle justify-center">
        <h1 class="text-white text-center m-60" style="font-size: 52px">Pedido 003</h1>
        <x-timeline :items="$timelineItems" />
    </div>




    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([51.5074, -0.1278], 12);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>


    <!-- <script>
        function initMap() {
            // Crie uma instância do mapa
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -23.5505, lng: -46.6333}, // Define o centro do mapa com as coordenadas desejadas
                zoom: 12 // Define o nível de zoom do mapa
            });

            // Adicione marcador ou outros componentes do mapa, se necessário
            var marker = new google.maps.Marker({
                position: {lat: -23.5505, lng: -46.6333},
                map: map,
                title: 'Localização da minha pizzaria'
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY')}}&callback=initMap"></script> -->

</x-app-layout>
