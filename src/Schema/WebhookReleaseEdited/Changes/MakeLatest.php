<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookReleaseEdited\Changes;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
