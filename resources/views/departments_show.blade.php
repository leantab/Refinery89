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
