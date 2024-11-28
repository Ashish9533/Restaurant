<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Datatable CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
</head>
<body class="bg-gray-200 overflow-hidden">
   

<div class="flex flex-col h-screen w-full shadow-lg rounded-t-none rounded-l-lg rounded-r-lg rounded-b-xl border-solid border-4 dark:bg-gray-900 transition-colors duration-200">

@include('layouts.navbar') 
@include('layouts.sidebar')

@include('layouts.content')

{{-- @include('user-access') --}}
{{-- @include('role-permission-popup') --}}

</div>
</body>
</html>