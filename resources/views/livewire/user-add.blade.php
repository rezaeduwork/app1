<div class="space-y-4">
  <livewire:nav>
  <div class="w-[912px]">
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Tambah User
      </div>
    </div>
  </div>
  <div class="">
    <div class="bg-[#bdd1ff9e] w-[912px] p-4">
      <div class="space-y-4">
        <div class="space-y-2">
          <div class="text-white text-sm">Nama</div>
          <input type="text" id="" wire:model.live="nama" class="w-full bg-white opacity-90 p-2 text-sm" />
        </div>
        <div class="space-y-2">
          <div class="text-white text-sm">Username</div>
          <input type="text" id="" wire:model.live="username" class="w-full bg-white opacity-90 p-2 text-sm" />
        </div>
        <div class="space-y-2">
          <div class="text-white text-sm">Password</div>
          <input type="password" id="" wire:model.live="password" class="w-full bg-white opacity-90 p-2 text-sm" />
        </div>
        <div class="space-y-2">
          <div class="text-white text-sm">Level</div>
          <select class="w-full bg-white opacity-90 p-2 text-sm" wire:model.live="level">
            <option value=""></option>
            <option value="pelamar">Pelamar</option>
            <option value="hrd">HRD</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <button class="btn bg-white text-[#040056] text-sm py-2 w-full" wire:click="store">Simpan</button>
      </div>
    </div>
  </div>
</div>
