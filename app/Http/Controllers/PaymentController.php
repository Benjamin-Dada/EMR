<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Paystack;
class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

}
//Let me explain the fluent methods this package provides a bit here.

/**
 *  This fluent method does all the dirty work of sending a POST request with the form data
 *  to Paystack Api, then it gets the authorization Url and redirects the user to Paystack
 *  Payment Page. I abstracted all of it, so you don't have to worry about that.
 *  Just eat your cookies while coding!
 */
Paystack::getAuthorizationUrl()->redirectNow();

/**
 * This fluent method does all the dirty work of verifying that the just concluded transaction was actually valid,
 * It verifies the transaction reference with Paystack Api and then grabs the data returned from Paystack.
 * In that data, we have a lot of good stuff, especially the `authorization_code` that you can save in your db
 * to allow for easy recurrent subscription.
 */
Paystack::getPaymentData();

/**
 * This method gets all the customers that have performed transactions on your platform with Paystack
 * @returns array
 */
Paystack::getAllCustomers();

/**
 * This method gets all the plans that you have registered on Paystack
 * @returns array
 */
Paystack::getAllPlans();

/**
 * This method gets all the transactions that have occurred
 * @returns array
 */
Paystack::getAllTransactions();

/**
 * This method generates a unique super secure cryptograhical hash token to use as transaction reference
 * @returns string
 */
Paystack::genTranxRef();

