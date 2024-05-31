<!--resources\views\dashboard.blade.php!-->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

  <h1 class="text-center font-extrabold text-3xl">File Upload by AGENOR</h1><br><br>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <form method="POST" enctype="multipart/form-data" id="upload" action="{{ url('upload') }}" >
                @csrf
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>
                
              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
              <br>

              <div class="col-md-12">
                            @if(session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                            @endif
							
							@include('files', ['files' => session('files', [])])
                </div>
          </div>     
      </form>
	  			  <hr>
      </div> 
	  
</x-app-layout>

