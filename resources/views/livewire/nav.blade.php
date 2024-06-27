<div>
  <div class="bg-[#bdd1ff9e] w-[912px] mx-auto flex justify-start items-center">
    @if(request()->path() != 'dashboard')
    <a class="text-white p-4" wire:navigate href="{{url('dashboard')}}">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
      </svg>
    </a>
    @endif
    <div class="p-4 space-y-3 w-full">
      <div class="text-white mb-3 flex justify-between items-center w-full">
        <div>
          {{auth()->user()->nama}}
        </div>
        <button wire:click="logout" class="text-white">
          Logout
        </button>
      </div>
      @if (auth()->user()->photo)
      <img src="" alt="" srcset="" class="w-[50px] h-[50px]" />
      @else
      {{-- <button class="btn bg-white text-[#040056] text-sm p-2">Upload File</button> --}}
      @endif
    </div>
  </div>
</div>
