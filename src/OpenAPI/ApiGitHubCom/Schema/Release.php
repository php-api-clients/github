<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Release
{
    public const SCHEMA_JSON = '{"title":"Release","required":["assets_url","upload_url","tarball_url","zipball_url","created_at","published_at","draft","id","node_id","author","html_url","name","prerelease","tag_name","target_commitish","assets","url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"assets_url":{"type":"string","format":"uri"},"upload_url":{"type":"string"},"tarball_url":{"type":["string","null"],"format":"uri"},"zipball_url":{"type":["string","null"],"format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"tag_name":{"type":"string","description":"The name of the tag.","examples":["v1.0.0"]},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from.","examples":["master"]},"name":{"type":["string","null"]},"body":{"type":["string","null"]},"draft":{"type":"boolean","description":"true to create a draft (unpublished) release, false to create a published one.","examples":[false]},"prerelease":{"type":"boolean","description":"Whether to identify the release as a prerelease or a full release.","examples":[false]},"created_at":{"type":"string","format":"date-time"},"published_at":{"type":["string","null"],"format":"date-time"},"author":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"assets":{"type":"array","items":{"title":"Release Asset","required":["id","name","content_type","size","state","url","node_id","download_count","label","uploader","browser_download_url","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"browser_download_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string","description":"The file name of the asset.","examples":["Team Environment"]},"label":{"type":["string","null"]},"state":{"enum":["uploaded","open"],"type":"string","description":"State of the release asset."},"content_type":{"type":"string"},"size":{"type":"integer"},"download_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"uploader":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]}},"description":"Data related to a release."}},"body_html":{"type":"string"},"body_text":{"type":"string"},"mentions_count":{"type":"integer"},"discussion_url":{"type":"string","description":"The URL of the release discussion.","format":"uri"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"A release."}';
    public const SCHEMA_TITLE = 'Release';
    public const SCHEMA_DESCRIPTION = 'A release.';
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $assets_url;
    public readonly string $upload_url;
    public readonly ?string $tarball_url;
    public readonly ?string $zipball_url;
    public readonly int $id;
    public readonly string $node_id;
    /**
     * The name of the tag.
     */
    public readonly string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    public readonly string $target_commitish;
    public readonly ?string $name;
    public readonly ?string $body;
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     */
    public readonly bool $draft;
    /**
     * Whether to identify the release as a prerelease or a full release.
     */
    public readonly bool $prerelease;
    public readonly string $created_at;
    public readonly ?string $published_at;
    /**
     * A GitHub user.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $author;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset>
     */
    public readonly array $assets;
    public readonly ?string $body_html;
    public readonly ?string $body_text;
    public readonly ?int $mentions_count;
    /**
     * The URL of the release discussion.
     */
    public readonly ?string $discussion_url;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReleaseAsset> $assets
     */
    public function __construct(string $url, string $html_url, string $assets_url, string $upload_url, string $tarball_url, string $zipball_url, int $id, string $node_id, string $tag_name, string $target_commitish, string $name, string $body, bool $draft, bool $prerelease, string $created_at, string $published_at, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $author, array $assets, string $body_html, string $body_text, int $mentions_count, string $discussion_url, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions)
    {
        $this->url = $url;
        $this->html_url = $html_url;
        $this->assets_url = $assets_url;
        $this->upload_url = $upload_url;
        $this->tarball_url = $tarball_url;
        $this->zipball_url = $zipball_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->name = $name;
        $this->body = $body;
        $this->draft = $draft;
        $this->prerelease = $prerelease;
        $this->created_at = $created_at;
        $this->published_at = $published_at;
        $this->author = $author;
        $this->assets = $assets;
        $this->body_html = $body_html;
        $this->body_text = $body_text;
        $this->mentions_count = $mentions_count;
        $this->discussion_url = $discussion_url;
        $this->reactions = $reactions;
    }
}
