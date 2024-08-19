<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\GitTag;
use ApiClients\Client\GitHub\Schema\GitTag\Object_;
use ApiClients\Client\GitHub\Schema\GitTag\Tagger;
use ApiClients\Client\GitHub\Schema\Verification;
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

class TagSha implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\GitTag' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag($payload),
                'ApiClients\Client\GitHub\Schema\GitTag\Tagger' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Tagger($payload),
                'ApiClients\Client\GitHub\Schema\GitTag\Object_' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Object_($payload),
                'ApiClients\Client\GitHub\Schema\Verification' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag(array $payload): GitTag
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['tag'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tag';
                goto after_tag;
            }

            $properties['tag'] = $value;

            after_tag:

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

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['tagger'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tagger';
                goto after_tagger;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tagger';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Tagger($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tagger'] = $value;

            after_tagger:

            $value = $payload['object'] ?? null;

            if ($value === null) {
                $missingFields[] = 'object';
                goto after_object;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'object';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Object_($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['object'] = $value;

            after_object:

            $value = $payload['verification'] ?? null;

            if ($value === null) {
                $properties['verification'] = null;
                goto after_verification;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'verification';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['verification'] = $value;

            after_verification:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitTag', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GitTag::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GitTag(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitTag', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Tagger(array $payload): Tagger
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitTag\Tagger', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Tagger::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Tagger(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitTag\Tagger', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Object_(array $payload): Object_
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitTag\Object_', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Object_::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Object_(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitTag\Object_', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(array $payload): Verification
    {
        $properties    = [];
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

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

            $value = $payload['signature'] ?? null;

            if ($value === null) {
                $properties['signature'] = null;
                goto after_signature;
            }

            $properties['signature'] = $value;

            after_signature:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Verification::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Verification(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\GitTag' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag($object),
                'ApiClients\Client\GitHub\Schema\GitTag\Tagger' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Tagger($object),
                'ApiClients\Client\GitHub\Schema\GitTag\Object_' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Object_($object),
                'ApiClients\Client\GitHub\Schema\Verification' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                default => throw new LogicException("No serialization defined for $className"),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag(mixed $object): mixed
    {
        assert($object instanceof GitTag);
        $result = [];

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $tag                             = $object->tag;
        after_tag:        $result['tag'] = $tag;

        $sha                             = $object->sha;
        after_sha:        $result['sha'] = $sha;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $tagger                                = $object->tagger;
        $tagger                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Tagger($tagger);
        after_tagger:        $result['tagger'] = $tagger;

        $object                                = $object->object;
        $object                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Object_($object);
        after_object:        $result['object'] = $object;

        $verification = $object->verification;

        if ($verification === null) {
            goto after_verification;
        }

        $verification                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Tagger(mixed $object): mixed
    {
        assert($object instanceof Tagger);
        $result = [];

        $date                              = $object->date;
        after_date:        $result['date'] = $date;

        $email                               = $object->email;
        after_email:        $result['email'] = $email;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitTag⚡️Object_(mixed $object): mixed
    {
        assert($object instanceof Object_);
        $result = [];

        $sha                             = $object->sha;
        after_sha:        $result['sha'] = $sha;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(mixed $object): mixed
    {
        assert($object instanceof Verification);
        $result = [];

        $verified                                  = $object->verified;
        after_verified:        $result['verified'] = $verified;

        $reason                                = $object->reason;
        after_reason:        $result['reason'] = $reason;

        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }

        after_payload:        $result['payload'] = $payload;

        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }

        after_signature:        $result['signature'] = $signature;

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
