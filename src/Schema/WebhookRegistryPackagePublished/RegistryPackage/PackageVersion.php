<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage;

final readonly class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","name","description","summary","html_url","metadata","package_files","installation_command","package_url"],"type":["object","null"],"properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"oneOf":[{"type":"string"},{"type":"object"}]},"body_html":{"type":"string"},"container_metadata":{"type":"object","properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{}},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{"type":"object","additionalProperties":true}},"name":{"type":"string"},"npm_metadata":{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"bugs":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"string"}},"contributors":{"type":"array","items":{"type":"string"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}},"nuget_metadata":{"type":["array","null"],"items":{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}},"package_files":{"type":"array","items":{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":["string","null"]},"size":{"type":"integer"},"state":{"type":["string","null"]},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"type":"object","properties":{"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}},"rubygems_metadata":{"type":"array","items":{}},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public \ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $author;
    public mixed $body;
    public string $body_html;
    public \ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata $container_metadata;
    public string $created_at;
    public ?string $description;
    public array $docker_metadata;
    public bool $draft;
    public ?string $html_url;
    public ?int $id;
    public ?string $installation_command;
    public string $manifest;
    public ?array $metadata;
    public ?string $name;
    public ?\ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata $npm_metadata;
    public ?array $nuget_metadata;
    public ?array $package_files;
    public ?string $package_url;
    public bool $prerelease;
    public \ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Release $release;
    public array $rubygems_metadata;
    public ?string $summary;
    public string $tag_name;
    public string $target_commitish;
    public string $target_oid;
    public string $updated_at;
    public ?string $version;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $author, mixed $body, string $body_html, \ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata $container_metadata, string $created_at, string $description, array $docker_metadata, bool $draft, string $html_url, int $id, string $installation_command, string $manifest, array $metadata, string $name, \ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata $npm_metadata, array $nuget_metadata, array $package_files, string $package_url, bool $prerelease, \ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Release $release, array $rubygems_metadata, string $summary, string $tag_name, string $target_commitish, string $target_oid, string $updated_at, string $version)
    {
        $this->author = $author;
        $this->body = $body;
        $this->body_html = $body_html;
        $this->container_metadata = $container_metadata;
        $this->created_at = $created_at;
        $this->description = $description;
        $this->docker_metadata = $docker_metadata;
        $this->draft = $draft;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->installation_command = $installation_command;
        $this->manifest = $manifest;
        $this->metadata = $metadata;
        $this->name = $name;
        $this->npm_metadata = $npm_metadata;
        $this->nuget_metadata = $nuget_metadata;
        $this->package_files = $package_files;
        $this->package_url = $package_url;
        $this->prerelease = $prerelease;
        $this->release = $release;
        $this->rubygems_metadata = $rubygems_metadata;
        $this->summary = $summary;
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->target_oid = $target_oid;
        $this->updated_at = $updated_at;
        $this->version = $version;
    }
}
