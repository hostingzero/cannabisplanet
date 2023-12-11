<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *
 * Modified by __root__ on 18-June-2022 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Deconf\SEIWP\Google\Service\Analytics;

class UnsampledReportCloudStorageDownloadDetails extends \Deconf\SEIWP\Google\Model
{
  /**
   * @var string
   */
  public $bucketId;
  /**
   * @var string
   */
  public $objectId;

  /**
   * @param string
   */
  public function setBucketId($bucketId)
  {
    $this->bucketId = $bucketId;
  }
  /**
   * @return string
   */
  public function getBucketId()
  {
    return $this->bucketId;
  }
  /**
   * @param string
   */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /**
   * @return string
   */
  public function getObjectId()
  {
    return $this->objectId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UnsampledReportCloudStorageDownloadDetails::class, 'Google_Service_Analytics_UnsampledReportCloudStorageDownloadDetails');
