<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceWithFullRepository;

final class RuntimeConstraints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_TITLE = 'CodespaceWithFullRepository\\RuntimeConstraints';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The privacy settings a user can select from when forwarding a port.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RuntimeConstraints\AllowedPortPrivacySettings>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RuntimeConstraints\AllowedPortPrivacySettings::class)
     */
    private array $allowed_port_privacy_settings = array();
    /**
     * The privacy settings a user can select from when forwarding a port.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RuntimeConstraints\AllowedPortPrivacySettings>
     */
    public function allowed_port_privacy_settings() : array
    {
        return $this->allowed_port_privacy_settings;
    }
}
