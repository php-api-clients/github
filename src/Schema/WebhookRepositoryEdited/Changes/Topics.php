<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Topics
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":["generated_from"]}';
    /**
     * @param ?array<string> $from
     */
    public function __construct(public ?array $from)
    {
    }
}
