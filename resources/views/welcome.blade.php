@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-8">Cafe Cerveza Payroll and Attendance System</h1>
        <div class="space-x-4">
            <a href="{{ route('about') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">About</a>
            <a href="{{ route('contact') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Contact</a>
        </div>
    </div>
</div>
@endsection