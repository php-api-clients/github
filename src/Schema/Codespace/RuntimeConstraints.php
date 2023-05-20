<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Codespace;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RuntimeConstraints
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"allowed_port_privacy_settings":null}';

    /**
     * allowedPortPrivacySettings: The privacy settings a user can select from when forwarding a port.
     */
    public function __construct(#[MapFrom('allowed_port_privacy_settings')] public ?array $allowedPortPrivacySettings)
    {
    }
}
