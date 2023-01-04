<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewRepository;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'NewRepository\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    private bool $admin;
    private ?bool $maintain = null;
    private bool $pull;
    private bool $push;
    private ?bool $triage = null;
    public function admin() : bool
    {
        return $this->admin;
    }
    public function maintain() : ?bool
    {
        return $this->maintain;
    }
    public function pull() : bool
    {
        return $this->pull;
    }
    public function push() : bool
    {
        return $this->push;
    }
    public function triage() : ?bool
    {
        return $this->triage;
    }
}
