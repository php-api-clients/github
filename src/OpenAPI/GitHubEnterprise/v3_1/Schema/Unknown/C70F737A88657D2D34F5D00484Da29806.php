<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C70F737A88657D2D34F5D00484Da29806
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'c_70f737a88657d2d34f5d00484da29806';
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
