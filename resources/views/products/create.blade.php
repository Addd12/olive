<x-app-layout>
    <h1 class="py-2 text-center text-2xl">Create new product</h1>
    <div class="flex flex-col items-center py-6 border-2 border-gray-300 rounded-md">

        <div class="py-2">
            <x-input-label for="name" value="Product name" />
            <x-text-input name="name" type="text" />
            <x-input-error :messages="$errors->get('name')" />
        </div>
        <div class="py-2">
            <x-input-label for="description" value="Product description" />
            <x-text-input name="description" type="text" />
            <x-input-error :messages="$errors->get('description')" />
        </div>
        <div class="py-2">
            <x-input-label for="price" value="Price" />
            <x-text-input name="price" type="text" />
            <x-input-error :messages="$errors->get('price')" />
        </div>
        <div class="py-2">
            <x-input-label for="quantity" value="Quantity" />
            <x-text-input name="quantity" type="number" />
            <x-input-error :messages="$errors->get('quantity')" />
        </div>
        <div class="py-2">
            <x-input-label for="img_url" value="Image" />
            <x-text-input name="img_url" type="file" />
            <x-input-error :messages="$errors->get('img_url')" />
        </div>
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md text-white">Save</button>
    </div>

</x-app-layout>