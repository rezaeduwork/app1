<div class="space-y-4">
  <livewire:nav>
  <div class="w-[912px] max-w-[912px] overflow-x-auto">
    <div class="p-4 space-y-5 bg-[#bdd1ff9e] mx-auto w-full flex flex-col justify-start">
      <div class="flex items-center justify-between text-white">
        <div>
          Manajemen User
        </div>
        <div>
          <a href="{{url('user/add')}}" class="btn bg-white text-[#040056] text-sm p-4" wire:navigate>Tambah User</a>
        </div>
      </div>
      <div class="py-1"></div>
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
      <div class="py-1"></div>
      <table class="text-white">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($penilaians as $row)
          <tr>
            <td class="text-center py-5">{{$row->nama ?? ''}}</td>
            <td class="text-center py-5">{{$row->username}}</td>
            <td class="text-center py-5">
              <div style="width: 50%;">{{Str::limit($row->password, 45, '...')}}</div>
            </td>
            <td class="text-center py-5">{{$row->level}}</td>
            <td class="text-center py-5">
              <a href="{{url('user/edit/'.$row->user_id)}}" class="btn bg-white text-[#040056] text-sm p-4" wire:navigate>Ubah</a>
            </td>
            <td class="text-center py-5">
              <button class="btn bg-white text-[#040056] text-sm p-4" wire:confirm wire:click="delete({{$row->user_id}})">Hapus</button>
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
