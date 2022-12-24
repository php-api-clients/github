<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamDiscussionComment
{
    public const SCHEMA_JSON = '{"title":"Team Discussion Comment","required":["author","body","body_html","body_version","created_at","last_edited_at","discussion_url","html_url","node_id","number","updated_at","url"],"type":"object","properties":{"author":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"body":{"type":"string","description":"The main text of the comment.","examples":["I agree with this suggestion."]},"body_html":{"type":"string","examples":["<p>Do you like apples?<\\/p>"]},"body_version":{"type":"string","description":"The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.","examples":["0307116bbf7ced493b8d8a346c650b71"]},"created_at":{"type":"string","format":"date-time","examples":["2018-01-15T23:53:58Z"]},"last_edited_at":{"type":["string","null"],"format":"date-time"},"discussion_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2403582\\/discussions\\/1"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/github\\/teams\\/justice-league\\/discussions\\/1\\/comments\\/1"]},"node_id":{"type":"string","examples":["MDIxOlRlYW1EaXNjdXNzaW9uQ29tbWVudDE="]},"number":{"type":"integer","description":"The unique sequence number of a team discussion comment.","examples":[42]},"updated_at":{"type":"string","format":"date-time","examples":["2018-01-15T23:53:58Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2403582\\/discussions\\/1\\/comments\\/1"]},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"A reply to a discussion within a team."}';
    public const SCHEMA_TITLE = 'Team Discussion Comment';
    public const SCHEMA_DESCRIPTION = 'A reply to a discussion within a team.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $author;
    /**
     * The main text of the comment.
     */
    private string $body;
    private string $body_html;
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     */
    private string $body_version;
    private string $created_at;
    private $last_edited_at;
    private string $discussion_url;
    private string $html_url;
    private string $node_id;
    /**
     * The unique sequence number of a team discussion comment.
     */
    private int $number;
    private string $updated_at;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions = null;
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
    {
        return $this->author;
    }
    /**
     * The main text of the comment.
     */
    public function body() : string
    {
        return $this->body;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     */
    public function body_version() : string
    {
        return $this->body_version;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function last_edited_at()
    {
        return $this->last_edited_at;
    }
    public function discussion_url() : string
    {
        return $this->discussion_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The unique sequence number of a team discussion comment.
     */
    public function number() : int
    {
        return $this->number;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
