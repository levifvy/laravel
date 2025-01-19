<footer class="bg-gradient-to-r from-green-300 to-purple-500 py-4">
    <div class="container mx-auto flex justify-between px-4 sm:flex-col md:flex-row lg:flex-row xl:flex-row">
        <div class="sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/3">
            <h3 class="text-xl font-bold text-white">Contact Us</h3>
            <a href="{{ route('contactUs.index') }}"><p class="text-gray-200 hover:text-blue-400">Leave us your message</p></a>
            <a href="https://maps.app.goo.gl/xueZQ8GKYpEjYe11A" target="_blank"><p class="text-gray-200 hover:text-red-400">Address: Av. de l'Anselm de Riu, 10, 08924 Santa Coloma de Gramenet, Barcelona</p></a>
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
</footer>
<div class="bg-gray-800 text-white text-center py-4">
    {{ __('© 2025 Your Company. All rights reserved.') }}
</div>
