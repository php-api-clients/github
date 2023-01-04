<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Gists
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function list(string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\List
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\List($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page, $page);
    }
    public function create() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Create($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listPublic(string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublic
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublic($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page, $page);
    }
    public function listStarred(string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListStarred
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListStarred($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page, $page);
    }
    public function get(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function delete(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Delete($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function update(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function listComments(string $gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListComments
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListComments($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $per_page, $page);
    }
    public function createComment(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CreateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CreateComment($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function getComment(string $gist_id, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetComment($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $comment_id);
    }
    public function deleteComment(string $gist_id, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\DeleteComment($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $comment_id);
    }
    public function updateComment(string $gist_id, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\UpdateComment($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $comment_id);
    }
    public function listCommits(string $gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListCommits
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListCommits($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $per_page, $page);
    }
    public function listForks(string $gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForks($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $per_page, $page);
    }
    public function fork(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Fork
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Fork($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function checkIsStarred(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CheckIsStarred
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\CheckIsStarred($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function star(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Star
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Star($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function unstar(string $gist_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Unstar
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Unstar($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function getRevision(string $gist_id, string $sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $sha);
    }
    public function listForUser(string $username, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $since, $per_page, $page);
    }
}
