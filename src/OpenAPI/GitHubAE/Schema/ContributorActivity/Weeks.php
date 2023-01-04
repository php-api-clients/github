<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContributorActivity;

final class Weeks
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"w":{"type":"integer"},"a":{"type":"integer"},"d":{"type":"integer"},"c":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'ContributorActivity\\Weeks';
    public const SCHEMA_DESCRIPTION = '';
    private int $w;
    private int $a;
    private int $d;
    private int $c;
    public function w() : int
    {
        return $this->w;
    }
    public function a() : int
    {
        return $this->a;
    }
    public function d() : int
    {
        return $this->d;
    }
    public function c() : int
    {
        return $this->c;
    }
}
