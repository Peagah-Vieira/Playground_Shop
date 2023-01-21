<x-shop-layout>
  <x-slot name="header">
      <div class="bg-blue-600">
          <div class="mx-auto max-w-7xl py-4 px-3 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center">
              <div class="flex w-0 flex-1 items-center justify-center">
                <p class="ml-3 truncate font-medium text-white">
                  <span class="md:hidden">We announced a new product!</span>
                  <span class="hidden md:inline">Big news! We're excited to announce a brand new product.</span>
                  <span class="md:inline underline font-bold pl-2">
                      <a href="">
                          Learn more
                          <i class="fa-solid fa-arrow-right underline"></i>
                      </a>
                  </span>
                </p>
              </div>
            </div>
          </div>
      </div>
  </x-slot>

  {{-- Collections --}}
  <div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
        <h2 class="text-2xl font-bold text-gray-900">Collections</h2>
  
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-sm text-gray-500">Work from home accessories</p>
          </div>
  
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-sm text-gray-500">Work from home accessories</p>
          </div>
  
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-sm text-gray-500">Work from home accessories</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Customers also purchases --}}
  <div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="flex">
            <div class="mt-3">
              <h3 class="text-base text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="text-sm text-gray-500">Work from home accessories</p>
              <p class="text-sm font-bold text-gray-900">$35</p>
            </div>
          </div>
        </div>
  
        <div class="group relative">
          <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="flex">
            <div class="mt-3">
              <h3 class="text-base text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="text-sm text-gray-500">Work from home accessories</p>
              <p class="text-sm font-bold text-gray-900">$35</p>
            </div>
          </div>
        </div>
        
        <div class="group relative">
          <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="flex">
            <div class="mt-3">
              <h3 class="text-base text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="text-sm text-gray-500">Work from home accessories</p>
              <p class="text-sm font-bold text-gray-900">$35</p>
            </div>
          </div>
        </div>

        <div class="group relative">
          <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="flex">
            <div class="mt-3">
              <h3 class="text-base text-gray-900">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="text-sm text-gray-500">Work from home accessories</p>
              <p class="text-sm font-bold text-gray-900">$35</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- Shop By Category --}}
  <div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
        <h2 class="text-2xl font-bold text-gray-900">Shop by Category</h2>
  
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-4 lg:gap-x-6 lg:space-y-0">
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-sm text-gray-500">Work from home accessories</p>
          </div>
  
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-sm text-gray-500">Work from home accessories</p>
          </div>
  
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-sm text-gray-500">Work from home accessories</p>
          </div>

          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Desk and Office
              </a>
            </h3>
            <p class="text-sm text-gray-500">Work from home accessories</p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</x-shop-layout>
