<x-app-layout>
    <div class="bg-white">
        <div class="pt-6 mx-3">
            <div class="flex justify-end px-6 mr-9">
                @can('update', $product)
                    <div class="px-3">
                        <a href="/products/edit/{{$product->id}}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md text-white">Edit</a>
                    </div>
                    <div>
                        <form method="POST" action="/products/{{$product->id}}">
                            @method('DELETE')
                            @csrf
                            <button class="inline-flex items-center px-4 py-2 bg-red-800 dark:bg-red-200 border border-transparent rounded-md text-white">Delete</button>
                        </form>
                    </div>
                @endcan
            </div>
            <!-- Product information -->
            <div class="mx-auto my-6 sm:px-6 lg:grid lg:max-w-6xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                    <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-02-featured-product-shot.jpg"
                        alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                </div>
                <div>
                    <div class="flex justify-between">
                        <div class="">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$product->name}}
                            </h1>
                        </div>
                        <div>
                            <p class="text-3xl tracking-tight text-gray-900">€ {{$product->price}}</p>
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                        <h2 class="sr-only">Product information</h2>

                        <!-- Reviews -->
                        <div class="mt-6">
                            <h3 class="sr-only">Reviews</h3>
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p class="sr-only">4 out of 5 stars</p>
                                <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                    reviews</a>
                            </div>
                        </div>

                        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:pb-16 lg:pr-8 lg:pt-6">
                            <!-- Description -->
                            <div>
                                <h3 class="sr-only">Description</h3>

                                <div class="space-y-6">
                                    <p class="text-base text-gray-900">{{$product->description}}</p>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                                <div class="mt-4">
                                    <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                        <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn
                                                locally</span>
                                        </li>
                                        <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                                colors</span></li>
                                        <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp;
                                                pre-shrunk</span>
                                        </li>
                                        <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100%
                                                cotton</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form class="mt-10">

                            <!-- Sizes -->
                            <div class="mt-10">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm font-medium text-gray-900">Size</h3>
                                </div>

                                <fieldset aria-label="Choose a size" class="mt-4">
                                    <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium uppercase text-gray-200 hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                            <input type="radio" name="size-choice" value="0.5 L" disabled
                                                class="sr-only">
                                            <span>0.5 L</span>
                                            <span aria-hidden="true"
                                                class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                                <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200"
                                                    viewBox="0 0 100 100" preserveAspectRatio="none"
                                                    stroke="currentColor">
                                                    <line x1="0" y1="100" x2="100" y2="0"
                                                        vector-effect="non-scaling-stroke" />
                                                </svg>
                                            </span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                            <input type="radio" name="size-choice" value="1 L" class="sr-only">
                                            <span>1 L</span>
                                            <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                            <input type="radio" name="size-choice" value="1.5 L" class="sr-only">
                                            <span>1.5 L</span>
                                            <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label
                                            class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                            <input type="radio" name="size-choice" value="2 L" class="sr-only">
                                            <span>2 L</span>
                                            <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <button type="submit"
                                class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                                to bag</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>