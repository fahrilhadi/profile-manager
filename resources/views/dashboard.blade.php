@extends('master')

@section('title')
    Dashboard | Profile Manager App
@endsection

@section('main-content')
    @php
        $id = Auth::user()->id;
        $userProfile = App\Models\User::findOrFail($id);
    @endphp

    <div class="max-w-2xl mx-auto px-4 py-6">
        {{-- Profile Card --}}
        <div class="bg-white border border-gray-200 rounded-xl shadow-lg p-6 mb-6">
            <div class="flex items-center space-x-4">
                <img src="{{ !empty($userProfile->photo) ? asset('/storage/profile/' . $userProfile->photo) : asset('https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/2048px-No_image_available.svg.png') }}" 
                    alt="Photo" 
                    class="w-20 h-20 rounded-full object-cover border border-gray-300">
                <div>
                    <h2 class="text-lg font-semibold">{{ $userProfile->name}}</h2>
                    <p class="text-gray-500">{{ $userProfile->email }}</p>
                </div>
            </div>
        </div>

        {{-- Edit Form --}}
        <div class="bg-white border border-gray-200 rounded-xl shadow-lg p-6">
            <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                {{-- Name --}}
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" name="name" value="{{ old('name', $userProfile->name) }}" autocomplete="off" 
                        class="@error('name') is-invalid @enderror w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email', $userProfile->email) }}" autocomplete="off" 
                        class="@error('email') is-invalid @enderror w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                </div>

                {{-- Photo --}}
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Photo</label>
                    <input type="file" name="photo" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-black">
                </div>

                {{-- Submit --}}
                <button type="submit" 
                    class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
                    Update Profile
                </button>
            </form>
        </div>
    </div>
@endsection