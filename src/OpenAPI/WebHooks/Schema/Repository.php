<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Repository
{
    public const SCHEMA_TITLE = 'Repository';
    public const SPL_HASH = '000000004536431f000000004b854126';
    public const SCHEMA_DESCRIPTION = 'A git repository';
    /**
     * Unique identifier of the repository
     */
    private ?int $id = null;
    /**
     * The name of the repository.
     */
    private ?string $name = null;
    private ?string $full_name = null;
    private $license;
    private $organization;
    private ?int $forks = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function full_name() : ?string
    {
        return $this->full_name;
    }
    public function license()
    {
        return $this->license;
    }
    public function organization()
    {
        return $this->organization;
    }
    public function forks() : ?int
    {
        return $this->forks;
    }
}
