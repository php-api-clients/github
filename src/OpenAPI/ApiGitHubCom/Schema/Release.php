<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Release
{
    public const SCHEMA_JSON = '{"title":"Release","required":["assets_url","upload_url","tarball_url","zipball_url","created_at","published_at","draft","id","node_id","author","html_url","name","prerelease","tag_name","target_commitish","assets","url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"assets_url":{"type":"string","format":"uri"},"upload_url":{"type":"string"},"tarball_url":{"type":["string","null"],"format":"uri"},"zipball_url":{"type":["string","null"],"format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"tag_name":{"type":"string","description":"The name of the tag.","examples":["v1.0.0"]},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from.","examples":["master"]},"name":{"type":["string","null"]},"body":{"type":["string","null"]},"draft":{"type":"boolean","description":"true to create a draft (unpublished) release, false to create a published one.","examples":[false]},"prerelease":{"type":"boolean","description":"Whether to identify the release as a prerelease or a full release.","examples":[false]},"created_at":{"type":"string","format":"date-time"},"published_at":{"type":["string","null"],"format":"date-time"},"author":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"assets":{"type":"array","items":{"title":"Release Asset","required":["id","name","content_type","size","state","url","node_id","download_count","label","uploader","browser_download_url","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"browser_download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string","description":"The file name of the asset.","examples":["Team Environment"]},"label":{"type":["string","null"]},"state":{"enum":["uploaded","open"],"type":"string","description":"State of the release asset."},"content_type":{"type":"string"},"size":{"type":"integer"},"download_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"uploader":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]}},"description":"Data related to a release."}},"body_html":{"type":"string"},"body_text":{"type":"string"},"mentions_count":{"type":"integer"},"discussion_url":{"type":"string","description":"The URL of the release discussion.","format":"uri"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"A release."}';
    public const SCHEMA_TITLE = 'Release';
    public const SCHEMA_DESCRIPTION = 'A release.';
    private string $url;
    private string $html_url;
    private string $assets_url;
    private string $upload_url;
    private ?string $tarball_url;
    private ?string $zipball_url;
    private int $id;
    private string $node_id;
    /**
     * The name of the tag.
     */
    private string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    private string $target_commitish;
    private ?string $name;
    private ?string $body = null;
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     */
    private bool $draft;
    /**
     * Whether to identify the release as a prerelease or a full release.
     */
    private bool $prerelease;
    private string $created_at;
    private ?string $published_at;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $author;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset::class)
     */
    private array $assets = array();
    private ?string $body_html = null;
    private ?string $body_text = null;
    private ?int $mentions_count = null;
    /**
     * The URL of the release discussion.
     */
    private ?string $discussion_url = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions = null;
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function assets_url() : string
    {
        return $this->assets_url;
    }
    public function upload_url() : string
    {
        return $this->upload_url;
    }
    public function tarball_url() : ?string
    {
        return $this->tarball_url;
    }
    public function zipball_url() : ?string
    {
        return $this->zipball_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the tag.
     */
    public function tag_name() : string
    {
        return $this->tag_name;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    public function target_commitish() : string
    {
        return $this->target_commitish;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     */
    public function draft() : bool
    {
        return $this->draft;
    }
    /**
     * Whether to identify the release as a prerelease or a full release.
     */
    public function prerelease() : bool
    {
        return $this->prerelease;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function published_at() : ?string
    {
        return $this->published_at;
    }
    /**
     * A GitHub user.
     */
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->author;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset>
     */
    public function assets() : array
    {
        return $this->assets;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    public function mentions_count() : ?int
    {
        return $this->mentions_count;
    }
    /**
     * The URL of the release discussion.
     */
    public function discussion_url() : ?string
    {
        return $this->discussion_url;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
