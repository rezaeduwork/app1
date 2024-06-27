<div class="space-y-4">
  <livewire:nav>
  <div class="w-[912px]">
    <div class="p-4 space-y-5 bg-[#bdd1ff9e] mx-auto w-full flex flex-col justify-start">
      <div class="flex items-center justify-end">
        <a class="btn bg-white text-[#040056] text-sm p-4" href="{{url('penilaian/input')}}" wire:navigate>Input Nilai</a>
      </div>
      <div class="flex items-center justify-between">
        <div class="text-white font-bold flex items-center">
          <div>
            Tampilkan {{$total}} Entri
          </div>
        </div>
        <div>
          <input type="text" id="" class="w-full bg-white opacity-90 p-2 text-sm" wire:model.live="search" />
        </div>
      </div>
      <table class="text-white">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Kesehatan</th>
            <th>Pengalaman</th>
            <th>Pendidikan</th>
            <th>Sertifikat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($penilaians as $row)
          <tr>
            <td class="text-center py-5">{{$row->user->nama ?? ''}}</td>
            <td class="text-center py-5">{{$row->kesehatan}}</td>
            <td class="text-center py-5">{{$row->pengalaman}}</td>
            <td class="text-center py-5">{{$row->pendidikan}}</td>
            <td class="text-center py-5">{{$row->sertifikat}}</td>
            <td class="text-center py-5">
              <button class="text-underline" wire:confirm wire:click="delete({{$row->penilaian_id}})">Hapus</button>
              |
              <a href="{{url('penilaian/edit/'.$row->penilaian_id)}}" wire:navigate>Ubah</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="flex justify-end items-center space-x-4">
        <button class="btn bg-white text-[#040056] text-sm p-4" wire:click="paginate('minus')">Sebelum</a>
        <button class="btn bg-white text-[#040056] text-sm p-4" wire:click="paginate('plus')">Sesudah</a>
      </div>
    </div>
  </div>
</div>
