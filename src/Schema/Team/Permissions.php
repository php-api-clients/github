<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Team;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","triage","push","maintain","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"pull":false,"triage":false,"push":false,"maintain":false,"admin":false}';
    public function __construct(public bool $pull, public bool $triage, public bool $push, public bool $maintain, public bool $admin)
    {
    }
}
