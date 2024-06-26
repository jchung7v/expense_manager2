<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <form action="{{ route('expenses.import') }}" method="post" enctype="multipart/form-data" class="p-3 bg-grey">
                @csrf
                <label for="fileToUpload" class="form-label">Select file to upload: </label>
                <input type="file" class="mt-5 block w-full text-md text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" name="fileToUpload" id="fileToUpload">
                <br>
                <x-primary-button>
                    {{ __('Upload Selected File') }}
                </x-primary-button>
            </form>
        </div>
    </div>

</x-app-layout>
