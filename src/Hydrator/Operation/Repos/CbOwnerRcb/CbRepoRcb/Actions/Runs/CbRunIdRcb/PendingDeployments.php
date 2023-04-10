<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class PendingDeployments implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\PendingDeployment' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment($payload),
                'ApiClients\Client\Github\Schema\PendingDeployment\Environment' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Environment($payload),
                'ApiClients\Client\Github\Schema\PendingDeployment\Reviewers' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Reviewers($payload),
                'ApiClients\Client\Github\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\Schema\Deployment' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Deployment($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment(array $payload): \ApiClients\Client\Github\Schema\PendingDeployment
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $missingFields[] = 'environment';
                goto after_environment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'environment';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Environment($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['wait_timer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'wait_timer';
                goto after_waitTimer;
            }

            $properties['waitTimer'] = $value;

            after_waitTimer:

            $value = $payload['wait_timer_started_at'] ?? null;

            if ($value === null) {
                $properties['waitTimerStartedAt'] = null;
                goto after_waitTimerStartedAt;
            }

            $properties['waitTimerStartedAt'] = $value;

            after_waitTimerStartedAt:

            $value = $payload['current_user_can_approve'] ?? null;

            if ($value === null) {
                $missingFields[] = 'current_user_can_approve';
                goto after_currentUserCanApprove;
            }

            $properties['currentUserCanApprove'] = $value;

            after_currentUserCanApprove:

            $value = $payload['reviewers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reviewers';
                goto after_reviewers;
            }

            static $reviewersCaster1;

            if ($reviewersCaster1 === null) {
                $reviewersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\PendingDeployment\\Reviewers',
));
            }

            $value = $reviewersCaster1->cast($value, $this);

            $properties['reviewers'] = $value;

            after_reviewers:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PendingDeployment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PendingDeployment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PendingDeployment(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PendingDeployment', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Environment(array $payload): \ApiClients\Client\Github\Schema\PendingDeployment\Environment
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PendingDeployment\Environment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PendingDeployment\Environment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PendingDeployment\Environment(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PendingDeployment\Environment', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Reviewers(array $payload): \ApiClients\Client\Github\Schema\PendingDeployment\Reviewers
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['reviewer'] ?? null;

            if ($value === null) {
                $properties['reviewer'] = null;
                goto after_reviewer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reviewer';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reviewer'] = $value;

            after_reviewer:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PendingDeployment\Reviewers', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PendingDeployment\Reviewers::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PendingDeployment\Reviewers(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PendingDeployment\Reviewers', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\Github\Schema\SimpleUser
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SimpleUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Deployment(array $payload): \ApiClients\Client\Github\Schema\Deployment
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

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

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['task'] ?? null;

            if ($value === null) {
                $missingFields[] = 'task';
                goto after_task;
            }

            $properties['task'] = $value;

            after_task:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

            $value = $payload['original_environment'] ?? null;

            if ($value === null) {
                $properties['originalEnvironment'] = null;
                goto after_originalEnvironment;
            }

            $properties['originalEnvironment'] = $value;

            after_originalEnvironment:

            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $missingFields[] = 'environment';
                goto after_environment;
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['creator'] ?? null;

            if ($value === null) {
                $properties['creator'] = null;
                goto after_creator;
            }

            $properties['creator'] = $value;

            after_creator:

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

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statusesUrl;
            }

            $properties['statusesUrl'] = $value;

            after_statusesUrl:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['transient_environment'] ?? null;

            if ($value === null) {
                $properties['transientEnvironment'] = null;
                goto after_transientEnvironment;
            }

            $properties['transientEnvironment'] = $value;

            after_transientEnvironment:

            $value = $payload['production_environment'] ?? null;

            if ($value === null) {
                $properties['productionEnvironment'] = null;
                goto after_productionEnvironment;
            }

            $properties['productionEnvironment'] = $value;

            after_productionEnvironment:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performedViaGithubApp'] = null;
                goto after_performedViaGithubApp;
            }

            $properties['performedViaGithubApp'] = $value;

            after_performedViaGithubApp:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Deployment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Deployment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Deployment(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Deployment', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\PendingDeployment' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment($object),
            'ApiClients\Client\Github\Schema\PendingDeployment\Environment' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Environment($object),
            'ApiClients\Client\Github\Schema\PendingDeployment\Reviewers' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Reviewers($object),
            'ApiClients\Client\Github\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\Github\Schema\Deployment' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Deployment($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PendingDeployment);
        $result = [];

        $environment = $object->environment;
        $environment = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Environment($environment);
        after_environment:        $result['environment'] = $environment;

        
        $waitTimer = $object->waitTimer;
        after_waitTimer:        $result['wait_timer'] = $waitTimer;

        
        $waitTimerStartedAt = $object->waitTimerStartedAt;

        if ($waitTimerStartedAt === null) {
            goto after_waitTimerStartedAt;
        }
        after_waitTimerStartedAt:        $result['wait_timer_started_at'] = $waitTimerStartedAt;

        
        $currentUserCanApprove = $object->currentUserCanApprove;
        after_currentUserCanApprove:        $result['current_user_can_approve'] = $currentUserCanApprove;

        
        $reviewers = $object->reviewers;
        static $reviewersSerializer0;

        if ($reviewersSerializer0 === null) {
            $reviewersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\PendingDeployment\\Reviewers',
));
        }
        
        $reviewers = $reviewersSerializer0->serialize($reviewers, $this);
        after_reviewers:        $result['reviewers'] = $reviewers;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Environment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PendingDeployment\Environment);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PendingDeployment⚡️Reviewers(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PendingDeployment\Reviewers);
        $result = [];

        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $reviewer = $object->reviewer;

        if ($reviewer === null) {
            goto after_reviewer;
        }
        $reviewer = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($reviewer);
        after_reviewer:        $result['reviewer'] = $reviewer;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SimpleUser);
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Deployment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Deployment);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $task = $object->task;
        after_task:        $result['task'] = $task;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;

        
        $originalEnvironment = $object->originalEnvironment;

        if ($originalEnvironment === null) {
            goto after_originalEnvironment;
        }
        after_originalEnvironment:        $result['original_environment'] = $originalEnvironment;

        
        $environment = $object->environment;
        after_environment:        $result['environment'] = $environment;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        after_creator:        $result['creator'] = $creator;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $statusesUrl = $object->statusesUrl;
        after_statusesUrl:        $result['statuses_url'] = $statusesUrl;

        
        $repositoryUrl = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        
        $transientEnvironment = $object->transientEnvironment;

        if ($transientEnvironment === null) {
            goto after_transientEnvironment;
        }
        after_transientEnvironment:        $result['transient_environment'] = $transientEnvironment;

        
        $productionEnvironment = $object->productionEnvironment;

        if ($productionEnvironment === null) {
            goto after_productionEnvironment;
        }
        after_productionEnvironment:        $result['production_environment'] = $productionEnvironment;

        
        $performedViaGithubApp = $object->performedViaGithubApp;

        if ($performedViaGithubApp === null) {
            goto after_performedViaGithubApp;
        }
        after_performedViaGithubApp:        $result['performed_via_github_app'] = $performedViaGithubApp;


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
