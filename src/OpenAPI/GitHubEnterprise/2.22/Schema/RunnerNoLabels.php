<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Schema;

final class RunnerNoLabels
{
    public const SCHEMA_TITLE = 'runner-no-labels';
    public const SCHEMA_DESCRIPTION = '';
    private number $id;
    private string $name;
    private string $os;
    private string $status;
    private boolean $busy;
    public function id() : number
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
}
