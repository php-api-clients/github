<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Activity\SetRepoSubscription\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"subscribed":{"type":"boolean","description":"Determines if notifications should be received from this repository."},"ignored":{"type":"boolean","description":"Determines if all notifications should be blocked from this repository."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"subscribed":false,"ignored":false}';
    /**
     * subscribed: Determines if notifications should be received from this repository.
     * ignored: Determines if all notifications should be blocked from this repository.
     */
    public function __construct(public ?bool $subscribed, public ?bool $ignored)
    {
    }
}
