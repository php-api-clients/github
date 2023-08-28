<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\App\Installations\InstallationId;

use ApiClients\Client\GitHub\Schema\AppPermissions;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Client\GitHub\Schema\ValidationError;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class AccessTokens implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\InstallationToken' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️InstallationToken($payload),
                'ApiClients\Client\GitHub\Schema\AppPermissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️InstallationToken(array $payload): InstallationToken
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['token'] ?? null;

            if ($value === null) {
                $missingFields[] = 'token';
                goto after_token;
            }

            $properties['token'] = $value;

            after_token:

            $value = $payload['expires_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'expires_at';
                goto after_expiresAt;
            }

            $properties['expiresAt'] = $value;

            after_expiresAt:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['repository_selection'] ?? null;

            if ($value === null) {
                $properties['repositorySelection'] = null;
                goto after_repositorySelection;
            }

            $properties['repositorySelection'] = $value;

            after_repositorySelection:

            $value = $payload['repositories'] ?? null;

            if ($value === null) {
                $properties['repositories'] = null;
                goto after_repositories;
            }

            $properties['repositories'] = $value;

            after_repositories:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\InstallationToken', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(InstallationToken::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new InstallationToken(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\InstallationToken', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions(array $payload): AppPermissions
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AppPermissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AppPermissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): ValidationError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ValidationError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\InstallationToken' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️InstallationToken($object),
                'ApiClients\Client\GitHub\Schema\AppPermissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
                default => throw new LogicException('No serialization defined for $className'),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️InstallationToken(mixed $object): mixed
    {
        assert($object instanceof InstallationToken);
        $result = [];

        $token                               = $object->token;
        after_token:        $result['token'] = $token;

        $expiresAt                                    = $object->expiresAt;
        after_expiresAt:        $result['expires_at'] = $expiresAt;

        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }

        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $repositorySelection = $object->repositorySelection;

        if ($repositorySelection === null) {
            goto after_repositorySelection;
        }

        after_repositorySelection:        $result['repository_selection'] = $repositorySelection;

        $repositories = $object->repositories;

        if ($repositories === null) {
            goto after_repositories;
        }

        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new SerializeArrayItems(...[]);
        }

        $repositories                                      = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }

        after_singleFile:        $result['single_file'] = $singleFile;

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
            $singleFilePathsSerializer0 = new SerializeArrayItems(...[]);
        }

        $singleFilePaths                                           = $singleFilePathsSerializer0->serialize($singleFilePaths, $this);
        after_singleFilePaths:        $result['single_file_paths'] = $singleFilePaths;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AppPermissions(mixed $object): mixed
    {
        assert($object instanceof AppPermissions);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        assert($object instanceof ValidationError);
        $result = [];

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $documentationUrl                                           = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
