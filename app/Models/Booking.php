<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [

            'firstname',
            'lastname',
            'phone',
            'email',

            //payment
            'paymentmethod',
            'name_card_bookign',
            'card_number',
            'expire_month',
            'expire_year',
            'ccv',

            //billing address
            'country',
            'address',
            'address2',
            'city',
            'state',
            'postalcode',

            //order details
            'cartitems',
            'cart_total',
            'cart_tax',
            'cart_subtotal',
            'statut',

            //related to
            'user_id'

    ];



    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
    public function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }

}



