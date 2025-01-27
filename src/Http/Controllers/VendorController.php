<?php


namespace Alisons\VendorManagement\Http\Controllers;

use Illuminate\Routing\Controller;
use Alisons\VendorManagement\Http\Models\Vendor;
use Alisons\VendorManagement\Http\Requests\VendorRequest;

use Illuminate\Http\Request;

class VendorController extends Controller
{

    public function index()
    {
        return response()->json(Vendor::all(), 200);
    }
    public function show(Vendor $vendor)
    {
        return response()->json($vendor, 200);
    }
    public function store(VendorRequest $request)
    {
        $vendor = Vendor::create($request->validated());
        return response()->json($vendor, 201);
    }

    public function update(VendorRequest $request, Vendor $vendor)
    {
        $vendor->update($request->validated());
        return response()->json($vendor, 200);
    }

    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return response()->json(null, 204);
    }
}
