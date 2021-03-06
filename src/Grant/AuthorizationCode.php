<?php

namespace League\OAuth2\Client\Grant;

use League\OAuth2\Client\Token\AccessTokenInterface;

class AuthorizationCode implements GrantInterface
{
    public function __toString()
    {
        return 'authorization_code';
    }

    public function prepRequestParams($defaultParams, $params)
    {
        if (! isset($params['code']) || empty($params['code'])) {
            throw new \BadMethodCallException('Missing authorization code');
        }

        return array_merge($defaultParams, $params);
    }

    public function handleResponse(AccessTokenInterface $token, array $response = null)
    {
        return $token;
    }
}
