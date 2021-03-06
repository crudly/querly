<?php

namespace Crudly\Querly;

use Crudly\Querly\Buildly;
use Crudly\Connectly\Connectly;
use Illuminate\Database\Eloquent\Model;

class Querly extends Model
{
    protected $table = 'crudly_querlies';


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

    /**
    * Get the connection of the query.
    */
    public function connectly()
    {
        return $this->belongsTo(Connectly::class, with(new Connectly)->getTable());
    }
}
