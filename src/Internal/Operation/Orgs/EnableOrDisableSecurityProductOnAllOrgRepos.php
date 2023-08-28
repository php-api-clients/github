<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class EnableOrDisableSecurityProductOnAllOrgRepos
{
    public const OPERATION_ID    = 'orgs/enable-or-disable-security-product-on-all-org-repos';
    public const OPERATION_MATCH = 'POST /orgs/{org}/{security_product}/{enablement}';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/{security_product}/{enablement}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The security feature to enable or disable. **/
    private string $securityProduct;
    /**The action to take.

    `enable_all` means to enable the specified security feature for all repositories in the organization.
    `disable_all` means to disable the specified security feature for all repositories in the organization. **/
    private string $enablement;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, string $org, string $securityProduct, string $enablement)
    {
        $this->org             = $org;
        $this->securityProduct = $securityProduct;
        $this->enablement      = $enablement;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{security_product}', '{enablement}'], [$this->org, $this->securityProduct, $this->enablement], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Action started
             **/
            case 204:
                return ['code' => 204];
            /**
             * The action could not be taken due to an in progress enablement, or a policy is preventing enablement
             **/

            case 422:
                return ['code' => 422];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
