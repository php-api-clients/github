<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release;

final class Assets
{
    public const SCHEMA_JSON = '{"title":"Release Asset","required":["url","browser_download_url","id","node_id","name","label","state","content_type","size","download_count","created_at","updated_at"],"type":"object","properties":{"browser_download_url":{"type":"string","format":"uri"},"content_type":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"download_count":{"type":"integer"},"id":{"type":"integer"},"label":{"type":["string","null"]},"name":{"type":"string","description":"The file name of the asset."},"node_id":{"type":"string"},"size":{"type":"integer"},"state":{"enum":["uploaded"],"type":"string","description":"State of the release asset."},"updated_at":{"type":"string","format":"date-time"},"uploader":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"}},"description":"Data related to a release."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Release Asset';
    public const SCHEMA_DESCRIPTION = 'Data related to a release.';
    public readonly string $browser_download_url;
    public readonly string $content_type;
    public readonly string $created_at;
    public readonly int $download_count;
    public readonly int $id;
    public readonly ?string $label;
    /**
     * The file name of the asset.
     */
    public readonly string $name;
    public readonly string $node_id;
    public readonly int $size;
    /**
     * State of the release asset.
     */
    public readonly string $state;
    public readonly string $updated_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Assets\Uploader $uploader;
    public readonly string $url;
    public function __construct(string $browser_download_url, string $content_type, string $created_at, int $download_count, int $id, string $label, string $name, string $node_id, int $size, string $state, string $updated_at, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Assets\Uploader $uploader, string $url)
    {
        $this->browser_download_url = $browser_download_url;
        $this->content_type = $content_type;
        $this->created_at = $created_at;
        $this->download_count = $download_count;
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->size = $size;
        $this->state = $state;
        $this->updated_at = $updated_at;
        $this->uploader = $uploader;
        $this->url = $url;
    }
}
