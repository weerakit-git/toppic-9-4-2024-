<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
    </x-slot> --}}
    @if($title == null)
       <h1>no post</h1> 
    @endif

    @if(session("success"))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if(session("Delete"))
    <div class="alert alert-danger">{{session('Delete')}}</div>
    @endif

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table table-dark table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width:10%">Title</th>
                        <th scope="col" style="width:45%">Content</th>
                        <th scope="col" style="width:15%">Image</th>
                        <th scope="col">Time</th>
                        <th scope="col">Post By</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                      </tr>
                    </thead>
                    @isset($title)
                    <tbody>
                        @php($i=1)
                        @foreach ($title as $row) 
                        <tr>
                            {{-- <th>{{$title->firstItem()+$loop->index}}</th> --}}
                            <th>{{$i++}}</th>
                            <td>{{$row->titel}}</td>
                            <td >{{$row->body}}</td>
                            <td>
                             @isset($row->service_image)  
                                 <img src="{{ asset('img/'.$row->service_image) }}" class="card-img-top" style="width: 150px" alt="...">      
                            @endisset 
                            </td>
                            <td>{{$row->created_at->diffForHumans()}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>
                                <a href="{{url('/page/edit/'.$row->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('/page/delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                     
                        @endforeach
                       

                       
                     </tbody>
                  
                    @endisset

                   
                            
                  </table>


               
        
                 
            </div>
        </div>
       
    </div>
</x-app-layout>
