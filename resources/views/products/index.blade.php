<x-app-layout>
    <div class="py-12 px-6">
        <ul>
            @foreach ($products as $product)
            <li class="py-2">
                <a href="/products/{{$product->id}}" class="mt-2">{{$product->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>