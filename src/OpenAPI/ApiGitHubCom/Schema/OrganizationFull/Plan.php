<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull;

final readonly class Plan
{
    public const SCHEMA_JSON = '{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $name;
    public ?int $space;
    public ?int $private_repos;
    public int $filled_seats;
    public int $seats;
    public function __construct(string $name, int $space, int $private_repos, int $filled_seats, int $seats)
    {
        $this->name = $name;
        $this->space = $space;
        $this->private_repos = $private_repos;
        $this->filled_seats = $filled_seats;
        $this->seats = $seats;
    }
}
