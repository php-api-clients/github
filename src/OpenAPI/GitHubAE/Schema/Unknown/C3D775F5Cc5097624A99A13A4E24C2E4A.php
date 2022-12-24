<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C3D775F5Cc5097624A99A13A4E24C2E4A
{
    public const SCHEMA_JSON = '{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'c_3d775f5cc5097624a99a13a4e24c2e4a';
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
