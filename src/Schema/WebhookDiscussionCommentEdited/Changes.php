<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated_from_null"}}';
    public function __construct(public Schema\WebhookDiscussionCommentEdited\Changes\Body $body)
    {
    }
}
