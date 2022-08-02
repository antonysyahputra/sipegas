@extends('layouts.app')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      {{ $title }}
    </h2>
    <div class="w-6/12 overflow-hidden mb-4 rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        {{-- <th class="w-4/12 px-4 py-3">Tanggal Diterima</th>
                        <td>:</td> --}}
                        <td class="text-left py-3 px-4">
                            <img
                            class="object-cover w-full h-full"
                            src="{{ asset('storage/'. $employee->image) }}"
                            alt="Foto Profile"
                            loading="lazy"
                          />
                        </td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="w-4/12 px-4 py-3">Nama</th>
                        <td>:</td>
                        <td class="text-left">{{ $employee->name }}</td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="w-4/12 px-4 py-3">Jenis Kelamin</th>
                        <td>:</td>
                        <td class="text-left">{{ $employee->gender }}</td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="w-4/12 px-4 py-3">Department</th>
                        <td>:</td>
                        <td class="text-left">{{ $employee->department->name }}</td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="w-4/12 px-4 py-3">No HP</th>
                        <td>:</td>
                        <td class="text-left">{{ $employee->phone_number }}</td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="w-4/12 px-4 py-3">Email</th>
                        <td>:</td>
                        <td class="text-left">{{ $employee->email }}</td>
                    </tr>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="w-4/12 px-4 py-3">Tanggal Diterima</th>
                        <td>:</td>
                        <td class="text-left">{{ $employee->hire_date }}</td>
                    </tr>
                    
                </thead>
            </table>
        </div>
    </div>
</div>


@endsection