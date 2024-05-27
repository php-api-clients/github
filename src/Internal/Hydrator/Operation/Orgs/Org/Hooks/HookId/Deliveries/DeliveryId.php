<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\HookDelivery\Request;
use ApiClients\Client\GitHub\Schema\HookDelivery\Request\Headers;
use ApiClients\Client\GitHub\Schema\HookDelivery\Request\Payload;
use ApiClients\Client\GitHub\Schema\HookDelivery\Response;
use ApiClients\Client\GitHub\Schema\ScimError;
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

class DeliveryId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\HookDelivery' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery($payload),
                'ApiClients\Client\GitHub\Schema\HookDelivery\Request' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request($payload),
                'ApiClients\Client\GitHub\Schema\HookDelivery\Response' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\HookDelivery\Request\Headers' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Headers($payload),
                'ApiClients\Client\GitHub\Schema\HookDelivery\Request\Payload' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Payload($payload),
                'ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response⚡️Headers($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery(array $payload): HookDelivery
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['guid'] ?? null;

            if ($value === null) {
                $missingFields[] = 'guid';
                goto after_guid;
            }

            $properties['guid'] = $value;

            after_guid:

            $value = $payload['delivered_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'delivered_at';
                goto after_deliveredAt;
            }

            $properties['deliveredAt'] = $value;

            after_deliveredAt:

            $value = $payload['redelivery'] ?? null;

            if ($value === null) {
                $missingFields[] = 'redelivery';
                goto after_redelivery;
            }

            $properties['redelivery'] = $value;

            after_redelivery:

            $value = $payload['duration'] ?? null;

            if ($value === null) {
                $missingFields[] = 'duration';
                goto after_duration;
            }

            $properties['duration'] = $value;

            after_duration:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['status_code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status_code';
                goto after_statusCode;
            }

            $properties['statusCode'] = $value;

            after_statusCode:

            $value = $payload['event'] ?? null;

            if ($value === null) {
                $missingFields[] = 'event';
                goto after_event;
            }

            $properties['event'] = $value;

            after_event:

            $value = $payload['action'] ?? null;

            if ($value === null) {
                $properties['action'] = null;
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['installation_id'] ?? null;

            if ($value === null) {
                $properties['installationId'] = null;
                goto after_installationId;
            }

            $properties['installationId'] = $value;

            after_installationId:

            $value = $payload['repository_id'] ?? null;

            if ($value === null) {
                $properties['repositoryId'] = null;
                goto after_repositoryId;
            }

            $properties['repositoryId'] = $value;

            after_repositoryId:

            $value = $payload['throttled_at'] ?? null;

            if ($value === null) {
                $properties['throttledAt'] = null;
                goto after_throttledAt;
            }

            $properties['throttledAt'] = $value;

            after_throttledAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'request';
                goto after_request;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'request';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['request'] = $value;

            after_request:

            $value = $payload['response'] ?? null;

            if ($value === null) {
                $missingFields[] = 'response';
                goto after_response;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'response';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['response'] = $value;

            after_response:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(HookDelivery::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new HookDelivery(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request(array $payload): Request
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['headers'] ?? null;

            if ($value === null) {
                $properties['headers'] = null;
                goto after_headers;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'headers';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Headers($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['headers'] = $value;

            after_headers:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'payload';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Payload($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['payload'] = $value;

            after_payload:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Request', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Request::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Request(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Request', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response(array $payload): Response
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['headers'] ?? null;

            if ($value === null) {
                $properties['headers'] = null;
                goto after_headers;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'headers';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response⚡️Headers($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['headers'] = $value;

            after_headers:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Response', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Response::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Response(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Response', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(array $payload): ScimError
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

            $value = $payload['detail'] ?? null;

            if ($value === null) {
                $properties['detail'] = null;
                goto after_detail;
            }

            $properties['detail'] = $value;

            after_detail:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['scim_type'] ?? null;

            if ($value === null) {
                $properties['scimType'] = null;
                goto after_scimType;
            }

            $properties['scimType'] = $value;

            after_scimType:

            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $properties['schemas'] = null;
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ScimError', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Headers(array $payload): Headers
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Request\Headers', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Headers::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Headers(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Request\Headers', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Payload(array $payload): Payload
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Request\Payload', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Payload::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Payload(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Request\Payload', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response⚡️Headers(array $payload): \ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookDelivery\Response\Headers', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\HookDelivery' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery($object),
                'ApiClients\Client\GitHub\Schema\HookDelivery\Request' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request($object),
                'ApiClients\Client\GitHub\Schema\HookDelivery\Response' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery(mixed $object): mixed
    {
        assert($object instanceof HookDelivery);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $guid                              = $object->guid;
        after_guid:        $result['guid'] = $guid;

        $deliveredAt                                      = $object->deliveredAt;
        after_deliveredAt:        $result['delivered_at'] = $deliveredAt;

        $redelivery                                    = $object->redelivery;
        after_redelivery:        $result['redelivery'] = $redelivery;

        $duration                                  = $object->duration;
        after_duration:        $result['duration'] = $duration;

        $status                                = $object->status;
        after_status:        $result['status'] = $status;

        $statusCode                                     = $object->statusCode;
        after_statusCode:        $result['status_code'] = $statusCode;

        $event                               = $object->event;
        after_event:        $result['event'] = $event;

        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }

        after_action:        $result['action'] = $action;

        $installationId = $object->installationId;

        if ($installationId === null) {
            goto after_installationId;
        }

        after_installationId:        $result['installation_id'] = $installationId;

        $repositoryId = $object->repositoryId;

        if ($repositoryId === null) {
            goto after_repositoryId;
        }

        after_repositoryId:        $result['repository_id'] = $repositoryId;

        $throttledAt = $object->throttledAt;

        if ($throttledAt === null) {
            goto after_throttledAt;
        }

        after_throttledAt:        $result['throttled_at'] = $throttledAt;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $request                                 = $object->request;
        $request                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request($request);
        after_request:        $result['request'] = $request;

        $response                                  = $object->response;
        $response                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response($response);
        after_response:        $result['response'] = $response;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request(mixed $object): mixed
    {
        assert($object instanceof Request);
        $result = [];

        $headers = $object->headers;

        if ($headers === null) {
            goto after_headers;
        }

        $headers                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Headers($headers);
        after_headers:        $result['headers'] = $headers;

        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }

        $payload                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Request⚡️Payload($payload);
        after_payload:        $result['payload'] = $payload;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response(mixed $object): mixed
    {
        assert($object instanceof Response);
        $result = [];

        $headers = $object->headers;

        if ($headers === null) {
            goto after_headers;
        }

        $headers                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookDelivery⚡️Response⚡️Headers($headers);
        after_headers:        $result['headers'] = $headers;

        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }

        after_payload:        $result['payload'] = $payload;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        assert($object instanceof ScimError);
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

        $detail = $object->detail;

        if ($detail === null) {
            goto after_detail;
        }

        after_detail:        $result['detail'] = $detail;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $scimType = $object->scimType;

        if ($scimType === null) {
            goto after_scimType;
        }

        after_scimType:        $result['scim_type'] = $scimType;

        $schemas = $object->schemas;

        if ($schemas === null) {
            goto after_schemas;
        }

        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new SerializeArrayItems(...[]);
        }

        $schemas                                 = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

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
