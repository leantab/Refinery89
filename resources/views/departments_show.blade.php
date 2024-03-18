<x-app-layout>
    <div class="flex flex-col max-w-7xl mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                <div class="mt-6 mb-6 flex justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                        Department information
                    </h2>
                    <div>
                        <a href="{{ route('departments.edit', $department) }}"
                            class="inline-flex items-center px-4 py-2 mx-4 border border-gray-500 text-sm leading-4 font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                            Edit
                        </a>
                        <a href="{{ route('departments.destroy', $department) }}"
                            class="inline-flex items-center px-4 py-2 mx-4 border border-red-500 dark:border-red-400 text-sm leading-4 font-medium rounded-md text-red-500 dark:text-red-400 bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                            Delete
                        </a>
                        <a href="{{ route('departments') }}"
                            class="inline-flex items-center px-4 py-2 border border-gray-500 text-sm leading-4 font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                            Back
                        </a>
                    </div>
                </div>

                @if (session()->has('success'))
                    <div class="inline-flex justify-start w-full p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                        role="alert">
                        <span class="font-medium mr-2">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                        </span>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                        role="alert">
                        <span class="font-medium">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </span> {{ session('error') }}
                    </div>
                @endif

                <div class="mb-4">
                    <label for="name"
                        class="block text-gray-500 dark:text-gray-300 text-sm font-bold mb-2">Name:</label>
                    <span class="text-white text-sm font-bold mb-2">{{ $department->name }}</span>
                </div>

                <div class="mb-4">
                    <label for="departments"
                        class="block text-gray-500 dark:text-gray-300 text-sm font-bold mb-2">Subepartment Of:</label>
                    <span
                        class="text-white text-sm font-bold mb-2">{{ $department->subdepartmentOf->name ?? '' }}</span>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
