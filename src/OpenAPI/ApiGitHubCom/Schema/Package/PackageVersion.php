<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Package;

final class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","summary","name","description","body","body_html","html_url","target_commitish","target_oid","created_at","updated_at","metadata","package_files","author","installation_command"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"body":{"type":"string"},"body_html":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{}},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{}},"name":{"type":"string"},"package_files":{"type":"array","items":{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string","format":"uri"}}},"rubygems_metadata":{"type":"array","items":{}},"source_url":{"type":"string","format":"uri"},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Package\\PackageVersion';
    public const SCHEMA_DESCRIPTION = '';
    private $author;
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
    private ?string $package_url = null;
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
    private ?string $source_url = null;
    private string $summary;
    private ?string $tag_name = null;
    private string $target_commitish;
    private string $target_oid;
    private string $updated_at;
    private string $version;
    public function author()
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
    public function package_url() : ?string
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
    public function source_url() : ?string
    {
        return $this->source_url;
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
