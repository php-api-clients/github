<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release;

final class Assets
{
    public const SCHEMA_JSON = '{"title":"Release Asset","required":["url","browser_download_url","id","node_id","name","label","state","content_type","size","download_count","created_at","updated_at"],"type":"object","properties":{"browser_download_url":{"type":"string","format":"uri"},"content_type":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"download_count":{"type":"integer"},"id":{"type":"integer"},"label":{"type":["string","null"]},"name":{"type":"string","description":"The file name of the asset."},"node_id":{"type":"string"},"size":{"type":"integer"},"state":{"enum":["uploaded"],"type":"string","description":"State of the release asset."},"updated_at":{"type":"string","format":"date-time"},"uploader":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"}},"description":"Data related to a release."}';
    public const SCHEMA_TITLE = 'Release Asset';
    public const SCHEMA_DESCRIPTION = 'Data related to a release.';
    private string $browser_download_url;
    private string $content_type;
    private string $created_at;
    private int $download_count;
    private int $id;
    private ?string $label;
    /**
     * The file name of the asset.
     */
    private string $name;
    private string $node_id;
    private int $size;
    /**
     * State of the release asset.
     */
    private string $state;
    private string $updated_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Assets\Uploader::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Assets\Uploader $uploader = null;
    private string $url;
    public function browser_download_url() : string
    {
        return $this->browser_download_url;
    }
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function download_count() : int
    {
        return $this->download_count;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function label() : ?string
    {
        return $this->label;
    }
    /**
     * The file name of the asset.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function size() : int
    {
        return $this->size;
    }
    /**
     * State of the release asset.
     */
    public function state() : string
    {
        return $this->state;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function uploader() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Assets\Uploader
    {
        return $this->uploader;
    }
    public function url() : string
    {
        return $this->url;
    }
}
