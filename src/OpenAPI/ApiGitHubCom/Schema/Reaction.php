<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Reaction
{
    public const SCHEMA_JSON = '{"title":"Reaction","required":["id","node_id","user","content","created_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDg6UmVhY3Rpb24x"]},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"content":{"enum":["+1","-1","laugh","confused","heart","hooray","rocket","eyes"],"type":"string","description":"The reaction to use","examples":["heart"]},"created_at":{"type":"string","format":"date-time","examples":["2016-05-20T20:09:31Z"]}},"description":"Reactions to conversations provide a way to help people express their feelings more simply and effectively."}';
    public const SCHEMA_EXAMPLE = '{"id":1,"node_id":"MDg6UmVhY3Rpb24x","content":"heart","created_at":"2016-05-20T20:09:31Z"}';
    public const SCHEMA_TITLE = 'Reaction';
    public const SCHEMA_DESCRIPTION = 'Reactions to conversations provide a way to help people express their feelings more simply and effectively.';
    public readonly int $id;
    public readonly string $node_id;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction\User $user;
    /**
     * The reaction to use
     */
    public readonly string $content;
    public readonly string $created_at;
    public function __construct(int $id, string $node_id, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Reaction\User $user, string $content, string $created_at)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->user = $user;
        $this->content = $content;
        $this->created_at = $created_at;
    }
}
