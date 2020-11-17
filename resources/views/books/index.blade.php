
<x-app-layout>
    <x-slot name="header">
     <x-slot name="header">
      <div class="row">
        <div class="col-8">       
        </div>
        <div class="col-md-8 col-12">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('books') }}
            </h2>
        </div>
        <div class="col-md-4 col-12">
          <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addBookModal">
            Add Book
          </button>       
        </div>
      </div>     
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

   <table class="table table-striped table-bordered">
     <thead class="thead-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    @if (isset($books) && count($books)>0)
    @foreach ($books as $book)

    <tr>
      <th scope="row">
        {{ $book->id}}
      </th>
      <td>
          {{ $book->title }}
      </td>
      <td>
          {{ $book->desciption }}
      </td>
      <td>
         {{ $book->category_id }} 
      </td>
    </tr>
    @endforeach
    @endif

 </tbody>
</table>      

            </div>
        </div>
    </div>

    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add  new Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
       <form method="POST" action="{{ url('books') }}"
       enctype="multipart/form-data">
        @csrf 

      <div class="modal-body">
        {{-- Nombre entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">Name</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Book" id="input_name" name="name" aria-label="Category" aria-describedby="basic-addon1"></div>
          </div>
            {{-- descripcion  --}}
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input class="form-control" rows="5" placeholder="description of de book" id="input_description" name="description">
            </div>
          </div>

            {{-- year entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">year</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="number" class="form-control" placeholder="year" id="input_name" name="name" aria-label="Category" aria-describedby="basic-addon1"></div>
           </div>

           {{-- pages entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">pages</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="number" class="form-control" placeholder="Book" id="input_name" name="name" aria-label="Category" aria-describedby="basic-addon1"></div>
           </div>

           {{-- isbn entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">isbn</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Book" id="input_name" name="name" aria-label="Category" aria-describedby="basic-addon1"></div>
           </div>

            {{-- editorial entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">editorial</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Editorial" id="input_name" name="name" aria-label="Category" aria-describedby="basic-addon1"></div>
           </div>

            {{-- edition entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">edition</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="number" class="form-control" placeholder="Edition" id="input_name" name="name" aria-label="Category" aria-describedby="basic-addon1"></div>
           </div>

            {{-- autor entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">autor</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Autor" id="input_name" name="name" aria-label="Category" aria-describedby="basic-addon1"></div>
           </div>

            {{-- cover entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">cover</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="file" class="form-control" id="input_name" name="cover" aria-label="Category" aria-describedby="basic-addon1"></div>
           </div>

            {{-- category book entrada --}}
            <div class="form-group">

            <label for="exampleInputEmail1">cover</label>   
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                <select class="form-control" name="category_id">
                  @if (isset($categories) && count($categories)>0)
                  @foreach ($categories as $category)

                     <option value="{{ $category->id }}">{{  $category->name  }}</option>
                  @endforeach
                  @endif

                  
                </select>

                </div>
           </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
     
    
    </div>
  </div>
</div>
</x-app-layout>


