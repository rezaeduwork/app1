<div class="space-y-4">
  <livewire:nav>
  <div class="w-[912px]">
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Pelamar
      </div>
      <div class="!mt-6 !mb-4">
        <input type="text" name="" id="" class="bg-white w-full p-4" value="{{$penilaian->lamaran->pelamar->nama}} - {{$penilaian->lamaran->lowongan->jabatan_id}}" disabled />
      </div>
    </div>
  </div>
  <div class="grid grid-cols-2 gap-4 w-[912px]">

    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Kesehatan
      </div>
      <div class="!mt-6 !mb-4">
        <input type="number" name="" wire:model.live="kesehatan" id="" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Pengalaman
      </div>
      <div class="!mt-6 !mb-4">
        <input type="number" name="" wire:model.live="pengalaman" id="" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Pendidikan
      </div>
      <div class="!mt-6 !mb-4">
        <input type="number" name="" wire:model.live="pendidikan" id="" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Sertifikat
      </div>
      <div class="!mt-6 !mb-4">
        <input type="number" name="" wire:model.live="sertifikat" id="" class="bg-white w-full p-4" />
      </div>
    </div>

  </div>
  <div class="p-4 w-[912px] bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
    <div>
      <button class="btn bg-white text-[#040056] text-sm p-4" wire:click="store">Simpan</button>
    </div>
  </div>
</div>
