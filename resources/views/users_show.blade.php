<x-app-layout>
    <div class="flex flex-col max-w-7xl mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                <div class="mt-6 mb-6 flex justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                        User information
                    </h2>
                    <div class="inline-flex justify-between">
                        <a href="{{ route('users.edit', $user) }}"
                            class="inline-flex items-center px-4 py-2 mx-4 border border-gray-500 text-sm leading-4 font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                            Edit
                        </a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 mx-4 border border-red-500 text-sm leading-4 font-medium rounded-md text-red-500 dark:text-red-400 bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                                Delete
                            </button>
                        </form>
                        <a href="{{ route('users') }}"
                            class="inline-flex items-center px-4 py-2 border border-gray-500 text-sm leading-4 font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                            Back
                        </a>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="name"
                        class="block text-gray-500 dark:text-gray-300 text-sm font-bold mb-2">Name:</label>
                    <span class="text-white text-sm font-bold mb-2">{{ $user->name }}</span>
                </div>

                <div class="mb-4">
                    <label for="email"
                        class="block text-gray-500 dark:text-gray-300 text-sm font-bold mb-2">Email:</label>
                    <span class="text-gray-800 dark:text-white text-sm font-bold mb-2">{{ $user->email }}</span>
                </div>

                <div class="mb-4">
                    <label for="departments"
                        class="block text-gray-500 dark:text-gray-300 text-sm font-bold mb-2">Departments:</label>
                    <ul>
                        @foreach ($user->departments as $department)
                            <li class="text-gray-700 dark:text-white text-sm font-bold mb-2">{{ $department->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
