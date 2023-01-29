<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContributorActivity;

final class Weeks
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"w":{"type":"integer"},"a":{"type":"integer"},"d":{"type":"integer"},"c":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'ContributorActivity\\Weeks';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $w;
    public readonly int $a;
    public readonly int $d;
    public readonly int $c;
    public function __construct(int $w, int $a, int $d, int $c)
    {
        $this->w = $w;
        $this->a = $a;
        $this->d = $d;
        $this->c = $c;
    }
}
