<x-app-layout>
    <h1 class="py-2 text-center text-2xl">Edit product</h1>
    <div class="mx-auto max-w-2xl flex flex-col items-center py-6 border-2 border-gray-300 rounded-md">
        <form method="POST" action="/products/{{$product->id}}">
            @csrf
            @method('PATCH')
            <div class="py-2">
                <x-input-label for="name" value="Product name" />
                <x-text-input id="name" name="name" type="text" value="{{$product->name}}" required />
                <x-input-error :messages="$errors->get('name')" />
            </div>
            <div class="py-2">
                <x-input-label for="description" value="Description" />
                <x-text-input id="description" name="description" type="text" value="{{$product->description}}"
                    required />
                <x-input-error :messages="$errors->get('description')" />
            </div>
            <div class="py-2">
                <x-input-label for="price" value="Price" />
                <x-text-input id="price" name="price" type="text" value="{{$product->price}}" required />
                <x-input-error :messages="$errors->get('price')" />
            </div>
            <div class="py-2">
                <x-input-label for="quantity" value="Quantity" />
                <x-text-input id="quantity" name="quantity" type="number" value="{{$product->quantity}}" required />
                <x-input-error :messages="$errors->get('quantity')" />
            </div>
            <div class="py-2">
                <x-input-label for="img_url" value="Image" />
                <x-text-input id="img_url" name="img_url" type="file" required />
                <x-input-error :messages="$errors->get('img_url')" />
            </div>
            <x-primary-button class="mt-3">Edit</x-primary-button>
        </form>
    </div>

</x-app-layout>