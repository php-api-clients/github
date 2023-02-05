<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookStatus;

final class Branches
{
    public const SCHEMA_JSON = '{"required":["name","commit","protected"],"type":"object","properties":{"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}},"name":{"type":"string"},"protected":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'WebhookStatus\\Branches';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Branches\Commit $commit;
    public readonly string $name;
    public readonly bool $protected;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Branches\Commit $commit, string $name, bool $protected)
    {
        $this->commit = $commit;
        $this->name = $name;
        $this->protected = $protected;
    }
}
