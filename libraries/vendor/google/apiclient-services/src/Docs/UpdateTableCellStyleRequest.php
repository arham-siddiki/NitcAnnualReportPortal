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

namespace Google\Service\Docs;

class UpdateTableCellStyleRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $fields;
  /**
   * @var TableCellStyle
   */
  public $tableCellStyle;
  protected $tableCellStyleType = TableCellStyle::class;
  protected $tableCellStyleDataType = '';
  /**
   * @var TableRange
   */
  public $tableRange;
  protected $tableRangeType = TableRange::class;
  protected $tableRangeDataType = '';
  /**
   * @var Location
   */
  public $tableStartLocation;
  protected $tableStartLocationType = Location::class;
  protected $tableStartLocationDataType = '';

  /**
   * @param string
   */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /**
   * @return string
   */
  public function getFields()
  {
    return $this->fields;
  }
  /**
   * @param TableCellStyle
   */
  public function setTableCellStyle(TableCellStyle $tableCellStyle)
  {
    $this->tableCellStyle = $tableCellStyle;
  }
  /**
   * @return TableCellStyle
   */
  public function getTableCellStyle()
  {
    return $this->tableCellStyle;
  }
  /**
   * @param TableRange
   */
  public function setTableRange(TableRange $tableRange)
  {
    $this->tableRange = $tableRange;
  }
  /**
   * @return TableRange
   */
  public function getTableRange()
  {
    return $this->tableRange;
  }
  /**
   * @param Location
   */
  public function setTableStartLocation(Location $tableStartLocation)
  {
    $this->tableStartLocation = $tableStartLocation;
  }
  /**
   * @return Location
   */
  public function getTableStartLocation()
  {
    return $this->tableStartLocation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpdateTableCellStyleRequest::class, 'Google_Service_Docs_UpdateTableCellStyleRequest');
