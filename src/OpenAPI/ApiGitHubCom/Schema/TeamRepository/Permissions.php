<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamRepository;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'TeamRepository\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $admin;
    public readonly bool $pull;
    public readonly ?bool $triage;
    public readonly bool $push;
    public readonly ?bool $maintain;
    public function __construct(bool $admin, bool $pull, bool $triage, bool $push, bool $maintain)
    {
        $this->admin = $admin;
        $this->pull = $pull;
        $this->triage = $triage;
        $this->push = $push;
        $this->maintain = $maintain;
    }
}
