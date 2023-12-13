<x-app-layout>
    <div class="background">
        @include('layouts.navbar')
        
        <h2 class="title-link">Riwayat Tautan</h2>
        
        <div class="rounded-table">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Original URL</th>
                        <th scope="col">Short URL</th>
                        <th scope="col">Views</th>
                        <th scope="col">Aksi</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach($links as $link)
                    {{-- var_dump({{$links}}); --}}
                    {{-- @for ($i = 1; $i <= ; $i++) --}}
    
                                <tr>
                                    {{-- <td class="px-6 py-4 whitespace-nowrap">{{ $i }}</td> --}}
                                    <td></td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $link->original_url }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ url($link->short_url) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $link->visits }}</td>
                                    <td class="button">
                                        <button type="button" class="btn btn-primary btn-sm">Kustomisasi</button>
                                        <form action="{{ route('data.delete', $link->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit" class="btn btn-danger">Hapus</button>                                        </form>
                                    </td>
                                </tr>
                                {{-- @endfor --}}
                                @endforeach
                </tbody>
              </table>
        </div>
    </div>
    
</x-app-layout>

{{-- <x-app-layout>
    <div class="max-w-6xl mx-auto mt-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Id</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Original URL</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Short URL</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Visits</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr></tr>
                            @foreach($links as $link)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $link->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $link->original_url }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ url($link->short_url) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $link->visits }}</td>
                            </tr>
                            @endforeach
                            <!-- More items... -->
                        </tbody>
                    </table>
                    <div class="m-2 p-2">Pagination</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}