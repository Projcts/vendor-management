<?php

use Alisons\VendorManagement\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('vendor', VendorController::class)->names('vendor-management');
