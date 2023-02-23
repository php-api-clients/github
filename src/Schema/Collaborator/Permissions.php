<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Collaborator;

final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $pull;
    public bool $triage;
    public ?bool $push;
    public bool $maintain;
    public ?bool $admin;
    public function __construct(bool $pull, bool $triage, bool $push, bool $maintain, bool $admin)
    {
        $this->pull = $pull;
        $this->triage = $triage;
        $this->push = $push;
        $this->maintain = $maintain;
        $this->admin = $admin;
    }
}
