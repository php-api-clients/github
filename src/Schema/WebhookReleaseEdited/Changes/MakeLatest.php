<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MakeLatest
{
    public const SCHEMA_JSON = '{"required":["to"],"type":"object","properties":{"to":{"type":"boolean","description":"Whether this release was explicitly `edited` to be the latest."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"to":false}';
    /**
     * to: Whether this release was explicitly `edited` to be the latest.
     */
    public function __construct(public bool $to)
    {
    }
}
