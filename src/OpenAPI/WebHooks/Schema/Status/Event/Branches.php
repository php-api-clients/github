<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Status\Event;

final class Branches
{
    public const SCHEMA_TITLE = 'status$event::branches';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private array $commit = array();
    private bool $protected;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : array
    {
        return $this->commit;
    }
    public function protected() : bool
    {
        return $this->protected;
    }
}
