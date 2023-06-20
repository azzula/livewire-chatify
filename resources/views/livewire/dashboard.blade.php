<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <h1 class="mt-8 text-2xl font-medium text-gray-900">
                    Welcome to your livewireChatify application!
                </h1>
            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 p-6 lg:p-8">
                <div>
                    <div class="bg-gradient-to-r from-blue-600 to-blue-300 text-white shadow-xl rounded-lg p-6 lg:p-8 font-semibold">
                        <p class="text-lg">Pengguna Terdaftar</p>
                        <p class="mt-4 text-4xl">{{ $users }}</p>
                    </div>
                </div>

                <div>
                    <div class="bg-gradient-to-r from-gray-600 to-gray-300 text-white shadow-xl rounded-lg p-6 lg:p-8 font-semibold">
                        <p class="text-lg">Pesan Terkirim</p>
                        <p class="mt-4 text-4xl">{{ $messages }}</p>
                    </div>
                </div>

                <div>
                    <div class="bg-gradient-to-r from-gray-600 to-gray-300 text-white shadow-xl rounded-lg p-6 lg:p-8 font-semibold">
                        <p class="text-lg">Pelanggaran Terdeteksi</p>
                        <p class="mt-4 text-4xl">Coming Soon</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>