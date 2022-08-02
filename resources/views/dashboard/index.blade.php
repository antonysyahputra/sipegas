@extends('layouts.app')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Dashboard
    </h2>
    <!-- Cards -->
    
      
    
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      @foreach ($departments as $department)
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
        <div
          class="p-3 mr-4 
          @switch($department->name)
            @case("YAYASAN")
              text-orange-500 dark:bg-orange-500 dark:text-orange-100
              @break
            @case("SMA")
              text-teal-500 dark:bg-teal-500 dark:text-teal-100
              @break
            @case("SMP")
              text-blue-500 dark:bg-blue-500 dark:text-blue-100
              @break
            @case("SD")
              text-red-500 dark:bg-blue-500 dark:text-blue-100
              @break
            @case("RA")
              text-green-500 dark:bg-green-500 dark:text-green-100
              @break
            @case("TAHFIZH")
              text-purple-500 dark:bg-purple-500 dark:text-purple-100
            @break
             text-orange-500 
            @default
              
          @endswitch
          bg-orange-100 rounded-full"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
          >
            {{ $department->name }}
          </p>
          <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
          >
            {{ $department->employee->count() }}
          </p>
        </div>
      </div>
      @endforeach
      
    </div>
   

    <!-- New Table -->
    
  </div>
@endsection