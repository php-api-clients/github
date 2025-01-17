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

final class GetHostedRunnersPartnerImagesForOrg
{
    public const OPERATION_ID    = 'actions/get-hosted-runners-partner-images-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/hosted-runners/images/partner';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Actions\HostedRunners\Images\Partner $hydrator, string $org)
    {
        $this->org = $org;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}'], [$this->org], '/orgs/{org}/actions/hosted-runners/images/partner'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\GetHostedRunnersPartnerImagesForOrg\Response\ApplicationJson\Ok\Application\Json
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\GetHostedRunnersPartnerImagesForOrg\Response\ApplicationJson\Ok\Application\Json::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\GetHostedRunnersPartnerImagesForOrg\Response\ApplicationJson\Ok\Application\Json::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
