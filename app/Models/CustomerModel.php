<?php

namespace App\Models;

use DB;

class CustomerModel
{

    public function getCustomerData()
    {
        return DB::table('customer')->get();
    }

    public function insertCustomerData($first_name, $last_name, $address, $address_2, $city, $state, $zip, $phone, $email)
    {
        DB::table('customer')->insert([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'address' => $address,
            'address_2' => $address_2,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'phone' => $phone,
            'email' => $email
        ]);
    }

    public function getCustomerDetailedData($customerId)
    {
        return DB::table('customer')->where('id', '=', $customerId)->get();
    }

    public function editCustomerData($customerId, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $phone, $email)
    {

        DB::table('customer')->where('id', '=', $customerId)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'address' => $address,
            'address_2' => $address_2,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'phone' => $phone,
            'email' => $email
        ]);
    }
}