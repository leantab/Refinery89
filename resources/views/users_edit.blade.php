<x-app-layout>
    <div class="flex flex-col max-w-7xl mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                <div class="mt-6 mb-6 flex justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                        Edit User
                    </h2>
                    <a href="{{ route('users') }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-500 text-sm leading-4 font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary active:bg-primary-700 transition ease-in-out duration-150">
                        Cancel
                    </a>
                </div>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    <strong class="font-bold">Error!</strong>
                                    <span class="block sm:inline">{{ $error }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <form action="{{ route('users.edit', $user) }}" method="POST" class="max-w-md mx-auto">
                    @csrf

                    <div class="mb-4">
                        <label for="name"
                            class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Name:</label>
                        <input type="text" name="name" id="name" required value="{{ $user->name }}"
                            @if (old('name')) value="{{ old('name') }}" @endif
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="email"
                            class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Email:</label>
                        <input type="email" name="email" id="email" required value="{{ $user->email }}"
                            @if (old('email')) value="{{ old('email') }}" @endif
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="departments"
                            class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Departments:</label>
                        <select name="departments[]" id="departments" multiple required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}" @if ($user->departments->contains($department->id)) selected @endif>
                                    {{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update
                            User</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
