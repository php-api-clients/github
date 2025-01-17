<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal;
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

final class DeleteHostedRunnerForOrg
{
    public const OPERATION_ID    = 'actions/delete-hosted-runner-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/hosted-runners/{hosted_runner_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Unique identifier of the GitHub-hosted runner. **/
    private int $hostedRunnerId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Actions\HostedRunners\HostedRunnerId $hydrator, string $org, int $hostedRunnerId)
    {
        $this->org            = $org;
        $this->hostedRunnerId = $hostedRunnerId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{hosted_runner_id}'], [$this->org, $this->hostedRunnerId], '/orgs/{org}/actions/hosted-runners/{hosted_runner_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\ActionsHostedRunner
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
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ActionsHostedRunner::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ActionsHostedRunner::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
