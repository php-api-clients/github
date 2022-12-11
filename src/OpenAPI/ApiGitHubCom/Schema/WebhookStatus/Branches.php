<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookStatus;

final class Branches
{
    public const SCHEMA_TITLE = 'webhook-status::branches';
    public const SCHEMA_DESCRIPTION = '';
    private array $commit = array();
    private string $name;
    private bool $protected;
    public function commit() : array
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
