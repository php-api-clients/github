<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Commit;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Stats
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"additions":{"type":"integer"},"deletions":{"type":"integer"},"total":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"additions":13,"deletions":13,"total":13}';
    public function __construct(public ?int $additions, public ?int $deletions, public ?int $total)
    {
    }
}
