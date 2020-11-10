
   @foreach ($products as $product)
     <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div  class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">

                    </div>
                    <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase"> {{$product->name}}</h3>
                        <span class="text-gray-500 mt-2">{{$product->category->name}}</span>
                    </div>
                </div>

   @endforeach
