<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace;

final readonly class RuntimeConstraints
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The privacy settings a user can select from when forwarding a port.
     */
    public ?array $allowed_port_privacy_settings;

    public function __construct(array $allowed_port_privacy_settings)
    {
        $this->allowed_port_privacy_settings = $allowed_port_privacy_settings;
    }
}
