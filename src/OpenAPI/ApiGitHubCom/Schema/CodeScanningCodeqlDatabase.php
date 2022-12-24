<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningCodeqlDatabase
{
    public const SCHEMA_JSON = '{"title":"CodeQL Database","required":["id","name","language","uploader","content_type","size","created_at","updated_at","url"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the CodeQL database."},"name":{"type":"string","description":"The name of the CodeQL database."},"language":{"type":"string","description":"The language of the CodeQL database."},"uploader":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"content_type":{"type":"string","description":"The MIME type of the CodeQL database file."},"size":{"type":"integer","description":"The size of the CodeQL database file in bytes."},"created_at":{"type":"string","description":"The date and time at which the CodeQL database was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"updated_at":{"type":"string","description":"The date and time at which the CodeQL database was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"url":{"type":"string","description":"The URL at which to download the CodeQL database. The `Accept` header must be set to the value of the `content_type` property.","format":"uri"}},"description":"A CodeQL database."}';
    public const SCHEMA_TITLE = 'CodeQL Database';
    public const SCHEMA_DESCRIPTION = 'A CodeQL database.';
    /**
     * The ID of the CodeQL database.
     */
    private int $id;
    /**
     * The name of the CodeQL database.
     */
    private string $name;
    /**
     * The language of the CodeQL database.
     */
    private string $language;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $uploader;
    /**
     * The MIME type of the CodeQL database file.
     */
    private string $content_type;
    /**
     * The size of the CodeQL database file in bytes.
     */
    private int $size;
    /**
     * The date and time at which the CodeQL database was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $created_at;
    /**
     * The date and time at which the CodeQL database was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $updated_at;
    /**
     * The URL at which to download the CodeQL database. The `Accept` header must be set to the value of the `content_type` property.
     */
    private string $url;
    /**
     * The ID of the CodeQL database.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the CodeQL database.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The language of the CodeQL database.
     */
    public function language() : string
    {
        return $this->language;
    }
    /**
     * A GitHub user.
     */
    public function uploader() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->uploader;
    }
    /**
     * The MIME type of the CodeQL database file.
     */
    public function content_type() : string
    {
        return $this->content_type;
    }
    /**
     * The size of the CodeQL database file in bytes.
     */
    public function size() : int
    {
        return $this->size;
    }
    /**
     * The date and time at which the CodeQL database was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The date and time at which the CodeQL database was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The URL at which to download the CodeQL database. The `Accept` header must be set to the value of the `content_type` property.
     */
    public function url() : string
    {
        return $this->url;
    }
}
