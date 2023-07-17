@extends('layouts.plantilla')

@section('title', 'contactUs')

@section('content')
    <div class="flex items-center justify-center p-6 bg-gradient-to-br from-sky-500 to-gray-200">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('contactUs.store') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">Full Name:</label>
                    <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-gray-500 bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('name')
                        <p><strong>{{ $message }}</strong></p>
                    @enderror
                    <br>
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">Email Address:</label>
                    <input type="email" name="email" id="email" placeholder="example@domain.com" class="w-full rounded-md border border-gray-500 bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('email')
                        <p><strong>{{ $message }}</strong></p>
                    @enderror
                    <br>
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">Subject:</label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="w-full rounded-md border border-gray-500 bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('subject')
                        <p><strong>{{ $message }}</strong></p>
                    @enderror
                    <br>
                </div>
                <div class="mb-1">
                    <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">Message:</label>
                    <textarea rows="4" name="message" id="message" placeholder="Type your message" class="w-full resize-none rounded-md border border-gray-500 bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    @error('message')
                        <p><strong>{{ $message }}</strong></p>
                    @enderror
                  
                </div>
                <div class="relative">
                    <button type="submit" class="mt-5 border-2 px-5 py-2 rounded-lg border-gray-500 bg-gray-200 hover:bg-fuchsia-400 hover:border-blue-400 border-b-4 font-black translate-y-2 border-l-4">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif
@endsection
