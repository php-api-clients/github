<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FullRepository;

final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["admin","pull","push"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $admin;
    public bool $maintain;
    public ?bool $push;
    public bool $triage;
    public ?bool $pull;
    public function __construct(bool $admin, bool $maintain, bool $push, bool $triage, bool $pull)
    {
        $this->admin = $admin;
        $this->maintain = $maintain;
        $this->push = $push;
        $this->triage = $triage;
        $this->pull = $pull;
    }
}
