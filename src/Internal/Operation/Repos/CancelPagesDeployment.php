<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class CancelPagesDeployment
{
    public const OPERATION_ID    = 'repos/cancel-pages-deployment';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/pages/deployments/{pages_deployment_id}/cancel';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the Pages deployment. You can also give the commit SHA of the deployment. **/
    private $pagesDeploymentId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel $hydrator, string $owner, string $repo, $pagesDeploymentId)
    {
        $this->owner             = $owner;
        $this->repo              = $repo;
        $this->pagesDeploymentId = $pagesDeploymentId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', str_replace(['{owner}', '{repo}', '{pages_deployment_id}'], [$this->owner, $this->repo, $this->pagesDeploymentId], '/repos/{owner}/{repo}/pages/deployments/{pages_deployment_id}/cancel'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Resource not found
                     **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * A header with no content is returned.
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
