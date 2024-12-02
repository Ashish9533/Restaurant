@if(!empty(session('success')))
    <div class="bg-green-100 text-green-800 border border-green-400 rounded p-4" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(!empty(session('error')))
    <div class="bg-red-100 text-red-800 border border-red-400 rounded p-4" role="alert">
        {{ session('error') }}
    </div>
@endif
