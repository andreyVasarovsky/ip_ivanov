<?php


namespace App\Services\Admin\Client;

use App\Models\Client;

class Service
{
    public function store($data)
    {
        $data['agreement_date'] = new \DateTime($data['agreement_date']);
        Client::firstOrCreate($data);
    }

    public function update(Client $client, $data)
    {
        $data['agreement_date'] = new \DateTime($data['agreement_date']);
        $client->update($data);
    }
}
