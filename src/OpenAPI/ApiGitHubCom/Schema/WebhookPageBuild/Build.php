<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPageBuild;

final class Build
{
    public const SCHEMA_JSON = '{"required":["url","status","error","pusher","commit","duration","created_at","updated_at"],"type":"object","properties":{"commit":{"type":["string","null"]},"created_at":{"type":"string"},"duration":{"type":"integer"},"error":{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}},"pusher":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"status":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"}},"description":"The [List GitHub Pages builds](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#list-github-pages-builds) itself."}';
    public const SCHEMA_TITLE = 'WebhookPageBuild\\Build';
    public const SCHEMA_DESCRIPTION = 'The [List GitHub Pages builds](https://docs.github.com/rest/reference/repos#list-github-pages-builds) itself.';
    private ?string $commit;
    private string $created_at;
    private int $duration;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build\Error::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build\Error $error;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build\Pusher::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build\Pusher $pusher;
    private string $status;
    private string $updated_at;
    private string $url;
    public function commit() : ?string
    {
        return $this->commit;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function duration() : int
    {
        return $this->duration;
    }
    public function error() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build\Error
    {
        return $this->error;
    }
    public function pusher() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build\Pusher
    {
        return $this->pusher;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
}
