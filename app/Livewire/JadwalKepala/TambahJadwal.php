<?php

namespace App\Livewire\JadwalKepala;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Event;

class TambahJadwal extends Component
{
    
    public $form = [
        'judul_kegiatan' => '',
        'tanggal_mulai' => '',
        'tanggal_selesai' => '',
        'warna' => '',
        'deskripsi' => ''
    ];

    public function render()
    {
        return view('livewire.jadwal-kepala.tambah-jadwal');
    }

    public function tambahJadwal(){
        try {
            $validate = $this->validate([
                'form.judul_kegiatan' => 'required',
                'form.deskripsi' => 'nullable',
                'form.tanggal_mulai' => 'required',
                'form.tanggal_selesai' => 'required|after_or_equal:tanggal_mulai',
                'form.warna' => 'required'
            ]);

            $event = Event::create([
                'title' => $this->form['judul_kegiatan'],
                'start_date' => $this->form['tanggal_mulai'],
                'end_date' => $this->form['tanggal_selesai'],
                'color' => $this->form['warna'],
            ]);

            redirect(route('jadwal-kepala'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
