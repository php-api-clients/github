<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes;

final readonly class OldPermission
{
    public const SCHEMA_JSON         = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null"}';

    /**
     * from: The previous permissions of the collaborator if the action was edited.
     */
    public function __construct(public string $from)
    {
    }
}
