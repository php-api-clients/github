<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Runner
{
    public const SCHEMA_JSON = '{"title":"Self hosted runners","required":["id","name","os","status","busy","labels"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the runner.","examples":[5]},"name":{"type":"string","description":"The name of the runner.","examples":["iMac"]},"os":{"type":"string","description":"The Operating System of the runner.","examples":["macos"]},"status":{"type":"string","description":"The status of the runner.","examples":["online"]},"busy":{"type":"boolean"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}},"description":"A self hosted runner"}';
    public const SCHEMA_TITLE = 'Self hosted runners';
    public const SCHEMA_DESCRIPTION = 'A self hosted runner';
    /**
     * The id of the runner.
     */
    private int $id;
    /**
     * The name of the runner.
     */
    private string $name;
    /**
     * The Operating System of the runner.
     */
    private string $os;
    /**
     * The status of the runner.
     */
    private string $status;
    private bool $busy;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerLabel>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerLabel::class)
     */
    private array $labels = array();
    /**
     * The id of the runner.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the runner.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The Operating System of the runner.
     */
    public function os() : string
    {
        return $this->os;
    }
    /**
     * The status of the runner.
     */
    public function status() : string
    {
        return $this->status;
    }
    public function busy() : bool
    {
        return $this->busy;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\RunnerLabel>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
