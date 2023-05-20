<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookDiscussionCommentEdited;

use ApiClients\Client\GitHub\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"required":["body"],"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated"}}';

    public function __construct(public Schema\WebhookDiscussionCommentEdited\Changes\Body $body)
    {
    }
}
