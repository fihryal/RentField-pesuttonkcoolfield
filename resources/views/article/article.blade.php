@extends('layouts.app')
@section('main')


<section class="h-flex flex justify-center items-center">

    <div class="grid grid-cols-1 gap-4 flex">
        
        <a type="button" href="{{url('article/create')}}" lin class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 text-center mt-24 w-20 item-center item-center">+</a>

        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">

            <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($data as $item)
                <a href="{{url('article/'.$item->id)}}">
                  <li>
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                      <img
                      alt=""
                      src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                      class="h-56 w-full object-cover"
                      />
                      
                      <div class="bg-white p-4 sm:p-6">
                        <time datetime="2022-10-10" class="block text-xs text-gray-500">{{$item -> created_at -> format('Y-m-d')}}</time>
                        
                        <a href="#">
                          <h3 class="mt-0.5 line-clamp-2 text-lg text-gray-900">{{$item -> judul}}</h3>
                        </a>
                        
                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                          {{$item -> article}}
                        </p>
                        
                        <div class="flex justify-between ">
                          <a href="{{url('article/'.$item->id.'/edit')}}" type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-2 mt-5 dark:focus:ring-yellow-900">edit</a>
                          <form action="{{url('article/'.$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mt-5 mb-2 dark:bg-red-600 dark:hover:bg-red-700">Red</button>
                          </form>
                        </div>
                      </div>
                    </article>
                  </li>
                  @endforeach
                </a>
                </ul>
    
        </div>
      </div>

    

</section>

@endsection