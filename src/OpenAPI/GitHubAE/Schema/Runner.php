<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Runner
{
    public const SCHEMA_TITLE = 'Self hosted runners';
    public const SCHEMA_DESCRIPTION = 'A self hosted runner';
    /**The id of the runner.**/
    private int $id;
    /**The name of the runner.**/
    private string $name;
    /**The Operating System of the runner.**/
    private string $os;
    /**The status of the runner.**/
    private string $status;
    private boolean $busy;
    private array $labels;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function os() : string
    {
        return $this->os;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function busy() : boolean
    {
        return $this->busy;
    }
    public function labels() : array
    {
        return $this->labels;
    }
}
