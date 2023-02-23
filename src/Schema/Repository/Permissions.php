<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repository;

final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $admin;
    public ?bool $pull;
    public bool $triage;
    public ?bool $push;
    public bool $maintain;
    public function __construct(bool $admin, bool $pull, bool $triage, bool $push, bool $maintain)
    {
        $this->admin = $admin;
        $this->pull = $pull;
        $this->triage = $triage;
        $this->push = $push;
        $this->maintain = $maintain;
    }
}
