<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookBranchProtectionRuleEdited\Changes;

final readonly class AuthorizedActorNames
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":["generated","generated"]}';

    public function __construct(public array $from)
    {
    }
}
