<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PrivateUser;

final class Plan
{
    public const SCHEMA_JSON = '{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'PrivateUser\\Plan';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $collaborators;
    public readonly string $name;
    public readonly int $space;
    public readonly int $private_repos;
    public function __construct(int $collaborators, string $name, int $space, int $private_repos)
    {
        $this->collaborators = $collaborators;
        $this->name = $name;
        $this->space = $space;
        $this->private_repos = $private_repos;
    }
}
