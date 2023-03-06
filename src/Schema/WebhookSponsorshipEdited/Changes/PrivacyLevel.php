<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookSponsorshipEdited\Changes;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PrivacyLevel
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from"}';
    /**
     * from: The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy.
     */
    public function __construct(public ?string $from)
    {
    }
}
