<i class="ti-shopping-cart @if(Cart::count()) text-danger @endif"></i>
{{-- <span class="badge badge-info">{{ Cart::content()->count() }}</span> --}}
<span class="badge badge-info">{{ Cart::count() }}</span>