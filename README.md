Resque
=======================================

### 向队列添加工作 ###
	use xlerr\resque\Resque;
	use xlerr\resque\Job;
	 
	Rresque:setBackend('127.0.0.1:6379');
	
	$args = array(
		'time' => time(),
		'array' => array(
			'test' => 'test',
		),
	);
	
	$jobId = Resque::enqueue('default', Job::className(), $args, true);
	return "Queued job ".$jobId."\n\n";


### 怎样开始处理列队 ###

###### 在console中配置启动控制器 ######
	'controllerMap' => [
		'resque' => [
			'class' => 'xlerr\resque\controllers\ResqueController',
		],
	],

###### 执行控制台命令 ######
	./yii resque/start