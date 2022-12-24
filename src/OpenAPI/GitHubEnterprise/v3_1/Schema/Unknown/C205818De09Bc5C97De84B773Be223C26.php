<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C205818De09Bc5C97De84B773Be223C26
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'c_205818de09bc5c97de84b773be223c26';
    public const SCHEMA_DESCRIPTION = '';
    private bool $admin;
    private ?bool $maintain = null;
    private bool $push;
    private ?bool $triage = null;
    private bool $pull;
    public function admin() : bool
    {
        return $this->admin;
    }
    public function maintain() : ?bool
    {
        return $this->maintain;
    }
    public function push() : bool
    {
        return $this->push;
    }
    public function triage() : ?bool
    {
        return $this->triage;
    }
    public function pull() : bool
    {
        return $this->pull;
    }
}
