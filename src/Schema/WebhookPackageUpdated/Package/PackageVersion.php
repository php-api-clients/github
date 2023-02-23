<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPackageUpdated\Package;

final readonly class PackageVersion
{
    public const SCHEMA_JSON = '{"required":["id","version","summary","name","description","body","body_html","html_url","target_commitish","target_oid","created_at","updated_at","metadata","package_files","author","installation_command"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"body":{"type":"string"},"body_html":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{}},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{}},"name":{"type":"string"},"package_files":{"type":"array","items":{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string","format":"uri"}}},"rubygems_metadata":{"type":"array","items":{}},"source_url":{"type":"string","format":"uri"},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $author;
    public ?string $body;
    public ?string $body_html;
    public ?string $created_at;
    public ?string $description;
    public array $docker_metadata;
    public bool $draft;
    public ?string $html_url;
    public ?int $id;
    public ?string $installation_command;
    public string $manifest;
    public ?array $metadata;
    public ?string $name;
    public ?array $package_files;
    public string $package_url;
    public bool $prerelease;
    public \ApiClients\Client\Github\Schema\WebhookPackageUpdated\Package\PackageVersion\Release $release;
    public array $rubygems_metadata;
    public string $source_url;
    public ?string $summary;
    public string $tag_name;
    public ?string $target_commitish;
    public ?string $target_oid;
    public ?string $updated_at;
    public ?string $version;
    public function __construct(\ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $author, string $body, string $body_html, string $created_at, string $description, array $docker_metadata, bool $draft, string $html_url, int $id, string $installation_command, string $manifest, array $metadata, string $name, array $package_files, string $package_url, bool $prerelease, \ApiClients\Client\Github\Schema\WebhookPackageUpdated\Package\PackageVersion\Release $release, array $rubygems_metadata, string $source_url, string $summary, string $tag_name, string $target_commitish, string $target_oid, string $updated_at, string $version)
    {
        $this->author = $author;
        $this->body = $body;
        $this->body_html = $body_html;
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
        $this->package_files = $package_files;
        $this->package_url = $package_url;
        $this->prerelease = $prerelease;
        $this->release = $release;
        $this->rubygems_metadata = $rubygems_metadata;
        $this->source_url = $source_url;
        $this->summary = $summary;
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->target_oid = $target_oid;
        $this->updated_at = $updated_at;
        $this->version = $version;
    }
}
