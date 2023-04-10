<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookInstallationTargetRenamed;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":{"from":"generated_from_null"},"slug":{"from":"generated_from_null"}}';
    public function __construct(public ?Schema\WebhookInstallationTargetRenamed\Changes\Login $login, public ?Schema\WebhookInstallationTargetRenamed\Changes\Slug $slug)
    {
    }
}
