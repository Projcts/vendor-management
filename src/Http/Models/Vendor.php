<?php


namespace Alisons\VendorManagement\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'address', 'status'];
}
