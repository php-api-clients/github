<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Projects\Columns\CbColumnIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Cards implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ProjectCard' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectCard($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503($payload),
                'ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectCard(array $payload): \ApiClients\Client\GitHub\Schema\ProjectCard
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

            $value = $payload['note'] ?? null;

            if ($value === null) {
                $properties['note'] = null;
                goto after_note;
            }

            $properties['note'] = $value;

            after_note:

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

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $properties['archived'] = null;
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

            $value = $payload['column_name'] ?? null;

            if ($value === null) {
                $properties['columnName'] = null;
                goto after_columnName;
            }

            $properties['columnName'] = $value;

            after_columnName:

            $value = $payload['project_id'] ?? null;

            if ($value === null) {
                $properties['projectId'] = null;
                goto after_projectId;
            }

            $properties['projectId'] = $value;

            after_projectId:

            $value = $payload['column_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'column_url';
                goto after_columnUrl;
            }

            $properties['columnUrl'] = $value;

            after_columnUrl:

            $value = $payload['content_url'] ?? null;

            if ($value === null) {
                $properties['contentUrl'] = null;
                goto after_contentUrl;
            }

            $properties['contentUrl'] = $value;

            after_contentUrl:

            $value = $payload['project_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'project_url';
                goto after_projectUrl;
            }

            $properties['projectUrl'] = $value;

            after_projectUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectCard', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ProjectCard::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ProjectCard(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ProjectCard', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

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

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503⚡️Errors(array $payload): \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\ProjectCard' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectCard($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503($object),
            'ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ProjectCard(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ProjectCard);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $note = $object->note;

        if ($note === null) {
            goto after_note;
        }
        after_note:        $result['note'] = $note;

        
        $creator = $object->creator;

        if ($creator === null) {
            goto after_creator;
        }
        after_creator:        $result['creator'] = $creator;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $archived = $object->archived;

        if ($archived === null) {
            goto after_archived;
        }
        after_archived:        $result['archived'] = $archived;

        
        $columnName = $object->columnName;

        if ($columnName === null) {
            goto after_columnName;
        }
        after_columnName:        $result['column_name'] = $columnName;

        
        $projectId = $object->projectId;

        if ($projectId === null) {
            goto after_projectId;
        }
        after_projectId:        $result['project_id'] = $projectId;

        
        $columnUrl = $object->columnUrl;
        after_columnUrl:        $result['column_url'] = $columnUrl;

        
        $contentUrl = $object->contentUrl;

        if ($contentUrl === null) {
            goto after_contentUrl;
        }
        after_contentUrl:        $result['content_url'] = $contentUrl;

        
        $projectUrl = $object->projectUrl;
        after_projectUrl:        $result['project_url'] = $projectUrl;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
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

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operation⚡️Projects⚡️MoveCard⚡️Response⚡️Applicationjson⚡️H503⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;


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
