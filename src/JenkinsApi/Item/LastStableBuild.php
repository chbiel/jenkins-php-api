<?php
namespace JenkinsApi\Item;

use JenkinsApi\AbstractItem;
use JenkinsApi\Jenkins;

class LastStableBuild extends LastBuild
{
    /**
     * @return string
     */
    protected function getUrl()
    {
        return sprintf('job/%s/lastStableBuild/api/json', rawurlencode($this->_jobName));
    }
}
