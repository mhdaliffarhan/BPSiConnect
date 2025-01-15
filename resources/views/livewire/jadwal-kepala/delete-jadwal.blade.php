<div>
    <a href="#" class="font-medium text-red-600  hover:underline" x-on:click="$dispatch('open-modal', 'deleteJadwalModal{{$event->id}}')">Hapus</a>

    <x-modal name="deleteJadwalModal{{$event->id}}" maxWidth="md">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b rounded-t">
            <h3 class="text-lg font-semibold text-gray-900">
                Hapus Jadwal
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" x-on:click="$dispatch('close-modal', 'deleteJadwalModal{{$event->id}}')">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
    </x-modal>
</div>
