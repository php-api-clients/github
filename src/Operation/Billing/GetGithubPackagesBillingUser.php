<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Billing;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetGithubPackagesBillingUser
{
    public const OPERATION_ID = 'billing/get-github-packages-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/packages';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/settings/billing/packages';
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Packages $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Packages $hydrator, string $username)
    {
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}'), array($this->username), self::PATH));
    }
    /**
     * @return Schema\PackagesBillingUsage
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\PackagesBillingUsage
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\PackagesBillingUsage::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\PackagesBillingUsage::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
