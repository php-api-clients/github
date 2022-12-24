<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CDfe9D4A99Dcb7B1F1Bad037887Dd7D46
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The title of the milestone."},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone. Either `open` or `closed`.","default":"open"},"description":{"type":"string","description":"A description of the milestone."},"due_on":{"type":"string","description":"The milestone due date. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}}}';
    public const SCHEMA_TITLE = 'c_dfe9d4a99dcb7b1f1bad037887dd7d46';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the milestone.
     */
    private string $title;
    /**
     * The state of the milestone. Either `open` or `closed`.
     */
    private string $state;
    /**
     * A description of the milestone.
     */
    private string $description;
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $due_on;
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
    public function state() : string
    {
        return $this->state;
    }
    /**
     * A description of the milestone.
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function due_on() : string
    {
        return $this->due_on;
    }
}
