<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Collaborator;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"pull":false,"triage":false,"push":false,"maintain":false,"admin":false}';
    public function __construct(public ?bool $pull, public bool $triage, public ?bool $push, public bool $maintain, public ?bool $admin)
    {
    }
}
