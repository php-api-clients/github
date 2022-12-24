<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C59Ec692B5Db71635C3Bb306C092A7502
{
    public const SCHEMA_JSON = '{"title":"Release","required":["url","assets_url","upload_url","html_url","id","node_id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at","assets","tarball_url","zipball_url","body"],"type":"object","properties":{"assets":{"type":"array","items":{"title":"Release Asset","required":["url","browser_download_url","id","node_id","name","label","state","content_type","size","download_count","created_at","updated_at"],"type":"object","properties":{"browser_download_url":{"type":"string","format":"uri"},"content_type":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"download_count":{"type":"integer"},"id":{"type":"integer"},"label":{"type":["string","null"]},"name":{"type":"string","description":"The file name of the asset."},"node_id":{"type":"string"},"size":{"type":"integer"},"state":{"enum":["uploaded"],"type":"string","description":"State of the release asset."},"updated_at":{"type":"string","format":"date-time"},"uploader":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"}},"description":"Data related to a release."}},"assets_url":{"type":"string","format":"uri"},"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"body":{"type":["string","null"]},"created_at":{"type":["string","null"],"format":"date-time"},"discussion_url":{"type":"string","format":"uri"},"draft":{"type":"boolean","description":"Whether the release is a draft or published"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":["string","null"]},"node_id":{"type":"string"},"prerelease":{"type":"boolean","description":"Whether the release is identified as a prerelease or a full release."},"published_at":{"type":["string","null"],"format":"date-time"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"tag_name":{"type":"string","description":"The name of the tag."},"tarball_url":{"type":["string","null"],"format":"uri"},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from."},"upload_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"},"zipball_url":{"type":["string","null"],"format":"uri"}},"description":"The [release](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/repos\\/#get-a-release) object."}';
    public const SCHEMA_TITLE = 'Release';
    public const SCHEMA_DESCRIPTION = 'The [release](https://docs.github.com/github-ae@latest/rest/reference/repos/#get-a-release) object.';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C12E12Bc7Bad18578253E20496F2B22B2>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C12E12Bc7Bad18578253E20496F2B22B2::class)
     */
    private array $assets = array();
    private string $assets_url;
    private $author;
    private $body;
    private $created_at;
    private ?string $discussion_url = null;
    /**
     * Whether the release is a draft or published
     */
    private bool $draft;
    private string $html_url;
    private int $id;
    private $name;
    private string $node_id;
    /**
     * Whether the release is identified as a prerelease or a full release.
     */
    private bool $prerelease;
    private $published_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C559Ae5A21A07006714156653D2E15261::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C559Ae5A21A07006714156653D2E15261 $reactions = null;
    /**
     * The name of the tag.
     */
    private string $tag_name;
    private $tarball_url;
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    private string $target_commitish;
    private string $upload_url;
    private string $url;
    private $zipball_url;
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C12E12Bc7Bad18578253E20496F2B22B2>
     */
    public function assets() : array
    {
        return $this->assets;
    }
    public function assets_url() : string
    {
        return $this->assets_url;
    }
    public function author()
    {
        return $this->author;
    }
    public function body()
    {
        return $this->body;
    }
    public function created_at()
    {
        return $this->created_at;
    }
    public function discussion_url() : ?string
    {
        return $this->discussion_url;
    }
    /**
     * Whether the release is a draft or published
     */
    public function draft() : bool
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
    public function name()
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Whether the release is identified as a prerelease or a full release.
     */
    public function prerelease() : bool
    {
        return $this->prerelease;
    }
    public function published_at()
    {
        return $this->published_at;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C559Ae5A21A07006714156653D2E15261
    {
        return $this->reactions;
    }
    /**
     * The name of the tag.
     */
    public function tag_name() : string
    {
        return $this->tag_name;
    }
    public function tarball_url()
    {
        return $this->tarball_url;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    public function target_commitish() : string
    {
        return $this->target_commitish;
    }
    public function upload_url() : string
    {
        return $this->upload_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function zipball_url()
    {
        return $this->zipball_url;
    }
}
