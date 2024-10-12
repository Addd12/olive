<x-app-layout>
    <form method="POST" action="/products/{{$product->id}}">
        @csrf
        @method('PATCH')
        <div class="py-2">
            <x-input-label for="name" value="Product name" />
            <x-text-input id="name" name="name" type="text" value="{{$product->name}}"/>
        </div>
        <div class="py-2">
            <x-input-label for="description" value="Description" />
            <x-text-input id="description" name="description" type="text" value="{{$product->description}}"/>
        </div>
        <div class="py-2">
            <x-input-label for="price" value="Price" />
            <x-text-input id="price" name="price" type="text" value="{{$product->price}}"/>
        </div>
        <div class="py-2">
            <x-input-label for="quantity" value="Quantity" />
            <x-text-input id="quantity" name="quantity" type="number" value="{{$product->quantity}}"/>
        </div>
        <div class="py-2">
            <x-input-label for="img_url" value="Image" />
            <x-text-input id="img_url" name="img_url" type="file" />
        </div>
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md text-white">Update</button>
    </form>
</x-app-layout>