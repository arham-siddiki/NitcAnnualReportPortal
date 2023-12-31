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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1Part extends \Google\Model
{
  /**
   * @var GoogleCloudAiplatformV1FileData
   */
  public $fileData;
  protected $fileDataType = GoogleCloudAiplatformV1FileData::class;
  protected $fileDataDataType = '';
  /**
   * @var GoogleCloudAiplatformV1Blob
   */
  public $inlineData;
  protected $inlineDataType = GoogleCloudAiplatformV1Blob::class;
  protected $inlineDataDataType = '';
  /**
   * @var string
   */
  public $text;
  /**
   * @var GoogleCloudAiplatformV1VideoMetadata
   */
  public $videoMetadata;
  protected $videoMetadataType = GoogleCloudAiplatformV1VideoMetadata::class;
  protected $videoMetadataDataType = '';

  /**
   * @param GoogleCloudAiplatformV1FileData
   */
  public function setFileData(GoogleCloudAiplatformV1FileData $fileData)
  {
    $this->fileData = $fileData;
  }
  /**
   * @return GoogleCloudAiplatformV1FileData
   */
  public function getFileData()
  {
    return $this->fileData;
  }
  /**
   * @param GoogleCloudAiplatformV1Blob
   */
  public function setInlineData(GoogleCloudAiplatformV1Blob $inlineData)
  {
    $this->inlineData = $inlineData;
  }
  /**
   * @return GoogleCloudAiplatformV1Blob
   */
  public function getInlineData()
  {
    return $this->inlineData;
  }
  /**
   * @param string
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param GoogleCloudAiplatformV1VideoMetadata
   */
  public function setVideoMetadata(GoogleCloudAiplatformV1VideoMetadata $videoMetadata)
  {
    $this->videoMetadata = $videoMetadata;
  }
  /**
   * @return GoogleCloudAiplatformV1VideoMetadata
   */
  public function getVideoMetadata()
  {
    return $this->videoMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Part::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Part');
