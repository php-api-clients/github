<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LdapMappingUser;

final class Plan
{
    public const SCHEMA_JSON = '{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'LdapMappingUser\\Plan';
    public const SCHEMA_DESCRIPTION = '';
    private int $collaborators;
    private string $name;
    private int $space;
    private int $private_repos;
    public function collaborators() : int
    {
        return $this->collaborators;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function space() : int
    {
        return $this->space;
    }
    public function private_repos() : int
    {
        return $this->private_repos;
    }
}
