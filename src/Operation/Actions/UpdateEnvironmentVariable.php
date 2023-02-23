<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class UpdateEnvironmentVariable
{
    public const OPERATION_ID = 'actions/update-environment-variable';
    public const OPERATION_MATCH = 'PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD = 'PATCH';
    private const PATH = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the repository.**/
    private int $repository_id;
    /**The name of the variable.**/
    private string $name;
    /**The name of the environment.**/
    private string $environment_name;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, int $repository_id, string $name, string $environment_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->repository_id = $repository_id;
        $this->name = $name;
        $this->environment_name = $environment_name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Actions\UpdateRepoVariable\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{repository_id}', '{name}', '{environment_name}'), array($this->repository_id, $this->name, $this->environment_name), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
