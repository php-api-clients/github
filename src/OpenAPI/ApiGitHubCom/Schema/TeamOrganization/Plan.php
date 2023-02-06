<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamOrganization;

final class Plan
{
    public const SCHEMA_JSON = '{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'TeamOrganization\\Plan';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $name;
    public readonly int $space;
    public readonly int $private_repos;
    public readonly ?int $filled_seats;
    public readonly ?int $seats;
    public function __construct(string $name, int $space, int $private_repos, int $filled_seats, int $seats)
    {
        $this->name = $name;
        $this->space = $space;
        $this->private_repos = $private_repos;
        $this->filled_seats = $filled_seats;
        $this->seats = $seats;
    }
}
