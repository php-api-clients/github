<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C0Cb51C69E939Ab7Bd52C4E0A05A5E968
{
    public const SCHEMA_JSON = '{"required":["pull","triage","push","maintain","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'c_0cb51c69e939ab7bd52c4e0a05a5e968';
    public const SCHEMA_DESCRIPTION = '';
    private bool $pull;
    private bool $triage;
    private bool $push;
    private bool $maintain;
    private bool $admin;
    public function pull() : bool
    {
        return $this->pull;
    }
    public function triage() : bool
    {
        return $this->triage;
    }
    public function push() : bool
    {
        return $this->push;
    }
    public function maintain() : bool
    {
        return $this->maintain;
    }
    public function admin() : bool
    {
        return $this->admin;
    }
}
