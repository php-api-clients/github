<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Authentication;

use ApiClients\Client\Github\AuthenticationInterface;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\BearerAuthorization\BearerAuthorizationHeaderMiddleware;
use ApiClients\Middleware\BearerAuthorization\Options as BearerAuthorizationHeaderMiddlewareOptions;
use Lcobucci\JWT\Token;

final class JWT implements AuthenticationInterface
{
    /**
     * @var Token
     */
    private $token;

    public function __construct(Token $token)
    {
        $this->token = $token;
    }

    public function getOptions(): array
    {
        return [
            FoundationOptions::TRANSPORT_OPTIONS => [
                TransportOptions::MIDDLEWARE => [
                    BearerAuthorizationHeaderMiddleware::class,
                ],
                TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                    BearerAuthorizationHeaderMiddleware::class => [
                        BearerAuthorizationHeaderMiddlewareOptions::TOKEN => $this->token,
                    ],
                ],
            ],
        ];
    }
}
