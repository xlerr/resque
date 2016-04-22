<?php
namespace xlerr\resque;

use yii\base\Object;
use yii\base\InvalidCallException;

abstract class Job extends Object implements JobInterface
{
	public $job;
	public $args;
	public $queue;
}