<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Activity\SetThreadSubscription\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ignored":{"type":"boolean","description":"Whether to block all notifications from a thread.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ignored":false}';
    /**
     * ignored: Whether to block all notifications from a thread.
     */
    public function __construct(public ?bool $ignored)
    {
    }
}
