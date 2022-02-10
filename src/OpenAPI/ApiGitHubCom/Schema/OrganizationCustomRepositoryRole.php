<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationCustomRepositoryRole
{
    public const SCHEMA_TITLE = 'Organization Custom Repository Role';
    public const SCHEMA_DESCRIPTION = 'Custom repository roles created by organization administrators';
    private int $id;
    private string $name;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
}
