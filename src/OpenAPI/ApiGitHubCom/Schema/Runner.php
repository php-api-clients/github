<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Runner
{
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
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner\Labels::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
