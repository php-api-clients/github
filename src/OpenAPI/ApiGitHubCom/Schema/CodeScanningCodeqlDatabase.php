<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningCodeqlDatabase
{
    public const SCHEMA_JSON = '{"title":"CodeQL Database","required":["id","name","language","uploader","content_type","size","created_at","updated_at","url"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the CodeQL database."},"name":{"type":"string","description":"The name of the CodeQL database."},"language":{"type":"string","description":"The language of the CodeQL database."},"uploader":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"content_type":{"type":"string","description":"The MIME type of the CodeQL database file."},"size":{"type":"integer","description":"The size of the CodeQL database file in bytes."},"created_at":{"type":"string","description":"The date and time at which the CodeQL database was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"updated_at":{"type":"string","description":"The date and time at which the CodeQL database was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"url":{"type":"string","description":"The URL at which to download the CodeQL database. The `Accept` header must be set to the value of the `content_type` property.","format":"uri"}},"description":"A CodeQL database."}';
    public const SCHEMA_EXAMPLE = '{"uploader":{"login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","starred_at":"\\"2020-07-09T00:17:55Z\\""}}';
    public const SCHEMA_TITLE = 'CodeQL Database';
    public const SCHEMA_DESCRIPTION = 'A CodeQL database.';
    /**
     * The ID of the CodeQL database.
     */
    public readonly int $id;
    /**
     * The name of the CodeQL database.
     */
    public readonly string $name;
    /**
     * The language of the CodeQL database.
     */
    public readonly string $language;
    /**
     * A GitHub user.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $uploader;
    /**
     * The MIME type of the CodeQL database file.
     */
    public readonly string $content_type;
    /**
     * The size of the CodeQL database file in bytes.
     */
    public readonly int $size;
    /**
     * The date and time at which the CodeQL database was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public readonly string $created_at;
    /**
     * The date and time at which the CodeQL database was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public readonly string $updated_at;
    /**
     * The URL at which to download the CodeQL database. The `Accept` header must be set to the value of the `content_type` property.
     */
    public readonly string $url;
    public function __construct(int $id, string $name, string $language, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $uploader, string $content_type, int $size, string $created_at, string $updated_at, string $url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->language = $language;
        $this->uploader = $uploader;
        $this->content_type = $content_type;
        $this->size = $size;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
