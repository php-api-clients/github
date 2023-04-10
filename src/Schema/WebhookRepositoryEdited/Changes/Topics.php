<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookRepositoryEdited\Changes;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Topics
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":["generated_from_null"]}';
    /**
     * @param ?array<string> $from
     */
    public function __construct(public ?array $from)
    {
    }
}
