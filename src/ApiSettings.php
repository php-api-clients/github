<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Middleware\JsonDecodeMiddleware;
use ApiClients\Foundation\Transport\Middleware\JsonEncodeMiddleware;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\HttpExceptions\HttpExceptionsMiddleware;
use ApiClients\Middleware\UserAgent\Options as UserAgentMiddlewareOptions;
use ApiClients\Middleware\UserAgent\UserAgentMiddleware;
use ApiClients\Middleware\UserAgent\UserAgentStrategies;
use function ApiClients\Foundation\options_merge;

final class ApiSettings
{
    const NAMESPACE = 'ApiClients\\Client\\Github\\Resource';

    const ACCEPT_HEADER = [
        // License on repository object: https://developer.github.com/v3/licenses/#licenses
        'application/vnd.github.drax-preview+json',

        // Topics on repository object: https://developer.github.com/v3/repos/#repositories
        'application/vnd.github.mercy-preview+json',

        // Community Health: https://developer.github.com/v3/repos/community/#community-health
        'application/vnd.github.black-panther-preview+json',

        // Default header: https://developer.github.com/v3/#current-version
        'application/vnd.github.v3+json',
    ];

    const TRANSPORT_OPTIONS = [
        FoundationOptions::HYDRATOR_OPTIONS => [
            HydratorOptions::NAMESPACE => self::NAMESPACE,
            HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR,
        ],
        FoundationOptions::TRANSPORT_OPTIONS => [
            TransportOptions::HOST => 'api.github.com',
            TransportOptions::MIDDLEWARE => [
                JsonDecodeMiddleware::class,
                JsonEncodeMiddleware::class,
                HttpExceptionsMiddleware::class,
                UserAgentMiddleware::class,
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
        $options = options_merge(self::TRANSPORT_OPTIONS, $auth->getOptions());
        $options = options_merge($options, $suppliedOptions);
        $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;

        $acceptHeader = implode('; ', self::ACCEPT_HEADER);
        $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::HEADERS]['Accept'] = $acceptHeader;

        return $options;
    }
}
