<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited;

use ApiClients\Client\GitHub\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":{"from":"generated"}}';

    public function __construct(public ?Schema\WebhookProjectEdited\Changes\Body $body)
    {
    }
}
