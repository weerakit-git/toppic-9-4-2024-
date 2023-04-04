<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
    </x-slot>
    

     
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
                            <tbody>
                                @php($i=1)
                                @foreach ($title as $row) 
                                   @foreach ($users as $col) 
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$row->titel}}</td>
                                <td >{{$row->body}}</td>
                                <td>
                                    <img src="{{asset($row->service_image)}}" alt="">
                                </td>
                                <td>{{$row->created_at->diffForHumans()}}</td>
                                <td>{{$col->name}}</td>
                                <td>
                                    <a href="{{url('/page/edit/'.$row->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{url('/page/delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                  </table>
        
                 
            </div>
        </div>
       
    </div>
</x-app-layout>
