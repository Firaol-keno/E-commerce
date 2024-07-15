<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Auth;

class ShippingAddressController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'company' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
        ]);

        $shippingAddress = new ShippingAddress($request->all());
        $shippingAddress->user_id = Auth::id();
        $shippingAddress->save();

        return redirect('/shipping')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $shippingAddress = ShippingAddress::findOrFail($id);
        return view('shipping_address.show', compact('shippingAddress'));
    }
}
