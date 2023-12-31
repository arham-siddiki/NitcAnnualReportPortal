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

namespace Google\Service\Monitoring;

class TimeSeriesData extends \Google\Collection
{
  protected $collection_key = 'pointData';
  /**
   * @var LabelValue[]
   */
  public $labelValues;
  protected $labelValuesType = LabelValue::class;
  protected $labelValuesDataType = 'array';
  /**
   * @var PointData[]
   */
  public $pointData;
  protected $pointDataType = PointData::class;
  protected $pointDataDataType = 'array';

  /**
   * @param LabelValue[]
   */
  public function setLabelValues($labelValues)
  {
    $this->labelValues = $labelValues;
  }
  /**
   * @return LabelValue[]
   */
  public function getLabelValues()
  {
    return $this->labelValues;
  }
  /**
   * @param PointData[]
   */
  public function setPointData($pointData)
  {
    $this->pointData = $pointData;
  }
  /**
   * @return PointData[]
   */
  public function getPointData()
  {
    return $this->pointData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TimeSeriesData::class, 'Google_Service_Monitoring_TimeSeriesData');
