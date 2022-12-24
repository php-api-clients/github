<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CE87428107B8Ae220Ecd4D320D87356F6
{
    public const SCHEMA_JSON = '{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'c_e87428107b8ae220ecd4d320d87356f6';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private int $space;
    private int $private_repos;
    private ?int $filled_seats = null;
    private ?int $seats = null;
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
    public function filled_seats() : ?int
    {
        return $this->filled_seats;
    }
    public function seats() : ?int
    {
        return $this->seats;
    }
}
