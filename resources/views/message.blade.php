@if (Session::has('error'))
    <div class="bg-red-500 text-white p-4 rounded-lg flex items-center space-x-4">
        <button type="button" class="text-white hover:text-gray-300" data-dismiss="alert" aria-hidden="true">&times;</button>
        <div class="flex items-center space-x-2">
            <i class="fa fa-ban"></i>
            <h4 class="font-semibold">Error!</h4>
        </div>
        <p>{{ Session::get('error') }}</p>
    </div>
@endif

@if (Session::has('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg flex items-center space-x-4">
        <button type="button" class="text-white hover:text-gray-300" data-dismiss="alert" aria-hidden="true">&times;</button>
        <div class="flex items-center space-x-2">
            <i class="fa fa-check"></i>
            <h4 class="font-semibold">Success!</h4>
        </div>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
