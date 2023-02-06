<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TimelineCommittedEvent
{
    public const SCHEMA_JSON = '{"title":"Timeline Committed Event","required":["sha","node_id","url","html_url","author","committer","tree","message","parents","verification"],"type":"object","properties":{"event":{"type":"string"},"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"author":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"committer":{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"},"message":{"type":"string","description":"Message describing the purpose of the commit","examples":["Fix #42"]},"tree":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}},"parents":{"type":"array","items":{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}},"verification":{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}},"html_url":{"type":"string","format":"uri"}},"description":"Timeline Committed Event"}';
    public const SCHEMA_EXAMPLE = '{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd","author":{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"},"committer":{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"},"message":"Fix #42","tree":{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd"},"parents":[{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd"}]}';
    public const SCHEMA_TITLE = 'Timeline Committed Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Committed Event';
    public readonly ?string $event;
    /**
     * SHA for the commit
     */
    public readonly string $sha;
    public readonly string $node_id;
    public readonly string $url;
    /**
     * Identifying information for the git-user
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Author $author;
    /**
     * Identifying information for the git-user
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Committer $committer;
    /**
     * Message describing the purpose of the commit
     */
    public readonly string $message;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Tree $tree;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Parents>
     */
    public readonly array $parents;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Verification $verification;
    public readonly string $html_url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Parents> $parents
     */
    public function __construct(string $event, string $sha, string $node_id, string $url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Author $author, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Committer $committer, string $message, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Tree $tree, array $parents, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent\Verification $verification, string $html_url)
    {
        $this->event = $event;
        $this->sha = $sha;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->author = $author;
        $this->committer = $committer;
        $this->message = $message;
        $this->tree = $tree;
        $this->parents = $parents;
        $this->verification = $verification;
        $this->html_url = $html_url;
    }
}
