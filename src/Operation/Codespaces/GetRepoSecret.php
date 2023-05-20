<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetRepoSecret
{
    public const OPERATION_ID    = 'codespaces/get-repo-secret';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/codespaces/secrets/{secret_name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The name of the secret. **/
    private string $secretName;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName $hydrator, string $owner, string $repo, string $secretName)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->secretName              = $secretName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{secret_name}'], [$this->owner, $this->repo, $this->secretName], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\RepoCodespacesSecret
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RepoCodespacesSecret::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\RepoCodespacesSecret::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
