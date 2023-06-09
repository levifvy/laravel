@extends('layouts.plantilla')

@section('title','contactUs')

@section('content')

    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{route('contactUs.store')}}" method="POST">

                @csrf

                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]"> Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-gray-500 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                    @error('name')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
                    <br>
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="example@domain.com" class="w-full rounded-md border border-gray-500 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                    @error('email')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
                    <br>
                </div>
                {{-- <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">Subject</label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                </div> --}}
                <div class="mb-5">
                    <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">Message</label>
                    <textarea rows="4" name="message" id="message" placeholder="Type your message" class="w-full resize-none rounded-md border border-gray-500 bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    @error('message')
                        <p><strong>{{$message}}</strong></p>
                    @enderror
                    <br>
                </div>
                <div>
                    <button type="submit" class="hover:shadow-form rounded-md bg-[#a5b4fc] py-3 px-8 text-base font-semibold text-white outline-none">Submit</button>
                </div>
            </form>
        </div>
    </div>


    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection