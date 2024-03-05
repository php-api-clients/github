<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class UpdateEnvironmentVariable
{
    public const OPERATION_ID    = 'actions/update-environment-variable';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/environments/{environment_name}/variables/{name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the variable. **/
    private string $name;
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, string $owner, string $repo, string $name, string $environmentName)
    {
        $this->owner           = $owner;
        $this->repo            = $repo;
        $this->name            = $name;
        $this->environmentName = $environmentName;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\UpdateEnvironmentVariable\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace(['{owner}', '{repo}', '{name}', '{environment_name}'], [$this->owner, $this->repo, $this->name, $this->environmentName], '/repos/{owner}/{repo}/environments/{environment_name}/variables/{name}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
