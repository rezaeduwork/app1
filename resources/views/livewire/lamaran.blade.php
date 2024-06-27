<div class="space-y-4">
  <livewire:nav>
  <div class="w-[912px]">
    @if (auth()->user()->level == 'pelamar')
      <div class="space-y-5">
        @foreach (\App\Models\LowonganPelamar::whereUser_id(auth()->id())->get() as $row)
          @if ($row->hasil_seleksi == 'lulus')
          <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
              <div>
                <p class="font-bold">Selamat lamaran anda pada jabatan {{$row->lowongan->jabatan_id}} telah lulus</p>
              </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    @else
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <table>
        <thead>
          <tr class="text-white">
            <th>Nama</th>
            <th>Surat Kesehatan</th>
            <th>CV</th>
            <th>Ijazah</th>
            <th>KTP</th>
            <th>SKCK</th>
            <th>Sertifikat</th>
            <th>Nilai</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @if (auth()->user()->level == 'pelamar')
            @foreach (\App\Models\LowonganPelamar::whereUser_id(auth()->id())->get() as $row)
            <tr>
              <td class="text-white">{{$row->pelamar->nama ?? ''}}</td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->surat_kesehatan ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->cv ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->ijazah ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->ktp ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->skck ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->sertifikat ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
            </tr>
            @endforeach
          @else
            @foreach (\App\Models\LowonganPelamar::get() as $row)
            <tr>
              <td class="text-white">{{$row->pelamar->nama ?? ''}}</td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->surat_kesehatan ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->cv ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->ijazah ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->ktp ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->skck ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <a href="{{url('storage/'.($row->file->sertifikat ?? ''))}}" class="p-3 bg-white m-3" target="_blank">Cek</a>
              </td>
              <td class="p-4 text-center">
                <div class="text-white">{{$row->skor ?? 'belum dinilai'}}</div>
              </td>
              <td class="p-4 text-center">
                @if ($row->skor)
                <a href="{{url('lamaran/input/'.$row->lowongan_user_id)}}" class="p-3 bg-white m-3" wire:navigate>Ubah</a>
                @else
                <a href="{{url('lamaran/input/'.$row->lowongan_user_id)}}" class="p-3 bg-white m-3" wire:navigate>Input</a>
                @endif
              </td>
            </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
    @endif
  </div>
</div>
