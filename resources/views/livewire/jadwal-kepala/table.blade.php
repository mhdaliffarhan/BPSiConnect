<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul Kegiatan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Mulai
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Selesai
                </th>
                <th scope="col" class="px-6 py-3">
                    Warna
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $key => $event)
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap ">
                    {{ $key + 1}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $event->title}}
                </th>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $event->start_date}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $event->end_date}}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <input type="color" name="" id="" value="{{$event->color}}" disabled>
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-between">
                        <div class="w-1/2">
                            <livewire:jadwal-kepala.edit-jadwal :event="$event" />
                        </div>
                        <div class="w-1/2">
                            <livewire:jadwal-kepala.delete-jadwal :event="$event" />
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
