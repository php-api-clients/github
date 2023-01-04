<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TeamRepository;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'TeamRepository\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    private bool $admin;
    private bool $pull;
    private ?bool $triage = null;
    private bool $push;
    private ?bool $maintain = null;
    public function admin() : bool
    {
        return $this->admin;
    }
    public function pull() : bool
    {
        return $this->pull;
    }
    public function triage() : ?bool
    {
        return $this->triage;
    }
    public function push() : bool
    {
        return $this->push;
    }
    public function maintain() : ?bool
    {
        return $this->maintain;
    }
}
