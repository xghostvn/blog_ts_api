<?php

namespace App\Traits;

trait CrudTrait
{

    public function create()
    {
        $request = resolve($this->createRequest);
        if (method_exists($this->service, "create")) {
            return $this->service->create($request);
        }
    }

    public function update()
    {
        $request = resolve($this->updateRequest);
        if (method_exists($this->service, "update")) {
            return $this->service->update($request);
        }
    }



}
