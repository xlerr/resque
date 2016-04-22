<?php
namespace xlerr\resque;

interface JobInterface
{
	public function perform();
}