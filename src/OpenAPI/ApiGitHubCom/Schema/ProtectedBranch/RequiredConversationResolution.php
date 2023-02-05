<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch;

final class RequiredConversationResolution
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\RequiredConversationResolution';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $enabled;
    public function __construct(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
