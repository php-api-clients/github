<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbCommitShaRcb implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\GitCommit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit($payload),
                'ApiClients\Client\GitHub\Schema\GitCommit\Author' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author($payload),
                'ApiClients\Client\GitHub\Schema\GitCommit\Tree' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Tree($payload),
                'ApiClients\Client\GitHub\Schema\GitCommit\Parents' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Parents($payload),
                'ApiClients\Client\GitHub\Schema\GitCommit\Verification' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Verification($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit(array $payload): \ApiClients\Client\GitHub\Schema\GitCommit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['tree'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree';
                goto after_tree;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tree';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Tree($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tree'] = $value;

            after_tree:

            $value = $payload['parents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'parents';
                goto after_parents;
            }

            static $parentsCaster1;

            if ($parentsCaster1 === null) {
                $parentsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Parents',
));
            }

            $value = $parentsCaster1->cast($value, $this);

            $properties['parents'] = $value;

            after_parents:

            $value = $payload['verification'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verification';
                goto after_verification;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'verification';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Verification($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['verification'] = $value;

            after_verification:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GitCommit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GitCommit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author(array $payload): \ApiClients\Client\GitHub\Schema\GitCommit\Author
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $missingFields[] = 'date';
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $missingFields[] = 'email';
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Author', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GitCommit\Author::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GitCommit\Author(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Author', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Tree(array $payload): \ApiClients\Client\GitHub\Schema\GitCommit\Tree
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Tree', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GitCommit\Tree::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GitCommit\Tree(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Tree', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Parents(array $payload): \ApiClients\Client\GitHub\Schema\GitCommit\Parents
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Parents', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GitCommit\Parents::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GitCommit\Parents(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Parents', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Verification(array $payload): \ApiClients\Client\GitHub\Schema\GitCommit\Verification
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verified';
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reason';
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['signature'] ?? null;

            if ($value === null) {
                $properties['signature'] = null;
                goto after_signature;
            }

            $properties['signature'] = $value;

            after_signature:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Verification', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\GitCommit\Verification::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\GitCommit\Verification(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitCommit\Verification', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\GitCommit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit($object),
            'ApiClients\Client\GitHub\Schema\GitCommit\Author' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author($object),
            'ApiClients\Client\GitHub\Schema\GitCommit\Tree' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Tree($object),
            'ApiClients\Client\GitHub\Schema\GitCommit\Parents' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Parents($object),
            'ApiClients\Client\GitHub\Schema\GitCommit\Verification' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Verification($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GitCommit);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $author = $object->author;
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author($committer);
        after_committer:        $result['committer'] = $committer;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $tree = $object->tree;
        $tree = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Tree($tree);
        after_tree:        $result['tree'] = $tree;

        
        $parents = $object->parents;
        static $parentsSerializer0;

        if ($parentsSerializer0 === null) {
            $parentsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Parents',
));
        }
        
        $parents = $parentsSerializer0->serialize($parents, $this);
        after_parents:        $result['parents'] = $parents;

        
        $verification = $object->verification;
        $verification = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Author(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GitCommit\Author);
        $result = [];

        $date = $object->date;
        after_date:        $result['date'] = $date;

        
        $email = $object->email;
        after_email:        $result['email'] = $email;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Tree(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GitCommit\Tree);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Parents(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GitCommit\Parents);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitCommit⚡️Verification(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\GitCommit\Verification);
        $result = [];

        $verified = $object->verified;
        after_verified:        $result['verified'] = $verified;

        
        $reason = $object->reason;
        after_reason:        $result['reason'] = $reason;

        
        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }
        after_signature:        $result['signature'] = $signature;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;


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
