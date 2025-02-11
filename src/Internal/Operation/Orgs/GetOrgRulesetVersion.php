<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
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

final class GetOrgRulesetVersion
{
    public const OPERATION_ID    = 'orgs/get-org-ruleset-version';
    public const OPERATION_MATCH = 'GET /orgs/{org}/rulesets/{ruleset_id}/history/{version_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The ID of the ruleset. **/
    private int $rulesetId;
    /**The ID of the version **/
    private int $versionId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Rulesets\RulesetId\History\VersionId $hydrator, string $org, int $rulesetId, int $versionId)
    {
        $this->org       = $org;
        $this->rulesetId = $rulesetId;
        $this->versionId = $versionId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{ruleset_id}', '{version_id}'], [$this->org, $this->rulesetId, $this->versionId], '/orgs/{org}/rulesets/{ruleset_id}/history/{version_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\RulesetVersion
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RulesetVersion::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\RulesetVersion::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(500, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
