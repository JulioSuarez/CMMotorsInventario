@extends('navegador')

@section('Contenido')
<div class="relative z-10" role="dialog" aria-modal="true">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

  <div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
          To: "opacity-100 translate-y-0 md:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 md:scale-100"
          To: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
      -->
      <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pt-14 pb-8 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
          <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8"
          @click="open = false">
            <span class="sr-only">Close</span>
            <!-- Heroicon name: outline/x-mark -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>

          <div class="grid w-full grid-cols-1 items-start gap-y-8 gap-x-6 sm:grid-cols-12 lg:gap-x-8">
            <div class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
              <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
            </div>
            <div class="sm:col-span-8 lg:col-span-7">
              <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">Basic Tee 6-Pack</h2>

              <section aria-labelledby="information-heading" class="mt-2">
                <h3 id="information-heading" class="sr-only">Product information</h3>

                <p class="text-2xl text-gray-900">$192</p>

                <!-- Reviews -->
                <div class="mt-6">
                  <h4 class="sr-only">Reviews</h4>
                  <div class="flex items-center">
                    <div class="flex items-center">
                      <!--
                        Heroicon name: mini/star

                        Active: "text-gray-900", Default: "text-gray-200"
                      -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                      </svg>

                      <!-- Heroicon name: mini/star -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                      </svg>

                      <!-- Heroicon name: mini/star -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                      </svg>

                      <!-- Heroicon name: mini/star -->
                      <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                      </svg>

                      <!-- Heroicon name: mini/star -->
                      <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <p class="sr-only">3.9 out of 5 stars</p>
                    <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                  </div>
                </div>
              </section>

              <section aria-labelledby="options-heading" class="mt-10">
                <h3 id="options-heading" class="sr-only">Product options</h3>

                <form>
                  <!-- Colors -->
                  <div>
                    <h4 class="text-sm font-medium text-gray-900">Color</h4>

                    <fieldset class="mt-4">
                      <legend class="sr-only">Choose a color</legend>
                      <span class="flex items-center space-x-3">
                        <!--
                          Active and Checked: "ring ring-offset-1"
                          Not Active and Checked: "ring-2"
                        -->
                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                          <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                          <span id="color-choice-0-label" class="sr-only"> White </span>
                          <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                        </label>

                        <!--
                          Active and Checked: "ring ring-offset-1"
                          Not Active and Checked: "ring-2"
                        -->
                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                          <input type="radio" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                          <span id="color-choice-1-label" class="sr-only"> Gray </span>
                          <span aria-hidden="true" class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                        </label>

                        <!--
                          Active and Checked: "ring ring-offset-1"
                          Not Active and Checked: "ring-2"
                        -->
                        <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                          <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                          <span id="color-choice-2-label" class="sr-only"> Black </span>
                          <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                        </label>
                      </span>
                    </fieldset>
                  </div>

                  <!-- Sizes -->
                  <div class="mt-10">
                    <div class="flex items-center justify-between">
                      <h4 class="text-sm font-medium text-gray-900">Size</h4>
                      <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                    </div>

                    <fieldset class="mt-4">
                      <legend class="sr-only">Choose a size</legend>
                      <div class="grid grid-cols-4 gap-4">
                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                          <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                          <span id="size-choice-0-label">XXS</span>

                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>

                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                          <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                          <span id="size-choice-1-label">XS</span>

                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>

                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                          <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                          <span id="size-choice-2-label">S</span>

                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>

                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                          <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                          <span id="size-choice-3-label">M</span>

                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>

                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                          <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                          <span id="size-choice-4-label">L</span>

                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>

                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                          <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                          <span id="size-choice-5-label">XL</span>

                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>

                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                          <input type="radio" name="size-choice" value="XXL" class="sr-only" aria-labelledby="size-choice-6-label">
                          <span id="size-choice-6-label">XXL</span>

                          <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                          -->
                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                        </label>

                        <!-- Active: "ring-2 ring-indigo-500" -->
                        <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-gray-50 text-gray-200 cursor-not-allowed">
                          <input type="radio" name="size-choice" value="XXXL" disabled class="sr-only" aria-labelledby="size-choice-7-label">
                          <span id="size-choice-7-label">XXXL</span>

                          <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                              <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                            </svg>
                          </span>
                        </label>
                      </div>
                    </fieldset>
                  </div>

                  <button type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
                </form>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection