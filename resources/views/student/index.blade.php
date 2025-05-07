<x-frontend-layout>

    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1>Student Data</h1>
                <a href="{{ route('student.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">add new</a>
            </div>

            <table class="w-full border border-collapse text-center border-gray-300">

                <thead>
                    <tr>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Phone</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Is Premium</th>
                        <th class="border p-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="border p-2">
                                {{ $student->name }}
                            </td>

                            <td class="border p-2">
                                {{ $student->phone }}
                            </td>

                            <td class="border p-2">
                                {{ $student->email }}
                            </td>

                            <td class="border p-2">
                                {{ $student->is_premium }}
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
