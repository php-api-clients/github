<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Issues\CreateMilestone\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["title"],"type":"object","properties":{"title":{"type":"string","description":"The title of the milestone."},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone. Either `open` or `closed`.","default":"open"},"description":{"type":"string","description":"A description of the milestone."},"due_on":{"type":"string","description":"The milestone due date. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","state":"generated_state","description":"generated_description","due_on":"generated_due_on"}';
    /**
     * title: The title of the milestone.
     * state: The state of the milestone. Either `open` or `closed`.
     * description: A description of the milestone.
     * due_on: The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(public ?string $title, public string $state, public string $description, public string $due_on)
    {
    }
}
