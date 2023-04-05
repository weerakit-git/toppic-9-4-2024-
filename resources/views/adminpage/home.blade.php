<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
    </x-slot> --}}

    @if(session("success"))
    <div class="alert alert-success">{{session('success')}} </div>
    @endif
    @if(session("Delete"))
    <div class="alert alert-danger">{{session('Delete')}}</div>
    @endif

    <div class="container" style="padding-left: 15rem">

    @foreach ($data as $row) 

    <div class="py-12" style="width: 850px ;height: 650px" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"  >
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" >
                <div class="container">
            
                    <div class="card-body">
                       <b>
                        <p class="my-2">User: {{ $row->user->name }}</p>
                    </b> 
                        <h5 class="card-text">{{ $row->title }}</h5>
                        <p class="card-text">{{ $row->body }}</p>
                       
                      </div>
                      @isset($row->service_image)
                      <div class="card mx-3 my-3">
                         
                          <img src="{{ asset('img/'.$row->service_image) }}" class="card-img-top" alt="...">
                             
                     </div>
                     @endisset 
                     <p class=" float-end"><small class="text-muted">{{ $row->created_at->diffForHumans()}}</small></p>
                       <input type="text" name="" id=""  class="form-control" style="border-radius: 5px; margin:20px 0px 20px 0px" placeholder="Comment">
    
                </div>
            </div>
        </div>
        @endforeach
     
</div>

</x-app-layout>