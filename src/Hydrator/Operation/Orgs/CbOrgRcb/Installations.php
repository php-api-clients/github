<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\CbOrgRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Installations implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHub\Schema\Installation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\AppPermissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['installations'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installations';
                goto after_installations;
            }

            static $installationsCaster1;

            if ($installationsCaster1 === null) {
                $installationsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Installation',
));
            }

            $value = $installationsCaster1->cast($value, $this);

            $properties['installations'] = $value;

            after_installations:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation(array $payload): \ApiClients\Client\GitHub\Schema\Installation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['account'] ?? null;

            if ($value === null) {
                $missingFields[] = 'account';
                goto after_account;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'account';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['account'] = $value;

            after_account:

            $value = $payload['repository_selection'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_selection';
                goto after_repositorySelection;
            }

            $properties['repositorySelection'] = $value;

            after_repositorySelection:

            $value = $payload['access_tokens_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'access_tokens_url';
                goto after_accessTokensUrl;
            }

            $properties['accessTokensUrl'] = $value;

            after_accessTokensUrl:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositoriesUrl;
            }

            $properties['repositoriesUrl'] = $value;

            after_repositoriesUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['app_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app_id';
                goto after_appId;
            }

            $properties['appId'] = $value;

            after_appId:

            $value = $payload['target_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'target_id';
                goto after_targetId;
            }

            $properties['targetId'] = $value;

            after_targetId:

            $value = $payload['target_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'target_type';
                goto after_targetType;
            }

            $properties['targetType'] = $value;

            after_targetType:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions';
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events';
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['single_file_name'] ?? null;

            if ($value === null) {
                $properties['singleFileName'] = null;
                goto after_singleFileName;
            }

            $properties['singleFileName'] = $value;

            after_singleFileName:

            $value = $payload['has_multiple_single_files'] ?? null;

            if ($value === null) {
                $properties['hasMultipleSingleFiles'] = null;
                goto after_hasMultipleSingleFiles;
            }

            $properties['hasMultipleSingleFiles'] = $value;

            after_hasMultipleSingleFiles:

            $value = $payload['single_file_paths'] ?? null;

            if ($value === null) {
                $properties['singleFilePaths'] = null;
                goto after_singleFilePaths;
            }

            $properties['singleFilePaths'] = $value;

            after_singleFilePaths:

            $value = $payload['app_slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app_slug';
                goto after_appSlug;
            }

            $properties['appSlug'] = $value;

            after_appSlug:

            $value = $payload['suspended_by'] ?? null;

            if ($value === null) {
                $properties['suspendedBy'] = null;
                goto after_suspendedBy;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'suspendedBy';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['suspendedBy'] = $value;

            after_suspendedBy:

            $value = $payload['suspended_at'] ?? null;

            if ($value === null) {
                $properties['suspendedAt'] = null;
                goto after_suspendedAt;
            }

            $properties['suspendedAt'] = $value;

            after_suspendedAt:

            $value = $payload['contact_email'] ?? null;

            if ($value === null) {
                $properties['contactEmail'] = null;
                goto after_contactEmail;
            }

            $properties['contactEmail'] = $value;

            after_contactEmail:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Installation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Installation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Installation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Installation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHub\Schema\SimpleUser
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SimpleUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions(array $payload): \ApiClients\Client\GitHub\Schema\AppPermissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['actions'] ?? null;

            if ($value === null) {
                $properties['actions'] = null;
                goto after_actions;
            }

            $properties['actions'] = $value;

            after_actions:

            $value = $payload['administration'] ?? null;

            if ($value === null) {
                $properties['administration'] = null;
                goto after_administration;
            }

            $properties['administration'] = $value;

            after_administration:

            $value = $payload['checks'] ?? null;

            if ($value === null) {
                $properties['checks'] = null;
                goto after_checks;
            }

            $properties['checks'] = $value;

            after_checks:

            $value = $payload['contents'] ?? null;

            if ($value === null) {
                $properties['contents'] = null;
                goto after_contents;
            }

            $properties['contents'] = $value;

            after_contents:

            $value = $payload['deployments'] ?? null;

            if ($value === null) {
                $properties['deployments'] = null;
                goto after_deployments;
            }

            $properties['deployments'] = $value;

            after_deployments:

            $value = $payload['environments'] ?? null;

            if ($value === null) {
                $properties['environments'] = null;
                goto after_environments;
            }

            $properties['environments'] = $value;

            after_environments:

            $value = $payload['issues'] ?? null;

            if ($value === null) {
                $properties['issues'] = null;
                goto after_issues;
            }

            $properties['issues'] = $value;

            after_issues:

            $value = $payload['metadata'] ?? null;

            if ($value === null) {
                $properties['metadata'] = null;
                goto after_metadata;
            }

            $properties['metadata'] = $value;

            after_metadata:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $properties['packages'] = null;
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['pull_requests'] ?? null;

            if ($value === null) {
                $properties['pullRequests'] = null;
                goto after_pullRequests;
            }

            $properties['pullRequests'] = $value;

            after_pullRequests:

            $value = $payload['repository_hooks'] ?? null;

            if ($value === null) {
                $properties['repositoryHooks'] = null;
                goto after_repositoryHooks;
            }

            $properties['repositoryHooks'] = $value;

            after_repositoryHooks:

            $value = $payload['repository_projects'] ?? null;

            if ($value === null) {
                $properties['repositoryProjects'] = null;
                goto after_repositoryProjects;
            }

            $properties['repositoryProjects'] = $value;

            after_repositoryProjects:

            $value = $payload['secret_scanning_alerts'] ?? null;

            if ($value === null) {
                $properties['secretScanningAlerts'] = null;
                goto after_secretScanningAlerts;
            }

            $properties['secretScanningAlerts'] = $value;

            after_secretScanningAlerts:

            $value = $payload['secrets'] ?? null;

            if ($value === null) {
                $properties['secrets'] = null;
                goto after_secrets;
            }

            $properties['secrets'] = $value;

            after_secrets:

            $value = $payload['security_events'] ?? null;

            if ($value === null) {
                $properties['securityEvents'] = null;
                goto after_securityEvents;
            }

            $properties['securityEvents'] = $value;

            after_securityEvents:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['statuses'] ?? null;

            if ($value === null) {
                $properties['statuses'] = null;
                goto after_statuses;
            }

            $properties['statuses'] = $value;

            after_statuses:

            $value = $payload['vulnerability_alerts'] ?? null;

            if ($value === null) {
                $properties['vulnerabilityAlerts'] = null;
                goto after_vulnerabilityAlerts;
            }

            $properties['vulnerabilityAlerts'] = $value;

            after_vulnerabilityAlerts:

            $value = $payload['workflows'] ?? null;

            if ($value === null) {
                $properties['workflows'] = null;
                goto after_workflows;
            }

            $properties['workflows'] = $value;

            after_workflows:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $properties['members'] = null;
                goto after_members;
            }

            $properties['members'] = $value;

            after_members:

            $value = $payload['organization_administration'] ?? null;

            if ($value === null) {
                $properties['organizationAdministration'] = null;
                goto after_organizationAdministration;
            }

            $properties['organizationAdministration'] = $value;

            after_organizationAdministration:

            $value = $payload['organization_custom_roles'] ?? null;

            if ($value === null) {
                $properties['organizationCustomRoles'] = null;
                goto after_organizationCustomRoles;
            }

            $properties['organizationCustomRoles'] = $value;

            after_organizationCustomRoles:

            $value = $payload['organization_announcement_banners'] ?? null;

            if ($value === null) {
                $properties['organizationAnnouncementBanners'] = null;
                goto after_organizationAnnouncementBanners;
            }

            $properties['organizationAnnouncementBanners'] = $value;

            after_organizationAnnouncementBanners:

            $value = $payload['organization_hooks'] ?? null;

            if ($value === null) {
                $properties['organizationHooks'] = null;
                goto after_organizationHooks;
            }

            $properties['organizationHooks'] = $value;

            after_organizationHooks:

            $value = $payload['organization_personal_access_tokens'] ?? null;

            if ($value === null) {
                $properties['organizationPersonalAccessTokens'] = null;
                goto after_organizationPersonalAccessTokens;
            }

            $properties['organizationPersonalAccessTokens'] = $value;

            after_organizationPersonalAccessTokens:

            $value = $payload['organization_personal_access_token_requests'] ?? null;

            if ($value === null) {
                $properties['organizationPersonalAccessTokenRequests'] = null;
                goto after_organizationPersonalAccessTokenRequests;
            }

            $properties['organizationPersonalAccessTokenRequests'] = $value;

            after_organizationPersonalAccessTokenRequests:

            $value = $payload['organization_plan'] ?? null;

            if ($value === null) {
                $properties['organizationPlan'] = null;
                goto after_organizationPlan;
            }

            $properties['organizationPlan'] = $value;

            after_organizationPlan:

            $value = $payload['organization_projects'] ?? null;

            if ($value === null) {
                $properties['organizationProjects'] = null;
                goto after_organizationProjects;
            }

            $properties['organizationProjects'] = $value;

            after_organizationProjects:

            $value = $payload['organization_packages'] ?? null;

            if ($value === null) {
                $properties['organizationPackages'] = null;
                goto after_organizationPackages;
            }

            $properties['organizationPackages'] = $value;

            after_organizationPackages:

            $value = $payload['organization_secrets'] ?? null;

            if ($value === null) {
                $properties['organizationSecrets'] = null;
                goto after_organizationSecrets;
            }

            $properties['organizationSecrets'] = $value;

            after_organizationSecrets:

            $value = $payload['organization_self_hosted_runners'] ?? null;

            if ($value === null) {
                $properties['organizationSelfHostedRunners'] = null;
                goto after_organizationSelfHostedRunners;
            }

            $properties['organizationSelfHostedRunners'] = $value;

            after_organizationSelfHostedRunners:

            $value = $payload['organization_user_blocking'] ?? null;

            if ($value === null) {
                $properties['organizationUserBlocking'] = null;
                goto after_organizationUserBlocking;
            }

            $properties['organizationUserBlocking'] = $value;

            after_organizationUserBlocking:

            $value = $payload['team_discussions'] ?? null;

            if ($value === null) {
                $properties['teamDiscussions'] = null;
                goto after_teamDiscussions;
            }

            $properties['teamDiscussions'] = $value;

            after_teamDiscussions:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\AppPermissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\AppPermissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHub\Schema\Installation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\AppPermissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Orgs⚡️ListAppInstallations⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Orgs\ListAppInstallations\Response\Applicationjson\H200);
        $result = [];

        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $installations = $object->installations;
        static $installationsSerializer0;

        if ($installationsSerializer0 === null) {
            $installationsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Installation',
));
        }
        
        $installations = $installationsSerializer0->serialize($installations, $this);
        after_installations:        $result['installations'] = $installations;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Installation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Installation);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $account = $object->account;
        $account = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($account);
        after_account:        $result['account'] = $account;

        
        $repositorySelection = $object->repositorySelection;
        after_repositorySelection:        $result['repository_selection'] = $repositorySelection;

        
        $accessTokensUrl = $object->accessTokensUrl;
        after_accessTokensUrl:        $result['access_tokens_url'] = $accessTokensUrl;

        
        $repositoriesUrl = $object->repositoriesUrl;
        after_repositoriesUrl:        $result['repositories_url'] = $repositoriesUrl;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $appId = $object->appId;
        after_appId:        $result['app_id'] = $appId;

        
        $targetId = $object->targetId;
        after_targetId:        $result['target_id'] = $targetId;

        
        $targetType = $object->targetType;
        after_targetType:        $result['target_type'] = $targetType;

        
        $permissions = $object->permissions;
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $events = $object->events;
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $singleFileName = $object->singleFileName;

        if ($singleFileName === null) {
            goto after_singleFileName;
        }
        after_singleFileName:        $result['single_file_name'] = $singleFileName;

        
        $hasMultipleSingleFiles = $object->hasMultipleSingleFiles;

        if ($hasMultipleSingleFiles === null) {
            goto after_hasMultipleSingleFiles;
        }
        after_hasMultipleSingleFiles:        $result['has_multiple_single_files'] = $hasMultipleSingleFiles;

        
        $singleFilePaths = $object->singleFilePaths;

        if ($singleFilePaths === null) {
            goto after_singleFilePaths;
        }
        static $singleFilePathsSerializer0;

        if ($singleFilePathsSerializer0 === null) {
            $singleFilePathsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $singleFilePaths = $singleFilePathsSerializer0->serialize($singleFilePaths, $this);
        after_singleFilePaths:        $result['single_file_paths'] = $singleFilePaths;

        
        $appSlug = $object->appSlug;
        after_appSlug:        $result['app_slug'] = $appSlug;

        
        $suspendedBy = $object->suspendedBy;

        if ($suspendedBy === null) {
            goto after_suspendedBy;
        }
        $suspendedBy = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($suspendedBy);
        after_suspendedBy:        $result['suspended_by'] = $suspendedBy;

        
        $suspendedAt = $object->suspendedAt;

        if ($suspendedAt === null) {
            goto after_suspendedAt;
        }
        after_suspendedAt:        $result['suspended_at'] = $suspendedAt;

        
        $contactEmail = $object->contactEmail;

        if ($contactEmail === null) {
            goto after_contactEmail;
        }
        after_contactEmail:        $result['contact_email'] = $contactEmail;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $reposUrl = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        
        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }
        after_starredAt:        $result['starred_at'] = $starredAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\AppPermissions);
        $result = [];

        $actions = $object->actions;

        if ($actions === null) {
            goto after_actions;
        }
        after_actions:        $result['actions'] = $actions;

        
        $administration = $object->administration;

        if ($administration === null) {
            goto after_administration;
        }
        after_administration:        $result['administration'] = $administration;

        
        $checks = $object->checks;

        if ($checks === null) {
            goto after_checks;
        }
        after_checks:        $result['checks'] = $checks;

        
        $contents = $object->contents;

        if ($contents === null) {
            goto after_contents;
        }
        after_contents:        $result['contents'] = $contents;

        
        $deployments = $object->deployments;

        if ($deployments === null) {
            goto after_deployments;
        }
        after_deployments:        $result['deployments'] = $deployments;

        
        $environments = $object->environments;

        if ($environments === null) {
            goto after_environments;
        }
        after_environments:        $result['environments'] = $environments;

        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        after_issues:        $result['issues'] = $issues;

        
        $metadata = $object->metadata;

        if ($metadata === null) {
            goto after_metadata;
        }
        after_metadata:        $result['metadata'] = $metadata;

        
        $packages = $object->packages;

        if ($packages === null) {
            goto after_packages;
        }
        after_packages:        $result['packages'] = $packages;

        
        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }
        after_pages:        $result['pages'] = $pages;

        
        $pullRequests = $object->pullRequests;

        if ($pullRequests === null) {
            goto after_pullRequests;
        }
        after_pullRequests:        $result['pull_requests'] = $pullRequests;

        
        $repositoryHooks = $object->repositoryHooks;

        if ($repositoryHooks === null) {
            goto after_repositoryHooks;
        }
        after_repositoryHooks:        $result['repository_hooks'] = $repositoryHooks;

        
        $repositoryProjects = $object->repositoryProjects;

        if ($repositoryProjects === null) {
            goto after_repositoryProjects;
        }
        after_repositoryProjects:        $result['repository_projects'] = $repositoryProjects;

        
        $secretScanningAlerts = $object->secretScanningAlerts;

        if ($secretScanningAlerts === null) {
            goto after_secretScanningAlerts;
        }
        after_secretScanningAlerts:        $result['secret_scanning_alerts'] = $secretScanningAlerts;

        
        $secrets = $object->secrets;

        if ($secrets === null) {
            goto after_secrets;
        }
        after_secrets:        $result['secrets'] = $secrets;

        
        $securityEvents = $object->securityEvents;

        if ($securityEvents === null) {
            goto after_securityEvents;
        }
        after_securityEvents:        $result['security_events'] = $securityEvents;

        
        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }
        after_singleFile:        $result['single_file'] = $singleFile;

        
        $statuses = $object->statuses;

        if ($statuses === null) {
            goto after_statuses;
        }
        after_statuses:        $result['statuses'] = $statuses;

        
        $vulnerabilityAlerts = $object->vulnerabilityAlerts;

        if ($vulnerabilityAlerts === null) {
            goto after_vulnerabilityAlerts;
        }
        after_vulnerabilityAlerts:        $result['vulnerability_alerts'] = $vulnerabilityAlerts;

        
        $workflows = $object->workflows;

        if ($workflows === null) {
            goto after_workflows;
        }
        after_workflows:        $result['workflows'] = $workflows;

        
        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }
        after_members:        $result['members'] = $members;

        
        $organizationAdministration = $object->organizationAdministration;

        if ($organizationAdministration === null) {
            goto after_organizationAdministration;
        }
        after_organizationAdministration:        $result['organization_administration'] = $organizationAdministration;

        
        $organizationCustomRoles = $object->organizationCustomRoles;

        if ($organizationCustomRoles === null) {
            goto after_organizationCustomRoles;
        }
        after_organizationCustomRoles:        $result['organization_custom_roles'] = $organizationCustomRoles;

        
        $organizationAnnouncementBanners = $object->organizationAnnouncementBanners;

        if ($organizationAnnouncementBanners === null) {
            goto after_organizationAnnouncementBanners;
        }
        after_organizationAnnouncementBanners:        $result['organization_announcement_banners'] = $organizationAnnouncementBanners;

        
        $organizationHooks = $object->organizationHooks;

        if ($organizationHooks === null) {
            goto after_organizationHooks;
        }
        after_organizationHooks:        $result['organization_hooks'] = $organizationHooks;

        
        $organizationPersonalAccessTokens = $object->organizationPersonalAccessTokens;

        if ($organizationPersonalAccessTokens === null) {
            goto after_organizationPersonalAccessTokens;
        }
        after_organizationPersonalAccessTokens:        $result['organization_personal_access_tokens'] = $organizationPersonalAccessTokens;

        
        $organizationPersonalAccessTokenRequests = $object->organizationPersonalAccessTokenRequests;

        if ($organizationPersonalAccessTokenRequests === null) {
            goto after_organizationPersonalAccessTokenRequests;
        }
        after_organizationPersonalAccessTokenRequests:        $result['organization_personal_access_token_requests'] = $organizationPersonalAccessTokenRequests;

        
        $organizationPlan = $object->organizationPlan;

        if ($organizationPlan === null) {
            goto after_organizationPlan;
        }
        after_organizationPlan:        $result['organization_plan'] = $organizationPlan;

        
        $organizationProjects = $object->organizationProjects;

        if ($organizationProjects === null) {
            goto after_organizationProjects;
        }
        after_organizationProjects:        $result['organization_projects'] = $organizationProjects;

        
        $organizationPackages = $object->organizationPackages;

        if ($organizationPackages === null) {
            goto after_organizationPackages;
        }
        after_organizationPackages:        $result['organization_packages'] = $organizationPackages;

        
        $organizationSecrets = $object->organizationSecrets;

        if ($organizationSecrets === null) {
            goto after_organizationSecrets;
        }
        after_organizationSecrets:        $result['organization_secrets'] = $organizationSecrets;

        
        $organizationSelfHostedRunners = $object->organizationSelfHostedRunners;

        if ($organizationSelfHostedRunners === null) {
            goto after_organizationSelfHostedRunners;
        }
        after_organizationSelfHostedRunners:        $result['organization_self_hosted_runners'] = $organizationSelfHostedRunners;

        
        $organizationUserBlocking = $object->organizationUserBlocking;

        if ($organizationUserBlocking === null) {
            goto after_organizationUserBlocking;
        }
        after_organizationUserBlocking:        $result['organization_user_blocking'] = $organizationUserBlocking;

        
        $teamDiscussions = $object->teamDiscussions;

        if ($teamDiscussions === null) {
            goto after_teamDiscussions;
        }
        after_teamDiscussions:        $result['team_discussions'] = $teamDiscussions;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
