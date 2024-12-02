<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP Verification Form</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-[#4070f4]">
    <div class="container bg-white py-8 px-16 rounded-xl shadow-md flex flex-col items-center justify-center">
        <header>
            <i class="h-16 w-30 bg-[#4070f4] text-4xl rounded-xl" >LOGO</i>
        </header>
        <h4 class="font-bold text-xl">Enter OTP Code</h4>
        <form action="#" class="w-full flex flex-col items-center justify-center">
            {{-- <div class="input-field flex flex-row space-x-4 gap-x-8"> --}}
                <div class="input-field flex flex-row space-x-4">
                    <input class="h-11 w-16 text-center border border-gray-300 rounded-md no-spinner" type="number" max="9" min="0" >
                    <input class="h-11 w-16 text-center border border-gray-300 rounded-md no-spinner" type="number" disabled>
                    <input class="h-11 w-16 text-center border border-gray-300 rounded-md no-spinner" type="number" disabled>
                    <input class="h-11 w-16 text-center border border-gray-300 rounded-md no-spinner" type="number" disabled>
                </div>
                
            {{-- </div> --}}
            <button class="mt-6 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 cursor-pointer">Verify OTP</button>
        </form>
    </div>
</body>
</html>
