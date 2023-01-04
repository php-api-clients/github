<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class GistSimple
{
    public const SCHEMA_JSON = '{"title":"Gist Simple","type":"object","properties":{"forks":{"type":["array","null"],"items":{"type":"object","properties":{"id":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"Public User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","bio","blog","company","email","followers","following","hireable","location","name","public_gists","public_repos","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"name":{"type":["string","null"]},"company":{"type":["string","null"]},"blog":{"type":["string","null"]},"location":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"hireable":{"type":["boolean","null"]},"bio":{"type":["string","null"]},"twitter_username":{"type":["string","null"]},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"plan":{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}},"suspended_at":{"type":["string","null"],"format":"date-time"},"private_gists":{"type":"integer","examples":[1]},"total_private_repos":{"type":"integer","examples":[2]},"owned_private_repos":{"type":"integer","examples":[2]},"disk_usage":{"type":"integer","examples":[1]},"collaborators":{"type":"integer","examples":[3]}},"description":"Public User","additionalProperties":false},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}}},"deprecated":true},"history":{"type":["array","null"],"items":{"title":"Gist History","type":"object","properties":{"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]},"version":{"type":"string"},"committed_at":{"type":"string","format":"date-time"},"change_status":{"type":"object","properties":{"total":{"type":"integer"},"additions":{"type":"integer"},"deletions":{"type":"integer"}}},"url":{"type":"string","format":"uri"}},"description":"Gist History"},"deprecated":true},"fork_of":{"title":"Gist","required":["id","node_id","url","forks_url","commits_url","git_pull_url","git_push_url","html_url","comments_url","public","description","comments","user","files","created_at","updated_at"],"type":["object","null"],"properties":{"url":{"type":"string","format":"uri"},"forks_url":{"type":"string","format":"uri"},"commits_url":{"type":"string","format":"uri"},"id":{"type":"string"},"node_id":{"type":"string"},"git_pull_url":{"type":"string","format":"uri"},"git_push_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"files":{"type":"object","additionalProperties":{"type":"object","properties":{"filename":{"type":"string"},"type":{"type":"string"},"language":{"type":"string"},"raw_url":{"type":"string"},"size":{"type":"integer"}}}},"public":{"type":"boolean"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"description":{"type":["string","null"]},"comments":{"type":"integer"},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]},"comments_url":{"type":"string","format":"uri"},"owner":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]},"truncated":{"type":"boolean"},"forks":{"type":"array","items":{}},"history":{"type":"array","items":{}}},"description":"Gist"},"url":{"type":"string"},"forks_url":{"type":"string"},"commits_url":{"type":"string"},"id":{"type":"string"},"node_id":{"type":"string"},"git_pull_url":{"type":"string"},"git_push_url":{"type":"string"},"html_url":{"type":"string"},"files":{"type":"object","additionalProperties":{"type":["object","null"],"properties":{"filename":{"type":"string"},"type":{"type":"string"},"language":{"type":"string"},"raw_url":{"type":"string"},"size":{"type":"integer"},"truncated":{"type":"boolean"},"content":{"type":"string"}}}},"public":{"type":"boolean"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"description":{"type":["string","null"]},"comments":{"type":"integer"},"user":{"type":["string","null"]},"comments_url":{"type":"string"},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"},"truncated":{"type":"boolean"}},"description":"Gist Simple"}';
    public const SCHEMA_TITLE = 'Gist Simple';
    public const SCHEMA_DESCRIPTION = 'Gist Simple';
    private $forks;
    private $history;
    /**
     * Gist
     */
    private $fork_of;
    private string $url;
    private string $forks_url;
    private string $commits_url;
    private string $id;
    private string $node_id;
    private string $git_pull_url;
    private string $git_push_url;
    private string $html_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple\Files::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple\Files $files;
    private bool $public;
    private string $created_at;
    private string $updated_at;
    private $description;
    private int $comments;
    private $user;
    private string $comments_url;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser $owner;
    private bool $truncated;
    public function forks()
    {
        return $this->forks;
    }
    public function history()
    {
        return $this->history;
    }
    /**
     * Gist
     */
    public function fork_of()
    {
        return $this->fork_of;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function forks_url() : string
    {
        return $this->forks_url;
    }
    public function commits_url() : string
    {
        return $this->commits_url;
    }
    public function id() : string
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function git_pull_url() : string
    {
        return $this->git_pull_url;
    }
    public function git_push_url() : string
    {
        return $this->git_push_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function files() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\GistSimple\Files
    {
        return $this->files;
    }
    public function public() : bool
    {
        return $this->public;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function description()
    {
        return $this->description;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function user()
    {
        return $this->user;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    /**
     * Simple User
     */
    public function owner() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser
    {
        return $this->owner;
    }
    public function truncated() : bool
    {
        return $this->truncated;
    }
}
