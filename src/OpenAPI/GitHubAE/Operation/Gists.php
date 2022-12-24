<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Gists
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function list_(string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page, $page);
    }
    public function create_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Create_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listPublic_(string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListPublic_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListPublic_($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page, $page);
    }
    public function listStarred_(string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListStarred_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListStarred_($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page, $page);
    }
    public function get_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Get_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function delete_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Delete_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function update_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Update_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function listComments_(string $gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListComments_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $per_page, $page);
    }
    public function createComment_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CreateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CreateComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function getComment_(string $gist_id, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $comment_id);
    }
    public function deleteComment_(string $gist_id, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\DeleteComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\DeleteComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $comment_id);
    }
    public function updateComment_(string $gist_id, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\UpdateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\UpdateComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $comment_id);
    }
    public function listCommits_(string $gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListCommits_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $per_page, $page);
    }
    public function listForks_(string $gist_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForks_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $per_page, $page);
    }
    public function fork_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Fork_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Fork_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function checkIsStarred_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CheckIsStarred_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\CheckIsStarred_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function star_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Star_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Star_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function unstar_(string $gist_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Unstar_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Unstar_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id);
    }
    public function getRevision_(string $gist_id, string $sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetRevision_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetRevision_($this->requestSchemaValidator, $this->responseSchemaValidator, $gist_id, $sha);
    }
    public function listForUser_(string $username, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $since, $per_page, $page);
    }
}
