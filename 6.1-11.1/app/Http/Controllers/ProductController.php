<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.frontend.index', compact('products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        $productKey = 'product_' . $product->id;

        // Kiểm tra Session của sản phẩm có tồn tại hay không.
        // Nếu không tồn tại, sẽ tự động tăng trường view_count lên 1 đồng thời tạo session lưu trữ key sản phẩm.
        if (!session()->has($productKey)) {
            session()->put($productKey, 1);
        }

        Product::where('id', $product->id)->increment('view_count');

        // Sử dụng Eloquent để lấy ra sản phẩm theo id
        $product = Product::findOrFail($product->id);

        // Trả về view
        return view('products.frontend.show', compact('product'));
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }

    public function indexBasket()
    {
        $quantities = session('basket');
        $sum = [];

        if (empty($quantities)) {
            $products = [];
        } else {
            $products = Product::whereIn('id', array_keys($quantities))->get();
            $sum = array_map(
                fn ($quantity, $product) => $quantity * $product['price'],
                $quantities,
                $products->toArray()
            );
        }

        return view('products.baskets.index', compact('products', 'quantities', 'sum'));
    }

    public function addBasket($id)
    {
        // session()->flush();
        if (!session('basket')) {
            $quantity = [$id => 1];
        } else {
            $quantity = session('basket');

            if (array_key_exists($id, $quantity)) {
                ++$quantity[$id];
            } else {
                $quantity[$id] = 1;
            }
        }

        ksort($quantity);
        session(['basket' => $quantity]);

        return redirect()->route('products.baskets.index');
    }

    public function updateBasket(Request $request)
    {
        $quantity = array_replace(session('basket'), $request->except('_token'));
        ;
        session(['basket' => $quantity]);

        return redirect()->route('products.baskets.index');
    }

    public function deleteBasket($id = null)
    {
        if (empty($id)) {
            session()->forget('basket');
        } else {
            $quantity = session('basket');
            unset($quantity[$id]);
            session(['basket' => $quantity]);
        }

        return redirect()->route('products.baskets.index');
    }
}
