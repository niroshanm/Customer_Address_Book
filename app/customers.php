<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $fillable = ['user_id', 'name', 'nic', 'address', 'telephone1', 'telephone2', 'telephone3', 'telephone4'];


    public function saveCustomer($data)
{
        $this->user_id = auth()->user()->id;
        $this->user_id = $data['user_id'];
        $this->name = $data['name'];
        $this->nic = $data['nic'];
        $this->address = $data['address'];
        $this->telephone1 = $data['telephone1'];
        $this->telephone2 = $data['telephone2'];
        $this->telephone3 = $data['telephone3'];
        $this->telephone4 = $data['telephone4'];
        $this->save();
        return 1;
}

public function updateCustomer($data)
{
        $customer = $this->find($data['id']);
        $customer->user_id = auth()->user()->id;
        $this->user_id = $data['user_id'];
        $customer->name = $data['name'];
        $customer->nic = $data['nic'];
        $customer->address = $data['address'];
        $customer->telephone1 = $data['telephone1'];
        $customer->telephone2 = $data['telephone2'];
        $customer->telephone3 = $data['telephone3'];
        $customer->telephone4 = $data['telephone4'];
        $customer->save();
        return 1;
}

}
