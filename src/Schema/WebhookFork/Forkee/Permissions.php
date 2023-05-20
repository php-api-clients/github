<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookFork\Forkee;

final readonly class Permissions
{
    public const SCHEMA_JSON         = '{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"admin":false,"maintain":false,"pull":false,"push":false,"triage":false}';

    public function __construct(public bool $admin, public ?bool $maintain, public bool $pull, public bool $push, public ?bool $triage)
    {
    }
}
