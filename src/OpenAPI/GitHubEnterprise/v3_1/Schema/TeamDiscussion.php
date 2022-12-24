<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class TeamDiscussion
{
    public const SCHEMA_JSON = '{"title":"Team Discussion","required":["author","body","body_html","body_version","comments_count","comments_url","created_at","last_edited_at","html_url","pinned","private","node_id","number","team_url","title","updated_at","url"],"type":"object","properties":{"author":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]},"body":{"type":"string","description":"The main text of the discussion.","examples":["Please suggest improvements to our workflow in comments."]},"body_html":{"type":"string","examples":["<p>Hi! This is an area for us to collaborate as a team<\\/p>"]},"body_version":{"type":"string","description":"The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.","examples":["0307116bbf7ced493b8d8a346c650b71"]},"comments_count":{"type":"integer","examples":[0]},"comments_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2343027\\/discussions\\/1\\/comments"]},"created_at":{"type":"string","format":"date-time","examples":["2018-01-25T18:56:31Z"]},"last_edited_at":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/github\\/teams\\/justice-league\\/discussions\\/1"]},"node_id":{"type":"string","examples":["MDE0OlRlYW1EaXNjdXNzaW9uMQ=="]},"number":{"type":"integer","description":"The unique sequence number of a team discussion.","examples":[42]},"pinned":{"type":"boolean","description":"Whether or not this discussion should be pinned for easy retrieval.","examples":[true]},"private":{"type":"boolean","description":"Whether or not this discussion should be restricted to team members and organization administrators.","examples":[true]},"team_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2343027"]},"title":{"type":"string","description":"The title of the discussion.","examples":["How can we improve our workflow?"]},"updated_at":{"type":"string","format":"date-time","examples":["2018-01-25T18:56:31Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2343027\\/discussions\\/1"]},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"A team discussion is a persistent record of a free-form conversation within a team."}';
    public const SCHEMA_TITLE = 'Team Discussion';
    public const SCHEMA_DESCRIPTION = 'A team discussion is a persistent record of a free-form conversation within a team.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $author;
    /**
     * The main text of the discussion.
     */
    private string $body;
    private string $body_html;
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     */
    private string $body_version;
    private int $comments_count;
    private string $comments_url;
    private string $created_at;
    private $last_edited_at;
    private string $html_url;
    private string $node_id;
    /**
     * The unique sequence number of a team discussion.
     */
    private int $number;
    /**
     * Whether or not this discussion should be pinned for easy retrieval.
     */
    private bool $pinned;
    /**
     * Whether or not this discussion should be restricted to team members and organization administrators.
     */
    private bool $private;
    private string $team_url;
    /**
     * The title of the discussion.
     */
    private string $title;
    private string $updated_at;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup $reactions = null;
    public function author() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
    {
        return $this->author;
    }
    /**
     * The main text of the discussion.
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
    public function comments_count() : int
    {
        return $this->comments_count;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function last_edited_at()
    {
        return $this->last_edited_at;
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
     * The unique sequence number of a team discussion.
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * Whether or not this discussion should be pinned for easy retrieval.
     */
    public function pinned() : bool
    {
        return $this->pinned;
    }
    /**
     * Whether or not this discussion should be restricted to team members and organization administrators.
     */
    public function private() : bool
    {
        return $this->private;
    }
    public function team_url() : string
    {
        return $this->team_url;
    }
    /**
     * The title of the discussion.
     */
    public function title() : string
    {
        return $this->title;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
