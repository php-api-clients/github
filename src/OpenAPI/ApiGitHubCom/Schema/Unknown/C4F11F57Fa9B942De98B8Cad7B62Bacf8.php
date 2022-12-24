<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C4F11F57Fa9B942De98B8Cad7B62Bacf8
{
    public const SCHEMA_JSON = '{"required":["title"],"type":"object","properties":{"title":{"type":"string","description":"The title of the milestone."},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone. Either `open` or `closed`.","default":"open"},"description":{"type":"string","description":"A description of the milestone."},"due_on":{"type":"string","description":"The milestone due date. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}}}';
    public const SCHEMA_TITLE = 'c_4f11f57fa9b942de98b8cad7b62bacf8';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the milestone.
     */
    private string $title;
    /**
     * The state of the milestone. Either `open` or `closed`.
     */
    private ?string $state = null;
    /**
     * A description of the milestone.
     */
    private ?string $description = null;
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $due_on = null;
    /**
     * The title of the milestone.
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * The state of the milestone. Either `open` or `closed`.
     */
    public function state() : ?string
    {
        return $this->state;
    }
    /**
     * A description of the milestone.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function due_on() : ?string
    {
        return $this->due_on;
    }
}
