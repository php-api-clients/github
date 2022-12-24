<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Git
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function createBlob_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getBlob_(string $owner, string $repo, string $file_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $file_sha);
    }
    public function createCommit_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateCommit_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getCommit_(string $owner, string $repo, string $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetCommit_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha);
    }
    public function listMatchingRefs_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\ListMatchingRefs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\ListMatchingRefs_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function getRef_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRef_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function createRef_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRef_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function deleteRef_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRef_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function updateRef_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRef_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function createTag_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTag_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getTag_(string $owner, string $repo, string $tag_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTag_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tag_sha);
    }
    public function createTree_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getTree_(string $owner, string $repo, string $tree_sha, string $recursive) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTree_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTree_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tree_sha, $recursive);
    }
}
