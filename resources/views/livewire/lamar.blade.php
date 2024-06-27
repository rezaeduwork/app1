<div class="space-y-4">
  <livewire:nav>
  <div class="w-[912px]">
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Jabatan
      </div>
      <div class="!mt-6 !mb-4">
        <select name="" id="" class="bg-white w-full p-4" wire:model.live="lowongan_id">
          <option value="">-- Pilih Jabatan --</option>
          @foreach (\App\Models\Lowongan::all() as $row)
          <option value="{{$row->lowongan_id}}">{{$row->jabatan_id}}</option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-2 gap-4 w-[912px]">

    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Surat Kesehatan
      </div>
      <div class="!mt-6 !mb-4">
        <input type="file" name="" wire:model.live="surat_kesehatan" id="" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Curriculum Vitae
      </div>
      <div class="!mt-6 !mb-4">
        <input type="file" name="" id="" wire:model.live="cv" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Ijazah Terakhir
      </div>
      <div class="!mt-6 !mb-4">
        <input type="file" name="" id="" wire:model.live="ijazah" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Sertifikasi
      </div>
      <div class="!mt-6 !mb-4">
        <input type="file" name="" id="" wire:model.live="sertifikasi" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        SKCK
      </div>
      <div class="!mt-6 !mb-4">
        <input type="file" name="" id="" wire:model.live="skck" class="bg-white w-full p-4" />
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Kartu Tanda Penduduk
      </div>
      <div class="!mt-6 !mb-4">
        <input type="file" name="" id="" wire:model.live="ktp" class="bg-white w-full p-4" />
      </div>
    </div>
  </div>
  <div class="p-4 w-[912px] bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
    <div class="text-white">
      Note
    </div>
    <div class="!mt-6 !mb-4 text-white">
      <ul class="list-disc list-inside">
        <li>File Harus .pdf</li>
        <li>Maksimal 1 MB</li>
      </ul>
    </div>
    <div>
      <button class="btn bg-white text-[#040056] text-sm p-4" wire:click="store">Lamar</button>
    </div>
  </div>
</div>
