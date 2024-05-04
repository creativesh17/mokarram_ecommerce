<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Newsletter;
use App\Models\Product;
use App\Models\ProductReview;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// use Cart;

class WebsiteController extends Controller
{

    public function home() {
        Cart::destroy();
        // dd(Carbon::now()->subDay());
        $topCateAll = Category::where('is_top_category', 1)->orderBy("id","asc")->limit(8)->get();
        $specialProducts = Product::has('discount')->limit(10)->get();
        return view('website.layouts.home', compact('topCateAll', 'specialProducts'));
    }

    public function aboutus() {
        return view('website.pages.about');
    }

    public function terms() {
        return view('website.pages.terms');
    }

    public function privacy_policy() {
        return view('website.pages.privacy_policy');
    }

    public function category_product($slug) {
        $min = rand(1, 100);
        $max = rand(1000, 900000);
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            $categories = $category->products()->paginate();
            return view('website.pages.category_products', compact('category', 'categories', 'min', 'max'));
        }

        return "404 not found";

        // return view('website.pages.category_products', compact('category', 'categories', 'min_product_price', 'max_product_price'));
    }

    public function product_details($url) {
        
        // $url = request()->get('modal_id');

        $sumStar = null;
        $product = Product::where('product_url', $url)
            ->withSum('stocks', 'qty')
            ->withSum('sales', 'qty')
            ->with('product_brand')
            ->first();
        // return $product->categories;

        $category = $product->categories()->first();

        $productKey = 'product_' . $product->id;
        if (!Session::has($productKey)) {
            $product->increment('view_count');
            Session::put($productKey, 1);
        }

        $brandAlls = Brand::where('status', 1)->where('url', '!=' , NULL)->latest()->limit(12)->get();

        $revs = ProductReview::where('product_id', $product->id)->where('status', 1)->get();
        $revs = $product->reviews ?: null;

        $variants = $product->productvariants()->get()->unique('title');
        $varaintValues = [];
        foreach ($variants as $key => $variant) {
            $varaintValues[$variant->title] =  $variant->value_products()->where('product_id', $product->id)->with('value')->get();
        }
        return view('website.pages.product-details', compact('product', 'category',  'revs', 'varaintValues', 'brandAlls'));
       
    }
    

    public function product_details_modal($id) {

        $sumStar = null;
        $product = Product::where('id', $id)
            ->withSum('stocks', 'qty')
            ->withSum('sales', 'qty')
            ->with('product_brand')
            ->first();

        $category = $product->categories()->first();

        $productKey = 'product_' . $product->id;
        if (!Session::has($productKey)) {
            $product->increment('view_count');
            Session::put($productKey, 1);
        }

        $revs = ProductReview::where('product_id', $id)->where('status', 1)->get();
        $revs = $product->reviews ?: null;

        $variants = $product->productvariants()->get()->unique('title');
        $varaintValues = [];
        foreach ($variants as $key => $variant) {
            $varaintValues[$variant->title] =  $variant->value_products()->where('product_id', $product->id)->with('value')->get();
        }
        return view('website.components.product_details_modal_content', compact('product', 'category',  'revs', 'varaintValues'));
       
    }


    public function newsletter(Request $request) {
        $validated = $request->validate([
            'email' => 'required|unique:newsletters|max:255',
        ]);
        // dd($request->all());
        $newsletter = Newsletter::create(['email' => $request->email]);

        if ($newsletter) {
            return back()->with('success', 'Successfully subscribed for newsletter');
        } else {
            return back()->with('error', 'Ops! An Error Occurred!');
        }
    }

    public function contact(Request $request) {
        return view('website.pages.contact');
    }


    public function contact_store(Request $request) {
        $validated = $request->validate([
            'full_name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = ContactMessage::create($request->all());

        if ($contact) {
            return back()->with('success', 'We received your message');
        } else {
            return back()->with('error', 'We could not received your message');
        }
    }    

    public function sitemap(Request $request) {
        $categories = Category::where('status', 1)->orderBy('name', 'ASC')->get()->unique('name');
        return view('website.pages.sitemap', compact('categories'));
    }


    public function products_price_range() {

        // $products = Product::skip(rand(500,900))->limit(10)->get();
        $cateid = request()->get('cate');
        $min = request()->get('min');
        $max = request()->get('max');
        $brands = request()->get('brands') ? explode(',', request()->get('brands')) : [];

        $cateId = Category::where('id', $cateid)->first();

        $query = $cateId->products()
            ->where('sales_price', '>', $min)
            ->where('sales_price', '<', $max);
            
        if (count($brands)) {
            $query->whereIn('brand_id', $brands);
        }

        $products = $query->paginate(12);
        // dd($cateAll);

        // $products = Product::where()->where('sales_price', '>', request()->get('min'))->where('sales_price', '>', request()->get('max'))->limit(10)->get();
        $html = "";
        foreach ($products->items() as $product) {
            $html .= "<div class='col-lg-4 col-sm-6'>";
            $html .= view('website.components.product_box', compact('product'))->render();
            $html .= "</div>";
        }

        return $html;
    }


    public function productsByBrands(Request $request, $url) {

        $latestProducts = Product::select('id', 'product_name', 'product_url', 'brand_id', 'selected_categories')
        ->where('status', 1)->limit(10)->latest()->get();

        $brand = Brand::where('url', $url)->first();
        $products = $brand->products()->where('status', 1)->paginate(12);
        // dd($products);

        return view('website.pages.brand_products', compact('products', 'latestProducts'));

    }



    

}
