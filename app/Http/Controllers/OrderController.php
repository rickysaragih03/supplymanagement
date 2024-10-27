<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Menampilkan semua order
    public function index()
    {
        $orders = Order::with('product', 'supplier')->get();
        return view('orders.index', compact('orders'));
    }

    // Menampilkan form untuk menambah order baru
    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('orders.create', compact('products', 'suppliers'));
    }

    // Menyimpan order baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity' => 'required|integer',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order added successfully.');
    }

    // Menampilkan detail order tertentu
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    // Menampilkan form untuk mengedit order
    public function edit(Order $order)
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('orders.edit', compact('order', 'products', 'suppliers'));
    }

    // Mengupdate data order yang ada
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity' => 'required|integer',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    // Menghapus order
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
