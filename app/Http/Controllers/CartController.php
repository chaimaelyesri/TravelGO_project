<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

use Cart;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        Cart::add(
            $request->id,
            $request->title,
            $request->qty,
            $request->price,
            0,
            [
                'startdate' => $request->date,
                'taxrate' => 20,
            ]);
        return redirect('/cart')->with('success', 'your message,here');
    }

    public function cartdestroy(Request $request)
    {
        Cart::remove($request->rowId);
        return redirect()->back()->with('success', 'your message,here');
    }

    public function cart()
    {
        $cartitems=Cart::content();
        $cartsum=['total'=>Cart::total(),'tax'=>Cart::tax(),'subtotal'=>Cart::subtotal()];

        return view('frontend.cart.cart-1', compact('cartitems','cartsum'));
    }
    public function checkout()
    {
        $cartitems=Cart::content();
        $cartsum=['total'=>Cart::total(),'tax'=>Cart::tax(),'subtotal'=>Cart::subtotal()];

        return view('frontend.cart.cart-2', compact('cartitems','cartsum'));

    }
    public function validation(Request $request)
    {

        /**
         * Cart auto add booking row after checkout
         **/

        //user info
        $booking = new Booking([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,

            //payment
            'paymentmethod' => 'Visa',
            'name_card_bookign' => $request->name_card_bookign,
            'card_number' => $request->card_number,
            'expire_month' => $request->expire_month,
            'expire_year' => $request->expire_year,
            'ccv' => $request->ccv,

            //billing address
            'country' => $request->country,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'postalcode' => $request->postalcode,

            //order details
            'cartitems' => Cart::content(),
            'cart_total' => Cart::total(),
            'cart_tax' => Cart::tax(),
            'cart_subtotal' => Cart::subtotal(),
            'statut' => '1',

            //related to
            'user_id' => $request->user_id
            ]);

        if($booking->save()){
            Cart::destroy();
            $message = "Order completed!";
            $instruction = "You'll receive a confirmation email at ".$request->email;
        }else{
            $message = "Order not completed!";
            $instruction = "Something wrong happened please try later";
        }

        return view('frontend.cart.cart-3', compact('message', 'instruction'));

    }
}
