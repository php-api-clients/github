<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class RunnerNoLabels
{
    public const SCHEMA_TITLE = 'runner-no-labels';
    public const SPL_HASH = '0000000031ee596100000000484d7fbe';
    public const SCHEMA_DESCRIPTION = '';
    private number $id;
    private string $name;
    private string $os;
    private string $status;
    private bool $busy;
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
    public function busy() : bool
    {
        return $this->busy;
    }
}
