<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectsV2ProjectEdited\Changes;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Public_
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":false,"to":false}';
    public function __construct(public ?bool $from, public ?bool $to)
    {
    }
}
