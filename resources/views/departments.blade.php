<x-app-layout>
    <div class="flex flex-col max-w-7xl mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="mt-6 mb-6 flex justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                        Departments
                    </h2>
                    <a href="{{ route('departments.create') }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-500 text-sm leading-4 font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                        Add Department
                    </a>
                </div>
                <div class="overflow-hidden">
                    <table class="min-w-full text-center text-sm font-light text-surface dark:text-white">
                        <thead
                            class="border-b border-neutral-200 bg-[#332D2D] font-medium text-white dark:border-white/10">
                            <tr>
                                <th scope="col" class=" px-6 py-4">#</th>
                                <th scope="col" class=" px-6 py-4">Name</th>
                                <th scope="col" class=" px-6 py-4">Subdepartment Of</th>
                                <th scope="col" class=" px-6 py-4"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr
                                    class="border-b border-neutral-200 hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $department->id }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $department->name }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">
                                        {{ $department->subdepartmentOf->name ?? '' }}</td>
                                    <td class="flex justify-between whitespace-nowrap  px-6 py-4">
                                        <a href="/departments/{{ $department->id }}"
                                            class="text-primary-600 hover:text-primary-900">View</a>
                                        <a href="/departments/edit/{{ $department->id }}"
                                            class="text-primary-600 hover:text-primary-900">Edit</a>
                                        <form action="/departments/delete/{{ $department->id }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
