<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookReleaseCreated;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Reactions;

final readonly class Release
{
    public const SCHEMA_JSON        = '{"title":"Release","required":["url","assets_url","upload_url","html_url","id","node_id","tag_name","target_commitish","name","draft","author","prerelease","created_at","published_at","assets","tarball_url","zipball_url","body"],"type":"object","properties":{"assets":{"type":"array","items":{"title":"Release Asset","required":["url","browser_download_url","id","node_id","name","label","state","content_type","size","download_count","created_at","updated_at"],"type":"object","properties":{"browser_download_url":{"type":"string","format":"uri"},"content_type":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"download_count":{"type":"integer"},"id":{"type":"integer"},"label":{"type":["string","null"]},"name":{"type":"string","description":"The file name of the asset."},"node_id":{"type":"string"},"size":{"type":"integer"},"state":{"enum":["uploaded"],"type":"string","description":"State of the release asset."},"updated_at":{"type":"string","format":"date-time"},"uploader":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"}},"description":"Data related to a release."}},"assets_url":{"type":"string","format":"uri"},"author":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"body":{"type":["string","null"]},"created_at":{"type":["string","null"],"format":"date-time"},"discussion_url":{"type":"string","format":"uri"},"draft":{"type":"boolean","description":"Whether the release is a draft or published"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":["string","null"]},"node_id":{"type":"string"},"prerelease":{"type":"boolean","description":"Whether the release is identified as a prerelease or a full release."},"published_at":{"type":["string","null"],"format":"date-time"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"tag_name":{"type":"string","description":"The name of the tag."},"tarball_url":{"type":["string","null"],"format":"uri"},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from."},"upload_url":{"type":"string","format":"uri-template"},"url":{"type":"string","format":"uri"},"zipball_url":{"type":["string","null"],"format":"uri"}},"description":"The [release](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos\\/#get-a-release) object."}';
    public const SCHEMA_TITLE       = 'Release';
    public const SCHEMA_DESCRIPTION = 'The [release](https://docs.github.com/rest/reference/repos/#get-a-release) object.';
    public ?array $assets;
    public ?string $assets_url;
    public ?AnswerChosenBy $author;
    public ?string $body;
    public ?string $created_at;
    public string $discussion_url;
    /**
     * Whether the release is a draft or published
     */
    public ?bool $draft;
    public ?string $html_url;
    public ?int $id;
    public ?string $name;
    public ?string $node_id;
    /**
     * Whether the release is identified as a prerelease or a full release.
     */
    public ?bool $prerelease;
    public ?string $published_at;
    public Reactions $reactions;
    /**
     * The name of the tag.
     */
    public ?string $tag_name;
    public ?string $tarball_url;
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    public ?string $target_commitish;
    public ?string $upload_url;
    public ?string $url;
    public ?string $zipball_url;

    public function __construct(array $assets, string $assets_url, AnswerChosenBy $author, string $body, string $created_at, string $discussion_url, bool $draft, string $html_url, int $id, string $name, string $node_id, bool $prerelease, string $published_at, Reactions $reactions, string $tag_name, string $tarball_url, string $target_commitish, string $upload_url, string $url, string $zipball_url)
    {
        $this->assets           = $assets;
        $this->assets_url       = $assets_url;
        $this->author           = $author;
        $this->body             = $body;
        $this->created_at       = $created_at;
        $this->discussion_url   = $discussion_url;
        $this->draft            = $draft;
        $this->html_url         = $html_url;
        $this->id               = $id;
        $this->name             = $name;
        $this->node_id          = $node_id;
        $this->prerelease       = $prerelease;
        $this->published_at     = $published_at;
        $this->reactions        = $reactions;
        $this->tag_name         = $tag_name;
        $this->tarball_url      = $tarball_url;
        $this->target_commitish = $target_commitish;
        $this->upload_url       = $upload_url;
        $this->url              = $url;
        $this->zipball_url      = $zipball_url;
    }
}
