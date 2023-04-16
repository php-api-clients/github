<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class UpdateRepoVariable
{
    public const OPERATION_ID    = 'actions/update-repo-variable';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/actions/variables/{name}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/actions/variables/{name}';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the variable.**/
    private string $name;

    public function __construct(SchemaValidator $requestSchemaValidator, string $owner, string $repo, string $name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->owner                  = $owner;
        $this->repo                   = $repo;
        $this->name                   = $name;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\UpdateRepoVariable\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{name}'], [$this->owner, $this->repo, $this->name], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
