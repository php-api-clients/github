<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRegistryPackageUpdated;

final readonly class RegistryPackage
{
    public const SCHEMA_JSON = '{"required":["id","name","namespace","description","ecosystem","package_type","html_url","created_at","updated_at","owner","package_version","registry"],"type":"object","properties":{"created_at":{"type":"string"},"description":{"type":["null"]},"ecosystem":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"namespace":{"type":"string"},"owner":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"package_type":{"type":"string"},"package_version":{"required":["id","version","name","description","summary","body","body_html","html_url","target_commitish","target_oid","created_at","updated_at","metadata","package_files","author","installation_command","package_url"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"type":"string"},"body_html":{"type":"string"},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{"type":["null"]}},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{}},"name":{"type":"string"},"package_files":{"type":"array","items":{"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":"string"},"size":{"type":"integer"},"state":{"type":"string"},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"required":["url","html_url","id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at"],"type":"object","properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}},"rubygems_metadata":{"type":"array","items":{}},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}},"registry":{"type":["object","null"]},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $created_at;
    public mixed $description;
    public ?string $ecosystem;
    public ?string $html_url;
    public ?int $id;
    public ?string $name;
    public ?string $namespace;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $owner;
    public ?string $package_type;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion $package_version;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\ActionsMeta $registry;
    public ?string $updated_at;
    public function __construct(string $created_at, mixed $description, string $ecosystem, string $html_url, int $id, string $name, string $namespace, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $owner, string $package_type, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion $package_version, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\ActionsMeta $registry, string $updated_at)
    {
        $this->created_at = $created_at;
        $this->description = $description;
        $this->ecosystem = $ecosystem;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->namespace = $namespace;
        $this->owner = $owner;
        $this->package_type = $package_type;
        $this->package_version = $package_version;
        $this->registry = $registry;
        $this->updated_at = $updated_at;
    }
}
