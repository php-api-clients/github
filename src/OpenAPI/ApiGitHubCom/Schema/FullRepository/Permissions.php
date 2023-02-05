<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'FullRepository\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $admin;
    public readonly ?bool $maintain;
    public readonly bool $push;
    public readonly ?bool $triage;
    public readonly bool $pull;
    public function __construct(bool $admin, bool $maintain, bool $push, bool $triage, bool $pull)
    {
        $this->admin = $admin;
        $this->maintain = $maintain;
        $this->push = $push;
        $this->triage = $triage;
        $this->pull = $pull;
    }
}
