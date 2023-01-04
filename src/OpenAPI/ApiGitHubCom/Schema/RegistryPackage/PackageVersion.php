<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage;

final class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","name","description","summary","body","body_html","html_url","target_commitish","target_oid","created_at","updated_at","metadata","package_files","author","installation_command","package_url"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"type":"string"},"body_html":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{"type":["null"]}},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{}},"name":{"type":"string"},"package_files":{"type":"array","items":{"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}},"rubygems_metadata":{"type":"array","items":{}},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'RegistryPackage\\PackageVersion';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Author $author;
    private string $body;
    private string $body_html;
    private string $created_at;
    private string $description;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\DockerMetadata>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\DockerMetadata::class)
     */
    private array $docker_metadata = array();
    private ?bool $draft = null;
    private string $html_url;
    private int $id;
    private string $installation_command;
    private ?string $manifest = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata::class)
     */
    private array $metadata = array();
    private string $name;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\PackageFiles>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\PackageFiles::class)
     */
    private array $package_files = array();
    private string $package_url;
    private ?bool $prerelease = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Release::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Release $release = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\RubygemsMetadata>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\RubygemsMetadata::class)
     */
    private array $rubygems_metadata = array();
    private string $summary;
    private ?string $tag_name = null;
    private string $target_commitish;
    private string $target_oid;
    private string $updated_at;
    private string $version;
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Author
    {
        return $this->author;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function description() : string
    {
        return $this->description;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\DockerMetadata>
     */
    public function docker_metadata() : array
    {
        return $this->docker_metadata;
    }
    public function draft() : ?bool
    {
        return $this->draft;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function installation_command() : string
    {
        return $this->installation_command;
    }
    public function manifest() : ?string
    {
        return $this->manifest;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata>
     */
    public function metadata() : array
    {
        return $this->metadata;
    }
    public function name() : string
    {
        return $this->name;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\PackageFiles>
     */
    public function package_files() : array
    {
        return $this->package_files;
    }
    public function package_url() : string
    {
        return $this->package_url;
    }
    public function prerelease() : ?bool
    {
        return $this->prerelease;
    }
    public function release() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Release
    {
        return $this->release;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\RubygemsMetadata>
     */
    public function rubygems_metadata() : array
    {
        return $this->rubygems_metadata;
    }
    public function summary() : string
    {
        return $this->summary;
    }
    public function tag_name() : ?string
    {
        return $this->tag_name;
    }
    public function target_commitish() : string
    {
        return $this->target_commitish;
    }
    public function target_oid() : string
    {
        return $this->target_oid;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function version() : string
    {
        return $this->version;
    }
}
