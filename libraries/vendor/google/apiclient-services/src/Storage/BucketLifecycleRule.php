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

namespace Google\Service\Storage;

class BucketLifecycleRule extends \Google\Model
{
  /**
   * @var BucketLifecycleRuleAction
   */
  public $action;
  protected $actionType = BucketLifecycleRuleAction::class;
  protected $actionDataType = '';
  /**
   * @var BucketLifecycleRuleCondition
   */
  public $condition;
  protected $conditionType = BucketLifecycleRuleCondition::class;
  protected $conditionDataType = '';

  /**
   * @param BucketLifecycleRuleAction
   */
  public function setAction(BucketLifecycleRuleAction $action)
  {
    $this->action = $action;
  }
  /**
   * @return BucketLifecycleRuleAction
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * @param BucketLifecycleRuleCondition
   */
  public function setCondition(BucketLifecycleRuleCondition $condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return BucketLifecycleRuleCondition
   */
  public function getCondition()
  {
    return $this->condition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BucketLifecycleRule::class, 'Google_Service_Storage_BucketLifecycleRule');
