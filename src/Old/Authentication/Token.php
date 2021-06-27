<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Authentication;

use ApiClients\Client\Github\AuthenticationInterface;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\TokenAuthorization\Options as TokenAuthorizationHeaderMiddlewareOptions;
use ApiClients\Middleware\TokenAuthorization\TokenAuthorizationHeaderMiddleware;

final class Token implements AuthenticationInterface
{
    private string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getOptions(): array
    {
        return [
            FoundationOptions::TRANSPORT_OPTIONS => [
                TransportOptions::MIDDLEWARE => [
                    TokenAuthorizationHeaderMiddleware::class,
                ],
                TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                    TokenAuthorizationHeaderMiddleware::class => [
                        TokenAuthorizationHeaderMiddlewareOptions::TOKEN => $this->token,
                    ],
                ],
            ],
        ];
    }
}
