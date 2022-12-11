<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions;

final class ListForCommitComment_
{
    private const OPERATION_ID = 'reactions/list-for-commit-comment';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the comment.**/
    private readonly int $comment_id;
    /**Returns a single [reaction type](https://docs.github.com/github-ae@latest/rest/reference/reactions#reaction-types). Omit this parameter to list all reactions to a commit comment.**/
    private readonly string $content;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->comment_id = $comment_id;
        $this->content = $content;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{comment_id}', '{content}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->comment_id, $this->content, $this->per_page, $this->page), '/repos/{owner}/{repo}/comments/{comment_id}/reactions?content={content}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
