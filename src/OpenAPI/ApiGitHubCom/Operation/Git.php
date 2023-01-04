<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Git
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function createBlob(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateBlob
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateBlob($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getBlob(string $owner, string $repo, string $file_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetBlob
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetBlob($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $file_sha);
    }
    public function createCommit(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateCommit($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getCommit(string $owner, string $repo, string $commit_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetCommit($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha);
    }
    public function listMatchingRefs(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\ListMatchingRefs($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function getRef(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetRef($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function createRef(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateRef($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function deleteRef(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\DeleteRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\DeleteRef($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function updateRef(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\UpdateRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\UpdateRef($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function createTag(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getTag(string $owner, string $repo, string $tag_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tag_sha);
    }
    public function createTree(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTree
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTree($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getTree(string $owner, string $repo, string $tree_sha, string $recursive) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTree
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTree($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tree_sha, $recursive);
    }
}
