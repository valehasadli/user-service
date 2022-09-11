<?php

namespace ValehAsadli\UserService;

class UserService extends ApiService
{
    public function __construct()
    {
        $this->endpoint = config('microservices.users') . '/api';
    }
}
