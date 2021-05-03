<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Package
{
    public const SCHEMA_TITLE = 'Package';
    public const SPL_HASH = '0000000054d5f9510000000071115dec';
    public const SCHEMA_DESCRIPTION = 'A software package';
    /**
     * Unique identifier of the package.
     */
    private int $id;
    /**
     * The name of the package.
     */
    private string $name;
    private string $package_type;
    private string $url;
    private string $html_url;
    /**
     * The number of versions of the package.
     */
    private int $version_count;
    private string $visibility;
    private $owner;
    private $repository;
    private string $created_at;
    private string $updated_at;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function package_type() : string
    {
        return $this->package_type;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function version_count() : int
    {
        return $this->version_count;
    }
    public function visibility() : string
    {
        return $this->visibility;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function repository()
    {
        return $this->repository;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
