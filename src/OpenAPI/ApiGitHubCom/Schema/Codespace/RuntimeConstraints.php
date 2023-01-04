<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Codespace;

final class RuntimeConstraints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"allowed_port_privacy_settings":{"type":["array","null"],"items":{"type":"string"},"description":"The privacy settings a user can select from when forwarding a port."}}}';
    public const SCHEMA_TITLE = 'Codespace\\RuntimeConstraints';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The privacy settings a user can select from when forwarding a port.
     */
    private $allowed_port_privacy_settings;
    /**
     * The privacy settings a user can select from when forwarding a port.
     */
    public function allowed_port_privacy_settings()
    {
        return $this->allowed_port_privacy_settings;
    }
}
