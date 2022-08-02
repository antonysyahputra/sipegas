@extends('layouts.app')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      {{ $title }}
    </h2>
    <!-- CTA -->
 
    <!-- General elements -->
    
    <div
      class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
    >
      <form action="{{ route('departments.store') }}" method="POST">
          @csrf
        <label for="name" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Nama Department</span>
          <input
            name="name"
            id="name"
            value=""
            class="block w-full mt-1 @error('name') border-red-600 text-sm  @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder=""
          />
          @error('name')
          <span class="text-xs text-red-600 dark:text-red-400">
            {{ $message }}
          </span>
          @enderror
        </label>
        <label for="npsn" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">NPSN</span>
          <input
            name="npsn"
            id="npsn"
            value=""
            class="block w-full mt-1 @error('npsn') border-red-600 text-sm  @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder=""
          />
          @error('npsn')
          <span class="text-xs text-red-600 dark:text-red-400">
            {{ $message }}
          </span>
          @enderror
        </label>
        <label for="acreditation" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Akreditasi</span>
          <input
            name="acreditation"
            id="acreditation"
            value=""
            class="block w-full mt-1 @error('acreditation') border-red-600 text-sm  @enderror dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder=""
          />
          @error('acreditation')
          <span class="text-xs text-red-600 dark:text-red-400">
            {{ $message }}
          </span>
          @enderror
        </label>
        <button type="submit" class="flex items-center justify-center mt-3 px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Kirim</button>
      </form>
    </div>
  </div>
@endsection