<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryRenamed\Changes;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Repository
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":{"from":"generated_from"}}';
    public function __construct(public ?Schema\WebhookDiscussionCommentEdited\Changes\Body $name)
    {
    }
}
