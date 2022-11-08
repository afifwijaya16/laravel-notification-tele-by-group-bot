<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div>
                            {{-- <label>Image Post</label>
                            <input type="file" name="image_post"
                                class="w-full bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2">
                            @error('image_post')
                            <div class="text-red-600 p-2 shadow-sm rounded mt-2">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </div>

                        <div class="mt-5">
                            <label>Post</label>
                            <textarea name="post"
                                class="
                                form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlTextarea1" rows="3" maxlength="281" placeholder="Your message">{{ $post->post }}</textarea>
                            @error('post')
                                <div class="text-red-600 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label>Date</label>
                            <br>
                            <input type="date" name="date_post" value="{{ $post->date_post }}"
                                class=" bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                                placeholder="date_post">
                            @error('date_post')
                                <div class="text-red-600 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label>Date</label>
                            <br>
                            <div class="flex">
                                <div class="mb-3 xl:w-96">
                                    <select
                                        class="form-select appearance-none
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding bg-no-repeat
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        aria-label="Default select example" name="day_post">
                                        <option selected>Select day</option>
                                        <option value="monday"
                                            @if ($post->day_post == 'monday') {{ 'selected' }} @endif>Monday</option>
                                        <option value="tuesday"
                                            @if ($post->day_post == 'tuesday') {{ 'selected' }} @endif>Tuesday
                                        </option>
                                        <option value="wednesday"
                                            @if ($post->day_post == 'wednesday') {{ 'selected' }} @endif>Wednesday
                                        </option>
                                        <option value="thursday"
                                            @if ($post->day_post == 'thursday') {{ 'selected' }} @endif>Thursday
                                        </option>
                                        <option value="friday"
                                            @if ($post->day_post == 'friday') {{ 'selected' }} @endif>Friday
                                        </option>
                                        <option value="saturday"
                                            @if ($post->day_post == 'saturday') {{ 'selected' }} @endif>Saturday
                                        </option>
                                        <option value="sunday"
                                            @if ($post->day_post == 'sunday') {{ 'selected' }} @endif>Sunday
                                        </option>
                                    </select>
                                </div>
                            </div>
                            @error('day_post')
                                <div class="text-red-600 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label>Time</label>
                            <br>
                            <input type="time" name="time_post" value="{{ $post->time_post }}"
                                class="w-80 bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white mt-2"
                                placeholder="time_post">
                            @error('time_post')
                                <div class="text-red-600 p-2 shadow-sm rounded mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <button type="submit"
                                class="bg-indigo-500 text-white p-2 rounded shadow-sm focus:outline-none hover:bg-indigo-700">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
