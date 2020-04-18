<?php

namespace Crudly\Querly;

use Crudly\Querly\Buildly;

class Querly
{
    /**
     * The base query builder instance.
     *
     */
    public $query;

    /**
     * The database connection instance.
     *
     */
    public $connection;

    /**
     * The methods that should be returned from query builder.
     *
     * @var array
     */
    protected $abilities = [
        'insert', 'insertOrIgnore', 'insertGetId', 'insertUsing', 'getBindings', 'toSql', 'dump', 'dd',
        'exists', 'doesntExist', 'count', 'min', 'max', 'avg', 'average', 'sum', 'getConnection', 'raw',
    ];

    /**
     * Create a new Eloquent query builder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->query = new Buildly();
    }


}