<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                 <div class="card">
                   <div class="card-body ">
                           <form action="{{route('addpost')}}" method="post" enctype="multipart/form-data">
                            @csrf   
                                    <div>
                                        <label for="Title">Title</label>
                                        <input type="text" class="form-control" name="title_name">
                                            @error('title_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                     <div>
                                        
                                        <label for="content" class="mt-3">Content</label>
                                        <br>
                                        <textarea name="body_name" rows="10" cols="120" class="form-control"></textarea>
                                        <br>
                                     </div>
                                   
                                    <div class="flex ">
                                                <label for="service_image" class="mx-2">Uplode</label>
                                                  <input type="file" class="form-control" name="service_image">
                                    </div>
                                    <div class="float-end">
                                        <input type="submit" style="background-color:rgb(27, 145, 212);padding:10px 15px;cursor:pointer;border-radius:7px;color: white;" class="mt-4"></input>
                                    </div>
                           </form>
                       </div>
                   </div>
           </div>
        </div>
    </div>
</x-app-layout>