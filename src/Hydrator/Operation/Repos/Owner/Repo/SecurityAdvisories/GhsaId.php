<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class GhsaId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\RepositoryAdvisory' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Submission($payload),
                'ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryAdvisory
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ghsa_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ghsa_id';
                goto after_ghsaId;
            }

            $properties['ghsaId'] = $value;

            after_ghsaId:

            $value = $payload['cve_id'] ?? null;

            if ($value === null) {
                $properties['cveId'] = null;
                goto after_cveId;
            }

            $properties['cveId'] = $value;

            after_cveId:

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

            $value = $payload['summary'] ?? null;

            if ($value === null) {
                $missingFields[] = 'summary';
                goto after_summary;
            }

            $properties['summary'] = $value;

            after_summary:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $properties['severity'] = null;
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['publisher'] ?? null;

            if ($value === null) {
                $missingFields[] = 'publisher';
                goto after_publisher;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'publisher';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['publisher'] = $value;

            after_publisher:

            $value = $payload['identifiers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'identifiers';
                goto after_identifiers;
            }

            $properties['identifiers'] = $value;

            after_identifiers:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['published_at'] ?? null;

            if ($value === null) {
                $properties['publishedAt'] = null;
                goto after_publishedAt;
            }

            $properties['publishedAt'] = $value;

            after_publishedAt:

            $value = $payload['closed_at'] ?? null;

            if ($value === null) {
                $properties['closedAt'] = null;
                goto after_closedAt;
            }

            $properties['closedAt'] = $value;

            after_closedAt:

            $value = $payload['withdrawn_at'] ?? null;

            if ($value === null) {
                $properties['withdrawnAt'] = null;
                goto after_withdrawnAt;
            }

            $properties['withdrawnAt'] = $value;

            after_withdrawnAt:

            $value = $payload['submission'] ?? null;

            if ($value === null) {
                $properties['submission'] = null;
                goto after_submission;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'submission';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Submission($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['submission'] = $value;

            after_submission:

            $value = $payload['vulnerabilities'] ?? null;

            if ($value === null) {
                $properties['vulnerabilities'] = null;
                goto after_vulnerabilities;
            }

            $properties['vulnerabilities'] = $value;

            after_vulnerabilities:

            $value = $payload['cvss'] ?? null;

            if ($value === null) {
                $properties['cvss'] = null;
                goto after_cvss;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'cvss';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['cvss'] = $value;

            after_cvss:

            $value = $payload['cwes'] ?? null;

            if ($value === null) {
                $properties['cwes'] = null;
                goto after_cwes;
            }

            $properties['cwes'] = $value;

            after_cwes:

            $value = $payload['cwe_ids'] ?? null;

            if ($value === null) {
                $properties['cweIds'] = null;
                goto after_cweIds;
            }

            $properties['cweIds'] = $value;

            after_cweIds:

            $value = $payload['credits'] ?? null;

            if ($value === null) {
                $properties['credits'] = null;
                goto after_credits;
            }

            $properties['credits'] = $value;

            after_credits:

            $value = $payload['credits_detailed'] ?? null;

            if ($value === null) {
                $properties['creditsDetailed'] = null;
                goto after_creditsDetailed;
            }

            $properties['creditsDetailed'] = $value;

            after_creditsDetailed:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryAdvisory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryAdvisory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryAdvisory(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryAdvisory', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Submission(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['accepted'] ?? null;

            if ($value === null) {
                $missingFields[] = 'accepted';
                goto after_accepted;
            }

            $properties['accepted'] = $value;

            after_accepted:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Cvss(array $payload): \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['vector_string'] ?? null;

            if ($value === null) {
                $properties['vectorString'] = null;
                goto after_vectorString;
            }

            $properties['vectorString'] = $value;

            after_vectorString:

            $value = $payload['score'] ?? null;

            if ($value === null) {
                $properties['score'] = null;
                goto after_score;
            }

            $properties['score'] = $value;

            after_score:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
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
            'ApiClients\Client\GitHub\Schema\RepositoryAdvisory' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Submission($object),
            'ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryAdvisory);
        $result = [];

        $ghsaId = $object->ghsaId;
        after_ghsaId:        $result['ghsa_id'] = $ghsaId;

        
        $cveId = $object->cveId;

        if ($cveId === null) {
            goto after_cveId;
        }
        after_cveId:        $result['cve_id'] = $cveId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $summary = $object->summary;
        after_summary:        $result['summary'] = $summary;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $severity = $object->severity;

        if ($severity === null) {
            goto after_severity;
        }
        after_severity:        $result['severity'] = $severity;

        
        $author = $object->author;
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($author);
        after_author:        $result['author'] = $author;

        
        $publisher = $object->publisher;
        $publisher = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($publisher);
        after_publisher:        $result['publisher'] = $publisher;

        
        $identifiers = $object->identifiers;
        static $identifiersSerializer0;

        if ($identifiersSerializer0 === null) {
            $identifiersSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $identifiers = $identifiersSerializer0->serialize($identifiers, $this);
        after_identifiers:        $result['identifiers'] = $identifiers;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $publishedAt = $object->publishedAt;

        if ($publishedAt === null) {
            goto after_publishedAt;
        }
        after_publishedAt:        $result['published_at'] = $publishedAt;

        
        $closedAt = $object->closedAt;

        if ($closedAt === null) {
            goto after_closedAt;
        }
        after_closedAt:        $result['closed_at'] = $closedAt;

        
        $withdrawnAt = $object->withdrawnAt;

        if ($withdrawnAt === null) {
            goto after_withdrawnAt;
        }
        after_withdrawnAt:        $result['withdrawn_at'] = $withdrawnAt;

        
        $submission = $object->submission;

        if ($submission === null) {
            goto after_submission;
        }
        $submission = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Submission($submission);
        after_submission:        $result['submission'] = $submission;

        
        $vulnerabilities = $object->vulnerabilities;

        if ($vulnerabilities === null) {
            goto after_vulnerabilities;
        }
        static $vulnerabilitiesSerializer0;

        if ($vulnerabilitiesSerializer0 === null) {
            $vulnerabilitiesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $vulnerabilities = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        
        $cvss = $object->cvss;

        if ($cvss === null) {
            goto after_cvss;
        }
        $cvss = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Cvss($cvss);
        after_cvss:        $result['cvss'] = $cvss;

        
        $cwes = $object->cwes;

        if ($cwes === null) {
            goto after_cwes;
        }
        static $cwesSerializer0;

        if ($cwesSerializer0 === null) {
            $cwesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $cwes = $cwesSerializer0->serialize($cwes, $this);
        after_cwes:        $result['cwes'] = $cwes;

        
        $cweIds = $object->cweIds;

        if ($cweIds === null) {
            goto after_cweIds;
        }
        static $cweIdsSerializer0;

        if ($cweIdsSerializer0 === null) {
            $cweIdsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $cweIds = $cweIdsSerializer0->serialize($cweIds, $this);
        after_cweIds:        $result['cwe_ids'] = $cweIds;

        
        $credits = $object->credits;

        if ($credits === null) {
            goto after_credits;
        }
        static $creditsSerializer0;

        if ($creditsSerializer0 === null) {
            $creditsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $credits = $creditsSerializer0->serialize($credits, $this);
        after_credits:        $result['credits'] = $credits;

        
        $creditsDetailed = $object->creditsDetailed;

        if ($creditsDetailed === null) {
            goto after_creditsDetailed;
        }
        static $creditsDetailedSerializer0;

        if ($creditsDetailedSerializer0 === null) {
            $creditsDetailedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $creditsDetailed = $creditsDetailedSerializer0->serialize($creditsDetailed, $this);
        after_creditsDetailed:        $result['credits_detailed'] = $creditsDetailed;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Submission(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission);
        $result = [];

        $accepted = $object->accepted;
        after_accepted:        $result['accepted'] = $accepted;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RepositoryAdvisory⚡️Cvss(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Cvss);
        $result = [];

        $vectorString = $object->vectorString;

        if ($vectorString === null) {
            goto after_vectorString;
        }
        after_vectorString:        $result['vector_string'] = $vectorString;

        
        $score = $object->score;

        if ($score === null) {
            goto after_score;
        }
        after_score:        $result['score'] = $score;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
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
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


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
