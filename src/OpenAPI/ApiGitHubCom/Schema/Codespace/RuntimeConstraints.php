<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace;

final class RuntimeConstraints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Codespace\\RuntimeConstraints';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The privacy settings a user can select from when forwarding a port.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RuntimeConstraints\AllowedPortPrivacySettings>
     */
    public readonly array $allowed_port_privacy_settings;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RuntimeConstraints\AllowedPortPrivacySettings> $allowed_port_privacy_settings
     */
    public function __construct(array $allowed_port_privacy_settings)
    {
        $this->allowed_port_privacy_settings = $allowed_port_privacy_settings;
    }
}
