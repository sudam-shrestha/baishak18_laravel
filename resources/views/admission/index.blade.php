<x-frontend-layout>


    <section class="py-20">
        <div class="container">
            <h1 class="text-center text-[32px] mb-5">Admission</h1>
            <form action="{{ route('admission.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-5">

                    <div>
                        <label for="name">Enter Your Name</label>
                        <input type="text" name="name" id="name" class="w-full" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone">Enter Your Phone Number</label>
                        <input type="tel" name="phone" id="phone" class="w-full" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="email">Enter Your Email Address</label>
                        <input type="email" name="email" id="email" class="w-full" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="address">Enter Your Address</label>
                        <input type="tel" name="address" id="address" class="w-full" value="{{ old('address') }}">
                        @error('address')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="course">Select Course</label>
                        <select name="course" id="course" class="w-full">
                            <option value="">Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    {{ old('course') == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                            @endforeach
                        </select>
                        @error('course')
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


    <section>
        <div class="container py-10">
            <h1>Admission Data</h1>

            <table class="w-full border border-collapse text-center border-gray-300">

                <thead>
                    <tr>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Phone</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Address</th>
                        <th class="border p-2">Course</th>
                        <th class="border p-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($admissions as $admission)
                        <tr>
                            <td class="border p-2">
                                {{ $admission->name }}
                            </td>

                            <td class="border p-2">
                                {{ $admission->phone }}
                            </td>

                            <td class="border p-2">
                                {{ $admission->email }}
                            </td>

                            <td class="border p-2">
                                {{ $admission->address }}
                            </td>

                            <td class="border p-2">
                                {{ $admission->course->name }}
                            </td>

                            <td class="border p-2">
                                yyy
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</x-frontend-layout>
