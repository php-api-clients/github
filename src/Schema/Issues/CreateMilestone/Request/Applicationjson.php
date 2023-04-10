<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Issues\CreateMilestone\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["title"],"type":"object","properties":{"title":{"type":"string","description":"The title of the milestone."},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone. Either `open` or `closed`.","default":"open"},"description":{"type":"string","description":"A description of the milestone."},"due_on":{"type":"string","description":"The milestone due date. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title_null","state":"open","description":"generated_description_null","due_on":"1970-01-01T00:00:00+00:00"}';
    /**
     * title: The title of the milestone.
     * state: The state of the milestone. Either `open` or `closed`.
     * description: A description of the milestone.
     * dueOn: The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(public string $title, public ?string $state, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('due_on')] public ?string $dueOn)
    {
    }
}
