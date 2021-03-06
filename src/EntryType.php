<?php

namespace Laravel\Telescope;

class EntryType
{
    public const CACHE = 'cache';
    public const COMMAND = 'command';
    public const DUMP = 'dump';
    public const EVENT = 'event';
    public const EXCEPTION = 'exception';
    public const JOB = 'job';
    public const LOG = 'log';
    public const MODEL = 'model';
    public const MAIL = 'mail';
    public const NOTIFICATION = 'notification';
    public const QUERY = 'query';
    public const REDIS = 'redis';
    public const REQUEST = 'request';
    public const SCHEDULED_TASK = 'schedule';
}
