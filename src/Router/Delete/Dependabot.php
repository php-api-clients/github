<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Dependabot
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function deleteRepoSecret(array $params)
    {
        $arguments = array();
        if (array_key_exists('owner', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: owner');
        }
        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo');
        }
        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: secret_name');
        }
        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operation = new Operation\Dependabot\DeleteRepoSecret($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function deleteOrgSecret(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: secret_name');
        }
        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operation = new Operation\Dependabot\DeleteOrgSecret($arguments['org'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeSelectedRepoFromOrgSecret(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: secret_name');
        }
        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repository_id');
        }
        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operation = new Operation\Dependabot\RemoveSelectedRepoFromOrgSecret($arguments['org'], $arguments['secret_name'], $arguments['repository_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
