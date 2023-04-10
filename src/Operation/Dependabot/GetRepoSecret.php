<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Dependabot;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetRepoSecret
{
    public const OPERATION_ID = 'dependabot/get-repo-secret';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/secrets/{secret_name}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/dependabot/secrets/{secret_name}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The name of the secret.**/
    private string $secretName;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb $hydrator, string $owner, string $repo, string $secretName)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->secretName = $secretName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secretName), self::PATH));
    }
    /**
     * @return Schema\DependabotSecret
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\DependabotSecret
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\DependabotSecret::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\DependabotSecret::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
