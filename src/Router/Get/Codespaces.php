<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Get;

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
    public function listInOrganization(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces();
        }
        $operation = new Operation\Codespaces\ListInOrganization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces::class], $arguments['org'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListInOrganization\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listSecretsForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\Secrets::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets();
        }
        $operation = new Operation\Codespaces\ListSecretsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListSecretsForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function getForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('codespace_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: codespace_name');
        }
        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb();
        }
        $operation = new Operation\Codespaces\GetForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb::class], $arguments['codespace_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Codespace {
            return $operation->createResponse($response);
        });
    }
    public function listOrgSecrets(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets();
        }
        $operation = new Operation\Codespaces\ListOrgSecrets($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets::class], $arguments['org'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListOrgSecrets\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listInRepositoryForAuthenticatedUser(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces();
        }
        $operation = new Operation\Codespaces\ListInRepositoryForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces::class], $arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListInRepositoryForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function getPublicKeyForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\PublicKey::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey();
        }
        $operation = new Operation\Codespaces\GetPublicKeyForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\PublicKey::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey {
            return $operation->createResponse($response);
        });
    }
    public function getSecretForAuthenticatedUser(array $params)
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
        $operation = new Operation\Codespaces\GetSecretForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb::class], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodespacesSecret {
            return $operation->createResponse($response);
        });
    }
    public function codespaceMachinesForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('codespace_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: codespace_name');
        }
        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Machines::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Machines::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Machines();
        }
        $operation = new Operation\Codespaces\CodespaceMachinesForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Machines::class], $arguments['codespace_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('repository_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repository_id');
        }
        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\User\Codespaces::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces();
        }
        $operation = new Operation\Codespaces\ListForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces::class], $arguments['repository_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function getOrgPublicKey(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey();
        }
        $operation = new Operation\Codespaces\GetOrgPublicKey($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodespacesPublicKey {
            return $operation->createResponse($response);
        });
    }
    public function getOrgSecret(array $params)
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
        $operation = new Operation\Codespaces\GetOrgSecret($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb::class], $arguments['org'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodespacesOrgSecret {
            return $operation->createResponse($response);
        });
    }
    public function getCodespacesForUserInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces();
        }
        $operation = new Operation\Codespaces\GetCodespacesForUserInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces::class], $arguments['org'], $arguments['username'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\GetCodespacesForUserInOrg\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listDevcontainersInRepositoryForAuthenticatedUser(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers();
        }
        $operation = new Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers::class], $arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function repoMachinesForAuthenticatedUser(array $params)
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
        if (array_key_exists('location', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: location');
        }
        $arguments['location'] = $params['location'];
        unset($params['location']);
        if (array_key_exists('client_ip', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_ip');
        }
        $arguments['client_ip'] = $params['client_ip'];
        unset($params['client_ip']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines();
        }
        $operation = new Operation\Codespaces\RepoMachinesForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines::class], $arguments['owner'], $arguments['repo'], $arguments['location'], $arguments['client_ip']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\RepoMachinesForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function preFlightWithRepoForAuthenticatedUser(array $params)
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
        if (array_key_exists('ref', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: ref');
        }
        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('client_ip', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_ip');
        }
        $arguments['client_ip'] = $params['client_ip'];
        unset($params['client_ip']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_();
        }
        $operation = new Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_::class], $arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['client_ip']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listRepoSecrets(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets();
        }
        $operation = new Operation\Codespaces\ListRepoSecrets($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets::class], $arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListRepoSecrets\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listRepositoriesForSecretForAuthenticatedUser(array $params)
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
        $operation = new Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb\Repositories::class], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function getExportDetailsForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('codespace_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: codespace_name');
        }
        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists('export_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: export_id');
        }
        $arguments['export_id'] = $params['export_id'];
        unset($params['export_id']);
        if (\array_key_exists(Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports\CbExportIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports\CbExportIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports🌀CbExportIdRcb();
        }
        $operation = new Operation\Codespaces\GetExportDetailsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports\CbExportIdRcb::class], $arguments['codespace_name'], $arguments['export_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodespaceExportDetails {
            return $operation->createResponse($response);
        });
    }
    public function listSelectedReposForOrgSecret(array $params)
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
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb🌀Repositories();
        }
        $operation = new Operation\Codespaces\ListSelectedReposForOrgSecret($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb\Repositories::class], $arguments['org'], $arguments['secret_name'], $arguments['page'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Codespaces\ListSelectedReposForOrgSecret\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function getRepoPublicKey(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\PublicKey::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀PublicKey();
        }
        $operation = new Operation\Codespaces\GetRepoPublicKey($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\PublicKey::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodespacesPublicKey {
            return $operation->createResponse($response);
        });
    }
    public function getRepoSecret(array $params)
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
        $operation = new Operation\Codespaces\GetRepoSecret($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb::class], $arguments['owner'], $arguments['repo'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\RepoCodespacesSecret {
            return $operation->createResponse($response);
        });
    }
}
