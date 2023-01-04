<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Team;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","triage","push","maintain","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'Team\\Permissions';
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
