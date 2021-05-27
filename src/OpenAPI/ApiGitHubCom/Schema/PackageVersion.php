<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PackageVersion
{
    public const SCHEMA_TITLE = 'Package Version';
    public const SCHEMA_DESCRIPTION = 'A version of a software package';
    /**
     * Unique identifier of the package version.
     */
    private ?int $id = null;
    /**
     * The name of the package version.
     */
    private ?string $name = null;
    private ?string $url = null;
    private ?string $package_html_url = null;
    private ?string $html_url = null;
    private ?string $license = null;
    private ?string $description = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $deleted_at = null;
    private array $metadata = array();
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function package_html_url() : ?string
    {
        return $this->package_html_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function license() : ?string
    {
        return $this->license;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function deleted_at() : ?string
    {
        return $this->deleted_at;
    }
    public function metadata() : array
    {
        return $this->metadata;
    }
}
