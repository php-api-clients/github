<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookStatus;

final class Branches
{
    public const SCHEMA_JSON = '{"required":["name","commit","protected"],"type":"object","properties":{"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}},"name":{"type":"string"},"protected":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'WebhookStatus\\Branches';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Branches\Commit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Branches\Commit $commit;
    private string $name;
    private bool $protected;
    public function commit() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Branches\Commit
    {
        return $this->commit;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
}
