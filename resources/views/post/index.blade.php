<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mx-4 my-4">
                    <a href="{{ route('post.create') }}"
                        class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">
                        Add Post
                    </a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="w-full text-left rounded-lg table-fixed">
                        <thead>
                            <tr class="bg-gray-700 text-gray-200 border border-b-0">
                                <td class="border px-4 py-3">Post</td>
                                {{-- <td class="border px-4 py-3">Image</td> --}}
                                <td class="border px-4 py-3">Time</td>
                                <td class="border px-4 py-3">Day</td>
                                <td class="border px-4 py-3">Date</td>
                                <td class="border px-4 py-3">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $result)
                                <tr
                                    class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                    <td class="border px-6 py-4">
                                        <p class="text-ellipsis overflow-hidden ...">{{ $result->post }}</p>
                                    </td>
                                    {{-- <td class="border px-6 py-4">
                                    <img class="h-6 w-6 rounded-full" src="{{ asset($result->image_post) }}">
                                </td> --}}
                                    <td class="border px-6 py-4">{{ $result->time_post }}</td>
                                    <td class="border px-6 py-4">{{ $result->day_post }}</td>
                                    <td class="border px-6 py-4">{{ $result->date_post }}</td>
                                    <td class="border px-6 py-4">
                                        <div class="flex item-center justify-center">
                                            <a href="{{ route('post.edit', $result->id) }}"
                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('post.destroy', $result->id) }}"
                                                id="form-delete-{{ $result->id }}" role="form" method="POST"
                                                class="btn-group btn-group-justified">
                                                @csrf
                                                @method('delete')

                                                <button
                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110r"
                                                    name="delete" type="submit" title="Hapus Data"
                                                    onclick="deleteFunction({{ $result->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-6">
                        {{ $post->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
