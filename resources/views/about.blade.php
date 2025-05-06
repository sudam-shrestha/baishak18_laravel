<x-frontend-layout>

    <section>
        <div class="container py-10">
            <h1>Companies Data</h1>

            <table class="w-full border border-collapse text-center border-gray-300">

                <thead>
                    <tr>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Phone</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Address</th>
                        <th class="border p-2">Logo</th>
                        <th class="border p-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($companies as $c)
                        <tr>
                            <td class="border p-2">
                                {{ $c->name }}
                            </td>

                            <td class="border p-2">
                                {{ $c->phone }}
                            </td>

                            <td class="border p-2">
                                {{ $c->email }}
                            </td>

                            <td class="border p-2">
                                {{ $c->address }}
                            </td>

                            <td class="border p-2">
                                <img src="{{ asset($c->logo) }}" class="h-[40px]" alt="">
                            </td>
                            <td class="border p-2">
                                <form action="/delete-company/{{ $c->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-frontend-layout>
