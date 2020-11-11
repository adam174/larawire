  <main class="my-8">
        <div class="container mx-auto px-6">
            <h3 class="text-gray-700 text-2xl font-medium">Wrist Watch</h3>
            <span class="mt-3 text-sm text-gray-500">200+ Products</span>
          <div class="grid gap-6 xl:grid-cols-1">
<div class="bg-white shadow w-64 my-2">

     @foreach ($categories as $category)


     <button wire:click="filterProducts({{$category->id}})" class="block p-4 text-grey-darker font-bold border-purple hover:bg-grey-lighter border-r-4">{{$category->name}}</button>


    @endforeach

</div>
          </div>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">


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

            </div>
            <div class="flex justify-center">
                <div class="flex rounded-md mt-8">
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                </div>
            </div>
        </div>
    </main>

