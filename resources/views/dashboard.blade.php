<x-app-layout>
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
        <div class="border-input">
        <p class="title-secondary">
            @if(auth()->check())
                Selamat Datang! <span class="sp2">{{ auth()->user()->name}}</span>
            @endif
        </p>
            <p class="title-third">
                Mau pendekin apa hari ini?
            </p>
            <p class="message-success">
                @if (session('success message'))
                                    {!! session('success message') !!}
                                @endif
            </p>
                            <form class="input-link" method="POST" action="{{ route('short.url') }}">
                                @csrf
                                <input class="border border-gray-300 rounded-lg" type="url" name="original_url">
                                @error('original_url')
                                    <span class="text-red-400 m-2 p-2">{{ $message }}</span>
                                @enderror
                                <button class="m-2 px-6 py-2 bg-green-500 hover:bg-green-700 text-colot:white rounded-lg" type="submit">Pendekin!</button>
                            </form>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>

