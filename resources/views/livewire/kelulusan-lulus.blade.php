<div class="p-4 space-y-5 bg-[#bdd1ff9e] mx-auto w-full flex flex-col justify-start">
  <div class="flex items-center justify-start font-bold text-white">
    Lulus
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
        <th>ID Penilaian</th>
        <th>Nama</th>
        <th>Kesehatan</th>
        <th>Pengalaman</th>
        <th>Pendidikan</th>
        <th>Sertifikat</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($penilaians as $row)
      <tr>
        <td class="text-center py-5">{{$row->penilaian_id}}</td>
        <td class="text-center py-5">{{$row->user->nama ?? ''}}</td>
        <td class="text-center py-5">{{$row->kesehatan}}</td>
        <td class="text-center py-5">{{$row->pengalaman}}</td>
        <td class="text-center py-5">{{$row->pendidikan}}</td>
        <td class="text-center py-5">{{$row->sertifikat}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="flex justify-end items-center space-x-4">
    <button class="btn bg-white text-[#040056] text-sm p-4" wire:click="paginate('minus')">Sebelum</a>
    <button class="btn bg-white text-[#040056] text-sm p-4" wire:click="paginate('plus')">Sesudah</a>
  </div>
</div>
