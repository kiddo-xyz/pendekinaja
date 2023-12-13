


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PendekinAja.com</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="background">
        @include('layouts.navbar')
        <p class="title">
            TAUTAN PUNYA KAMU PANJANG?
        </p>
        <p class="title-main">
            PENDEKIN AJA DISINI!
        </p>
        <p class="paragraph-1">
            <span class="sp-p1">PendekinAja.com</span> adalah teman setia dalam mengubah tautan yang panjang dan rumit menjadi pendek dan mudah dibagikan. Mulai dari tautan situs web, konten media sosial, hingga pesan teks - kami menyediakan solusi instan untuk membuat tautan Anda lebih ringkas.
        </p>
    </div>
    @include('layouts.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

{{-- <x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <section>
                        <h1 class="text-4xl text-blue-800">Short Your Link</h1>
                        @if (session('success message'))
                            {!! session('success message') !!}
                        @endif
                        <form method="POST" action="{{ route('short.url') }}">
                            @csrf
                            <input class="border border-gray-300 rounded-lg" type="url" name="original_url">
                            @error('original_url')
                                <span class="text-red-400 m-2 p-2">{{ $message }}</span>
                            @enderror
                            <button class="m-2 px-6 py-2 bg-green-500 hover:bg-green-700 rounded-lg" type="submit">Short</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> --}}