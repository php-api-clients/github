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
    public function listAlertsForEnterprise(array $params)
    {
        $arguments = array();
        if (array_key_exists('enterprise', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: enterprise');
        }
        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: severity');
        }
        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: ecosystem');
        }
        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('package', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package');
        }
        $arguments['package'] = $params['package'];
        unset($params['package']);
        if (array_key_exists('scope', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: scope');
        }
        $arguments['scope'] = $params['scope'];
        unset($params['scope']);
        if (array_key_exists('before', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: before');
        }
        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: after');
        }
        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('last', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: last');
        }
        $arguments['last'] = $params['last'];
        unset($params['last']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('first', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: first');
        }
        $arguments['first'] = $params['first'];
        unset($params['first']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts();
        }
        $operation = new Operation\Dependabot\ListAlertsForEnterprise($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts::class], $arguments['enterprise'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['first'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listAlertsForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: severity');
        }
        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: ecosystem');
        }
        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('package', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package');
        }
        $arguments['package'] = $params['package'];
        unset($params['package']);
        if (array_key_exists('scope', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: scope');
        }
        $arguments['scope'] = $params['scope'];
        unset($params['scope']);
        if (array_key_exists('before', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: before');
        }
        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: after');
        }
        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('last', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: last');
        }
        $arguments['last'] = $params['last'];
        unset($params['last']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('first', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: first');
        }
        $arguments['first'] = $params['first'];
        unset($params['first']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Alerts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Alerts();
        }
        $operation = new Operation\Dependabot\ListAlertsForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Alerts::class], $arguments['org'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['first'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets();
        }
        $operation = new Operation\Dependabot\ListOrgSecrets($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets::class], $arguments['org'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Dependabot\ListOrgSecrets\Response\Applicationjson\H200 {
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey();
        }
        $operation = new Operation\Dependabot\GetOrgPublicKey($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\DependabotPublicKey {
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb();
        }
        $operation = new Operation\Dependabot\GetOrgSecret($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb::class], $arguments['org'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret {
            return $operation->createResponse($response);
        });
    }
    public function listAlertsForRepo(array $params)
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
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: severity');
        }
        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: ecosystem');
        }
        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('package', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package');
        }
        $arguments['package'] = $params['package'];
        unset($params['package']);
        if (array_key_exists('manifest', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: manifest');
        }
        $arguments['manifest'] = $params['manifest'];
        unset($params['manifest']);
        if (array_key_exists('scope', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: scope');
        }
        $arguments['scope'] = $params['scope'];
        unset($params['scope']);
        if (array_key_exists('before', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: before');
        }
        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: after');
        }
        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('last', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: last');
        }
        $arguments['last'] = $params['last'];
        unset($params['last']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
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
        if (array_key_exists('first', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: first');
        }
        $arguments['first'] = $params['first'];
        unset($params['first']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts();
        }
        $operation = new Operation\Dependabot\ListAlertsForRepo($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts::class], $arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['manifest'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['page'], $arguments['per_page'], $arguments['first']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets();
        }
        $operation = new Operation\Dependabot\ListRepoSecrets($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets::class], $arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Dependabot\ListRepoSecrets\Response\Applicationjson\H200 {
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories();
        }
        $operation = new Operation\Dependabot\ListSelectedReposForOrgSecret($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories::class], $arguments['org'], $arguments['secret_name'], $arguments['page'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Dependabot\ListSelectedReposForOrgSecret\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function getAlert(array $params)
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
        if (array_key_exists('alert_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: alert_number');
        }
        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts\CbAlertNumberRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts\CbAlertNumberRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts🌀CbAlertNumberRcb();
        }
        $operation = new Operation\Dependabot\GetAlert($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts\CbAlertNumberRcb::class], $arguments['owner'], $arguments['repo'], $arguments['alert_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\DependabotAlert {
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀PublicKey();
        }
        $operation = new Operation\Dependabot\GetRepoPublicKey($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\DependabotPublicKey {
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb();
        }
        $operation = new Operation\Dependabot\GetRepoSecret($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb::class], $arguments['owner'], $arguments['repo'], $arguments['secret_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\DependabotSecret {
            return $operation->createResponse($response);
        });
    }
}
