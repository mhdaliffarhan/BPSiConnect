<div class="mb-4">
    <!-- Modal toggle -->
    <button
        x-on:click="$dispatch('open-modal', 'tambahJadwalModal')"
        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
        </svg>
        Tambah Jadwal
    </button>


    <x-modal name="tambahJadwalModal" maxWidth="md">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b rounded-t">
            <h3 class="text-lg font-semibold text-gray-900">
                Tambah Jadwal Kepala
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" x-on:click="$dispatch('close-modal', 'tambahJadwalModal')">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        
        <!-- Modal Body -->
        <form class="p-4 md:p-5" wire:submit.prevent="tambahJadwal">
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2"> 
                    <label for="judul-kegiatan" class="block mb-2 text-sm font-medium text-gray-900">Judul Kegiatan</label>
                    <input wire:model="form.judul_kegiatan" type="text" name="judul_kegiatan" id="judul-kegiatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tuliskan judul kegiatan" required>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="tanggal_mulai" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Mulai</label>
                    <input wire:model="form.tanggal_mulai" type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="tanggal_selesai" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Selesai</label>
                    <input wire:model="form.tanggal_selesai" type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="col-span-2">
                    <label for="warna" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Kegiatan</label>
                    <input wire:model="form.warna" type="color" id="warna" name="warna" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="col-span-2">
                    <label for="daskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Kegiatan</label>
                    <textarea wire:model="form.deskripsi" id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tulis deskripsi kegiatan disini"></textarea>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Tambah Jadwal
                </button>
            </div>
        </form>
    </x-modal>
    


</div>
