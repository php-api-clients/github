<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\DependabotAlert;
use ApiClients\Client\GitHub\Schema\DependabotPublicKey;
use ApiClients\Client\GitHub\Schema\DependabotSecret;
use ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Dependabot
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<int,Schema\DependabotAlertWithRepository>|WithoutBody */
    public function listAlertsForEnterprise(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Dependabot\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts());

        return $operator->call($arguments['enterprise'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['first'], $arguments['per_page']);
    }

    /** @return iterable<int,Schema\DependabotAlertWithRepository>|WithoutBody */
    public function listAlertsForOrg(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Dependabot\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts());

        return $operator->call($arguments['org'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['first'], $arguments['per_page']);
    }

    public function listOrgSecrets(array $params): Ok
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
        $operator = new Internal\Operator\Dependabot\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getOrgPublicKey(array $params): DependabotPublicKey
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Dependabot\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getOrgSecret(array $params): OrganizationDependabotSecret
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
        $operator = new Internal\Operator\Dependabot\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());

        return $operator->call($arguments['org'], $arguments['secret_name']);
    }

    /** @return iterable<int,Schema\DependabotAlert>|WithoutBody */
    public function listAlertsForRepo(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Dependabot\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['manifest'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['page'], $arguments['per_page'], $arguments['first']);
    }

    public function listRepoSecrets(array $params): \ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok
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
        $operator = new Internal\Operator\Dependabot\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listSelectedReposForOrgSecret(array $params): Json
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
        $operator = new Internal\Operator\Dependabot\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['page'], $arguments['per_page']);
    }

    /** @return */
    public function getAlert(array $params): DependabotAlert|WithoutBody
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
        $operator = new Internal\Operator\Dependabot\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number']);
    }

    /** @return */
    public function getRepoPublicKey(array $params): DependabotPublicKey
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
        $operator = new Internal\Operator\Dependabot\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey());

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getRepoSecret(array $params): DependabotSecret
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
        $operator = new Internal\Operator\Dependabot\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
    }
}
