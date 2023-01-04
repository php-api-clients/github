<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Collaborator;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'Collaborator\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    private bool $pull;
    private ?bool $triage = null;
    private bool $push;
    private ?bool $maintain = null;
    private bool $admin;
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
    public function admin() : bool
    {
        return $this->admin;
    }
}
