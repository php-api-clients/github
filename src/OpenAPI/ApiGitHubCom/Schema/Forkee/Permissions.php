<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Forkee;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'Forkee\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $admin;
    public readonly ?bool $maintain;
    public readonly bool $pull;
    public readonly bool $push;
    public readonly ?bool $triage;
    public function __construct(bool $admin, bool $maintain, bool $pull, bool $push, bool $triage)
    {
        $this->admin = $admin;
        $this->maintain = $maintain;
        $this->pull = $pull;
        $this->push = $push;
        $this->triage = $triage;
    }
}
