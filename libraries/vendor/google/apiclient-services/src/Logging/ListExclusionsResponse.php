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
 */

namespace Google\Service\Logging;

class ListExclusionsResponse extends \Google\Collection
{
  protected $collection_key = 'exclusions';
  /**
   * @var LogExclusion[]
   */
  public $exclusions;
  protected $exclusionsType = LogExclusion::class;
  protected $exclusionsDataType = 'array';
  /**
   * @var string
   */
  public $nextPageToken;

  /**
   * @param LogExclusion[]
   */
  public function setExclusions($exclusions)
  {
    $this->exclusions = $exclusions;
  }
  /**
   * @return LogExclusion[]
   */
  public function getExclusions()
  {
    return $this->exclusions;
  }
  /**
   * @param string
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListExclusionsResponse::class, 'Google_Service_Logging_ListExclusionsResponse');
