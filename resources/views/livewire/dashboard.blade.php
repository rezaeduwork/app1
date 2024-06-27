<div class="space-y-4">
  <div class="bg-[#bdd1ff9e] w-[912px] mx-auto">
    <div class="p-4 mb-4">
      <img src="" alt="" srcset="" class="w-[100px] h-[100px]" />
    </div>
  </div>
  <livewire:nav>
  <div class="grid grid-cols-2 gap-4 w-[912px]">
    @if(auth()->user()->level == 'admin')
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Manajemen User
      </div>
      <div class="text-white">
        Atur user.
      </div>
      <div class="!mt-6 !mb-4">
        <a href="{{url('user')}}" wire:navigate class="bg-white text-[#040056] p-4 text-xs">Manajemen User</a>
      </div>
    </div>
    @endif
    @if (auth()->user()->level == 'pelamar')
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Lamar Pekerjaan
      </div>
      <div class="text-white">
        Lamar pekerjaan menjadi petugas keamanan kami.
      </div>
      <div class="!mt-6 !mb-4">
        <a href="{{url('lamar')}}" wire:navigate class="bg-white text-[#040056] p-4 text-xs">Lamar Pekerjaan</a>
      </div>
    </div>
    @endif
    @if(auth()->user()->level == 'hrd')
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Daftar Pelamar
      </div>
      <div class="!mt-6 !mb-4">
        <a class="bg-white text-[#040056] p-4 text-xs" href="{{url('lamaran')}}" wire:navigate>Daftar Pelamar</a>
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Penilaian
      </div>
      <div class="!mt-6 !mb-4">
        <a class="bg-white text-[#040056] p-4 text-xs" href="{{url('penilaian')}}" wire:navigate>Penilaian</a>
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Perangkingan
      </div>
      <div class="!mt-6 !mb-4">
        <a class="bg-white text-[#040056] p-4 text-xs" href="{{url('perangkingan')}}" wire:navigate>Perangkingan</a>
      </div>
    </div>
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Kelulusan
      </div>
      <div class="!mt-6 !mb-4">
        <a class="bg-white text-[#040056] p-4 text-xs" href="{{url('kelulusan')}}" wire:navigate>Kelulusan</a>
      </div>
    </div>
    @elseif(auth()->user()->level == 'pelamar')
    <div class="p-4 bg-[#bdd1ff9e] mx-auto w-full space-y-3 flex flex-col justify-start">
      <div class="text-white">
        Cek hasil
      </div>
      <div class="text-white">
        Cek hasil penerimaan pegawai baru disini.
      </div>
      <div class="!mt-6 !mb-4">
        <a class="bg-white text-[#040056] p-4 text-xs" href="{{url('lamaran')}}" wire:navigate>Cek Hasil</a>
      </div>
    </div>
    @endif
  </div>
</div>
