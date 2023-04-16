<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstractd34f4f2e4fff1066aa7cd8f52cc7e7e7
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"allowed_port_privacy_settings":["generated_allowed_port_privacy_settings_null"]}';
    /**
     * allowedPortPrivacySettings: The privacy settings a user can select from when forwarding a port.
     * @param ?array<string> $allowedPortPrivacySettings
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('allowed_port_privacy_settings')] public ?array $allowedPortPrivacySettings)
    {
    }
}
