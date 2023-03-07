<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ContributorActivity;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Weeks
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"w":{"type":"integer"},"a":{"type":"integer"},"d":{"type":"integer"},"c":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"w":13,"a":13,"d":13,"c":13}';
    public function __construct(public ?int $w, public ?int $a, public ?int $d, public ?int $c)
    {
    }
}
