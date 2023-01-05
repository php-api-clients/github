<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository;

final class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'MinimalRepository\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    private bool $admin;
    private bool $maintain;
    private bool $push;
    private bool $triage;
    private bool $pull;
    public function admin() : bool
    {
        return $this->admin;
    }
    public function maintain() : bool
    {
        return $this->maintain;
    }
    public function push() : bool
    {
        return $this->push;
    }
    public function triage() : bool
    {
        return $this->triage;
    }
    public function pull() : bool
    {
        return $this->pull;
    }
}