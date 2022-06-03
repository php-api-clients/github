<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

final class ListForIssue_
{
    private const OPERATION_ID = 'reactions/list-for-issue';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The number that identifies the issue.**/
    public int $issue_number;
    /**Returns a single [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to an issue.**/
    public string $content;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $issue_number, $content, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{issue_number}', '{content}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->issue_number, $this->content, $this->per_page, $this->page), '/repos/{owner}/{repo}/issues/{issue_number}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
