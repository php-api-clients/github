<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookSponsorshipEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"privacy_level":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"privacy_level":{"from":"generated_from_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('privacy_level')] public ?Schema\WebhookSponsorshipEdited\Changes\PrivacyLevel $privacyLevel)
    {
    }
}
