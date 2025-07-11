<footer class="mt-24 py-7 bg-gray-100 dark:bg-gray-900 text-gray-700 text-sm">
  <div class="container mx-auto py-10 px-6">
    <!-- Top Banner Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 border-b pb-8">
      <div class="flex items-start gap-4">
        <div class="text-red-500 text-3xl">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <div>
          <h3 class="font-bold uppercase text-sm text-gray-600 dark:text-gray-50">International Shipment</h3>
          <p class="text-gray-600 dark:text-gray-400">Orders are shipped seamlessly between countries</p>
        </div>
      </div>
      <div class="flex items-start gap-4">
        <div class="text-red-500 text-3xl">
          <i class="fas fa-headset"></i>
        </div>
        <div>
          <h3 class="font-bold uppercase text-sm text-gray-600 dark:text-gray-50">Online Support 24/7</h3>
          <p class="text-gray-600 dark:text-gray-400">Orders are shipped seamlessly between countries</p>
        </div>
      </div>
      <div class="flex items-start gap-4">
        <div class="text-red-500 text-3xl">
          <i class="fas fa-sync-alt"></i>
        </div>
        <div>
          <h3 class="font-bold uppercase text-sm text-gray-600 dark:text-gray-50">Money Return</h3>
          <p class="text-gray-600 dark:text-gray-400">Orders are shipped seamlessly between countries</p>
        </div>
      </div>
      <div class="flex items-start gap-4">
        <div class="text-red-500 text-3xl">
          <i class="fas fa-tags"></i>
        </div>
        <div>
          <h3 class="font-bold uppercase text-sm text-gray-600 dark:text-gray-50">Member Discount</h3>
          <p class="text-gray-600 dark:text-gray-400">Orders are shipped seamlessly between countries</p>
        </div>
      </div>
    </div>

    <!-- Middle Content -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mt-10 text-sm">
      <!-- Logo and Contact -->
      <div class="space-y-4">
        <h2 class="text-2xl font-bold text-black text-gray-600 dark:text-gray-50">TokoKu<span class="text-red-500">.</span></h2>
        <p class="text-gray-600 dark:text-gray-400">Solid is the information & experience directed at an end-user</p>
        <p class="text-gray-600 dark:text-gray-400"><strong>Mon - Fri:</strong> 9:00-20:00</p>
        <p class="text-gray-600 dark:text-gray-400"><strong>Call:</strong> 0020 500 · CALL · 000</p>
        <p class="text-gray-600 dark:text-gray-400"><strong>Email:</strong> info@webmail.com</p>
        <div class="flex gap-4 mt-2">
          <a href="#" class="text-black"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-black"><i class="fab fa-youtube"></i></a>
          <a href="#" class="text-black"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-black"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- About -->
      <div>
        <h3 class="font-bold mb-3 text-gray-600 dark:text-gray-50">ABOUT US</h3>
        <p class="text-gray-600 dark:text-gray-400">
          Elegant pink origami design three type of dimensional view and decoration co Great for adding a decorative touch to any room’s decor.
        </p>
      </div>

      <!-- Info -->
      <div>
        <h3 class="font-bold mb-3 text-gray-600 dark:text-gray-50">INFORMATION</h3>
        <ul class="space-y-2">
          <li class="text-gray-600 dark:text-gray-400"><a href="#">About</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">FAQ’s</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">Wishlist</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">Cart</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">Checkout</a></li>
        </ul>
      </div>

      <!-- My Account -->
      <div>
        <h3 class="font-bold mb-3 text-gray-600 dark:text-gray-50">MY ACCOUNT</h3>
        <ul class="space-y-2">
          <li class="text-gray-600 dark:text-gray-400"><a href="#">Wishlist</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">Cart</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">Checkout</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">My Account</a></li>
          <li class="text-gray-600 dark:text-gray-400"><a href="#">Shop</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div>
        <h3 class="font-bold mb-3 text-gray-600 dark:text-gray-50">GET NEWSLETTER</h3>
        <p class="text-gray-600 dark:text-gray-400">Get 10% off your first order! Hurry up</p>
        <div class="mt-3">
            <form action="{{ route('subscribers.store') }}" method="POST">
                @csrf
                <input type="hidden" name="form_name" value="subscribe_form">
                <input type="email" name="email" placeholder="Enter email address"
                    class="w-full px-4 py-2 border rounded-md mb-2" />
                <button class="bg-red-500 text-white px-4 py-2 rounded-md w-full">Subscribe Now</button>
                @if(old('form_name') == 'subscribe_form')
                    <x-alerts.custom />
                @endif

                {{-- If this form submitted --}}
                @if(session('success'))
                    <div class="mt-2 text-green-600 dark:text-green-400">
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>
      </div>
    </div>

    <!-- App Download and Payments -->
    <div class="mt-10 flex flex-col md:flex-row justify-between items-center border-t pt-6 ">
      <div class="mb-4 md:mb-0 text-gray-600 dark:text-gray-50">
        <strong>Order faster with our App!</strong>
        <div class="flex gap-3 mt-2">
          <a href="#" class="flex items-center">
            <i class="fab fa-apple text-gray-500 text-2xl"></i>
          </a>
          <a href="#" class="flex items-center">
            <i class="fab fa-google-play text-gray-500 text-2xl"></i>
          </a>
        </div>
      </div>
      <div class="flex gap-6 text-2xl text-gray-500">
        <i class="fab fa-cc-amazon-pay"></i>
        <i class="fab fa-cc-paypal"></i>
        <i class="fas fa-wallet"></i>
        <i class="fas fa-truck"></i>
      </div>
    </div>
  </div>

  <!-- Bottom Line -->
  <div class="bg-gray-200 py-4 text-center text-xs text-gray-600">
    Copyright & Design By <strong>Tokoku</strong> - {{ date('Y') }}. All rights reserved.
  </div>
</footer>

<x-scripts.footer />
