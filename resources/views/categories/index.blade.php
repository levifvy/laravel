@extends('layouts.plantilla')

@section('title','Categories')

@section('content')
<div class="bg-image h-screen">
    <div class="grid place-items-center z-9">
        <div class="w-full lg:w-3/6">
                    <div class="bg-white shadow-md rounded-lg my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal rounded-lg">
                                    <th class="py-3 px-6 text-left">Categories & Teams</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            @foreach ($categories as $category)
                                <tbody class="text-gray-600 text-sm font-light">
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <a href="{{ route('categories.show', $category) }}" title="view">
                                                <div class="flex items-center">
                                                    <div class="mr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="24" height="24"
                                                                viewBox="0 0 48 48"
                                                                style=" fill:#000000;">
                                                                <path fill="#80deea" d="M24,34C11.1,34,1,29.6,1,24c0-5.6,10.1-10,23-10c12.9,0,23,4.4,23,10C47,29.6,36.9,34,24,34z M24,16	c-12.6,0-21,4.1-21,8c0,3.9,8.4,8,21,8s21-4.1,21-8C45,20.1,36.6,16,24,16z"></path><path fill="#80deea" d="M15.1,44.6c-1,0-1.8-0.2-2.6-0.7C7.6,41.1,8.9,30.2,15.3,19l0,0c3-5.2,6.7-9.6,10.3-12.4c3.9-3,7.4-3.9,9.8-2.5	c2.5,1.4,3.4,4.9,2.8,9.8c-0.6,4.6-2.6,10-5.6,15.2c-3,5.2-6.7,9.6-10.3,12.4C19.7,43.5,17.2,44.6,15.1,44.6z M32.9,5.4	c-1.6,0-3.7,0.9-6,2.7c-3.4,2.7-6.9,6.9-9.8,11.9l0,0c-6.3,10.9-6.9,20.3-3.6,22.2c1.7,1,4.5,0.1,7.6-2.3c3.4-2.7,6.9-6.9,9.8-11.9	c2.9-5,4.8-10.1,5.4-14.4c0.5-4-0.1-6.8-1.8-7.8C34,5.6,33.5,5.4,32.9,5.4z"></path><path fill="#80deea" d="M33,44.6c-5,0-12.2-6.1-17.6-15.6C8.9,17.8,7.6,6.9,12.5,4.1l0,0C17.4,1.3,26.2,7.8,32.7,19	c3,5.2,5,10.6,5.6,15.2c0.7,4.9-0.3,8.3-2.8,9.8C34.7,44.4,33.9,44.6,33,44.6z M13.5,5.8c-3.3,1.9-2.7,11.3,3.6,22.2	c6.3,10.9,14.1,16.1,17.4,14.2c1.7-1,2.3-3.8,1.8-7.8c-0.6-4.3-2.5-9.4-5.4-14.4C24.6,9.1,16.8,3.9,13.5,5.8L13.5,5.8z"></path><circle cx="24" cy="24" r="4" fill="#80deea"></circle>
                                                        </svg>
                                                    </div>
                                                    <span class="font-medium">{{ $category->name }}</span>
                                                </div>
                                            </a>
                                            
                                        </td>
                                        
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center space-x-4">
                                                <a href="{{ route('categories.show', $category) }}" title="view">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                        {{ __('View') }}
                                                    </div>
                                                </a>
                                                <a href="{{ route('categories.edit', $category) }}" title="edit">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                        {{ __('Edit') }}
                                                    </div>
                                                </a>
                                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" id="deleteForm{{ $category->id }}" title="delete">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="showConfirmationPopup('{{ $category->id }}')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                                
                                                <div id="confirmationPopup{{ $category->id }}" class="confirmation-popup" style="display: none;">
                                                    <div class="font-bold text-2xl">
                                                        <p>You will lose all teams contained in this category.</p>
                                                        <p>Are you sure you want to delete this category?</p>
                                                    </div>
                                                    <br>
                                                    <button type="button" onclick="confirmDelete('{{ $category->id }}')">Yes</button>
                                                    <button type="button" onclick="hideConfirmationPopup('{{ $category->id }}')">No</button>
                                                </div>                                            
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
        </div>
    </div>            
</div>


<style>
    .bg-image {
        background-image: url({{ asset('/img/cancha6.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<style>
    .confirmation-popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #BB1F04;
        padding: 20px;
        border: solid 2px #F162E8;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        z-index: 9999;
        color: #fff;
    }

    .confirmation-popup button {
        background-color: #373590;
        color: #fff;
        border: solid 2px #000;
        padding: 8px 16px;
        margin-right: 8px;
        border-radius: 5px;
        cursor: pointer;
    }
    .confirmation-popup button:hover {
        background-color: #79797E;
    }
</style>
<script>
    function showConfirmationPopup(categoryId) {
        document.getElementById('confirmationPopup' + categoryId).style.display = 'block';
        document.getElementById('deleteForm' + categoryId).addEventListener('submit', function (event) {
            event.preventDefault();
            this.submit();
            hideConfirmationPopup(categoryId);
        });
    }

    function hideConfirmationPopup(categoryId) {
        document.getElementById('confirmationPopup' + categoryId).style.display = 'none';
    }

    function confirmDelete(categoryId) {
        document.getElementById('deleteForm' + categoryId).submit();
    }
</script>
@endsection