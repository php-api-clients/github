<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRegistryPackagePublished;

final class RegistryPackage
{
    public const SCHEMA_JSON = '{"required":["id","name","namespace","description","ecosystem","package_type","html_url","created_at","updated_at","owner","package_version","registry"],"type":"object","properties":{"created_at":{"type":["string","null"]},"description":{"type":["string","null"]},"ecosystem":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":"string"},"namespace":{"type":"string"},"owner":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"package_type":{"type":"string"},"package_version":{"required":["id","version","name","description","summary","html_url","metadata","package_files","installation_command","package_url"],"type":["object","null"],"properties":{"author":{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"oneOf":[{"type":"string"},{"type":"object"}]},"body_html":{"type":"string"},"container_metadata":{"type":"object","properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}},"created_at":{"type":"string"},"description":{"type":"string"},"docker_metadata":{"type":"array","items":{}},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"installation_command":{"type":"string"},"manifest":{"type":"string"},"metadata":{"type":"array","items":{"type":"object","additionalProperties":true}},"name":{"type":"string"},"npm_metadata":{"type":["object","null"],"properties":{"name":{"type":"string"},"version":{"type":"string"},"npm_user":{"type":"string"},"author":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"bugs":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"dependencies":{"type":"object"},"dev_dependencies":{"type":"object"},"peer_dependencies":{"type":"object"},"optional_dependencies":{"type":"object"},"description":{"type":"string"},"dist":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"git_head":{"type":"string"},"homepage":{"type":"string"},"license":{"type":"string"},"main":{"type":"string"},"repository":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"scripts":{"type":"object"},"id":{"type":"string"},"node_version":{"type":"string"},"npm_version":{"type":"string"},"has_shrinkwrap":{"type":"boolean"},"maintainers":{"type":"array","items":{"type":"string"}},"contributors":{"type":"array","items":{"type":"string"}},"engines":{"type":"object"},"keywords":{"type":"array","items":{"type":"string"}},"files":{"type":"array","items":{"type":"string"}},"bin":{"type":"object"},"man":{"type":"object"},"directories":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"os":{"type":"array","items":{"type":"string"}},"cpu":{"type":"array","items":{"type":"string"}},"readme":{"type":"string"},"installation_command":{"type":"string"},"release_id":{"type":"integer"},"commit_oid":{"type":"string"},"published_via_actions":{"type":"boolean"},"deleted_by_id":{"type":"integer"}}},"nuget_metadata":{"type":["array","null"],"items":{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}},"package_files":{"type":"array","items":{"required":["download_url","id","name","sha256","sha1","md5","content_type","state","size","created_at","updated_at"],"type":"object","properties":{"content_type":{"type":"string"},"created_at":{"type":"string"},"download_url":{"type":"string"},"id":{"type":"integer"},"md5":{"type":["string","null"]},"name":{"type":"string"},"sha1":{"type":["string","null"]},"sha256":{"type":["string","null"]},"size":{"type":"integer"},"state":{"type":["string","null"]},"updated_at":{"type":"string"}}}},"package_url":{"type":"string"},"prerelease":{"type":"boolean"},"release":{"type":"object","properties":{"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}},"rubygems_metadata":{"type":"array","items":{}},"summary":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"target_oid":{"type":"string"},"updated_at":{"type":"string"},"version":{"type":"string"}}},"registry":{"type":["object","null"],"properties":{"about_url":{"type":"string"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"},"vendor":{"type":"string"}}},"updated_at":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'WebhookRegistryPackagePublished\\RegistryPackage';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $created_at;
    private ?string $description;
    private string $ecosystem;
    private string $html_url;
    private int $id;
    private string $name;
    private string $namespace;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\Owner::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\Owner $owner;
    private string $package_type;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\PackageVersion::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\PackageVersion $package_version;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\Registry::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\Registry $registry;
    private ?string $updated_at;
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function ecosystem() : string
    {
        return $this->ecosystem;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function namespace() : string
    {
        return $this->namespace;
    }
    public function owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\Owner
    {
        return $this->owner;
    }
    public function package_type() : string
    {
        return $this->package_type;
    }
    public function package_version() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\PackageVersion
    {
        return $this->package_version;
    }
    public function registry() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage\Registry
    {
        return $this->registry;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
}
