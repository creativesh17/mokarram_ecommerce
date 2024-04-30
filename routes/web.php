<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::group(['prefix' => '', 'namespace' => "Livewire"], function () {
    // Route::get('/contact', "Contact")->name('contact_us');
});

Route::group(['prefix' => '', 'namespace' => "Controllers"], function () {

    // Website Home Page
    Route::get('/', 'Website\WebsiteController@home')->name('home');


    // Customer Dashboard
    Route::get('/customer/dashboard', 'Website\DashboardController@dashboard')->name('customer.dashboard');


    // terms - about us - policy
    Route::get('/about-us', "Website\WebsiteController@aboutus")->name('about_us');
    Route::get('/privacy-policy', "Website\WebsiteController@privacy_policy")->name('privacy.policy');
    Route::get('/terms-conditions', "Website\WebsiteController@terms")->name('terms');
    Route::get('/contact', "Website\WebsiteController@contact")->name('contact');
    Route::post('/contact', "Website\WebsiteController@contact_store")->name('contact.store');
    Route::get('/sitemap', "Website\WebsiteController@sitemap")->name('sitemap');


    // AuthController - includes both Auth and Orders and Reviews
    Route::get('/login', 'Website\AuthController@login')->name('login');
    Route::post('/login', 'Website\AuthController@website_login')->name('login');
    Route::get('/register', 'Website\AuthController@register')->name('register');
    Route::post('/register', 'Website\AuthController@website_register')->name('register');
    // Route::get('/forget/password', 'Website\AuthController@forget_password')->name('forget.password');
    Route::post('/logout', 'Website\AuthController@logout')->name('logout');
    Route::get('/profile', 'Website\AuthController@profile')->middleware('auth')->name('profile');
    Route::post('/profile/update', 'Website\AuthController@profile_update')->middleware('auth')->name('profile.update');
    Route::get('/reset-password', 'Website\AuthController@reset_password')->name('reset_password');
    Route::post('/reset-password', 'Website\AuthController@reset_password_update')->name('reset_password');

    // Orders and Reviews
    Route::get('/orders', 'Website\AuthController@orders')->name('orders');
    Route::get('/orders/details/{id}', 'Website\AuthController@order_details')->name('orders.details');
    Route::get('/orders/delete/{id}', 'Website\AuthController@orders_delete')->name('orders.delete');
    Route::get('/orders/single/{id}', 'Website\AuthController@order_single_item_delete')->name('order.single.delete');
    Route::get('/myreviews', 'Website\AuthController@myreviews')->name('myreviews');
    Route::get('/myreviews/{id}', 'Website\AuthController@myreviews_delete')->name('myreviews.delete');


    // newsletter
    Route::post('/newsletter', 'Website\WebsiteController@newsletter')->name('newsletter');

    // Live Product Search
    Route::get('/productsearch', 'Website\ProductController@productsearch')->name('productsearch');
    Route::get('/product/search/page', 'Website\ProductController@productSearchPage')->name('product.search.page');

    // Cart
    Route::get('cart', 'Website\CartController@index');
    Route::post('cart/add/{product}', 'Website\CartController@addToCart')->name('cart.add');
    Route::get('cartitems', 'Website\CartController@cartItems');

    Route::post('cart/update', 'Website\CartController@updateCart');
    Route::get('cart/remove/{rowid}', 'Website\CartController@removeCart');

    Route::any('products/compare/{id}', 'Website\CompareController@products_compare')->name('products.compare');
    Route::get('compare', 'Website\CompareController@compare_page')->name('compare.page');
    Route::get('wishlist', 'Website\WishlistController@index')->middleware('auth')->name('wishlist');
    Route::post('wishlist/{id}', 'Website\WishlistController@addToWishlist')->middleware('auth')->name('wishlist.add');
    Route::get('wishlist/remove/{id}', 'Website\WishlistController@removeWishlist')->middleware('auth')->name('wishlist.remove');


    // checkout
    Route::get('/checkout', 'Website\CheckoutController@checkout');
    Route::post('/checkout', 'Website\CheckoutController@store');
    Route::get('/order-complete/{id}', 'Website\CheckoutController@order_complete');
    Route::post('product/review', 'Website\ReviewController@review')->name('review.new');
    // Route::post('/review-remove', 'FrontendController@reviewremove')->name('review_remove');


    Route::get('/category/{slug}', 'Website\WebsiteController@category_product')->name('category_product');
    Route::get('/brand/{url}', 'Website\WebsiteController@productsByBrands')->name('productsByBrands');
    Route::get('/product/{url}', 'Website\WebsiteController@product_details')->name('product_details_page');
    Route::get('/product-details-modal/{id}', 'Website\WebsiteController@product_details_modal');
    Route::get('/clear/compare', 'Website\CompareController@clear_compare_all')->name('clear.compare');
    Route::get('/clear/item/compare/{id}', 'Website\CompareController@clear_compare_item')->name('remove.compare.item');

    // Filter
    Route::get('/filter-price-products', 'Website\WebsiteController@products_price_range')->name('products_price_range');


    // search by brand
    // Route::get('/productsByBrands/{id}', 'Website\WebsiteController@productsByBrands')->name('productsByBrands');


    Route::get('products-range', function () {
        $products = Product::skip(rand(500, 900))->limit(10)->get();
        $html = "";
        foreach ($products as $product) {
            $html .= "<div class='col-lg-4'>";
            $html .= view('website.components.product_box', compact('product'))->render();
            $html .= "</div>";
        }

        return $html;
    })->name('route name');



    // Route::get('/checkout', 'FrontendController@checkout');
    // Route::post('/checkout', 'FrontendController@confirm_order');
    // Route::get('/order-complete/{id}','FrontendController@order_complete');
    // Route::get('/order-complete/{id}/print','FrontendController@order_complete_print')->name('download_invoice');
    // Route::get('/invoice/{invoice}', 'WebsiteController@invoice_download')->name('invoice');

    // Cart
    // Route::post('add_to_cart', 'WebsiteController@add_to_cart');
    // Route::get('clear_cart', 'WebsiteController@clear_cart');
    // Route::get('cart_all', 'WebsiteController@cart_all');

    // Route::get('/cart', 'CartController@cart');
    // Route::get('/wishlist', 'CartController@cart');

    // Route::get('/checkout', 'FrontendController@checkout');
    // Route::post('/checkout', 'FrontendController@confirm_order');
    // Route::get('/order-complete/{id}','FrontendController@order_complete');
    // Route::get('/order-complete/{id}/print','FrontendController@order_complete_print')->name('download_invoice');
    // Route::get('/invoice/{invoice}', 'WebsiteController@invoice_download')->name('invoice');


    // Route::get('/profile', 'FrontendController@profile')->name('frontend.profile');
    // Route::get('/orders', 'FrontendController@orders')->name('frontend.orders');
    // Route::get('/my-reviews', 'FrontendController@my_reviews')->name('frontend.reviews');

    // Route::get('/address', 'FrontendController@address')->name('frontend.address');
    // Route::post('/address', 'FrontendController@address_update');

    // Route::get('/account-details', 'FrontendController@account_details')->name('frontend.account_details');
    // Route::post('/account-details', 'FrontendController@account_details_update');

    // Route::get('/reset-password', 'FrontendController@reset_password')->name('frontend.reset_password');
    // Route::post('/reset-password', 'FrontendController@reset_password_update');


});


Route::get('/insert/purcahse-price', function() {
    $products = Product::all();
    foreach($products as $product) {
        // if(!$product->sales_price || $product->sales_price < 40) {
        //     $product->sales_price = rand(400, 500);
        // }
        $product->purchase_price = $product->sales_price - rand(10, 20);
        $product->save();
    }
})->name('route.eft');

Route::prefix('old/2/2')->namespace('Controllers')->group(function () {
    Route::get('/', 'Website\WebsiteController@home');
    Route::get('/about-us', "WebsiteController@aboutus")->name('about_us');
    Route::get('/gallery', "WebsiteController@gallery")->name('gallery');
    Route::get('/privacy-policy', "WebsiteController@privacy_policy")->name('privacy_policy');
    Route::get('/terms', "WebsiteController@terms")->name('terms_and_condition');
    Route::get('/refund-policy', "WebsiteController@refund_policy")->name('refund_policy');

    Route::get('/contact', "WebsiteController@contact")->name('contact_us');
    Route::post('/contact', "WebsiteController@contact_submit");

    Route::get('/product/{id}/{product_name}', 'WebsiteController@product_details')->name('product_details');
    Route::get('/product_quickview/{id}', 'WebsiteController@single_product_details')->name('single_product_view');
    Route::post('add_to_cart', 'WebsiteController@add_to_cart');
    Route::get('clear_cart', 'WebsiteController@clear_cart');
    Route::get('cart_all', 'WebsiteController@cart_all');

    // Route::get('/category/{id}/{category_name}', 'WebsiteController@category_products')->name('category_product');

    // Route::get('/get-category-product/{category_id}/{chunk_size}/{chunk_no}/json', 'JsonController@get_category_product')->name('get_category_product_json');
    Route::get('/search-product/json', 'JsonController@search_product')->name('search_product_json');
    Route::get('/search-product', 'WebsiteController@search_product')->name('search_product');

    Route::get('/offers', 'WebsiteController@offer_products')->name('offer_products');
    Route::get('/pc-builder', 'WebsiteController@pc_builder')->name('pc_builder');
    Route::any('/pc-builder-print', 'WebsiteController@pc_builder_print');

    Route::get('/cart', 'CartController@cart');
    Route::get('/wishlist', 'CartController@cart');

    Route::get('/checkout', 'FrontendController@checkout');
    Route::post('/checkout', 'FrontendController@confirm_order');
    Route::get('/order-complete/{id}', 'FrontendController@order_complete');
    Route::get('/order-complete/{id}/print', 'FrontendController@order_complete_print')->name('download_invoice');
    Route::get('/invoice/{invoice}', 'WebsiteController@invoice_download')->name('invoice');

    Route::post('/question-submit', 'FrontendController@questionSubmit')->name('question_submit');

    Route::post('/review-submit', 'FrontendController@reviewSubmit')->name('review_submit');
    Route::post('/review-remove', 'FrontendController@reviewremove')->name('review_remove');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/profile', 'FrontendController@profile')->name('frontend.profile');
        Route::get('/orders', 'FrontendController@orders')->name('frontend.orders');
        Route::get('/my-reviews', 'FrontendController@my_reviews')->name('frontend.reviews');

        Route::get('/address', 'FrontendController@address')->name('frontend.address');
        Route::post('/address', 'FrontendController@address_update');

        Route::get('/account-details', 'FrontendController@account_details')->name('frontend.account_details');
        Route::post('/account-details', 'FrontendController@account_details_update');

        Route::get('/reset-password', 'FrontendController@reset_password')->name('frontend.reset_password');
        Route::post('/reset-password', 'FrontendController@reset_password_update');
    });

    // Route::get('/login', 'FrontendController@login')->name('login');
    // Route::post('/login', 'FrontendController@website_login')->name('login');
    // Route::get('/register', 'FrontendController@register')->name('register');
    // Route::post('/register', 'FrontendController@website_register')->name('website_register');

    // Route::post('/logout', 'FrontendController@logout')->name('logout');

    // // Auth::routes();
    // Route::post('/website_login', 'FrontendController@website_login')->name('website_login_api');
    // Route::post('/website_register', 'FrontendController@website_register')->name('website_register_api');

    Route::get('/get-auth-info', function () {
        return Auth::user();
    });

    Route::group([
        'prefix' => 'admin',
        'middleware' => ['auth', 'admin'],
        'namespace' => 'Admin'
    ], function () {
        Route::get('/', 'AdminController@index')->name('admin_index');
        Route::post('/set-theme', 'AdminController@set_theme')->name('admin_set_theme');
    });

    Route::group([
        'prefix' => 'seo-management',
        'middleware' => ['auth'],
        'namespace' => 'Seo'
    ], function () {
        Route::get('/', 'SeoController@index')->name('seo_index');

        // Route::get('/ctegories', 'SeoController@ctegories')->name('seo_ctegories');
        // Route::get('/ctegories/set/{category}', 'SeoController@ctegories_set')->name('ctegories_set');
        // Route::post('/ctegories/set/{category}', 'SeoController@ctegories_set_save');

        Route::get('/products', 'SeoController@products')->name('seo_products');
        Route::get('/products/set/{data}', 'SeoController@products_set')->name('products_set');
        Route::post('/products/set/{data}', 'SeoController@products_set_save');

        Route::get('/tags', 'SeoController@tags')->name('seo_tags');
        Route::get('/tags/set/{data}', 'SeoController@tags_set')->name('tags_set');
        Route::post('/tags/set/{data}', 'SeoController@tags_set_save');
        Route::get('/tags/create', 'SeoController@tags_create')->name('tags_create');
        Route::post('/tags/create', 'SeoController@tags_store')->name('tags_store');

        Route::get('/website', 'SeoController@seo_website')->name('seo_website');
        Route::post('/website', 'SeoController@seo_website_update')->name('seo_website_update');
    });

    // user management
    Route::group([
        'prefix' => 'user',
        'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
        'namespace' => 'Admin'
    ], function () {
        Route::get('/index', 'UserController@index')->name('admin_user_index');
        Route::get('/delivery-man', 'UserController@admin_delivery_man_index')->name('admin_delivery_man_index');

        Route::get('/view/{id}', 'UserController@view')->name('admin_user_view');
        Route::get('/create', 'UserController@create')->name('admin_user_create');
        Route::post('/store', 'UserController@store')->name('admin_user_store');
        Route::get('/edit/{id}', 'UserController@edit')->name('admin_user_edit');
        Route::post('/update', 'UserController@update')->name('admin_user_update');
        Route::post('/delete', 'UserController@delete')->name('admin_user_delete');

        // Route::post('/test', 'UserController@test')->name('admin_user_test');
    });

    // user role
    Route::group([
        'prefix' => 'user-role',
        'middleware' => ['auth', 'check_user_is_active', 'super_admin'],
        'namespace' => 'Admin'
    ], function () {

        Route::get('/index', 'UserRoleController@index')->name('admin_user_role_index');
        Route::get('/view/{id}', 'UserRoleController@view')->name('admin_user_role_view');
        Route::get('/create', 'UserRoleController@create')->name('admin_user_role_create');
        Route::post('/store', 'UserRoleController@store')->name('admin_user_role_store');
        Route::get('/edit', 'UserRoleController@edit')->name('admin_user_role_edit');
        Route::post('/update', 'UserRoleController@update')->name('admin_user_role_update');
        Route::post('/delete', 'UserRoleController@delete')->name('admin_user_role_delete');
    });

    // Route::group([
    //     'prefix' => 'file-manager',
    //     'middleware' => ['auth'],
    //     'namespace' => 'Admin'
    // ], function () {
    //     Route::post('/store-file', 'FileManagerController@store_file')->name('admin_fm_store_file');
    //     Route::get('/get-files', 'FileManagerController@get_files')->name('admin_fm_get_files');
    //     Route::delete('/delete-file/{image}', 'FileManagerController@delete_file')->name('admin_fm_delete_file');
    // });

    Route::group([
        'prefix' => 'admin/product',
        'middleware' => ['auth'],
        'namespace' => 'Admin\Product'
    ], function () {

        Route::get('/list', 'ProductController@list')->name('admin_product_list');
        Route::get('/list-campeing', 'ProductController@list_campeing')->name('admin_product_list_campeing');

        Route::get('/list/json', 'ProductController@list_json')->name('admin_product_list_json');
        Route::get('/list-campeing/json', 'ProductController@list_campeing_json')->name('admin_product_list_campeing_json');

        Route::get('/create', 'ProductController@create')->name('admin_product_create');
        Route::get('/create-campeing', 'ProductController@create_campain')->name('admin_product_create_campain');
        Route::get('/edit-campeing/{id}', 'ProductController@edit_campeing')->name('admin_product_edit_campeing');
        Route::get('/edit/{id}', 'ProductController@edit')->name('admin_product_edit');
        Route::get('/get-json/{id}', 'ProductController@get_json')->name('admin_product_get_json');
        Route::get('/get-campeing-json/{id}', 'ProductController@get_campeing_json')->name('admin_product_get_campeing_json');

        Route::post('/store-product', 'ProductController@store_product')->name('admin_product_store_product');
        Route::post('/update-product', 'ProductController@update_product')->name('admin_product_update_product');

        Route::post('/store-campeing', 'ProductController@store_campeing')->name('admin_product_store_campeing');
        Route::post('/update-campeing', 'ProductController@update_campeing')->name('admin_product_update_campeing');
        Route::post('/delete-campeing', 'ProductController@delete_campeing')->name('admin_product_delete_campeing');

        Route::get('/categories', 'ProductController@categories')->name('admin_product_categories');

        Route::get('/categories_tree_json', 'ProductController@categories_tree_json')->name('admin_product_categories_tree_json');
        Route::get('/create-category', 'ProductController@create_category')->name('admin_product_create_category');
        Route::get('/edit-category/{id}/{category_name}', 'ProductController@edit_category')->name('admin_product_edit_category');
        Route::get('/edit-data/{id}', 'ProductController@category_data')->name('admin_product_category_data');
        Route::post('/categorie-url-check', 'ProductController@categorie_url_check')->name('admin_product_categorie_url_check');
        Route::post('/store-category', 'ProductController@store_category')->name('admin_product_store_category');
        Route::post('/store-category-from-product-create', 'ProductController@store_category_from_product_create')->name('admin_product_store_category_from_product_create');
        Route::post('/update-category', 'ProductController@update_category')->name('admin_product_update_category');
        Route::post('/rearenge-category', 'ProductController@rearenge_category')->name('admin_product_rearenge_category');

        Route::get('/option', 'ProductController@option')->name('admin_product_option');
        Route::get('/option_json', 'ProductController@option_json')->name('admin_product_option_json');
        Route::get('/create-option', 'ProductController@create_option')->name('admin_product_create_option');
        Route::get('/edit-option/{id}', 'ProductController@edit_option')->name('admin_product_edit_option');
        Route::get('/get-option/{id}', 'ProductController@get_option')->name('admin_product_get_option');
        Route::post('/store-option', 'ProductController@store_option')->name('admin_product_store_option');
        Route::post('/update-option', 'ProductController@update_option')->name('admin_product_update_option');
        Route::post('/check_option_exists', 'ProductController@check_option_exists')->name('admin_check_option_exists');
        Route::get('/delete_option/{id}', 'ProductController@delete_option')->name('admin_delete_option');

        Route::get('/brands-json', 'ProductController@brands_json')->name('admin_product_brands_json');
        Route::get('/brands', 'ProductController@brands')->name('admin_product_brands');
        Route::get('/create-brands', 'ProductController@create_brands')->name('admin_product_create_brands');
        Route::get('/edit-brands/{id}', 'ProductController@edit_brands')->name('admin_product_edit_brands');
        Route::post('/store-brands', 'ProductController@store_brands')->name('admin_product_store_brands');
        Route::post('/update-brands', 'ProductController@update_brands')->name('admin_product_update_brands');

        Route::get('/search', 'ProductController@search')->name('admin_product_search');
        Route::get('/reviews', 'ProductController@reviews')->name('admin_product_reviews');
    });

    Route::group([
        'prefix' => 'blank',
        'middleware' => ['auth'],
        'namespace' => 'Admin'
    ], function () {

        // basic_page
        Route::get('/index', 'AdminController@blade_index')->name('admin_blade_index');
        Route::get('/create', 'AdminController@blade_create')->name('admin_blade_create');
        Route::get('/view', 'AdminController@blade_view')->name('admin_blade_view');
    });

    Route::get('/testt', function (Request $request) {

        $options = array(
            'type' => array('kg'),
            'purity' => array('red', 'Green', 'Blue', 'purple'),
            'model' => array('Small', 'Medium', 'Large'),
        );

        // Create an array to store the permutations.
        $results = array();
        foreach ($options as $values) {
            // Loop over the available sets of options.
            if (count($results) == 0) {
                // If this is the first set, the values form our initial results.
                $results = $values;
            } else {
                // Otherwise append each of the values onto each of our existing results.
                $new_results = array();
                foreach ($results as $result) {
                    foreach ($values as $value) {
                        $new_results[] = "$result $value";
                    }
                }
                $results = $new_results;
            }
        }

        // Now output the results.
        foreach ($results as $result) {
            echo "$result<br/>";
        }

        dd(request()->all());
    })->name('route name');
});

Route::group(['prefix' => '', 'namespace' => "Controllers"], function () {

    Route::get('/tt', function () {
        $p = \App\Models\Product::class;
        $c = \App\Models\Category::class;
        $b = \App\Models\Brand::class;
        $t = \App\Models\Tag::class;
        $weburl = \App\Models\WebsiteUrl::class;
        // $weburl::truncate();

        foreach ($weburl::select('id', 'url')->get() as $item) {
            // $check = $weburl::where('url',$item->url)->first();
            // if($check){
            //     $item->url = $item->url.$item->id;
            //     $item->save();
            // }
            // $weburl::insert([
            //     "table_id" => $item->id,
            //     "table_name" => 'brands',
            //     'url' => $item->url,
            // ]);
            if ($item->url[0] == '/') {
                $item->url = substr($item->url, 1, strlen($item->url));
                $item->save();
            }
        }
    });
});

Route::get('/admin', function () {
    if(!Auth::check()) {
        return redirect()->route('login');
    }
    $user = \App\Models\User::find(auth()->user()->id);
    $role = $user->roles()->whereIn('role_serial', [1, 2])->first();
    if ($role) {
        return view('backend.dashboard');
    } else {
        return redirect()->route('frontend.profile');
    }
})->name('admin');



Route::get('/cat', function () {
    return response()->json(\App\Models\Category::select(['id', 'name', 'parent_id'])->get());
});

Route::post('/seo-logout', function () {
    if (auth()->check()) {
        auth()->logout();
    }

    return redirect('/');
});


Route::prefix('')->namespace('Controllers')->group(function () {
    // Route::get('/{url}/{url2?}/{url3?}', 'WebsiteController@product_and_category_by_url')->where('url', '^(?!api\/)[\/\w\.-]*');
});
