<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Codespaces
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
    public function setCodespacesBilling(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Billing::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Billing::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Billing();
        }
        $operation = new Operation\Codespaces\SetCodespacesBilling($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Billing::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function createOrUpdateSecretForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('secret_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: secret_name');
        }
        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb();
        }
        $operation = new Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb::class], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\EmptyObject {
            return $operation->createResponse($response);
        });
    }
    public function setSelectedReposForOrgSecret(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb🌀Repositories();
        }
        $operation = new Operation\Codespaces\SetSelectedReposForOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories::class], $arguments['org'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function createOrUpdateRepoSecret(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb();
        }
        $operation = new Operation\Codespaces\CreateOrUpdateRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb::class], $arguments['owner'], $arguments['repo'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\EmptyObject {
            return $operation->createResponse($response);
        });
    }
    public function addRepositoryForSecretForAuthenticatedUser(array $params)
    {
        $arguments = array();
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
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb();
        }
        $operation = new Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb::class], $arguments['secret_name'], $arguments['repository_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function createOrUpdateOrgSecret(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb();
        }
        $operation = new Operation\Codespaces\CreateOrUpdateOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb::class], $arguments['org'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\EmptyObject {
            return $operation->createResponse($response);
        });
    }
    public function setRepositoriesForSecretForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('secret_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: secret_name');
        }
        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb🌀Repositories();
        }
        $operation = new Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories::class], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function addSelectedRepoToOrgSecret(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb();
        }
        $operation = new Operation\Codespaces\AddSelectedRepoToOrgSecret($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb::class], $arguments['org'], $arguments['secret_name'], $arguments['repository_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
}
