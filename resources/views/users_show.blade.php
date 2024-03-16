<x-app-layout>
    <div class="flex flex-col max-w-7xl mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <h1 class="text-2xl font-bold mb-4">User Information</h1>
                    <div class="flex">
                        <div class="w-1/2">
                            <p class="font-bold">Name:</p>
                            <p>{{ $user->name }}</p>
                        </div>
                        <div class="w-1/2">
                            <p class="font-bold">Email:</p>
                            <p>{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
