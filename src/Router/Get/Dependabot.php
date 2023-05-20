<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Dependabot
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function listAlertsForEnterprise(array $params)
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: severity');
        }

        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ecosystem');
        }

        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('package', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package');
        }

        $arguments['package'] = $params['package'];
        unset($params['package']);
        if (array_key_exists('scope', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scope');
        }

        $arguments['scope'] = $params['scope'];
        unset($params['scope']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('last', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last');
        }

        $arguments['last'] = $params['last'];
        unset($params['last']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('first', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: first');
        }

        $arguments['first'] = $params['first'];
        unset($params['first']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts();
        }

        $operator = new Operator\Dependabot\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts::class]);

        return $operator->call($arguments['enterprise'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['first'], $arguments['per_page']);
    }

    public function listAlertsForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: severity');
        }

        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ecosystem');
        }

        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('package', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package');
        }

        $arguments['package'] = $params['package'];
        unset($params['package']);
        if (array_key_exists('scope', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scope');
        }

        $arguments['scope'] = $params['scope'];
        unset($params['scope']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('last', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last');
        }

        $arguments['last'] = $params['last'];
        unset($params['last']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('first', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: first');
        }

        $arguments['first'] = $params['first'];
        unset($params['first']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Dependabot\Alerts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts();
        }

        $operator = new Operator\Dependabot\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Alerts::class]);

        return $operator->call($arguments['org'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['first'], $arguments['per_page']);
    }

    public function listOrgSecrets(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Dependabot\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets();
        }

        $operator = new Operator\Dependabot\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function getOrgPublicKey(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Dependabot\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey::class]);

        return $operator->call($arguments['org']);
    }

    public function getOrgSecret(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Dependabot\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName::class]);

        return $operator->call($arguments['org'], $arguments['secret_name']);
    }

    public function listAlertsForRepo(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: severity');
        }

        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ecosystem');
        }

        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('package', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package');
        }

        $arguments['package'] = $params['package'];
        unset($params['package']);
        if (array_key_exists('manifest', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: manifest');
        }

        $arguments['manifest'] = $params['manifest'];
        unset($params['manifest']);
        if (array_key_exists('scope', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scope');
        }

        $arguments['scope'] = $params['scope'];
        unset($params['scope']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('last', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last');
        }

        $arguments['last'] = $params['last'];
        unset($params['last']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('first', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: first');
        }

        $arguments['first'] = $params['first'];
        unset($params['first']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts();
        }

        $operator = new Operator\Dependabot\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['manifest'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['page'], $arguments['per_page'], $arguments['first']);
    }

    public function listRepoSecrets(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets();
        }

        $operator = new Operator\Dependabot\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listSelectedReposForOrgSecret(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories();
        }

        $operator = new Operator\Dependabot\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['page'], $arguments['per_page']);
    }

    public function getAlert(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('alert_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: alert_number');
        }

        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber();
        }

        $operator = new Operator\Dependabot\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number']);
    }

    public function getRepoPublicKey(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Dependabot\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function getRepoSecret(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Dependabot\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
    }
}
