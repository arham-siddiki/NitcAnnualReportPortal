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

namespace Google\Service\YouTube;

class Subscription extends \Google\Model
{
  /**
   * @var SubscriptionContentDetails
   */
  public $contentDetails;
  protected $contentDetailsType = SubscriptionContentDetails::class;
  protected $contentDetailsDataType = '';
  /**
   * @var string
   */
  public $etag;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var SubscriptionSnippet
   */
  public $snippet;
  protected $snippetType = SubscriptionSnippet::class;
  protected $snippetDataType = '';
  /**
   * @var SubscriptionSubscriberSnippet
   */
  public $subscriberSnippet;
  protected $subscriberSnippetType = SubscriptionSubscriberSnippet::class;
  protected $subscriberSnippetDataType = '';

  /**
   * @param SubscriptionContentDetails
   */
  public function setContentDetails(SubscriptionContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }
  /**
   * @return SubscriptionContentDetails
   */
  public function getContentDetails()
  {
    return $this->contentDetails;
  }
  /**
   * @param string
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param SubscriptionSnippet
   */
  public function setSnippet(SubscriptionSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /**
   * @return SubscriptionSnippet
   */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /**
   * @param SubscriptionSubscriberSnippet
   */
  public function setSubscriberSnippet(SubscriptionSubscriberSnippet $subscriberSnippet)
  {
    $this->subscriberSnippet = $subscriberSnippet;
  }
  /**
   * @return SubscriptionSubscriberSnippet
   */
  public function getSubscriberSnippet()
  {
    return $this->subscriberSnippet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Subscription::class, 'Google_Service_YouTube_Subscription');
