<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C2437Cc4E34F628Ef0Fddbd88037B333D
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]},"state":{"type":"string","description":"State of the project; either \'open\' or \'closed\'","examples":["open"]},"organization_permission":{"enum":["read","write","admin","none"],"type":"string","description":"The baseline permission that all organization members have on this project"},"private":{"type":"boolean","description":"Whether or not this project can be seen by everyone."}}}';
    public const SCHEMA_TITLE = 'c_2437cc4e34f628ef0fddbd88037b333d';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the project
     */
    private string $name;
    /**
     * Body of the project
     */
    private $body;
    /**
     * State of the project; either 'open' or 'closed'
     */
    private string $state;
    /**
     * The baseline permission that all organization members have on this project
     */
    private string $organization_permission;
    /**
     * Whether or not this project can be seen by everyone.
     */
    private bool $private;
    /**
     * Name of the project
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Body of the project
     */
    public function body()
    {
        return $this->body;
    }
    /**
     * State of the project; either 'open' or 'closed'
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The baseline permission that all organization members have on this project
     */
    public function organization_permission() : string
    {
        return $this->organization_permission;
    }
    /**
     * Whether or not this project can be seen by everyone.
     */
    public function private() : bool
    {
        return $this->private;
    }
}
