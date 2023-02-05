<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Collaborator;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'Collaborator\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $pull;
    public readonly ?bool $triage;
    public readonly bool $push;
    public readonly ?bool $maintain;
    public readonly bool $admin;
    public function __construct(bool $pull, bool $triage, bool $push, bool $maintain, bool $admin)
    {
        $this->pull = $pull;
        $this->triage = $triage;
        $this->push = $push;
        $this->maintain = $maintain;
        $this->admin = $admin;
    }
}
