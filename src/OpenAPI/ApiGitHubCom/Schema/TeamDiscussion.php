<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamDiscussion
{
    public const SCHEMA_JSON = '{"title":"Team Discussion","required":["author","body","body_html","body_version","comments_count","comments_url","created_at","last_edited_at","html_url","pinned","private","node_id","number","team_url","title","updated_at","url"],"type":"object","properties":{"author":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"body":{"type":"string","description":"The main text of the discussion.","examples":["Please suggest improvements to our workflow in comments."]},"body_html":{"type":"string","examples":["<p>Hi! This is an area for us to collaborate as a team<\\/p>"]},"body_version":{"type":"string","description":"The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.","examples":["0307116bbf7ced493b8d8a346c650b71"]},"comments_count":{"type":"integer","examples":[0]},"comments_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2343027\\/discussions\\/1\\/comments"]},"created_at":{"type":"string","format":"date-time","examples":["2018-01-25T18:56:31Z"]},"last_edited_at":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/github\\/teams\\/justice-league\\/discussions\\/1"]},"node_id":{"type":"string","examples":["MDE0OlRlYW1EaXNjdXNzaW9uMQ=="]},"number":{"type":"integer","description":"The unique sequence number of a team discussion.","examples":[42]},"pinned":{"type":"boolean","description":"Whether or not this discussion should be pinned for easy retrieval.","examples":[true]},"private":{"type":"boolean","description":"Whether or not this discussion should be restricted to team members and organization administrators.","examples":[true]},"team_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2343027"]},"title":{"type":"string","description":"The title of the discussion.","examples":["How can we improve our workflow?"]},"updated_at":{"type":"string","format":"date-time","examples":["2018-01-25T18:56:31Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2343027\\/discussions\\/1"]},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"A team discussion is a persistent record of a free-form conversation within a team."}';
    public const SCHEMA_TITLE = 'Team Discussion';
    public const SCHEMA_DESCRIPTION = 'A team discussion is a persistent record of a free-form conversation within a team.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion\Author $author;
    /**
     * The main text of the discussion.
     */
    public readonly string $body;
    public readonly string $body_html;
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     */
    public readonly string $body_version;
    public readonly int $comments_count;
    public readonly string $comments_url;
    public readonly string $created_at;
    public readonly ?string $last_edited_at;
    public readonly string $html_url;
    public readonly string $node_id;
    /**
     * The unique sequence number of a team discussion.
     */
    public readonly int $number;
    /**
     * Whether or not this discussion should be pinned for easy retrieval.
     */
    public readonly bool $pinned;
    /**
     * Whether or not this discussion should be restricted to team members and organization administrators.
     */
    public readonly bool $private;
    public readonly string $team_url;
    /**
     * The title of the discussion.
     */
    public readonly string $title;
    public readonly string $updated_at;
    public readonly string $url;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion\Author $author, string $body, string $body_html, string $body_version, int $comments_count, string $comments_url, string $created_at, string $last_edited_at, string $html_url, string $node_id, int $number, bool $pinned, bool $private, string $team_url, string $title, string $updated_at, string $url, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions)
    {
        $this->author = $author;
        $this->body = $body;
        $this->body_html = $body_html;
        $this->body_version = $body_version;
        $this->comments_count = $comments_count;
        $this->comments_url = $comments_url;
        $this->created_at = $created_at;
        $this->last_edited_at = $last_edited_at;
        $this->html_url = $html_url;
        $this->node_id = $node_id;
        $this->number = $number;
        $this->pinned = $pinned;
        $this->private = $private;
        $this->team_url = $team_url;
        $this->title = $title;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->reactions = $reactions;
    }
}
