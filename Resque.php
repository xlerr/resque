<?php
namespace xlerr\resque;

use Yii;

class Resque extends \Resque
{
	public $server = '127.0.0.1:6379';

	public function start()
	{
		
	}
}