<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class UpdateOrgVariable
{
    public const OPERATION_ID    = 'actions/update-org-variable';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/actions/variables/{name}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/actions/variables/{name}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the variable. **/
    private string $name;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, string $org, string $name)
    {
        $this->org  = $org;
        $this->name = $name;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\UpdateOrgVariable\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{name}'], [$this->org, $this->name], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
