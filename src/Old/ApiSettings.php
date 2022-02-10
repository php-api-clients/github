<?php

declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Middleware\ErrorMiddleware;
use ApiClients\Client\Github\Middleware\RateLimitStateMiddleware;
use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\HttpExceptions\HttpExceptionsMiddleware;
use ApiClients\Middleware\Json\JsonDecodeMiddleware;
use ApiClients\Middleware\Json\JsonEncodeMiddleware;
use ApiClients\Middleware\UserAgent\Options as UserAgentMiddlewareOptions;
use ApiClients\Middleware\UserAgent\UserAgentMiddleware;
use ApiClients\Middleware\UserAgent\UserAgentStrategies;

use function ApiClients\Foundation\options_merge;

use const DIRECTORY_SEPARATOR;

final class ApiSettings
{
    public const NAMESPACE = 'ApiClients\\Client\\Github\\Resource';

    public const TRANSPORT_OPTIONS = [
        FoundationOptions::HYDRATOR_OPTIONS => [
            HydratorOptions::NAMESPACE => self::NAMESPACE,
            HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR,
        ],
        FoundationOptions::TRANSPORT_OPTIONS => [
            TransportOptions::HOST => 'api.github.com',
            TransportOptions::MIDDLEWARE => [
                JsonDecodeMiddleware::class,
                JsonEncodeMiddleware::class,
                UserAgentMiddleware::class,
                RateLimitStateMiddleware::class,
                HttpExceptionsMiddleware::class,
                ErrorMiddleware::class,
            ],
            TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                UserAgentMiddleware::class => [
                    UserAgentMiddlewareOptions::STRATEGY => UserAgentStrategies::PACKAGE_VERSION,
                    UserAgentMiddlewareOptions::PACKAGE => 'api-clients/github',
                ],
            ],
        ],
    ];

    public static function getOptions(
        AuthenticationInterface $auth,
        array $suppliedOptions,
        string $suffix
    ): array {
        $options                                                                         = options_merge(self::TRANSPORT_OPTIONS, $auth->getOptions());
        $options                                                                         = options_merge($options, $suppliedOptions);
        $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;

        $acceptHeader                                                                       = AcceptHeader::getHeader(AcceptHeader::PRESET_DEFAULT);
        $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::HEADERS]['Accept'] = $acceptHeader;

        return $options;
    }
}
