<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

final readonly class Release
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"prerelease":{"type":"boolean"},"published_at":{"type":"string"},"tag_name":{"type":"string"},"target_commitish":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $author;
    public ?string $created_at;
    public ?bool $draft;
    public ?string $html_url;
    public ?int $id;
    public ?string $name;
    public ?bool $prerelease;
    public ?string $published_at;
    public ?string $tag_name;
    public ?string $target_commitish;
    public ?string $url;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $author, string $created_at, bool $draft, string $html_url, int $id, string $name, bool $prerelease, string $published_at, string $tag_name, string $target_commitish, string $url)
    {
        $this->author = $author;
        $this->created_at = $created_at;
        $this->draft = $draft;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->prerelease = $prerelease;
        $this->published_at = $published_at;
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->url = $url;
    }
}
