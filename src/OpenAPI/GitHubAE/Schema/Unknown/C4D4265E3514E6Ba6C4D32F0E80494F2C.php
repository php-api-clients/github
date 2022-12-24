<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C4D4265E3514E6Ba6C4D32F0E80494F2C
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'c_4d4265e3514e6ba6c4d32f0e80494f2c';
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
