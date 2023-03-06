<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":{"from":"generated_from"},"slug":{"from":"generated_from"}}';
    public function __construct(public ?Schema\WebhookDiscussionCommentEdited\Changes\Body $login, public ?Schema\WebhookDiscussionCommentEdited\Changes\Body $slug)
    {
    }
}
