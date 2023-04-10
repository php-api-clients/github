<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Billing;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetGithubActionsBillingUser
{
    public const OPERATION_ID = 'billing/get-github-actions-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/actions';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/settings/billing/actions';
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Actions $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\CbUsernameRcb\Settings\Billing\Actions $hydrator, string $username)
    {
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}'), array($this->username), self::PATH));
    }
    /**
     * @return Schema\ActionsBillingUsage
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ActionsBillingUsage
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ActionsBillingUsage::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ActionsBillingUsage::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
