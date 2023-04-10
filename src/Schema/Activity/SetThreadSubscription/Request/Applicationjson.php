<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Activity\SetThreadSubscription\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
