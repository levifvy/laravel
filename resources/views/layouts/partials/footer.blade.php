<footer class="mt-auto bg-gradient-to-r from-green-300 to-purple-500 py-4">

    <div class="container mx-auto flex justify-between px-4 sm:flex-col md:flex-row lg:flex-row xl:flex-row">
        <div class="sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/3">
            <h3 class="text-xl font-bold text-white">Contact Us</h3>
            <a href="{{ route('contactUs.index') }}">
                <p class="text-gray-200 hover:text-blue-400">Leave us your message</p>
            </a>
            <a href="https://www.google.com/maps/place/Instituto+p%C3%BAblico+Puig+Castellar/@41.4555209,2.2020516,18.9z/data=!4m6!3m5!1s0x12a4bcf3c7a3aa23:0x9711d34b7cfe4e4f!8m2!3d41.4554767!4d2.2015741!16s%2Fg%2F1q5ccd875?authuser=0&entry=ttu&g_ep=EgoyMDI1MDMxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                <p class="text-gray-200 hover:text-red-400">Address: Instituto público Puig Castellar, Santa Coloma de Gramenet, Barcelona</p>
            </a>
        </div>

        <div class="sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/3">
            <h3 class="text-xl font-bold text-white">Follow Us</h3>
            <ul class="flex">
                <li><a href="#" class="text-gray-200 hover:text-white">Facebook</a></li>
                <li class="ml-4"><a href="#" class="text-gray-200 hover:text-white">Twitter</a></li>
                <li class="ml-4"><a href="#" class="text-gray-200 hover:text-white">Instagram</a></li>
            </ul>
        </div>

        <div class="sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/3">
            <h3 class="text-xl font-bold text-white">Newsletter</h3>
            <form class="mt-4">
                <div class="flex items-center">
                    <input type="email" placeholder="Enter your email" class="rounded-l-lg py-2 px-4 bg-gray-200 text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:bg-white">
                    <button class="rounded-r-lg bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 focus:outline-none focus:ring-2 focus:ring-purple-600">Subscribe</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Contenedor del mapa --}}
    <div class="mt-6">
        <h3 class="text-center text-xl font-bold text-white mb-2">Find our Officce Here</h3>
        <div id="school-map" class="h-64 w-full"></div>
    </div>
</footer>

<div class="bg-gray-800 text-white text-center py-4">
    {{ __('© 2025 Your Company. All rights reserved.') }}
</div>

{{-- Leaflet CSS --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

{{-- Leaflet JS --}}
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Verificar si el contenedor del mapa existe antes de inicializarlo
        const mapContainer = document.getElementById("school-map");
        if (!mapContainer) return;

        // Coordenadas del Instituto público Puig Castellar
        const lat = 41.4554767;
        const lng = 2.2015741;

        // Inicializar mapa Leaflet
        const map = L.map("school-map").setView([lat, lng], 18);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Añadir marcador del instituto
        L.marker([lat, lng])
            .addTo(map)
            .bindPopup(`
                <strong>Instituto público Puig Castellar</strong><br>
                <em>Santa Coloma de Gramenet, Barcelona</em>
                <img src="/images/school-marker.jpg" style="width: 100px; margin-top: 5px;">
            `)
            .openPopup();
    });
</script>
