<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Transport\Middleware\JsonDecodeMiddleware;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Foundation\Transport\UserAgentStrategies;

class ApiSettings
{
    const NAMESPACE = 'ApiClients\\Client\\Github\\Resource';

    const TRANSPORT_OPTIONS = [
        FoundationOptions::HYDRATOR_OPTIONS => [
            HydratorOptions::NAMESPACE => self::NAMESPACE,
            HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR,
        ],
        FoundationOptions::TRANSPORT_OPTIONS => [
            TransportOptions::HOST => 'api.github.com',
            TransportOptions::MIDDLEWARE => [
                JsonDecodeMiddleware::class,
            ],
            TransportOptions::USER_AGENT_STRATEGY => UserAgentStrategies::PACKAGE_VERSION,
            TransportOptions::PACKAGE => 'api-clients/github',
        ],
    ];

    public static function getOptions(
        array $suppliedOptions,
        string $suffix
    ): array {
        $options = array_merge_recursive(self::TRANSPORT_OPTIONS, $suppliedOptions);
        $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;
        return $options;
    }
}
