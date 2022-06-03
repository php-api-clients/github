<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class RunnerNoLabels
{
    public const SCHEMA_TITLE = 'runner-no-labels';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $os;
    private string $status;
    private bool $busy;
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
    public function busy() : bool
    {
        return $this->busy;
    }
}
