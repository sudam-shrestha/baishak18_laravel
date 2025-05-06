<x-frontend-layout>


    <section class="py-20">
        <div class="container">
            <h1 class="text-center text-[32px] mb-5">Course Create</h1>
            <form action="/save-course" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-5">

                    <div>
                        <label for="name">Enter Course Name</label>
                        <input type="text" name="name" id="name" class="w-full" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="price">Enter Course Price</label>
                        <input type="text" name="price" id="price" class="w-full" value="{{ old('price') }}">
                        @error('price')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="description">Enter Course Description</label>
                        {{-- <input type="text" name="description" id="description" class="w-full" value="{{ old('description') }}"> --}}
                        <textarea name="description" id="description" class="w-full">
                            {{ old('description') }}
                        </textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="image">Upload Course Image</label>
                        <input type="file" name="image" id="image" class="w-full">
                        @error('image')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="cursor-pointer bg-green-500 text-white py-2 px-5 rounded-md">Save
                            Record</button>
                    </div>

                </div>

            </form>
        </div>
    </section>

</x-frontend-layout>
