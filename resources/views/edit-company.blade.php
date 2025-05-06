<x-frontend-layout>


    <section class="py-20">
        <div class="container">
            <h1 class="text-center text-[32px] mb-5">Company Edit</h1>
            <form action="/update-company/{{ $company->id }}" method="post" enctype="multipart/form-data">
                @csrf   
                @method('patch')
                <div class="grid grid-cols-2 gap-5">

                    <div>
                        <label for="name">Enter Company Name</label>
                        <input type="text" name="name" id="name" class="w-full" value="{{ $company->name }}">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone">Enter Company Phone</label>
                        <input type="text" name="phone" id="phone" class="w-full"
                            value="{{ $company->phone }}">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="email">Enter Company Email</label>
                        <input type="text" name="email" id="email" class="w-full"
                            value="{{ $company->email }}">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="address">Enter Company Address</label>
                        <input type="text" name="add" id="address" class="w-full"
                            value="{{ $company->address }}">
                        @error('add')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="logo">Upload Company Logo</label>
                        <input type="file" name="logo" id="logo" class="w-full">
                        <img src="{{ asset($company->logo) }}" alt="">
                        @error('logo')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="cursor-pointer bg-green-500 text-white py-2 px-5 rounded-md">Update
                            Record</button>
                    </div>

                </div>

            </form>
        </div>
    </section>

</x-frontend-layout>
